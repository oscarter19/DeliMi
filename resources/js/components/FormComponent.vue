<template>
 <div class="card">
                <div class="card-header">Ejemplo del video uso de componentes</div>

                 <div class="card-body">
                    

                    <form action="" v-on:submit.prevent="newProduct()">
                       <div class="form-group">
                           <label for="">Aqui se ingresan los productos</label>
                           <input type="text" class="form-control" name="product" v-model="description">
                       </div>
                        <button type ="submit"class="btn btn-primary"> enviar info</button>
                     </form>
                  </div>
 </div>
</template>

<script>
    export default {
        data(){
        return{
                description: ''

        }

        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
        newProduct(){
            const params = {
                description : this.description

            };
               
            axios.post('/products', params).then((response) => {
             const product = response.data;
             this.$emit('new',product);
             
            });

        }


        }
    }
</script>