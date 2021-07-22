
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$Month = new DateTime();
$Month = $Month->modify('first day of this month')->format('Y-m-d');

$MonthAgo1 = new DateTime();
$MonthAgo1 = $MonthAgo1->modify('first day of this month')->modify('-1 months')->format('Y-m-d');

$MonthAgo2 = new DateTime();
$MonthAgo2= $MonthAgo2->modify('first day of this month')->modify('-2 months')->format('Y-m-d');

$MonthAgo3 = new DateTime();
$MonthAgo3= $MonthAgo3->modify('first day of this month')->modify('-3 months')->format('Y-m-d');

$MonthAgo4 = new DateTime();
$MonthAgo4= $MonthAgo4->modify('first day of this month')->modify('-4 months')->format('Y-m-d');

$MonthAgo5 = new DateTime();
$MonthAgo5= $MonthAgo5->modify('first day of this month')->modify('-5 months')->format('Y-m-d');

$MonthAgo6 = new DateTime();
$MonthAgo6= $MonthAgo6->modify('first day of this month')->modify('-6 months')->format('Y-m-d');

$MonthAgo7 = new DateTime();
$MonthAgo7= $MonthAgo7->modify('first day of this month')->modify('-7 months')->format('Y-m-d');

$MonthAgo8 = new DateTime();
$MonthAgo8= $MonthAgo8->modify('first day of this month')->modify('-8 months')->format('Y-m-d');

$MonthAgo9 = new DateTime();
$MonthAgo9= $MonthAgo9->modify('first day of this month')->modify('-9 months')->format('Y-m-d');



/*************** Commande Expédie ***************/


/*************** STATUT 4 ***************/
$filesFour = glob("../import/backup-statuts/4/*.csv");

$CommandeEXPMonth = 0;
$CommandeEXP1MonthAgo = 0;
$CommandeEXP2MonthAgo = 0;
$CommandeEXP3MonthAgo = 0;
$CommandeEXP4MonthAgo = 0;
$CommandeEXP5MonthAgo = 0;
$CommandeEXP6MonthAgo = 0;
$CommandeEXP7MonthAgo = 0;
$CommandeEXP8MonthAgo = 0;
$CommandeEXP9MonthAgo = 0;
 

foreach ($filesFour as $filenameFour) {

    $dateCommandeEXP = date("Y-m-d", filemtime($filenameFour));
    
    if ($dateCommandeEXP >= $Month) {

        $CommandeEXPMonth++;
        
    } else {


        if ($dateCommandeEXP >= $MonthAgo1 ) {
            $CommandeEXP1MonthAgo++;
        } else if ($dateCommandeEXP >= $MonthAgo2) {
            $CommandeEXP2MonthAgo++;
        } else if ($dateCommandeEXP >= $MonthAgo3) {
            $CommandeEXP3MonthAgo++;
        } else if ($dateCommandeEXP >= $MonthAgo4) {
            $CommandeEXP4MonthAgo++;
        } else if ($dateCommandeEXP >= $MonthAgo5) {
            $CommandeEXP5MonthAgo++;
        } else if ($dateCommandeEXP >= $MonthAgo6 ) {
            $CommandeEXP6MonthAgo++;
        } else if ($dateCommandeEXP >= $MonthAgo7 ) {
            $CommandeEXP7MonthAgo++;
        } else if ($dateCommandeEXP >= $MonthAgo8) {
            $CommandeEXP8MonthAgo++;
        } else if ($dateCommandeEXP >= $MonthAgo9 ) {
            $CommandeEXP9MonthAgo++;
        }
    }
}

/*************** STATUT 18 ***************/

$filesFour = glob("../import/backup-statuts/18/*.csv");

$CommandeEXPPMonth = 0;
$CommandeEXPP1MonthAgo = 0;
$CommandeEXPP2MonthAgo = 0;
$CommandeEXPP3MonthAgo = 0;
$CommandeEXPP4MonthAgo = 0;
$CommandeEXPP5MonthAgo = 0;
$CommandeEXPP6MonthAgo = 0;
$CommandeEXPP7MonthAgo = 0;
$CommandeEXPP8MonthAgo = 0;
$CommandeEXPP9MonthAgo = 0;




foreach ($filesFour as $filenameFour) {

    $dateCommandeEXPP = date("Y-m-d", filemtime($filenameFour));


    if ($dateCommandeEXPP >= $Month) {

        $CommandeEXPPMonth++;
    } else {

        if ($dateCommandeEXPP > $MonthAgo1 && $dateCommandeEXPP < $Month ) {
            $CommandeEXPP1MonthAgo++;
        } else if ($dateCommandeEXPP > $MonthAgo2 && $dateCommandeEXPP < $MonthAgo1) {
            $CommandeEXPP2MonthAgo++;
        } else if ($dateCommandeEXPP > $MonthAgo3 && $dateCommandeEXPP < $MonthAgo2) {
            $CommandeEXPP3MonthAgo++;
        } else if ($dateCommandeEXPP > $MonthAgo4 && $dateCommandeEXPP < $MonthAgo3) {
            $CommandeEXPP4MonthAgo++;
        } else if ($dateCommandeEXPP > $MonthAgo5 && $dateCommandeEXPP < $MonthAgo4) {
            $CommandeEXPP5MonthAgo++;
        } else if ($dateCommandeEXPP > $MonthAgo6 && $dateCommandeEXPP < $MonthAgo5) {
            $CommandeEXPP6MonthAgo++;
        } else if ($dateCommandeEXPP > $MonthAgo7 && $dateCommandeEXPP < $MonthAgo6) {
            $CommandeEXPP7MonthAgo++;
        } else if ($dateCommandeEXPP > $MonthAgo8 && $dateCommandeEXPP < $MonthAgo7) {
            $CommandeEXPP8MonthAgo++;
        } else if ($dateCommandeEXPP > $MonthAgo9 && $dateCommandeEXPP < $MonthAgo8) {
            $CommandeEXPP9MonthAgo++;
        }
    }
}
/*
 '<br>';
 $CommandeEXPMonth . '<br>';
 $CommandeEXP1MonthAgo . '<br>';
 $CommandeEXP2MonthAgo . '<br>';
 $CommandeEXP3MonthAgo . '<br>';
 $CommandeEXP4MonthAgo . '<br>';
 $CommandeEXP5MonthAgo . '<br>';
 $CommandeEXP6MonthAgo . '<br>';
 $CommandeEXP7MonthAgo . '<br>';
 $CommandeEXP8MonthAgo . '<br>';
 $CommandeEXP9MonthAgo . '<br>';

 $CommandeEXPPMonth . '<br>';
 $CommandeEXPP1MonthAgo . '<br>';
 $CommandeEXPP2MonthAgo . '<br>';
 $CommandeEXPP3MonthAgo . '<br>';
 $CommandeEXPP4MonthAgo . '<br>';
 $CommandeEXPP5MonthAgo . '<br>';
 $CommandeEXPP6MonthAgo . '<br>';
 $CommandeEXPP7MonthAgo . '<br>';
 $CommandeEXPP8MonthAgo . '<br>';
 $CommandeEXPP9MonthAgo . '<br>';
*/

file_put_contents('donnees.txt', "\n" . $CommandeEXPMonth, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP1MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP2MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP3MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP4MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP5MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP6MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP7MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP8MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXP9MonthAgo, FILE_APPEND);

file_put_contents('donnees.txt', "\n" . $CommandeEXPPMonth, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP1MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP2MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP3MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP4MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP5MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP6MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP7MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP8MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $CommandeEXPP9MonthAgo, FILE_APPEND);

?>