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

        $homeData = [
            'picture' => $this->pictureModel->getPicture(),
            'title' => 'Home | Lorem Gallery',
            'css' => '/styles/home.css'
        ];

        $photosData = [
            'picture' => $this->pictureModel->getPicture(),
            'title' => 'Home | Lorem Gallery',
            'css' => '/styles/photos.css'
        ];

        echo view('home/home', $homeData);
        echo view('photos/photos', $photosData);
    }

    public function details($slug)
    {
        $picture = $this->pictureModel->getPicture($slug);

        dd($picture);
    }

    public function create()
    {
        $data = [
            'title' => 'Post Picture | Lorem Gallery',
            'css' => '/styles/photos.css'
        ];

        return view('photos/createPhotos', $data);
    }
}
