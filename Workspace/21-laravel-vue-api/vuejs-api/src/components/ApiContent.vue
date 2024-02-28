<template>
    <h1>Photos</h1>

    <form v-if="createFormActive"
            @submit.prevent="submitNewPhoto"
        >
        <label for="name">name</label>
        <br>
        <input type="text" name="name" id="name" v-model="newPhoto.name">
        <br>
        <label for="description">description</label>
        <br>
        <input type="text" name="description" id="description" v-model="newPhoto.description">
        <br>
        <label for="date">date</label>
        <br>
        <input type="text" name="date" id="date" v-model="newPhoto.date">
        <br>
        <label for="weight">weight</label>
        <br>
        <input type="text" name="weight" id="weight" v-model="newPhoto.weight">
        <br>
        <label for="path">path</label>
        <br>
        <input type="text" name="path" id="path" v-model="newPhoto.path">
        <br><br>
        <input type="submit" value="CREATE">
    </form>
    
    <div v-else>
        <button @click="toggleCreateNewPhoto">CREATE NEW PHOTO</button>
        <ul>
            <li v-for="photo in photos" :key="photo.id">
                <h2>{{ photo.name }}</h2>
                <p>{{ photo.description }}</p>
                <p>{{ photo.date }}</p>
                <p>{{ photo.weight }}</p>
                <img :src="photo.path" alt="">
            </li>
        </ul>
    </div>

    <div>
        <ul>
            <li v-for="link in pageLinks" :key="link">
                <button 
                    @click="changePage(link.url)"
                    v-html="link.label" 
                    :class="link.active ? 'bg-light' : ''"    
                />
            </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'ApiContent',
    data() {
        return {
            photos: [],
            currentPage: 1,
            pageLinks: [],

            createFormActive: false,

            // DEBUG
            // newPhoto: {
            //     name: '',
            //     description: '',
            //     date: '',
            //     weight: '',
            //     path: ''
            // }
            // DEBUG
            newPhoto: {
                name: 'mia foto',
                description: 'mia desc',
                date: '2024-01-01',
                weight: '180',
                path: 'https://picsum.photos/200/300?random=200'
            }
        }
    },
    methods: {
      
        toggleCreateNewPhoto() {
            this.createFormActive = true;
        },
        submitNewPhoto() {
            
            axios.post(
                'http://localhost:8000/api/v1/photos', 
                this.newPhoto
            ).then(res => {

                const data = res.data;
                
                if (data.status == 'success') {
                    this.createFormActive = false;
                    this.changePage('http://localhost:8000/api/v1/photos?page=' + this.currentPage);
                }
            }).catch(err => {

                console.error(err);
            });
        },
        changePage(url) {

            axios.get(url) 
             .then(res => {

                const data = res.data;
                console.log("data: ", data);

                if (data.status == 'success') {
                    this.currentPage = data.photos.current_page;
                    this.pageLinks = data.photos.links;
                    this.photos = data.photos.data;
                    
                    console.log('photos: ', this.pageLinks);
                }
             })
             .catch(err => {

                console.err(err);
             })
        }    
    },
    mounted() { this.changePage('http://localhost:8000/api/v1/photos'); }
}
</script>

<style scoped>
ul {

    list-style-type: none;
}
button.bg-light {

    background-color: white;
    color: black;
}
</style>