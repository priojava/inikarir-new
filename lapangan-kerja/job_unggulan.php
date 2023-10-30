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
                        <div class="swiper hero-loker-featured__slider-swiper pb-5 py-3 px-1">
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
                                                                                           job_product.id as  idnya,
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
                                            
                                            $idnya = $data['idnya'];
                                            $typenya = $data['title'];
                                           
                                            $gajimin = rupiah($data['salary_min']);
                                            $gajimax = rupiah($data['salary_max']);
                                            $alamat = $data['alamat'];
                                            $logo = $data['logo'];
                                            $product_name = $data['product_name'];
                                            
                                            $product_name_new = strtolower($product_name);
                                            $judullokerkecil = str_replace(" ","-",$product_name_new);
                                             $linkid = $product_name;
                                             
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
                                    <div class="hero-loker-featured__item p-2 p-lg-4">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 pe-2">
                                                <div class="d-flex">
                                                    <div class="hero-loker-featured__item-image position-relative">
                                                        <div class="ratio ratio-1x1">
                                                            <div>
                                                                <img src="../../storage/products/<?php echo $data['logo']; ?>" alt="Image" class="rounded w-100 h-100 position-absolute top-0 start-0 bottom-0 end-0">
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

                                            <div class="hero-job-featured__close-info text-center py-4 rounded">
                                                <div class="d-block d-flex flex-column h-100 w-100 py-4">
                                                    <div class="text-xs fw-bold">Ditutup dalam</div>
                                                    <div class="hero-job-featured__close-day font-bold text-site fs-1 fw-bold mt-auto"><?php echo $hari ?></div>
                                                    <div class="hero-job-featured__close-day-label text-xs text-muted text-uppercase mt-auto">Hari</div>
                                                    <div class="mt-auto">
                                                    
                                                        <a href="https://inikarir.com/job/<?php echo $idnya ?>/<?php echo $judullokerkecil ?>" class="btn btn-primary text-xs fw-bold d-block w-100 px-3 py-2">Daftar</a>
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