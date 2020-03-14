<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Agent;

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

    // Admin Home Functions
    public function home_store(Request $request) {
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

    public function home_destroy(Home $home) {
        $home->delete();
        return redirect()->action('HomeController@list')->with('success', 'Home Delete Success');
    }

    public function home_update(Home $home, Request $request) {
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

        $data['user_id'] = auth()->user()->id;
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

    // Admin Agent Functions
    public function agent_store(Request $request) {
        $data = $request->validate([
            'province' => 'required:not_in:choose',
            'city' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required|regex:/[2-9][0-9]{9}/'
        ]);

        $query = [
            ['province', '=', $data['province']],
            ['city', '=', $data['city']],
            ['first_name', '=', $data['first_name']],
            ['last_name', '=', $data['last_name']],
        ];
        
        $data['user_id'] = auth()->user()->id;
        $agent = \DB::table('agents')->where($query)->exists();
        if( $agent == true ) {
            return redirect('/admin/agent/create')->with('error', 'Record Already Exists')->withInput();
        }
        $agent = auth()->user()->agent()->create($data);
        return redirect('/admin')->with('success', 'New Agent Registered');
    }

    public function agent_destroy(Agent $agent) {
        $agent->delete();
        return redirect()->action('AgentController@list')->with('success', 'Agent Delete Success');
    }

    public function agent_update(Agent $agent, Request $request) {
        $data = $request->validate([
            'province' => 'required|not_in:choose',
            'city' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);
        $query = [
            ['province', '=', $data['province']],
            ['city', '=', $data['city']],
            ['first_name', '=', $data['first_name']],
            ['last_name', '=', $data['last_name']],
            ['email', '=', $data['email']],
        ];

        $data['user_id'] = auth()->user()->id;
        $agent_exists = \DB::table('agents')->where($query)->exists();
        if( $agent_exists == true ) {
            return redirect()->back()->with('error', 'Record Already Exists')->withInput();
        };
        $agent->fill([
            'province' => $data['province'],
            'city' =>  $data['city'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email']
        ]);
        $agent->save();
        return redirect()->back()->withInput($request->flash())->with('success', 'Agent Updated');
    }
}
