<?php
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

$horaEmSegundos = $horaInicial * 3600;
$minutosEmSegundos = $minutoInicial * 60;
$totalInicialEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segundoInicial; 

$arrHora = explode(";", $horaFinal);

$horaFinal = $arrHora [0];
$minutoFinal = $arrHora [1];
$segundoFinal = $arrHora [2];

$horaFinalEmSegundos = $horaFinal * 3600;
$minutosFinalEmSegundos = $minutoFinal * 60;

$totalFinalEmSegundos = $horaFinalEmSegundos + $minutosFinalEmSegundos + $segundoFinal; 

$tempoDeJogo = $totalFinalEmSegundos - $totalInicialEmSegundos;

echo "tempo jogo {$tempoDeJogo}";