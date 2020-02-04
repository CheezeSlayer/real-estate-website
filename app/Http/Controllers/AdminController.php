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
            'zip_postal' => 'required',
            'type' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'floor_space' => 'required',
            'price' => 'required',
        ]);
        dd($data);
    }
}
