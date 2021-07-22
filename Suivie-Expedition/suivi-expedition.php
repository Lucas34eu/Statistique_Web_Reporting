<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 
 $today = date("Y-m-d");
 $daysago1 = date("Y-m-d", strtotime('1 daysago'));
 $daysago2 = date("Y-m-d", strtotime('2 daysago'));
 $daysago3 = date("Y-m-d", strtotime('3 daysago'));
 $daysago4 = date("Y-m-d", strtotime('4 daysago'));
 $daysago5 = date("Y-m-d", strtotime('5 daysago'));
 $daysago6 = date("Y-m-d", strtotime('6 daysago'));
 $daysago7 = date("Y-m-d", strtotime('7 daysago'));
 $daysago8 = date("Y-m-d", strtotime('8 daysago'));
 $daysago9 = date("Y-m-d", strtotime('9 daysago'));




/*************** Commande Expédie ***************/


/*************** STATUT 4 ***************/
$filesFour = glob("../import/backup-statuts/4/*.csv");

$CommandeEXPToday = 0;
$CommandeEXP1daysago = 0;
$CommandeEXP2daysago = 0;
$CommandeEXP3daysago = 0;
$CommandeEXP4daysago = 0;
$CommandeEXP5daysago = 0;
$CommandeEXP6daysago = 0;
$CommandeEXP7daysago = 0;
$CommandeEXP8daysago = 0;
$CommandeEXP9daysago = 0;


foreach ($filesFour as $filenameFour) {

    $dateCommandeEXP = date("Y-m-d", filemtime($filenameFour));
    


    if ($dateCommandeEXP == $today) {
        
        $CommandeEXPToday++;
    } else {


        if ($dateCommandeEXP == $daysago1) {
            $CommandeEXP1daysago++;
        } else if ($dateCommandeEXP == $daysago2) {
            $CommandeEXP2daysago++;
        } else if ($dateCommandeEXP == $daysago3) {
            $CommandeEXP3daysago++;
        } else if ($dateCommandeEXP == $daysago4) {
            $CommandeEXP4daysago++;
        } else if ($dateCommandeEXP == $daysago5) {
            $CommandeEXP5daysago++;
        } else if ($dateCommandeEXP == $daysago6) {
            $CommandeEXP6daysago++;
        } else if ($dateCommandeEXP == $daysago7) {
            $CommandeEXP7daysago++;
        } else if ($dateCommandeEXP == $daysago8) {
            $CommandeEXP8daysago++;
        } else if ($dateCommandeEXP == $daysago9) {
            $CommandeEXP9daysago++;
        }
    }
}

/*************** STATUT 18 ***************/

$filesFour = glob("../import/backup-statuts/18/*.csv");

$CommandeEXPPToday = 0;
$CommandeEXPP1daysago = 0;
$CommandeEXPP2daysago = 0;
$CommandeEXPP3daysago = 0;
$CommandeEXPP4daysago = 0;
$CommandeEXPP5daysago = 0;
$CommandeEXPP6daysago = 0;
$CommandeEXPP7daysago = 0;
$CommandeEXPP8daysago = 0;
$CommandeEXPP9daysago = 0;




foreach ($filesFour as $filenameFour) {

    $dateCommandeEXPP = date("Y-m-d", filemtime($filenameFour));
    
    if ($dateCommandeEXPP == date("Y-m-d")) {

        $CommandeEXPPToday++;
    } else {

        if ($dateCommandeEXPP == $daysago1) {
            $CommandeEXPP1daysago++;
        } else if ($dateCommandeEXPP == $daysago2) {
            $CommandeEXPP2daysago++;
        } else if ($dateCommandeEXPP == $daysago3) {
            $CommandeEXPP3daysago++;
        } else if ($dateCommandeEXPP == $daysago4) {
            $CommandeEXPP4daysago++;
        } else if ($dateCommandeEXPP == $daysago5) {
            $CommandeEXPP5daysago++;
        } else if ($dateCommandeEXPP == $daysago6) {
            $CommandeEXPP6daysago++;
        } else if ($dateCommandeEXPP == $daysago7) {
            $CommandeEXPP7daysago++;
        } else if ($dateCommandeEXPP == $daysago8) {
            $CommandeEXPP8daysago++;
        } else if ($dateCommandeEXPP == $daysago9) {
            $CommandeEXPP9daysago++;
        }
    }
}
/*
echo $CommandeEXPToday;echo '<br>';
echo $CommandeEXP1daysago;echo '<br>';
echo $CommandeEXP2daysago;echo '<br>';
echo $CommandeEXP3daysago;echo '<br>';
echo $CommandeEXP4daysago;echo '<br>';
echo $CommandeEXP5daysago;echo '<br>';
echo $CommandeEXP6daysago;echo '<br>';
echo $CommandeEXP7daysago;echo '<br>';
echo $CommandeEXP8daysago;echo '<br>';
echo $CommandeEXP9daysago;echo '<br>';

echo $CommandeEXPPToday;echo '<br>';
echo $CommandeEXPP1daysago;echo '<br>';
echo $CommandeEXPP2daysago;echo '<br>';
echo $CommandeEXPP3daysago;echo '<br>';
echo $CommandeEXPP4daysago;echo '<br>';
echo $CommandeEXPP5daysago;echo '<br>';
echo $CommandeEXPP6daysago;echo '<br>';
echo $CommandeEXPP7daysago;echo '<br>';
echo $CommandeEXPP8daysago;echo '<br>';
echo $CommandeEXPP9daysago;echo '<br>';
*/

file_put_contents('donnees.txt', "\n" . $CommandeEXPToday, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP1daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP2daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP3daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP4daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP5daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP6daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP7daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP8daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP9daysago, FILE_APPEND);

file_put_contents('donnees.txt', "\n" . $CommandeEXPPToday, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP1daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP2daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP3daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP4daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP5daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP6daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP7daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP8daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP9daysago, FILE_APPEND);

?>