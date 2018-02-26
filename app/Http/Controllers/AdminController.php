<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Students;
use Auth;
use DB;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = App\Students::all();
        return view('admin');
    }
    public function update(Request $request, $id)
    {
  $id = Auth::id();
  
  $students = App\Students::all();
  return view('detail',compact('students', 'users')); 
    }
}
