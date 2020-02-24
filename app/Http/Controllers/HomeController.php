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

    public function index(Request $request) {
        $data = $request->validate([
            'province' => 'required|not_in:choose',
            'city' => 'required_without_all:address,postal_code,type,bedrooms,bathrooms,floor_space,price',
            'address' => 'required_without_all:city,postal_code,type,bedrooms,bathrooms,floor_space,price',
            'postal_code' => 'required_without_all:city,address,type,bedrooms,bathrooms,floor_space,price',
            'type' => 'required_without_all:city,address,postal_code,bedrooms,bathrooms,floor_space,price',
            'bedrooms' => 'required_without_all:city,address,postal_code,type,bathrooms,floor_space,price',
            'bathrooms' => 'required_without_all:city,address,postal_code,type,bedrooms,floor_space,price',
            'floor_space' => 'required_without_all:city,address,postal_code,type,bedrooms,bathrooms,price',
            'price' => 'required_without_all:city,address,postal_code,type,bedrooms,bathrooms,floor_space',
        ]);
        dd($data);
    }
}
