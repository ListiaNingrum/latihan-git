<?php
namespace App\Controller;

class Selamatdatang extends BaseController {
    public function hal_awal() {
        return 'hello saya belajar CI4';
    }
    public function beranda_login(){
        return view(name: 'halaman/login');
    }
public function daftar_member(){
        return view(name: 'halaman/daftar_member');
    }
}
