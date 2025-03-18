<?php
    $carros = [
        'fusca',
        'gol',
        'uno'
    ];
    foreach ($carros as $key => $value) {
        echo 'Chave: '. $key .'<br>';
        echo 'Carros: '. $value .'<br>';
    };


    $estacionamento = [
        [
            'nome'=> 'Fusca',
            'placa'=> 'abc123',
            'foto'=> 'https://shre.ink/MzEy'
        ],
        [
            'nome'=> 'Gol',
            'placa'=> 'gol456',
            'foto'=> 'https://encurtador.com.br/W4rdX'
        ],
        [
            'nome'=> 'Uno',
            'placa'=> 'uno789',
            'foto'=> 'https://shre.ink/MzEE'
        ]
    ];




    echo'<h1>Estacionamento Batida Feliz</h1>';

    foreach ($estacionamento as $key => $veiculo) {
        echo 'Veiculo: '. $veiculo['nome'] .'<br>';
        echo 'Placa: '. $veiculo['placa'] .'<br>';
        echo '<img src="'. $veiculo['foto'] .'">';
        echo '<hr>';
    };



?>