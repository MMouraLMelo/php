<?php
$idade = 15;
$numeroDePessoas = 2;
echo "Você só pode entrar se tiver a partir de 18 anos". PHP_EOL;
echo "Ou a partir de 16 anos acompanhado.". PHP_EOL;
if ($idade >= 18) {
    echo "Você tem $idade anos.". PHP_EOL;
    echo "Pode entrar.". PHP_EOL;
    echo "Seja Bem-vindo.";
}else if ($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos, está acompanhado(a)". PHP_EOL;
    echo "Pode entrar.";
    echo "Sejam Bem-vindos.";
}else{
    echo "Você só tem $idade anos.". PHP_EOL;
    echo "Não está acompanhado(a)". PHP_EOL;
    echo "Você não pode entrar.";
}
