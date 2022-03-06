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
                <div class="row summary">
                    <div class="col-2 text-center">
                        <div class="picture-icon">
                            <i class="fa fa-solid fa-user"></i>

                        </div>
                        <a class="btn btn-light mt-1 w-100 upload-image-btn" href="#">آپلود عکس</a>
                    </div>
                    <div class="col-10">

                        <div class=" w-100">
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

                            <a class="btn btn-success" href="#">مشاهده رزومه</a>
                            <a class="download-cv-btn p-1" href="#">دریافت فایل رزومه</a>
                        </div>



                    </div>
                </div>
                {{-- End Resume section --}}
                
                {{-- Resume Section --}}
                <div class="row personal-info">
                    <div class="box-header">

                    </div>
                </div>
                {{-- End Resume section --}}
               




            </div>

            <div class="col-lg-4">
qwedwed
            </div>



        </div>




    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>