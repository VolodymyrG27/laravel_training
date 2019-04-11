<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        $people = [
            "Joshua Kimich", 'Robert Lewandowski', 'Eric Barnes'
        ];
        return view('pages.about', compact('people'));
    }
    
    public function contact()
    {
        return view('pages.contact');
    }
}
