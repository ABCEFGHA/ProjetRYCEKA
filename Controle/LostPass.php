<?php
session_start();
require_once("../Connexion.php");
$connect = new Connexion();
 
  if(!empty($_POST['id']) and !empty($_POST['pass']) and !empty($_POST['passConfirm']) and !empty($_POST['livre']))
  {
    // on recupere l'etudiant par son id 
    $id = htmlspecialchars($_POST['id']);
    $Req = 'SELECT * FROM Etudiant WHERE UseName = ?';
    $rep = $connect->Affiche_Etudiant($Req, $_POST['id']);
    if(count($rep) > 0 and $_POST['livre'] == $rep[0]['reponse'])
    {
        if($_POST['pass'] == $_POST['passConfirm'] )
        {
            $passeNew =htmlspecialchars( $_POST['pass']);
            $passeNew = password_hash($passeNew, PASSWORD_DEFAULT);
            $Req_Modif= 'UPDATE etudiant SET mdp = ? WHERE UseName = ?';
            $connect->Modif_Profil($Req_Modif,$passeNew,$id);
            header("location:../Connect.php");
            exit;
        }else{
            $_SESSION['ErrorConfirm'] = "Erreur de confirmation de mot de passe";
            header("location:../LostPasssword.php");
            exit;
        }
    }
    else
    {
        $_SESSION['Error'] = "Erreur de connexion veuillez réessayez"; 
        header("location:../LostPasssword.php");
        exit;
    }

  }else{
    $_SESSION['Error'] = "Veuillez renseigné tout les champs";
    header("location:../LostPasssword.php");
    exit;
  }


?>