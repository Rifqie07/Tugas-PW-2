<?php
// function define by user

// fungsi yang tidak mengembalikan nilai
function salam (){
    echo "Assalamu'alaikum Rifqii";
}
salam(); //cetak
echo "<br>";

function panggil($arg){
    echo "Hallo Apa kabar mas $arg";
}
panggil("Angga"); //cetak

echo "<br>";

// Fungsi yang mengembalikan nilai
function hasil($a,$b){
    $c=$a*$b;
    return $c;
}
echo hasil(5,2);

echo "<br>";

// buat fungsi hitung umur
function umur($thn_lahir){
    $thn_sekarang = 2024;
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo umur(2005)

?>