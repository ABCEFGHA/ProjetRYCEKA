/* JS Lieux*/

var tTitle = ["Stade de la licorne","Nautilus","Coliseum"];
var tPhotos = ["stade","nautilus","coliseum"];
var tDescription = [
	"Le stade de la licorne à été construit en Juillet 1997 et inauguré en Juillet 1999. Ce stade possède 13000 places. Plusieurs événements marquants se sont déroulés dans le stade, comme un concert en 1999 de Johnny Hallyday. Une demi-finale de coupe de France en 2008 entre Amiens SC et le PSG. Le stade enregistre un nouveau record d’affluence durant la saison 2019-2020 pour le match Amiens contre le PSG avec un total de 12964 spectateurs."
	, "Le Nautilus est une piscine couverte, qui dispose de 2 bassins, d’une fosse à plongée de 15 mètres, d’un Hammam et d’un toboggan. De grands nombres d’activités sont proposés et pour tout âge : bébé nageurs, jardin aquatique, une école de natation municipale pour enfants, une pour adultes, des programmes d’aquaform et des prestations autour de la plongée."
	,"Le Coliseum d’Amiens a été construit en 1994 et ouvert en 1996. C’est un complexe sportif ouvert à tous où résident de nombreux clubs sportifs amiénois dont l’équipe de Hockey : les Gothiques d’Amiens. Le bâtiment abrite deux patinoires, plusieurs bassins dont une piscine olympique et une salle omnisport de 1500 places. Il dispose également d’un dojo et d'une salle d’haltérophilie. "
	];

var title = document.querySelector("#nomLieu");
var photo = document.querySelector("#photo");
var desc = document.querySelector("#text");

var fg = document.querySelector("#fg");
var fd = document.querySelector("#fd");

var count = 0;

fg.addEventListener("click",function(){
	console.log(count,photo);
	if(count == 0){
		count = 2;
		title.innerHTML = tTitle[count];
		photo.src = "src/img/"+tPhotos[count]+".jpg";
		desc.innerHTML = tDescription[count];
	}else{
		count = count-1;
		title.innerHTML = tTitle[count];
		photo.src = "src/img/"+tPhotos[count]+".jpg";
		desc.innerHTML = tDescription[count];
	}
})

fd.addEventListener("click",function(){
	console.log(count,photo);
	if(count == 2){
		count = 0;
		title.innerHTML = tTitle[count];
		photo.src = "src/img/"+tPhotos[count]+".jpg";
		desc.innerHTML = tDescription[count];
	}else{
		count = count+1;
		title.innerHTML = tTitle[count];
		photo.src = "src/img/"+tPhotos[count]+".jpg";
		desc.innerHTML = tDescription[count];
	}
})







