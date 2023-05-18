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
   <title>HealthVirus</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
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
   <div class="header_section">
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
                        @else
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                           </a>
                           <ul class="dropdown-menu" role="menu">
                              <li>
                                 <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                 </form>
                              </li>
                           </ul>
                        </li>
                        @endguest
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
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="container">
                              <h1 class="banner_taital">Get Medical Care early</h1>
                              <p class="banner_text">Pentingnya mendapatkan perawatan medis sejak dini tidak dapat
                                 diragukan lagi.
                                 Jangan tunda lagi, kunjungi dokter atau fasilitas kesehatan terdekat untuk mencegah
                                 kondisi yang lebih serius.
                                 Kesehatan adalah investasi terbaik untuk masa depan Anda..</p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="container">
                              <h1 class="banner_taital">Get Medical Care early</h1>
                              <p class="banner_text">Jangan menunda-nunda kesehatan Anda. Dapatkan perawatan medis sejak
                                 dini untuk menjaga tubuh tetap sehat dan produktif.
                                 Segera temukan layanan kesehatan terdekat dan jangan ragu untuk berkonsultasi dengan
                                 dokter.</p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="container">
                              <h1 class="banner_taital">Get Medical Care early</h1>
                              <p class="banner_text">Segera dapatkan perawatan yang Anda butuhkan untuk memastikan
                                 kesehatan Anda tetap terjaga.
                                 Ingat, kesehatan adalah aset terbesar kita, jadi jangan ragu untuk mencari bantuan
                                 medis yang Anda perlukan sejak dini.</p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->
   </div>
   <!-- header section end -->
   <!-- protect section start -->
   <div class="protect_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="protect_taital">How to Protect Yourself</h1>
               <p class="protect_text">Jaga jarak sosial, cuci tangan secara teratur, kenakan masker saat di luar rumah,
                  hindari kerumunan, dan ikuti pedoman kesehatan yang disarankan oleh otoritas kesehatan setempat.
                  Dengan mengikuti langkah-langkah sederhana ini, Anda dapat membantu melindungi diri Anda dan
                  orang-orang di sekitar Anda dari penyebaran penyakit.</p>
            </div>
         </div>
         <div class="protect_section_2 layout_padding">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="hands_text">Cuci tangan <br>secara teratur</h1>
                  <h1 class="hands_text_2">Menjaga jarak<br>ketika sakit </h1>
                  <h1 class="hands_text">Hindari menyentuh mata,<br>hidung dan mulut</h1>
               </div>
               <div class="col-md-6">
                  <div class="image_2"><img src="images/img-2.png"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- protect section end -->
   <!-- about section start -->
   <div class="about_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="about_img"><img src="images/img-1.png"></div>
            </div>
            <div class="col-md-6">
               <h1 class="about_taital">Virus, what it is?</span></h1>
               <p class="about_text">Demam dapat disebabkan oleh berbagai jenis kuman, termasuk virus, bakteri, jamur,
                  parasit, atau reaksi inflamasi. Ini adalah gejala dari suatu kondisi atau infeksi, bukan suatu
                  penyakit. Oleh karena itu, penting untuk mengidentifikasi penyebabnya dan mencari perawatan medis yang
                  tepat jika mengalami demam.</p>
               <div class="read_bt"><a href="about">Read More</a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
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
                     <div class="readmore_bt"><a href="doctors">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- doctor section end -->
   <!-- news section start -->
   <div class="news_section layout_padding">
      <div class="container">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <h1 class="news_taital">Latest News</h1>
                  <p class="news_text">Many young Australians exposed to e-cigarettes despite restrictions, study
                     suggests</p>
                  <div class="news_section_2 layout_padding">
                     <div class="box_main">
                        <div class="image_1"><img src="images/news-img.png"></div>
                        <h2 class="design_text">Vape dangerous</h2>
                        <p class="lorem_text">Although you can’t legally buy nicotine e-cigarettes without a
                           prescription and promotion of e-cigarettes in general is restricted, new research suggests
                           more young Australians are using them and finding them easy to access.</p>
                        <div class="read_btn"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <h1 class="news_taital">Latest News</h1>
                  <p class="news_text">Government funding for innovative digital platform to diagnose and treat
                     breathlessness</p>
                  <div class="news_section_2 layout_padding">
                     <div class="box_main">
                        <div class="image_1"><img src="images/news-img.png"></div>
                        <h2 class="design_text">BREATHE project studies</h2>
                        <p class="lorem_text">The George Institute has been awarded one of the Australian Government’s
                           Medical Research Future Fund (MRFF) grants to trial an electronic Clinical Decision Support
                           System (CDSS) to improve the diagnosis and treatment of breathlessness. The study, titled
                           BREATHE, will examine the feasibility and benefits of using a CDSS - an electronic system to
                           help clinical decision making - in improving patient outcomes compared to usual care.</p>
                        <div class="read_btn"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <h1 class="news_taital">Latest News</h1>
                  <p class="news_text">Buyer beware: 60% of foods purchased by Americans contain technical food
                     additives</p>
                  <div class="news_section_2 layout_padding">
                     <div class="box_main">
                        <div class="image_1"><img src="images/news-img.png"></div>
                        <h2 class="design_text">Technical food additives dangerous</h2>
                        <p class="lorem_text">A new study in the Journal of the Academy of Nutrition and Dietetics,
                           published by Elsevier, has determined that 60% of foods purchased by Americans contain
                           technical food additives including coloring or flavoring agents, preservatives, and
                           sweeteners. This represents a 10% increase since 2001. The findings also present compelling
                           evidence that the prevalence of food additives is on the rise; manufacturers have increased
                           the mean number of additives contained in purchased food and beverage products from 3.7 in
                           2001 to 4.5 in 2019.</p>
                        <div class="read_btn"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
   </div>
   </div>
   <!-- news section end -->
   <!-- update section start -->
   <div class="update_section">
      @if(session('success'))
      <!-- Tampilkan pesan sukses jika ada -->
      <div class="alert-n">
         {{ session('success') }}
      </div>
      <script>
         setTimeout(function() {
               location.reload();
         }, 1000); // Refresh halaman setelah 5 detik (5000 ms)
      </script>
      @endif

      @auth
      <!-- Tampilkan form komentar hanya jika pengguna telah login -->
      <div class="container">
         <h1 class="update_taital">Get Every Update....</h1>
         <form action="{{ route('comments.store') }}" method="POST">
               @csrf
               <div class="form-group">
                  <textarea class="update_mail" placeholder="Massage" rows="5" id="comment" name="message"></textarea>
               </div>
               <div class="subscribe_bt"><button type="submit">Send</button></div>
         </form>
      </div>
      @endauth

      @guest
      <!-- Tampilkan pesan atau tindakan lain untuk pengguna yang belum login -->
      <p style="text-align: center;">Silakan login terlebih dahulu untuk mengirim komentar.</p>
      @endguest

      <style>
         .alert-n {
               padding: 20px;
               background-color: #ff5959;
               color: white;
               font-size: 20px;
               text-align: center;
               border-radius: 10px;
               font-weight: bold;
         }
      </style>
   </div>

   <!-- update section end -->
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