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
   <title>Doctors</title>
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
            <h2 class="about_tag">Doctors About Virus</h2>
            <div class="about_menu">
               <ul>
                  <li><a href="/">Home</a></li>
                  <li>Doctors</li>
               </ul>
            </div>
         </div>
      </div>
      <!-- banner section end -->
   </div>
   <!-- header section end -->
   <!-- doctor section start -->
   <div class="doctors_section layout_padding">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="taital_main">
                  <div class="taital_left">
                     <div class="play_icon"><img src="images/play-icon.png"></div>
                  </div>
                  <div class="taital_right">
                     <h1 class="doctor_taital">What doctors say..</h1>
                     <p class="doctor_text">Virus merupakan mikroorganisme yang dapat menyebabkan berbagai jenis
                        penyakit, dari ringan hingga serius. Beberapa virus dapat menyebar dengan mudah dari orang ke
                        orang melalui tetesan udara atau melalui kontak langsung dengan orang yang terinfeksi. Oleh
                        karena itu, penting untuk mengambil tindakan pencegahan yang tepat, seperti mencuci tangan
                        secara teratur, menjaga jarak sosial, dan menghindari kerumunan, untuk membantu mengurangi
                        risiko terpapar dan menyebarluaskan virus. Jika seseorang terinfeksi virus, maka sangat penting
                        untuk mencari perawatan medis yang tepat untuk membantu mengurangi gejala dan mempercepat
                        pemulihan.</p>
                     <div class="readmore_bt"><a href="{{ route('antrian.index') }}">Ambil Nomor Antrian</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- doctor section end -->
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