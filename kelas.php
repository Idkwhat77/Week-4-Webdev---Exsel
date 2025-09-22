<?php

class Kelas {
    protected $ruangkelas;
    protected Mahasiswa $mahasiswa;

    public function __construct($ruangkelas = null, Mahasiswa $mahasiswa= null) {
        $this->ruangkelas = $ruangkelas;
        $this->mahasiswa = $mahasiswa;
    }

    public function getRuangKelas() {
        return $this->ruangkelas;
    }
    public function getMahasiswa() {
        return $this->mahasiswa;
    }
    public function setRuangKelas($ruangkelas) {
        $this->ruangkelas = $ruangkelas;
    }
    public function setMahasiswa(Mahasiswa $mahasiswa) {
        $this->mahasiswa = $mahasiswa;
    }

    public function tampilkanKelas() {
        echo "Ruang Kelas " . $this->ruangkelas . "<br>";
        if ($this->mahasiswa) {
            $this->mahasiswa->tampilkanMahasiswa();
        } else {
            echo "Tidak ada mahasiswa di kelas ini.<br>";
        }
    }
}