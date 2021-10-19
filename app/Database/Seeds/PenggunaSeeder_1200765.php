<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama'      => 'Listia Ningrum',
                'password'  => md5('12200765')
            ],
            [
                'nama'      => 'creator',
                'password'  => md5('23456')
            ],
            [
                'nama'      => '12200765',
                'password'  => md5('Listia Ningrum')
            ]
        ];

        $p = new Pengguna();
        $p->insertBatch($data);
    }
}
