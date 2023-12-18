<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function clientReport()
    {
        return view('client-report');
    }

    public function clientSamples()
    {
        return view('client-samples');
    }

    public function clientTransactions()
    {
        return view('client-transactions');
    }

    public function userLogin()
    {
        return view('auth.user.login');
    }

    public function userRegister()
    {
        return view('auth.user.register');
    }
    public function staffLogin()
    {
        return view('auth.staff.login');
    }

    public function staffRegister()
    {
        return view('auth.staff.register');
    }
    public function labLogin()
    {
        return view('auth.lab.login');
    }

    public function labRegister()
    {
        return view('auth.lab.register');
    }
    public function adminLogin()
    {
        return view('auth.admin.login');
    }

    public function adminRegister()
    {
        return view('auth.admin.register');
    }
    public function staffDashboard()
    {
        return view('staff-dashboard');
    }
    public function superAdminDashboard()
    {
        return view('super-admin');
    }


    public function userDashboard()
    {
        return view('user-dasboard');
    }
}
