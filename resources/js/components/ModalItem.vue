<template>
    <div
        v-show="!showEditForm"
        v-on:click="showEditForm = true"
        v-on:mouseenter="this.showEditBtn = true"
        v-on:mouseleave="this.showEditBtn = false"
        class="job-item box-content mt-1"
    >
        <h6 class="job-title">{{ job.job_title }}</h6>
        <span class="company">{{ job.company }} </span>
        <span>   ---- </span>
        <span>از</span><span>&nbsp</span>
        <span>{{ job.start_year }}</span>
        <span>&nbsp</span>
        <span>تا</span>
        <span>&nbsp</span>
        <span>{{ job.end_year }}</span>

      
    </div>
 
</template>

<script>
export default {
    props: ["job"],
    data() {
        return {
         
        };
    },
};
</script>
