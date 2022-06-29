<template>
    <div class="box mt-5">
        <div class="box-header d-flex justify-content-between">

            <h5 class="w-100 position-relative">
                <i class="fa fa-user-circle" aria-hidden="true"></i>

                سوابق شغلی
                        <i   v-on:click="showModal = true"
                        class="fa fa-arrows box-header-icon" aria-hidden="true"></i>
            </h5>
            <div>

            </div>

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

    <teleport to='body' >
        <modal :show="showModal" @close="showModal=false">
            <template #header>
                
             </template>
            <template #body>

                <modal-item v-for="job in jobs" :job="job">

                </modal-item>


            </template>



        </modal>



    </teleport>



</template>

<script>
// import jobsAarray from '../jobs.json';
import axios from "axios";
import Modal from './Modal.vue';
import ModalItem from './ModalItem.vue';
export default {
    data() {
        return {
            jobs: [],
            showNewJobForm: false,
            showModal:false,
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
