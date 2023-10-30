<!-- Bagian BLOG -->
<div class="section">
	<section id="hero-article" class="hero-article  align-items-center"><!-- min-vh-100 d-md-flex -->
		<div class="container">
			<div class="hero-article__heading d-flex w-100 position-relative mb-4">
				<h3 class="fw-bold fs-5">Now Trending</h3>
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

				<div class="hero-article__pagination hero-article__pagination-large position-absolute start-0 bottom-0"></div>
			</div> <!-- /.heading -->

			<div class="swiper hero-article__swiper-large">
				<div class="swiper-wrapper">
					
					<?php
					
                    include "configurasi/koneksi.php";

						$tampil_berita_now_tranding = mysqli_query($koneksi, "SELECT * FROM job_blog_cat_relation 
						JOIN job_blog_categories ON job_blog_cat_relation.category_id = job_blog_categories.id
						WHERE job_blog_cat_relation.category_id='11'
						ORDER BY job_blog_cat_relation.id ASC");
						
						while ($r=mysqli_fetch_array($tampil_berita_now_tranding)){
							
							$tampil_blog = mysqli_query($koneksi, "SELECT * FROM job_blog
							WHERE id ='$r[blog_id]'");
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
									<img src="../storage/blog/<?php echo $r2['image']; ?>" class="w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
								</div>
							</div>

							<div class="hero-article__item-date text-xs d-flex gap-2 mt-3">
								<span><?php echo $r['title']; ?></span>
								<span>&bull;</span>
								<span>1 Month Ago</span>
							</div>

							<h4 class="fw-bold fs-6 mt-2"><a href="https://inikarir.com/blog/<?php echo $idnya ?>/<?php echo $judulkecil ?>"><?php echo $r2['title']; ?></a></h4>
							<div class="text-xs text-muted mt-3">
								<p><?php echo $sub_kalimat_now_tranding; ?>. . . .</p>
							</div>
							<div class="mt-2 d-flex text-xs">
								<div class="text-muted"><?php echo $jumlah_waktu; ?> Min Read</div>
								<div class="ms-auto fw-semibold">
									<a href="#" class="text-dark text-decoration-none">Read Full &rarr;</a>
								</div>
							</div>
						</div> <!-- /.article item -->
					</div> <!-- /.slide item -->
					
					<?php
					  }
					?>
					
				</div> <!-- /.swiper wrapper -->
			</div> <!-- /.swiper -->
		</div> <!-- /.container -->
	</section> <!-- /.hero article -->
</div> <!-- /.section -->

<!-- End bagian BLOG -->

<div class="section">
	<section id="hero-article" class="hero-article hero-article-small pt-1">
		<div class="container">
			<div class="hero-article__heading d-flex w-100 position-relative mb-4">
				<h3 class="fw-bold fs-5">Short Reads</h3>
				<div class="hero-article__navigation d-flex gap-2 ms-auto">
					<div class="prev hero-article__small-prev d-flex align-items-center justify-content-center rounded-circle">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
						</svg>
					</div>

					<div class="next hero-article__small-next d-flex align-items-center justify-content-center rounded-circle">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
						</svg>
					</div>
				</div>

				<div class="hero-article__pagination hero-article__pagination-small position-absolute start-0 bottom-0"></div>
			</div> <!-- /.heading -->

			<div class="swiper hero-article__swiper-small">
				<div class="swiper-wrapper">
				
					<?php
						$tampil_berita_short_reads = mysqli_query($koneksi, "SELECT * FROM job_blog_cat_relation 
						JOIN job_blog_categories ON job_blog_cat_relation.category_id = job_blog_categories.id
						WHERE job_blog_cat_relation.category_id='13'
						ORDER BY job_blog_cat_relation.id ASC");
						
						while ($tbsr=mysqli_fetch_array($tampil_berita_short_reads)){
							
							$tampil_short_reads = mysqli_query($koneksi, "SELECT * FROM job_blog
							WHERE id ='$tbsr[blog_id]'");
							$tsr=mysqli_fetch_array($tampil_short_reads);
							
								$idnya = $tsr['id'];
							 $titleblog = $tsr['title'];
							 
							$title_name_new = strtolower($titleblog);
                              $judulkecil = str_replace(" ","-",$title_name_new);
                              
							//replace tag dalam kalimat
							$kalimatdireplace1 = strip_tags($tsr['description']);
							$sub_kalimat_short_reads = substr($kalimatdireplace1,0,50);
							
					?>
				
					<div class="swiper-slide">
						<div class="hero-article__item">
							<div class="d-flex">
								<div class="hero-article__item-image ratio ratio-16x9 position-relative">
									<div>
										<img src="../storage/blog/<?php echo $tsr['image']; ?>" class="rounded w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
									</div>
								</div>
							
								<div class="hero-article__item-content ps-3">
									<h4 class="fs-6 mb-1 fw-semibold"><a href="https://inikarir.com/blog/<?php echo $idnya ?>/<?php echo $judulkecil ?>"><?php echo $tsr['title']; ?></a></h4>
									<p class="m-0 text-xs text-muted"><?php echo $sub_kalimat_short_reads; ?> . . . .</p>
								</div>
							</div> <!-- /.flex -->
						</div> <!-- /.article item -->
					</div> <!-- /.slide item -->
					
					<?php
					  }
					?>
					
					
				</div> <!-- /.swiper wrapper -->
			</div> <!-- /.swiper -->
		</div> <!-- /.container -->
	</section> <!-- /.hero article -->
</div> <!-- /.section -->