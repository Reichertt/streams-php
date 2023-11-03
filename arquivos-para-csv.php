<?php

// Ao ser executado, cria o arquivo "cursos.csv"

// Pega as informações que estão no Documento de texto guardado na pasta "lista-cursos.txt".
$meusCursos = file('lista-cursos.txt');

// Pega as informações que estão no Documento de texto guardado na pasta "cursos-php.txt".
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

// Subi o projeto dessa maneira, com o passar do tempo foi descontinuado a função ""utf8_decode" então vim a atualizar o código logo abaixo.

// foreach ($meusCursos as $curso) {
//     $linha = [trim(utf8_decode($curso)), 'Sim'];

//     fputcsv($arquivoCsv, $linha, ';');
// }

// foreach ($outrosCursos as $curso) {
//     $linha = [trim(utf8_decode($curso)), 'Não'];

//     fputcsv($arquivoCsv, $linha, ';');
// }

foreach ($meusCursos as $curso) {
    $linha = [trim(mb_convert_encoding($curso, 'Windows-1252')), 'Sim'];

    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(mb_convert_encoding($curso, 'Windows-1252')), 'Não'];

    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);
