<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro (Versão Reduzida)</title>
</head>
<body>
<h1>Formulário 2</h1>
<form action="verifica2.php" method="post" novalidate>
    <label>Nome:<br>
        <input type="text" name="nome" maxlength="100" required>
    </label><br><br>

    <label>Email:<br>
        <input type="email" name="email" maxlength="100" required>
    </label><br><br>

    <label>Senha:<br>
        <input type="password" name="senha" minlength="6" required>
    </label><br><br>

    <label>Confirmação de Senha:<br>
        <input type="password" name="confirma_senha" minlength="6" required>
    </label><br><br>

    <label>CPF:<br>
        <input type="text" name="cpf" maxlength="14" placeholder="000.000.000-00" required>
    </label><br><br>

    <button type="submit">Enviar</button>
</form>
</body>
</html>
