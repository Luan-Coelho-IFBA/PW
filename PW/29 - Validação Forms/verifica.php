<?php
require_once 'funcoes.php';

$errors = [];

$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$data_nasc = trim($_POST['data_nasc'] ?? '');
$senha = $_POST['senha'] ?? '';
$confirma_senha = $_POST['confirma_senha'] ?? '';
$telefone = trim($_POST['telefone'] ?? '');
$login = trim($_POST['login'] ?? '');
$cep = trim($_POST['cep'] ?? '');
$endereco = trim($_POST['endereco'] ?? '');
$cpf = trim($_POST['cpf'] ?? '');

if (!nomeValido($nome)) $errors[] = "Nome inválido ou não informado.";
if (!emailValido($email)) $errors[] = "Email inválido ou não informado.";
if (!senhaValida($senha)) $errors[] = "Senha inválida (mínimo 6 caracteres).";
if (!senhaIguais($senha, $confirma_senha)) $errors[] = "Senha e confirmação não conferem.";
if (!ehValido($login)) $errors[] = "Login não informado.";
if (!validaCpf($cpf)) $errors[] = "CPF inválido ou não informado.";
if (!validaDataNascimento($data_nasc)) $errors[] = "Data de nascimento inválida.";

if (!validaTelefone($telefone)) {
    $errors[] = "Telefone inválido. Deve ter 10 ou 11 dígitos.";
}
if (!validaCep($cep)) {
    $errors[] = "CEP inválido. Deve ter 8 dígitos.";
}

if ($endereco !== '' && !tamMaximo($endereco, 200)) {
    $errors[] = "Endereço muito longo (máximo 200 caracteres).";
}

?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Resultado da Validação</title>
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
        <p><strong>Data de Nascimento:</strong> <?= htmlspecialchars($data_nasc) ?></p>
        <p><strong>Telefone:</strong> <?= htmlspecialchars($telefone) ?></p>
        <p><strong>Login:</strong> <?= htmlspecialchars($login) ?></p>
        <p><strong>CEP:</strong> <?= htmlspecialchars($cep) ?></p>
        <p><strong>Endereço:</strong> <?= htmlspecialchars($endereco) ?></p>
        <p><strong>CPF:</strong> <?= htmlspecialchars($cpf) ?></p>
    </div>
<?php endif; ?>
</body>
</html>
