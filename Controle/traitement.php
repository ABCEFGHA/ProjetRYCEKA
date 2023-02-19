<?php
session_start();
require_once("../Connexion.php");
$connect = new Connexion();

if(!empty($_POST['identifiant']) and !empty($_POST['password']) and !empty($_POST['password_confirm']) and !empty($_POST['livre']))
{
    //Pour la verification de pattern
    $pattern = "/^(?=.*[A-Z])(?=.*[a-z]).+$/";
    //Verifions si le non d'utilisatuer n'est pas dejà utilisé
    $UseName = htmlspecialchars($_POST['identifiant']);
    $Req = 'select UseName from Etudiant where UseName = ?';
    $rep = $connect->Affiche_Etudiant($Req,$UseName);
    if(count($rep) > 0)
    { 
        $_SESSION['error1'] = "identifiant dejà utilisé" ;
        header("location:../Inscription.php");
        exit;
    }
    //verification de la presence d'au moins une minuscule
    elseif(preg_match($pattern,$_POST['password']) !=1)
    {
        $_SESSION['error2'] = 'Au moins Une Maj et une Min';
        header("location:../Inscription.php");
        exit;
    }
    elseif(strlen($_POST['password'])<4){
        $_SESSION['error2'] = 'il faut au moins 4 caracteres';
        header("location:../Inscription.php");
        exit;
    }
    else
    {
    if($_POST['password_confirm'] == $_POST['password'])
    {
        //les champs sont bien remplis
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
       
          //on eviter de stocker des données de faille

            $_POST['password'] = htmlspecialchars($_POST['password']);
            $identifiant = htmlspecialchars($_POST['identifiant']);
            $livre = htmlspecialchars($_POST['livre']);
            //on va hacher le mot de passe avant de le stocker
            $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
            //processus d'insertion à la base de données
        $Req_insert = 'INSERT INTO etudiant(UseName,mdp,reponse,Activite) VALUES(?,?,?,?)';
        $connect->Insert($Req_insert,$identifiant,$pass,$livre,$Activite);
        $_SESSION['succes'] = "Compte Validé avec succes";
        header("location:../Connect.php");
        exit;
        
    }
    else
    {
        $_SESSION['error3'] = 'la confirmation n\'est pas bonne';
        header("location:../Inscription.php");
        exit;
    }
}
}


?>