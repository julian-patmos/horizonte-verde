let data = {
	header : {
		description : "3 ALCOBAS ESQUINERO + VESTIER + CLOSET DE LINOS + BALCÓN",
		subtitle : "VISTA A LA CORDILLERA"
	}
}


Vue.use(VueMaterial)

var app = new Vue({
	el: '#app',
	data: {
		apartamentos: {},
		info: {},
		header : {
			description : "3 ALCOBAS ESQUINERO + VESTIER + CLOSET DE LINOS + BALCÓN",
			subtitle : "VISTA A LA CORDILLERA"
		},
		infoUrl : {
			torre : 1,
			vista : 1,
			tipo : 1
		},
		showprimero : true,
		showsegundo : false,
		slideinteriores : 0,
		slideambientadas : 0,
		puntoRecorridos: [],
		selectedTab : 0,
		vistaTorre : 1
	},
	methods: {
		changeView: function(){

			this.showprimero = !this.showprimero
			this.showsegundo = !this.showsegundo
		},
		getinfo: function () {
			let formData = new FormData();
			formData.append('id', this.infoUrl.tipo);
			formData.append('torre', this.infoUrl.torre);
			this.header.subtitle = this.infoUrl.vista == 1 ? "VISTA A LA CORDILLERA" : "VISTA A LA CIUDAD"
			fetch('controllers/get/getApartamentos.php', { method: 'POST', body: formData })
			.then(response => response.json())
			.then( 
				data => {
					this.apartamentos = data
					this.getInfoApart(this.infoUrl.tipo)
			})
			.catch(function(error) {
				console.log(error);
			});
		},
		getInfoApart : function () {
			let formData = new FormData();
			formData.append('tipo', this.infoUrl.tipo);
			fetch('controllers/get/getInfoApartamentos.php', { method: 'POST', body: formData })
			.then(response => response.json())
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

		let params = (new URL(document.location)).searchParams;

		this.infoUrl.torre = params.get("torre");
		this.infoUrl.tipo = params.get("id");
		this.infoUrl.vista = params.get("vista");
	}
})
