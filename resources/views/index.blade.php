<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SELARAS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo/loader.png')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
</head>

<body>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header">
                <div class="header-bottom header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                <a href="/dashboard"><img src="{{asset('assets/img/logo/logo2-2.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                    
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">                        
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li class="active" ><a href="/dashboard">Home</a></li>
                                                <li><a href="about.html">Struktur FST</a></li>
                                                <li><a href="#">Jurusan</a>
                                                    <ul class="submenu">
                                                        <li><a href="https://math.uinsgd.ac.id/" target="_blank">Matematika</a></li>
                                                        <li><a href="https://bio.uinsgd.ac.id/" target="_blank">Biologi</a></li>
                                                        <li><a href="https://fi.uinsgd.ac.id/" target="_blank">Fisika</a></li>
                                                        <li><a href="https://chem.uinsgd.ac.id/ " target="_blank">Kimia</a></li>
                                                        <li><a href="https://fst.uinsgd.ac.id/706-jurusan-agroteknologi/" target="_blank">Agroteknologi</a></li>
                                                        <li><a href="https://ee.uinsgd.ac.id/" target="_blank">Teknik Elektro</a></li>
                                                        <li><a href="https://if.uinsgd.ac.id/" target="_blank">Teknik Informatika</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about.html">About</a></li>

                                                <!-- Button -->
                                                <!-- <li class="button-header margin-left "><a href="#" class="btn">Register</a></li>
                                                <li class="button-header"><a href="login.html" class="btn btn3">Log in</a></li> -->
                                            </ul>
                                        </nav>  
                                    </div>
                                </div> 
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <section class="slider-area ">
            @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
            @elseif (session('danger'))
            <div class="alert alert-danger text-center">
                {{ session('danger') }}
            </div>
            @endif
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-12">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Sistem Laporan<br> Sarana Saintek</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Ruang untuk mahasiswa Fakultas Sains dan Teknologi UIN Sunan Gunung Djati Bandung untuk berbagi keluhan, kritik dan saran terkait fasilitas yang ada di fakultas.</p>
                                    <a href="#" class="btn hero-btn" data-toggle="modal" data-target="#komplain">Complaint</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- ? services-area -->
        <section id="langkah">
        <div class="services-area">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="{{asset('assets/img/icon/2.svg')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>MASUK AKUN </h3>
                                <p>Daftar akun baru atau masuk akun dan lengkapi data diri</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="{{asset('assets/img/icon/1.svg')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>KIRIM PENGADUAN</h3>
                                <p>Kirim keluhan atau aspirasi pada menu utama</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="{{asset('assets/img/icon/3.svg')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>TANGGAPAN</h3>
                                <p>Tunggu persetujuan serta tanggapan </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Our Dekanat</h2>
                        </div>
                    </div>
                </div>
                <div class="courses-actives">
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="{{asset('assets/img/gallery/dekan.png')}}" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>Dekan</p>
                                <h3><a href="#">Dr. Hj. Hasniah Aliah, M.Si.</a></h3>
                                <p>Dekan fakultas Sains dan Teknologi                          
                                </p>

                                <a href="#" class="border-btn border-btn2">Find out more</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="{{asset('assets/img/gallery/wadek1.png')}}" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>Wakil Dekan I</p>
                                <h3><a href="#">Agung Wahana, MT</a></h3>
                                <p>Bidang Akademik                                 

                                </p>
                                <a href="#" class="border-btn border-btn2">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="{{asset('assets/img/gallery/wadek2.png')}}" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>Wakil Dekan II</p>
                                <h3><a href="#">Cepy Slamet, Ph.D</a></h3>
                                <p>Bidang AUPK                             


                                </p>
                                <a href="#" class="border-btn border-btn2">Find out more</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="{{asset('assets/img/gallery/wadek3.png')}}" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>Wakil Dekan III</p>
                                <h3><a href="#">Undang Syaripudin, M.Kom</a></h3>
                                <p>Bidang Kemahasiswaan Alumni Kerjasama
                                </p>
                                <a href="#" class="border-btn border-btn2">Find out more</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        <!-- About Area End -->
        <!--? top subjects Area Start -->
        <div class="topic-area section-padding40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Majors</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="{{asset('assets/img/gallery/topic/topic1.png')}}" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="https://math.uinsgd.ac.id/" target="_blank">Matematika</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="{{asset('assets/img/gallery/topic/topic2.png')}}" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="https://bio.uinsgd.ac.id/" target="_blank">Biologi</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="{{asset('assets/img/gallery/topic/topic3.png')}}" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="https://fi.uinsgd.ac.id/" target="_blank">Fisika </a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="{{asset('assets/img/gallery/topic/topic4.png')}}" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="https://chem.uinsgd.ac.id/" target="_blank">Kimia</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="{{asset('assets/img/gallery/topic/topic5.png')}}" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="https://fst.uinsgd.ac.id/706-jurusan-agroteknologi/" target="_blank">Agroteknologi</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="{{asset('assets/img/gallery/topic/topic6.png')}}" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="https://ee.uinsgd.ac.id/" target="_blank">Teknik Elektro</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="{{asset('assets/img/gallery/coding.gif')}}" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="https://if.uinsgd.ac.id/" target="_blank">Teknik Informatika</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="{{asset('assets/img/gallery/topic/topic8.png')}}" alt="">
                                <div class="topic-content-box">
                                    <p><a href="https://fst.uinsgd.ac.id/"></a></p>
                                    <div class="topic-content">
                                        <h3><a href="https://fst.uinsgd.ac.id/" target="_blank">Fakultas</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top subjects End -->
        <div class="courses-area section-padding40 fix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="section-tittle text-center mb-55">
                    <h2>Latest Tickets</h2>
                </div>
            </div>
        </div>

        @php
            use App\Models\Tiket;
        @endphp

        @php
            $latestTickets = Tiket::orderBy('created_at', 'desc')->limit(4)->get();
        @endphp

        <div class="courses-actives">
            @foreach ($latestTickets as $tiket)
                <div class="properties pb-20">
                    <div class="properties__card">
                        <div class="properties__img overlay1">
                            <a href="#">
                                <img src="{{ asset('gambar/' . $tiket->gambar) }}" alt="" style="max-height:175px;" data-toggle="modal" data-target="#gambarModal" onclick="showImage('{{ asset('gambar/' . $tiket->gambar) }}')">
                            </a>
                        </div>
                        <div class="properties__caption">
                            <h3><a href="#">{{ $tiket->nama_pengaju }}</a></h3>
                            <p><i>"{{ $tiket->keluhan }}"</i></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


        <!--? Team -->
        <section class="team-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Website Developers</h2>
                        </div>
                    </div>
                </div>
                <div class="team-active">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{asset('assets/img/gallery/ridlo.jpg')}}" alt="" class="rounded-circle border border-1 border-secondary" style="width: 150px; height: 150px;">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="about.html">Akhmad Ridlo Rifa'i</a></h5>
                            <p>Back-End Developer</p>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{asset('assets/img/gallery/vina.jpg')}}" alt="" class="rounded-circle border border-1 border-secondary" style="width: 150px; height: 150px;">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="about.html">Serevina Sherly Maulida</a></h5>
                            <p>Front-End Developer</p>
                        </div>
                    </div>  
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{asset('assets/img/gallery/Zahwan1.png')}}" alt="" class="rounded-circle border border-1 border-secondary" style="width: 150px; height: 150px;">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="about.html">Zulfan Al-Zahwan Putra Ashadi</a></h5>
                            <a href="blog.html"><p>UI/UX Developer</p></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
    </main>
    <div class="modal fade mt-10" id="komplain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Keluhan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/komplainDash" method="post" enctype="multipart/form-data">                
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama_pengaju" placeholder="Nama Lengkap kamu">
                  </div>
                  <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM Kamu">
                  </div>
                  <div class="form-group">
                    <label for="keluhan">Keluhan</label>
                    <textarea class="form-control" id="keluhan" name="keluhan" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="gambar">Gambar Bukti</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*">
                    <img src="" class="img-thumbnail" id="preview-gambar" alt="Preview Gambar" style="max-height: 200px; max-width: 300px;">
                  </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-lg btn-primary btn-lg float-end mt-4 mb-0"><i class="fa fa-spinner"></i>Tambah Tiket</button>
                </div>
            </form>
          </div>
        </div>
      </div>
          <!-- Modal Preview -->
        <div class="modal fade" id="gambarModal" tabindex="-1" role="dialog" aria-labelledby="gambarModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="gambarModalLabel">Preview Gambar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="" id="gambarModalImage" class="img-fluid" alt="Preview Gambar" style="max-height:350px;">
                    </div>
                </div>
            </div>
        </div>
    <footer>
     <div class="footer-wrappper footer-bg">
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <a href="index.html"><img src="{{asset('assets/img/logo/logo2-2.png')}}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Sampaikan saran dan kritik tentang fasilitas saintek</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-whatsapp"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Jurusan</h4>
                                <ul>
                                    <li><a href="#">Matematika</a></li>
                                    <li><a href="#">Biologi</a></li>
                                    <li><a href="#">Fisika</a></li>
                                    <li><a href="#">Kimia</a></li>
                                    <li><a href="#">Agroteknologi</a></li>
                                    <li><a href="#">Teknik Elektro</a></li>
                                    <li><a href="#">Teknik Informatika</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href="#"><img src="{{asset('assets/img/support/ban-ptt.png')}}" alt="" style="width: 100px;"></a></li>
                                    <li><a href="#"><img src="{{asset('assets/img/support/ppid.png')}}" alt="" style="width: 100px;"></a></li>
                                    <li><a href="#"><img src="{{asset('assets/img/support/qurann.png')}}" alt="" style="width: 100px;"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="#">Ban-PT</a></li>
                                    <li><a href="#">PPID</a></li>
                                    <li><a href="#">FST</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved to <a href="#" target="_blank">Selaras</a>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Footer End-->
      </div>
  </footer> 
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="{{asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('./assets/js/popper.min.js')}}"></script>
<script src="{{asset('./assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('./assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('./assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('./assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('./assets/js/wow.min.js')}}"></script>
<script src="{{asset('./assets/js/animated.headline.js')}}"></script>
<script src="{{asset('./assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('./assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('./assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.sticky.js')}}"></script>
<!-- Progress -->
<script src="{{asset('./assets/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('./assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('./assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('./assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('./assets/js/contact.js')}}"></script>
<script src="{{asset('./assets/js/jquery.form.js')}}"></script>
<script src="{{asset('./assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('./assets/js/mail-script.js')}}"></script>
<script src="{{asset('./assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{asset('./assets/js/plugins.js')}}"></script>
<script src="{{asset('./assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>
</body>
</html>