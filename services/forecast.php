<?php
require getcwd() . 'vendor/autoload.php'; // Composer
require '../_core.php';
$twig = rc24_initialise_twig();
echo $twig->render('services/forecast.html');

exit; // not really necessary, but nice to have :^)
?>