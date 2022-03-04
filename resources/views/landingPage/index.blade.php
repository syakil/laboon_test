<!DOCTYPE html>
<html lang="en">

<head>
  <title>{{ config('app.name', 'Laravel') }}</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Dancing+Script:400,700|Muli:300,400" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend-assets/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('frontend-assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend-assets/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('frontend-assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend-assets/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend-assets/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{asset('frontend-assets/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{asset('frontend-assets/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{asset('frontend-assets/fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{asset('frontend-assets/css/aos.css')}}">
  <link href="{{asset('frontend-assets/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{asset('frontend-assets/css/style.css')}}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    <div class="header-top bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-lg-3">
            <a href="index.html">
              <img src="{{asset('frontend-assets/images/logo.png')}}" alt="Image" class="img-fluid" width="50%">
              <!-- <strong>Water</strong>Boat -->
            </a>
          </div>
          <div class="col-lg-3 d-none d-lg-block">

            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="icon-location-arrow text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">San Francisco</span>
                <span class="caption-text">Mountain View, Fake st., CA</span>
              </div>
            </div>

          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="icon-phone text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">000 209 392 312</span>
                <span class="caption-text">Toll free</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="icon-envelope text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">info@gmail.com</span>
                <span class="caption-text">Gournadi, 1230 Bariasl</span>
              </div>
            </div>
          </div>

          <div class="col-6 d-block d-lg-none text-right">
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>




      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">

          <div class="mx-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                <li class="active">
                  <a href="{{url('/')}}" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="{{url('/book')}}" class="nav-link text-left">BOOK NOW</a>
                </li>
                @guest
                    <li>
                        <a class="nav-link text-left" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a class="nav-link text-left" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('book.index')}}">Your Order</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}</a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>

        </div>
      </div>

    </div>

    </div>

    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('{{asset('frontend-assets/images/hero_1.jpg')}}');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 ml-auto text-right" data-aos="fade-up">
              <h1>Explore, Discover The Ocean</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed quisquam voluptate facilis non.</p>
              <p><a href="#" class="btn btn-primary py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('{{asset('frontend-assets/images/hero_2.jpg')}}');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1>Enjoy The Ocean With Your Family</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed quisquam voluptate facilis non.</p>
              <p><a href="#" class="btn btn-primary py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- END slider -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset('frontend-assets/images/hero_2.jpg')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <span class="text-serif text-primary">About Us</span>
            <h3 class="heading-92913 text-black">Welcome To Our Website</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, illum, quasi. Odit velit deserunt eligendi unde, enim. Enim fugiat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius ullam impedit architecto debitis facilis!</p>
            <p><a href="#" class="btn btn-primary py-3 px-4">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="service-29283">
              <span class="wrap-icon-39293">
                <span class="flaticon-yacht"></span>
              </span>
              <h3>Luxuries Yacht</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad ratione quos distinctio unde.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-29283">
              <span class="wrap-icon-39293">
                <span class="flaticon-shield"></span>
              </span>
              <h3>30 Years of Experience</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad ratione quos distinctio unde.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-29283">
              <span class="wrap-icon-39293">
                <span class="flaticon-captain"></span>
              </span>
              <h3>Good Captain</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad ratione quos distinctio unde.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('{{asset('frontend-assets/images/hero_1.jpg')}}');">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="counter-39392">
              <h3>349</h3>
              <span>Number of Yacht</span>
            </div>
          </div>
          <div class="col">
            <div class="counter-39392">
              <h3>7000+</h3>
              <span>Customers Satisfied</span>
            </div>
          </div>
          <div class="col">
            <div class="counter-39392">
              <h3>120</h3>
              <span>Number of Staffs</span>
            </div>
          </div>
          <div class="col">
            <div class="counter-39392">
              <h3>493</h3>
              <span>Sea Destinations</span>
            </div>
          </div>
          <div class="col">
            <div class="counter-39392">
              <h3>230</h3>
              <span>Professional Sailors</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Destination</span>
            <h3 class="heading-92913 text-black text-center">Our Destinations</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="{{asset('frontend-assets/images/hero_1.jpg')}}" alt="Image" class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class="icon-room mr-1 text-primary"></span> Croatia &mdash; Columbia</a></h3>
                <div class="d-flex">
                  <div class="mr-auto">
                    <span class="icon-date_range"></span>
                    Sep. 05 &mdash; Oct. 15
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary">$600</span>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="{{asset('frontend-assets/images/hero_2.jpg')}}" alt="Image" class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class="icon-room mr-1 text-primary"></span> Croatia &mdash; Columbia</a></h3>
                <div class="d-flex">
                  <div class="mr-auto">
                    <span class="icon-date_range"></span>
                    Sep. 05 &mdash; Oct. 15
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary">$600</span>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="{{asset('frontend-assets/images/hero_1.jpg')}}" alt="Image" class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class="icon-room mr-1 text-primary"></span> Croatia &mdash; Columbia</a></h3>
                <div class="d-flex">
                  <div class="mr-auto">
                    <span class="icon-date_range"></span>
                    Sep. 05 &mdash; Oct. 15
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary">$600</span>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="{{asset('frontend-assets/images/hero_2.jpg')}}" alt="Image" class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class="icon-room mr-1 text-primary"></span> Croatia &mdash; Columbia</a></h3>
                <div class="d-flex">
                  <div class="mr-auto">
                    <span class="icon-date_range"></span>
                    Sep. 05 &mdash; Oct. 15
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary">$600</span>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="{{asset('frontend-assets/images/hero_1.jpg')}}" alt="Image" class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class="icon-room mr-1 text-primary"></span> Croatia &mdash; Columbia</a></h3>
                <div class="d-flex">
                  <div class="mr-auto">
                    <span class="icon-date_range"></span>
                    Sep. 05 &mdash; Oct. 15
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary">$600</span>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="{{asset('frontend-assets/images/hero_2.jpg')}}" alt="Image" class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class="icon-room mr-1 text-primary"></span> Croatia &mdash; Columbia</a></h3>
                <div class="d-flex">
                  <div class="mr-auto">
                    <span class="icon-date_range"></span>
                    Sep. 05 &mdash; Oct. 15
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary">$600</span>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Team</span>
            <h3 class="heading-92913 text-black text-center">Our Team</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-lg-0">
            <div class="person">
              <figure>
                <img src="{{asset('frontend-assets/images/person_1.jpg')}}" alt="Image" class="img-fluid">
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </div>
              </figure>
              <div class="person-contents">
                <h3>Craig Daniel</h3>
                <span class="position">Engineer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0">
            <div class="person">
              <figure>
                <img src="{{asset('frontend-assets/images/person_2.jpg')}}" alt="Image" class="img-fluid">
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </div>
              </figure>
              <div class="person-contents">
                <h3>Craig Daniel</h3>
                <span class="position">Engineer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0">
            <div class="person">
              <figure>
                <img src="{{asset('frontend-assets/images/person_3.jpg')}}" alt="Image" class="img-fluid">
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </div>
              </figure>
              <div class="person-contents">
                <h3>Craig Daniel</h3>
                <span class="position">Engineer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0">
            <div class="person">
              <figure>
                <img src="{{asset('frontend-assets/images/person_4.jpg')}}" alt="Image" class="img-fluid">
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </div>
              </figure>
              <div class="person-contents">
                <h3>Craig Daniel</h3>
                <span class="position">Engineer</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Testimonial</span>
            <h3 class="heading-92913 text-black text-center">What Customer Saying...</h3>
          </div>
        </div>
        <div class="row">
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <div class="testimony-39291">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi, unde doloribus.</p>
              </blockquote>
              <div class="d-flex vcard align-items-center">
                <div class="pic mr-3">
                  <img src="{{asset('frontend-assets/images/person_3_sq.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                  <strong class="d-block">John Doe</strong>
                  <span>CEO and Co-Founder</span>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <div class="testimony-39291">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi, unde doloribus.</p>
              </blockquote>
              <div class="d-flex vcard align-items-center">
                <div class="pic mr-3">
                  <img src="{{asset('frontend-assets/images/person_4_sq.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                  <strong class="d-block">John Doe</strong>
                  <span>CEO and Co-Founder</span>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <div class="testimony-39291">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi, unde doloribus.</p>
              </blockquote>
              <div class="d-flex vcard align-items-center">
                <div class="pic mr-3">
                  <img src="{{asset('frontend-assets/images/person_3_sq.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                  <strong class="d-block">John Doe</strong>
                  <span>CEO and Co-Founder</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('{{asset('frontend-assets/images/hero_2.jpg')}}');">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-white">Get In Touch With Us</h2>
            <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p class="mb-0"><a href="#" class="btn btn-warning py-3 px-5 text-white">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>


    <div class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="{{asset('frontend-assets/images/logo.png')}}" alt="Image" class="img-fluid"></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Company</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">About</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Projects</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Services</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Industrial</a></li>
                  <li><a href="#">Construction</a></li>
                  <li><a href="#">Remodeling</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Our Partners</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="{{asset('frontend-assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery-ui.js')}}"></script>
  <script src="{{asset('frontend-assets/js/popper.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontend-assets/js/aos.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery.mb.YTPlayer.min.js')}}"></script>




  <script src="{{asset('frontend-assets/js/main.js')}}"></script>

</body>

</html>