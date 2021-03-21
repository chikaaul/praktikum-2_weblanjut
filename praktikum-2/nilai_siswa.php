<?php
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$UTS = $_POST['UTS'];
$UAS = $_POST['UAS'];
$nilai = $_POST['nilai'];
$nilai_akhir = (30*$UTS/100 + 35*$UAS/100 + 35*$nilai/100);

if(!empty($proses)){
    echo 'proses : '.$proses;
    echo '</br>Nama : '.$nama;
    echo '<br>Mata Kuliah : '.$matkul;
    echo '</br>Nilai UTS : '.$UTS;
    echo '</br>Nilai UAS : '.$UAS;
    echo '</br>NIlai Tugas Praktikum : '.$nilai;
    echo '</br>Nilai Total : '.number_format($nilai_akhir,2,',','.');
    

    echo '</br>';
    if($nilai_akhir <= 35){
        $grade='E';
        echo 'Grade Anda E';
    }elseif($nilai_akhir <= 55){
        $grade='D';
        echo 'Grade Anda D';
    }elseif($nilai_akhir <= 69){
        $grade='C';
        echo 'Grade Anda C';
    }elseif($nilai_akhir <= 84){
        $grade='B';
        echo 'Grade Anda B';
    }elseif($nilai_akhir <= 100){
        $grade='A';
        echo 'Grade Anda A';
    }else {
        $grade='I';
        echo 'Grade Anda I';
    }

    switch($grade){
        case 'E':
            echo '</br>Sangat Kurang';
            break;
        case 'D':
            echo '</br>Kurang';
            break;
        case 'C':
            echo '</br>Cukup';
            break;
        case 'B':
            echo '</br>Memuaskan';
            break;
        case 'A':
            echo '</br>Sangat Memuaskan';
            break;
        case 'I':
            echo '</br>Tidak Ada';
            break;
    }


    echo '</br>';
    if($nilai_akhir > 55){
        echo 'Mahasiswa dinyatakan LULUS!';
    }else {
        echo 'Mahasiswa dinyatakan TIDAK LULUS!';
    }
}

?>