<?php
include 'config.php';

if (isset($_POST['add'])) {

    $game_id = (integer) $_POST['game_id'];
    $nama_game = $_POST['nama_game'];
    $dev_game = $_POST['dev_game'];
    $genre_game = $_POST['genre_game'];
    $year_game = (integer) $_POST['year_game'];
    $price_game = (integer) $_POST['price_game'];

    $sql = "INSERT INTO games (id_game, nama_game, developer_game, genre, tahun_rilis, harga)
    VALUES ($game_id, '$nama_game', '$dev_game', '$genre_game', $year_game, $price_game)";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
        header('Location: admin-home.php');
    } else {
        echo "Error: " . $sql . "
    " . mysqli_error($conn);
    }
    mysqli_close($conn);

    }


?>