<?php
    include_once 'dbh.inc.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO customers (customer_first, customer_last, customer_email, customer_message, customer_phone) VALUES ('$first', '$last', '$email', '$message', '$phone');";

    mysqli_query($conn, $sql);

    header("Location: ../customers.php?customer_add=success");
