Vue.component("edit-summary", {
    template: `
    <div  
      class="col-md-10 position-relative summary-col edit-box">
    <div class="row">

        <div class="col-sm-7 mt-5">
            <div>

                <label for="">نام و نام خانوادگی</label>
            </div>
            
            <input type="text" name="name" class="input-field">
    
        </div>
        
            <div class="col-sm-7 mt-5">
                <div>

                    <label for="">عنوان شغلی</label>
                </div>
                <input type="text" name="job_title">
        
            </div>
            <div class="col-sm-7 mt-5">
                <div>
                    <label for="">وضعیت اشتغال</label>

                </div>
                <label for="">جویای کار</label>
                <input class="radio-btn" type="radio" name="job_status" id="">
                
                <label for="">به دنبال شغل بهتر</label>
                <input type="radio" name="job_status" id="">
                
                <label for="">شاغل</label>
                <input type="radio" name="job_status" id="">
        
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
                <button class="save-btn">ذخیره</button>

            </div>

        
    </div>






</div>


    `,

    data() {
        return {
            displayStatus: {
                display: "block",
            },
            EditdisplayStatus: {
                display: "none",
            },
            EditForm:false
        };
    },
    methods:{
        
         

    
    }
});

var app = new Vue({
    el: "#summary",

    data: {
        displayStatus: {
            display: "block",
        },
        EditdisplayStatus: {
            display: "none",
        },

        showEditBtn:false,
        
        showEditForm:false
    },
    methods: {
        

   
    },
});
