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
                'penduduk' => $penduduk,
            ];

            return view('Penduduk/index', $data);

        }

    }