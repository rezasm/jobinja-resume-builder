<template>
    <div class="box mt-5">
        <div class="box-header">
            <h5>
                <i class="fa fa-user-circle" aria-hidden="true"></i>

                سوابق شغلی
            </h5>
        </div>

     

              <div class=" jobs p-0">


                        <job-item v-for="job in jobs" :job="job" ></job-item>

                        <new-job-item  v-on:closenewform="showNewJobForm=false"
                         v-show="showNewJobForm"></new-job-item>

                        <div class="add-job" v-on:click="showNewJobForm=true">
                            <button class="add-job-btn" 
                           >

                                + ایجاد سابقه کاری

                            </button>
                  
                        </div>

                    </div>



   


    </div>
</template>

<script>
// import jobsAarray from '../jobs.json';
import axios from 'axios';
export default {

      data() {
        return {
            jobs:[],
            showNewJobForm:false
         
        }
    },
    mounted() {
            axios.get('/get-jobs').then(Response => {

                console.log(Response.data);

                this.jobs = Response.data;
                this.$emit('cancel');

            });
        

    },


};
</script>
