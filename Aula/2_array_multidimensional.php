<?php
$pessoa = ['nome'=> 'amaurizin' 
,'sobrenome' => 'verdinho marciano',
'idade' => 60
];

$listafuncionarios = [
    'pessoa1' => [
        'nome'=> 'hipaminodas',
        'sobrenome' => 'silva',
        'idade' => 20
    ],
    'pessoa2' => [
        'nome'=> 'obas',
        'sobrenome' => ' da silva',
        'idade' => 17


    ],
    'pessoa3' => [
        'nome'=> 'bernardo',
        'sobrenome' => 'calvario',
        'idade' => 'faleceu :/'


    ]

];

echo $pessoa['sobrenome'];
echo var_dump($pessoa);
echo $listafuncionarios['pessoa1'] ['nome']
?>