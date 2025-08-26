<?php

function ehValido(string $valor) {
    if (isset($valor) && trim($valor) !== "") return true;

    return false;
}

function tamMaximo(string $dado, int $max) {
    if (mb_strlen($dado) <= $max) return true;

    return false;
}

function nomeValido(string $nome) {
    if (!ehValido($nome)) return false;

    return true;
}

function emailValido(string $email) {
    if (!ehValido($email)) return false;

    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function senhaValida(string $senha) {
    if (!ehValido($senha)) return false;
    if (mb_strlen($senha) >= 6) return true;

    return false;
}

function senhaIguais(string $senha, string $confirmaSenha) {
    if (!ehValido($confirmaSenha)) return false;
    if ($senha === $confirmaSenha) return true;

    return false;
}

function validaDataNascimento($data) {
    if (!ehValido($data)) return false;
    $d = DateTime::createFromFormat('Y-m-d', $data);
    if (!$d || $d->format('Y-m-d') !== $data) return false;

    return true;
}

function validaCpf($cpf) {
    if (!ehValido($cpf)) return false;
    $cpf = preg_replace('/\D/', '', $cpf);

    if (strlen($cpf) != 11) return false;

    if (preg_match('/^(\d)\1+$/', $cpf)) return false;

    for ($t = 9; $t <= 10; $t++) {
        $soma = 0;
        for ($c = 0; $c < $t; $c++) {
            $soma += intval($cpf[$c]) * (($t + 1) - $c);
        }
        $resto = ($soma * 10) % 11;
        if ($resto == 10) $resto = 0;
        if ($cpf[$c] != strval($resto)) return false;
    }
    return true;
}

function validaTelefone($telefone) {
    if (!ehValido($telefone)) return false;
    $dig = preg_replace('/\D/', '', $telefone);
    $len = strlen($dig);
    return ($len === 10 || $len === 11);
}

function validaCep($cep) {
    if (!ehValido($cep)) return false;
    $dig = preg_replace('/\D/', '', $cep);
    return strlen($dig) === 8;
}
