<template>
    <span>{{ dateFormat }}</span>
</template>
<script>

export default {
    props: ['date'],
    computed: {
        dateFormat() {
            return moment(this.date).locale('es').format('DD [de] MMMM [del] YYYY');
        }
    }
}
</script>
