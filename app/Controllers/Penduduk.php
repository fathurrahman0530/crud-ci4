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

    public function create()
    {

        session();
        $data   = [

            'title' => 'Tambah Data Penduduk',
            'validation' => \Config\Services::validation()

        ];

        return view('penduduk/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[tb_penduduk.nik]',
                'errors'=> [
                    'required'  => 'NIK harus diisi...!!!',
                    'is_unique' => 'NIK sudah terdaftar...!!'
                ],
            ],
            'namaPenduduk' =>[
                'rules' => 'required',
                'errors'=> [
                    'required' => 'Nama penduduk harus diisi...!!!'
                ],
            ],
            'alamat' => [
                'rules' => 'required',
                'errors'=> [
                    'required' => '{field} harus diisi'
                ],
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/penduduk/create')->withInput()->with('validation', $validation);
        }

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
