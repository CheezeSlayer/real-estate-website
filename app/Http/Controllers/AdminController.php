<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.index');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'province' => 'required|not_in:choose',
            'city' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'type' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'floor_space' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        $query = [
            ['province', '=', $data['province']],
            ['city', '=', $data['city']],
            ['address', '=', $data['address']],
            ['postal_code', '=', $data['postal_code']],
        ];
        $home = \DB::table('homes')->where($query)->exists();
        if( $home == true ) {
            return redirect('/admin/home/create')->with('error', 'Record Already Exists')->withInput();
        }
        $home = auth()->user()->home()->create($data);
        return redirect('/admin')->with('success', 'New Home Registered');
    }

    public function destroy(Home $home) {
        $home->delete();
        return redirect()->action('HomeController@list');
    }

    public function update(Home $home, Request $request) {
        $data = $request->validate([
            'province' => 'required|not_in:choose',
            'city' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'type' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'floor_space' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        $query = [
            ['province', '=', $data['province']],
            ['city', '=', $data['city']],
            ['address', '=', $data['address']],
            ['postal_code', '=', $data['postal_code']],
        ];
        $home_exists = \DB::table('homes')->where($query)->exists();
        if( $home_exists == true ) {
            return redirect()->back()->with('error', 'Record Already Exists')->withInput();
        };
        $home->fill([
            'province' => $data['province'],
            'city' =>  $data['city'],
            'address' =>  $data['address'],
            'postal_code' =>  $data['postal_code'],
            'type' =>  $data['type'],
            'bedrooms' =>  $data['bedrooms'],
            'bathrooms' =>  $data['bathrooms'],
            'floor_space' =>  $data['floor_space'],
            'price' =>  $data['price'],
            'description' =>  $data['description']
        ]);
        $home->save();
        return redirect()->back()->withInput($request->flash())->with('success', 'Home Updated');
    }
}
