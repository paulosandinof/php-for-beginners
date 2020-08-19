<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about', ['company' => 'Laracasts']);
    }

    public function contact()
    {
        return view('contact');
    }
}
