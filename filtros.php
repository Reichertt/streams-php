<?php


require 'MeuFiltro.php';

$arquivoCursos = fopen('lista-cursos.txt', 'r');

stream_filter_register('alura.partes', meuFiltro::class);
stream_filter_append($arquivoCursos, 'alura.partes');

echo fread($arquivoCursos, filesize('lista-cursos.txt'));
