<?php
    $people = [
        [
            'nome' => 'Sergio',
            'idade' => '16'
        ],
        [
            'nome' => 'Diogo',
            'idade' => '28'
        ],
        [
            'nome' => 'Lula',
            'idade' => '999999999999'
        ],
    ];

    foreach ($people as $key => $value) {
        if($people['idade']<16){
            echo 'o(a)' . $people['nome'] . 'Não pode votar';

        }
        else if($people['idade']<=17){
            echo 'Para o(a)' . $people['nome'] . 'o voto é opcional';
        }
        else if($people['idade']>= 70){
            echo 'Para o(a)' . $people['nome'] . 'o voto é opcional';

        }
        else{
            echo 'Para o(a)' . $people['nome'] . 'o voto é obrigatório';
        };
    };
?>