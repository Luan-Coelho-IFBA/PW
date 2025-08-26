<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Formulário de Cadastro</title>
    </head>
    <body>
        <h1>Formulário de Cadastro</h1>
        <form action="verifica.php" method="post" novalidate>
            <label>Nome:<br>
                <input type="text" name="nome" maxlength="100" required>
            </label><br><br>

            <label>Email:<br>
                <input type="email" name="email" maxlength="100" required>
            </label><br><br>

            <label>Data de nascimento:<br>
                <input type="date" name="data_nasc" required>
            </label><br><br>

            <label>Senha:<br>
                <input type="password" name="senha" minlength="6" required>
            </label><br><br>

            <label>Confirmação de Senha:<br>
                <input type="password" name="confirma_senha" minlength="6" required>
            </label><br><br>

            <label>Telefone:<br>
                <input type="tel" name="telefone" maxlength="15" placeholder="(DDD) 90000-0000">
            </label><br><br>

            <label>Login:<br>
                <input type="text" name="login" maxlength="50" required>
            </label><br><br>

            <label>CEP:<br>
                <input type="text" name="cep" maxlength="9" placeholder="00000-000">
            </label><br><br>

            <label>Endereço:<br>
                <input type="text" name="endereco" maxlength="200">
            </label><br><br>

            <label>CPF:<br>
                <input type="text" name="cpf" maxlength="14" placeholder="000.000.000-00" required>
            </label><br><br>

            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
