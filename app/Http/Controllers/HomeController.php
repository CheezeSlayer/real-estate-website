<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(\App\Home $home)
    {
        return view('admin.home.show', compact('home'));
    }

    public function list() {
        
        // dd($homes);
        if( empty($homes) ) {
            $homes = \App\Home::all();
        }

        foreach($homes as $home) {
            $home->price = number_format($home->price);
        }
        return view('admin.home.list', compact('homes'));
    }

    public function create() {
        return view('admin.home.create');
    }

    public function edit(\App\Home $home) {
        return view('admin.home.edit', compact('home'));
    }

    private function is_not_null($var) {
        return !is_null($var);
    }

    public function index(Request $request) {
        $data = $request->validate([
            'province' => 'required|not_in:choose',
            'city' => 'required',
            'address' => 'nullable',
            'postal_code' => 'nullable',
            'type' => 'nullable|not_in:choose',
            'bedrooms' => 'nullable',
            'bathrooms' => 'nullable',
            'floor_space' => 'nullable',
            'price' => 'nullable',

            // 'toggle_advanced_options' => 'nullable'
        ]);
        $query = [];
        $data = array_filter($data, array($this, "is_not_null"));
        foreach($data as $key => $attribute) {
            array_push($query, [$key, '=', $data[$key]] );
        };
        $homes= \DB::table('homes')->where($query)->get();
        return view('admin.home.list', compact('homes'))->withInput($request->flash());
    }
}
