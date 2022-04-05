<template>
  


                        <div v-show="!showEditForm" v-on:click="showEditForm=true" 
                        v-on:mouseenter="this.showEditBtn=true" v-on:mouseleave="this.showEditBtn=false" 
                        class="job-item box-content">
                            <h6 class="job-title">{{job.title}} </h6>
                            <span class="company">{{job.company}} </span>
                             
                            <span>از</span>
                            <span>{{job.from}}</span>
                            <span>تا</span>
                            <span>{{job.to}}</span>


                            <button v-on:click="showEditForm=true" v-show="showEditBtn" class=" position-absolute edit-btn">
                                <i class="fa fa-pencil" aria-hidden="true"></i>

                                ویرایش</button>
                        </div>


        <edit-job-item v-show="showEditForm" v-on:cancel="showEditForm=false" :job="job"></edit-job-item>

</template>

<script>
 

export default {
    props:['job'],
    data() {
        return {
            showEditForm:false,
            showEditBtn: false
        };
    },
};
</script>
