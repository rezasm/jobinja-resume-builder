<div class="box">
    <div id="summary" class="box-content summary row" 
    v-on:mouseenter="showEditBtn=!showEditBtn" 
    v-on:mouseleave="showEditBtn=!showEditBtn" >

        <div class=" text-center avatar-col col-md-2">
            <div class="picture-icon">
                <i class="fa fa-solid fa-user"></i>

            </div>
            <label class="btn t mt-1 w-100 upload-image-btn" for="UploadAvatar">
                آپلود عکس
            </label>
            <input style="display:none;" type="file" name="avatar" id="UploadAvatar">
        </div>

        <div  v-show="showSummary" v-on:click="showSummary=false" v-on="" 
        class="col-md-10 summary-col position-relative">

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


            <button v-show="showEditBtn"  v-on:click="showEditForm=true" 
            class=" position-absolute edit-btn">
                <i class="fa fa-pencil" aria-hidden="true"></i>

                ویرایش</button>
        </div>

        <edit-summary v-show="showEditForm"></edit-summary>


        {{-- <transition name="fade">
            @include('edit-partials.__edit-summary')

        </transition> --}}


    </div>

</div>