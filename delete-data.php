<?php
include 'config.php';

if (isset($_POST['delete'])) {

    $game_id = (integer) $_POST['id_delete'];

    $sql = "DELETE FROM games WHERE id_game = $game_id";

    if (mysqli_query($conn, $sql)) {
        header('Location: admin-home.php');
    } else {
        echo "Error: " . $sql . "
        " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>