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

        $homeData = [
            'picture' => $picture,
            'title' => 'Home | Lorem Gallery',
            'css' => '/styles/home.css'
        ];

        $photosData = [
            'picture' => $picture,
            'title' => 'Home | Lorem Gallery',
            'css' => '/styles/photos.css'
        ];

        echo view('home/home', $homeData);
        echo view('photos/photos', $photosData);
    }
}
