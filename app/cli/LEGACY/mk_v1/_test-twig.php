<?php 


include_once("includes/functions.php"); 


require_once '../../vendor/autoload.php';

// /Users/armandoromero/Documents/devF1/mailtool.lan/vendor/autoload.php
// /Users/armandoromero/Documents/devF1/mailtool.lan/app/cli/test.php


$loader = new \Twig\Loader\FilesystemLoader('../../app/views/pmi');
$twig = new \Twig\Environment($loader);

$template = $twig->load('cli/cli-watch-vars.twig');

echo $template->render([
    'name' => 'Armando',
    'runonmac' => 'demovar1',
    'urlpaginum' => 'demovar2',
    'urllocalhost' => 'demovar3'


]);

// echo "hola mundo".PHP_EOL;
