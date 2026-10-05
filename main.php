<?php

function validarSenha($senha) {

    if (strlen($senha) < 8) {
        return "Senha inválida: deve ter pelo menos 8 caracteres.";
    }

    if (!preg_match('/[A-Z]/', $senha)) {
        return "Senha inválida: deve conter pelo menos uma letra maiúscula.";
    }

    if (!preg_match('/[a-z]/', $senha)) {
        return "Senha inválida: deve conter pelo menos uma letra minúscula.";
    }

    if (!preg_match('/[0-9]/', $senha)) {
        return "Senha inválida: deve conter pelo menos um número.";
    }

    if (!preg_match('/[\W_]/', $senha)) {
        return "Senha inválida: deve conter pelo menos um caractere especial.";
    }

    return "Senha válida!";
}


while (true) {

    echo "Digite sua senha: ";
    $senha = readline();

    $resultado = validarSenha($senha);

    echo $resultado . PHP_EOL;

    // Se a senha for válida, encerra o programa
    if ($resultado === "Senha válida!") {
        break;
    }

    echo "Deseja tentar novamente? (s/n): ";
    $opcao = strtolower(trim(readline()));

    if ($opcao !== "s") {
        echo "Programa encerrado." . PHP_EOL;
        break;
    }
}
?>
