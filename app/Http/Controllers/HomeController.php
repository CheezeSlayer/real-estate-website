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
        $homes = \App\Home::all();
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
}
