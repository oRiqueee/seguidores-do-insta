<?php
error_reporting(0);

$usuario = $_POST['inserir'];

$seguidores = json_decode(file_get_contents("https://www.instagram.com/" . $usuario . "/channel/?__a=1"));  

 $resultado = number_format($seguidores->graphql->user->edge_followed_by->count);
    
   ?>