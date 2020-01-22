<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use App\bencana;


class BNPBController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()  {

  if(!Session::get('/bnpb')){
    return redirect('/bnpb');
  }else {
    return view('bnpb.index');
  }
}

// public function rekap(){
// $bencanas = Bencana::all()->toArray();
// return view('bnpb.index', compact('bencanas'));
// }

public function rekap(){
  if(!Session::get('/bnpb')){
    return redirect('/bnpb');
  }else {
  $bencanas = Bencana::sortable()->paginate(5);
  return view('bnpb.rekap', compact('bencanas'));
}
}

public function login(){
return view('bnpb.login');
}
public function loginPost2(Request $request){
$email = $request->email;
$password = $request->password;
if($email=="bnpb@gmail.com"){
  if($password=="bnpb1234"){
    Session::put('email',$email);
    Session::put('/bnpb',TRUE);
    return redirect('/bnpb/index');
  }
  } else {
    return redirect('/bnpb');
  }
}
public function logout(){
     Session::flush();
     return redirect('/bnpb');
   }

}
