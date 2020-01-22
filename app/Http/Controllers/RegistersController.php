<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class RegistersController extends Controller
{
    public function register(Request $request){
      $this -> validate($request, [
        'NIK' => 'required',
        'name' => 'required',
        'username' => 'required',
        'email' => 'required',
        'telephone' => 'required',
        'address' => 'required',
        'password' => 'required',

      ]);

      $candidates = new Candidate;
      $candidates -> NIK = $request -> input('NIK');

      $candidates -> name = $request -> input('name');
      $candidates -> username = $request -> input('username');
      $candidates -> email = $request -> input('email');
      $candidates -> telephone= $request -> input('telephone');
      $candidates -> address = $request -> input('address');
      $candidates -> password = $request -> input('password');
      $candidates -> save();
      return redirect('/login2') -> with('response', 'Register Succesfully');
    }
}
