<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">
            Laracast Stats
        </h1>

        <ul>
            <li><strong>Total Series: </strong> {{ series }} </li>
            <li><strong>Total Lessons: </strong> {{ lessons }} </li>
        </ul>

    </div>





</template>

<script>
import axios from 'axios'
export default {
    data() {
        return {
            series: 0,
            lessons: 0
        };
    },

    // created() {
    //     axios.get('http://127.0.0.1:8000/api/stats').then(
    //         response => {
    //             this.series = response.data.series;
    //             this.lessons = response.data.lessons;
    //
    //         }
    //     )
    // }
    created() {
        axios.get('http://127.0.0.1:8000/api/stats').then(({data}) => {
            this.series = data.series;
            this.lessons = data.lessons
        });
    }

};
</script>
