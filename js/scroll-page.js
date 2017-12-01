(function () {

	let imagenTorreApartamentoContainer = document.getElementById("torresApart1Container").querySelector(".apartamento-dual");


	document.getElementById("id_backT").addEventListener("click", () => {
		imagenTorreApartamentoContainer.classList.toggle("move-right")
	});

	document.getElementById("id_nextT").addEventListener("click", () => {
		imagenTorreApartamentoContainer.classList.toggle("move-right")
	});


})();
