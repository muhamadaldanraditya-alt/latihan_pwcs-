<?php
date_default_timezone_set('Asia/Jakarta');
$bulan = [
    "January"=>"Januari",
];
// echo "Tanggal dan Waktu saat ini: " . date('d-m-Y H:i:s');
echo date('d-m-Y');//today
echo "<br>";
$tanggal = "31-01-2025";
echo date('Y-m-d',strtotime($tanggal));
echo "<br>";
echo date('Y-m-d', strtotime('+6 days', strtotime($tanggal)));
echo "<br>";
$tgl = date ('d F Y', strtotime($tanggal));
$arr_tgl = explode(" ", $tgl);
echo $arr_tgl[0]." ".$bulan[$arr_tgl[1]]." ".$arr_tgl[2];