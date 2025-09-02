<?php
$nome = $_GET['nome'] ?? '';
$cidade = $_GET['cidade'] ?? '';

setcookie('nome', $nome);
setcookie('cidade', $cidade);

header('Location: ./mensagem.php');