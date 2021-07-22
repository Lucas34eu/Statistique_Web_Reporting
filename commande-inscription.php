<?php

$datesemaine = date('w')-1;
$datemois = date('j')-1;
$semaineDerniere = $datesemaine+7 ;
$MoisDernier = $datemois+30;

//connexion a la BDD
try
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=j4cfrprod;charset=utf8', 'j4cfrprod', 'Inbategg');
    
     
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

//------------------------------//                                     Inscrit                            //------------------------------// 


//Inscrit  par jour
$InscritToday = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN date(subdate(now(),1)) and  date(now()) ');
$donnees = $InscritToday->fetch();
file_put_contents('donnees.txt',$donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 1 days ago
$Inscrit1DaysAgo = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN date(subdate(now(),2)) and  date(subdate(now(),1))');
$donnees = $Inscrit1DaysAgo->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 2 days ago
$Inscrit2DaysAgo = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN date(subdate(now(),3)) and  date(subdate(now(),2))');
$donnees = $Inscrit2DaysAgo->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 3 days ago
$Inscrit3DaysAgo = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN date(subdate(now(),4)) and  date(subdate(now(),3))');
$donnees = $Inscrit3DaysAgo->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 4 days ago
$Inscrit4DaysAgo = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN date(subdate(now(),5)) and  date(subdate(now(),4))');
$donnees = $Inscrit4DaysAgo->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 5 days ago
$Inscrit5DaysAgo = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN date(subdate(now(),6)) and  date(subdate(now(),5))');
$donnees = $Inscrit5DaysAgo->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 6 days ago
$Inscrit6DaysAgo = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN date(subdate(now(),7)) and  date(subdate(now(),6))');
$donnees = $Inscrit6DaysAgo->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 7 days ago
$Inscrit7DaysAgo = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN date(subdate(now(),8)) and  date(subdate(now(),7))');
$donnees = $Inscrit7DaysAgo->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 8 days ago
$Inscrit8DaysAgo = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN date(subdate(now(),9)) and  date(subdate(now(),8))');
$donnees = $Inscrit8DaysAgo->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 9 days ago
$Inscrit9DaysAgo = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN date(subdate(now(),10)) and  date(subdate(now(),9))');
$donnees = $Inscrit9DaysAgo->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);





//Inscrit par semaine
$InscritWeek = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN 
date(subdate(now(),'. $datesemaine .') ) 
and 
date(now())');
$donnees = $InscritWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);



//Inscrit 1 week ago 
$InscritLastWeek = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN 
date(subdate(now(),'. $semaineDerniere.') )
and
date(subdate(now(),'. $datesemaine .') ) ');
$donnees = $InscritLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);



//Inscrit 2 week ago 
$InscritLastWeek = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+14) )
and
date(subdate(now(),'. $datesemaine .'+7) ) ');
$donnees = $InscritLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 3 week ago 
$InscritLastWeek = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+21) )
and
date(subdate(now(),'. $datesemaine .'+14) ) ');
$donnees = $InscritLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 4 week ago 
$InscritLastWeek = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+28) )
and
date(subdate(now(),'. $datesemaine .'+21) ) ');
$donnees = $InscritLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 5 week ago 
$InscritLastWeek = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+35) )
and
date(subdate(now(),'. $datesemaine .'+28) ) ');
$donnees = $InscritLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 6 week ago 
$InscritLastWeek = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+42) )
and
date(subdate(now(),'. $datesemaine .'+35) ) ');
$donnees = $InscritLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 7 week ago 
$InscritLastWeek = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+49) )
and
date(subdate(now(),'. $datesemaine .'+42) ) ');
$donnees = $InscritLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 8 week ago 
$InscritLastWeek = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+56) )
and
date(subdate(now(),'. $datesemaine .'+49) ) ');
$donnees = $InscritLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 9 week ago 
$InscritLastWeek = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+63) )
and
date(subdate(now(),'. $datesemaine .'+56) ) ');
$donnees = $InscritLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);




//Inscrit par mois
$InscritMonth = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN
date(subdate(now(),'. $datemois .') ) 
and 
date(now())
');
$donnees = $InscritMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);



//Inscrit 1 month ago 
$InscritLastMonth = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN
date(subdate(now(),'. $MoisDernier .') ) 
and 
date(subdate(now(),'. $datemois .'))
');
$donnees = $InscritLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 2 month ago 
$InscritLastMonth = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN
date(subdate(now(),'. $datemois .'+60) ) 
and 
date(subdate(now(),'. $datemois .'+30))');
$donnees = $InscritLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'], FILE_APPEND);


//Inscrit 3 month ago 
$InscritLastMonth = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN
date(subdate(now(),'. $datemois .'+90) ) 
and 
date(subdate(now(),'. $datemois .'+60))
');
$donnees = $InscritLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 4 month ago 
$InscritLastMonth = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN
date(subdate(now(),'. $datemois .'+120) ) 
and 
date(subdate(now(),'. $datemois .'+90))
');
$donnees = $InscritLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 5 month ago 
$InscritLastMonth = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN
date(subdate(now(),'. $datemois .'+150) ) 
and 
date(subdate(now(),'. $datemois .'+120))
');
$donnees = $InscritLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);


//Inscrit 6 month ago 
$InscritLastMonth = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN
date(subdate(now(),'. $datemois .'+180) ) 
and 
date(subdate(now(),'. $datemois .'+150))
');
$donnees = $InscritLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);

//Inscrit 7 month ago 
$InscritLastMonth = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN
date(subdate(now(),'. $datemois .'+210) ) 
and 
date(subdate(now(),'. $datemois .'+180))
');
$donnees = $InscritLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);

//Inscrit 8 month ago 
$InscritLastMonth = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN
date(subdate(now(),'. $datemois .'+240) ) 
and 
date(subdate(now(),'. $datemois .'+210))
');
$donnees = $InscritLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);

//Inscrit 9 month ago 
$InscritLastMonth = $bdd->query('select count(id_customer) from  ppj4c_customer where date_add BETWEEN
date(subdate(now(),'. $datemois .'+270) ) 
and 
date(subdate(now(),'. $datemois .'+240))
');
$donnees = $InscritLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_customer)'] , FILE_APPEND);






//------------------------------//                                     Commande                          //------------------------------// 

//Commande jour
$CommandeToday = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN date(subdate(now(),1)) and  date(now()) ');
$donnees = $CommandeToday->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);



//Commande 1 days ago
$CommandeYesterday = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN date(subdate(now(),2)) and  date(subdate(now(),1))');
$donnees = $CommandeYesterday->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);


//Commande 2 days ago
$CommandeYesterday = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN date(subdate(now(),3)) and  date(subdate(now(),2))');
$donnees = $CommandeYesterday->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);


//Commande 3 days ago
$CommandeYesterday = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN date(subdate(now(),4)) and  date(subdate(now(),3))');
$donnees = $CommandeYesterday->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);


//Commande 4 days ago
$CommandeYesterday = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN date(subdate(now(),5)) and  date(subdate(now(),4))');
$donnees = $CommandeYesterday->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);


//Commande 5 days ago
$CommandeYesterday = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN date(subdate(now(),6)) and  date(subdate(now(),5))');
$donnees = $CommandeYesterday->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);



//Commande 6 days ago
$CommandeYesterday = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN date(subdate(now(),7)) and  date(subdate(now(),6))');
$donnees = $CommandeYesterday->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);


//Commande 7 days ago
$CommandeYesterday = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN date(subdate(now(),8)) and  date(subdate(now(),7))');
$donnees = $CommandeYesterday->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);


//Commande 8 days ago
$CommandeYesterday = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN date(subdate(now(),9)) and  date(subdate(now(),8))');
$donnees = $CommandeYesterday->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);


//Commande 9 days ago
$CommandeYesterday = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN date(subdate(now(),10)) and  date(subdate(now(),9))');
$donnees = $CommandeYesterday->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);







//Commande par semaine
$CommandeWeek = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN 
date(subdate(now(),'. $datesemaine .') ) 
and 
date(now())');
$donnees = $CommandeWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);



/// Commande 1 week ago
$CommandeLastWeek = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN 
date(subdate(now(),'. $semaineDerniere.') )
and
date(subdate(now(),'. $datesemaine .') ) ');
$donnees = $CommandeLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

/// Commande 2 week ago
$CommandeLastWeek = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+14) )
and
date(subdate(now(),'. $datesemaine .'+7) ) ');
$donnees = $CommandeLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

/// Commande 3 week ago
$CommandeLastWeek = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+21) )
and
date(subdate(now(),'. $datesemaine .'+14) ) ');
$donnees = $CommandeLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

/// Commande 4 week ago
$CommandeLastWeek = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+28) )
and
date(subdate(now(),'. $datesemaine .'+21) ) ');
$donnees = $CommandeLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

/// Commande 5 week ago
$CommandeLastWeek = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+35) )
and
date(subdate(now(),'. $datesemaine .'+28) ) ');
$donnees = $CommandeLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

/// Commande 6 week ago
$CommandeLastWeek = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+42) )
and
date(subdate(now(),'. $datesemaine .'+35) ) ');
$donnees = $CommandeLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

/// Commande 7 week ago
$CommandeLastWeek = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+49) )
and
date(subdate(now(),'. $datesemaine .'+42) ) ');
$donnees = $CommandeLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);


/// Commande 8 week ago
$CommandeLastWeek = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+56) )
and
date(subdate(now(),'. $datesemaine .'+49) ) ');
$donnees = $CommandeLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);


/// Commande 9 week ago
$CommandeLastWeek = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN 
date(subdate(now(),'. $datesemaine.'+63) )
and
date(subdate(now(),'. $datesemaine .'+56) ) ');
$donnees = $CommandeLastWeek->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);




//Commande par mois
$CommandeMonth = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN
date(subdate(now(),'. $datemois .') ) 
and 
date(now())
');
$donnees = $CommandeMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);


//Commande 1 month ago
$CommandeLastMonth = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN
date(subdate(now(),'. $MoisDernier .') ) 
and 
date(subdate(now(),'. $datemois .'))
');
$donnees = $CommandeLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

//Commande 2 month ago
$CommandeLastMonth = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN
date(subdate(now(),'. $datemois .'+60) ) 
and 
date(subdate(now(),'. $datemois .'+30))
');
$donnees = $CommandeLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

//Commande 3 month ago
$CommandeLastMonth = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN
date(subdate(now(),'. $datemois .'+90) ) 
and 
date(subdate(now(),'. $datemois .'+60))
');
$donnees = $CommandeLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

//Commande 4 month ago
$CommandeLastMonth = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN
date(subdate(now(),'. $datemois .'+120) ) 
and 
date(subdate(now(),'. $datemois .'+90))
');
$donnees = $CommandeLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

//Commande 5 month ago
$CommandeLastMonth = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN
date(subdate(now(),'. $datemois .'+150) ) 
and 
date(subdate(now(),'. $datemois .'+120))
');
$donnees = $CommandeLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

//Commande 6 month ago
$CommandeLastMonth = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN
date(subdate(now(),'. $datemois .'+180) ) 
and 
date(subdate(now(),'. $datemois .'+150))
');
$donnees = $CommandeLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

//Commande 7 month ago
$CommandeLastMonth = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN
date(subdate(now(),'. $datemois .'+210) ) 
and 
date(subdate(now(),'. $datemois .'+180))
');
$donnees = $CommandeLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

//Commande 8 month ago
$CommandeLastMonth = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN
date(subdate(now(),'. $datemois .'+240) ) 
and 
date(subdate(now(),'. $datemois .'+210))
');
$donnees = $CommandeLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);

//Commande 9 month ago
$CommandeLastMonth = $bdd->query('select count(id_order) from  ppj4c_orders where date_add BETWEEN
date(subdate(now(),'. $datemois .'+270) ) 
and 
date(subdate(now(),'. $datemois .'+240))
');
$donnees = $CommandeLastMonth->fetch();
file_put_contents('donnees.txt',"\n". $donnees['count(id_order)'] , FILE_APPEND);




