<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baumans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
        require"function.php";
        $datas= query("SELECT * FROM albumfoto");

    ?>
    <!-- <nav></nav> -->
    <article>
        <div class="judul">
            <h1>Galeri Foto Pariwisata Lewolein</h1>
            
            <!-- <h5>Program Study Rekayasa Perangkat Lunak</h5> -->
        </div>
        <div class="card-wrapper">
            <div class="card-scroll">
                <?php foreach($datas as $key){ ?>
                <div class="card">
                    <img src="img/<?= $key["foto"] ?>" alt="" width="85%" height="55%">
                    <span>Kegiatan : <?= $key["judul"] ?></span>
                    <span>Keterangan : <?= $key["deskripsi"] ?></span>
                    <span>Tanggal: 17-03-2025</span>
                </div>
                <?php } ?>                
            </div>
        </div>
    </article>
    <footer>
        <h3>Dibuat Oleh Klaudia Weda<h3>
        <a href="login.php">silahkan login untuk menambahkan data</a>
    </footer>
    
</body>
</html>
