<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>About</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

<body>
   <!--header section start -->
   <div class="header_section header_bg">
      <div class="container-fluid">
         <div class="main">
            <div class="logo"><a href="/"><img src="images/logo.png"></a></div>
            <div class="menu_text">
               <ul>
                  <div class="togle_">
                     <div class="menu_main">
                        <ul>
                           @guest
                           <li><a href="{{ route('login') }}">Login</a></li>
                           @endguest
                           @auth
                           <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <button type="submit" class="btn btn-link">Logout</button>
                           </form>
                           @endauth
                        </ul>
                     </div>
                  </div>
                  <div id="myNav" class="overlay">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <div class="overlay-content">
                        <a href="/">Home</a>
                        <a href="{{ route('about') }}">About</a>
                        <a href="{{ route('doctors') }}">Doctors</a>
                        <a href="{{ route('news') }}">News</a>
                     </div>
                  </div>
                  <span class="navbar-toggler-icon"></span>
                  <span onclick="openNav()"><img src="images/toogle-icon.png" class="toggle_menu"></span>
                  <span onclick="openNav()"><img src="images/toogle-icon1.png" class="toggle_menu_1"></span>
               </ul>
            </div>
         </div>
      </div>
      <!-- banner section start -->
      <div class="container">
         <div class="about_taital_main">
            <h2 class="about_tag">About Virus</h2>
            <div class="about_menu">
               <ul>
                  <li><a href="/">Home</a></li>
                  <li>About</li>
               </ul>
            </div>
         </div>
      </div>
      <!-- banner section end -->
   </div>
   <!-- header section end -->
   <!-- about section start -->
   <div class="about_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="about_img"><img src="images/img-1.png"></div>
            </div>
            <div class="col-md-6">
               <h1 class="about_taital">Virus what it is?</span></h1>
               <p class="about_text">Virus adalah organisme mikroskopis yang terdiri dari materi genetik seperti DNA atau RNA yang terbungkus dalam lapisan protein yang disebut kapsid. Virus tidak dapat hidup secara mandiri dan membutuhkan sel inang untuk mereplikasi dan berkembang biak. Mereka dapat menginfeksi berbagai jenis organisme, termasuk manusia, hewan, tumbuhan, dan bahkan mikroorganisme lainnya.
                  Virus biasanya menginfeksi sel inang dengan menggabungkan diri dengan reseptor khusus pada permukaan sel tersebut. Setelah masuk ke dalam sel, virus menggunakan komponen sel inang untuk menghasilkan salinan dirinya sendiri. Proses ini sering kali merusak sel inang dan mengakibatkan gejala penyakit pada organisme yang terinfeksi.
                  Virus dapat menyebabkan berbagai macam penyakit, mulai dari penyakit pernapasan seperti flu dan pilek hingga penyakit yang lebih serius seperti hepatitis, HIV/AIDS, dan COVID-19. Beberapa virus dapat ditangani dengan vaksinasi atau obat antivirus yang telah dikembangkan, namun ada juga virus yang belum memiliki pengobatan yang efektif.</p>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="footer_section_2">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Resources</h2>
                  <div class="footer_menu">
                     <ul>
                        <li>What we do</li>
                        <li>Media</li>
                        <li>Travel Advice</li>
                        <li>Care</li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">About</h2>
                  <p class="footer_text">Selamat datang di ConVid, platform online yang didedikasikan
                     untuk memberikan informasi dan sumber daya terkini seputar kesehatan dan gaya hidup sehat. Kami
                     berkomitmen untuk menyediakan konten yang terpercaya, mudah dipahami, dan relevan dengan kebutuhan
                     Anda.</p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Contact Us</h2>
                  <div class="location_text">
                     <ul>
                        <li>
                           <i class="fa fa-map-marker" aria-hidden="true"></i>
                              <span class="padding_15">Location</span>
                        </li>
                        <li>
                           <i class="fa fa-phone" aria-hidden="true"></i>
                              <span class="padding_15">Call +62 87654321</span>
                        </li>
                        <li>
                           <i class="fa fa-envelope" aria-hidden="true"></i>
                              <span class="padding_15">healthvirus@gmail.com</span>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">countrys</h2>
                  <div class="map_image"><img src="images/indonesia-map-background.png"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <p class="copyright_text">© 2023 All Rights Reserved</p>
            </div>
         </div>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
      $(document).ready(function () {
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
         });

         $(".zoom").hover(function () {

            $(this).addClass('transition');
         }, function () {

            $(this).removeClass('transition');
         });
      });
   </script>
   <script>
      function openNav() {
         document.getElementById("myNav").style.width = "100%";
      }
      function closeNav() {
         document.getElementById("myNav").style.width = "0%";
      }
   </script>
</body>

</html>