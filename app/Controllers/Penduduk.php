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

        if (empty($data['penduduk'])) {
            
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nik penduduk ' . $slug . ' tidak ditemukan..!!');

        }

        return view('penduduk/detail', $data);

    }

    public function create(){
        
        $data   = [

            'title' => 'Tambah Data Penduduk',

        ];

        return view('penduduk/create', $data);

    }

    public function save(){
        
        // $slug = url_title($this->request->getVar('nik'), '-', true);

       $this->pendudukModel->save([

            'nik' => $this->request->getVar('nik'),
            'nama_penduduk' => $this->request->getVar('namaPenduduk'),
            'jenis_kelamin' => $this->request->getVar('jenisKelamin'),
            'agama' => $this->request->getVar('agama'),
            'alamat' => $this->request->getVar('alamat'),
            'image' => $this->request->getVar('gambar'),
            'slug' => $this->request->getVar('nik')

       ]);

       session()->setFlashdata('pesan', 'Data penduduk berhasil ditambahkan');

       return redirect()->to('/penduduk');

    }

}