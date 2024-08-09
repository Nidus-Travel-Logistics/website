<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Nidus Travel & Logitics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tailwind CSS Multipurpose Landing & Admin Dashboard Template">
    <meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css">
    <meta name="author" content="Shreethemes">
    <meta name="website" content="https://shreethemes.in">
    <meta name="email" content="support@shreethemes.in">
    <meta name="version" content="2.2.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Css -->
    <link href="{{ asset("assets/libs/tobii/css/tobii.min.css")}}" rel="stylesheet">
    <link href="{{ asset("assets/libs/tiny-slider/tiny-slider.css")}}" rel="stylesheet">
    <link href="{{ asset("assets/libs/js-datepicker/datepicker.min.css")}}" rel="stylesheet">
    <!-- Main Css -->
    <link href="{{ asset("assets/libs/@iconscout/unicons/css/line.css")}}" type="text/css" rel="stylesheet">
    <link href="{{ asset("assets/libs/@mdi/font/css/materialdesignicons.min.css")}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset("assets/css/tailwind.css")}}">
    @vite('resources/css/app.css')


</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
<!-- Loader Start -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader End -->


<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Logo container-->
        <a class="logo" href="/">
                    <span class="inline-block dark:hidden">
                        <img src="{{ asset("imgz/nidus_travels_color.png")}}" class="l-dark h-[70px]" height="24" alt="">
                        <img src="{{ asset("imgz/nidus_travels_white.png")}}" class="l-light h-[70px]" height="24" alt="">
                    </span>
            <img src="{{ asset("imgz/nidus_travels_white.png")}}" height="24" class="hidden dark:inline-block h-[70px]" alt="">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="inline mb-0">
                <a href="/register" class="bg-blue-200 text-blue-700 px-4 py-2 rounded text-sm border-2 border-transparent hover:border-white hover:bg-blue-800 hover:text-blue-950 mx-4">
                    Register
                </a>
            </li>

            <li class="inline mb-0">
                <a href="/login" class="bg-blue-200 text-blue-700 px-4 py-2 rounded text-sm border-2 border-transparent hover:border-white hover:bg-blue-800 hover:text-blue-950">
                    Login
                </a>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li><a href="/" class="sub-menu-item">Home</a></li>

                {{--<li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Services</a><span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li class="megamenu-head">Modern Portfolio</li>
                                <li><a href="/" class="sub-menu-item">Two Column</a></li>
                                <li><a href="/" class="sub-menu-item">Three Column</a></li>
                                <li><a href="/" class="sub-menu-item">Four Column</a></li>
                                <li><a href="/" class="sub-menu-item">Five Column</a></li>
                                <li><a href="/" class="sub-menu-item">Six Column</a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li class="megamenu-head"> Business Portfolio</li>
                                <li><a href="/" class="sub-menu-item">Two Column</a></li>
                                <li><a href="/" class="sub-menu-item">Three Column</a></li>
                                <li><a href="/" class="sub-menu-item">Four Column</a></li>
                                <li><a href="/" class="sub-menu-item">Five Column</a></li>
                                <li><a href="/" class="sub-menu-item">Six Column</a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li class="megamenu-head">Creative Portfolio</li>
                                <li><a href="/" class="sub-menu-item">Two Column</a></li>
                                <li><a href="/" class="sub-menu-item">Three Column</a></li>
                                <li><a href="/" class="sub-menu-item">Four Column</a></li>
                                <li><a href="/" class="sub-menu-item">Five Column</a></li>
                                <li><a href="/" class="sub-menu-item">Six Column</a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li class="megamenu-head">Masonry Portfolio</li>
                                <li><a href="/" class="sub-menu-item">Two Column</a></li>
                                <li><a href="/" class="sub-menu-item">Three Column</a></li>
                                <li><a href="/" class="sub-menu-item">Four Column</a></li>
                                <li><a href="/" class="sub-menu-item">Five Column</a></li>
                                <li><a href="/" class="sub-menu-item">Six Column</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>--}}

                <li><a href="/blog" class="sub-menu-item">Blog</a></li>

                <li><a href="/contact" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-64">
    <div class="absolute inset-0" id="overlay"></div>
    <div class="absolute inset-0 ltr:md:bg-gradient-to-l rtl:md:bg-gradient-to-r md:from-transparent md:via-indigo-600/80 md:to-indigo-800"></div>
    <div class="container relative">
        <div class="grid grid-cols-1">
            <div class="md:text-start text-center mt-10">
                <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Efficiency in Motion, <br> Comfort in Travel</h1>
                <p class="text-white/70 text-xl max-w-xl">Nidus Travel & Logistics is a premier travel and logistics company dedicated to providing seamless, efficient, and memorable travel experiences across Africa and beyond. With a comprehensive range of services, Nidus ensures that every journey, whether for leisure, business, or logistics, is executed with precision and care.</p>

                <a href="">
                    <i class="mdi mdi-arrow-down text-center inline-flex items-center justify-center rounded-full bg-white dark:bg-slate-900 size-12 mx-auto shadow-md dark:shadow-gray-800 mt-6"></i>
                </a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative -mt-28">
                <div class="p-6 bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800">
                    <div class="section-title">
                        <h4 class="text-2xl font-semibold mb-3">Search your trip</h4>
                        <p class="text-slate-400 mx-auto para-desc">We make it a priority to offer flexible services to accomodate your needs</p>
                    </div>

                    <form class="mt-4" action="#">
                        <div class="grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 gap-4">
                            <div>
                                <label class="font-semibold">Check in :</label>
                                <input name="date" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 start" placeholder="Select date :">
                            </div>

                            <div>
                                <label class="font-semibold">Check out :</label>
                                <input name="date1" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 end" placeholder="Select date :">
                            </div>

                            <div>
                                <label class="font-semibold">Adults :</label>
                                <input type="number" min="0" autocomplete="off" id="adult" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" required="" placeholder="Adults :">
                            </div>

                            <div>
                                <label class="font-semibold">Childrens :</label>
                                <input type="number" min="0" autocomplete="off" id="childrens" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" required="" placeholder="Childrens :">
                            </div>

                            <div class="lg:mt-7">
                                <input type="submit" id="submit" name="send" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Search Now">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section>

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px] relative">
            <div class="lg:col-span-8 md:col-span-12">
                <div class="grid grid-cols-1 pb-8">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our <br> Solutions</h3>

                    <p class="text-slate-400 max-w-xl">Leisure Travelers: Individuals and families seeking memorable vacation experiences.
                        Business Travelers: Professionals requiring efficient and reliable travel and logistics services.
                        Corporate Clients: Businesses needing comprehensive logistics and transportation solutions.
                        Tour Groups: Organized groups looking for customized travel packages.
                        E-commerce Companies: Firms needing dependable logistics support for their operations</p>
                </div><!--end grid-->

                <div class="grid md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900">
                        <i data-feather="codesandbox" class="size-12 stroke-1 text-indigo-600"></i>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-indigo-600">Air Ticket Booking</a>
                            <p class="text-slate-400 mt-3">Domestic and international flights
                                Competitive pricing and exclusive deals
                                24/7 customer support</p>

                        </div>
                    </div>

                    <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900">
                        <i data-feather="send" class="size-12 stroke-1 text-indigo-600"></i>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-indigo-600">Bus Ticket Booking</a>
                            <p class="text-slate-400 mt-3">Comfortable and reliable bus services across Africa
                                Easy online booking system
                                Safe and punctual transportation</p>

                        </div>
                    </div>

                    <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900">
                        <i data-feather="star" class="size-12 stroke-1 text-indigo-600"></i>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-indigo-600">Road Logistics</a>
                            <p class="text-slate-400 mt-3">Comprehensive logistics solutions for businesses
                                Freight forwarding and cargo handling
                                Real-time tracking and reporting</p>
                        </div>
                    </div>

                    <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900">
                        <i data-feather="bookmark" class="size-12 stroke-1 text-indigo-600"></i>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-indigo-600">Value Added Services</a>
                            <p class="text-slate-400 mt-3">Travel insurance
                                Visa assistance
                                Hotel reservations
                                Customized travel packages</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-12">
                <div class="grid lg:grid-cols-1 md:grid-cols-2 grid-cols-1 gap-[30px]">
                    <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900">
                        <i data-feather="users" class="size-12 stroke-1 text-indigo-600"></i>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-indigo-600">Promo Deals</a>
                            <p class="text-slate-400 mt-3">Refer a friend and earn hot deals</p>

                        </div>
                    </div>

                    <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900">
                        <i data-feather="message-circle" class="size-12 stroke-1 text-indigo-600"></i>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-indigo-600">24/7 Support</a>
                            <p class="text-slate-400 mt-3">Our dedicated team is readily available, open for business to assist our valued clients</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden after:content-[''] after:absolute after:h-40 after:w-40 after:bg-red-600/5 after:top-2/4 after:start-0 after:-z-1 after:rounded-3xl after:animate-[spin_10s_linear_infinite]"></div>
            <div class="overflow-hidden after:content-[''] after:absolute after:size-[512px] after:bg-indigo-600/5 after:top-1/4 after:end-0 after:-z-1 after:rounded-full"></div>
        </div><!--grid-->
    </div><!--end container-->

</section><!--end section-->
<!-- End Section-->

<section class="relative md:py-24 py-16 overflow-hidden">

    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Popular Tours</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Understanding the diverse needs and preferences of our customers enables us to tailor our services to provide exceptional experiences, whether it's a seamless flight booking, a comfortable bus journey, or efficient logistics solutions.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-[30px] mt-8">
            <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                <img src="assets/images/hotel/1.jpg" alt="">
                <span class="absolute inset-0 bg-slate-900/20 duration-500"></span>
                <div class="absolute top-0 start-0 p-4 pb-0">
                    <span class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Recommend</span>
                </div>

                <div class="absolute bottom-0 start-0 end-0 p-4 pt-0">
                    <a href="" class="text-white/80 hover:text-white text-xl font-semibold">Paradise Beach, Island</a>

                    <div class="flex justify-between mt-1">
                        <span class="text-gray-100"><i class="uil uil-dollar-sign text-[18px]"></i> 549</span>
                        <span class="text-gray-100"><i class="uil uil-plane-fly text-[18px]"></i> 10 Days</span>
                    </div>
                </div>
            </div><!--end content-->

            <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                <img src="assets/images/hotel/2.jpg" alt="">
                <span class="absolute inset-0 bg-slate-900/20 duration-500"></span>
                <div class="absolute top-0 start-0 p-4 pb-0">
                    <span class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Recommend</span>
                </div>

                <div class="absolute bottom-0 start-0 end-0 p-4 pt-0">
                    <a href="" class="text-white/80 hover:text-white text-xl font-semibold">Paradise Beach, Island</a>

                    <div class="flex justify-between mt-1">
                        <span class="text-gray-100"><i class="uil uil-dollar-sign text-[18px]"></i> 549</span>
                        <span class="text-gray-100"><i class="uil uil-plane-fly text-[18px]"></i> 10 Days</span>
                    </div>
                </div>
            </div><!--end content-->

            <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                <img src="assets/images/hotel/3.jpg" alt="">
                <span class="absolute inset-0 bg-slate-900/20 duration-500"></span>
                <div class="absolute top-0 start-0 p-4 pb-0">
                    <span class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Recommend</span>
                </div>

                <div class="absolute bottom-0 start-0 end-0 p-4 pt-0">
                    <a href="" class="text-white/80 hover:text-white text-xl font-semibold">Paradise Beach, Island</a>

                    <div class="flex justify-between mt-1">
                        <span class="text-gray-100"><i class="uil uil-dollar-sign text-[18px]"></i> 549</span>
                        <span class="text-gray-100"><i class="uil uil-plane-fly text-[18px]"></i> 10 Days</span>
                    </div>
                </div>
            </div><!--end content-->

            <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                <img src="assets/images/hotel/4.jpg" alt="">
                <span class="absolute inset-0 bg-slate-900/20 duration-500"></span>
                <div class="absolute top-0 start-0 p-4 pb-0">
                    <span class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Recommend</span>
                </div>

                <div class="absolute bottom-0 start-0 end-0 p-4 pt-0">
                    <a href="" class="text-white/80 hover:text-white text-xl font-semibold">Paradise Beach, Island</a>

                    <div class="flex justify-between mt-1">
                        <span class="text-gray-100"><i class="uil uil-dollar-sign text-[18px]"></i> 549</span>
                        <span class="text-gray-100"><i class="uil uil-plane-fly text-[18px]"></i> 10 Days</span>
                    </div>
                </div>
            </div><!--end content-->

            <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                <img src="assets/images/hotel/5.jpg" alt="">
                <span class="absolute inset-0 bg-slate-900/20 duration-500"></span>
                <div class="absolute top-0 start-0 p-4 pb-0">
                    <span class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Recommend</span>
                </div>

                <div class="absolute bottom-0 start-0 end-0 p-4 pt-0">
                    <a href="" class="text-white/80 hover:text-white text-xl font-semibold">Paradise Beach, Island</a>

                    <div class="flex justify-between mt-1">
                        <span class="text-gray-100"><i class="uil uil-dollar-sign text-[18px]"></i> 549</span>
                        <span class="text-gray-100"><i class="uil uil-plane-fly text-[18px]"></i> 10 Days</span>
                    </div>
                </div>
            </div><!--end content-->

            <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                <img src="assets/images/hotel/6.jpg" alt="">
                <span class="absolute inset-0 bg-slate-900/20 duration-500"></span>
                <div class="absolute top-0 start-0 p-4 pb-0">
                    <span class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Recommend</span>
                </div>

                <div class="absolute bottom-0 start-0 end-0 p-4 pt-0">
                    <a href="" class="text-white/80 hover:text-white text-xl font-semibold">Paradise Beach, Island</a>

                    <div class="flex justify-between mt-1">
                        <span class="text-gray-100"><i class="uil uil-dollar-sign text-[18px]"></i> 549</span>
                        <span class="text-gray-100"><i class="uil uil-plane-fly text-[18px]"></i> 10 Days</span>
                    </div>
                </div>
            </div><!--end content-->

            <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                <img src="assets/images/hotel/7.jpg" alt="">
                <span class="absolute inset-0 bg-slate-900/20 duration-500"></span>
                <div class="absolute top-0 start-0 p-4 pb-0">
                    <span class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Recommend</span>
                </div>

                <div class="absolute bottom-0 start-0 end-0 p-4 pt-0">
                    <a href="" class="text-white/80 hover:text-white text-xl font-semibold">Paradise Beach, Island</a>

                    <div class="flex justify-between mt-1">
                        <span class="text-gray-100"><i class="uil uil-dollar-sign text-[18px]"></i> 549</span>
                        <span class="text-gray-100"><i class="uil uil-plane-fly text-[18px]"></i> 10 Days</span>
                    </div>
                </div>
            </div><!--end content-->

            <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                <img src="assets/images/hotel/8.jpg" alt="">
                <span class="absolute inset-0 bg-slate-900/20 duration-500"></span>
                <div class="absolute top-0 start-0 p-4 pb-0">
                    <span class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Recommend</span>
                </div>

                <div class="absolute bottom-0 start-0 end-0 p-4 pt-0">
                    <a href="" class="text-white/80 hover:text-white text-xl font-semibold">Paradise Beach, Island</a>

                    <div class="flex justify-between mt-1">
                        <span class="text-gray-100"><i class="uil uil-dollar-sign text-[18px]"></i> 549</span>
                        <span class="text-gray-100"><i class="uil uil-plane-fly text-[18px]"></i> 10 Days</span>
                    </div>
                </div>
            </div><!--end content-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What our customer <br> say about us</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item">
                <div class="tiny-slide text-center">
                    <div class="cursor-e-resize">
                        <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <img src="assets/images/client/01.jpg" class="size-14 rounded-full shadow-md mx-auto" alt="">
                            <h6 class="mt-2 font-semibold">Calvin Carlo</h6>
                            <span class="text-slate-400 text-sm">Manager</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="cursor-e-resize">
                        <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <img src="assets/images/client/02.jpg" class="size-14 rounded-full shadow-md mx-auto" alt="">
                            <h6 class="mt-2 font-semibold">Christa Smith</h6>
                            <span class="text-slate-400 text-sm">Manager</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="cursor-e-resize">
                        <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <img src="assets/images/client/03.jpg" class="size-14 rounded-full shadow-md mx-auto" alt="">
                            <h6 class="mt-2 font-semibold">Jemina CLone</h6>
                            <span class="text-slate-400 text-sm">Manager</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="cursor-e-resize">
                        <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <img src="assets/images/client/04.jpg" class="size-14 rounded-full shadow-md mx-auto" alt="">
                            <h6 class="mt-2 font-semibold">Smith Vodka</h6>
                            <span class="text-slate-400 text-sm">Manager</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="cursor-e-resize">
                        <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <img src="assets/images/client/05.jpg" class="size-14 rounded-full shadow-md mx-auto" alt="">
                            <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                            <span class="text-slate-400 text-sm">Manager</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="cursor-e-resize">
                        <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <img src="assets/images/client/06.jpg" class="size-14 rounded-full shadow-md mx-auto" alt="">
                            <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                            <span class="text-slate-400 text-sm">Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Blog Or News</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Stay updated with our dynamic articles</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                <img src="assets/images/hotel/b1.jpg" alt="">

                <div class="content p-6">
                    <a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Design your apps in your own way</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>

                    <div class="mt-4">
                        <a href="blog-detail.html" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                <img src="assets/images/hotel/b2.jpg" alt="">

                <div class="content p-6">
                    <a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">How apps is changing the IT world</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>

                    <div class="mt-4">
                        <a href="blog-detail.html" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                <img src="assets/images/hotel/b3.jpg" alt="">

                <div class="content p-6">
                    <a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Smartest Applications for Business</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>

                    <div class="mt-4">
                        <a href="blog-detail.html" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- end section -->

<!-- Footer Start -->
<footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
    <div class="container relative">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="#" class="text-[22px] focus:outline-none">
                                <img src="{{ asset('imgz/nidus_travels_color.png') }}" class="h-[70px]" alt="">
                            </a>
                            <p class="mt-6 text-gray-300">Mobile app for on-the-go travel arrangements
                                Real-time tracking and updates for logistics services
                                User-friendly online booking platform</p>
                            <ul class="list-none mt-6">

                            </ul><!--end icon-->
                        </div><!--end col-->

                        <div class="lg:col-span-2 md:col-span-4">

                            <ul class="list-none footer-list mt-6">

                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <ul class="list-none footer-list mt-6">

                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Newsletter</h5>
                            <p class="mt-6">Sign up and receive the latest tips via email.</p>
                            <form>
                                <div class="grid grid-cols-1">
                                    <div class="my-3">
                                        <label class="form-label">Write your email <span class="text-red-600">*</span></label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                            <input type="email" class="form-input ps-12 rounded w-full py-2 px-3 h-10 bg-gray-800 border-0 text-gray-100 focus:shadow-none focus:ring-0 placeholder:text-gray-200" placeholder="Email" name="email" required="">
                                        </div>
                                    </div>

                                    <button type="submit" id="submitsubscribe" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Subscribe</button>
                                </div>
                            </form>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div><!--end col-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="py-[30px] px-0 border-t border-slate-800">
        <div class="container relative text-center">
            <div class="grid md:grid-cols-2 items-center">
                <div class="md:text-start text-center">
                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Nidus Travel & Logistics. </p>
                </div>

                <ul class="list-none md:text-end text-center mt-6 md:mt-0">
                    <li class="inline"><a href=""><img src="assets/images/payments/american-ex.png" class="max-h-6 inline" title="American Express" alt=""></a></li>
                    <li class="inline"><a href=""><img src="assets/images/payments/discover.png" class="max-h-6 inline" title="Discover" alt=""></a></li>
                    <li class="inline"><a href=""><img src="assets/images/payments/master-card.png" class="max-h-6 inline" title="Master Card" alt=""></a></li>
                    <li class="inline"><a href=""><img src="assets/images/payments/paypal.png" class="max-h-6 inline" title="Paypal" alt=""></a></li>
                    <li class="inline"><a href=""><img src="assets/images/payments/visa.png" class="max-h-6 inline" title="Visa" alt=""></a></li>
                </ul>
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- Footer End -->

<!-- Start Cookie Popup -->
<div class="cookie-popup fixed max-w-lg bottom-3 end-3 start-3 sm:start-0 mx-auto bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md py-5 px-6 z-50">
    <p class="text-slate-400">This website uses cookies to provide you with a great user experience. By using it, you accept our <a href="https://shreethemes.in" target="_blank" class="text-emerald-600 dark:text-emerald-500 font-semibold">use of cookies</a></p>
    <div class="cookie-popup-actions text-end">
        <button class="absolute border-none bg-none p-0 cursor-pointer font-semibold top-2 end-2"><i class="uil uil-times text-dark dark:text-slate-200 text-2xl"></i></button>
    </div>
</div>
<!--Note: Cookies Js including in plugins.init.js (path like; assets/js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
<!-- End Cookie Popup -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
<!-- Back to top -->


<!-- Switcher -->

<!-- JAVASCRIPTS -->
<script src="{{ asset("assets/libs/tobii/js/tobii.min.js")}}"></script>
<script src="{{ asset("assets/libs/tiny-slider/min/tiny-slider.js")}}"></script>
<script src="{{ asset("assets/js/easy_background.js")}}"></script>
<script src="{{ asset("assets/libs/js-datepicker/datepicker.min.js")}}"></script>
<script src="{{ asset("assets/libs/feather-icons/feather.min.js")}}"></script>
<script src="{{ asset("assets/js/plugins.init.js")}}"></script>
<script src="{{ asset("assets/js/app.js")}}"></script>
<script>
    easy_background("#overlay",
        {
            slide: ["assets/images/hotel/bg1.jpg", "assets/images/hotel/bg2.jpg", "assets/images/hotel/bg3.jpg"],
            delay: [4000, 4000, 4000]
        }
    );
</script>
<!-- JAVASCRIPTS -->
</body>
</html>
