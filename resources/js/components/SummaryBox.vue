<template>
   <div id="summary" class="box">
    <div class="box-content summary" v-on:mouseenter="showEditBtn=!showEditBtn"
        v-on:mouseleave="showEditBtn=!showEditBtn">
        <div class="row">
 
                <image-uploader :src="person.image"></image-uploader>

            <div v-on:click="showEditForm=true" v-show="!showEditForm" class="col-md-10 summary-col position-relative">

                <div class="w-100 summary-list-wrapper">
                    <ul>
                        <li class="fullname">
                            {{person.fullname}}
                        </li>
                                        
                        <li>
                            عنوان شغلی:
                            <span>{{person.job_title}}</span>
                        </li>

                        <li>
                            وضعیت اشتغال:
                            <span>{{person.job_status}}</span>
                        </li>
                        <li>
                            آخرین شرکت:ایران خودرو زیبایی
                        </li>
                        <li>
                            آخرین مدرک تحصیلی:کارشناسی ارشد
                        </li>
                    </ul>

                    <a class="btn see-resume-btn" href="#">
                        <i class="fa fa-eye" aria-hidden="true"></i>

                        مشاهده رزومه</a>
                    <a class="download-cv-btn p-1" href="#">دریافت فایل رزومه</a>
                </div>
                

                <button v-show="showEditBtn" v-on:click="showEditForm=true" class=" position-absolute edit-btn">
                    <i class="fa fa-pencil" aria-hidden="true"></i>

                    ویرایش</button>
            </div>

            <edit-summary :person="person"
             v-show="showEditForm" v-on:cancel="showEditForm=false"></edit-summary> 
 
  

       
        </div>
    </div>
</div>

</template>

<script>
import axios from 'axios';


export default {
     
    data() {
        return {
            showEditBtn: false,

            showEditForm: false,

            person:[],
       
        }
    },
                                                    
    methods: {},

    created() {
        
            axios.get('/get-summary-data').then(Response =>{
            
            this.person = Response.data.person;
             
            
        } );


     },

     methods: {
      
     },




}
</script>