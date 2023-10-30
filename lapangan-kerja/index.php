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
        <title>IniKarir - Lapangan Kerja</title>

        <!-- Video.js base CSS -->
        <link rel="stylesheet" href="https://unpkg.com/video.js@7/dist/video-js.min.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,800;1,400;1,600;1,800&family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap-utilities.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicons/apple-touch-icon.png">
        <!--<link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon-32x32.png">-->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo.png">
        <link rel="manifest" href="../assets/favicons/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        
        <!-- Meta Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '175738268834947');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=175738268834947&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->
    </head>

    <body>
        <header id="header">
            <nav id="navbar" class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="https://inikarir.com/lapangan-kerja/">
                        <img src="../assets/images/logo.webp" alt="Ini Karir" />
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="container d-lg-flex px-0">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="https://inikarir.com/lapangan-kerja/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://inikarir.com/lapangan-kerja/layanan-kami.php">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.inikarir.com/lapangan-kerja/blog.php">Article</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#footer">Contact</a>
                                </li>
                            </ul>
                            
                            <div class="ms-auto">
                                <div class="header__cta d-flex gap-3 position-relative">
                                    <a href="https://www.inikarir.com/login" class="btn btn-outline-primary px-4 py-2">Log In</a>
                                    <a href="https://www.inikarir.com/signup" class="btn btn-primary px-4 py-2">Daftar</a>
                                </div> <!-- /.cta -->
                            </div>
                        </div>
                    </div> <!-- /.collapse menu -->
                </div> <!-- /.container -->
            </nav> <!-- /.nav -->
        </header> <!-- /.header -->

        <main id="main">
		
            <?php 
				include "job_hero.php";
				include "job_daftar_lowongan.php";
				include "job_unggulan.php";
				include "job_perusahaan_ternama.php";
				include "job_testimoni.php";
				include "job_faq.php";
			?>
			
        </main> <!-- /.main -->
		
			<?php 
				include "job_footer.php";
			?>

        <!-- Video.js -->
        <script src="https://vjs.zencdn.net/8.5.2/video.min.js"></script>
        
        <!-- JavaScripts -->
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="../assets/vendor/fullpage/fullpage.min.js"></script>
        <script src="../assets/js/functions.js"></script>
    </body>
</html>

<script type="text/javascript">

	function ButtonHero() {
	setTimeout(pindah_halaman, 400);
	}

	function pindah_halaman() {
	   window.location.href = "../";
	}

</script>
