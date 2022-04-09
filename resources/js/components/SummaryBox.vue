<template>
   <div id="summary" class="box">
    <div class="box-content summary" v-on:mouseenter="showEditBtn=!showEditBtn"
        v-on:mouseleave="showEditBtn=!showEditBtn">
        <div class="row">


            <div class=" text-center avatar-col col-md-2">
                <div class="picture-icon">
                    <i class="fa fa-solid fa-user"></i>

                </div>
                <label class="btn t mt-1 w-100 upload-image-btn" for="UploadAvatar">
                    آپلود عکس
                </label>
                <input style="display:none;" type="file" name="avatar" id="UploadAvatar">
            </div>

            <div v-on:click="showEditForm=true" v-show="!showEditForm" class="col-md-10 summary-col position-relative">

                <div class="w-100 summary-list-wrapper">
                    <ul>
                        <li class="fullname">
                            رضا سلام محمره
                        </li>
                        <li>

                            عنوان شغلی:برنامه نویس


                        </li>
                        <li>
                            وضعیت اشتغال:شاغل
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

             <edit-summary v-show="showEditForm" v-on:cancel="showEditForm=false"></edit-summary>
 
  


        </div>
    </div>
</div>

</template>

<script>
export default {
    props:['getDataRoute'],
    data() {
        return {
            showEditBtn: false,

            showEditForm: false,
        }
    },

    methods: {},

    mounted() {
         axios.get(this.getDataRoute).then(response => console.log(response));
    },




}
</script>