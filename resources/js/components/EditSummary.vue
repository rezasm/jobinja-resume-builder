<template> 
 
 
<div  
      class="col-md-10 position-relative summary-col edit-box">
    <div class="row">

        <div class="col-sm-7 mt-5">
            <div>

                <label for="">نام و نام خانوادگی</label>
            </div>
            
            <input type="text" name="name" class="input-field" v-model="fullname" :value="fullname" >
    
        </div>
        
            <div class="col-sm-7 mt-5">
                <div>

                    <label for="">عنوان شغلی</label>
                </div>
                <input type="text" name="job_title" v-model="job_title" :value="job_title">
        
            </div>
            <div class="col-sm-7 mt-5">
                <div>
                    <label for="">وضعیت اشتغال</label>

                </div>
                <label for="">جویای کار</label>
                <input  class="radio-btn" type="radio" name="job_status" v-model="job_status" value="searching" :checked="job_status == 'searching'">
                
                <label for="">به دنبال شغل بهتر</label>
                <input type="radio" name="job_status" v-model="job_status" value="better_job" :checked="job_status == 'better_job'">
                
                <label for="">شاغل</label>
                <input type="radio" name="job_status" v-model="job_status" value="working" :checked="job_status == 'working'">
        
            </div>
            <div class="col-sm-12 mt-5">
                 <h5>آخرین شرکت
                     
                </h5>
                <a class="last-company" href="#">ایران خودرو زیبایی</a>



            </div>
            <div class="col-sm-12 mt-5">

                
                <h5 for="">آخرین مدرک تحصیلی</h5>
                <a class="last-company" href="#">کارشناسی ارشد</a>



            </div>
        
        
            <div class="col-sm-12 text-left p-5">
                <button v-on:click="$emit('cancel')" class="cancel-btn">انصراف</button>
                <button v-on:click="saveData" class="save-btn">ذخیره</button>

            </div>

        
    </div>






</div>
 
 

</template>


<script>
import axios from 'axios'
export default {
    
        data() {
        return {
            displayStatus: {
                display: "block",
            },
            EditdisplayStatus: {
                display: "none",
            },
            EditForm:false,
            fullname:"",
            job_title:"",
            job_status:"",
        }
    },
    methods:{
        
        saveData:function () {

            axios.post('/save-summary-data',
            {
                "name":this.fullname,
                "job_title":this.job_title,
                "job_status":this.job_status
            }
            
            
            )
            .then(Response =>
             console.log(Response.data.msg),
             this.$emit('cancel')
             )
            .catch(error=>{
                console.error("There was an error!",error);
            });
                       

        }
         

    
    },
    
    mounted() {

        axios.get('/get-summary-data').then(Response =>{
            this.fullname = Response.data.fullname,
            this.job_status = Response.data.job_status,
            this.job_title = Response.data.job_title
        } );

    }



}
</script>