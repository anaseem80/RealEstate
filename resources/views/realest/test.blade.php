
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css-rtl/styeltweb.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
@endsection

<!DOCTYPE html>
    <html lang="en" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
<style>
header{
    background-image: url(assets/img/backgrounds/1.jpg);
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
    height: 100vh;
    background-attachment: fixed;
    display: grid;
    place-content: center;
  }
  
  body {
  background-color: #000000;
}
</style>
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/styeltweb.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
        <title>الصفحه الرئيسيه</title>
        <link rel="icon" href="logoapp (1).png">
    </head>
    <body>
        @include('layouts.headone')
        @include('layouts.nav')
        <header class="pt-5 position-relative">
            <div class="shadow position-absolute w-100 h-100 top-0 left-0 start-0 end-0"></div>
            <div class="container header-content position-relative">
                <h1 class="text-white text-center">اعثر علي منزل أحلامك</h1>
                <div class="row box p-4 col-lg-8 m-auto mt-5 rounded shadow-lg">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control ms-2 rounded-0 p-3" placeholder="شريط البحث">
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-lg-6">
                                <input type="number" class="form-control ms-2 rounded-0 p-3 mb-0" placeholder="الحد الادني للسعر" min="40" max="1000">
                            </div>
                            <div class="col-lg-6">
                                <input type="number" class="form-control ms-2 rounded-0 p-3 mb-0" placeholder="الحد الأقصي">
                            </div>
                            <div class="col-lg-12 mt-4">
                                <input type="text" class="form-control ms-2 rounded-0 p-3 mb-0" placeholder="المدينة">
                            </div>
                            <div class="col-lg-6 mt-4">
                                <select class="form-control rounded-0 p-3">
                                    <option value="" disabled selected>عدد الغرف</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mt-4">
                                <select class="form-control rounded-0 p-3">
                                    <option value="" disabled selected>عدد الحمامات</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mt-4">
                                <select class="form-control rounded-0 p-3">
                                    <option value="" disabled selected>نوع العقار</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mt-4">
                                <select class="form-control rounded-0 p-3">
                                    <option value="" disabled selected>مدة الإيجار</option>
                                </select>
                            </div>
                        
                        </div>
                        <button class="btn btn-primary rounded-0 px-5 py-3 mt-4 blue-background-color d-flex align-items-center w-100 text-center justify-content-center">بحث <i class="fa fa-search me-2"></i></button>
                    </form>
                </div>
            </div>
            
        </header>
        <div class="3kares-most-visited p-sm-5 p-1">
            <div class="container">
                <div class="title d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-5 mb-4">العقارات الأكثر زيارة</h1>
                        <span class="heading-divider"></span>
                        <p class="mb-5 fs-5">أكثر العقارات زيارة في أخر 24 ساعة</p>
                    </div>
                    <a href="#"><button class="btn fs-14  py-3 lh-15 px-5 mb-6 mb-lg-0">شاهد المزيد <img src="assets/img/backgrounds/arrow-back-long-svgrepo-com.svg" width="30" height="30" alt=""></button></a>
                </div>
                <div class="owl-carousel py-5 owl-theme">

 


           
                   @foreach ($propertiesviews as $item)
              
                   <div class="item">
                    <div class="card" dir="rtl">
                        <div class="position-relative p-1">
                            <div class="owl-carousel-img owl-theme" dir="ltr">
                                <div class="item position-relative">
                                    <img src="{{$item->picture}}" class="card-img-top" height="270" alt="...">
                                    <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">اعلي تقييم</p>        
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="card-body mt-2 p-0">
                            <div class="px-4">
                                <p class="text-danger fw-bold">حصري</p>
                                <a href="detelisscreen/{{$item->id}}" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">{{$item->name}}</h5></a>
                                <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt="">{{$item->country}}</p>
                                <!-- <ul class="p-0 d-flex justify-content-between">
                                    <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                    <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                </ul> -->
                            </div>
                            <hr class="m-0 mb-1">
                            <div class="publisher d-flex align-items-center justify-content-between p-4">
                             
                                <div class="info gray-color">
                                    {{$item->created_at}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
         
                   @endforeach



                    

                </div>
            </div>
        </div>
        <div class="3kares-most-visited p-sm-5 p-1">
            <div class="container">
                <div class="title d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-5 mb-4">عقارات أضيفت حديثاً</h1>
                        <span class="heading-divider"></span>
                        <p class="mb-5 fs-5">تصفح احدث عقارات السكنية اليوم.</p>
                    </div>
                    <a href="#"><button class="btn fs-14  py-3 lh-15 px-5 mb-6 mb-lg-0">شاهد المزيد <img src="assets/img/backgrounds/arrow-back-long-svgrepo-com.svg" width="30" height="30" alt=""></button></a>
                </div>
                <div class="owl-carousel py-5 owl-theme">








                    @foreach ($newProperties as $item)
                    <div class="item">
                     <div class="card" dir="rtl">
                         <div class="position-relative p-1">
                             <div class="owl-carousel-img owl-theme" dir="ltr">
                                 <div class="item position-relative">
                                     <img src="{{$item->picture}}" class="card-img-top" height="270" alt="...">
                                     <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">اعلي تقييم</p>        
                                 </div>
                             </div>
                             
                             
                         </div>
                         <div class="card-body mt-2 p-0">
                             <div class="px-4">
                                 <p class="text-danger fw-bold">حصري</p>
                                 <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">{{$item->name}}</h5></a>
                                 <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt="">{{$item->country}}</p>
                                 <!-- <ul class="p-0 d-flex justify-content-between">
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                 </ul> -->
                             </div>
                             <hr class="m-0 mb-1">
                             <div class="publisher d-flex align-items-center justify-content-between p-4">
                              
                                 <div class="info gray-color">
                                     {{$item->created_at}}
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>  
                    @endforeach
 






                </div>
            </div>
        </div>
        <div class="p-sm-5 p-1">
            <div class="container">
                <div class="title d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-5 mb-4">لماذا نحن؟</h1>
                        <span class="heading-divider"></span>
                        <p class="mb-5 fs-5">نحن نقدم خدمة كاملة في كل خطوة.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="why-choose-card mb-2 mb-sm-4  text-center rounded">
                            <div class="icon rounded-circle m-auto"><img src="assets/img/backgrounds/high-five.png" alt=""></div>
                            <h3 class="my-4">موثوق به من قبل الآلاف</h3>
                            <p>لدينا دعم فني بلاضافه الي سيره ذاتيه قويه</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="why-choose-card mb-2 mb-sm-4  text-center rounded">
                            <div class="icon rounded-circle m-auto"><img src="assets/img/backgrounds/home.png" alt=""></div>
                            <h3 class="my-4">موثوق به من قبل الآلاف</h3>
                            <p>لدينا كثير من التجارب الايجابيه مع   العملاء</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="why-choose-card mb-2 mb-sm-4  text-center rounded">
                            <div class="icon rounded-circle m-auto"><img src="assets/img/backgrounds/profit.png" alt=""></div>
                            <h3 class="my-4">موثوق به من قبل الآلاف</h3>
                            <p>السهوله في التواصل , متاحين خلال 24 ساعه</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="3kares-most-visited p-sm-5 p-1">
            <div class="container">
                <div class="title d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-5 mb-4">العقارات الموصى بها</h1>
                        <span class="heading-divider"></span>
                        <p class="mb-5 fs-5">تصفح العقارات الموصى بها.</p>
                    </div>
                    <a href="#"><button class="btn fs-14  py-3 lh-15 px-5 mb-6 mb-lg-0">شاهد المزيد <img src="assets/img/backgrounds/arrow-back-long-svgrepo-com.svg" width="30" height="30" alt=""></button></a>
                </div>
                <div class="owl-carousel py-5 owl-theme">




                    @foreach ($propertiesRec as $item)
                    <div class="item">
                     <div class="card" dir="rtl">
                         <div class="position-relative p-1">
                             <div class="owl-carousel-img owl-theme" dir="ltr">
                                 <div class="item position-relative">
                                     <img src="{{$item->picture}}" class="card-img-top" height="270" alt="...">
                                     <p class="status position-absolute text-light bg-danger text-white px-3 py-1 rounded fw-bold"><span class="english-font">اعلي تقييم</p>        
                                 </div>
                             </div>
                             
                             
                         </div>
                         <div class="card-body mt-2 p-0">
                             <div class="px-4">
                                 <p class="text-danger fw-bold">حصري</p>
                                 <a href="details.html" class="text-decoration-none"><h5 class="card-title mt-3 fw-bold gray-color">{{$item->name}}</h5></a>
                                 <p class="mt-3 fw-light d-flex align-items-center gray-color"><img src="assets/img/backgrounds/location-sign-svgrepo-com.svg" class="location ms-2" width="15" height="15" alt="">{{$item->country}}</p>
                                 <!-- <ul class="p-0 d-flex justify-content-between">
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                     <li class="list-inline-item m-0">رقم العقار: <span class="english-text">4</span></li>
                                 </ul> -->
                             </div>
                             <hr class="m-0 mb-1">
                             <div class="publisher d-flex align-items-center justify-content-between p-4">
                              
                                 <div class="info gray-color">
                                     {{$item->created_at}}
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>  
                    @endforeach
 



                </div>
            </div>
        </div>



        <div class="3kares-most-visited A3kar-type p-sm-5 p-1">
            <div class="container">
                <div class="title d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-5 mb-4">نوع العقار</h1>
                        <span class="heading-divider"></span>
                        <p class="mb-5 fs-5">تصفح احدث عقارات اليوم.</p>
                    </div>
                    <a href="#"><button class="btn fs-14  py-3 lh-15 px-5 mb-6 mb-lg-0">شاهد المزيد <img src="assets/img/backgrounds/arrow-back-long-svgrepo-com.svg" width="30" height="30" alt=""></button></a>
                </div>
                <div class="row">
                  
               
                 @foreach ($catogerys as $item)
                 <div class="col-lg-3 my-2">
                    <div class="properti_city position-relative">
                        <a href="morepropertyCato/{{$item->id}}">
                            <div class="thumb"><img class="img-fluid w-100" src="{{$item->image_path}}" alt="pc1.jpg"></div>
                            <div class="overlay">
                                <div class="details text-light">
                                    <h4>{{$item->name}}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                 @endforeach





                </div>
            </div>
        </div>






        <div class="3kares-most-visited p-sm-5 p-1">
            <div class="container">
                <div class="title d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h1 class="mt-5 mb-4">اكثر المدن التي تحتوي علي عقارات</h1>
                        <span class="heading-divider"></span>
                        <p class="mb-5 fs-5">تصفح اشهر المدن التي تحتوي علي عقارات</p>
                    </div>
                    <a href="#"><button class="btn fs-14  py-3 lh-15 px-5 mb-6 mb-lg-0">شاهد المزيد <img src="assets/img/backgrounds/arrow-back-long-svgrepo-com.svg" width="30" height="30" alt=""></button></a>
                </div>
                <div class="row">
{{-- @foreach ($mostCountries as $item) --}}
    
<div class="col-lg-8 my-2">
    <div class="properti_city position-relative">
        <a href="moreproperty/{{$mostCountries[0]->country}}">
            <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc2.jpg" alt="pc1.jpg"></div>
            <div class="overlay">
                <div class="details text-light">
                    <h4>{{$mostCountries[0]->country}}</h4>
                    <p><span class="english-font">{{$mostCountries[0]->count}}</span> عقار</p>
                </div>
            </div>
        </a>
    </div>
</div>


                    <div class="col-lg-4 my-2">
                        <div class="properti_city position-relative">
                            <a href="moreproperty/{{$mostCountries[1]->country}}">
                                <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc1.jpg" alt="pc1.jpg"></div>
                                <div class="overlay">
                                    <div class="details text-light">
                                        <h4>{{$mostCountries[1]->country}}</h4>
                                        <p><span class="english-font">{{$mostCountries[1]->count}}</span> عقار</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 my-2">
                        <div class="properti_city position-relative">
                            <a href="moreproperty/{{$mostCountries[2]->country}}">
                                <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/pc3.jpg" alt="pc1.jpg"></div>
                                <div class="overlay">
                                    <div class="details text-light">
                                        <h4>{{$mostCountries[2]->country}}</h4>
                                        <p><span class="english-font">{{$mostCountries[2]->count}}</span> عقار</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-8 my-2">
                        <div class="properti_city position-relative">
                            <a href="moreproperty/{{$mostCountries[3]->country}}">
                                <div class="thumb"><img class="img-fluid w-100" src="assets/img/backgrounds/1.jpg" alt="pc1.jpg"></div>
                                <div class="overlay">
                                    <div class="details text-light">
                                        <h4>{{$mostCountries[3]->country}}</h4>
                                        <p><span class="english-font">{{$mostCountries[3]->count}}</span> عقار</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>



                </div>
            </div>
        </div>


        <div class="p-sm-5 p-3 blue-background-color text-white">
            <div class="container">
                <div class="row align-items-center justify-content-sm-center">
                    <div class="col-lg-6">
                        <h1>كن وكيل عقارات</h1>
                        <p>نحن نعمل فقط مع أفضل الشركات حول العالم</p>
                    </div>
                    <div class="col-lg-6 text-start">
                        <a href="#"><button class="btn fs-14  py-3 lh-15 px-5 mb-6 mb-lg-0">تسجيل الدخول <img src="assets/img/backgrounds/arrow-back-long-svgrepo-com.svg" width="30" height="30" alt=""></button></a>                    </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.fotterone')
        <script src="{{ asset('assets/js/libraries/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/libraries/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/libraries/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/libraries/a1a75d5546.js') }}"></script>
        <script src="{{ asset('assets/s/libraries/swiper-bundle.min.js') }}"></script>
    </body>
</html>

@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection