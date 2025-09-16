<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siswa</title>
</head>
<body>
    <form action=""methode="get">
        <input type="text" name="cari" placeholder="Cari berdasarkan nama"><input type="submit" value="Cari">
    </form>
    <br>     
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
        </tr>
        <?php
        include 'koneksi.php';
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $sql = "SELECT * FROM siswa_rpl1 WHERE nis='$cari' OR nama='$cari'";
        }else{
            $sql = "SELECT * FROM siswa_rpl1";
        }
        $query = mysqli_query($koneksi, $sql);
        $no = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?=$no++; ?></td>
            <td><?=$data['nis'] ?></td>
            <td><?=$data['nama'] ?></td>
            <td><?=$data['alamat'] ?></td>
            <td><?=$data['jenis_kelamin'] ?></td>
            <td><?=$data['nomer'] ?></td>
        </tr>
        <?php
         } 
        ?>
    </table>
</body>
</html>