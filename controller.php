<?php

namespace App\Controllers;
use App\Models\BukukuModel;

class Bukuku extends BaseController
{
    protected $bukukuModel;

    public function __construct()
    {
        $this->bukukuModel = new BukukuModel();
    }

    public function index()
    {
        $data['bukuku'] = $this->bukukuModel->findAll();
        return view('bukuku/index', $data);
    }

    public function tambah()
    {
        return view('bukuku/tambah');
    }

    public function simpan()
    {
        $this->bukukuModel->save([
            'judul' => $this->request->getPost('judul'),
            'pengarang' => $this->request->getPost('pengarang'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
            'isbn' => $this->request->getPost('isbn')
        ]);
        return redirect()->to('/bukuku');
    }

    public function edit($id)
    {
        $data['buku'] = $this->bukukuModel->find($id);
        return view('bukuku/edit', $data);
    }

    public function update($id)
    {
        $this
