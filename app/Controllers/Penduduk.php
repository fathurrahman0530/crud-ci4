<?php

namespace App\Controllers;

use App\Models\PendudukModel;

class Penduduk extends BaseController
{

    protected $pendudukModel;

    public function __construct()
    {

        $this->pendudukModel = new PendudukModel();

    }

    public function index()
    {

        $penduduk = $this->pendudukModel->findAll();

        $data = [
            'title' => 'Penduduk',
            'penduduk' => $this->pendudukModel->getPenduduk(),
        ];

        return view('penduduk/index', $data);

    }

    public function detail($slug)
    {

        $data       = [

            'title'     => 'Data Penduduk',
            'penduduk'  => $this->pendudukModel->getPenduduk($slug),

        ];

        return view('penduduk/detail', $data);

    }

}