<?php

require_once 'Mahasiswa.php';
require_once 'MhsBeasiswa.php';
require_once 'Kelas.php';

$mhs1 = new MhsBeasiswa(1, "Alice Thymefield", "123456", "IMT", 
"alicethymefield@gmail.com", "alice.webp", 3.8, "Gold");

$mhs2 = new MhsBeasiswa();
$mhs2->setId(2);
$mhs2->setNama("Ukinami Yuzuha");
$mhs2->setNim("654321");
$mhs2->setJurusan("IMT");
$mhs2->setEmail("ukinami.yuzuha@gmail.com");
$mhs2->setFoto("yuzuha.webp");
$mhs2->setIpk(3.9);
$mhs2->setJenisBeasiswa("Platinum");

$kelas1 = new Kelas("505", $mhs1);
$kelas2 = new Kelas("506", $mhs2);

$kelas1->tampilkanKelas();
$kelas2->tampilkanKelas();