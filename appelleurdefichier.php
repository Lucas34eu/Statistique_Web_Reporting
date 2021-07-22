aaa<?php

fopen('donnees.txt', 'w+');
include ("commande-inscription.php");
include ("Suivie-Expedition/suivi-expedition.php");
include ("Suivie-Expedition/suivie-expedition-semaine.php");
include ("Suivie-Expedition/suivie-expedition-mois.php");
include ("Review-Shop/api-reviews-shop.php");
include ("Review-Shop/api-review-shop-semaine.php");
include ("Review-Shop/api-reviews-shop-mois.php");
include ("avis-produit.php");
?>