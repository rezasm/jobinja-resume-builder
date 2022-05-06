<template>
    <div class="box mt-5">
        <div class="box-header">
            <h5>
                <i class="fa fa-user-circle" aria-hidden="true"></i>

                سوابق شغلی
            </h5>
        </div>

        <div class="jobs p-0">
            <job-item 
            v-on:updatejobs="fetchJobs"
            v-for="job in jobs" :job="job"></job-item>

            <transition>
            <new-job-item
                v-on:closenewform="showNewJobForm=false"
                v-show="showNewJobForm"
                v-on:newjob="fetchJobs"
                
            ></new-job-item>
            
            </transition>

            <div class="add-job" v-on:click="showNewJobForm = true">
                <button class="add-job-btn">+ ایجاد سابقه کاری</button>
            </div>
        </div>
    </div>
</template>

<script>
// import jobsAarray from '../jobs.json';
import axios from "axios";
export default {
    data() {
        return {
            jobs: [],
            showNewJobForm: false,
        };
    },
    mounted() {
        this.fetchJobs();
    },

    methods: {

        fetchJobs(){
               axios.get("/get-jobs").then((Response) => {
            console.log(Response.data);

            this.jobs = Response.data;
            this.$emit("cancel");
        });



        }


       
    },
};
</script>
