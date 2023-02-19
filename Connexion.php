<?php
class Connexion
{
    protected $pdo, $serveur, $utilisateur, $motDePasse, $dataBase;
 
    public function __construct()
    {
        $this->serveur = 'localhost';
        $this->utilisateur = 'root';
        $this->motDePasse = 'root';
        $this->dataBase = 'rycekaa';
        $this->connexionBDD();
    }
 
    protected function connexionBDD()
    {
        $this->pdo = new PDO('mysql:host='.$this->serveur.';dbname='.$this->dataBase, $this->utilisateur, $this->motDePasse)or die("connexion impossible");
    }
 
    public function __sleep()
    {
        // Ici sont à placer des instructions à exécuter juste avant la linéarisation.
        // On retourne ensuite la liste des attributs qu'on veut sauver.
        return ['serveur', 'utilisateur', 'motDePasse', 'dataBase'];
    }
    public function Affiche_Etudiant($Requette,$UseName)
    {
        $resultat = $this->pdo->prepare($Requette);
        $resultat ->execute(array($UseName));
        return $resultat->fetchAll();
    } 

    // Afficher tous les lieux
     public function Affiche_Lieux($activite)
    {
        if($activite != "")
        {
           $resultat = $this->pdo->prepare("SELECT * FROM LIEU L LEFT JOIN lieu_sport LS ON L.idL = LS.idL LEFT JOIN sport S ON S.idS = LS.idS LEFT JOIN evenement E ON E.idL = L.idL 
            WHERE ? LIKE CONCAT('%',S.nomS,'%') ");
           $resultat ->execute(array($activite));


        }else

        $resultat = $this->pdo->query("SELECT * FROM LIEU L LEFT JOIN lieu_sport LS ON L.idL = LS.idL LEFT JOIN sport S ON S.idS = LS.idS LEFT JOIN evenement E ON E.idL = L.idL;");
        
        return $resultat->fetchAll();
    } 

      public function tri_Event($event)
    {
        if($event != "")
        {
           $resultat = $this->pdo->prepare("SELECT * FROM evenement E LEFT JOIN lieu L ON L.idL = E.idL
            WHERE ? LIKE CONCAT('%',E.idS,'%') ");
           $resultat ->execute(array($event));
            return $resultat->fetchAll();
        }else

        return null;
        
    }

    public function tri_act($activite){

        if($activite != "")
        {
           $resultat = $this->pdo->prepare("SELECT * FROM SPORT S LEFT JOIN lieu_sport LS ON LS.idS = S.idS LEFT JOIN LIEU L ON L.idL = LS.idL 
            WHERE ? LIKE CONCAT('%',S.nomS,'%') ");
           $resultat ->execute(array($activite));
            return $resultat->fetchAll();
        }else{
        return null;
        }
    }

    public function tri_lieu($lieu){

        if($lieu != "")
        {
           $resultat = $this->pdo->prepare("SELECT * FROM LIEU
            WHERE ? LIKE CONCAT('%',idL,'%') ");
           $resultat ->execute(array($lieu));
            return $resultat->fetchAll();
        }else{
        return null;
        }
    }





 /* public function Affiche_Lieux()
    {

        $resultat = $this->pdo->query("SELECT * FROM lieu ");
        
        return $resultat->fetchAll();
    }  */
    public function Affiche_EventFoot()
    {
        $resultat = $this->pdo->query("
    SELECT *
    FROM evenement E
    INNER JOIN Lieu L on L.idL = E.IDL
    WHERE idS like 'A001'
    ");
        return $resultat->fetchAll();
    }

    public function Modif_Profil($Requette,$Activite,$UseName)
    {
        try{

            $resultat = $this->pdo->prepare($Requette);
            $resultat ->execute(array($Activite,$UseName));
        }
        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
          }
    }

    public function Affiche_EventAth()
    {
        $resultat = $this->pdo->query("
    SELECT *
    FROM evenement E
    INNER JOIN Lieu L on L.idL = E.IDL
    WHERE idS like 'A004'
    ");
        return $resultat->fetchAll();
    }

    public function Affiche_EventTennis()
    {
        $resultat = $this->pdo->query("
    SELECT *
    FROM evenement E
    INNER JOIN Lieu L on L.idL = E.IDL
    WHERE idS like 'A002'
    ");
        return $resultat->fetchAll();
    }

    public function Affiche_EventBasket()
    {
        $resultat = $this->pdo->query("
    SELECT *
    FROM evenement E
    INNER JOIN Lieu L on L.idL = E.IDL
    WHERE idS like 'A003'
    ");
        return $resultat->fetchAll();
    }

    public function Affiche_EventNat()
    {
        $resultat = $this->pdo->query("
    SELECT *
    FROM evenement E
    INNER JOIN Lieu L on L.idL = E.IDL
    WHERE idS like 'A005'
    ");
        return $resultat->fetchAll();
    }

    public function Affiche_EventDanse()
    {
        $resultat = $this->pdo->query("
    SELECT *
    FROM evenement E
    INNER JOIN Lieu L on L.idL = E.IDL
    WHERE idS like 'A006'
    ");
        return $resultat->fetchAll();
    }

    public function Affiche_EventHip()
    {
        $resultat = $this->pdo->query("
    SELECT *
    FROM evenement E
    INNER JOIN Lieu L on L.idL = E.IDL
    WHERE idS like 'A008'
    ");
        return $resultat->fetchAll();
    }

      public function Affiche_EventHockey()
    {
        $resultat = $this->pdo->query("
    SELECT *
    FROM evenement E
    INNER JOIN Lieu L on L.idL = E.IDL
    WHERE idS like 'A007'
    ");
        return $resultat->fetchAll();
    }



    public function Insert($Requette,$UseName,$mdp,$livre,$activite)
    {
        try{

            $resultat = $this->pdo->prepare($Requette);
            $resultat ->execute(array($UseName,$mdp,$livre,$activite));

        }
        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
          }
    }
    public function __wakeup()
    {
        $this->connexionBDD();
    }

}
?>