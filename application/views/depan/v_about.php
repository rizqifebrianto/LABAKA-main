<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>0721 781578
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>smaalkautsarlampung@gmail.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Bandar Lampung, Lampung, Indonesia
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="<?php echo base_url().'theme/images/logo-dark.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('blog');?>">Alat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('guru');?>">Guru</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>">About</a>
                                </li>
                          </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
      <section>
</section>
<!--//END HEADER -->
<!--//END ABOUT IMAGE -->
<!--============================= WELCOME TITLE =============================-->
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>Tentang Laboratorium Biologi</h2>
                <p>Laboratorium biologi SMA S Al-Kautsar merupakan salah satu fasilitas yang digunakan untuk melakukan kegiatan praktikum dan eksperimen dalam mata pelajaran biologi di tingkat Sekolah Menengah Atas (SMA). Laboratorium ini dirancang khusus untuk memfasilitasi pembelajaran dan penelitian di bidang biologi </p>
                </div>
                <div class="col-md-5">
                    <img src="<?php echo base_url().''?>" class="img-fluid" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->
    <!--============================= WELCOME TITLE =============================-->
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto text-center">
                <h2>Visi & Misi</h2>
            </div>
                <div>
                <h3>Visi SMA S Al Kautsar</h3>
                <p>Al-Kautsar Unggul, Islami, dan Global</p>
                <h3>Misi SMA S Al Kautsar</h3>
                <ul class="listvisi">
                    <li>Menjadikan sekolah berprestasi di bidang akademik dan nonakademik di tingkat nasional</li>
                    <li>Meningkatkan kompetensi pendidik dan tenaga kependidikan</li>
                    <li>Mewujudkan sarana dan prasarana sekolah yang lengkap, modern dan berwawasan lingkungan</li>
                    <li>Mewujudkan pendidikan yang berkarakter dengan mengintegrasikan nilai keislaman ke dalam proses pembelajaran</li>
                    <li>Membentuk peserta didik yang berkarakter dan berjiwa kepemimpinan islami</li>
                    <li>Mewujudkan sistem pengelolaan sekolah dengan berbasis teknologi, informasi dan komunikasi</li>
                    <li>Meningkatkan kemampuan literasi warga sekolah</li>
                    <li>Mewujudkan lulusan berwawasan global serta mampu melanjutkan pendidikan di dalam dan luar negeri</li>
                    <li>Menjalin kerja sama dengan orang tua, masyarakat, pemerintah dan stakeholder untuk peningkatan mutu pendidikan.</li>
                </ul>
                </div>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->
    
    <!--============================= DETAILED CHART =============================-->
    <div class="detailed_chart ">
    <div class="container">
        <div class="row justify-content-center  ">
            <div class="col-xs-5 col-sm-6 col-md-2 chart_bottom">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_1.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_guru;?></span> Guru
                    </p>
                </div>
            </div>
            <div class="col-xs-5 col-sm-6 col-md-2 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_2.png'?>" class="img-fluid" alt="chart_icon">
                    <i class="fa-light fa-screwdriver-wrench" style="color: #ffffff;"></i>
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_tulisan;?></span> Alat
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--//END DETAILED CHART -->

        <!--============================= FOOTER =============================-->
        <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'theme/images/logo-white.png'?>" class="img-fluid" alt="footer_logo">
                    </a>
                    <p><?php echo date('Y');?> © copyright by <br>SMA Al Kautsar</a>. <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3 ml-auto">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo site_url('guru');?>">Alat</a></li>
                            <li><a href="<?php echo site_url('about');?>">About </a></li>
                        </ul>
                    </div>
                </div>
               
                <div class="col-md-3 ml-auto">
                    <div class="address">
                        <h3>SMA S Al Kautsar</h3>
                        <p>Bandar Lampung, 35144
                            Lampung, Indonesia
                        </p>
                        <p><span>Phone:</span> 0721 781578
                            <br><span>Email:</span> smaalkautsarlampung@gmail.com</p>
                            <ul class="footer-social-icons">
                                        <li><a href="https://www.instagram.com/smaalkautsar/?hl=id"><i class="fa fa-instagram fa-in" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.youtube.com/@smaalkautsarlampung9585/featured"><i class="fa fa-youtube fa-tw" aria-hidden="true"></i></a></li>
                                    </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
                <!--//END FOOTER -->
                <!-- jQuery, Bootstrap JS. -->
                <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
                <!-- Plugins -->
                <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
                <!-- Subscribe -->
                <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
                <!-- Script JS -->
                <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
            </body>

            </html>
