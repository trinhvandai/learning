<!DOCTYPE html>

<!-- Mirrored from html.templaza.net/ethic/Home-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2015 12:50:46 GMT -->
<head>
	<base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!--[if IE 8]>
    <link href="style_ie8.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="fonts/awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href='css/owl.carousel.css' rel='stylesheet' type='text/css'>
    <link href='css/owl.theme.css' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
	@include('header')
		
    <div class="loading-page">
        <img src="demos/image-preload/image.gif" alt="Images-loading">
    </div>
    <div class="tz-content-search">
        <form action="#" method="get">
            <i class="fa fa-times tz-form-close"></i>
            <input type="text" class="tz-search-input" id="tz-search-input" name="search" placeholder="Search...">
        </form><!-- End form search -->
    </div><!-- End section search form -->

        @yield('content')
    @include('footer')
<!-- Begin section slideshow -->

<!-- End section tz-out-leader -->

<!-- Begin Footer -->

<!-- End Footer -->
<script>
    var Desktop       =   2,
            tabletportrait    =   2,
            mobilelandscape   =   1,
            mobileportrait    =   1,
            resizeTimer       =   null;

</script>
<script src="js/jquery.min.js"></script>
<script>
    jQuery.noConflict();
</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/off-canvas.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/resize.js"></script>
<script src="js/custom-portfolio.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from html.templaza.net/ethic/Home-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2015 12:54:23 GMT -->
</html>