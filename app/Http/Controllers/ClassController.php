<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MOdels\Addclass;
class ClassController extends Controller
{
    public function save(Request $request){
        $cls= New Addclass();
        $cls->name = $request->input('name');
        $cls->section = $request->input('section');
        $cls->strength = $request->input('strength');
        $cls->save();
        return redirect('adclass');
    }
    public function Showclass(){
        $cls=Addclass::all();
        return view('Teacher.Showclass',compact('cls'));
    }
    public function cdestroy($id){
        $cls=Addclass ::find($id);
        $cls->delete();
        return redirect('showcls');
}
public function cEdit($id){
    $cls=Addclass::find($id);
    return view('Teacher.editclass',compact('cls'));

}
public function cupdate(Request $request,$id){
    // dd($request->all());
    $cls=Addclass::find($id);
    $cls->name=$request->name;
    $cls->section=$request->section;
    $cls->strength=$request->strength;
    $cls->save();
    return redirect('showcls');
}
}