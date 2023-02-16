<!DOCTYPE html>
<html lang="en">

<head>
    <!--
     - Roxy: Bootstrap template by GettTemplates.com
     - https://gettemplates.co/roxy
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Roxy by GetTemplates.co</title>
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/lightcase/lightcase.css') }}">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


     
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/styelblog.css') }}">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			Kuncen WB1, Wirobrajan 10010, DIY
		</p>
		<p>
			<span class="fs-16 primary-color">(+68) 120034509</span>
		</p>
		<p>info@yourdomain.com</p>
	</div>
</div>	<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<span class="lnr lnr-magnifier"></span>
			    </button>
			  </div>
			</div>

		</form>
	</div>
	
</div>	<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="/">
            <h3 class="font-weight-bolder mb-0">ROXY</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a id="side-search-open" class="nav-link" href="#">
                        <span class="lnr lnr-magnifier"></span>
                    </a>
                </li>
                 <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="#">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			Kuncen WB1, Wirobrajan 10010, DIY
		</p>
		<p>
			<span class="fs-16 primary-color">(+68) 120034509</span>
		</p>
		<p>info@yourdomain.com</p>
	</div>
</div><div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">
            <img src="" alt="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<span class="lnr lnr-magnifier"></span>
			    </button>
			  </div>
			</div>

		</form>
	</div>
	
</div>	<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(img/bg.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4">Blog</h1>
  </div>
</div>	<!-- Blog Section -->
<section id="blog" class="bg-grey">
    <div class="container">
        <div class="section-content">
            <div class="title-wrap mb-5" data-aos="fade-up">
                <h2 class="section-title">Latest <b>news</b></h2>
                <p class="section-sub-title">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            </div>
            <div class="row">
                <!-- Blog -->
                <div class="col-md-12 blog-holder">
                    <div class="row">
                        @for ($i = 0; $i < 10; $i++)
                            
                      
                        <!-- Blog Item -->
                        <div class="col-md-4 blog-item-wrapper" data-aos="fade-up">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="single.html"><img src="assets/img/backgrounds/blog-1.jpg" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <div class="blog-tag">
                                        <a href="#"><h6><small>CODE</small></h6></a>
                                    </div>
                                    <div class="blog-title">
                                        <a href="single.html"><h4>Amazing Blog Title</h4></a>
                                    </div>
                                    <div class="blog-meta">
                                        <p class="blog-date">30 May 2016</p> /
                                        <p class="blog-comment"><a href="">23 Comments</a></p>
                                    </div>
                                    <div class="blog-desc">
                                        <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do eiu smod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="blog-author">
                                        <p>by John Doe</p>
                                    </div>
                                    <div class="blog-share-wrapper">
                                        <a class="blog-share" href="google.com">
                                            <i class="fab fa-facebook-square"></i>
                                        </a>
                                        <a class="blog-share" href="google.com">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Item -->
                        @endfor
                        <!-- End of Blog Item -->
                    </div>
                </div>
                <!-- End of Blog -->
            </div>
        </div>
    </div>
</section>
<!-- End of Blog Section -->	<!-- Features Section-->
<section id="cta" class="bg-fixed overlay" style="background-image: url(img/bg.jpg);">
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mb-2">Make a beautiful website, or million of them</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, veritatis qui eligendi delectus quia fuga!</p>
                    <a class="btn btn-outline-primary btn-lg">FEATURES</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Features Section--></div>
<footer class="mastfoot my-3">
    <div class="inner container">
         <div class="row">
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		
         	</div>
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		<p class="mx-auto text-center mb-0">&copy; 2019 Roxy. Design by <a href="https://gettemplates.co" target="_blank">GetTemplates</a>.</p>
         	</div>
           
            <div class="col-lg-4 col-md-12">
            	<nav class="nav nav-mastfoot justify-content-center">
	                <a class="nav-link" href="#">
	                	<i class="fab fa-facebook-f"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-twitter"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-instagram"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-linkedin"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-youtube"></i>
	                </a>
	            </nav>
            </div>
            
        </div>
    </div>
</footer>	<!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.min.css') }}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/stellar/jquery.stellar.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('vendor/isotope/isotope.min.js') }}"></script>
    <script src="{{ asset('vendor/lightcase/lightcase.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/waypoint.min.js') }}"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script src="{{ asset('vendor/waypoints/waypoint.min.js') }}"></script>
	<!-- Main JS -->
	<script> !function(n,t,e){console.log("init");var o={init:function(e){o.select2(),o.stellar(),o.carousel(),o.portfolio(),o.lightCase(),o.sideNav(),o.counter(),o.skills(),o.aos(),o.navbarChange()},select2:function(){n(e).ready(function(){n("select").select2()})},stellar:function(){var e=n(t).width();767<=e&&(n(".bg-fixed").attr("data-stellar-background-ratio","0.8"),n.stellar({horizontalScrolling:!1,responsive:!0,parallaxBackgrounds:!0,scrollProperty:"scroll"}))},carousel:function(){n(".testi-carousel").owlCarousel({loop:!0,margin:10,autoplay:!0,nav:!1,dots:!0,dotSpeed:1e3,autoplay:!0,autoplaySpeed:1e3,items:1}),n(".client-slider").owlCarousel({loop:!0,margin:10,nav:!0,navSpeed:1e3,dots:!1,autoplay:!0,autoplaySpeed:1e3,navText:['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],responsive:{0:{items:1},600:{items:3},1e3:{items:6}}})},portfolio:function(){var t=n(".grid-portfolio").isotope({itemSelector:".grid-item",masonry:{gutter:".gutter-sizer",columnWidth:".grid-sizer"},percentPosition:!0});return n(".filter-button-group").on("click","a",function(){var e=n(this).attr("data-filter");t.isotope({filter:e})}),n(".btn-filter a.is-checked").addClass("active"),n(".btn-filter a").on("click",function(){n(".btn-filter a").removeClass("active"),n(this).addClass("active")}),!1},lightCase:function(){jQuery(e).ready(function(e){e("a[data-rel^=lightcase]").lightcase()})},sideNav:function(){n("#side-nav-open").click(function(){n("#side-nav").css("width","300"),setTimeout(function(){n("body").addClass("sidenav-open")},200),setTimeout(function(){n("body").addClass("in")},400)}),n("#side-nav-close, #canvas-overlay").click(function(){setTimeout(function(){n("body").removeClass("in")},200),setTimeout(function(){n("body").removeClass("sidenav-open"),n("#side-nav").css("width","0")},400)}),n("#side-search-open").click(function(){n("#side-search").css("width","300"),setTimeout(function(){n("body").addClass("sidesearch-open")},200),setTimeout(function(){n("body").addClass("in")},300)}),n("#side-search-close, #canvas-overlay").click(function(){setTimeout(function(){n("body").removeClass("in")},200),setTimeout(function(){n("body").removeClass("sidesearch-open"),n("#side-search").css("width","0")},300)})},counter:function(){n("#counter").each(function(){n(this).waypoint({handler:function(e){n(".number").countTo({speed:1e3}),this.destroy()},offset:"80%"})})},skills:function(){n("#skills").each(function(){return n(this).waypoint({handler:function(e){n(".progress").each(function(){console.log(n(this).attr("data-percent")),n(this).find(".progress-bar").delay(1e4).css({width:n(this).attr("data-percent")})})},offset:"80%"}),!1})},aos:function(){AOS.init({once:!0})},navbarChange:function(){n(t).scroll(function(){var e=n(t).scrollTop();return 150<e?(n("#header-navbar").removeClass("navbar-transparent"),n("body").addClass("not-on-top")):(n("body").removeClass("not-on-top"),n("#header-navbar").addClass("navbar-transparent")),!1})}};n(e).ready(function(){o.init(n)})}(window.jQuery,window,document);  </script>
	<script src="//localhost:35729/livereload.js"></script>
</body>
</html>
