<?php
require_once 'funcoes.php';

$errors = [];

// Captura e sanitiza entradas
$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';
$confirma_senha = $_POST['confirma_senha'] ?? '';
$cpf = trim($_POST['cpf'] ?? '');

// --- Validações usando as funções já existentes ---
if (!nomeValido($nome)) $errors[] = "Nome inválido ou não informado.";
if (!emailValido($email)) $errors[] = "Email inválido ou não informado.";
if (!senhaValida($senha)) $errors[] = "Senha inválida (mínimo 6 caracteres).";
if (!senhaIguais($senha, $confirma_senha)) $errors[] = "Senha e confirmação não conferem.";
if (!validaCpf($cpf)) $errors[] = "CPF inválido ou não informado.";

?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Resultado da Validação (Versão Reduzida)</title>
</head>
<body>
<h1>Resultado</h1>
<?php if (!empty($errors)): ?>
    <div style="color:red;">
        <h2>Erros encontrados:</h2>
        <ul>
            <?php foreach ($errors as $e): ?>
                <li><?= htmlspecialchars($e) ?></li>
            <?php endforeach; ?>
        </ul>
        <p><a href="javascript:history.back()">Voltar</a></p>
    </div>
<?php else: ?>
    <div style="color:green;">
        <h2>Dados válidos!</h2>
        <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
        <p><strong>CPF:</strong> <?= htmlspecialchars($cpf) ?></p>
    </div>
<?php endif; ?>
</body>
</html>
