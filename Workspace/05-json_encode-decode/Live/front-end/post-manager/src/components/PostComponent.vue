<template>
    <h1>Posts: {{ posts.length }}</h1>
    <form
        @submit.prevent="pushPost"
        >
        <input type="text" name="text" v-model="newPostText"> 
        <input type="submit" value="SEND">
    </form>
    <ul>
        <li
            v-for="(post, index) in posts"
            :key="index"
        >
            {{ post.text }}
            <br>
            {{ post.date }}
            <br>
            Likes: {{ post.likes }}
            <br>
            <button @click="likeInc(index)">LIKE</button>
            <br>
            <button @click="deletePost(index)">DELETE</button>
        </li>
    </ul>
</template>

<script>

import axios from 'axios';

export default {
    name: 'PostComponent',
    data() {
        return {
            posts: [],
            newPostText: ""
        }
    },
    methods: {
        pushPost() {

            const t = this;
            const params = {
                text: this.newPostText
            };
            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            };

            axios.post('http://localhost/back-end/pushPost.php', params, config)
                 .then(res => {

                    t.posts = res.data;
                    t.newPostText = "";
                 }).catch(err => console.log(err));
        },
        deletePost(index) {

            const t = this;
            const params = {
                params: {

                    index: index
                }
            };

            axios.get("http://localhost/back-end/deletePost.php", params)
                .then(res => {

                    t.posts = res.data;
                })
                .catch(err => console.log(err));
        },
        likeInc(index) {

            const t = this;
            const params = {
                index: index
            };
            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            };

            axios.post("http://localhost/back-end/likeInc.php", params, config)
                .then(res => {

                    t.posts = res.data;
                }).catch(err => console.log(err));
        }
    },
    mounted() {

        const t = this;

        axios.get('http://localhost/back-end/getPosts.php')
             .then(res => {

                t.posts = res.data;
             }).catch(err => console.log(err));
    }
}


</script>