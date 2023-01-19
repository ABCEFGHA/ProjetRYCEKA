<?php  
session_start();
require_once("../Connexion.php");
$connect = new Connexion();
if(isset($_GET['Dec']))
{
  session_destroy();
  header("location:../Accueil.php");
  exit;
}
if(!empty($_POST['id']) and !empty($_POST['pwd']))
  {
    $UseName = htmlspecialchars($_POST['id']);
    $pwd = htmlspecialchars($_POST['pwd']);
    //$pwd = password_hash($pwd, PASSWORD_DEFAULT);
    $Req = 'select UseName,mdp from Etudiant where UseName = ?';
    $rep = $connect->Affiche_Etudiant($Req,$UseName);
    if(count($rep)>0 and password_verify($pwd, $rep[0]['mdp']))
    {
        $_SESSION['UserName'] = $rep[0]['UseName'];
        header("location:../Accueil.php");
        exit;
    }else{
        $_SESSION['errorC'] = 'Identifiant incorrect';
        header("location:../Connect.php");
        exit;
    }
  }
?>