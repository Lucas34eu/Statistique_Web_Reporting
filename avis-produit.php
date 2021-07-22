<?php

$datesemaine = date('w')-1;
$datemois = date('j')-1;
$semaineDerniere = $datesemaine+7 ;
$MoisDernier = $datemois+30;

 

//connexion a la BDD
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=;charset=utf8', '', '');
    
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}



//------------------------------//                                     Avis Produit                             //------------------------------// 


//Avis Produit par jour
$AvisProduitbyToday = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN date(subdate(now(),1)) and  date(now()) ');
$donnees = $AvisProduitbyToday->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);


$AvisProduit1DaysAgo = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN date(subdate(now(),2)) and  date(subdate(now(),1))');
$donnees = $AvisProduit1DaysAgo->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'], FILE_APPEND );

$AvisProduit2DaysAgo = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN date(subdate(now(),3)) and  date(subdate(now(),2))');
$donnees = $AvisProduit2DaysAgo->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'], FILE_APPEND );

$AvisProduit3DaysAgo = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN date(subdate(now(),4)) and  date(subdate(now(),3))');
$donnees = $AvisProduit3DaysAgo->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'], FILE_APPEND );

$AvisProduit4DaysAgo = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN date(subdate(now(),5)) and  date(subdate(now(),4))');
$donnees = $AvisProduit4DaysAgo->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'], FILE_APPEND );

$AvisProduit5DaysAgo = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN date(subdate(now(),6)) and  date(subdate(now(),5))');
$donnees = $AvisProduit5DaysAgo->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'], FILE_APPEND );

$AvisProduit6DaysAgo = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN date(subdate(now(),7)) and  date(subdate(now(),6))');
$donnees = $AvisProduit6DaysAgo->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'], FILE_APPEND );

$AvisProduit7DaysAgo = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN date(subdate(now(),8)) and  date(subdate(now(),7))');
$donnees = $AvisProduit7DaysAgo->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'], FILE_APPEND );

$AvisProduit8DaysAgo = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN date(subdate(now(),9)) and  date(subdate(now(),8))');
$donnees = $AvisProduit8DaysAgo->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'], FILE_APPEND );

$AvisProduit9DaysAgo = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN date(subdate(now(),10)) and  date(subdate(now(),9))');
$donnees = $AvisProduit9DaysAgo->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'], FILE_APPEND );



//commande par semaine
$AvisProduitbyWeek = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN 
date(subdate(now(),'. $datesemaine .') ) 
and 
date(now())');
$donnees = $AvisProduitbyWeek->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);


///
$AvisProduitbyWeek = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN 
date(subdate(now(),'. $semaineDerniere.') )
and
date(subdate(now(),'. $datesemaine .') ) ');
$donnees = $AvisProduitbyWeek->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyWeek = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+14) )
and
date(subdate(now(),'. $datesemaine .'+7) ) ');
$donnees = $AvisProduitbyWeek->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyWeek = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+21) )
and
date(subdate(now(),'. $datesemaine .'+14) ) ');
$donnees = $AvisProduitbyWeek->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyWeek = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+28) )
and
date(subdate(now(),'. $datesemaine .'+21) ) ');
$donnees = $AvisProduitbyWeek->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyWeek = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+35) )
and
date(subdate(now(),'. $datesemaine .'+28) ) ');
$donnees = $AvisProduitbyWeek->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyWeek = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+42) )
and
date(subdate(now(),'. $datesemaine .'+35) ) ');
$donnees = $AvisProduitbyWeek->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyWeek = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+49) )
and
date(subdate(now(),'. $datesemaine .'+42) ) ');
$donnees = $AvisProduitbyWeek->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyWeek = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+56) )
and
date(subdate(now(),'. $datesemaine .'+49) ) ');
$donnees = $AvisProduitbyWeek->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyWeek = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+63) )
and
date(subdate(now(),'. $datesemaine .'+56) ) ');
$donnees = $AvisProduitbyWeek->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);



//commande par mois
$AvisProduitbyMonth = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN
date(subdate(now(),'. $datemois .') ) 
and 
date(now())
');
$donnees = $AvisProduitbyMonth->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'], FILE_APPEND );

////
$AvisProduitbyLastMonth = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN
date(subdate(now(),'. $MoisDernier .') ) 
and 
date(subdate(now(),'. $datemois .'))
');
$donnees = $AvisProduitbyLastMonth->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyLastMonth = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN
date(subdate(now(),'. $datemois .'+60) ) 
and 
date(subdate(now(),'. $datemois .'+30))');
$donnees = $AvisProduitbyLastMonth->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyLastMonth = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN
date(subdate(now(),'. $datemois .'+90) ) 
and 
date(subdate(now(),'. $datemois .'+60))');
$donnees = $AvisProduitbyLastMonth->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyLastMonth = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN
date(subdate(now(),'. $datemois .'+120) ) 
and 
date(subdate(now(),'. $datemois .'+90))');
$donnees = $AvisProduitbyLastMonth->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyLastMonth = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN
date(subdate(now(),'. $datemois .'+150) ) 
and 
date(subdate(now(),'. $datemois .'+120))');
$donnees = $AvisProduitbyLastMonth->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyLastMonth = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN
date(subdate(now(),'. $datemois .'+180) ) 
and 
date(subdate(now(),'. $datemois .'+150))');
$donnees = $AvisProduitbyLastMonth->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyLastMonth = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN
date(subdate(now(),'. $datemois .'+210) ) 
and 
date(subdate(now(),'. $datemois .'+180))');
$donnees = $AvisProduitbyLastMonth->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyLastMonth = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN
date(subdate(now(),'. $datemois .'+240) ) 
and 
date(subdate(now(),'. $datemois .'+210))');
$donnees = $AvisProduitbyLastMonth->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);

$AvisProduitbyLastMonth = $bdd->query('select count(id_review) from  ppj4c_iqitreviews_products where date_add BETWEEN
date(subdate(now(),'. $datemois .'+270) ) 
and 
date(subdate(now(),'. $datemois .'+240))');
$donnees = $AvisProduitbyLastMonth->fetch();
file_put_contents('donnees.txt', "\n". $donnees['count(id_review)'] , FILE_APPEND);
