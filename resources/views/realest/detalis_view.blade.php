<!DOCTYPE html>
    <html lang="en" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/styeltweb.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
        <style>
            swiper-container {
              width: 100%;
              height: 100%;
            }
        
            swiper-slide {
              text-align: center;
              font-size: 18px;
              background: #fff;
              display: flex;
              justify-content: center;
              align-items: center;
            }
            
            swiper-slide img {
              width: 100%;
              height: 100%;
              object-fit: cover;
            }
        
        
            swiper-container {
              width: 100%;
              height: 300px;
              margin-left: auto;
              margin-right: auto;
            }
        
            swiper-slide {
              background-size: cover;
              background-position: center;
            }
        
            .mySwiper {
              height: 500px;
              width: 100%;
            }
        
            .mySwiper2 {
              height: 20%;
              box-sizing: border-box;
              padding: 10px 0;
            }
        
            .mySwiper2 swiper-slide {
              width: 25%;
              height: auto;
              opacity: 0.4;
            }
        
            .mySwiper2 .swiper-slide-thumb-active {
              opacity: 1;
            }
        
            .mySwiper2 swiper-slide img, swiper-slide a {
              width: 100%;
              height: 100%;
              object-fit: cover;
            }
            .property-features {
                display: block;
                columns: 3;
                -webkit-columns: 3;
                -moz-columns: 3;
            }
        </style>
        <title>{{$property->name}}</title>
        <link rel="icon" href="/logoapp (1).png">
    </head>
    <body>
        @include('layouts.headone')
        @include('layouts.nav')
    

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    @if (session()->has('Add'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('Add') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    
    
    @if (session()->has('Edit'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('Edit') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    
    
    @if (session()->has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('delete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    
    @if (session()->has('Error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('Error') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    
    
    
    
    

        
        <div class="page-content p-lg-5 p-sm-1">
            <div class="container">
                <div class="real-estate-gallery">

                    <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper"

                thumbs-swiper=".mySwiper2" loop="true" space-between="10" navigation="true">

                @foreach ($property->images as $item)
                <swiper-slide>
                    <a href="/{{$item->image_path}}" data-lightbox="image-1" data-title="My caption"><img src="/{{$item->image_path}}" /></a>
                </swiper-slide>
                @endforeach
              

                {{-- <swiper-slide>
                    <a href="/assets/img/backgrounds/pc1.jpg" data-lightbox="image-1" data-title="My caption"><img src="/assets/img/backgrounds/pc1.jpg" /></a>
                </swiper-slide>

                <swiper-slide>
                    <a href="/assets/img/backgrounds/pc2.jpg" data-lightbox="image-1" data-title="My caption"><img src="/assets/img/backgrounds/pc2.jpg" /></a>
                </swiper-slide>

                <swiper-slide>
                    <a href="/assets/img/backgrounds/pc1.jpg" data-lightbox="image-1" data-title="My caption"><img src="/assets/img/backgrounds/pc3.jpg" /></a>
                </swiper-slide> --}}



                </swiper-container>


                {{-- <swiper-container class="mySwiper2" loop="true" space-between="10" slides-per-view="4" free-mode="true"
                watch-slides-progress="true">
                <swiper-slide>
                    <img src="/assets/img/backgrounds/pc1.jpg" />
                </swiper-slide>
                <swiper-slide>
                    <img src="/assets/img/backgrounds/pc1.jpg" />
                </swiper-slide>
                <swiper-slide>
                    <img src="/assets/img/backgrounds/pc2.jpg" />
                </swiper-slide>
                <swiper-slide>
                    <img src="/assets/img/backgrounds/pc3.jpg" />
                </swiper-slide>
                </swiper-container> --}}
                </div>
                <div class="row real-estate-details">
                    <div class="col-lg-8">
                        <div class="text-end mt-4 d-flex align-items-center justify-content-between">
                            <h1 class="blue-color"><span class="english-font">AED / </span>{{$property->property_details->price}}$</h1>
                            <p class="english-font m-0 p-1">{{$property->views}} <i class="fa fa-eye"></i></p>
                        </div>   
                        <ul class="property-main-features list-unstyled d-flex justify-content-between flex-wrap p-sm-5 p-lg-4 mt-4">
                            <li>اسم العقار <span class="english-font d-block">{{$property->name}}</span></li>
                            <li>مكان العقار <span class="english-font d-block">{{$property->country}}</span></li>
                            <li>رقم التواصل <span class="english-font d-block">{{$property->user->phone}}</span></li>
                            <li>رقم العقار <span class="english-font d-block">{{$property->property_details->id}}</span></li>
                            <li>المساحة الكليه <span class="english-font d-block">{{$property->property_details->space}} / m</span></li>
                        </ul>                        
                        <div class="real-estate-description">
                            <h3 class="mt-5">الوصف</h3>
                            <hr class="my-4">
                            <p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق "ليتراسيت" (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل "ألدوس بايج مايكر" (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>
                        </div>
                        <div class="real-estate-description">
                            <h3 class="mt-5">التفاصيل</h3>
                            <hr class="my-4">
                            <ul class="property-features margin-top-0 list-unstyled p-0 mt-4">
                                <li class="mb-3">رقم التواصل: <span class="english-font">{{$property->property_details->seller_phone}}</span></li>
                                <li class="mb-3">رقم العقار: <span class="english-font">4</span></li>
                                <li class="mb-3"> عدد الحمامات: <span class="english-font">{{$property->property_details->numbeer_toilet}}</span></li>
                                <li class="mb-3"> عدد الغرف: <span class="english-font">{{$property->property_details->numbeer_room}}</span></li>
                                <li class="mb-3">نوع المبني: <span>{{$property->catogery->name}}</span></li>
                                <li class="mb-3">الإتجاة: <span>{{$property->property_details->property_direction}}</span></li>
                            </ul>
                        </div>
                        <div class="real-estate-description">
                            <h3 class="mt-5">الخصائص</h3>
                            <hr class="my-4">
                            <ul class="property-features margin-top-0 list-unstyled p-0 mt-4 d-block">
                            @foreach ($property->facilities as $item)
                            <li class="mb-3"><i class="fa fa-check bg-primary text-white p-1"></i> <span class="english-font">{{$item->facility}}</span></li>
                            @endforeach
                            

                            </ul>
                        </div>
                        <div class="real-estate-description">
                            <h3 class="mt-5">الموقع</h3>
                            <hr class="my-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5131538.418446104!2d5.966409251223678!3d51.09676186178127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479a721ec2b1be6b%3A0x75e85d6b8e91e55b!2sGermany!5e0!3m2!1sen!2seg!4v1675985696502!5m2!1sen!2seg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box  p-4 mt-4">
                            <h5 class="mb-4">أستعلم الان عن هذا الإعلان</h5>
                            <form action="{{ route("addenqueris") }}"method="post" enctype="multipart/form-data">
                                {{ method_field('post') }}
                                {{ csrf_field() }}

                                <div class="form-group mb-3">
                                    <label for="name">الاسم</label>
                                    <input type="text" id="name" name="username" class="form-control ms-2 rounded-0 p-3" placeholder="جون دوي" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone">الهاتف</label>
                                    <input type="tel" id="phone" name="userphone" class="form-control ms-2 rounded-0 p-3" placeholder="ادخل رقم الهاتف" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">البريد الالكتروني</label>
                                    <input type="email" id="email" name="useremail" class="form-control ms-2 rounded-0 p-3" placeholder="ادخل البريد الالكتروني" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description">وصف المشكلة</label>
                                    <textarea name="description" class="form-control" id="description" placeholder="اكتب الوصف هنا"></textarea>
                                </div>
                                <button  name="property_id" value="{{$property->id}}" class="btn btn-primary rounded-0 px-5 py-3 mt-4 blue-background-color d-flex align-items-center w-100 text-center justify-content-center">إستعلام <i class="fa fa-search me-2">  </i></button>
                            </form>
                        </div>
                        <div class="box  p-4 mt-4">
                            <h5 class="mb-4"><i class="fa fa-warning text-danger"></i> الإبلاغ عن العقار</h5>
                            <form action="{{ route("addreport") }}"method="post" enctype="multipart/form-data">
                                {{ method_field('post') }}
                                {{ csrf_field() }}
                            
                                <div class="form-group mb-3">
                                    <label for="name1">الاسم</label>
                                    <input type="text" id="name1" name="username" class="form-control ms-2 rounded-0 p-3" placeholder="جون دوي" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone1">الهاتف</label>
                                    <input type="tel" id="phone1" name="userphone" class="form-control ms-2 rounded-0 p-3" placeholder="ادخل رقم الهاتف" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email1">البريد الالكتروني</label>
                                    <input type="email" id="email1" name="useremail" class="form-control ms-2 rounded-0 p-3" placeholder="ادخل البريد الالكتروني" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description">وصف المشكلة</label>
                                    <textarea name="description" class="form-control" id="description" placeholder="اكتب الوصف هنا"></textarea>
                                </div>
                                <button name="property_id" value="{{$property->id}}" class="btn btn-danger rounded-0 px-5 py-3 mt-4 d-flex align-items-center w-100 text-center justify-content-center">الإبلاغ <i class="fa fa-warning text-white me-2"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr class="my-5">


                
    
                    </div>
                </div>
        
            </div>
        </div>
        @include('layouts.fotterone')
        <script src="{{ asset('assets/js/libraries/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/libraries/owl.carousel.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js" integrity="sha512-dSI4QnNeaXiNEjX2N8bkb16B7aMu/8SI5/rE6NIa3Hr/HnWUO+EAZpizN2JQJrXuvU7z0HTgpBVk/sfGd0oW+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/libraries/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/libraries/a1a75d5546.js') }}"></script>
        <script src="{{ asset('assets/s/libraries/swiper-bundle.min.js') }}"></script>
    </body>
</html>