<template>
    <div>
        <span class="like-btn" @click="likeRecipe" :class="{'like-active':this.like}"></span>
        <p>a {{ countedLikes }} les gusto esta receta</p>
    </div>
</template>
<script>
export default {
    props: ['recipeId', 'like', 'likes'],
    data: function () {
        return {
            totallikes: this.likes
        }
    },
    methods: {
        likeRecipe() {
            axios.post('/recetas/' + this.recipeId)
                .then(response => {
                    if (response.data.attached.length > 0) {
                        this.$data.totallikes++;
                    } else {
                        this.$data.totallikes--;
                    }
                })
                .catch(error => {
                    console.log(error)
                })
        }
    },
    computed: {
        countedLikes: function () {
            return this.totallikes;
        }
    }
}
</script>
