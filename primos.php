<?php

// Calcular os números primos 


    $numero = 109; 
    echo "Analisando o numero: $numero <br>";
    $primos = 0; 
    echo"Valores mútiplos: ";
   

    $a=0;
    for ($i=1; $i<=$numero; $i++) {
 
      $resto = $numero % 2;
    
      if ($resto == 0) { 
        break;
      }
      
      $resto = $numero % $i;
    
      if ($resto != 0) { 
        $a++;
        echo "$i ";
      }
    }

    if ($a >= 1) { 
      echo"<br>Total de múltiplos: $a<br>";
      echo"Resultado: $numero É primo!";
    }else{ 
      echo"<br>Total de múltiplos: $a<br>";
      echo"Resultado: $numero Não é primo!";
    }

// 1 calcular o tempo de um jogo de futebol a partir das 
// variaveis $horaInicial e $horaFinal e ao final exibir o tempo 
// decorrido desse jogo. 

// Dica: utilizar a funcao explode do php para quebrar a hora em partes (array).

$acrescimos - 0;
$horaInicial -'16:00:00' ; 
$horaFinal - '17:30:00' ;

$arrHora = explode(";", $horaInicial);
$horaInicial = $arrHora [0];
$minutoInicial = $arrHora [1];
$segundoInicial = $arrHora [2];

$arrHora = explode(";", $horaFinal);

$horaFinal = $arrHora [0];
$minutoFinal = $arrHora [1];
$segundoFinal = $arrHora [2];

$horaEmSegundos = $hora * 60;
$horaEmSegundos = $minutos * 60;

$totalInicialEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segundos; 

