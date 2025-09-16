<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $nama = "Aldan Raditya";
    // $umur = 16;
    // echo "Nama Saya:  $nama <br> umur: $umur ";
    // echo "Nama Saya:" . $nama . "umur" . $umur;

 $text = "<br> <br> Assalamulaikum warahmatullahi wabarakatuh,'<br>
    Selamat datang di website resmi SMK YPC Tasikmalaya.<br>
    Dengan penuh rasa syukur, kami hadir sebagai lembaga <br>
    pendidikan yang berkomitmen untuk mencetak generasi muda <br>
    yang kompeten, berkarakter SMK YPc Tasikmalaya ";

    echo str_replace("$text" , "SMK YPC TASIKMALAYA", $text);
    // echo str_replace("SMK YPC Tasikmalaya." , "SMK YPC TASIKMALAYA", $text);

    ?>

</body>

</html>