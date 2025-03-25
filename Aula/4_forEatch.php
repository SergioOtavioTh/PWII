<?php
$alunos = [
    [
        'nome' => 'Marquinhos',
        'nota' => 5
    ],
    [
        'nome'=> 'Diogo',
        'nota'=> 10
    ]

];

foreach ($alunos as $key => $value) {
    if ($value['nota'] < 7) {
        echo 'Aluno ' . $value['nome'] . ' Reprovado ' . 'com a nota: ' . $value['nota'] . '<br> <br> <hr> <br>';
    } else{
        echo 'Aluno ' . $value['nome'] . ' Aprovado ' .  'com a nota: ' . $value['nota'] .  '<br>  <br> <hr> <br>';
    }
};



?>