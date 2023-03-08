<?php
if(isset($_GET['submit'])) 
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $praktikum = $_GET['praktikum'];
    $grade = "";
    $jumlah = $uts + $uas + $praktikum;
    $rata = round ($jumlah / 3, 2);
    
if ($rata >= 0 && $rata <= 30){
    $grade = 'E';
} elseif ($rata >= 36 && $rata <= 50){
    $grade = 'D';
} elseif ($rata >= 51 && $rata <= 69){
    $grade = 'C';
} elseif ($rata >= 70 && $rata <= 80){
    $grade = 'B';
} elseif ($rata >= 81 && $rata <= 100){
    $grade = 'A';
} else {
    $grade = 'I';
}

    echo "Nama: $nama <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS: $uas <br>";
    echo "Nilai Praktikum: $praktikum <br>";
    echo "Rata: $rata <br>";
    echo "Grade: $grade <br>";