<?php
session_start();

if (!isset($_SESSION["nome"])) {
    header("Location: login.php");
    exit();
}

$nome = $_SESSION["nome"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body class="main">
    <div style="display: flex; flex-direction: column">
        <h1>Seja bem vindo <?php echo $nome?></h1>
        <form action="logout.php" method="post">
            <button class="btn">Sair</button>
        </form>
    </div>
</body>
</html>
