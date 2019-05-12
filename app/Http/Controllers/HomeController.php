<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employer;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userCount = User::all()->count();
        $employerCount = Employer::all()->count();

        return view('home', compact('userCount', 'employerCount'));

    }
}
