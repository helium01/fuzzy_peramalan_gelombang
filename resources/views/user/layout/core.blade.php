
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Gelombang</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('user')}}/images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('user')}}/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset('user')}}/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('user')}}/css/responsive.css">
   </head>
   <body>
      <!-- loader Start -->
      <!-- <div id="loading">
         <div id="loading-center">
         </div>
      </div> -->
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="iq-sidebar bg-info">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="/" class="header-logo">
                  <img src="asset('user')/images/logo.png" class="img-fluid rounded-normal" alt="">
                  <div class="logo-title">
                     <span class="text-white text-uppercase">gelombang</span>
                  </div>
               </a>
               <div class="iq-menu-bt-sidebar">
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                        <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="active active-menu">
                      <a href="/">Gelombang</a>
                        
                    </li>
                    
                     <li>
                        <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><span>Prediksi</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                           <li><a href="#">HTS Lee</a></li>
                           <li><a href="#">HOFTS</a></li>
                           <li><a href="#">Grafik Perbandingan</a></li>
                         
                        </ul>
                     </li>
                     
                     
                  </ul>
               </nav>
              
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar bg-info">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  
                  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item nav-icon">
                           <div class="iq-search-bar">
                              <form action="#" class="searchbox">
                                </form>
                           </div>
                        </li>
                        <li class="nav-item nav-icon">
                           <a href="#" class="search-toggle iq-waves-effect text-primary rounded">
                           
                           </a>
                          
                        </li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li class="line-height">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           Admin
                     </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 
                                
                                 
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <!-- <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Keluar<i class="ri-login-box-line ml-2"></i></a> -->
                                   
                                    <a class="bg-primary iq-sign-btn" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      @yield('content')
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="iq-footer">
         <div class="container-fluid">
            <div class="row">
              
               <div class="col-lg-6 text-right">
                  @<a href="#">2023</a> M. Romy Andhika
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
      <!-- color-customizer -->
     
      <!-- color-customizer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{asset('user')}}/js/jquery.min.js"></script>
      <script src="{{asset('user')}}/js/popper.min.js"></script>
      <script src="{{asset('user')}}/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset('user')}}/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset('user')}}/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset('user')}}/js/waypoints.min.js"></script>
      <script src="{{asset('user')}}/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset('user')}}/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset('user')}}/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset('user')}}/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset('user')}}/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{asset('user')}}/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset('user')}}/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset('user')}}/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="{{asset('user')}}/js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="{{asset('user')}}/js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="{{asset('user')}}/js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="{{asset('user')}}/js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="{{asset('user')}}/js/kelly.js"></script>
      <!-- am maps JavaScript -->
      <script src="{{asset('user')}}/js/maps.js"></script>
      <!-- am worldLow JavaScript -->
      <script src="{{asset('user')}}/js/worldLow.js"></script>
      <!-- Raphael-min JavaScript -->
      <script src="{{asset('user')}}/js/raphael-min.js"></script>
      <!-- Morris JavaScript -->
      <script src="{{asset('user')}}/js/morris.js"></script>
      <!-- Morris min JavaScript -->
      <script src="{{asset('user')}}/js/morris.min.js"></script>
      <!-- Flatpicker Js -->
      <script src="{{asset('user')}}/js/flatpickr.js"></script>
      <!-- Style Customizer -->
      <script src="{{asset('user')}}/js/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('user')}}/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('user')}}/js/custom.js"></script>
   </body>
</html>