<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkenalan dengan Perulangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container1 {
            max-width: 600px;
            display: grid;
            place-items:center;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container1">
    <h1>Perkenalan Singkat!</h1>
    <img style="border-radius:50%; width:200px; text-align:center;" src="https://avatars.githubusercontent.com/u/112554688?v=4" alt="gambar saya">
    </div><br>
    <div class="container">
        <?php
        // Daftar nama yang akan diperkenalkan
        $nama = "M. Gymnastiar";
        $hobi = "Bermain Game";
        $cita2 = "Software Engineer";
        $instansi = "Universitas Lambung Mangkurat";
        $link = "https://github.com/Agim-dudu";
        // Memperbaiki sintaksis echo dan menampilkan nama
        echo "<p>Halo, saya $nama Senang berkenalan dengan Anda!</p>";

        for($i = 0 ;$i < 22;$i++){
            if ($i == 21 ){
                echo"<p>usia saya : $i Tahun</p>";
            }
            
        }
        echo "<p>Asal Instansi :  $instansi </p>" ;
        echo "<p>Hobi saya : $hobi </p>";
        echo "<p>Cita-Cita saya : $cita2 </p>";
        echo "<p>Untuk Mengenal lebih lanjut, ayo kunjungi link GitHub saya: <br> <a href='$link'>$link</a></p>";

        ?>
    </div>
</body>
</html>
