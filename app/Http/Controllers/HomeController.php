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
            'city' => 'required_without_all:address,postal_code,type,bedrooms,bathrooms,floor_space,price',
            'address' => 'required_without_all:city,postal_code,type,bedrooms,bathrooms,floor_space,price',
            'postal_code' => 'required_without_all:city,address,type,bedrooms,bathrooms,floor_space,price',
            'type' => 'required_without_all:city,address,postal_code,bedrooms,bathrooms,floor_space,price',
            'bedrooms' => 'required_without_all:city,address,postal_code,type,bathrooms,floor_space,price',
            'bathrooms' => 'required_without_all:city,address,postal_code,type,bedrooms,floor_space,price',
            'floor_space' => 'required_without_all:city,address,postal_code,type,bedrooms,bathrooms,price',
            'price' => 'required_without_all:city,address,postal_code,type,bedrooms,bathrooms,floor_space',
        ]);
        
        $query = [];
        $data = array_filter($data, array($this, "is_not_null"));
        foreach($data as $key => $attribute) {
            array_push($query, [$key, '=', $data[$key]] );
        };

        $homes= \DB::table('homes')->where($query)->get();
        
        // if( $data['city'] != null ) {
        //     $homes_query->where('city', '=', $data['city']);
        // }
        // if( $data['address'] != null ) {
        //     $homes_query->where('address', '=', $data['address']);
        // }
        // if( $data['postal_code'] != null ) {
        //     $homes_query->where('postal_code', '=', $data['postal_code']);
        // }
        // $homes = $homes_query->get();

        return view('admin.home.list', compact('homes'))->withInput($request->flash());
    }
}
