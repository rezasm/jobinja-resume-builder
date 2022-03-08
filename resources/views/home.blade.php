<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobinja Resume Builder</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light " id="menu">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">خانه</a>
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">رزومه های من</a>

                        </li>
                    </ul>




                  </div>

            </div>





        </nav>

    </header>

    <div class="container mt-5">
        <div class="row">

            <div class="col-lg-8">
                {{-- Resume section --}}
                <div class="box summary">
                    <div class="row">
                        <div class="col-2 text-center">
                            <div class="picture-icon">
                                <i class="fa fa-solid fa-user"></i>
    
                            </div>
                            <a class="btn btn-light mt-1 w-100 upload-image-btn" href="#">آپلود عکس</a>
                        </div>
                        <div class="col-10">
    
                            <div class=" w-100">
                                <ul >
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
    
    
    
                        </div>

                    </div>
                </div>
                {{-- End Resume section --}}
                
                {{-- Resume Section --}}
                <div class="box mt-5 personal-info" >
                    <div class="box-header">
                        <h5>
                            <i class="fa fa-solid fa-user"></i>

                            اطلاعات فردی</h5>
                    </div>
                    <div class="box-content">
                        <div class="row">
                            <div class="col-6">
                                <div class="item">
                                    <h5 class="item-title">
                                        آدرس ایمیل
                                    </h5>
                                    <span class="item-value">
                                        reza.salam90@gmail.com
                                    </span>
                                </div>
                                <div class="item">
                                    <h5 class="item-title">
                                        استان محل سکونت
                                    </h5>
                                    <span class="item-value">
                                        خوزستان
                                    </span>
                                </div>
                                <div class="item">
                                    <h5 class="item-title">
                                        وضعیت تعهل
                                    </h5>
                                    <span class="item-value">
                                        مجرد
                                    </span>
                                </div>
                                <div class="item">
                                    <h5 class="item-title">
                                        جنسیت
                                    </h5>
                                    <span class="item-value">
                                        مرد
                                    </span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <h5 class="item-title">
                                        شماره موبایل
                                    </h5>
                                    <span class="item-value">
                                        09371234567
                                    </span>
                                </div>
                                <div class="item">
                                    <h5 class="item-title">
                                        آدرس محل سکونت
                                    </h5>
                                    <span class="item-value">
                                        اهواز
                                    </span>
                                </div>
                                <div class="item">
                                    <h5 class="item-title">
                                        سال تولد
                                    </h5>
                                    <span class="item-value">
                                        1372
                                    </span>
                                </div>
                                <div class="item">
                                    <h5 class="item-title">
                                        وضعیت خدمت سربازی
                                    </h5>
                                    <span class="item-value">
                                        پایان خدمت
                                    </span>
                                </div>
                            </div>
                        </div>
                  
                  
                    </div>


                </div>
                {{-- End Resume section --}}

                {{-- Resume Section --}}
                <div class="box mt-5 about-me">
                    <div class="box-header">
                        <h5><i class="fa fa-user-circle" aria-hidden="true"></i>
                             
                            درباره من</h5>
                    </div>
                    <div class="box-content">
                        به برنامه نویسی بسیار علاقه مند هستم. با زبان php و فریمورک لاراول کار می‌کنم.
زبان انگلیسی را در سطح عالی آشنایی دارم.
وبسایت شخصی: https://rezasm.ir

                    </div>
                </div>


                {{-- End Resume section --}}
                
                
                {{-- Resume Section --}}
                <div class="box mt-5 skills">
                    <div class="box-header">
                        <h5>
                            مهارت های حرفه ای
                        </h5>
                    </div>

                    <div class="box-content">
                        <div class="col-12 mt-5 mb-5">
                            <a class="skill-item" href="#">
                                PHP
                            </a>
                            <a class="skill-item" href="#">
                                LARAVEL
                            </a>
                            <a class="skill-item" href="#">
                                HTML
                            </a>
                            <a class="skill-item" href="#">
                                CSS
                            </a>
                            <a class="skill-item" href="#">
                                JQUERY
                            </a>
                        

                        </div>
                    </div>
                </div>
                
                {{-- End Resume section --}}
                
                {{-- Resume section --}}

                <div class="box mt-5">
                    <div class="box-header">
                        <h5>
                            سوابق شغلی
                        </h5>
                    </div>
                    <div class="box-content jobs p-0">



                        <div class="job-item">
                            <h6 class="job-title">تکنسین کامپیوتر</h6>
                            <span class="company">نورافزار </span>
                            <span>از</span>
                            <span>1397</span>
                            <span>تا</span>
                            <span>1399</span>
                        </div>

                        <div class="job-item">
                            <h6 class="job-title">برنامه نویس</h6>
                            <span class="company">نمایندگی ایران خودرو زیبایی </span>
                            <span>از</span>
                            <span>1399</span>
                            <span>تا</span>
                            <span>حالا</span>
                        </div>
                        <div class="add-job">

                            <a class="add-job-btn" href="">+ ایجاد سابقه کاری </a>
                        </div>

                    </div>
                </div>



                {{-- End Resume section --}}
                
                
                {{--  Resume section --}}
                
                <div class="box mt-5">
                    <div class="box-header">
                        <h5>
                            سوابق تحصیلی
                        </h5>
                    </div>
                    <div class="box-content education p-0">



                        <div class="field-item">
                            <h6 class="field-title">مهندسی مواد</h6>
                            <span class="company">شهید چمران اهواز </span>
                            <span>از</span>
                            <span>1390</span>
                            <span>تا</span>
                            <span>1394</span>
                        </div>

                        <div class="field-item">
                            <h6 class="field-title">متالورژی جوش</h6>
                            <span class="company">شهید چمران اهواز </span>
                            <span>از</span>
                            <span>1394</span>
                            <span>تا</span>
                            <span>1397</span>
                        </div>
 
                        <div class="add-education">

                            <a class="add-education-btn" href="">+ ایجاد سابقه تحصیلی </a>
                        </div>

                    </div>
                </div>               
                {{-- End Resume section --}}
                
                
                {{--  Resume section --}}
                <div class="box mt-5">
                    <div class="box-header">
                        <h5>
                            زبان ها
                        </h5>
                    </div>
                    <div class="box-content languages p-0">



                        <div class="language-item">
                            <h6 class="language-title">انگلیسی:

                                <span class="level">حرفه ای </span>

                            </h6>
                          
                        </div>

                       
                        <div class="add-language">

                            <a class="add-language-btn" href="">+ افزودن زبان </a>
                        </div>

                    </div>
                </div>
                
                {{-- End Resume section --}}
                
                
                
                {{-- Resume section --}}

                <div class="box mt-5">
                    <div class="box-header">
                        <h5>
                            زبان ها
                        </h5>
                    </div>
                    <div class="box-content languages p-0">



                        <div class="language-item">
                            <h6 class="language-title">انگلیسی:

                                <span class="level">حرفه ای </span>

                            </h6>
                          
                        </div>

                       
                        <div class="add-language">

                            <a class="add-language-btn" href="">+ افزودن زبان </a>
                        </div>

                    </div>
                </div>
                


                {{-- End Resume section --}}












            </div>

            <div class="col-lg-4">
                <div class="box">
                    <div class="box-header">
                        <h6 class="text-center">کیفیت رزومه‌ی شما</h6>

                    </div>

                    <div class="box-content">
                        <div class="d-flex justify-content-center">

                            <div class="progress-circle">
                                <span class="completion-level"></span>
                            </div>
                        </div>

                        <ul class="improvement-list mt-5">
                           <li>
                               <a href="#">
                                مهارت های بیشتری اضافه کنید
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                به رزومه خود عکس آواتار اضافه کنید
                               </a>
                           </li>

                        </ul>


                    </div>
                </div>
                

            </div>

        </div>




    </div>

    <footer class="mt-5">
        <div class="bg-dark text-white text-center pt-1 pb-1">
            ساخته شده توسط: رضا سلام محمره
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>