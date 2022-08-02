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

    public function details($id)
    {
        $photoDetailsData = [
            'picture' => $this->pictureModel->getPicture($id),
            'title' => 'Details | Lorem Gallery',
            'css' => '/styles/photoDetails.css'
        ];
        return view('photos/photoDetails', $photoDetailsData);
    }

    public function delete($id) 
    {
        $this->pictureModel->delete($id);
        return redirect()->to('/');
    }

    public function create()
    {
        $data = [
            'title' => 'Post Picture | Lorem Gallery',
            'css' => '/styles/photoForms.css'
        ];

        return view('photos/createPhoto', $data);
    }

    public function save()
    {
        $sentData = $this->request->getVar();
        $this->pictureModel->save([
            'image' => $sentData['image'],
            'title' => $sentData['title'],
            'description' => $sentData['description'],
            'price' => $sentData['price'],
            'slug' => $sentData['title'],
            'uploader' => $sentData['uploader'],
        ]);

        return redirect()->to('/');
    }

    public function edit($id)
    {
        $data = [
            'picture' => $this->pictureModel->getPicture($id),
            'title' => 'Edit Picture | Lorem Gallery',
            'css' => '/styles/photoForms.css'
        ];

        return view('photos/editPhoto', $data);
    }

    public function update($id)
    {
        $this->pictureModel->update($id, [
                'image' => $this->request->getPost('image'),
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'price' => $this->request->getPost('price'),
                'uploader' => $this->request->getPost('uploader'),
            ]);

            return redirect()->to('/');
    }
}
