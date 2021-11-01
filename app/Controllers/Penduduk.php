<?php

    namespace App\Controllers;

    class Penduduk extends BaseController
    {

        public function index()
        {

            $data = [
                'title' => 'Penduduk',
            ];

            $db = \Config\Database::connect();
            $penduduk = $db->query("SELECT * FROM tb_penduduk");

            dd($penduduk);

            return view('Penduduk/index', $data);

        }

    }