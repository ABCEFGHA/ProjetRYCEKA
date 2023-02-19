// Ecouteurs sur Evenements, Lieux, Activites

// Variables Evenements
var evenements = document.querySelector("#evenements");
var cbxE = document.querySelector("#cbxEvent");
var closeE = document.querySelector("#closeE");

evenements.addEventListener("click",function(){
	cbxE.style.height = "55%";
});

closeE.addEventListener("click",function(){
	cbxE.style.height = "0%";
});

// Variables Lieux
var lieux = document.querySelector("#lieux");
var cbxL = document.querySelector("#cbxLieux");
var closeL = document.querySelector("#closeL");

lieux.addEventListener("click",function(){
	cbxL.style.height = "55%";
});
closeL.addEventListener("click",function(){
	cbxL.style.height = "0%";
});


// Variables activites
var activites = document.querySelector("#activites");
var cbxA = document.querySelector("#cbxActivites");
var closeA = document.querySelector("#closeA");

activites.addEventListener("click",function(){
	cbxA.style.height = "55%";
});

closeA.addEventListener("click",function(){
	cbxA.style.height = "0%";
});





/*

var countClickL = 0;
var sign = document.querySelectorAll("#less");

var nomLieux = document.querySelector("#nomL");
var infoLieux = document.querySelector("#Rect4InfoLieux")
nomLieux.addEventListener("click",function(){
if(countClickL%2 == 0){
	infoLieux.style.height = "40%";
	sign[0].innerHTML = "-";
	sign[1].innerHTML = "-";
	countClickL++;
}
else{
	infoLieux.style.height = "7%";
	sign[0].innerHTML = "+";
	sign[1].innerHTML = "+";	
	countClickL++;
}
});

*/




