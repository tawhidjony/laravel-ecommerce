<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class SuperAdminController extends Controller
{

    public function index()
    {
        // $this->AdminAuthCheck();
        return view('Admin.dashboard');

    }

   public function logout()
   {
        Session::flush();
        return Redirect::to('/Admin');
   }

   public function AdminAuthCheck()
    {
       $admin_id=Session::get('admin_id');
       if($admin_id){
           return;
       }else{
           return Redirect::to('/Admin')->send();
       }

   }
}
