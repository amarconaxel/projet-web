/**
 * Menu
 */
 
 var listeMenu;
 
function initEntete() {
	var btnMenu = document.getElementById("btnMenu");
	
	listeMenu = document.getElementById("listeMenu");
	listeMenu.style["display"] = "none";
	
	sombre = document.getElementById("sombre");
	sombre.style["display"] = "none";
	
	btnMenu.onclick = onClickBtnMenu;
	sombre.onclick = onClickSombre;
}

function onClickBtnMenu() {
	if (listeMenu.style["display"] == "none") {
		listeMenu.style["display"] = "block";
		sombre.style["display"] = "block";
	} else {
		listeMenu.style["display"] = "none";
		sombre.style["display"] = "none";
	}
}

function onClickSombre() {
	listeMenu.style["display"] = "none";
	sombre.style["display"] = "none";
}

