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

$AvisMonth = 0;
$Avis1MonthAgo = 0;
$Avis2MonthAgo = 0;
$Avis3MonthAgo = 0;
$Avis4MonthAgo = 0;
$Avis5MonthAgo = 0;
$Avis6MonthAgo = 0;
$Avis7MonthAgo = 0;
$Avis8MonthAgo = 0;
$Avis9MonthAgo = 0;





$i = 2; 



while ($i < 300) {

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
        
        
        if ($date_creation >= $Month) {

            $AvisMonth++;
            
        } else {


            if ($date_creation >= $MonthAgo1 ) {
                $Avis1MonthAgo++;
            } else if ($date_creation >= $MonthAgo2) {
                $Avis2MonthAgo++;
            } else if ($date_creation >= $MonthAgo3) {
                $Avis3MonthAgo++;
            } else if ($date_creation >= $MonthAgo4) {
                $Avis4MonthAgo++;
            } else if ($date_creation >= $MonthAgo5) {
                $Avis5MonthAgo++;
            } else if ($date_creation >= $MonthAgo6 ) {
                $Avis6MonthAgo++;
            } else if ($date_creation >= $MonthAgo7 ) {
                $Avis7MonthAgo++;
            } else if ($date_creation >= $MonthAgo8) {
                $Avis8MonthAgo++;
            } else if ($date_creation >= $MonthAgo9 ) {
                $Avis9MonthAgo++;
            }
        }

        
        $a++;
    }







    $i++;
}


/*
echo $AvisMonth;echo '<br>';
echo $Avis1MonthAgo;echo '<br>';
echo $Avis2MonthAgo;echo '<br>';
echo $Avis3MonthAgo;echo '<br>';
echo $Avis4MonthAgo;echo '<br>';
echo $Avis5MonthAgo;echo '<br>';
echo $Avis6MonthAgo;echo '<br>';
echo $Avis7MonthAgo;echo '<br>';
echo $Avis8MonthAgo;echo '<br>';
echo $Avis9MonthAgo;echo '<br>';
*/

file_put_contents('donnees.txt', "\n" . $AvisMonth, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis1MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis2MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis3MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis4MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis5MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis6MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis7MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis8MonthAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis9MonthAgo, FILE_APPEND);