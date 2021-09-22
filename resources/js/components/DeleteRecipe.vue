<template>
    <input type="submit" value="Eliminar" class="btn btn-danger float-right">
</template>
<script>
export default {
    props: ['recipeId'],
    mounted() {
        console.log('recipe id', this.recipeId);
    }
}
</script>
