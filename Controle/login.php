<?php  
session_start();
require_once("../Connexion.php");
$connect = new Connexion();
if(isset($_GET['Dec']))
{
  session_destroy();
  header("location:../Accueil2.php");
  exit;
}
if(!empty($_POST['id']) and !empty($_POST['pwd']))
  {
    $UseName = htmlspecialchars($_POST['id']);
    $pwd = htmlspecialchars($_POST['pwd']);
    //$pwd = password_hash($pwd, PASSWORD_DEFAULT);
    $Req = 'SELECT UseName,mdp,Activite FROM Etudiant WHERE UseName = ?';
    $rep = $connect->Affiche_Etudiant($Req,$UseName);
    if(count($rep)>0 and password_verify($pwd, $rep[0]['mdp']))
    {
        $_SESSION['UserName'] = $rep[0]['UseName'];
        $_SESSION['Activite'] = $rep[0]['Activite'];
        header("location:../Accueil2.php");
        exit;
    }else{
        $_SESSION['errorC'] = 'Identifiant incorrect';
        header("location:../Connect.php");
        exit;
    }
  }
?>