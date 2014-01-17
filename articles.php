<?php

// Twig Hello world without Slim

// Include Twig
include 'Twig/Autoloader.php';

// Do the autoload
Twig_Autoloader::register();

// Setup the path to the templates folder
// In this case our folder is called "templates"
$loader = new Twig_Loader_Filesystem('templates');

// Initialize Twig
$twig = new Twig_Environment($loader);

// Now we have our Twig environment ready
// Lets render some templates!

// An array with data to pass to the template
$data = array(
    'title' => 'Twig Hello World',
    'name' => 'José Maria',
    'city' => 'Azenha de Baixo'
);

// Call the render method with the name of the template and data array
echo $twig->render('articles.twig.html', $data);
