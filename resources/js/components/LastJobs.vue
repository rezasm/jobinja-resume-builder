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

                        <div class="add-job">
                            <button class="add-job-btn" v-on:click="showNewJobForm=true"
                           >

                                + ایجاد سابقه کاری

                            </button>
                  
                        </div>

                    </div>



   


    </div>
</template>

<script>
import jobsAarray from '../jobs.json'
export default {

      data() {
        return {
            jobs:jobsAarray,
            showNewJobForm:false
         
        }
    },


};
</script>
