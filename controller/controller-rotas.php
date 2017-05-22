<?php 

$r = (isset($_GET['r'])) ? htmlentities(strip_tags($_GET['r'])) : "";

switch ($r) {
    case '':
        rota('home', 'Página Inicial');
        break;
    default:
        include_once 'view/404.php';
        break;
}

function rota($pagina, $titulo){
    $conteudo = "conteudos/".$pagina.".php";
    require 'view/main.php';
}