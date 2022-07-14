<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sub;
class SubController extends Controller
{
    public function save(Request $request){
$sub=new Sub();
$sub->name = $request->input('name');
$sub->credit = $request->input('credit');
$sub->save();
return redirect('adsub');
    }
    public function Showsub(){
        $sub=Sub::all();
        return view('Teacher.Showsub',compact('sub'));
}
public function sdestroy($id){
    $sub=Sub ::find($id);
    $sub->delete();
    return redirect('showsub');
}
public function sEdit($id){
    $sub=Sub::find($id);
    return view('Teacher.editsub',compact('sub'));
}
public function supdate(Request $request,$id)
{
    $sub=Sub::find($id);
    $sub->name=$request->name;
    $sub->credit=$request->credit;
    $sub->save();
    return redirect('showsub');
}
}