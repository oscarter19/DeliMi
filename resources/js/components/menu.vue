<template>
<div class="category-list">
                    <h1>Lista de Categorias</h1>
                       <table class="table">
                        <tr v-for="(item,index) in categorias">
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" categoria="Categ" v-on:click="getProduct(index)">{{item.nombre}}</i></button>
                        </tr>
                        </table>
</div>
</template>

<script>
	export default{
	data(){

		return{
		 
			categorias: [],
			} 

	},
		mounted(){
		console.log('omponmente montado');
			const params={nombre: this.nombre};
		axios.get('/categ', params).then((response)=> {this.categorias = response.data;});
             
              },



		
		

	}
</script>