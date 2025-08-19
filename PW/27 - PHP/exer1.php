<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exer 1</title>
</head>
<body>
    <form action="" method="post">
        <label for="date">Data:
            <input type="date" name="date">
        </label>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if (isset($_POST['date'])) {
            $date = $_POST['date'];
            $data = new DateTime($date);

            $show = ucfirst(strftime('%A', $data->getTimestamp())) . ", " . $data->format("d") . " de " . ucfirst(strftime('%B', $data->getTimestamp())) . " de " . $data->format("Y");

            echo $show;
        }
    ?>
</body>
</html>
