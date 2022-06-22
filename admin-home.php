<?php
include 'config.php';

session_start();
if($_SESSION['username']=='')
{
    header("location:admin-login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/template-deco.css">
    <link rel="stylesheet" href="./css/admin-home-deco.css">
</head>
<body>
    <div class="container-fluid main-navbar mx-0 px-0">
        <nav class="navbar navbar-light navbar-expand-lg bg-custom">
            <div class="container-fluid main-nav">
                <a class="navbar-brand align-text-top" href="landingpage.php">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Video-Game-Controller-Icon-IDV-green.svg" width="60px" height="60px" class="d-inline align-text">
                    <span class='logotext'>GeminkShop.com</span>
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end " id="nav">
                    <ul class="navbar-nav navigation">
                        <li class="nav-item mx-2 ">
                            <a class=" nav-link" href="admin-home.php">Edit Data</a>
                        </li>
                        <li class="nav-item mx-2 ">
                            <a class=" nav-link" href="pesanan.php">Lihat Pesanan</a>
                        </li>
                        <li class="nav-item mx-2">
                            <span class="nav-link user-nav">Logged in as: <?php echo $_SESSION['username']?> </span>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="btn btn-secondary nav-link logout-btn text-light" href="admin-logout.php">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </nav>
    </div>

    <div class="container-fluid main-webpage">
        <div class="row">
            <div class="edit-title">
                Edit Data
            </div>
        </div>
        <div class="row data-table">
            <table border="1" class='table'>
                <tr class="table-dark">
                    <td>ID Game</td>
                    <td>Nama Game</td>
                    <td>Developer Game</td>
                    <td>Genre</td>
                    <td>Tahun Keluar</td>
                    <td>Harga</td>
                </tr>
            
                <?php
                    $games = mysqli_query($conn,"SELECT * from games");
                    $count = 1;
                    foreach ($games as $game) {
                        if ($count % 2 == 1) {
                            echo "
                            <tr class='table-secondary'>
                                <td>".$game['id_game']."</td>
                                <td>".$game['nama_game']."</td>
                                <td>".$game['developer_game']."</td>
                                <td>".$game['genre']."</td>
                                <td>".$game['tahun_rilis']."</td>
                                <td>".$game['harga']."</td>
                            </tr>
                            ";
                        }
                        else {
                            echo "
                            <tr class='table-light'>
                                <td>".$game['id_game']."</td>
                                <td>".$game['nama_game']."</td>
                                <td>".$game['developer_game']."</td>
                                <td>".$game['genre']."</td>
                                <td>".$game['tahun_rilis']."</td>
                                <td>".$game['harga']."</td>
                            </tr>
                            ";
                        }
                        $count++;
                    }

                ?>
            </table>
        </div>

        <div class="row">
            <div class="edit-title">
                Tambah Data
            </div>
            <div class="add-form">
                <form action="add-data.php" method="post">
                    <div class="mb-3">
                        <label for="formID" class="form-label">ID Game :</label>
                        <input type="number" class="form-control" id="formID" placeholder="Input ID Game" name="game_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGameName" class="form-label">Nama Game :</label>
                        <input type="text" class="form-control" id="formGameName" placeholder="Input Nama Game" name="nama_game" required>
                    </div>
                    <div class="mb-3">
                        <label for="formDeveloper" class="form-label">Developer Game :</label>
                        <input type="text" class="form-control" id="formDeveloper" placeholder="Input Developer Game" name="dev_game" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGenre" class="form-label">Genre Game :</label>
                        <input type="text" class="form-control" id="formGenre" placeholder="Input Genre Game" name="genre_game" required>
                    </div>
                    <div class="mb-3">
                        <label for="formYear" class="form-label">Tahun Keluar :</label>
                        <input type="number" class="form-control" id="formYear" placeholder="Input Tahun Keluar" name="year_game" min="1960" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGame" class="form-label">Harga Game :</label>
                        <input type="number" class="form-control" id="formGame" placeholder="Input Harga Game" name="price_game" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Submit" class="btn btn-secondary" name="add"></input>
                    </div>
                </form>
            </div>

        </div>

        <div class="row">
            <div class="edit-title">
                Delete Data
            </div>
            <div class="delete-form">
                <form action="delete-data.php" method="post">
                    <div class="mb-3">
                        <label for="formID" class="form-label">ID Game :</label>
                        <input type="number" class="form-control" id="formID" placeholder="Input ID Game Untuk Dihapus" name="id_delete" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                            Saya yakin data diatas akan dihapus
                        </label>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Submit" class="btn btn-secondary" name="delete"></input>
                    </div>
                </form>
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
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>