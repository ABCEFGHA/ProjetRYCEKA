
goToEvents = document.querySelector("#navEvents");
goToPlaces = document.querySelector("#navPlaces");
goToConnexion = document.querySelector("#navCon");
goToAccueil = document.querySelector("#Ryceka");
goToInsc = document.querySelector("#inscription");
goToAmiens = document.querySelector("#aboutamiens");
goToProfile = document.querySelector("#profile");


goToAmiens.addEventListener("click",function(){
  location.href="amiens.php";
}); 


goToAccueil.addEventListener("click",function(){
  location.href="Accueil2.php";
});

goToEvents.addEventListener("click",function(){
  location.href="Evenements.php";
});

goToPlaces.addEventListener("click",function(){
  location.href="Lieux.php";
});

if(goToConnexion != null){
goToConnexion.addEventListener("click",function(){
  location.href="Connect.php";
});
}

if(goToInsc != null){
goToInsc.addEventListener("click",function(){
  location.href="Inscription.php";
});
}

if(goToProfile != null)
{
  goToProfile.addEventListener("click",function(){
    location.href="Profil.php";
  });
}
