<?php

class Mahasiswa_model {
    private $mhs = [
        [
            'nama' => 'Abu Abdirohman',
            'nim' => '1301615354',
            'email' => 'abuabdirohman4@gmail.com',
            'jurusan' => 'Informatika'            
        ],
        [
            'nama' => 'Azati Hanani',
            'nim' => '1301413354',
            'email' => 'hananimania@gmail.com',
            'jurusan' => 'Administrasi Bisnis'            
        ]
    ];

    public function getAllMahasiswa() {
        return $this->mhs;
    }
}