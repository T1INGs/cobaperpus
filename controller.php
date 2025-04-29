<?php

namespace App\Controllers;
use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $data['buku'] = $this->bukuModel->findAll();
        return view('buku/index', $data);
    }

    public function tambah()
    {
        return view('buku/tambah');
    }

    public function simpan()
    {
        $this->bukuModel->save([
            'judul' => $this->request->getPost('judul'),
            'pengarang' => $this->request->getPost('pengarang'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
            'isbn' => $this->request->getPost('isbn')
        ]);
        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        $data['buku'] = $this->bukuModel->find($id);
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $this
