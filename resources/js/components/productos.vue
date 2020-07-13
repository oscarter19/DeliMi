<template>
<div class="store-wrapper">
			  <section class="product-list">

					
			        	<producto-component v-for="(producto,index) in products"
			        	:key ="producto.id"
			        	:producto="producto"
			        	@new="agregarLista"
			        	@delete="deleteProducto(index)"
			        	@update="updateProducto(index, ...arguments)"></producto-component>
			        	
			 	</section>

             <div class="factura>">   

                      <h3>Carrito</h3>
                      
                      <table class="table">
                  

                      <tr v-for="item in lista" v-bind:style="item.estado == false ? 'color:green':'color:blue'"
                      :lista="lista">

                   
                        <td style="width: 120px">{{item.nombre}} {{item.description}}  {{item.precio}}$</td>
                         

                              <td style="width: 90px"> <input type="number" max ="20" min="0" class="form-control" v-model="item.cantidad">                   
                        </td>
                   <button id="delete" type="button" class="btn btn-outline-danger btn-lg btn-block" tittle="eliminar"
                        v-on:click="deleteItem(lista)">x</button>
                       
                    
                      </tr>
                      
                      <tr>
                      <td>Total : </td>
                      <td>$ {{sumatoria(lista)}}</td>
                      </tr>
                      </table>

                   
                  </div>

			</div>  		 


</template>

<script>
	export default{
	data(){

		return{
			products: [],
      lista:[]

		} 

	},
		mounted(){
		
		axios.get('/products').then((response)=>{this.products = response.data;});
            
              },
		methods:{


		
		agregarLista(producto){
			this.lista.push(producto);

		},
		addProducto(producto){
			this.products.push(producto);
		},
		deleteProducto(index){

		this.Products.splice(index,1);
		},

		updateProducto(index, thought){

		this.lista[index]=lista;
		},
		 sumatoria(lista){
        //alert(JSON.stringify(lista));
      
        var total=0;
    var task_names = [];

  for (var i = 0, max = lista.length; i < max; i += 1) {
   
      task_names.push(lista[i].precio);
      total = total + parseInt(lista[i].precio * lista[i].cantidad);
   
  } 
      return total;

        },
          //agregar data a la lista de la factura
          agregarData(){

              

              this.lista.push({nombre:this.nombre,descripcion:this.descripcion,estado:estadoA,precio:this.precio,cantidad:this.cantidad});
              this.nombre=" ";
              this.precio=" ";
              this.descripcion=" ";
              this.cantidad=" ";

        },

        //eliminar data de la lista de la factura
        deleteItem(i){ this.lista.splice(i,1) }
                }
       
		

	}
</script>