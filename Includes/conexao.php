<?php
$bd_local = 'localhost';
$usuario='root';
$senha='';
$bd = 'bd_cantina';

$link = mysqli_connect($bd_local,$usuario,$senha,$bd);
$link->query("SET NAMES 'utf8'");
$link->query('SET character_set_connection=utf8');
$link->query('SET character_set_client=utf8');
$link->query('SET character_set_results=utf8');

?>