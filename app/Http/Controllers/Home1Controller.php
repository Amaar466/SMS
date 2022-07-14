<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ccreate(Request $request )
    {
        $user = Teacher::create([
            'name' => $request['name'],
            'fname' => $request['fname'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => ''
        ]);

        if($request['rollnumber']){
            $user->rollenumber = $request['rollnumber'];
        }

        if($request['qualification']){
            $user->qualification = $request['qualification'];
        }

        if($request['class']){
            $user->class = $request['class'];
        }

        if($request['role']){
            $user->role = $request['role'];
        }
        // if($request['assign']){
        //     $user->class = $request['assign'];
        // }
        
        $user->save();
        return back();
    }
   
    public function Show($role){
        $emp= user::where('role',$role)->get();
        return view('Teacher.Tshow',compact('emp'));
    }
    public function tdestroy($id){
        $emp=user ::find($id);
        $emp->delete();
        //dd($emp);
        return redirect('show/Teacher');
        
    }
    public function stdestroy($id){
        $emp=user ::find($id);
        $emp->delete();
        //dd($emp);
        return redirect('Sshow/Student');
        
    }
    public function Tedit($id){
        // dd($id);
            $emp=user::find($id);
            return view('Teacher.Tedit',compact('emp'));
    }

    public function stedit($id){
        // dd($id);
            $emp=user::find($id);
            return view('student.stedit',compact('emp'));
    }
    public function Tupdate(Request $request, $id){
        $emp=user::find($id);
        $emp->name=$request->name;
        $emp->fname=$request->fname;
        $emp->qualification=$request->qualification;
        $emp->address=$request->address;
        $emp->phone=$request->phone;
        $emp->class=$request->class;
        $emp->email=$request->email;
        $emp->save();
        return redirect('show/teacher');   

    }
    public function stupdate(Request $request, $id){
        $emp=user::find($id);
        $emp->name=$request->name;
        $emp->fname=$request->fname;
        $emp->qualification=$request->qualification;
        $emp->address=$request->address;
        $emp->phone=$request->phone;
        $emp->class=$request->class;
        $emp->email=$request->email;
        $emp->save();
        return redirect('Sshow/student');   

    }
    // student controllers
    public function Sshow(){
        $std=user::all();
        
        return view('student.Sshow',compact('std'));
       
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('login');
    }       
    }

