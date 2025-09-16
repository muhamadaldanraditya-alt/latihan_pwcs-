<!DOCTYPE html>
<html>
<head>
    <title>Forum Pemesanan Bus</title>
</head>
<body>
<h2>Forum Pemesanan Bus</h2>
<form method="post" action="post">
    <table>
        <tr>
            <td> Pilih Class</td>
            <td>
                <select name="Class" id="">
                    <option value="Eksekutif">Eksekutif</option>
                    <option value="Bisnis">Bisnis</option>
                    <option value="Ekonomi">Ekonomi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
                <input type="radio" name="Jurusan" id="" value="1">tasik-jakarta
                <input type="radio" name="Jurusan" id="" value="2">tasik-Bandung
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
    </table>
</form>
<?php
if (isset($_POST['submit'])){
    $class =$post['Class'];
    $jurusan $post['Jurusan'];
    if ($tinggi > 170 && $nilai_tpa > 85) {
        echo "<h3>Selamat! Anda dinyatakan LULUS untuk mendaftar TNI.</h3>";
    } else {
        echo "<h3>Maaf, Anda tidak memenuhi syarat untuk mendaftar TNI.</h3>";
    }
}
?>
</body>
</html>