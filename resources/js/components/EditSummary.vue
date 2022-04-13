<template> 
 
 
<div  
      class="col-md-10 position-relative summary-col edit-box">
    <div class="row">

        <div class="col-sm-7 mt-5">
            <div>

                <label for="">نام و نام خانوادگی</label>
            </div>
            
            <input type="text" name="name" class="input-field" v-model="person.fullname"  >
    
        </div>
        
            <div class="col-sm-7 mt-5">
                <div>

                    <label for="">عنوان شغلی</label>
                </div>
                <input type="text" name="job_title" v-model="person.job_title" >
        
            </div>
            <div class="col-sm-7 mt-5">
                <div>
                    <label for="">وضعیت اشتغال</label>

                </div>
                <label for="">جویای کار</label>
                <input  class="radio-btn" type="radio" name="job_status" v-model="person.job_status" value="searching" :checked="person.job_status == 'searching'">
                
                <label for="">به دنبال شغل بهتر</label>
                <input type="radio" name="job_status" v-model="person.job_status" value="better_job" :checked="person.job_status == 'better_job'">
                
                <label for="">شاغل</label>
                <input type="radio" name="job_status" v-model="person.job_status" value="working" :checked="person.job_status == 'working'">
        
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
import axios from 'axios';


export default {
        props:['person'],
        data() {
        return {
            displayStatus: {
                display: "block",
            },
            EditdisplayStatus: {
                display: "none",
            },
            EditForm:false,
      
            
             
        }
    },
    methods:{
        
        saveData:function () {

            axios.post('/save-summary-data',
            {
                
                "name":this.person.fullname,
                "job_title":this.person.job_title,
                "job_status":this.person.job_status
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
    

}
</script>