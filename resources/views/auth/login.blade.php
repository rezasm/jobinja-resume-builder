<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('assets/style.css') }}">

</head>
<body>
    
    <div class="container">
        <form class="d-flex flex-column flex-nowrap" action="{{route('user.login')}}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <label for="">ایمیل</label>
                    <input name="email" type="text">
                </div>
    
            </div>
            <div class="row justify-content-center">
                
                <div class="col-lg-4">
                    <label for="">رمز عبور</label>
                    <input name="password" type="password">
                
                </div>  
            </div>
            <div class="row justify-content-center mt-1">
                <div class="col-lg-4">
                   <button class="save-btn w-100" type="submit">ورود</button>
                </div>
            </div>
        </div>

        </form>


</body>
</html>