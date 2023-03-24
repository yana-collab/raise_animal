<template>
    <div>
        <h2 style="text-align: center">Choose an animal type:</h2>
        <div class="slider">
            <div class="slides">
                <div class="slide" v-for="category in categories" :key="category.id">
                    <div class="card text-center">
                        <div class="card-header">
                            {{ category.type_name }}
                        </div>
                        <div class="card-body">
                            <img style="width: 100px" class="card-img-top" src="../../img/2.png" alt="Card image cap">
                            <h5 class="card-title">Оисание</h5>
                            <p class="card-text">Max age: {{ category.max_age }}</p>
                            <p class="card-text">Max size: {{ category.max_size }}</p>
                            <p class="card-text">Max age: {{ category.max_age }}</p>
                        </div>
                        <div class="card-footer text-muted">
                            <form>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" v-model="animal.name">
                                    <input type="hidden" class="form-control" ref="type_id">
                                </div>
                                <button @click.prevent="create" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="prev" @click="prevSlide">&#10094;</div>
            <div class="next" @click="nextSlide">&#10095;</div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'categories',

    data() {

        return {
            animal: {
                name: ''
            },
            categories: [],
            currentSlide: 1,
            slideWidth: 0
        };

    },
    mounted() {
        this.loadCategories()
    },
    methods: {
        loadCategories() {
            axios.get('/api/categories')
                .then(response => {
                    console.log(response);
                    this.categories = response.data
                })
                .catch(error => {
                    console.log(error);
                })
        },
        create() {
            const category = this.categories[this.currentSlide - 1];
            this.animal.type_id = category.id;
            axios.post(`/api/animal/create/`, this.animal)
                .then(response => {
                    console.log(response);
                    this.$router.push('/animals')
                })
                .catch(err => console.log(err))
        },
        prevSlide() {
            if (this.currentSlide === 1) {
                this.currentSlide = this.categories.length;
            } else {
                this.currentSlide--;
            }
            console.log(this.currentSlide);

        },
        nextSlide() {
            if (this.currentSlide === this.categories.length) {
                this.currentSlide = 1;
            } else {
                this.currentSlide++;
            }
            console.log(this.currentSlide);
        },
    }
};
</script>

