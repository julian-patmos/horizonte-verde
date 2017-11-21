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


	let params = (new URL(document.location)).searchParams;
	var request = $.ajax({
		url: "controllers/get/getApartamentos.php",
		method: "POST",
		data: { id : params.get("id"), torre : params.get("torre") },
		dataType: "json"
	});

	request.done(function( dataResponse ) {
		let strApart = ""; 
		for(i in dataResponse){
			strApart += (dataResponse.length > 1 && i < (dataResponse.length-1)) ? dataResponse[i].idApart + " - " : dataResponse[i].idApart;
		}
		$("#list_apart1").text(strApart)
	});
	 
	request.fail(function( jqXHR, textStatus ) {
	  alert( "Request failed: " + textStatus );
	});

}


$(document).ready(iniciarScrollSpy);