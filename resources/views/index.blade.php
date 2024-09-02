<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>gravitao</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      {{-- <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> --}}
     
     
     
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('asset/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('asset/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('asset/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
     
   </head>
   <!-- body -->
   <body class="main-layout">
      
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="{{ asset('asset/images/logo.png') }}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <ul class="informisition">
                        <li><a href="tel:+2348156212134"> <i class="fa fa-phone" aria-hidden="true"></i> +2348156212134</a></li>
                        <li><a href="mailto:gravitao@gmail.com""><i class="fa fa-envelope" aria-hidden="true"></i>  gravitao@gmail.com</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="text-bg">
                     <h1> Building<br> Dreams <span class="cons">Construction </span></h1>
                     <a class="read_more" href="Javascript:void(0)">Read More</a>
                  </div>
               </div>
              
               <div class="col-md-5">
                 
                @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                    <form id="request" class="main_form" action="{{ route('submit.form') }}" method="POST">
                        @csrf 
                        
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone" type="type" name="Phone">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" name="Message" >Message</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- service -->
      <div class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Professional <span class="dark">Services  Available</span>
                     </h2>
                     <p>Expertly managing every phase from design to completion, we provide top-quality construction solutions tailored to your needs. Transforming your vision into reality with precision and care.</p>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class="col-md-4">
                  <div class="service_box text_align_center">
                    <div class="service_icon"><i><img src="{{ asset('asset/images/service_icon1.png') }}" alt="#"/></i></div>
                     {{-- <div class="service_icon"><i><img src="images/service_icon1.png" alt="#"/></i></div> --}}
                     <h3>ARCHITECTURAL  DESIGN</h3>
                     <p>Crafting innovative and functional designs that bring your vision to life. We combine creativity with technical expertise to create spaces that are both beautiful and practical</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="service_box text_align_center">
                    <div class="service_icon"><i><img src="{{ asset('asset/images/service_icon2.png') }}" alt="#"/></i></div>
                     {{-- <div class="service_icon"><i><img src="images/service_icon2.png" alt="#"/></i></div> --}}
                     <h3>CONSTRUCTION SERVICES</h3>
                     <p>Delivering high-quality, tailored construction solutions from start to finish. We bring your vision to life with precision and craftsmanship.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="service_box text_align_center">
                    <div class="service_icon"><i><img src="{{ asset('asset/images/service_icon3.png') }}" alt="#"/></i></div>
                     {{-- <div class="service_icon"><i><img src="images/service_icon3.png" alt="#"/></i></div> --}}
                     <h3>BUILDING MAINTENANCE</h3>
                     <p>Ensuring your property remains in top condition with comprehensive maintenance services. We handle repairs, upgrades, and routine upkeep to keep your building functional and attractive.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->
      <!-- we_are -->
      <div class="we_are">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="titlepage text_align_left">
                     <h2>Who <span class="dark">we are?</span>
                     </h2>
                     <p>At Gravitao, we are dedicated to transforming your construction dreams into reality. With a team of seasoned professionals, we bring years of experience and expertise to every project, ensuring exceptional quality and precision. Our commitment to excellence drives us to deliver innovative solutions tailored to your specific needs.</p>
                     <p>Our approach combines creativity with technical proficiency, allowing us to handle projects of all sizes and complexities. From initial design to final touches, we meticulously manage every detail to achieve outstanding results. Our goal is to create spaces that not only meet but exceed your expectations.</p>
                     <p>We pride ourselves on our customer-centric approach, working closely with you to understand your vision and bring it to life. At Gravitao, we build more than just structures; we build lasting relationships based on trust, integrity, and unparalleled service.</p>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="wedo_img">
                    <figure><img src="{{ asset('asset/images/we_img.jpg') }}" alt="#"/></figure>
                     {{-- <figure><img src="images/we_img.jpg" alt="#"/></figure> --}}
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end we_are -->
      <!-- choose -->
      <div class="choose">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Why <span class="dark">Choose Us</span>
                     </h2>
                     <p>At Gravitao, we bring a commitment to quality, reliability, and innovation to every project we undertake. With a team of experienced professionals and a proven track record of successful builds, we ensure that your vision is brought to life with precision and care. Our customer-first approach guarantees that your needs are met on time, within budget, and to the highest standards. Trust us to deliver excellence from concept to completion.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="chose_box_main">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="choose_box text_align_center">
                            <div class="choose_icon">
                                <i><img src="{{ asset('asset/images/chose_icon1.png') }}" alt="#"/></i></div>
                              {{-- <i><img src="images/chose_icon1.png" alt="#"/></i> --}}
                              <h3>24/7 Emergency</h3>
                              <p>We’re always here when you need us. Our team is available around the clock to handle any emergency, ensuring prompt and reliable solutions anytime, day or night. </p>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="choose_box text_align_center">
                            <div class="choose_icon">
                                <i><img src="{{ asset('asset/images/chose_icon2.png') }}" alt="#"/></i></div>
                              {{-- <i><img src="images/chose_icon2.png" alt="#"/></i> --}}
                              <h3>Expert and Professional</h3>
                              <p>Our team is composed of seasoned experts who bring professionalism and unmatched skill to every project. We ensure the highest standards of quality and excellence.

 </p>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="choose_box text_align_center">
                            <div class="choose_icon">
                            <i><img src="{{ asset('asset/images/chose_icon3.png') }}" alt="#"/></i></div>
                              {{-- <i><img src="images/chose_icon3.png" alt="#"/></i> --}}
                              <h3>Satisfaction Guarantee</h3>
                              <p>Your satisfaction is our top priority. We’re committed to delivering results that exceed your expectations, ensuring you’re completely satisfied with every aspect of our work.

 </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end choose -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonial</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_slider" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption position_inhirt">
                                 <div class="testimo_text">
                                    
                                    <i><img src="{{ asset('asset/images/test.png') }}" alt="#"/></i>
                                    {{-- <i><img src="images/test.png" alt="#"/></i> --}}
                                    <h3>Mr Lawani</h3>
                                    <i class="text_align_left di_block"><img src="{{ asset('asset/images/left.png') }}" alt="#"/></i>
                                    <p>Working with your team was a fantastic experience! The professionalism and attention to detail exceeded my expectations. I couldn’t be happier with the results.</p>
                                    <i class="text_align_right di_block"><img src="{{ asset('asset/images/right.png') }}" alt="#"/></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption position_inhirt">
                                 <div class="testimo_text">
                                    <i><img src="{{ asset('asset/images/smp.jpg') }}" alt="#"/></i>
                                    <h3>Kolawole Rae</h3>
                                    <i class="text_align_left di_block"><img src="{{ asset('asset/images/left.png') }}" alt="#"/></i>
                                    <p>I’m thoroughly impressed with the quality of work and how smoothly the entire process went. Your team delivered exactly what was promised, on time and within budget.</p>
                                    <i class="text_align_right di_block"><img src="{{ asset('asset/images/right.png') }}" alt="#"/></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption position_inhirt">
                                 <div class="testimo_text">
                                    <i><img src="{{ asset('asset/images/client.png') }}" alt="#"/></i>
                                    <h3>James Smith</h3>
                                    <i class="text_align_left di_block"><img src="{{ asset('asset/images/left.png') }}" alt="#"/></i>
                                    <p>From start to finish, your company provided exceptional service. The project was handled with care and expertise, and the end result speaks for itself. Highly recommended!</p>
                                    <i class="text_align_right di_block"><img src="{{ asset('asset/images/right.png') }}" alt="#"/></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="cont">
                        <h3>Building Your Visions  <br> <span class="white">Creating Reality</span></h3>
                     </div>
                  </div>
                  <div class="col-md-8 offset-md-2">
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright 2024 All Right Reserved  Gravitao</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/popper.min.js"></script>
      <script src="asset/js/bootstrap.bundle.min.js"></script>
      <script src="asset/js/jquery-3.0.0.min.js"></script>
      <script src="asset/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="asset/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="asset/js/custom.js"></script>
   </body>
</html>