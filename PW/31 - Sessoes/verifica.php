<?php

session_start();

if (isset($_POST['nome']) && isset($_POST['senha'])) {
    $_SESSION["nome"] = $_POST['nome'];
    header("Location: index.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
