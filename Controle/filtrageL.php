<?php

session_start();
require_once("../Connexion.php");
$connect = new Connexion();
 
      //ci-dessous on recupere les activités preferés de l'utilisatuer
        $Lieu = "";
        if(isset($_POST['SDU']))
        $Lieu .= "L001";
        if(isset($_POST['Hippodrome']))
        $Lieu .= "L002";
        if(isset($_POST['SDL']))
        $Lieu .= "L003";
        if(isset($_POST['Coliseum']))
        $Lieu .= "L004";
        if(isset($_POST['La veilliere']))
        $Lieu .= "L005";
        if(isset($_POST['Team5']))
        $Lieu .= "L006";
        if(isset($_POST['PST']))
        $Lieu .= "L007";
        if(isset($_POST['PH']))
        $Lieu .= "L008";
        if(isset($_POST['RCA']))
        $Lieu .= "L009";
        if(isset($_POST['ASPTT']))
        $Lieu .= "L010";
        if(isset($_POST['CSB']))
        $Lieu .= "L011";
        if(isset($_POST['ASC']))
        $Lieu .= "L012";
         if(isset($_POST['GymnaseH']))
        $Lieu .= "L013";
        if(isset($_POST['Zenith']))
        $Lieu .= "L018";
        if(isset($_POST['ADD']))
        $Lieu .= "L019";
        if(isset($_POST['TCA']))
        $Lieu .= "L020";
        if(isset($_POST['AACT']))
        $Lieu .= "L015";
        if(isset($_POST['CSA']))
        $Lieu .= "L021";
        if(isset($_POST['ESPA']))
        $Lieu .= "L022";
        if(isset($_POST['Mégacite']))
        $Lieu .= "L017";
        if(isset($_POST['MDC']))
        $Lieu .= "L018";
        

        $_SESSION['Lieux']= $connect ->tri_lieu($Lieu);
        header("location:../Accueil2.php");
        exit;

?>