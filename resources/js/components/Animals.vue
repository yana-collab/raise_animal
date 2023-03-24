<template>
    <div class="panel-heading">Animals list</div>
    <div class="list-group" v-for="animal in animals">
        <div class="col-sm">
        <p>{{ animal.name }}</p>
            <router-link :to="{name:'showOne', params: { id: animal.id }}"></router-link>
    </div>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            animals: []
        }
    },
    mounted() {
        this.loadAnimals()
    },
    methods: {
        loadAnimals() {
            axios.get('/api/animals')
                .then(response => {
                    console.log(response);
                    this.animals = response.data
                })
                .catch(error => {
                    console.log(error);
                })
        },
    }
}
</script>
