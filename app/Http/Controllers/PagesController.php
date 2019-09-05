<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'Go to store',
            'Go to school',
            'Go to work',
            'Go to concert'
        ];
    
    
        //        return view('welcome')->withTasks($tasks)->withFoo('foo');
        return view('welcome', ['tasks'=>$tasks, 'foo'=> request('title')]);
    
    }


    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }


}
