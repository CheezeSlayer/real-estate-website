<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    //
    public function list() {
        if( empty($agents) ) {
            $agents = \App\Agent::all();
        }
        return view('agent.agent_list', compact('agents'));
    }

    public function create() {
        return view('admin.agent.agent_create');
    }
}
