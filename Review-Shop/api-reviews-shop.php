<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('_PS_MODE_DEV_', true);


$today = date("Y-m-d");
$daysago1 = date("Y-m-d", strtotime('-1 days'));
$daysago2 = date("Y-m-d", strtotime('-2 days'));
$daysago3 = date("Y-m-d", strtotime('-3 days'));
$daysago4 = date("Y-m-d", strtotime('-4 days'));
$daysago5 = date("Y-m-d", strtotime('-5 days'));
$daysago6 = date("Y-m-d", strtotime('-6 days'));
$daysago7 = date("Y-m-d", strtotime('-7 days'));
$daysago8 = date("Y-m-d", strtotime('-8 days'));
$daysago9 = date("Y-m-d", strtotime('-9 days'));

$AvisToday = 0;
$Avis1daysago = 0;
$Avis2daysago = 0;
$Avis3daysago = 0;
$Avis4daysago = 0;
$Avis5daysago = 0;
$Avis6daysago = 0;
$Avis7daysago = 0;
$Avis8daysago = 0;
$Avis9daysago = 0;



$i = 160; 
$index=$i*1.8;



while ($i < $index) { 

    $url = 'https://api.trustpilot.com/v1/business-units/5e5faea457d9200001c07044/reviews?apikey=m2dYSJGYn6YtTGLhK8VCBB3ApR2Ynu8f&perPage=12&page=' . $i . '&orderBy=createdat.asc&includeReportedReviews=true';

    $curl = curl_init();

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

    $reviews = json_decode(curl_exec($curl), true);

    curl_close($curl);



$a = 0;
    foreach ($reviews["reviews"] as $review) {
        $date_creation = substr($reviews["reviews"][$a]["createdAt"], 0, 10);
        
        
        if ($date_creation == $today) {

            $AvisToday++;
            
        } else {


            if ($date_creation == $daysago1) {
                $Avis1daysago++;
            } else if ($date_creation == $daysago2) {
                $Avis2daysago++;
            } else if ($date_creation == $daysago3) {
                $Avis3daysago++;
            } else if ($date_creation == $daysago4) {
                $Avis4daysago++;
            } else if ($date_creation == $daysago5) {
                $Avis5daysago++;
            } else if ($date_creation == $daysago6) {
                $Avis6daysago++;
            } else if ($date_creation == $daysago7) {
                $Avis7daysago++;
            } else if ($date_creation == $daysago8) {
                $Avis8daysago++;
            } else if ($date_creation == $daysago9) {
                $Avis9daysago++;
            }
        }

        
        $a++;
    }







    $i++;
}

/*

echo $AvisToday;echo '<br>';
echo $Avis1daysago;echo '<br>';
echo $Avis2daysago;echo '<br>';
echo $Avis3daysago;echo '<br>';
echo $Avis4daysago;echo '<br>';
echo $Avis5daysago;echo '<br>';
echo $Avis6daysago;echo '<br>';
echo $Avis7daysago;echo '<br>';
echo $Avis8daysago;echo '<br>';
echo $Avis9daysago;echo '<br>';

*/

file_put_contents('donnees.txt', "\n" . $AvisToday, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis1daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis2daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis3daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis4daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis5daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis6daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis7daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis8daysago, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis9daysago, FILE_APPEND);