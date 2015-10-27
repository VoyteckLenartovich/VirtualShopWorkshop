<?php
session_start();
require_once("index.php");

echo "Sprawdzanie uzytkownika...";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $myUser = User::login($_POST['login'], $_POST['password']);
        if ($myUser != false) {
            $userId = $myUser->getUserId();
            $_SESSION['user'] = $myUser;
            $_SESSION['userId'] = $userId;
            header("location: /VirtualShopWorkshop/");
            exit;
        }
    }
}
?>