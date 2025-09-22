<?php

class Mahasiswa {
    protected $id, $nama, $nim, $jurusan, $email, $foto;

    public function __construct($id = null, $nama = null, 
    $nim = null, $jurusan = null, $email = null, $foto = null) {
        $this->id = $id;
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->email = $email;
        $this->foto = $foto;
    }

    public function getId() {
        return $this->id;
    }
    public function getNama() {
        return $this->nama;
    }
    public function getNim() {
        return $this->nim;
    }
    public function getJurusan() {
        return $this->jurusan;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getFoto() {
        return $this->foto;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setNama($nama) {
        if (!is_string($nama)) {
            throw new Exception("Nama harus berupa string");
        } 
        $this->nama = $nama;    
    }
    public function setNim($nim) {
        $this->nim = $nim;
    }
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function tampilkanMahasiswa() {
        echo "ID: " . $this->id . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "<img src='" . $this->foto . "' alt='Foto Mahasiswa' width='100'><br>";
    }
}