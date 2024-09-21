
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masco - Saas Software Startup Tailwind Template</title>
    <meta name="description" content="AIMass Tailwind based SASS Template" />

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png" />

    <!-- Icon Font -->
    <link rel="stylesheet" href="assets/fonts/iconfonts/font-awesome/stylesheet.css" />
    <!-- Site font -->
    <link rel="stylesheet" href="assets/fonts/webfonts/inter/stylesheet.css" />
    <link rel="stylesheet" href="assets/fonts/webfonts/plus-jakarta-sans/stylesheet.css" />

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
            <!--...::: Breadcrumb Section Start :::... -->
            <section class="section-breadcrumb">
                <!-- Breadcrumb Section Spacer -->
                <div class="breadcrumb-wrapper">
                    <!-- Section Container -->
                    <div class="container-default">
                        <div class="breadcrumb-block">
                            <h1 class="breadcrumb-title">Contact Us</h1>
                            <ul class="breadcrumb-nav">
                                <li><a href='/'>Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Section Container -->

                    <!-- Breadcrumb Shape - 1 -->
                    <div class="absolute left-0 top-0 -z-10">
                        <img src="assets/img/elements/breadcrumb-shape-1.svg" alt="hero-shape-1" width="291" height="380" />
                    </div>

                    <!-- Breadcrumb Shape - 2 -->
                    <div class="absolute bottom-0 right-0 -z-[1]">
                        <img src="assets/img/elements/breadcrumb-shape-2.svg" alt="hero-shape-2" width="291" height="380" />
                    </div>
                </div>
                <!-- Breadcrumb Section Spacer -->
            </section>
            <!--...::: Breadcrumb Section End :::... -->

            <!--...::: Contact Info Section Start :::... -->
            <div class="section-contact-info">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container-default">
                        <!-- Contact Info List -->
                        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                            <!-- Contact Info Item -->
                            <div class="jos" data-jos_delay="0">
                                <div class="hover-solid-shadow h-full">
                                    <div class="h-full rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                        <img src="assets/img/icons/icon-duotone-chat.svg" alt="icon-duotone-chat" width="64" height="60" class="mb-[30px] h-[60px] w-auto" />
                                        <div>
                                            <div class="mb-4 text-2xl font-semibold -tracking-[0.5]">
                                                Chat with us
                                            </div>
                                            <p>
                                                We're waiting to help you every Monday-Friday from 9
                                                am to 5 pm EST easily.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Info Item -->
                            <!-- Contact Info Item -->
                            <div class="jos" data-jos_delay="0.3">
                                <div class="hover-solid-shadow h-full">
                                    <div class="h-full rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                        <img src="assets/img/icons/icon-duotone-phone.svg" alt="icon-duotone-phone" width="64" height="60" class="mb-[30px] h-[60px] w-auto" />
                                        <div>
                                            <div class="mb-4 text-2xl font-semibold -tracking-[0.5]">
                                                Give us a call
                                            </div>
                                            <p>
                                                Give us a ring at
                                                <a href="tel:+01234567890" class="font-semibold hover:text-ColorBlue">(+012-345-567-890)</a>. Every monday-friday from 9 am to 5 pm.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Info Item -->
                            <!-- Contact Info Item -->
                            <div class="jos" data-jos_delay="0.6">
                                <div class="hover-solid-shadow h-full">
                                    <div class="h-full rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                        <img src="assets/img/icons/icon-duotone-message.svg" alt="icon-duotone-message" width="64" height="60" class="mb-[30px] h-[60px] w-auto" />
                                        <div>
                                            <div class="mb-4 text-2xl font-semibold -tracking-[0.5]">
                                                Email Us
                                            </div>
                                            <p>
                                                Drop us an email at
                                                <a href="mailto:example@yourmail.com" class="font-semibold underline underline-offset-4 hover:text-ColorBlue">example@gmail.com</a>
                                                and you'll receive a reply within 24 hours.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Info Item -->
                            <!-- Contact Info List -->
                        </div>
                        <!-- Section Container -->
                    </div>
                    <!-- Section Space -->
                </div>
            </div>
            <!--...::: Contact Info Section End :::... -->

            <!--...::: Contact Section Start :::... -->
            <section class="section-contact">
                <!-- Section Space -->
                <div class="section-space-bottom">
                    <!-- Section Container -->
                    <div class="container-custom has-container-custom">
                        <!-- Contact Section Area -->
                        <div class="grid gap-[60px] lg:grid-cols-[0.85fr_1fr] lg:gap-20 xl:gap-[100px] xxl:gap-[134px]">
                            <!-- Contact Content Block -->
                            <div class="jos">
                                <!-- Section Wrapper -->
                                <div>
                                    <!-- Section Block -->
                                    <div class="mb-5">
                                        <h2>
                                            Fill out this form, We ‘ll quickly get back to you
                                        </h2>
                                    </div>
                                    <!-- Section Block -->
                                    <p>
                                        We are here to help you! Tell us how we can help and we’ll
                                        get in touch within next 24hrs with expert
                                    </p>
                                    <!-- Horizontal Line Separator -->
                                    <div class="my-7 h-px w-full bg-ColorBlack opacity-10 xl:my-10 xxl:my-14"></div>
                                    <!-- BlockQuote Block-->
                                    <div>
                                        <div class="mb-[25px] flex justify-center gap-1 text-[#FFC947] lg:justify-start">
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                        </div>
                                        <blockquote class="mb-6 font-semibold italic text-opacity-80">
                                            "Snaga did an exceptional job for us. keep up the
                                            excellent digital work. Man, this thing is getting
                                            better and better as I learn more about it. I have
                                            gotten at least 50 times the value from Snaga. It is
                                            worth much more than I paid."
                                        </blockquote>
                                        <div class="flex flex-col items-center gap-4 lg:flex-row">
                                            <img src="assets/img/th-1/about-hero-user-blockquote-img-2.jpg" alt="about-hero-user-blockquote-img-2" width="60" height="60" class="mx-auto h-[60px] w-[60px] rounded-[50%] lg:mx-0" />
                                            <div>
                                                <span class="block font-semibold text-ColorBlack">Brooklyn Simmons</span>
                                                <span class="text-sm text-opacity-80">CEO & Co-founder @ Company</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Section Wrapper -->
                            </div>
                            <!-- Contact Content Block -->

                            <!-- Contact Form Block -->
                            <div class="jos xm:p-10 rounded-[10px] border border-ColorBlack/50 bg-ColorOffWhite p-[30px]">
                                <form action="https://formspree.io/f/mlqvzkyx" method="post">
                                    <!-- From Group List -->
                                    <div class="flex flex-col gap-6">
                                        <!-- Form Group Item-->
                                        <div>
                                            <label for="name" class="mb-[10px] block text-left font-semibold">Your name</label>
                                            <input type="text" name="name" id="name" placeholder="Enter your full name" class="w-full rounded-[50px] border border-ColorBlack/50 px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required />
                                        </div>
                                        <!-- Form Group Item-->
                                        <!-- Form Group Item-->
                                        <div>
                                            <label for="email" class="mb-[10px] block text-left font-semibold">Email address</label>
                                            <input type="email" name="email" id="email" placeholder="Enter your full name" class="w-full rounded-[50px] border border-ColorBlack/50 px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required />
                                        </div>
                                        <!-- Form Group Item-->
                                        <!-- Form Group Item-->
                                        <div>
                                            <label for="message" class="mb-[10px] block text-left font-semibold">Write your message</label>
                                            <textarea name="message" id="message" placeholder="Write us your question here..." class="min-h-[130px] w-full rounded-[30px] border border-ColorBlack/50 px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required></textarea>
                                        </div>
                                        <!-- Form Group Item-->
                                    </div>
                                    <!-- From Group List -->
                                    <button type="submit" class="btn is-blue is-rounded is-large mt-8">
                                        Send Message
                                    </button>
                                </form>
                            </div>
                            <!-- Contact Form Block -->
                        </div>
                        <!-- Contact Section Area -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!--...::: Contact Section End :::... -->
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

    <!-- Main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>
