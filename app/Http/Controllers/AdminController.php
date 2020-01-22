<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use App\bencana;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  {

    if(!Session::get('/admin')){
      return redirect('/admin');
    }else {
      return view('admin.bpbd');
    }
}

public function rekap(){
  if(!Session::get('/admin')){
    return redirect('/admin');
  }else {
    $bencanas = Bencana::sortable()->paginate(5);
  return view('bpbd.index', compact('bencanas'));
}
}

public function verif(Request $request){
  if(!Session::get('/admin')){
    return redirect('/admin');
  }else {
  $bencana = bencana::find($request->id);
  $bencana->status = $request->status;
  $bencana->save();
  return redirect('admin/bpbd/rekap')->with('success','Laporan berhasil diverifikasi!');
}
}


public function login(){
  return view('admin.login');
}
  public function loginPost(Request $request){
  $email = $request->email;
  $password = $request->password;
  if($email=="sasasa@gmail.com"){
    if($password=="sasasa"){
      Session::put('email',$email);
      Session::put('/admin',TRUE);
      return redirect('/admin/bpbd');
    } else if($email=="sasasa@gmail.com") {
      return redirect('/admin');
    }
    } else {
      return redirect('/admin');
    }
}
public function logout(){
       Session::flush();
       return redirect('/admin');
     }

}
