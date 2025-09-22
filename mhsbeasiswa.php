<?php

require_once 'Mahasiswa.php';

class MhsBeasiswa extends Mahasiswa {
    private $ipk;
    private $jenisBeasiswa;

    public function __construct($id = null, $nama = null, 
    $nim = null, $jurusan = null, $email = null, $foto = null, $ipk = null, $jenisBeasiswa = null) {
        parent::__construct($id, $nama, $nim, $jurusan, $email, $foto);
        $this->ipk = $ipk;
        $this->jenisBeasiswa = $jenisBeasiswa;
    }

    public function getIpk() {
        return $this->ipk;
    }
    public function getJenisBeasiswa() {
        return $this->jenisBeasiswa;
    }
    public function setIpk($ipk) {
        $this->ipk = $ipk;
    }
    public function setJenisBeasiswa($jenisBeasiswa) {
        $this->jenisBeasiswa = $jenisBeasiswa;
    }
}

?>