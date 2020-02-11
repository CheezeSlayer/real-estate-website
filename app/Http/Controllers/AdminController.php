<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function create() {
        return view('admin.home.create');
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

    public function destroy(\App\Home $home) {
        $home->delete();
        return redirect()->action('HomeController@list');
    }
}
