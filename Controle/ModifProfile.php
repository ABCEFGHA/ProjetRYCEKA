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
       
        // requete de modification de profil

        $Req_Modif= 'UPDATE etudiant SET Activite = ? WHERE UseName = ?';
        $connect->Modif_Profil($Req_Modif,$Activite,$_SESSION['UserName']);
        
        // Modification de mot de passe

  if(!empty($_POST['passwordOld']) and !empty($_POST['passwordNew']))
  {
    $passOld = htmlspecialchars($_POST['passwordOld']);
    $passeNew= htmlspecialchars($_POST['passwordNew']);
    //$pwd = password_hash($pwd, PASSWORD_DEFAULT);
    $Req = 'SELECT mdp FROM Etudiant WHERE UseName = ?';
    $rep = $connect->Affiche_Etudiant($Req,$_SESSION['UserName']);

    //On verifie si l'ancien mot de passe correspond bien au nouvau
    if(password_verify($passOld, $rep[0]['mdp']))
    {
      $passeNew = password_hash($passeNew, PASSWORD_DEFAULT);
      $Req_Modif= 'UPDATE etudiant SET mdp = ? WHERE UseName = ?';
      $connect->Modif_Profil($Req_Modif,$passeNew,$_SESSION['UserName']);
    }else{
      $_SESSION['errorOld'] = 'Vous devrez rensigné  exactement l\'ancien mot de passe';
      header("location:../Profil.php");
      exit;
    }

  }

      // on rafraichi les activités de l'utilisateur

      $Req = 'SELECT * FROM Etudiant WHERE UseName = ?';
      $rep = $connect->Affiche_Etudiant($Req, $_SESSION['UserName']);
      //unset($_SESSION['Activite']);
      $_SESSION['Activite'] = $rep[0]['Activite'];
      header("location:../Accueil2.php");


?>