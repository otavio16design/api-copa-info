<?php
require 'php-rest-curl.php';
require_once('vendor/autoload.php');

use \Statickidz\GoogleTranslate;

$traduzir = new GoogleTranslate();
// header('Content-Type: application/json');

$url =  "http://api.cup2022.ir/api/v1/match";
$result = RestCurl::get($url);

$data = $result['data']->data;

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="all.css">
</head>

<body>

    <div >
        <h2 class="titulo">JOGOS COPA DO MUNDO 2022</h2>
    </div>


    <h3 class="titulo2">GRUPO A</h3>
    <?php include('jogos-page/grupoA.php'); ?>
    <h3 class="titulo2">GRUPO B</h3>
    <?php include('jogos-page/grupoB.php'); ?>
    <h3 class="titulo2">GRUPO C</h3>
    <?php include('jogos-page/grupoC.php'); ?>
    <h3 class="titulo2">GRUPO D</h3>
    <?php include('jogos-page/grupoD.php'); ?>
    <h3 class="titulo2">GRUPO E</h3>
    <?php include('jogos-page/grupoE.php'); ?>
    <h3 class="titulo2">GRUPO F</h3>
    <?php include('jogos-page/grupoF.php'); ?>
    <h3 class="titulo2">GRUPO G</h3>
    <?php include('jogos-page/grupoG.php'); ?>
    <h3 class="titulo2">GRUPO H</h3>
    <?php include('jogos-page/grupoH.php'); ?>



</body>

</html>