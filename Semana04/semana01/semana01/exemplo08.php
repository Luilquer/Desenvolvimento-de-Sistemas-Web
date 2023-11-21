<?php

function calculaSalario($funcionario, $salario = 0, $descontos = 0, $acrescimos = 0) {
    echo "Funcionario: $funcionario <br>";
    $total = $salario - $descontos + $acrescimos;
    echo "Salario liquido: $total <br>";
}

calculaSalario("Fulano de tal", 1000, 10, 20);

calculaSalario(funcionario: "Fulano de tal", acrescimos: 20, descontos: 10, salario: 1000);