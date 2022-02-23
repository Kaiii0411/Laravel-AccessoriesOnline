<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if($admin_id)
        {
            return Redirect::to('admin');
        } 
        else 
        {
            return Redirect::to('admin/login') ->send();
        }
    }
    public function login_page()
    {
        return view('admin_login');
    }

    public function index_page()
    {
        $this->AuthLogin();
        return view('admin.admin_home');
    }

    public function admin_home(Request $request)
    {
        $email = $request -> admin_email;
        $password = $request -> admin_password;

        $result = DB::table('tbl_admin') -> where('admin_email', $email) -> where('admin_password', $password) -> first();
        if($result)
        {
            Session::put('admin_name', $result -> admin_name);
            Session::put('admin_id' , $result -> admin_id);
            return Redirect::to('admin');
        }
        else
        {
            Session::put('message', 'Bạn nhập sai Username hoặc Password');
            return Redirect::to('admin/login');
        }
    }

    public function logout_page()
    {
        $this->AuthLogin();
        Session::put('admin_mail', null);
        Session::put('admin_id', null);
        return Redirect::to('admin/login');
    }
}
