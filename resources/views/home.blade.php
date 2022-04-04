<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobinja Resume Builder</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light " id="menu">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
        <div id="root" class="row">

            <div  class="col-lg-8">
                {{-- Resume section --}}
                <summary-box></summary-box>
                 {{-- End Resume section --}}

                {{-- Resume Section --}}
                <personal-info></personal-info>
                {{-- End Resume section --}}

                {{-- Resume Section --}}
                <about-me></about-me>


                {{-- End Resume section --}}


                {{-- Resume Section --}}
                <my-skills></my-skills>
                {{-- End Resume section --}}

                {{-- Resume section --}}

                <last-jobs></last-jobs>
                {{-- End Resume section --}}


                {{-- Resume section --}}

                <div class="box mt-5">
                    <div class="box-header">
                        <h5>
                            سوابق تحصیلی
                        </h5>
                    </div>
                    <div class=" education p-0">


                        <div class="field-item box-content">
                            <h6 class="field-title">مهندسی مواد</h6>
                            <span class="company">شهید چمران اهواز </span>
                            <span>از</span>
                            <span>1390</span>
                            <span>تا</span>
                            <span>1394</span>
                            <button class=" position-absolute edit-btn">
                                <i class="fa fa-pencil" aria-hidden="true"></i>

                                ویرایش</button>
                        </div>

                        <div class="field-item box-content">
                            <h6 class="field-title">متالورژی جوش</h6>
                            <span class="company">شهید چمران اهواز </span>
                            <span>از</span>
                            <span>1394</span>
                            <span>تا</span>
                            <span>1397</span>

                            <button class=" position-absolute edit-btn">
                                <i class="fa fa-pencil" aria-hidden="true"></i>

                                ویرایش</button>
                        </div>

                        <div class="add-education">

                            <a class="add-education-btn" href="">+ ایجاد سابقه تحصیلی </a>
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
                        <button class=" position-absolute edit-btn">
                            <i class="fa fa-pencil" aria-hidden="true"></i>

                            ویرایش</button>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

 
<script src="{{ asset('js/app.js') }}"></script>        
 
</body>

</html>
