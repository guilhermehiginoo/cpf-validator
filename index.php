<?php

$cpf = "111.222.333-44";

echo "Esse é o número do CPF inicial: $cpf";
echo "<br><br>";

$cpfSemHifen = str_replace("-", "", $cpf);
$cpfSemPontos = str_replace(".", "", $cpfSemHifen);

echo "CPF após tratamento: $cpfSemPontos";
echo "<br><br>";

echo "Agora, vamos checar se o CPF é válido";
echo "<br><br>";

if (strlen($cpfSemPontos) != 11) {
    echo "CPF Inválido";
} else {
    $soma = 0;
    $multiplicador = 10;
    for ($i = 0; $i < 9; $i++) {
        $soma += $cpfSemPontos[$i] * $multiplicador;
        $multiplicador--;
    }
    $resto = $soma % 11;
    $digito1 = ($resto < 2) ? 0 : 11 - $resto;

    $soma = 0;
    $multiplicador = 11;
    for ($i = 0; $i < 9; $i++) {
        $soma += $cpfSemPontos[$i] * $multiplicador;
        $multiplicador--;
    }
    $soma += $digito1 * 2;
    $resto = $soma % 11;
    $digito2 = ($resto < 2) ? 0 : 11 - $resto;

    if ($digito1 != $cpfSemPontos[9] || $digito2 != $cpfSemPontos[10]) {
        echo "CPF Inválido<br>";
        echo "Se fosse válido, os dois últimos dígitos deveriam ser: $digito1$digito2";
    } else {
        echo "CPF Válido";
    }
}