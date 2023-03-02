<?php
require_once "config.php";
ob_start();
$uri = $_SERVER["REQUEST_URI"];
$cleaned = explode("?", $uri)[0];

route('/', 'homeController');
route('/magamrol', 'aboutController');
route('/coaching', 'coachingController');
route('/sport-mentaltrening', 'sportMentalTreningController');
route('/taboroztatas', 'taboroztatasController');
route('/senior-torna', 'seniorTornaController');
route('/referencia', 'referenciaController');
route('/kapcsolat', 'contactController');


list($view, $data) = dispatch($cleaned, 'notFoundController');
if (preg_match("%^redirect\:%", $view)) {
    $redirectTarget = substr($view, 9);
    header("Location:" . $redirectTarget);
    die;
}
extract($data);
ob_clean();
require_once "templates/layout.php";