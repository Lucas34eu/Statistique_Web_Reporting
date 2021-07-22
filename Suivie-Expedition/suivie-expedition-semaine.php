<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 $week = date("Y-m-d", strtotime('last Monday'));
 $weekAgo1 = date("Y-m-d", strtotime($week . ' -7 days'));
 $weekAgo2 = date("Y-m-d", strtotime($week . ' -14 days'));
 $weekAgo3 = date("Y-m-d", strtotime($week . ' -21 days'));
 $weekAgo4 = date("Y-m-d", strtotime($week . ' -28 days'));
 $weekAgo5 = date("Y-m-d", strtotime($week . ' -35 days'));
 $weekAgo6 = date("Y-m-d", strtotime($week . ' -42 days'));
 $weekAgo7 = date("Y-m-d", strtotime($week . ' -49 days'));
 $weekAgo8 = date("Y-m-d", strtotime($week . ' -56 days'));
 $weekAgo9 = date("Y-m-d", strtotime($week . ' -63 days'));




/*************** Commande Expédie ***************/


/*************** STATUT 4 ***************/
$filesFour = glob("../import/backup-statuts/4/*.csv");

$CommandeEXPWeek = 0;
$CommandeEXP1WeekAgo = 0;
$CommandeEXP2WeekAgo = 0;
$CommandeEXP3WeekAgo = 0;
$CommandeEXP4WeekAgo = 0;
$CommandeEXP5WeekAgo = 0;
$CommandeEXP6WeekAgo = 0;
$CommandeEXP7WeekAgo = 0;
$CommandeEXP8WeekAgo = 0;
$CommandeEXP9WeekAgo = 0;

 

foreach ($filesFour as $filenameFour) {

    $dateCommandeEXP = date("Y-m-d", filemtime($filenameFour));
    

    if ($dateCommandeEXP >= $week) {
        $CommandeEXPWeek++;
    } else {


        if ($dateCommandeEXP >= $weekAgo1 ) {
            $CommandeEXP1WeekAgo++;
        } else if ($dateCommandeEXP >= $weekAgo2) {
            $CommandeEXP2WeekAgo++;
        } else if ($dateCommandeEXP >= $weekAgo3 ) {
            $CommandeEXP3WeekAgo++;
        } else if ($dateCommandeEXP >= $weekAgo4 ) {
            $CommandeEXP4WeekAgo++;
        } else if ($dateCommandeEXP >= $weekAgo5 ) {
            $CommandeEXP5WeekAgo++;
        } else if ($dateCommandeEXP >= $weekAgo6  ) {
            $CommandeEXP6WeekAgo++;
        } else if ($dateCommandeEXP >= $weekAgo7 ) {
            $CommandeEXP7WeekAgo++;
        } else if ($dateCommandeEXP >= $weekAgo8 ) {
            $CommandeEXP8WeekAgo++;
        } else if ($dateCommandeEXP >= $weekAgo9 ) {
            $CommandeEXP9WeekAgo++;
        }
    }
}


/*************** STATUT 18 ***************/

$filesFour = glob("../import/backup-statuts/18/*.csv");


$CommandeEXPPWeek = 0;
$CommandeEXPP1WeekAgo = 0;
$CommandeEXPP2WeekAgo = 0;
$CommandeEXPP3WeekAgo = 0;
$CommandeEXPP4WeekAgo = 0;
$CommandeEXPP5WeekAgo = 0;
$CommandeEXPP6WeekAgo = 0;
$CommandeEXPP7WeekAgo = 0;
$CommandeEXPP8WeekAgo = 0;
$CommandeEXPP9WeekAgo = 0;

foreach ($filesFour as $filenameFour) {

    $dateCommandeEXPP = date("Y-m-d", filemtime($filenameFour));
    

    if ($dateCommandeEXPP >= $week) {
        $CommandeEXPPWeek++;
    } else {


        if ($dateCommandeEXPP >= $weekAgo1) {
            $CommandeEXPP1WeekAgo++;
        } else if ($dateCommandeEXPP >= $weekAgo2 ) {
            $CommandeEXPP2WeekAgo++;
        } else if ($dateCommandeEXPP >= $weekAgo3) {
            $CommandeEXPP3WeekAgo++;
        } else if ($dateCommandeEXPP >= $weekAgo4 ) {
            $CommandeEXPP4WeekAgo++;
        } else if ($dateCommandeEXPP >= $weekAgo5) {
            $CommandeEXPP5WeekAgo++;
        } else if ($dateCommandeEXPP >= $weekAgo6) {
            $CommandeEXPP6WeekAgo++;
        } else if ($dateCommandeEXPP >= $weekAgo7 ) {
            $CommandeEXPP7WeekAgo++;
        } else if ($dateCommandeEXPP >= $weekAgo8 ) {
            $CommandeEXPP8WeekAgo++;
        } else if ($dateCommandeEXPP >= $weekAgo9) {
            $CommandeEXPP9WeekAgo++;
        }
    }
}
/*
 '<br>';
 $CommandeEXPWeek . '<br>';
 $CommandeEXP1WeekAgo . '<br>';
 $CommandeEXP2WeekAgo . '<br>';
 $CommandeEXP3WeekAgo . '<br>';
 $CommandeEXP4WeekAgo . '<br>';
 $CommandeEXP5WeekAgo . '<br>';
 $CommandeEXP6WeekAgo . '<br>';
 $CommandeEXP7WeekAgo . '<br>';
 $CommandeEXP8WeekAgo . '<br>';
 $CommandeEXP9WeekAgo . '<br>';

 $CommandeEXPPWeek . '<br>';
 $CommandeEXPP1WeekAgo . '<br>';
 $CommandeEXPP2WeekAgo . '<br>';
 $CommandeEXPP3WeekAgo . '<br>';
 $CommandeEXPP4WeekAgo . '<br>';
 $CommandeEXPP5WeekAgo . '<br>';
 $CommandeEXPP6WeekAgo . '<br>';
 $CommandeEXPP7WeekAgo . '<br>';
 $CommandeEXPP8WeekAgo . '<br>';
 $CommandeEXPP9WeekAgo . '<br>';
*/

file_put_contents('donnees.txt', "\n" . $CommandeEXPWeek, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP1WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP2WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP3WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP4WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP5WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP6WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP7WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP8WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP9WeekAgo, FILE_APPEND);

file_put_contents('donnees.txt', "\n" . $CommandeEXPPWeek, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP1WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP2WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP3WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP4WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP5WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP6WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP7WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP8WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP9WeekAgo, FILE_APPEND);

?>