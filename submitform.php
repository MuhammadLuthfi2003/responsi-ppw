<?php

include 'config.php';

if (isset($_POST['kirim'])) {

    $custName = $_POST['userName'];
    $custEmail = $_POST['userEmail'];
    $custCredit = $_POST['userCredit'];
    $chosenGame = $_POST['chosenGame'];
    $quantity = (integer) $_POST['quantity'];

    //get the game price

    $query = "SELECT harga FROM games WHERE nama_game = '$chosenGame'";

    if (mysqli_query($conn, $query)) {
        $games = mysqli_query($conn,"SELECT harga FROM games WHERE nama_game = '$chosenGame'");

        foreach ($games as $game) {
            $gameprice = $game['harga'];
        }

        $totalprice = $quantity * $gameprice;

        $insertdata = "INSERT INTO ordercust (cust_name, cust_email, cust_creditNum, cust_chosen, quantity, total_price)
        VALUES ('$custName','$custEmail','$custCredit','$chosenGame',$quantity, $totalprice)";

        if(mysqli_query($conn, $insertdata)) {

            echo('submit success');
            header('Location: landingpage.php');

        } else {
            echo "Error: " . $insertdata . "" . mysqli_error($conn);
        }

    } else {
        echo "Error: " . $query . "" . mysqli_error($conn);
    }

}

?>