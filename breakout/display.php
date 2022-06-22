<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="decorator.css">
    <link rel="stylesheet" href="../css/landingpage-deco.css">

</head>
<body>

    <div class="container-fluid main-navbar mx-0 px-0">
        <nav class="navbar navbar-light navbar-expand-lg bg-custom">
            <div class="container-fluid main-nav">
                <a class="navbar-brand align-text-top" href="../landingpage.php">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Video-Game-Controller-Icon-IDV-green.svg" width="60px" height="60px" class="d-inline align-text">
                    <span class='logotext'>GeminkShop.com</span>
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end " id="nav">
                    <ul class="navbar-nav navigation">
                        <li class="nav-item mx-2 ">
                            <a class=" nav-link" href="../landingpage.php#about">Tentang Kami</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class=" nav-link" href="../landingpage.php#recommendation">Rekomendasi Kami</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class=" nav-link" href="../landingpage.php#footer">Kontak Kami</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="btn btn-secondary nav-link text-light" href="../landingpage.php">Pesan Sekarang</a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </nav>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div id="gameContainer">
                <canvas id="gameBoard" width="500" height="500"></canvas>
            </div>
        </div>
        <div class="row">
            <div id="scoreText" style="text-align: center;">0</div>
        </div>
        <div class="row">
            <div id="livesCount" style="text-align: center;">Lives left : 3</div>
        </div>
        <div class="row" style="margin-bottom: 10px;">
            <button id="resetBtn" class="mx-auto"> Reset </button>
        </div>
        <div class="row">
            <p class="cara-main mx-auto" style="text-align: center;">Untuk memainkan ini, gunakan tombol arah kanan dan kiri untuk menggerakkan paddle ke kanan dan kiri, game akan berakhir apabila semua block sudah hilang atau nyawa sudah mencapai 0</p>
        </div>
    </div>

    <div id="footer" class="container-fluid">
        <div class="row">
            <div class="col logo-footer">
                <img class='logo-footer-img' src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Video-Game-Controller-Icon-IDV-green.svg">
                <span class="logo-footer-txt"> <b>GeminkShop.com</b> </span>
            </div>
        </div>
        <div class="row contacts">
            <div class="row alamat"><b>
                Alamat:<br>
                Jl. Lorem Ipsum <br>
                No.87,
                Jakarta Barat,<br>
                Indonesia, 88726</b>
            </div>
            <div class="row telp">
                <b>No. Telp : 081283940223</b>
            </div>
            <div class="row fax">
                <b>Fax : 123012301</b>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="breakout.js"></script>
</body>
</html>