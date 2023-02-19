/* Evenement js */

// plr -> symbole plus de droite
// plg -> symbole plus de gauche
// tab -> tableau contenant les évènements
// div -> div qui déclenche l'event

// Une seule section s'ouvre à la fois
var sectionIsOpen = false;

// Foot
var tabFoot = document.querySelector("#tFoot");
var divFoot = document.querySelector("#divFoot");
var plrFoot = document.querySelector("#plrFoot");
var pllFoot = document.querySelector("#pllFoot");
var clickFoot = 0;

divFoot.addEventListener("click",function(){
	if(sectionIsOpen == false || clickFoot%2 == 1){
		if(clickFoot%2 == 0){
			tabFoot.style.visibility = "visible";
			tabFoot.style.height = "25%";
			pllFoot.innerHTML = "-";
			plrFoot.innerHTML = "-";
			clickFoot++;
			sectionIsOpen = true;
		}else{
			tabFoot.style.height = "0%";
			pllFoot.innerHTML = "+";
			plrFoot.innerHTML = "+";
			clickFoot++;
			sectionIsOpen = false;
		}
	}
});

// Tennis
var tabTennis = document.querySelector("#tTennis");
var divTennis = document.querySelector("#divTennis");
var plrTennis = document.querySelector("#plrTennis");
var pllTennis = document.querySelector("#pllTennis");
var clickTennis = 0;

divTennis.addEventListener("click",function(){
	if(sectionIsOpen == false || clickTennis%2 == 1){
		if(clickTennis%2 == 0){
			tabTennis.style.visibility = "visible";
			tabTennis.style.height = "35%";
			pllTennis.innerHTML = "-";
			plrTennis.innerHTML = "-";
			clickTennis++;
			sectionIsOpen = true;
		}else{
			tabTennis.style.height = "0%";
			pllTennis.innerHTML = "+";
			plrTennis.innerHTML = "+";
			clickTennis++;
			sectionIsOpen = false;
		}
	}
});

// Basket
var tabBasket = document.querySelector("#tBasket");
var divBasket = document.querySelector("#divBasket");
var plrBasket = document.querySelector("#plrBasket");
var pllBasket = document.querySelector("#pllBasket");
var clickBasket = 0;

divBasket.addEventListener("click",function(){
	if(sectionIsOpen == false || clickBasket%2 == 1){
		if(clickBasket%2 == 0){
			tabBasket.style.visibility = "visible";
			tabBasket.style.height = "35%";
			pllBasket.innerHTML = "-";
			plrBasket.innerHTML = "-";
			clickBasket++;
			sectionIsOpen = true;
		}else{
			tabBasket.style.height = "0%";
			pllBasket.innerHTML = "+";
			plrBasket.innerHTML = "+";
			clickBasket++;
			sectionIsOpen = false;
		}
	}
});

// Hockey
var tabHockey = document.querySelector("#tHockey");
var divHockey = document.querySelector("#divHockey");
var plrHockey = document.querySelector("#plrHockey");
var pllHockey = document.querySelector("#pllHockey");
var clickHockey = 0;

divHockey.addEventListener("click",function(){
	if(sectionIsOpen == false || clickHockey%2 == 1){
		if(clickHockey%2 == 0){
			tabHockey.style.visibility = "visible";
			tabHockey.style.height = "42%";
			pllHockey.innerHTML = "-";
			plrHockey.innerHTML = "-";
			clickHockey++;
			sectionIsOpen = true;
		}else{
			tabHockey.style.height = "0%";
			pllHockey.innerHTML = "+";
			plrHockey.innerHTML = "+";
			clickHockey++;
			sectionIsOpen = false;
		}
	}
});

// Athletisme
var tabAth = document.querySelector("#tAth");
var divAth = document.querySelector("#divAth");
var plrAth = document.querySelector("#plrAth");
var pllAth = document.querySelector("#pllAth");
var clickAth = 0;

divAth.addEventListener("click",function(){
	if(sectionIsOpen == false || clickAth%2 == 1){
		if(clickAth%2 == 0){
			tabAth.style.visibility = "visible";
			tabAth.style.height = "30%";
			pllAth.innerHTML = "-";
			plrAth.innerHTML = "-";
			clickAth++;
			sectionIsOpen = true;
		}else{
			tabAth.style.height = "0%";
			pllAth.innerHTML = "+";
			plrAth.innerHTML = "+";
			clickAth++;
			sectionIsOpen = false;
		}
	}
});

/* Natation
var tabNat = document.querySelector("#tNat");
var divNat = document.querySelector("#divNat");
var plrNat = document.querySelector("#plrNat");
var pllNat = document.querySelector("#pllNat");
var clickNat = 0;

divNat.addEventListener("click",function(){
	if(sectionIsOpen == false || clickNat%2 == 1){
		if(clickNat%2 == 0){
			tabNat.style.visibility = "visible";
			tabNat.style.height = "30%";
			pllNat.innerHTML = "-";
			plrNat.innerHTML = "-";
			clickNat++;
			sectionIsOpen = true;
		}else{
			tabNat.style.height = "0%";
			pllNat.innerHTML = "+";
			plrNat.innerHTML = "+";
			clickNat++;
			sectionIsOpen = false;
		}
	}
}); */

// Natation
var tabDanse = document.querySelector("#tDanse");
var divDanse = document.querySelector("#divDanse");
var plrDanse = document.querySelector("#plrDanse");
var pllDanse = document.querySelector("#pllDanse");
var clickDanse = 0;

divDanse.addEventListener("click",function(){
	if(sectionIsOpen == false || clickDanse%2 == 1){
		if(clickDanse%2 == 0){
			tabDanse.style.visibility = "visible";
			tabDanse.style.height = "45%";
			pllDanse.innerHTML = "-";
			plrDanse.innerHTML = "-";
			clickDanse++;
			sectionIsOpen = true;
		}else{
			tabDanse.style.height = "0%";
			pllDanse.innerHTML = "+";
			plrDanse.innerHTML = "+";
			clickDanse++;
			sectionIsOpen = false;
		}
	}
});


