<?php

namespace App\Models;
use CodeIgniter\Model;

class BukukuModel extends Model
{
    protected $table = 'bukuku';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'pengarang', 'penerbit', 'tahun_terbit', 'isbn'];
}
