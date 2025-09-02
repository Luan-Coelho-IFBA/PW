<?php
if (!isset($_COOKIE['nome']) || !isset($_COOKIE['cidade'])) {
    header("Location: formulario.html");
}

$nome = $_COOKIE['nome'];
$cidade = $_COOKIE['cidade'];
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
        <h1><?php echo $nome . " nasceu em " . $cidade ?></h1>
        <form method="post" action="formulario.html">
            <button class="btn">
                Sair
            </button>
        </form>
    </div>
</body>
</html>
