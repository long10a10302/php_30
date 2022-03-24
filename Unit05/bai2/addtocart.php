<?php
require_once('data.php');
session_start();
date_default_timezone_set('Asia/Ha_Noi');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $checkProductInSession = false;
    $productsInSession = isset($_SESSION['products']) ? $_SESSION['products'] : [];
    foreach ($productsInSession as $key => $product) {
        if ($product['id'] == $id) {
            if (isset($_GET['quantity'])) {
                $_SESSION['products'][$key]['number'] = $_GET['quantity'];
            } else {
                $_SESSION['products'][$key]['number']++;
            }
            $checkProductInSession = true;
            break;
        }
    }
    if ($checkProductInSession === false) {
        foreach ($products as $key => $product) {
            if ($product['id'] == $id) {
                $products[$key]['number'] = 1;
                $products[$key]['time'] = date('d/m/y h:s:i');
                $_SESSION['products'][] = $products[$key];
                break;
            }
        }
    }
}
header('Location: cart.php');