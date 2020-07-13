<template>
	<div class="product-item">
 		
	

                    
		  		<img v-bind:src="'img/' + producto.imagen" /> 
                  
             <div class="etiqueta">
                       <label>{{producto.nombre}}</label>  
                       <br>                  

                      <label>{{producto.description}}</label>
                      <br>

                      <label>{{producto.precio}}</label>
                      <br>
                      
                      <label>Cantidad</label>

                     <input type="number" max ="20" min="0" class="form-control" v-model="cantidad">

                     <button type="button" class="btn btn-outline-success btn-lg btn-block" 
                    v-on:click="agregarData(producto)">link carrito</button>
             </div>      

                     

          	
        
     
		
</div>	


</template>

<script>
var estadoA=false;
	export default{
	props : ['producto'],
	data(){

			return{
			lista: 
			{nombre:'',
			descripcion:'',
			cantidad:'',
			precio:''

			},
			editMode:false

			};


	},

		mounted(){
			console.log('component montado.')

		},
		methods:{

			onClickDelete(){
			axios.delete(`/products/${this.producto.id}`).then((response) => {
				this.$emit('delete');
				});
			},
			 //agregar data a la lista de la factura
          agregarData(producto){

         	
         		producto.cantidad=this.cantidad;

              
                    this.$emit('new',producto);
            },

        //eliminar data de la lista de la factura
        deleteItem(i){ this.lista.splice(i,1) },


			onClickEdit(){

			this.editMode=true;
			this.$emit('edit');
			

			},

			onClickUpdate(){
			const params = {
				description: this.product.description

			};

			  axios.put(`/products/${this.product.id}`,params).then((response)=>{

                     this.editMode = false;  
                     const product = response.data;
                    this.$emit('update',product);
                 });
			}


		}

	}
</script>