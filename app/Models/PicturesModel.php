<?php

namespace App\Models;

use CodeIgniter\Model;

class PicturesModel extends Model
{
    protected $table = 'pictures';
    protected $useTimestamps = true;
    protected $allowedFields = ['image', 'title', 'description', 'price', 'slug', 'uploader'];

    public function getPicture($id = null)
    {
        if ($id == null) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
