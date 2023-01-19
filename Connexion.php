<?php
class Connexion
{
    protected $pdo, $serveur, $utilisateur, $motDePasse, $dataBase;
 
    public function __construct()
    {
        $this->serveur = 'localhost';
        $this->utilisateur = 'root';
        $this->motDePasse = 'root';
        $this->dataBase = 'ryceka';
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
    public function Affiche_Lieux()
    {
        $resultat = $this->pdo->query("SELECT * FROM lieu ");
        
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