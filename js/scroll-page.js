function iniciarScrollSpy() {
	document.querySelectorAll(".content-switch").forEach(ele =>{
		ele.addEventListener("click", (e) =>{
			let dataButton = e.currentTarget.dataset;
			console.log("hola")
			$('html, body').animate({
	            scrollTop: $(dataButton.targetSpy).offset().top
	        }, dataButton.timelaps);
		});
	});

	let imagenTorreApartamentoContainer = $("#torresApart1Container").find(".apartamento-dual");


	document.getElementById("id_backT").addEventListener("click", toggleClassTorre());
	document.getElementById("id_nextT").addEventListener("click", toggleClassTorre());


	function toggleClassTorre( e ){
		imagenTorreApartamentoContainer.toggleClass("moveRight");
	}

}


$(document).ready(iniciarScrollSpy);