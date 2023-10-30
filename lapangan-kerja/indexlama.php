<?php 
include "configurasi/koneksi.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Poralia">
        <meta name="generator" content="Poralia">
        <title>Ini Karir</title>

        <!-- Video.js base CSS -->
        <link rel="stylesheet" href="https://unpkg.com/video.js@7/dist/video-js.min.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,800;1,400;1,600;1,800&family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap-utilities.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="./assets/css/style.css" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicons/apple-touch-icon.png">
        <!--<link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon-32x32.png">-->
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logo.png">
        <link rel="manifest" href="./assets/favicons/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>

    <body>
        <header id="header">
            <nav id="navbar" class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="./assets/images/logo.png" alt="Ini Karir" />
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="container d-lg-flex px-0">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Article</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                            
                            <div class="ms-auto">
                                <div class="header__cta d-flex gap-3 position-relative">
                                    <a href="#" class="btn btn-outline-primary px-4 py-2">Log In</a>
                                    <a href="#" class="btn btn-primary px-4 py-2">Daftar</a>
                                </div> <!-- /.cta -->
                            </div>
                        </div>
                    </div> <!-- /.collapse menu -->
                </div> <!-- /.container -->
            </nav> <!-- /.nav -->
        </header> <!-- /.header -->

        <main id="main">
            <section id="hero-job-intro" class="hero-job-intro">
                <div class="container">
                    <div class="d-flex justify-content-center align-items-md-center row">
                        <div class="col-8 col-xl-5">
                            <div class="hero-job-intro__content">
                                <h1 class="fw-bolder fs-1 mb-3">
                                    Raih <span class="text-site">karir impian</span> dan buka <span class="text-site">potensimu</span>
                                </h1>
                                <p class="text-muted">IniKarir hadir untuk membantu wujudkan semua karir impianmu</p>
                                <div class="custom-checkbox mt-3 mt-md-5">
                                    <input id="status" type="checkbox" checked="true" name="status">
                                    <label for="status">
                                        <div class="status-switch"
                                            data-unchecked="Company"
                                            data-checked="Job Seeker">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div> <!-- /.col -->

                        <div class="col-4 col-xl-5">
                            <div class="hero-job-intro__image">
                                <img src="./assets/images/rido.png" class="w-100 h-auto" alt="Image">
                            </div> <!-- /.image -->
                        </div> <!-- /.col -->
                    </div> <!-- /.flex -->
                </div> <!-- /.container -->
            </section> <!-- /.hero job intro -->

            <section id="hero-loker" class="hero-loker  align-items-center" style="background-image: url('../images/Background-inikarir.png'); "><!-- min-vh-100 d-md-flex -->
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-sm-12 col-md-7">
                            <div class="hero-loker__highlight pe-lg-4">
                                <div id="hero-loker-tab" class="row nav-tabs align-items-center" role="tablist">
                                    <div class="col-6">
                                        <div class="hero-loker__highlight-item ratio bg-success position-relative rounded active" data-bs-toggle="tab" data-bs-target="#loker-info-1">
                                            <div>
                                                <img 
                                                    class="w-100 h-100 start-0 top-0 end-0 bottom-0 rounded" 
                                                    src="./assets/images/inikarir-local.png"
                                                    alt="Image"
                                                >
                                            </div>
                                        </div> <!-- /.item ratio -->
                                    </div> <!-- /.col-6 -->

                                    <div class="col-6">
                                        <div class="hero-loker__highlight-item ratio bg-success position-relative rounded" data-bs-toggle="tab" data-bs-target="#loker-info-2">
                                            <div>
                                                <img 
                                                    class="w-100 h-100 start-0 top-0 end-0 bottom-0 rounded" 
                                                    src="./assets/images/inikarir-global.png"
                                                    alt="Image"
                                                >
                                            </div>
                                        </div> <!-- /.item ratio -->
                                    </div> <!-- /.col-6 -->
                                </div> <!-- /.row -->
                            </div> <!-- /.highlight -->
                        </div> <!-- /.col -->

                        <div class="col-12 col-sm-12 col-md-5">
                            <div class="tab-content" id="myTabContent">
                                <div id="loker-info-1" class="tab-pane fade show active hero-loker__content mt-4 mt-lg-0">
                                    <div class="animate__animated animate__fadeInRight">
                                        <div class="hero-loker__content-heading mb-4">
                                            <div class="text-site fw-semibold mb-2 animate__animated animate__fadeInRight">Daftar Lowongan Kerja Lokal</div>
                                            <h3 class="fs-2 fw-bold">Pilih jalur karir impianmu</h3>
                                            <p>IniKarir menyediakan beragam lowongan kerja yang tersebar di seluruh Indonesia</p>
                                        </div> <!-- /.heading -->
                                          <?php 
                                    $tampil = mysqli_query($koneksi, "SELECT *  FROM job_product 
                                       WHERE job_product.status = 'active'");
                                       $data=mysqli_num_rows($tampil);
                                            
                                           
                                       
                                    ?>
                                        <div class="hero-loker__content-meta d-flex gap-5 mb-4 mb-lg-5">
                                            <div class="block">
                                                <div class="fw-bold fs-4">100+</div>
                                                <div class="fs-6">Kota</div>
                                            </div>

                                            <div class="block">
                                                <div class="fw-bold fs-4"><?php echo $data ?>+</div>
                                                <div class="fs-6">Lowongan</div>
                                            </div>

                                            <div class="block">
                                                <div class="fw-bold fs-4">250+</div>
                                                <div class="fs-6">Perusahaan</div>
                                            </div>
                                        </div> <!-- /.meta -->

                                        <div class="hero-loker__content-cta d-flex gap-3">
                                            <a href="https://inikarir.com/listing" class="btn btn-primary fw-bold px-4">Pilih Karir</a>
                                            <a href="#" class="btn btn-outline-primary px-4">Pelajari Selengkapnya</a>
                                        </div> <!-- /.cta -->
                                    </div>
                                </div> <!-- /.content -->

                                <div id="loker-info-2" class="tab-pane fade hero-loker__content mt-4 mt-lg-0">
                                    <div class="animate__animated animate__fadeInRight">
                                        <div class="hero-loker__content-heading mb-4">
                                            <div class="text-site fw-semibold mb-2">Daftar Lowongan Kerja Internasional</div>
                                            <h3 class="fs-2 fw-bold animate__animated animate__fadeInRight">Pilih jalur karir impianmu</h3>
                                            <p>IniKarir menyediakan beragam lowongan kerja yang tersebar di seluruh dunia</p>
                                        </div> <!-- /.heading -->

                                  
                                        <div class="hero-loker__content-meta d-flex gap-5 mb-4 mb-lg-5">
                                            <div class="block">
                                                <div class="fw-bold fs-4">10+</div>
                                                <div class="fs-6">Negara</div>
                                            </div>

                                            <div class="block">
                                                <div class="fw-bold fs-4">120+</div>
                                                <div class="fs-6">Lowongan</div>
                                            </div>

                                            <div class="block">
                                                <div class="fw-bold fs-4">50+</div>
                                                <div class="fs-6">Perusahaan</div>
                                            </div>
                                        </div> <!-- /.meta -->

                                        <div class="hero-loker__content-cta d-flex gap-3">
                                            <a href="https://global.inikarir.com/" class="btn btn-primary fw-bold px-4">Pilih Karir</a>
                                            <a href="#" class="btn btn-outline-primary px-4">Pelajari Selengkapnya</a>
                                        </div> <!-- /.cta -->
                                    </div>
                                </div> <!-- /.content -->
                            </div>
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </section> <!-- /.hero loker -->

        

            <section id="hero-loker-featured" class="hero-loker-featured py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 co-md-12 col-lg-10 mx-auto">
                            <div class="hero-loker-featured__heading text-center">
                                <h3 class="fw-bold fs-1">Lowongan kerja <span class="text-site">Unggulan</span></h3>
                                <p class="text-muted">Pilihan teratas saat ini untuk karier impian Anda berdasarkan daftar populer IniKarir saat ini</p>
                            </div> <!-- /.heading -->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                   
                    <div class="hero-loker-featured__slider mt-2 mt-lg-4">
                        <div class="swiper hero-loker-featured__slider-swiper pb-5 py-3 px-3">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                
                                   <?php
                      
                      function rupiah($angka){
	
                        	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                        	return $hasil_rupiah;
                         
                        }
                                        $tampil_unggulan = mysqli_query($koneksi, "SELECT job_cities.id,
                                                                                          job_cities.name as alamat,
                                                                                          job_companies.id,
                                                                                          job_companies.logo, 
                                                                                          job_companies.name as namapt,
                                                                                          job_product.product_name, 
                                                                                          job_product.salary_min,
                                                                                          job_product.salary_max,
                                                                                          job_product.city,
                                                                                          job_product.company_id,
                                                                                          job_product.description,
                                                                                          job_product_type.title,
                                                                                          job_product.created_at
                                                                                          FROM job_product 
                                        JOIN job_cities ON job_product.city = job_cities.id
                                        JOIN job_companies ON job_product.company_id = job_companies.id
                                        JOIN job_product_type ON job_product.product_type = job_product_type.id
                                        WHERE job_product.status = 'active'
                                        ORDER BY job_product.id desc limit 6");
                                        
                                        while($data=mysqli_fetch_array($tampil_unggulan)){
                                            
                                            $typenya = $data['title'];
                                            $gajimin = rupiah($data['salary_min']);
                                            $gajimax = rupiah($data['salary_max']);
                                            $alamat = $data['alamat'];
                                            $logo = $data['logo'];
                                            $product_name = $data['product_name'];
                                            $namapt = $data['namapt'];
                                            $created_at =  $data['created_at'];
                                            $tgl =  date('d F Y', strtotime($created_at));
                                            $tgl_pos = date('Y/m/d', strtotime($created_at));
                                            $today = date("Y/m/d");
                                            $tgl1 = strtotime($tgl_pos); 
                                            $tgl2 = strtotime($today); 
                                            $jarak = $tgl2 - $tgl1;
                                            $hari2 = $jarak / 60 / 60 / 24;
                                            $hari = $hari2 + 26;
                                            
                                            
                                            
                                            $judul = $data['description'];
                                             //  $judulloker= substr($judul, 0, 150);
                                               
                                               $sue1 = strlen($product_name);
                                               if($sue1 <= 31){
                                                    $sue = "$product_name <br><br>";
                                              
                                               }else {
                                                  //  $sue = "$product_name <br><br>";
                                                   $sue = $product_name;
                                                  
                                                   
                                               }
                                                 
                                                 
                                            //replace tag dalam kalimat
											$kalimatdireplace1x = str_replace("<span>","",$judul);
											$kalimatdireplace2x = str_replace("</span>","",$kalimatdireplace1x);
											$kalimatdireplace4x = str_replace("<p>","",$kalimatdireplace2x);
											$kalimatdireplace5x = str_replace("</p>","",$kalimatdireplace4x);
											$kalimatdireplace6x = str_replace("<h3>","",$kalimatdireplace5x);
											$kalimatdireplace7x = str_replace("</h3>","",$kalimatdireplace6x);
											$kalimatdireplace8x = str_replace("<b>","",$kalimatdireplace7x);
											$kalimatdireplace9x = str_replace("</b>","",$kalimatdireplace8x);
											$kalimatdireplace10x = str_replace("<h5>","",$kalimatdireplace9x);
											$kalimatdireplace11x = str_replace("</h5>","",$kalimatdireplace10x);
											$kalimatdireplace12x = str_replace("<br>","",$kalimatdireplace11x);
											$kalimatdireplace13x = str_replace("</br>","",$kalimatdireplace12x);
											$kalimatdireplace14x = str_replace("-","",$kalimatdireplace13x);
											$kalimat1 = str_replace("<p style>","<p style1>",$kalimatdireplace14x);
											$kalimat2 = str_replace("<ol>","",$kalimat1);
											$kalimat3 = str_replace("</ol>","",$kalimat2);
											$kalimat4 = str_replace("<li>","",$kalimat3);
											$kalimat5 = str_replace("</li>","",$kalimat4);
											$kalimat6 = str_replace("<ul>","",$kalimat5);
											$kalimat7 = str_replace("<h1>","",$kalimat6);//h1
											$kalimat8 = str_replace("<h1>","",$kalimat7);//h1
											$kalimat9 = str_replace("<h2>","",$kalimat8);//h2
											$kalimat10 = str_replace("<h2>","",$kalimat9);//h2
											$kalimat11 = str_replace("<h3>","",$kalimat10);//h3
											$kalimat12 = str_replace("<h3>","",$kalimat11);//h3
											$kalimat13 = str_replace("<h4>","",$kalimat12);//h4
											$kalimat14 = str_replace("<h4>","",$kalimat13);//h4
											$kalimat15 = str_replace("<i>","",$kalimat14);//i
											$kalimat16 = str_replace("</i>","",$kalimat15);//i
											$kalimat17 = str_replace("<strong>","",$kalimat16);//strong
											$kalimat18 = str_replace("</strong>","",$kalimat17);//strong
											$kalimat19 = str_replace("<p style=","",$kalimat18);//<p style
											$kalimat20 = str_replace("marginleft: 0px;","",$kalimat19);//<p style
											$kalimat21 = str_replace(">","",$kalimat20);//<p style
											$kalimat22 = str_replace('\"\"',"",$kalimat21);//<p style
									
											$kalimat24 = str_replace("&nbsp;","",$kalimat22);//<p style
											
											
											$kalimat = str_replace("</ul>","",$kalimat24);
								
											
									
											$judulloker1 =  substr($kalimat,0,123);
										
											$judulloker3 =  substr($kalimat,0,50);
											$judulloker2 =  substr($kalimat,0,83);
										
										 $judul1 = strlen($kalimat);
										       
										        if($judul1 <= 50){
										            $judulloker = "$judulloker3 <br><br><br>";
                                               }else if(($judul1 > 50) && ($judul1 < 100)){
                                                    $judulloker = "$judulloker2 <br><br>";
                                                 
                                               }else {
                                                 
                                                   $judulloker = $judulloker1;
                                                  
                                                   
                                               }
                                            
                                       
                                    ?>
                                <div class="swiper-slide">
                                    <div class="hero-loker-featured__item p-3 p-lg-4">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 pe-2">
                                                <div class="d-flex">
                                                    <div class="hero-loker-featured__item-image">
                                                        <div class="ratio ratio-1x1">
                                                            <div>
                                                                <img src="../storage/products/<?php echo $data['logo']; ?>" alt="Image" class="rounded w-100 h-100 position-absolute top-0 start-0 bottom-0 end-0">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="flex-grow-1 ps-3">
                                                        <div class="fw-bold"><?php echo $namapt ?></div>
                                                        <div class="text-muted text-xs">
                                                            <div><?php echo $tgl ?></div>
                                                            <div class="d-flex">
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                                    </svg>
                                                                </span>
                                                                <span class="ps-1"><?php echo $alamat ?></span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span></span>
                                                                <span class="ps-1"><?php echo $gajimin ?> - <?php echo $gajimax ?> <br>per bulan</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="mt-3">
                                                    <div class="fw-bold fs-5 mb-1"><?php echo $sue ?></div>
                                                    <div class="hero-loker-featured__badge px-4 py-1 d-inline-block text-xs rounded"><?php echo $typenya ?></div>
                                                  <p class="text-xs text-muted d-block mt-2 mb-0"><?php echo $judulloker ?></p>
                                                   
                                                </div>
                                            </div>

                                            <div class="hero-job-featured__close-info text-center p-3 rounded">
                                                <div class="d-block d-flex flex-column h-100 w-100">
                                                    <div class="text-xs fw-bold">Ditutup dalam</div>
                                                    <div class="hero-job-featured__close-day font-bold text-site fs-1 fw-bold mt-auto"><?php echo $hari ?></div>
                                                    <div class="hero-job-featured__close-day-label text-xs text-muted text-uppercase mt-auto">Hari</div>
                                                    <div class="mt-auto">
                                                        <a href="#" class="btn btn-primary text-xs fw-bold d-block w-100 px-3 py-2">Daftar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     
                                </div> <!-- /.item -->
                                
                             
                                
                                <?php
                                
                                      }
                                    ?>
                                   
                            </div>
                            

                            <!-- If we need pagination -->
                            
                            <div class="swiper-pagination hero-loker-featured__slider-pagination"> </div>
                            
                        </div> <!-- /.swiper -->
                       
                        
                    
                    </div> <!-- /.slider -->
                    
                    <div class="hero-top-company__cta text-center mt-3 mt-lg-5">
                        <a href="https://inikarir.com/listing" class="text-site fw-bold">Seluruh Lowongan</a>
                    </div>
                    
                   
                </div> <!-- /.container -->
            </section> <!-- /.loker featured -->
            
            
            

            <section id="hero-top-company" class="hero-top-company "> <!-- min-vh-100 d-lg-flex-->
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 co-md-12 col-lg-10 mx-auto">
                            <div class="hero-top-company__heading text-center">
                                <h3 class="fw-bold fs-1">Perusahaan <span class="text-site">Favorit</span></h3>
                                <p class="text-muted">Jelajahi dan temukan peluang karir impian di perusahaan ternama</p>
                            </div> <!-- /.heading -->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                    
                                

                    <div class="row mt-4">
                         <?php
                                        $tampil = mysqli_query($koneksi, "SELECT * FROM job_companies 
                                         ORDER BY job_companies.id DESC limit 8");
                                        while ($data=mysqli_fetch_array($tampil)){
                                            
                                           $nama_perusahaan = $data['name'];
                                           $id = $data['id'];
                                           
                                        $result = mysqli_query($koneksi, "SELECT company_id  FROM job_product where status ='active' and company_id='$id' ");
                                       $rowcount=mysqli_num_rows($result);
                                
                                       
                          ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="hero-top-company__item shadow-sm p-3 rounded">
                                <div class="d-flex">
                                    <div class="hero-top-company__image">
                                        <div class="ratio ratio-1x1">
                                            <div>
                                                <img src="../storage/products/<?php echo $data['logo']; ?>" alt="Image" class="rounded w-100 h-100 position-absolute top-0 start-0 bottom-0 end-0">
                                            </div>
                                        </div>
                                    </div> <!-- /.image -->

                                    <div class="hero-top-company__content ps-3">
                                        <div class="fw-bold fs-6"><?php echo $nama_perusahaan ?></div>
                                        <!--<div class="text-muted text-xs">Arab Saudi </div>-->
                                    </div> <!-- /.content -->
                                </div> <!-- /.flex -->

                                <div class="hero-top-company__meta d-flex mt-3">
                                    <div class="d-flex align-items-center">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                            </svg>
                                        </span>
                                        <span class="ps-2">Untuk <?php echo  $rowcount ?> orang</span>
                                    </div>

                                    <div class="ms-auto"><?php echo  $rowcount ?>  posisi</div>
                                </div> <!-- /.meta -->
                            </div> <!-- /.item -->
                        </div> <!-- /.col -->

                         <?php
                              }
                          ?>
                        
                    </div> <!-- /.row mt 4-->
                    
                                   
                
                   
                    <div class="hero-top-company__cta text-center mt-3 mt-lg-5">
                        <a href="https://inikarir.com/companies" class="text-site fw-bold">Seluruh perusahaan</a>
                    </div>
                </div> <!-- /.container -->
            </section> <!-- /.hero top company -->
            

            <section id="hero-testimony" class="hero-testimony">
	<div class="container">
		<div class="hero-testimony__heading text-center mb-5">
			<div class="fw-bold text-site">Testimonials</div>
			<div class="fw-bold fs-3 mb-1">What they say</div>
			<div class="text-sm">The story of them partnering and working with</div>
		</div> <!-- /.heading -->

		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-9">
				<div class="hero-testimony__slider d-flex">
					<div class="hero-testimony__swiper-prev swiper-circle__navigation-prev d-flex align-items-center justify-content-center">
						<div class="d-flex align-items-center justify-content-center rounded-circle shadow-sm bg-white">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
							</svg>
						</div>
					</div>

					<div class="swiper hero-testimony__slider-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="hero-testimony__item d-block d-md-flex shadow-sm m-3">
									<div class="hero-testimony__media relative d-flex align-items-center">
										<div class="ratio" style="--bs-aspect-ratio: 86%;">
											<div>
											
											<video id="hero-testimony__video-1" class="video-js" src="assets/videos/zanira.mp4" loading="lazy" autoplay loop muted></video>
											
											
												<!--<video
													muted
													id="hero-testimony__video-1"
													class="video-js"
													preload="auto"
													data-setup="{}"
												>
													<source src="../assets/videos/zanira.mp4" type="video/mp4" />
													<p class="vjs-no-js">
														To view this video please enable JavaScript, and consider upgrading to a web browser that
														<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
													</p>
												</video>-->
											</div>
										</div>
									</div>

									<div class="hero-testimony__content bg-white relative d-flex justify-content-center align-items-center flex-grow-1">
										<div class="p-3 p-lg-5">
											<div class="d-block mb-3 hero-testimony__content-image">
												<img src="assets/images/logo-artgalery.jpeg" class="w-50" alt="Logo" />
											</div>

											<div class="d-block mb-3">
												"Nama Saya Zanirah Nuraini. Saya berumur 23 tahun dan sekarang saya bekerja di PT Art Gallery Kreasi sebagai Desainer. Terima kasih untuk IniKarir yang sudah membantu saya dalam mencari pekerjaan, dan sukses terus untuk IniKarir."
											</div>

											<div class="d-flex hero-testimony__user align-items-center mt-3">
												<div class="hero-testimony__user-avatar">
													<img src="assets/images/zanira.png" class="rounded-circle" alt="Avatar" />
												</div>

												<div class="block ps-3">
													<div class="fw-bold">Zanirah Nuraini</div>
													<div class="text-muted text-xs">Desainer</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							

							<div class="swiper-slide">
								<div class="hero-testimony__item d-block d-md-flex shadow-sm m-3">
									<div class="hero-testimony__media relative d-flex align-items-center">
										<div class="ratio" style="--bs-aspect-ratio: 86%;">
											<div>

											<video id="hero-testimony__video-2" class="video-js" src="assets/videos/qonita.mp4" loading="lazy" autoplay loop muted></video>
										
												<!-- <video
													muted
													id="hero-testimony__video-2"
													class="video-js"
													preload="auto"
													data-setup="{}"
												>
													<source src="../assets/videos/sample-5s.mp4" type="video/mp4" />
													<p class="vjs-no-js">
														To view this video please enable JavaScript, and consider upgrading to a web browser that
														<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
													</p>
												</video> -->
											</div>
										</div>
									</div>

									<div class="hero-testimony__content bg-white relative d-flex justify-content-center align-items-center flex-grow-1">
										<div class="p-3 p-lg-5">
											<div class="d-block mb-3 hero-testimony__content-image">
												<img src="assets/images/image 3.png" class="w-50" alt="Logo" />
											</div>

											<div class="d-block mb-3">
												"Nama Saya Qonita Karimah. Bekerja diluar negeri Jangan ragu, jangan takut karena insyallah IniKarir membantu kita untuk memiliki masa depan yang lebih baik."
											</div>

											<div class="d-flex hero-testimony__user align-items-center mt-3">
												<div class="hero-testimony__user-avatar">
													<img src="assets/images/qonita.png" class="rounded-circle" alt="Avatar" />
												</div>

												<div class="block ps-3">
													<div class="fw-bold">Qonita Karimah</div>
													<div class="text-muted text-xs">SVP Medical Affair</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="swiper-slide">
								<div class="hero-testimony__item d-block d-md-flex shadow-sm m-3">
									<div class="hero-testimony__media relative d-flex align-items-center">
										<div class="ratio" style="--bs-aspect-ratio: 86%;">
											<div>

											<video id="hero-testimony__video-3" class="video-js" src="assets/videos/kembar-asmara.mp4" loading="lazy" autoplay loop muted></video>
										
												<!-- <video
													muted
													id="hero-testimony__video-2"
													class="video-js"
													preload="auto"
													data-setup="{}"
												>
													<source src="../assets/videos/sample-5s.mp4" type="video/mp4" />
													<p class="vjs-no-js">
														To view this video please enable JavaScript, and consider upgrading to a web browser that
														<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
													</p>
												</video> -->
											</div>
										</div>
									</div>

									<div class="hero-testimony__content bg-white relative d-flex justify-content-center align-items-center flex-grow-1">
										<div class="p-3 p-lg-5">
											<div class="d-block mb-3 hero-testimony__content-image">
												<img src="assets/images/logosemen.png" class="w-50" alt="Logo" />
											</div>

											<div class="d-block mb-3">
												"Nama Saya Kembar Asmara. Saya tau IniKarir itu melalui media sosial dan memang IniKarir itu sangat bagus dalam menunjang karir kita di mancanegara, dan dukungan IniKarir itu sangat berkesan bagi Saya pribadi."
											</div>

											<div class="d-flex hero-testimony__user align-items-center mt-3">
												<div class="hero-testimony__user-avatar">
													<img src="assets/images/asmara.png" class="rounded-circle" alt="Avatar" />
												</div>

												<div class="block ps-3">
													<div class="fw-bold">Kembar Asmara </div>
													<div class="text-muted text-xs">Operator Pabrik semen Saudi Arabia </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
						</div>
					</div>

					<div class="hero-testimony__swiper-next swiper-circle__navigation-next d-flex align-items-center justify-content-center">
						<div class="d-flex align-items-center justify-content-center rounded-circle shadow-sm bg-white">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
							</svg>
						</div>
					</div>
				</div> <!-- /.slider -->
			</div> <!-- ../col -->
		</div> <!-- ../row -->
	</div> <!-- /.container -->
</section> <!-- /.hero testimony -->

            <div class="section">
                    <section id="hero-faq" class="hero-faq  align-items-center"><!--//min-vh-100 d-md-flex-->
                        <div class="container">
                            <div class="d-lg-flex align-items-end">
                                <div class="hero-faq__heading">
                                    <div class="fw-bold text-site mb-1">FAQs</div>
                                    <h3 class="fw-bold fs-3">Ada Pertanyaan ?</h3>
                                    <p class="text-muted">Pertanyaan yang sering di ajukan :</p>
                                </div> <!-- /.heading -->

                                <div class="ms-auto mb-2">
                                    <ul id="faq-tabs" class="nav justify-content-end" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link text-muted active" href="#" data-bs-toggle="tab" data-bs-target="#faq1">PENCARI KERJA (JOB SEEKER)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-muted" href="#" data-bs-toggle="tab" data-bs-target="#faq2">PEMBERI KERJA (COMPANY)</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div> <!-- /.flex -->

                            <div class="hero-faq__accordtion mt-4 tab-content">
                                <div id="faq1" class="tab-pane fade show active">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                            Apakah IniKarir menyediakan lowongan kerja? 
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Betul sekali, kami menyediakan lowongan dari berbagai bidang pekerjaan mulai dari level Staff hingga Manager.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Bagaimana caranya mendapatkan pekerjaan melalui IniKarir? 
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Silakan kunjungi website inikarir.com dan mendaftar melalui panel https://inikarir.com/signup ya. Nanti kamu akan menemukan berbagai pekerjaan di website kami. </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                           Apa saja syarat mendaftar di IniKarir?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Syaratnya hanya cantumkan pengalaman yang relevan dengan bidang pekerjaan yang ingin dilamar sehingga rekruter dapat menemukanmu! </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                                           Apa saja tahapan proses di IniKarir? 
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Kami akan menghubungi nomor telepon atau email yang tertera pada biodatamu untuk melakukan tes psikologi, lalu kami akan menjadwalkan wawancara dengan tim IniKarir untuk diarahkan melalui perusahaan user. </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                                           Apabila saya gagal di proses pertama, apakah dapat melamar di lowongan lain?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Betul, kamu dapat melamar di lowongan lain yang terbuka dan kami akan carikan yang sesuai dengan latar belakangmu. </div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->

                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExamplex">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnex" aria-expanded="false" aria-controls="flush-collapseOnex">
                                                            Apa yang harus saya lakukan apabila akun saya bermasalah?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOnex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Kamu dapat menghubungi Career Advisor (Alina) pada nomor telepon 0811-9981-880.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwox" aria-expanded="false" aria-controls="flush-collapseTwox">
                                                           Apakah aplikasi ini berbayar? 
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwox" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Tidak, karena IniKarir merupakan layanan jasa rekrutmen gratis yang memiliki misi sebagai jembatan antara talent dan perusahaan sehingga kami memudahkan kandidat untuk mencari pekerjaan.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThreex" aria-expanded="false" aria-controls="flush-collapseThreex">
                                                          Apa yang dapat saya lakukan jika saya tidak berhasil mendapat pekerjaan?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThreex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">IniKarir akan menggali potensimu lebih jauh, sehingga apabila kami memiliki klien lain di perusahaan berbeda, maka kami dapat memproses lanjut lamaranmu.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThreex4" aria-expanded="false" aria-controls="flush-collapseThreex4">
                                                          Dengan siapa saya akan diwawancara? 
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThreex4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Kamu akan diwawancara dengan tim IniKarir terlebih dahulu, lalu hasil wawancara akan diproses dan kami ajukan kepada klien untuk wawancara lanjutan.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThreex5" aria-expanded="false" aria-controls="flush-collapseThreex5">
                                                          Bagaimana caranya lolos tahapan wawancara? 
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThreex5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Tentunya dengan mengembangkan lebih jauh kompetensimu, baik melalui keterampilan teknis (praktis) maupun keterampilan non-teknis, seperti etika dan mindset, rekruter dapat melihat nilai tambah yang kamu miliki. Untuk mengembangkan nilai-nilai praktis dan non-praktis, kamu bisa mengikuti pelatihan pengembangan calon karyawan yang diadakan oleh IniKarir! Tetap ikuti informasi pelatihan terbaru nanti ya 😊</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.faq 1 -->

                               

                                <div id="faq2" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                           Produk apa saja yang di miliki oleh IniKarir?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">IniKarir memiliki produk layanan Job Portal, Headhunter, CV Hunter, Coaching, Counseling, Training dan Career Develompent (Nasional dan Internasional).
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Apa nama Website Job Portal IniKarir?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Untuk mengakses job portal IniKarir silakan klik link https://inikarir.com</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                        IniKarir Perusahaan bergerak dibidang apa?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">PT IniKarir Gantari Buwana merupakan perusahaan Sumber Daya Manusia yang memiliki keahlian dalam mencari dan menghubungkan tenaga kerja ke berbagai perusahaan di seluruh Indonesia. 
                                                        Kami adalah mitra solusi bagi perusahaan dalam memenuhi kebutuhan tenaga kerja yang tidak hanya memiliki perilaku yang baik, tetapi juga mahir dalam bidangnya.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree4" aria-expanded="false" aria-controls="flush-collapseThree4">
                                                        Bagaimana cara memasang lowongan kerja di Job Portal IniKarir?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThree4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Perusahaan bisa memasang lowongan kerja dengan cara mendaftar akun Perusahaan/sign up terlebih dahulu di website.  </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree5" aria-expanded="false" aria-controls="flush-collapseThree5">
                                                        Apakah posting lowongan kerja di Job Portal IniKarir?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThree5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Kami sedang ada free trial untuk Job Posting selama 1 bulan secara gratis. 1 Perusahaan bisa posting maksimal 3 lowongan kerja yang sedang dicari.  </div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->

                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExamplex">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnex" aria-expanded="false" aria-controls="flush-collapseOnex">
                                                            Setelah 1 bulan gratis, apakah dipungut biaya?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOnex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Setelah 1 bulan gratis, kami berbayar kak, untuk informasi lebih lanjut bisa hubungi kak Alina ya di nomor berikut (+62)811-9981-880.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwox" aria-expanded="false" aria-controls="flush-collapseTwox">
                                                            Apa itu layanan Headhunter?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwox" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Kami mempunyai layanan headhunter, dimana kami bisa membantu Perusahaan dalam kesulitan mencari kandidat yang sesuai di beberapa posisi 
                                                        mulai dari Staff, Supervisor, hingga Manager. Kami akan merekomendasikan 3 kandidat yang terbaik di setiap level.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThreex" aria-expanded="false" aria-controls="flush-collapseThreex">
                                                            Apa itu layanan CV Hunter?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThreex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Layanan CV Hunter yaitu kami merekomendasikan 3 CV terbaik yang telah tim kami proses di setiap posisi yang diminta oleh klien.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThreex4" aria-expanded="false" aria-controls="flush-collapseThreex4">
                                                            Jika kandidat keluar kerja / resign dari Perusahaan apakah ada garansi yang diberikan oleh IniKarir?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThreex4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Ya, kami memberikan garansi selama 1 bulan dan 3 bulan. Tergantung dari paket jasa yang Perusahaan anda pilih.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThreex5" aria-expanded="false" aria-controls="flush-collapseThreex5">
                                                            Perusahaan dari sektor mana saja yang pernah bermitra dengan IniKarir?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThreex5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Berikut segmen-segmen Perusahaan yang pernah bekerja sama dengan IniKarir: Pendidikan, F&B, Kesehatan,
                                                        Logistik, Percetakan, IT, Konstruksi alat berat, Manufaktur (Otomotif), Retail, UMKM.</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.faq 3 -->

                             
                            </div> <!-- /.accordion -->
                        </div> <!-- /.container -->
                    </section> <!-- /.hero-faq -->
                </div> <!-- /.section -->
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
                                        <input type="email" class="form-control" placeholder="Enter Email Address ..">
                                        <button type="button" class="btn btn-primary fw-bold position-absolute text-sm">Connect</button>
                                    </div> <!-- /.relative position -->
                                </form> <!-- /.newsletter form -->
                            </div> <!-- /.footer-menu-block -->

                            <div class="footer-menu-block mt-4 mt-lg-5 mb-4 mb-lg-0">
                                <div class="d-flex align-items-center">
                                    <div class="block">
                                        <a href="#" class="block footer-logo">
                                            <img src="./assets/images/logo.png" alt="IniKarir Logo">
                                        </a>
                                    </div>

                                    <div class="block text-xs ps-3">
                                   
                                        <p class="text-muted mb-1">Address :</p>
                                         <p class="text-muted mb-1">PT. IniKarir Gantari Buwana </p>
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
                                            <div class="block text-xs">+62-811-207-666</div>
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
                            <a href="#"><img src="./assets/images/Twitter Icon.png" alt="Twiter Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/Instagram Icon.png" alt="Instagram Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/Facebook Icon.png" alt="Facebook Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/LinkedIn Icon.png" alt="LinkedIn Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/Tiktok.png" alt="Tiktok Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/Youtube.png" alt="Youtube Icon"></a>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="./assets/vendor/fullpage/fullpage.min.js"></script>
        <script src="./assets/js/functions.js"></script>
    </body>
</html>
