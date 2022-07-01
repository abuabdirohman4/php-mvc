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

    // // PDO (PHP Data Object)
        // private $dbh; //database handler
        // private $stmt;
        
        // public function __construct()
        // {
        //     // data source name
        //     $dsn = 'mysql:host=localhost;dbname=fnd_34_php_mvc';

        //     try {
        //         $this->dbh = new PDO($dsn, 'root', 'root');
        //     } 
        //     catch(PDOException $e) {
        //         die($e->getMessage());
        //     }
        // }

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa() 
    {
        // $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->db->query('SELECT * FROM '. $this->table );
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id) 
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        // $query = 'INSERT INTO '. $this->table .' VALUES (0, :nama, :nim, :email, :jurusan)';
        $query = "INSERT INTO mahasiswa VALUES (0, :nama, :nim, :email, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data)
    {
        // $query = "INSERT INTO mahasiswa VALUES (0, :nama, :nim, :email, :jurusan)";
        $query = "UPDATE mahasiswa SET nama = :nama, nim = :nim, email = :email, jurusan = :jurusan WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        // $query = "SELECT * FROM mahasiswa WHERE nama LIKE %keyword%"
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }
}