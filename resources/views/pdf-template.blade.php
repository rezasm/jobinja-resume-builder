<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>رزومه رضا سلام محمره</title>

    <link rel="stylesheet" href="assets/resume.css">


</head>

<body>

    <div class="container">

        <div class=" column sidebar">
            <div class="text-center">

                <img src="assets/images/avatar.png" class="profile-icon text-center" alt="">
            </div>

            <h2 class="text-center">رضا سلام محمره</h2>
            <div class="text-right">
                <h3 class="p-infp-title">اطلاعات شخصی</h3>

                <ul class="personal-info">
                    @foreach ($personal_info_titles as $title)
                        <li>
                            <span class="title">{{ $title }}: </span>
                            <span class="value">برنامه نویس</span>
                        </li>
                    @endforeach
                </ul>
            </div>










        </div>



        
            <div class="column main">
        
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
                        <span class="job-title">{{$job->job_title}}</span>
                        <div class="company">{{$job->company}}</div>
                        <div class="date">

                        </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
        
        
        
        
        
            </div>

    </div>
 

</body>

</html>
