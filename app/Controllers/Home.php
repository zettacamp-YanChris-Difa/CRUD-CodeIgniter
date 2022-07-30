<?php

namespace App\Controllers;

use App\Models\PicturesModel;

class Home extends BaseController
{
    protected $pictureModel;

    public function __construct()
    {
        $this->pictureModel = new PicturesModel();
    }

    public function index()
    {
        $picture = $this->pictureModel->findAll();

        $data = [
            'picture' => $picture,
            'title' => 'Home | Lorem Gallery',
            'css' => '/styles/home.css'
        ];

        return view('home/home', $data);
    }
}
