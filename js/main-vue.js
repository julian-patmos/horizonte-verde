let data = {
	header : {
		description : "3 ALCOBAS ESQUINERO + VESTIER + CLOSET DE LINOS + BALCÓN",
		subtitle : "VISTA A LA CORDILLERA"
	}
}


Vue.use(VueMaterial.default);

var app = new Vue({
	el: '#app',
	data: {
		apartamento: {},
		info: {},
		header : {
			description : "3 ALCOBAS ESQUINERO + VESTIER + CLOSET DE LINOS + BALCÓN",
			subtitle : "VISTA A LA CORDILLERA"
		},
		showprimero : true,
		showsegundo : false,
		slideinteriores : 0,
		slideambientadas : 0,
		puntoRecorridos: [],
	},
	methods: {
		changeView: function(){

			this.showprimero = !this.showprimero
			this.showsegundo = !this.showsegundo
		},
		getinfo: function () {
			let formData = new FormData();
			let params = (new URL(document.location)).searchParams;
			formData.append('id', params.get("id"));
			formData.append('torre', params.get("torre"));
			fetch('controllers/get/getApartamentos.php', { method: 'POST', body: formData })
			.then(
				response => {
					return response.json()
				}
			)
			.then( 
				data => {
					this.apartamento = data
					this.getInfoApart(data[0].type)
			})
			.catch(function(error) {
				console.log(error);
			});
		},
		getInfoApart : function (type) {
			let formData = new FormData();
			formData.append('tipo', type);
			fetch('controllers/get/getInfoApartamentos.php', { method: 'POST', body: formData })
			.then(
				response => {
					return response.json()
				}
			)
			.then(
				data => {
					this.info = data;
					this.puntoRecorridos = JSON.parse(data.recorridos)
					console.log(this.puntoRecorridos[0])
					this.info.imagenesslider = JSON.parse(data.imagenesslider);
				}
			)
			.catch(function(error) {
				console.log(error);
			});
		},
	},
	created : function(){
		this.getinfo()

		document.getElementById("first-section").scrollIntoView();
	}
})