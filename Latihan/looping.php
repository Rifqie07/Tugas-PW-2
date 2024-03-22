<?php
// looping php
// pengulanga angka dari 1 s.d 10
for ($x=1; $x<=10; $x++){
    echo "<br> $x";
}

// pengulangan angka dari 10 s.d 1
for ($y=10; $y>=1; $y=$y-1){
    echo "<br> $y";
}

for ($x=1; $x<=10; $x++){
    echo "<br> Aku Ganteng Bangetz $x";
}

?>

<form>
Jumlah Masa Aksi:
<?php
for ($masa=1; $masa<=100; $masa=$masa+1){
    echo "<input type='radio' name='jml_masa' value='$masa'> ". $masa;
}
?>
</form>
