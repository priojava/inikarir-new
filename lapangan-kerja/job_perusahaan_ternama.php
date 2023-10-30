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
                                           $perusahaan_name_new = strtolower($nama_perusahaan);
                                            $namakecil = str_replace(" ","-",$perusahaan_name_new);
                                            
                                        $result = mysqli_query($koneksi, "SELECT company_id  FROM job_product where status ='active' and company_id='$id' ");
                                       $rowcount=mysqli_num_rows($result);
                                
                                       
                          ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="hero-top-company__item shadow-sm p-3 rounded">
                                <div class="d-flex">
                                    <div class="hero-top-company__image">
                                        <div class="ratio ratio-1x1">
                                            <div>
                                                <img src="../../storage/products/<?php echo $data['logo']; ?>" alt="Image" class="rounded w-100 h-100 position-absolute top-0 start-0 bottom-0 end-0">
                                            </div>
                                        </div>
                                    </div> <!-- /.image -->

                                    <div class="hero-top-company__content ps-3">
                                     
                                        
                                        <div class="fw-bold fs-6">
                                            <a href="https://inikarir.com/company/<?php echo $id?>/<?php echo $namakecil?>" >
                                            <?php echo $nama_perusahaan ?>
                                            </a>
                                            
                                            </div>
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