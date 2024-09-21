
<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agency</title>
    <meta name="description" content="AIMass Tailwind based SASS Template" />
    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png"/>
    <!-- Icon Font -->
    {{-- <link rel="stylesheet" href="assets/fonts/iconfonts/font-awesome/stylesheet.css" />
    <!-- Site font -->
    <link rel="stylesheet" href="assets/fonts/webfonts/inter/stylesheet.css" />
    <link rel="stylesheet" href="assets/fonts/webfonts/plus-jakarta-sans/stylesheet.css" /> --}}
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendors/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/vendors/jos.css" />
    <link rel="stylesheet" href="assets/css/vendors/menu.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css" />
    <!-- Development css -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- Production css -->
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>
    <div class="page-wrapper relative z-[1] bg-white">
        <!--...::: Header Start :::... -->
         @include('Components.Header')
        <!--...::: Header End :::... -->

        <main class="main-wrapper relative overflow-hidden">
            <!--...::: Hero Section Start :::... -->
            @include('Components.Hero')

            <!--...::: Hero Section End :::... -->

            <!--...::: Brand Section Start :::... -->
         @include('Components.Brand')
          
            <!--...::: Brand Section End :::... -->

            <!-- Horizontal Line Separator -->
            <div class="horizontal-line bg-ColorBlack"></div>
            <!-- Horizontal Line Separator -->

            <!--...::: Service Section Start :::... -->
            @include('Components.Services')
        
            <!--...::: Service Section End :::... -->

            <!--...::: Content Section Start :::... -->
            @include('Components.Content')
         
            <!--...::: Content Section End :::... -->

            <!--...::: Portfolio Section Start :::... -->
            @include('Components.Portfolio')
      
            <!--...::: Portfolio Section End :::... -->

        <!--...::: Pricing Section Start :::... -->
            @include('Components.Pricing')
      
            <!--...::: Pricing Section End :::... -->
       
            <!--...::: Testimonial Section Start :::... -->
            @include('Components.Testimonials')

            <!--...::: Testimonial Section End :::... -->

            <!--...::: FAQ Section Start :::... -->
            @include('Components.Faq')
           
            <!--...::: FAQ Section End :::... -->
        </main>

        <!--...::: Footer Section Start :::... -->
        @include('Components.Footer')
        
        <!--...::: Footer Section End :::... -->
    </div>

    <!--Vendor js-->
    <script src="assets/js/vendors/counterup.js" type="module"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/fslightbox.js"></script>
    <script src="assets/js/vendors/jos.min.js"></script>
    <script src="assets/js/vendors/menu.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
