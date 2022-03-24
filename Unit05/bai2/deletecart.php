<?php
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    foreach ($_SESSION['products'] as $key => $product) {
        if ($product['id'] == $id) {
            unset($_SESSION['products'][$key]);
            break;
        }
    }

    header('Location: cart.php');
}