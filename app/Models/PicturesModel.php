<?php

namespace App\Models;

use CodeIgniter\Model;

class PicturesModel extends Model
{
    protected $table = 'pictures';
    protected $useTimestamps = true;

    public function getPicture($slug = null)
    {
        if ($slug == null) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
