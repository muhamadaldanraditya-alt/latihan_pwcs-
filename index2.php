<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran TNI</title>
</head>
<body>
<h2>Form Pendaftaran TNI</h2>
<form method="post" action="">
    Tinggi Badan (cm): <input type="number" name="tinggi" required><br><br>
    Nilai TPA: <input type="number" name="nilai_tpa" required><br><br>
    <input type="submit" value="Cek Kelulusan">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tinggi = $_POST['tinggi'];
    $nilai_tpa = $_POST['nilai_tpa'];
    if ($tinggi > 170 && $nilai_tpa > 85) {
        echo "<h3>Selamat! Anda dinyatakan LULUS untuk mendaftar TNI.</h3>";
    } else {
        echo "<h3>Maaf, Anda tidak memenuhi syarat untuk mendaftar TNI.</h3>";
    }
}
?>
</body>
</html>