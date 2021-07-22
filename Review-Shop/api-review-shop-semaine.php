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



$AvisWeek = 0;
$Avis1WeekAgo = 0;
$Avis2WeekAgo = 0;
$Avis3WeekAgo = 0;
$Avis4WeekAgo = 0;
$Avis5WeekAgo = 0;
$Avis6WeekAgo = 0;
$Avis7WeekAgo = 0;
$Avis8WeekAgo = 0;
$Avis9WeekAgo = 0;





$i = 100; 



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
        

        if ($date_creation >= $week) {

            $AvisWeek++;
            
        } else {


            if ($date_creation >= $weekAgo1 ) {
                $Avis1WeekAgo++;
            } else if ($date_creation >= $weekAgo2) {
                $Avis2WeekAgo++;
            } else if ($date_creation >= $weekAgo3 ) {
                $Avis3WeekAgo++;
            } else if ($date_creation >= $weekAgo4 ) {
                $Avis4WeekAgo++;
            } else if ($date_creation >= $weekAgo5 ) {
                $Avis5WeekAgo++;
            } else if ($date_creation >= $weekAgo6  ) {
                $Avis6WeekAgo++;
            } else if ($date_creation >= $weekAgo7 ) {
                $Avis7WeekAgo++;
            } else if ($date_creation >= $weekAgo8 ) {
                $Avis8WeekAgo++;
            } else if ($date_creation >= $weekAgo9 ) {
                $Avis9WeekAgo++;
            }
        }

        
        $a++;
    }







    $i++;
}

/*
echo $AvisWeek;echo '<br>';
echo $Avis1WeekAgo;echo '<br>';
echo $Avis2WeekAgo;echo '<br>';
echo $Avis3WeekAgo;echo '<br>';
echo $Avis4WeekAgo;echo '<br>';
echo $Avis5WeekAgo;echo '<br>';
echo $Avis6WeekAgo;echo '<br>';
echo $Avis7WeekAgo;echo '<br>';
*/
echo $Avis8WeekAgo;echo '<br>';
echo $Avis9WeekAgo;echo '<br>';

file_put_contents('donnees.txt', "\n" . $AvisWeek, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis1WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis2WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis3WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis4WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis5WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis6WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis7WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis8WeekAgo, FILE_APPEND);
file_put_contents('donnees.txt', "\n" . $Avis9WeekAgo, FILE_APPEND);