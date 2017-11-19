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


	document.getElementById("id_backT").addEventListener("click", () => {
		imagenTorreApartamentoContainer.toggleClass("move-right")
	});

	document.getElementById("id_nextT").addEventListener("click", () => {
		imagenTorreApartamentoContainer.toggleClass("move-right")
	});

	let navPills = $(".nav-pills.nav-justified");

	navPills.find("a").on("click", (e) => {
		navPills.find(".active").removeClass("active");
		$(e.currentTarget.parentNode).addClass("active");
	});

}


$(document).ready(iniciarScrollSpy);