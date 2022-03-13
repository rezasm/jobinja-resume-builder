<div class="box">
    <div id="summary" class="box-content summary row">

        <div class=" text-center avatar-col col-md-2">
            <div class="picture-icon">
                <i class="fa fa-solid fa-user"></i>

            </div>
            <label class="btn t mt-1 w-100 upload-image-btn" for="UploadAvatar">
                آپلود عکس
            </label>
            <input style="display:none;" type="file" name="avatar" id="UploadAvatar">
        </div>
        <div class="col-md-10 summary-col position-relative">

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


            <button v-on:click="showEditForm" class=" position-absolute edit-btn">
                <i class="fa fa-pencil" aria-hidden="true"></i>

                ویرایش</button>
        </div>

        {{-- @include('edit-partials.__edit-summary') --}}


    </div>

</div>