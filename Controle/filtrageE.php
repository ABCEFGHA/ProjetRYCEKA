<?php

session_start();
require_once("../Connexion.php");
$connect = new Connexion();
 
        //ci-dessous on recupere les activités preferés de l'utilisatuer
        $event = "";
        if(isset($_POST['foot']))
        $event .= "A001";
        if(isset($_POST['tennis']))
        $event .= "A002";
        if(isset($_POST['basket']))
        $event .= "A003";
        if(isset($_POST['hockey']))
        $event .= "A007";
        if(isset($_POST['athletisme']))
        $event .= "A004";
    	if(isset($_POST['danse']))
        $event .= "A006";
   		if(isset($_POST['hippisme']))
        $event .= "A008";

        $_SESSION['Lieux']= $connect ->tri_Event($event);
        header("location:../Accueil2.php");
        exit;



?>