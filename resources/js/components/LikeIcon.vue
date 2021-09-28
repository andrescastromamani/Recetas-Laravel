<template>
    <div>
        <span class="like-btn" @click="likeRecipe" :class="{'like-active':isActive}"></span>
        <p>a {{ countedLikes }} les gusto esta receta</p>
    </div>
</template>
<script>
export default {
    props: ['recipeId', 'like', 'likes'],
    data: function () {
        return {
            isActive: this.like,
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
                    this.isActive = !this.isActive
                })
                .catch(error => {
                    if (error.response.status === 401) {
                        window.location = '/register';
                    }
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
