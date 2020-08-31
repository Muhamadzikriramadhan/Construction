<?php

class Kelas{
    public $nama_siswa,
           $nis,
           $rayon,
           $rombel;

 public function getCetak(){
     return "$this->nama_siswa, $this->nis, $this->rayon, $this->rombel";
 }
 public function __construct  ($nama_siswa="Nama Siswa", $nis=0,$rayon="Rayon",$rombel="Rombel"){
     $this->nama_siswa = $nama_siswa;
     $this->nis = $nis;
     $this->rayon = $rayon;
     $this->rombel = $rombel;
 }
}

$siswa1 = new kelas("Muhamad Zikri Ramadhan",11900518,"WIK 5","RPL XI-4");
$siswa2 = new kelas("Muhamad Syafiq Haikal",11900517,"WIK 5","RPL XI-3");
$siswa3 = new kelas("Muhamad Farhan Muizadin",11900516,"WIK 5","RPL XI-2");
$siswa4 = new kelas("Arjuna Arrasyid",11900519,"WIK 5","RPL XI-2");

echo "Nama Siswa: " . $siswa1->getCetak();
echo "<br>";
echo "Nama Siswa: " . $siswa2->getCetak();
echo "<br>";
echo "Nama Siswa: " . $siswa3->getCetak();
echo "<br>";
echo "Nama Siswa: " . $siswa4->getCetak();
echo "<br>";