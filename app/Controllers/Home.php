<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Lorem Gallery',
            'css' => '/styles/home.css'
        ];

        return view('home/home', $data);
    }
}
