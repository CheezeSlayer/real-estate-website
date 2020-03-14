<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Agent;

class AgentController extends Controller
{
    //
    public function list() {
        if(empty($agents) ) {
            $agents = \App\Agent::all();
        }
        return view('agent.agent_list', compact('agents'));
    }

    public function show(Agent $agent) {
        $agent_phone_number = $agent->phone_number;
        $agent_phone_number_formatted = $agent_phone_number[0].'-'.'('.substr($agent_phone_number, 1, 3).') '.substr($agent_phone_number, 3, 3).'-'.substr($agent_phone_number,6);
        $agent->phone_number = $agent_phone_number_formatted;
        
        return view('agent.agent_show', compact('agent'));
    }

    // Administrator Agent Views

    public function create() {
        return view('admin.agent.agent_create');
    }

    public function edit(\App\Agent $agent) {
        return view('admin.agent.agent_edit', compact('agent'));
    }
}
