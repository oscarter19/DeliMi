            <template>
             <div class="panel -panel-default">
                <div class="panel panel-heading">Producto creado en {{ product.created_at }}</div>

                <div class="panel-body">

                 <input v-if="editMode" type="text" class="form-control" v-model ="product.description">
                  <p v-else> {{product.description}}</p>

                </div>
           
                <div class="panel-footer">
                    <button v-if ="editMode" class="btn btn-warning" v-on:click = "onClickGuardar()">Guardar Cambios</button>
                    <button v-else class="btn btn-default" v-on:click = "onClickUpdate()">Editar</button>
           
                    <button class="btn btn-danger" v-on:click = "onClickDelete()">Eliminar</button>
          
                </div>
             </div> 
            </template>
        
         
        <script>
            export default {
              props:['product'],

              data(){
               return {
                 editMode: false
                };
                  },

              methods: {
                 onClickDelete(){
                    axios.delete(`/products/${this.product.id}`).then((response)=>{
                  this.$emit('delete');
                  });
                  },

                 onClickGuardar(){
                  const params = {
                     description: this.product.description

                      }; 

                 axios.put(`/products/${this.product.id}`,params ).then((response)=>{

                     this.editMode = false;  
                     const product = response.data;  
                    this.$emit('update', this.product);
                 });
                    
                    },
                 onClickUpdate(){

                 this.editMode=true;
                  
                   
                    }
                },

             mounted() {
                console.log('Component mounted.')
              }
            }
        </script>
