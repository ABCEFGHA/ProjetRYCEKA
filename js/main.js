
goToEvents = document.querySelector("#navEvents");
goToPlaces = document.querySelector("#navPlaces");
goToConnexion = document.querySelector("#navCon");
goToAccueil = document.querySelector("#Ryceka");
goToInsc = document.querySelector("#inscription");


goToAccueil.addEventListener("click",function(){
  location.href="Accueil.php";
});

goToEvents.addEventListener("click",function(){
  location.href="Evenements.php";
});

goToPlaces.addEventListener("click",function(){
  location.href="Lieux.php";
});

goToConnexion.addEventListener("click",function(){
  location.href="Connect.php";
});

goToInsc.addEventListener("click",function(){
  location.href="Inscription.php";
});
