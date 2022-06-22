<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeminkShop.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./css/landingpage-deco.css" rel="stylesheet">
    
</head>
<body>
    <!--navbar-->
    <div class="container-fluid main-navbar mx-0 px-0">
        <nav class="navbar navbar-light navbar-expand-lg bg-custom">
            <div class="container-fluid main-nav">
                <a class="navbar-brand align-text-top" href="#">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Video-Game-Controller-Icon-IDV-green.svg" width="60px" height="60px" class="d-inline align-text">
                    <span class='logotext'>GeminkShop.com</span>
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end " id="nav">
                    <ul class="navbar-nav navigation">
                        <li class="nav-item mx-2 ">
                            <a class=" nav-link" href="#about">Tentang Kami</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class=" nav-link" href="#recommendation">Rekomendasi Kami</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class=" nav-link" href="#footer">Kontak Kami</a>
                        </li>
                        <li class="nav-item mx-2">
                            <button type="button" class="btn btn-secondary nav-link text-light" data-bs-toggle="modal" data-bs-target="#formModal">Pesan Sekarang</button>
                        </li>
                    </ul>
                </div>
            </div>
            
        </nav>
    </div>

    <!--modal untuk pemesanan-->
    <div class="modal " tabindex="-1" id="formModal"  data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">From Pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action='submitform.php' method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for='userName' class='form-label'>Nama Lengkap Anda</label>
                            <input type='text' class='form-control' id='userName' name='userName' required placeholder='Input Nama Lengkap Anda'>
                        </div>
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Alamat Email Anda</label>
                            <input type="email" class="form-control" id="emailInput"  name='userEmail' placeholder='Input Email Anda' required>
                        </div>
                        <div class="mb-3">
                            <label for="creditInput" class="form-label">Nomor Kartu Kredit Anda</label>
                            <input type="number" class="form-control" id="creditInput" name='userCredit' placeholder='Input Nomor Kartu Kredit Anda' required>
                        </div>
                        <div class="mb-3">
                            <label for="gameOption" class="form-label">Pilihan Game</label>
                            <select class="form-select" aria-label="Default select example" name='chosenGame' required>
                                <?php
                                

                                $games = mysqli_query($conn,"SELECT * from games");

                                foreach ($games as $game) {
                                    echo '<option>'.$game['nama_game'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class='mb-3'>
                            <label for='gameQuantity' class='form-label'>Jumlah Yang Ingin Dibeli</label>
                            <input type="number" class="form-control" id="QuantityInput" name='quantity' placeholder='Input Berapa yang Ingin Anda Beli' required>
                        </div>
                        <div class="mb-3">
                            <input class="form-check-input" type="checkbox" id="gridCheck" required>
                            <label class="form-check-label" for="gridCheck">
                                Saya yakin dengan pilihan saya
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <input type="reset" class="btn btn-danger" value="Reset"></input>
                        <input type="submit" class="btn btn-primary" value="Kirim Form" name='kirim'></input>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--main body-->
    <div class="landing container-fluid">
        <div class='landing-container'>
            <div class="landing-desc"> 
                <span class="landing-text ">Beli Game dengan Aman dan Nyaman, 100% terpercaya</span>
            </div>
            <a class="landing-btn btn btn-secondary" data-bs-toggle="modal" data-bs-target="#formModal">Pesan Sekarang</a>
        </div>
    </div>

    <div id="about" class="container-fluid">
        <div class="about-title">
            <span class="about-title-text">Siapakah Kami?</span>
        </div>
        <div class="about-desc">
            <p class="about-desc-text">
                GeminkShop.com merupakan perusahaan yang telah berdiri sejak tahun 2019, kami menjual berbagai macam
                game yang tersebar di berbagai platform seperti PC, Xbox, PlayStation dan Nintendo. 
                <br>
                Tahun dan tahun seiring berjalannya waktu, kami telah melayani sebanyak 
                <br>
                    <span class="desc-num">500,000</span><br>
                    <span class="desc-pelanggan">pelanggan</span>
                <br>
                dan sebagian besar sangat puas dengan layanan kami. kami harap anda akan puas dengan layanan kami
                juga seperti pelanggan-pelanggan sebelumnya.
                <br>
                Apabila anda memiliki keluhan terhadap kami, silahkan contact ke <a href="#footer">kami</a> 
            </p>
        </div>
    </div>

    <div class='filler-1'>

    </div>

    <div id="recommendation" class="container-fluid">
        <div class="recommendation-title">
            Rekomendasi Kami
        </div>
        <div class="recommendation-content ">
            
            <div class="recommendation-order ">

                <div class="recommendation-order-header">
                    Game yang sedang berada di stok
                </div>

                <div class="recommendation-order-items">

                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-97OkJP5vFI-y3wUXelzcMjkkGX6UqjlrLLsD8rtErVnksYSOdvyGeYH5sJTUV0TX4nM&usqp=CAU"
                                class="card-img-top img-ff6" alt="final fantasy 6 logo">
                                <div class="card-body">
                                    <h5 class="card-title">Final Fantasy VI</h5>
                                    <p class="card-text">Final Fantasy VI merupakan JRPG buatan Square Enix yang dirilis pada tahun 1994 </p>
                                    <a data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-secondary">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="data:image/jpeg;base64,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"
                                class="card-img-top img-ni-no-kuni" alt="ni no kuni logo">
                                <div class="card-body">
                                    <h5 class="card-title">Ni No Kuni : Wrath Of The White Witch</h5>
                                    <p class="card-text">Ni No Kuni : Wrath Of The White Witch merupakan JRPG yang dibuat oleh Level-5 dan dipublish oleh Bandai Namco pada tahun 2011 </p>
                                    <a data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-secondary">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="https://w0.peakpx.com/wallpaper/598/539/HD-wallpaper-video-game-drakengard-3-thumbnail.jpg"
                                class="card-img-top img-drakengard3" alt="drakengard 3 logo">
                                <div class="card-body">
                                    <h5 class="card-title">Drakengard 3</h5>
                                    <p class="card-text">Drakengard 3 merupakan game <i>hack and slash</i> yang dibuat oleh Square Enix dan dirilis pada tahun 2014 </p>
                                    <a data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-secondary">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="https://mylibrary.libnet.info/images/events/mylibrary/minecraft_logo.jpg"
                                class="card-img-top img-minecraft" alt="minecraft logo">
                                <div class="card-body">
                                    <h5 class="card-title">Minecraft</h5>
                                    <p class="card-text"> Minecraft merupakan salah satu game <i>sandbox </i> yang paling terkenal. Dibuat dan dirilis oleh Mojang pertamakali pada tahun 2009</p>
                                    <a data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-secondary">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row" style="margin-top: 30px;">
                        <div class="col-5"></div>
                        <div class="col-5">
                            <a class="btn btn-primary btn-order" href="./data.php">Lihat Lebih Banyak Lagi</a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="recommendation-play">
                <div class="recommendation-play-header">
                    Game yang dapat anda mainkan sekarang secara gratis!
                </div>
                <div class="recommendation-play-items">

                    <div class="row container">

                        <div class="col-3">
                            <div class="card card-maze" style="width: 18rem;">
                                <img src="./image assets/maze-screenshot.png" class="card-img-top" alt="maze game">
                                <div class="card-body">
                                    <h5 class="card-title">Maze</h5>
                                    <p class="card-text">Game Maze ini sekarang dapat dijalankan langsung di browser anda!</p>
                                    <a href="./maze/canvas.php" class="btn btn-secondary">Mainkan Sekarang!</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 ">
                            <div class="card card-breakout" style="width: 18rem; " >
                                <img src="./image assets/breakout-screenshot.png" class="card-img-top" alt="breakout  game">
                                <div class="card-body">
                                    <h5 class="card-title">Breakout</h5>
                                    <p class="card-text">Siapa yang ingat dengan game ini?, yak betul, ini adalah breakout yang dapat dijalankan secara langsung tanpa aplikasi tambahan</p>
                                    <a href="./breakout/display.php" class="btn btn-secondary">Mainkan Sekarang!</a>
                                </div>
                            </div>
                        </div>

                        <div class='col-3 '>
                            <div class="card " style="width: 18rem; " >
                                <img src="https://imgs2.dab3games.com/tic-tac-toe-game.png" class="card-img-top" alt="tic tac toe">
                                <div class="card-body">
                                    <h5 class="card-title">Tic Tac Toe</h5>
                                    <p class="card-text">Sebuah Game Tic Tac Toe Klasik di dalam Browser</p>
                                    <button href="#!" class="btn btn-secondary" disabled>Sedang Dalam Maintenance</button>
                                </div>
                            </div>
                        </div>

                        <div class='col-3 '>
                            <div class="card" style="width: 18rem; " >
                                <img src="https://radzion.com/static/9d689fdb2d661544f9d653e0a32ec328/2cefc/field.png" class="card-img-top" alt="Snake">
                                <div class="card-body">
                                    <h5 class="card-title">Snake</h5>
                                    <p class="card-text">Sebuah Game Snake Klasik di dalam Browser</p>
                                    <button href="#!" class="btn btn-secondary" disabled>Sedang Dalam Maintenance</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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
            <div class="row admin">
                <a href="./admin-login.php" class="btn btn-secondary" style="width: 10vw;">Admin Login </a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>