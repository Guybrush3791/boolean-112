<template>
    <h1>Students: {{ students.length }}</h1>
    <ul>
        <li
            v-for="(student, index) in students"
            :key="index"
        >
            {{ student.name }} {{ student.lastname }}
        </li>
    </ul>
</template>

<script>

import axios from 'axios';

export default {
    name: 'TestComp',
    data() {
        return {
            students: []
        }
    },
    mounted() {

        const t = this;
        axios.get('http://localhost/studentsApi.php')
             .then(res => {

                // console.log("data: " + JSON.stringify(res.data));
                t.students = res.data;
             }).catch(err => console.error(err));
    }
}

</script>