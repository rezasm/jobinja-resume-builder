<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>رزومه رضا سلام محمره</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/resume.css">


</head>

<body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">رزومه ساز</a>

                        </li>
                   
                    </ul>




                </div>
                <button class="btn print-btn">پرینت</button>
                <button class="btn share-btn">به اشتراک گذاری</button>
                <a class="btn btn-success download-cv-btn" href="">دریافت رزومه</a>
            </div>
        </nav>
        
    </header>

    <div class="container">


        <div class="row resume-section">

            <div class="col-lg-4 sidebar">
                <div class="text-center mt-5">
    
                    <img src="assets/images/avatar.png" class="profile-icon text-center" alt="">
                </div>
    
                <h2 style="margin-top: 15px" class="text-center">رضا سلام محمره</h2>
                <div class="text-right mt-5 ">
                    <h3 class="p-infp-title">اطلاعات شخصی</h3>
    
                    <ul style="margin-top: 25px" class="personal-info" >
                        @foreach ($personal_info_titles as $title => $value)
                            <li style="margin-top: 15px">
                                <span class="title">{{ $title }}: </span>
                                <span class="value">{{ $person->$value }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 main">
    
                <div class="about">
                    <h3>درباره من</h3>
    
                    <span>
                        به برنامه نویسی بسیار علاقه مند هستم. با زبان php و فریمورک لاراول کار می‌کنم.
                        زبان انگلیسی را در سطح عالی آشنایی دارم.
                        وبسایت شخصی: https://rezasm.ir
                        نمونه پروژه انجام شده:
                        وبسایت فروشگاه قطعات شرکت ایران خودرو زیبایی: https://isacozibaee.ir
                    </span>
    
                </div>
    
                <div class="job-history">
                    <h3>سوابق شغلی</h3>
    
                    <ul>
                        @foreach ($last_jobs as $job)
                            <li>
                                <span class="job-title">{{ $job->job_title }}</span>
                                <div class="company">{{ $job->company }}</div>
                                <div class="date">
                                    <span>از </span>
                                    <span> {{ $job->start_month }} </span>
                                    <span> {{ $job->start_year }} </span>
                                    <span> تا </span>
                                    <span> {{ $job->end_month }} </span>
                                    <span> {{ $job->end_year }} </span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
    
    
                <div class="skills">
                    <h3>مهارت ها</h3>
    
                    <ul>
                        @foreach ($skills as $skill)
                            <li>
                                <span>{{ $skill }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
    
    
                <div class="education">
                    <h3>سوابق تحصیلی</h3>
    
    
                    <ul>
                        @foreach ($person->educations as $education)
                            <li>
                                <span class="job-title">{{ $education->field_title }}</span>
                                <div class="company">{{ $education->university }}</div>
                                <div class="date">
                                    <span>از </span>
                                    <span> {{ $education->start_year }} </span>
                                    <span> تا </span>
                                    <span> {{ $education->end_year }} </span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
    
                </div>
    
    
    
                <div class="languages">
                    <h3>زبان های مسلط</h3>
    
                    <ul>
                        @foreach ($person->languages as $language)
                            <li>
                                <span>{{ $language->language_name }} </span>
                                <span> ( {{ $language->level }} )</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
    
    
    
    
            </div>
        </div>




 

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
