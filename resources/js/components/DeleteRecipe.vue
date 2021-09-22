<template>
    <input type="submit" value="Eliminar" class="btn btn-danger float-right" @click="deleteRecipe">
</template>
<script>
export default {
    props: ['recipeId'],
    methods: {
        deleteRecipe() {
            this.$swal({
                title: '¿Deseas Eliminar la Receta?',
                text: "Se eliminara Permanentemente",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'No',
            }).then((result) => {
                if (result.isConfirmed) {
                    const params = {
                        id: this.recipeId,
                    }
                    axios.post(`/recetas/${this.recipeId}`, {params, _method: 'DELETE'})
                        .then(response => {
                            this.$swal({
                                title: 'Eliminado!',
                                text: 'Eliminado con exito',
                                icon: 'success'
                            })
                            //Delete of the DOM
                            this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                        })
                        .catch(error => {
                            console.log(error)
                        })
                }
            })
        }
    }
}
</script>
