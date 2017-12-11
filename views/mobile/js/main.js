var app = new Vue({
	el: '#mainindex',
	data: {
		showprimero: true,
		showsegundo: false,
		apartamentos : []
	},
	methods: {
		changeView: function(){
			this.showprimero = !this.showprimero
			this.showsegundo = !this.showsegundo
		},
		getinfo : function(){
			fetch('../../controllers/get/getAllAparments.php', { method: 'GET'})
			.then(response => response.json())
			.then(data => {
				this.apartamentos = data;
				console.log(data)
			})
			.catch(function(error) {
				console.log(error);
			});
		}
	},
	created : function(){
		this.getinfo();
	}
})