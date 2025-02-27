<?php
 /**
  * Crie um script que ira receber
  *uma idade e exiba se é:
  *criança
  *adulto
  *idoso
  */

  $idade = 25;

  if($idade <= 12){
    echo "É Criaça";
  }
  else if($idade > 12 && $idade < 18){
    echo "É Adolecente";
  }
  else if($idade > 12 && $idade < 60){
    echo "É Adulto";
  }
  else{
    echo "É Idoso";
  };
?>
