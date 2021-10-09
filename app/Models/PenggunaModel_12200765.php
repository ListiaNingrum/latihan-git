<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengguna extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna_1200765';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];
   
}
