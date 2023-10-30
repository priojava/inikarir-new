<?php 
include "./configurasi/koneksi.php";
//storage/banner/INKA5_11zon_11zon.webp {SITE_URL}storage/banner/INKA6_11zon_11zon.webp  {SITE_URL}storage/banner/INKA4_11zon_11zon.webp
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Poralia">
        <meta name="generator" content="Poralia">
        <title>Ini Karir - Blog</title>

        <!-- Video.js base CSS -->
        <link rel="stylesheet" href="https://unpkg.com/video.js@7/dist/video-js.min.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,800;1,400;1,600;1,800&family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap-utilities.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

        <link rel="stylesheet" href="./assets/css/style.css" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicons/apple-touch-icon.png">
        <!--<link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon-32x32.png">-->
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logo.webp">
        <link rel="manifest" href="./assets/favicons/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>

    <body>
        <header id="header">
            <nav id="navbar" class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="https://www.inikarir.com/">
                        <img src="./assets/images/logo.webp" alt="Ini Karir" />
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="container d-lg-flex px-0">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.inikarir.com/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#hero1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.inikarir.com/layanan-kami.php">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="https://www.inikarir.com/blog.php">Article</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#footer">Contact</a>
                                </li>
                            </ul>
                            
                            <div class="ms-auto">
                                <div class="header__cta d-flex gap-3 position-relative">
                                    <a href="https://inikarir.com/login" class="btn btn-outline-primary px-4 py-2">Log In</a>
                                    <a href="https://inikarir.com/signup" class="btn btn-primary px-4 py-2">Daftar</a>
                                </div> <!-- /.cta -->
                            </div>
                        </div>
                    </div> <!-- /.collapse menu -->
                </div> <!-- /.container -->
            </nav> <!-- /.nav -->
        </header> <!-- /.header -->

        <main id="main">
            <section id="hero-blog-slider" class="hero-blog-slider py-2 py-lg-5">
                <div class="container">
                    <!-- Slider main container -->
                    <div class="swiper hero-blog-slider__swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="ratio ratio-16x9">
                                    <div class="relative hero-blog-slider__content">
                                        <div class="position-absolute top-0 start-0 bottom-0 end-0 d-flex align-items-end">
                                            <div class="hero-blog-slider__content-title fw-bold fs-3 relative text-white p-3 p-md-5">
                                                Inikarir membantu dalam proses pencari kerja.
                                            </div>
                                        </div>

                                        <img src="/storage/banner/INKA5_11zon_11zon.webp" class="position-absolute rounded top-0 start-0 bottom-0 end-0 w-100 h-100" alt="Image">
                                    </div>
                                </div>
                            </div> <!-- /.item -->

                            <div class="swiper-slide">
                                <div class="ratio ratio-16x9">
                                    <div class="relative hero-blog-slider__content">
                                        <div class="position-absolute top-0 start-0 bottom-0 end-0 d-flex align-items-end">
                                            <div class="hero-blog-slider__content-title fw-bold fs-3 relative text-white p-3 p-md-5">
                                                Inikarir membantu dalam proses pencari kerja.
                                            </div>
                                        </div>

                                        <img src="/storage/banner/INKA6_11zon_11zon.webp" class="position-absolute rounded top-0 start-0 bottom-0 end-0 w-100 h-100" alt="Image">
                                    </div>
                                </div>
                            </div> <!-- /.item -->

                            <div class="swiper-slide">
                                <div class="ratio ratio-16x9">
                                    <div class="relative hero-blog-slider__content">
                                        <div class="position-absolute top-0 start-0 bottom-0 end-0 d-flex align-items-end">
                                            <div class="hero-blog-slider__content-title fw-bold fs-3 relative text-white p-3 p-md-5">
                                                Inikarir membantu dalam proses pencari kerja.
                                            </div>
                                        </div>

                                        <img src="/storage/banner/INKA4_11zon_11zon.webp" class="position-absolute rounded top-0 start-0 bottom-0 end-0 w-100 h-100" alt="Image">
                                    </div>
                                </div>
                            </div> <!-- /.item -->

                            <div class="swiper-slide">
                                <div class="ratio ratio-16x9">
                                    <div class="relative hero-blog-slider__content">
                                        <div class="position-absolute top-0 start-0 bottom-0 end-0 d-flex align-items-end">
                                            <div class="hero-blog-slider__content-title fw-bold fs-3 relative text-white p-3 p-md-5">
                                                Inikarir membantu dalam proses pencari kerja.
                                            </div>
                                        </div>

                                        <img src="/storage/banner/INKA5_11zon_11zon.webp" class="position-absolute rounded top-0 start-0 bottom-0 end-0 w-100 h-100" alt="Image">
                                    </div>
                                </div>
                            </div> <!-- /.item -->

                            
                        </div>
                    </div> <!-- /.swiper -->

                    <div class="hero-blog-slider__thumb col-12 col-sm-12 col-md-6 col-lg-5 mx-auto position-relative">
                        <div class="bg-white rounded p-2">
                            <div class="swiper hero-blog-slider__swiper-thumb">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-16x9">
                                            <div class="relative">
                                                <img src="/storage/banner/INKA5_11zon_11zon.webp" class="position-absolute rounded top-0 start-0 bottom-0 end-0 w-100 h-100" alt="Image">
                                            </div>
                                        </div>
                                    </div> <!-- /.item -->

                                    <div class="swiper-slide">
                                        <div class="ratio ratio-16x9">
                                            <div class="relative">
                                                <img src="/storage/banner/INKA6_11zon_11zon.webp" class="position-absolute rounded top-0 start-0 bottom-0 end-0 w-100 h-100" alt="Image">
                                            </div>
                                        </div>
                                    </div> <!-- /.item -->

                                    <div class="swiper-slide">
                                        <div class="ratio ratio-16x9">
                                            <div class="relative">
                                                <img src="/storage/banner/INKA4_11zon_11zon.webp" class="position-absolute rounded top-0 start-0 bottom-0 end-0 w-100 h-100" alt="Image">
                                            </div>
                                        </div>
                                    </div> <!-- /.item -->

                                    <div class="swiper-slide">
                                        <div class="ratio ratio-16x9">
                                            <div class="relative">
                                                <img src="/storage/banner/INKA6_11zon_11zon.webp" class="position-absolute rounded top-0 start-0 bottom-0 end-0 w-100 h-100" alt="Image">
                                            </div>
                                        </div>
                                    </div> <!-- /.item -->

                                </div>
                            </div> <!-- /.swiper thumb -->
                        </div>
                    </div> <!-- /.thumb wrapper -->
                </div> <!-- /.container -->
            </section> <!-- /.hero blog slider -->

            <section id="hero-upcoming-event" class="hero-upcoming-event py-3 pb-4 pb-lg-5">
                <div class="container">
                    <div class="hero-article__heading d-flex w-100 position-relative mb-4">
                        <h3 class="fw-bold fs-5 text-uppercase">Upcoming Events</h3>
                        <div class="hero-article__navigation d-flex gap-2 ms-auto">
                            <div class="prev hero-article__large-prev d-flex align-items-center justify-content-center rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                </svg>
                            </div>

                            <div class="next hero-article__large-next d-flex align-items-center justify-content-center rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </div>
                        </div>
                    </div> <!-- /.heading -->
                    
                    

                    <div class="swiper hero-upcoming-event__swiper py-3">
                        <div class="swiper-wrapper">
                            
                	<?php
						$tampil_berita_now_tranding = mysqli_query($koneksi, "SELECT * FROM job_blog_cat_relation 
						JOIN job_blog_categories ON job_blog_cat_relation.category_id = job_blog_categories.id
						WHERE job_blog_cat_relation.category_id='11'
						ORDER BY job_blog_cat_relation.id ASC");
						
						while ($r=mysqli_fetch_array($tampil_berita_now_tranding)){
							
							$tampil_blog = mysqli_query($koneksi, "SELECT * FROM job_blog
							WHERE id ='$r[blog_id]' limit 10");
							$r2=mysqli_fetch_array($tampil_blog);
							
							 $idnya = $r2['id'];
							 $titleblog = $r2['title'];
							 
							$title_name_new = strtolower($titleblog);
                              $judulkecil = str_replace(" ","-",$title_name_new);
                              
							//hitung jumlah kata
							$jumlah_kata = str_word_count($r2['description']);
							if($jumlah_kata < 500){
								$jumlah_waktu = "2";
							}elseif(($jumlah_kata >= 500) && ($jumlah_kata < 1000)){
								$jumlah_waktu = "3";
							}elseif(($jumlah_kata >= 1000) && ($jumlah_kata < 1500)){
								$jumlah_waktu = "5";
							}elseif(($jumlah_kata >= 1500) && ($jumlah_kata < 2500)){
								$jumlah_waktu = "8";
							}elseif($jumlah_kata >= 2500){
								$jumlah_waktu = "10";
							}
							
							//replace tag dalam kalimat
							$kalimatdireplace1x = strip_tags($r2['description']);
							
							$sub_kalimat_now_tranding = substr($kalimatdireplace1x,0,150);
							
					    ?>
                            <div class="swiper-slide">
                                <div class="hero-article__item">
                                    <div class="hero-article__item-image ratio ratio-4x3 position-relative">
                                        <div>
                                            <img src="/storage/blog/<?php echo $r2['image']; ?>" class="w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
                                            <div class="hero-article__item-event-date position-absolute bg-white rounded p-2 d-flex flex-column justify-content-center align-items-center">
                                                <div class="text-xs text-uppercase">Wed</div>
                                                <div class="fw-bold text-site fs-5">25</div>
                                                <div class="text-xs text-uppercase text-muted">Aug</div>
                                            </div> <!-- /.event date -->
                                        </div>
                                    </div>
                                    
                                    <div class="hero-article__item-event p-4">
                                        <div class="hero-article__item-date text-xs d-flex gap-2 text-site text-uppercase">
                                            Job Fair
                                        </div>

                                        <h4 class="fw-bold fs-6 mt-2"><a href="https://inikarir.com/blog/<?php echo $idnya ?>/<?php echo $judulkecil ?>"><?php echo $r2['title']; ?></a></h4>
                                        <div class="text-xs text-muted mt-3">
                                            <p><?php echo $sub_kalimat_now_tranding; ?></p>
                                        </div>
                                        <div class="mt-2 d-flex text-xs">
                                            <div class="text-muted text-uppercase">
                                                By <span class="text-site">IniKarir</span> - Aug, 21, 2023
                                            </div>
                                        </div>
                                    </div> <!-- /.content -->
                                </div> <!-- /.article item -->
                            </div> <!-- /.slide item -->

                                    <?php
                                
                                      }
                                    ?>

                            
                            
                        </div> <!-- /.swiper wrapper -->
                    </div> <!-- /.swiper -->
                    
                </div> <!-- /.container -->
            </section> <!-- /.hero article -->

            <section id="hero1" class="hero1 pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                            <h2 class="fw-bolder fs-1 mb-3">What you <span class="text-site">focus</span> on will <span class="text-site">grow!</span></h2>
                            <p class="text-xs text-muted">You can focus on growing your business and well handle the recruitment process for your company.</p>

                            <div class="mt-4 d-flex gap-3">
                                <a href="#" class="btn btn-primary text-xs fw-bold px-3 py-2">Consult Now</a>
                                <a href="#" class="btn btn-outline-primary text-xs fw-bold px-3 py-2">Learn More</a>
                            </div>
                        </div> <!-- /.col-lg-5 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </section> <!-- /.hero1 -->

            <section id="hero-new-article" class="hero-new-article py-5 pb-4 pb-lg-5">
                <div class="container">
                    <div class="hero-article__heading d-flex w-100 position-relative mb-4">
                        <h3 class="fw-bold fs-5 text-uppercase">New Articles</h3>
                        <div class="hero-article__navigation d-flex gap-2 ms-auto">
                            <div class="prev hero-article__large-prev d-flex align-items-center justify-content-center rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                </svg>
                            </div>

                            <div class="next hero-article__large-next d-flex align-items-center justify-content-center rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </div>
                        </div>

                        <div class="hero-article__pagination hero-article__pagination position-absolute start-0 bottom-0"></div>
                    </div> <!-- /.heading -->

                    <div class="swiper hero-new-article__swiper">
                        <div class="swiper-wrapper">
                            
                      <?php
						$tampil_berita_now_tranding = mysqli_query($koneksi, "SELECT * FROM job_blog_cat_relation 
						JOIN job_blog_categories ON job_blog_cat_relation.category_id = job_blog_categories.id
						WHERE job_blog_cat_relation.category_id='11'
						ORDER BY job_blog_cat_relation.id ASC");
						
						while ($r=mysqli_fetch_array($tampil_berita_now_tranding)){
							
							$tampil_blog = mysqli_query($koneksi, "SELECT * FROM job_blog
							 WHERE id ='$r[blog_id]' limit 10");
							$r2=mysqli_fetch_array($tampil_blog);
							
							$idnya = $r2['id'];
							 $titleblog = $r2['title'];
							 
							$title_name_new = strtolower($titleblog);
                              $judulkecil = str_replace(" ","-",$title_name_new);
                              
							//hitung jumlah kata
							$jumlah_kata = str_word_count($r2['description']);
							if($jumlah_kata < 500){
								$jumlah_waktu = "2";
							}elseif(($jumlah_kata >= 500) && ($jumlah_kata < 1000)){
								$jumlah_waktu = "3";
							}elseif(($jumlah_kata >= 1000) && ($jumlah_kata < 1500)){
								$jumlah_waktu = "5";
							}elseif(($jumlah_kata >= 1500) && ($jumlah_kata < 2500)){
								$jumlah_waktu = "8";
							}elseif($jumlah_kata >= 2500){
								$jumlah_waktu = "10";
							}
							
							//replace tag dalam kalimat
							$kalimatdireplace1x = strip_tags($r2['description']);
							
							$sub_kalimat_now_tranding = substr($kalimatdireplace1x,0,150);
							
					    ?>
                            <div class="swiper-slide">
                                <div class="hero-article__item">
                                    <div class="hero-article__item-image ratio ratio-4x3 position-relative">
                                        <div>
                                            <img src="/storage/blog/<?php echo $r2['image']; ?>" class="rounded w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
                                        </div>
                                    </div>
                                    
                                    <div class="hero-article__item-event p-3 border-0">
                                        <div class="hero-article__item-date text-xs d-flex gap-2 text-site text-uppercase">
                                            Job Fair
                                        </div>

                                        <h4 class="fw-bold fs-6 mt-2"><a href="https://inikarir.com/blog/<?php echo $idnya ?>/<?php echo $judulkecil ?>"><?php echo $r2['title']; ?></a></h4>
                                        <div class="text-xs text-muted mt-3">
                                            <p><?php echo $sub_kalimat_now_tranding; ?></p>
                                        </div>
                                        <div class="mt-2 d-flex text-xs">
                                            <div class="text-muted fst-italic">
                                                By <span class="text-site">IniKarir</span>
                                            </div>
                                        </div>
                                    </div> <!-- /.content -->
                                </div> <!-- /.article item -->
                            </div> <!-- /.slide item -->

                                <?php
                                
                                      }
                                    ?>

                          
                        </div> <!-- /.swiper wrapper -->
                    </div> <!-- /.swiper -->
                </div> <!-- /.container -->
            </section> <!-- /.hero article -->

            <section id="hero-top-pick" class="hero-top-pick p-3 pb-lg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8">
                            <div class="pe-lg-5">
                                <div class="hero-top-pick__heading mb-4">
                                    <h3 class="fw-bold fs-4">IniKarir Top Picks</h3>
                                </div> <!-- /.heading -->

                                <ul class="hero-top-pick__list list-unstyled d-flex flex-column w-full mb-0">
                                    
                                   <?php
            						$tampil_berita_now_tranding = mysqli_query($koneksi, "SELECT * FROM job_blog_cat_relation 
            						JOIN job_blog_categories ON job_blog_cat_relation.category_id = job_blog_categories.id
            						WHERE job_blog_cat_relation.category_id='11'
            						ORDER BY job_blog_cat_relation.id ASC");
            						
            						while ($r=mysqli_fetch_array($tampil_berita_now_tranding)){
            							
            							$tampil_blog = mysqli_query($koneksi, "SELECT * FROM job_blog
            							WHERE id ='$r[blog_id]' limit 10");
            							$r2=mysqli_fetch_array($tampil_blog);
            							
            							$idnya = $r2['id'];
            							 $titleblog = $r2['title'];
            							 
            							$title_name_new = strtolower($titleblog);
                                          $judulkecil = str_replace(" ","-",$title_name_new);
                                          
            							//hitung jumlah kata
            							$jumlah_kata = str_word_count($r2['description']);
            							if($jumlah_kata < 500){
            								$jumlah_waktu = "2";
            							}elseif(($jumlah_kata >= 500) && ($jumlah_kata < 1000)){
            								$jumlah_waktu = "3";
            							}elseif(($jumlah_kata >= 1000) && ($jumlah_kata < 1500)){
            								$jumlah_waktu = "5";
            							}elseif(($jumlah_kata >= 1500) && ($jumlah_kata < 2500)){
            								$jumlah_waktu = "8";
            							}elseif($jumlah_kata >= 2500){
            								$jumlah_waktu = "10";
            							}
            							
            							//replace tag dalam kalimat
            							$kalimatdireplace1x = strip_tags($r2['description']);
            							
            							$sub_kalimat_now_tranding = substr($kalimatdireplace1x,0,150);
            							
            					    ?>
                                    <li>
                                        <div class="hero-top-pick__item">
                                            <div class="row d-flex align-items-lg-center">
                                                <div class="col-5">
                                                    <div class="hero-top-pick__image">
                                                        <div class="ratio ratio-4x3">
                                                            <div>
                                                                <img src="/storage/blog/<?php echo $r2['image']; ?>" class="rounded w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
                                                            </div>
                                                        </div>
                                                    </div> <!-- /.image -->
                                                </div> <!-- /.col -->

                                                <div class="col-7">
                                                    <div class="hero-top-pick__content">
                                                        <div class="text-xs text-uppercase mb-2">Human Resource</div>
                                                        <div class="fw-bold fs-5 mb-2"><a href="https://inikarir.com/blog/<?php echo $idnya ?>/<?php echo $judulkecil ?>"><?php echo $r2['title']; ?></a></div>
                                                        <div class="text-xs text-muted fst-italic">by IniKarir</div>
                                                        <div class="mt-3 text-sm"><?php echo $sub_kalimat_now_tranding; ?></div>
                                                    </div> <!-- /.content -->
                                                </div> <!-- /.col -->
                                            </div> <!-- /.row -->
                                        </div> <!-- /.item -->
                                    </li>

                                   <?php
                                
                                      }
                                    ?>
                                    
                                </ul> <!-- /.list -->
                            </div>
                        </div> <!-- /.col -->

                        <div class="col-12 col-sm-12 col-md-4 pt-4 md-pt-0">
                            <div class="ps-md-3 ps-lg-4 d-flex flex-column h-100">
                                <div class="block flex-none">
                                    <div class="fw-bold fs-5 mb-3 mb-lg-4">Latest Videos</div>
                                    <ul class="hero-top-pick__video-list list-unstyled d-flex flex-column w-100">
                                        
                                <div data-mc-src="5d93a82c-0c22-49bf-88d3-c9a31a4751c0#youtube"></div>
        
                                <script 
                                  src="https://cdn2.woxo.tech/a.js#63b78415cc218c70b038e8e6" 
                                  async data-usrc>
                                </script>
                                
                                    </ul>
                                </div> <!-- /.latest videos -->

                                <div class="block mt-4 flex-none">
                                    <div class="fw-bold fs-5 mb-2 mb-lg-3">Instagram Feeds</div>
                                    <div data-mc-src="243fbde4-7ff9-4eb6-b2ba-c9155b9a0202#instagram"></div>
        
                         <script 
                            src="https://cdn2.woxo.tech/a.js#63b78415cc218c70b038e8e6" 
                            async data-usrc>
                        </script>
                                </div> <!-- /.instagram feeds -->

                                <!--<div class="block mt-3 flex-grow-1 position-relative">-->
                                <!--    <div class="sidebar__ads position-absolute top-0 end-0 start-0 bottom-0 rounded bg-light">-->
                                <!--        <img src="./assets/images/DSC03092 1.webp" class="w-100 h-100 position-absolute top-0 end-0 start-0 bottom-0" alt="Image">-->
                                <!--    </div>-->
                                <!--</div> <!-- /.ads -->
                            </div>
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </section> <!-- /.hero top pick-->
        </main> <!-- /.main -->

        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="pe-lg-5">
                            <div class="footer-menu-block">
                                <h3 class="fw-bold mb-3 fs-2">Stay Connected</h3>
                                <p class="text-muted">Stay up-to-date with the latest information and career development tips from our newsletter.</p>
                            
                                <form id="newsletter-form" class="newsletter-form">
                                    <div class="position-relative">
                                        <input type="email" class="form-control" placeholder="Enter Email Address .">
                                        <button type="button" class="btn btn-primary fw-bold position-absolute text-sm">Connect</button>
                                    </div> <!-- /.relative position -->
                                </form> <!-- /.newsletter form -->
                            </div> <!-- /.footer-menu-block -->

                            <div class="footer-menu-block mt-4 mt-lg-5 mb-4 mb-lg-0">
                                <div class="d-flex align-items-center">
                                    <div class="block">
                                        <a href="#" class="block footer-logo">
                                            <img src="./assets/images/logo.webp" alt="IniKarir Logo">
                                        </a>
                                    </div>

                                    <div class="block text-xs ps-3">
                                        <p class="text-muted mb-1">Address :</p>
                                        <p class="text-muted mb-0">
                                            Perkantoran Mutiara Bekasi Center
                                            Jl. Jendral Ahmad Yani Kav A No. 16 Kayuringin Jaya,
                                            Bekasi Selatan, 17144, Indonesia
                                        </p>
                                    </div>
                                </div> <!-- /.d-flex -->
                            </div> <!-- /.footer-menu-block -->
                        </div>
                    </div> <!-- /.col-6 -->

                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <div class="footer-menu-block">
                                    <h3 class="fw-bold fs-4 mb-2">Loker</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">IT Development</a></li>
                                        <li><a href="#">Finance</a></li>
                                        <li><a href="#">Healthcare</a></li>
                                        <li><a href="#">Sales & Marketing</a></li>
                                        <li><a href="#">Pendidikan</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Research</a></li>
                                        <li><a href="#">Human Resources</a></li>
                                        <li><a href="#">Freelance</a></li>
                                        <li><a href="#">Loker Lainnya</a></li>
                                    </ul>
                                </div> <!-- /.footer menu block -->
                            </div> <!-- /.col-4 -->

                            <div class="col-6 col-lg-4">
                                <div class="footer-menu-block">
                                    <h3 class="fw-bold fs-4 mb-2">About</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">About IniKarir</a></li>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">IniKarir Team</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                    </ul>
                                </div> <!-- /.footer menu block -->

                                <div class="footer-menu-block">
                                    <h3 class="fw-bold fs-4 mb-2">Article</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Tips</a></li>
                                        <li><a href="#">Events</a></li>
                                    </ul>
                                </div> <!-- /.footer menu block -->
                            </div> <!-- /.col-4 -->

                            <div class="col-6 col-lg-4">
                                <div class="footer-menu-block">
                                    <h3 class="fw-bold fs-4 mb-2">Services</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Employee</a></li>
                                        <li><a href="#">Employer</a></li>
                                        <li><a href="#">Support</a></li>
                                    </ul>
                                </div> <!-- /.footer menu block -->

                                <div class="footer-menu-block">
                                    <h3 class="fw-bold fs-4 mb-2">Contact</h3>
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="block">Phone | WhatsApp :</div>
                                            <div class="block text-xs">+62-21-2928-5970</div>
                                            <div class="block text-xs">+62-811-3000-232</div>
                                        </li>
                                        <li class="mt-3">
                                            <div class="block">Email :</div>
                                            <div class="block text-xs">info@inikarir.com</div>
                                        </li>
                                    </ul>
                                </div> <!-- /.footer menu block -->
                            </div> <!-- /.col-4 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.col-6 -->
                </div> <!-- /.row -->

                <div class="footer-social d-flex justify-content-md-end mt-4">
                    <ul class="list-unstyled d-flex gap-2 gap-lg-3 align-items-center mb-0">
                        <li class="text-xs">Follow IniKarir</li>
                        <li>
                            <a href="#"><img src="./assets/images/Twitter Icon.webp" alt="Twiter Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/Instagram Icon.webp" alt="Instagram Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/Facebook Icon.webp" alt="Facebook Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/LinkedIn Icon.webp" alt="LinkedIn Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/Tiktok.webp" alt="Tiktok Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/Youtube.webp" alt="Youtube Icon"></a>
                        </li>
                    </ul>
                </div> <!-- /.tooter social -->

                <div class="footer-copyright mt-5 pt-4 d-flex align-items-center text-muted text-xs">
                    <div>Copyright © 2023 by IniKarir. All rights reserved.</div>
                    <div class="ms-auto">Privacy Policy. Terms & Condition.</div>
                </div> <!-- /.footer copyright -->
            </div> <!-- /.container -->
        </footer> <!-- /.footer -->

        <!-- Video.js -->
        <script src="https://vjs.zencdn.net/8.5.2/video.min.js"></script>
        
        <!-- JavaScripts -->
        <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="./assets/js/functions.js"></script>
    </body>
</html>
