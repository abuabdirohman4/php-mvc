<?php

class Mahasiswa_model {
    // private $mhs = [
        //     [
        //         'nama' => 'Abu Abdirohman',
        //         'nim' => '1301615354',
        //         'email' => 'abuabdirohman4@gmail.com',
        //         'jurusan' => 'Informatika'            
        //     ],
        //     [
        //         'nama' => 'Azati Hanani',
        //         'nim' => '1301413354',
        //         'email' => 'hananimania@gmail.com',
        //         'jurusan' => 'Administrasi Bisnis'            
        //     ]
    // ];

    // PDO (PHP Data Object)
    private $dbh; //database handler
    private $stmt;
    
    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=fnd-34-php-mvc';

        try {
            $this->dbh = new PDO($dsn, 'root', 'root');
        } 
        catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}