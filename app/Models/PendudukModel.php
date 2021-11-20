<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{

    protected $table = 'tb_penduduk';
    protected $useTimestamps = true;

    public function getPenduduk($slug = false)
    {

        if ($slug == false)
        {

            return $this->findAll();

        }

        return $this->where(['slug' => $slug])->first();

    }

}