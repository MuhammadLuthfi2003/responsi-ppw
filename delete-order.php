<?php
include 'config.php';

    if (isset($_POST['delete-order'])) {

        $order_id = (integer) $_POST['id_delete'];

        $query = "DELETE FROM ordercust WHERE order_id = $order_id ";

        if (mysqli_query($conn, $query)) {
            header('Location: pesanan.php');
        } else {
            echo "Error: " . $sql . "
            " . mysqli_error($conn);
        }
        mysqli_close($conn);

    }
?>