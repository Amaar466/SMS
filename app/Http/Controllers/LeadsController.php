<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadsController extends Controller
{
    public function index(){
        $lead = lead::all();
        return view('admin.post.leads' , compact('lead'));
    }
    public function insert(Request $request){

        $request->validate([
           "name"=> 'required',       
           "email"=> 'required',       
           "phone"=> 'required'     
        ]);   
      
        
        $lead = Lead::create([ 'lead' => json_encode($request->except(['_token']))]);
        return response('ok', 200)
                  ->header('Content-Type', 'text/plain');
    }
}