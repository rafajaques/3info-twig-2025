<?php
# carbon_exemplos.php

// Carrega o carregador do Composer
require_once('vendor/autoload.php');

// Muda para o horário brasileiro
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

// Agora
echo Carbon::now() . '<br>';

// Adiciona um dia
echo Carbon::now()->addDay() . '<br>';

// Subtrair uma semana
echo Carbon::now()->subWeek() . '<br>';

// Adiciona quatro anos
echo 'Próximas olimpíadas: ' .
        Carbon::createFromDate(2024)->addYears(4)->year .
        '<br>';

// Idade de alguém
echo 'Sua idade é: ' .
        Carbon::createFromDate(2000, 4, 1)->age . 
        '<br>';

// Final de semana?
if (Carbon::now()->isWeekend()) {
    echo 'Festa!';
}
else {
    echo 'Aula';
}
echo '<br>';

// Calcular diferença entre datas
$nascimento = Carbon::createFromDate(2010, 07, 23);
echo 'Diferença de data: ' .
        Carbon::now()->diff($nascimento);