<?php

session_start();
require_once("../Connexion.php");
$connect = new Connexion();
 
      //ci-dessous on recupere les activités preferés de l'utilisatuer
        $Activite = "";
        if(isset($_POST['foot']))
        $Activite .= "Football";
        if(isset($_POST['tennis']))
        $Activite .= "Tennis";
        if(isset($_POST['basket']))
        $Activite .= "Basket";
        if(isset($_POST['hockey']))
        $Activite .= "Hockey";
        if(isset($_POST['natation']))
        $Activite .= "Natation";
        if(isset($_POST['athletisme']))
        $Activite .= "Athletisme";
        echo "bbbbbb";  

        $_SESSION['Lieux']= $connect ->tri_act($Activite);
        header("location:../Accueil2.php");
        exit;

?>