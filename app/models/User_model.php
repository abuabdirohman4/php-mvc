<?php

class User_model {
    // private $nama = 'Abu Abdirohman';
    private $nama = [
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

    public function getUser() {
        return $this->nama;
    }
}