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
                    this.$swal(
                        'Eliminado!',
                        'Eliminado con Exito',
                        'success'
                    )
                }
            })
        }
    }
}
</script>
