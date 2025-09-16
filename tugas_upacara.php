<?php
$jumlah_peserta = 100;
$lebar_lapangan = 20;
$pemimpin_pasukan = 5;

$kolom = $jumlah_peserta / $lebar_lapangan - $pemimpin_pasukan;
$baris = $lebar_lapangan - $pemimpin_pasukan;
$kelompok = $baris / $pemimpin_pasukan;

$x = 1;
for ($i= 0; $i< $lebar_lapangan; $i++){
    echo "x"

}
         if ( $x == $kelompok ){
            
            for ($a = 0; $a <$kolom -1; $a++){
                echo "&nbsp; &nbsp;";
            }
   echo "p";
   echo "<br>";
   $x = 0;
   continue;
}
   $x++;
   echo "<br>"
}