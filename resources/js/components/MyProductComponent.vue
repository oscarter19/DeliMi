<template>
 <div class="row ">
        <div class="col-md-6">
             <form-component @new="addProduct"></form-component>
          

        </div>   
          <div class="col-md-6">
            <productos-component 
             v-for="(product, index) in products" 
             :key="product.id"
             :product="product"
             @update="updateProduct(index, ...arguments)"
             @delete="deleteProduct(index)"></productos-component>

        </div>      
    </div>
</template>

<script>
    export default {
      data(){
          return {
                products: []

          }


      },
        mounted() {

            axios.get('/products').then((response)=>{
            this.products = response.data;

            });
        },
        methods:{
          addProduct(product){
          this.products.push(product);
          },
          
          updateProduct(index , product){

          this.products[index] = product;
          },

          deleteProduct(index){

          this.products.splice(index, 1);
          }

        }
    }
</script>