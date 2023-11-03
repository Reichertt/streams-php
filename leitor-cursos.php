<?php

// O PHP realiza uma busca na minha pasta e procura pelo arquivo onde tem as informações guardadaas "lista-cursos.txt"
$cursos = file('lista-cursos.txt');

if ($cursos !== false) {
    foreach ($cursos as $curso) {
        echo $curso;
    }
} else {
    echo "Failed to read the file.";
}