<template>
    <h1>Tasks</h1>
    <h3>New Task</h3>
    <form
        @submit.prevent="createTask"
    >
        <input type="text" name="text" v-model="newTaskText" >
        <input type="submit" value="CREATE">
    </form>
    <ul>
        <li
            v-for="(task, index) in tasks"
            :key="index"
        >
            <div
                @click="toggleTask(index)"
                style="display: inline-block;"
            >
                <del v-if="task.completed">
                    {{ task.text }}
                </del>
                <span v-else>
                    {{ task.text }}
                </span>
            </div>
            <button
                @click="deleteTask(index)"
            >X</button>
        </li>
    </ul>
</template>

<script>

import axios from 'axios';

export default {
    name: 'TasksComp',
    data() {
        return {
            tasks: [],
            newTaskText: ''
        }
    },
    methods: {
        createTask() {

            const params = {
                text: this.newTaskText
            };
            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            };

            axios.post("http://localhost/back-end/createTask.php", params, config)         
                 .then(res => {

                    this.tasks = res.data;
                    this.newTaskText = '';
                 })
                 .catch(err => console.log(err));

        },
        toggleTask(index) {

            const params = {
                index: index
            };
            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            };

            axios.post("http://localhost/back-end/toggleTask.php", params, config)
                 .then(res => {

                    this.tasks = res.data;
                 })
                 .catch(err => console.log(err));
        },
        deleteTask(index) {

            const params = {
                index: index
            };
            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            };

            axios.post("http://localhost/back-end/deleteTask.php", params, config)
                 .then(res => {

                    this.tasks = res.data;
                 })
                 .catch(err => console.log(err));
        }
    },
    mounted() {

        axios.get('http://localhost/back-end/getTasks.php')
             .then(res => {

                this.tasks = res.data;
             })
             .catch(err => console.log(err));
    }
}

</script>