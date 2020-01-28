<?php   

require_once 'db.php';


function requete1(){
    global $db; 
 $requete= $db->query('SELECT * from info  WHERE last_name="palmer"') ;
 $requete->execute();
$rb= $requete->fetchAll(PDO::FETCH_OBJ);
 return $rb;
}
 function afficheTousLesFemmes(){
    global $db; 
    $requete= $db->query('SELECT * from info  WHERE gender="Female"') ;
    $requete->execute();
   $rb= $requete->fetchAll(PDO::FETCH_OBJ);
    return $rb;
 }
 function etatCommençantParN(){
    global $db; 
    $requete= $db->query('SELECT * from info  WHERE   country_code LIKE "N%"') ;
    $requete->execute();
   $rb= $requete->fetchAll(PDO::FETCH_OBJ);
    return $rb;
 }
 function emailContenantGoogle(){
    global $db; 
    $requete= $db->query('SELECT * from info  WHERE   email LIKE "%google%"') ;
    $requete->execute();
   $rb= $requete->fetchAll(PDO::FETCH_OBJ);
    return $rb;
 }
 function repartitionParEtat(){
    global $db; 
    $requete= $db->query('SELECT country_code, count(country_code) as " Enregistrement" from info  group by country_code') ;
    $requete->execute();
   $rb= $requete->fetchAll(PDO::FETCH_OBJ);
    return $rb;
 }
 function nombreFemmeHomme(){
    global $db; 
    $requete= $db->query('SELECT gender, count(gender) as " Enregistrement" from info  group by gender') ;
    $requete->execute();
   $rb= $requete->fetchAll(PDO::FETCH_OBJ);
    return $rb;
 }
 function ageDesPersonnes(){
    global $db; 
    $requete= $db->query('SELECT id, first_name, last_name , year(Now())-right(birth_date,4) as age from info') ;
    $requete->execute();
   $rb= $requete->fetchAll(PDO::FETCH_OBJ);
    return $rb;
 }




?>