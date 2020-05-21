<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $number_of_projects = auth()->user()->projects->count();

        // dd($number_of_projects);

        return view('home', [ 'number_of_projects' => $number_of_projects, ]);
    }
}
