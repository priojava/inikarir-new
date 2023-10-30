<?php 
include "../configurasi/koneksi.php";
?>
<section id="hero-loker" class="hero-loker  align-items-center" style="background-image: url('../assets/images/Background-inikarir.png'); "><!-- min-vh-100 d-md-flex -->
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
                                                    src="../assets/images/inikarir-local.png"
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
                                                    src="../assets/images/inikarir-global.png"
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