<?php 
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    


<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>smkn3su</title>
    <link rel="website icon" type="png" href="gambar/smkn3su-removebg-preview(1).png">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Playfair+Display:wght@500&family=Work+Sans&display=swap"
      rel="stylesheet"
    />
    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
     <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

 

    

    <link rel="stylesheet" href="<?php echo url_dasar()?>/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

 <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

      <!-- Font Awesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
</head>
<body>




    <!-- Font Awesome CDN -->
   <div class="navbar"><nav>
        
        <div class="wrapper">
            <div class="logo">
             <a href="index.php"><img class="logo" border="0" src="gambar/smkn3su.jpg" width="60px" style="margin: 2px; padding: 0px" alt="" class="img-fluid"><a href='<?php echo url_dasar()?>'><h6>Smkn3su</h6></a></a>
          
            </div>
            
            <div class="menu">
                <ul data-aos="fade-down" data-aos-duration="1000">
                    <li><a href="index.php" class="bi bi-house-door">Home</a></li>
                    <li><a href="<?php echo url_dasar()?>#pendidik" class="bi bi-person-badge">Pendidik</a></li>                    
                    <li><a href="<?php echo url_dasar()?>#partnership" class="bi bi-hand-thumbs-up">Partnership</a></li>
                    <li><a href="<?php echo url_dasar()?>#galeri" class="bi bi-claude">Galeri</a></li>

                    <li><a href="<?php echo url_dasar()?>#contact" class="bi bi-person-rolodex">Contact</a></li>
                    <li><a href="berita.php" class="bi bi-claude">Berita</a></li>
                    <li><a href="login.php" class="tbl-biru bi bi-house-lock" target="_blank"></a></li>
                </ul>
            </div>
        </div>
</nav>
</body>   <div class="wrapper">
   
 

<!-- untuk home -->
 <div class="wrapper">
        <section id="home">
            <img src="<?php echo ambil_gambar('9')?>"/>
            <div class="kolom" data-aos="fade-up" data-aos-duration="1000">
                <p class="deskripsi"><?php echo ambil_kutipan('6') ?></p>
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?php echo ambil_judul('6') ?></h2>
                <?php echo maximum_kata(ambil_isi('6'),30) ?>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600"><a href="<?php echo buat_link_halaman('6')?>" class="tbl-pink">Halaman lebih lanjut</a></p>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom" data-aos="fade-up" data-aos-duration="1000">
                <p class="deskripsi"><?php echo ambil_kutipan('7') ?></p>
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?php echo ambil_judul('7') ?></h2>
                <?php echo maximum_kata(ambil_isi('7'),30) ?>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600"><a href="<?php echo buat_link_halaman('7')?>" class="tbl-biru">Halaman lebih lanjut</a></p>
            </div>
            <img src="<?php echo ambil_gambar('7')?>"/>
        </section>

        <!-- untuk wakil kepala -->
        <section id="pendidik">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi"><h2 data-aos="fade-up" data-aos-duration="1000">Pendidik Dan Tenaga Kependidikan</h2>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Wakil Kepala Sekolah (Wakasek) adalah pejabat yang membantu Kepala Sekolah dalam merencanakan, melaksanakan, dan mengevaluasi semua kegiatan sekolah. Tugasnya berfokus pada bidang-bidang tertentu seperti Kurikulum, Kesiswaan, Sarana dan Prasarana, serta Hubungan Masyarakat (Humas).</p></p>
                    
                </div>

                <div class="tutor-list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <?php
                        $sql1   ="select * from wakilkepala order by id desc";
                        $q1     = mysqli_query($koneksi,$sql1);
                        while ($r1 = mysqli_fetch_array($q1)) {
                    ?>
                        <div class="kartu-tutor" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            
                            <a href="<?php echo buat_link_waka($r1['id'])?>">
                             <img src="<?php echo url_dasar()."/gambar/".wakil_kepala($r1['id'])?>"/>
                             <p><b><?php echo $r1['nama']?></b><br><?php echo $r1['jabatan']?></br></p>
                             
                            </a>
                         </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- untuk guru -->
        <section id="tenaga_pendidik">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi"><h2 data-aos="fade-up" data-aos-duration="1000">Pendidik</h2>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Pendidik dan tenaga pendidik tak jarang diartikan sama oleh banyak orang. Keduanya bisa dibilang sebagai pemegang faktor keberhasilan pendidikan di Indonesia. Apabila ingin pendidikan di sebuah negara menjadi maju maka tentunya membutuhkan pendidik dan tenaga pendidik yang memiliki kualitas SDM yang tinggi.</p></p>
                    
                </div>

                <div class="tutor-list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <?php
                        $sql1   ="select * from guru order by id desc";
                        $q1     = mysqli_query($koneksi,$sql1);
                        while ($r1 = mysqli_fetch_array($q1)) {
                    ?>
                        <div class="kartu-tutor" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            
                            <a href="<?php echo buat_link_guru($r1['id'])?>">
                             <img src="<?php echo url_dasar()."/gambar/".tenaga_pendidik($r1['id'])?>"/>
                             <p><?php echo $r1['nama']?></p>
                            </a>
                         </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- untuk guru -->
        <section id="tata_usaha">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi"><h2 data-aos="fade-up" data-aos-duration="1000">Tenaga Kependidikan</h2>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">"Tenaga Kependidikan" yang mengacu pada kelompok profesional yang bekerja di lembaga pendidikan, seperti madrasah, perguruan tinggi, atau lembaga lainnya. Tendik bertanggung jawab atas berbagai tugas administratif, teknis, dan dukungan yang mendukung operasional pendidikan.</p></p>
                    
                </div>

                <div class="tutor-list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <?php
                        $sql1   ="select * from tatausaha order by id desc";
                        $q1     = mysqli_query($koneksi,$sql1);
                        while ($r1 = mysqli_fetch_array($q1)) {
                    ?>
                        <div class="kartu-tutor" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            
                            <a href="<?php echo buat_link_tatausaha($r1['id'])?>">
                             <img src="<?php echo url_dasar()."/gambar/".tata_usaha($r1['id'])?>"/>
                             <p><?php echo $r1['nama']?><br><b><?php echo $r1['jabatan']?></br></b></p>
                            </a>
                            
                         </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
       
        
        <!-- untuk partners -->
        <section id="partnership">
            <div class="right">
                <div class="kolom">
                     
                    <p><h2 data-aos="fade-up" data-aos-duration="1000">Partnership</h2><p class="deskripsi" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Selamat datang di Partnership Negasu</p>Perluas relasi untuk membuka peluang kedepannya kemitraan atau persekutuan adalah bentuk kerja sama yang melibatkan dua pihak atau lebih untuk mencapai tujuan bersama, di mana setiap pihak berkontribusi sumber daya, membagi tanggung jawab, keuntungan, serta risiko bisnis. Hubungan ini bisa formal, misalnya melalui perjanjian tertulis, atau informal, dan umumnya bertujuan untuk meningkatkan kemampuan, keuntungan, serta memanfaatkan keahlian dan sumber daya masing-masing mitra.</p>
                </div>

                <div class="partner-list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <?php
                    $sql1 = "select * from partnership order by id asc";
                    $q1 = mysqli_query ($koneksi,$sql1);
                    while ($r1 = mysqli_fetch_assoc($q1)) {
                        ?>
                        <div class="kartu-partner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <a href="<?php echo buat_link_partnership($r1['id'])?>">
                        <img src="<?php echo url_dasar()."/gambar/".partnership($r1['id'])?>"/>
                    </a>
                        </div>
                        <?php
                        
                    }
                    ?>

                    
                </div>
            </div>
        </section>


         <!-- untuk galeri -->
        <section id="galeri">
            <div class="right">
                <div class="kolom">
                     
                    <p><h2 data-aos="fade-up" data-aos-duration="1000">Galeri</h2><p class="deskripsi" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Selamat datang di Galeri Kegiatan Negasu</p>Di sini, kami mempersembahkan momen-momen yang merefleksikan dedikasi kami dalam meningkatkan tata kelola kegiatan. Setiap foto, setiap narasi, adalah representasi dari upaya kami dalam mewujudkan transparansi, integritas, dan keunggulan dalam setiap langkah. Kami mengundang Anda untuk menjelajahi galeri ini, di mana gambar-gambar ini bukan hanya sekadar dokumentasi, tetapi cerminan dari komitmen kami dalam memajukan proses pengadaan publik. Inilah rekaman visual dari dedikasi kami untuk menciptakan lingkungan yang lebih baik bagi semua pihak terlibat. Mari bersama-sama merayakan setiap langkah maju yang kami capai melalui Galeri Kegiatan Negasu ini.</p>
                </div>

                <div class="partner-list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <?php
                    $sql1 = "select * from galeri order by id asc";
                    $q1 = mysqli_query ($koneksi,$sql1);
                    while ($r1 = mysqli_fetch_assoc($q1)) {
                        ?>
                        <div class="kartu-partner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            
                            <a href="<?php echo buat_link_galeri($r1['id'])?>">
                        <img src="<?php echo url_dasar()."../uploads/galeri/".galeri($r1['id'])?>"/>
                    </a>
                        </div>
                        <?php
                        
                    }
                    ?>

                    
                </div>
            </div>
        </section>

     
	</div>

 <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
          <div class="tengah">
          <div class="text-center">
            <h3>Hubungi Customer Support</h3>
            <p>Mohon menyertakan informasi detail terkait kendala yang dialami. Dengan begitu, Customer Support kami bisa mencari solusi secepat mungkin</p>
            <a class="cta-btn" href="https://api.whatsapp.com/send?phone=6281288369394" target="_blank">Send Message</a>
          </div>
        </div>
      </section>
      <!-- End Cta Section -->


<!-- Contact Maps -->
 
 <div class="contact_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="contact_taital">
            <span style="color: #ffa706"> Maps</span> <span style="color: #1778F2">SMKN3SU</span>
            </h3>
          </div>
        </div>
       
            <div class="col-md-6">
              <div class="map_main">
                <div class="map-responsive">
                  <iframe
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=SMK+NEGERI+3+SUKATANI"
                    width="600"
                    height="368"
                    frameborder="0"
                    style="border: 0; width: 100%"
                    allowfullscreen=""
                  ></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Contact Maps -->


<!-- Halaman Footer -->

<footer></div>

    <div id="contact">
        <div class="wrapper">




        
            <div class="footer">
              <h2> <span style="color: #DAA520">smkn3su@sch.id</span></h2><p><img class="logo" border="0" src="gambar/smkn3su-removebg-preview(1).png" width="90px" style="margin: 2px; padding: 0px" alt="" class="img-fluid"></p>
                <div class="footer-section">
                    <div class="card">
    
  </div>
                    <b><p>adalah</b> "Meniti Langkah Gemilang Generasi Yang Cerdas,Tangguh Dan Berkarakter".</p>
                <div class="social">
                      <a href="#"><i class="bi bi-twitter"></i></a>
                      <a href="#"><i class="bi bi-facebook"></i></a>
                      <a href="https://instagram.com/smkn3su" target="_blank"><i class="bi bi-instagram"></i></a>
                      <a href="https://api.whatsapp.com/send?phone=6287782200111" target="_blank"><i class="bi bi-whatsapp"></i></a>
                      <a href="#" target="_blank"><i class="bi bi-skype"></i></a>
                      <a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                      <a href="https://www.youtube.com/@smkn3sukatanipurwakarta605" target="_blank"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                
               
                <div class="footer-section">
                    <h4>Sarana dan Prasarana</h4>
                    <br>Luas Tanah	:	11.379 m2</br>
                    <br>Akses Internet	:	1-2.50 Mb</br>
                    <br> Sumber Listrik	:	PLN</br>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <p>JL. Desa Sukamaju Rt.002/001 Desa. Sukamaju 
                        kec. Sukatani Purwakarta Jawa Barat 41167</p>
                     <strong>Phone:</strong> +62 812 8836 9394<br />
                  <strong>Email:</strong>smkn3su@gmail.com<br />
 	                
                </div>
                <div class="footer-section">
                
                
              <h4>Pranala Luar</h4>
              
                <i class="bx bx-chevron-right"></i> <a href="https://www.kemdikbud.go.id" target="_blank">Kemdikbud RI</a>
                <i class="bx bx-chevron-right"></i> <a href="http://smk.kemdikbud.go.id" target="_blank">Direktorat SMK</a>
                <i class="bx bx-chevron-right"></i> <a href="https://gtk.belajar.kemendikdasmen.go.id/" target="_blank">Sim PKB</a>
                <i class="bx bx-chevron-right"></i> <a href="https://info.gtk.dikdasmen.go.id/" target="_blank">Info GTK</a>
                <i class="bx bx-chevron-right"></i> <a href="https://referensi.data.kemendikdasmen.go.id/" target="_blank">NPSN</a>
                <i class="bx bx-chevron-right"></i> <a href="https://nisn.data.kemdikbud.go.id" target="_blank">NISN</a></li>
                <i class="bx bx-chevron-right"></i> <a href="https://pddikti.kemdiktisaintek.go.id/" target="_blank">PDDikti</a></li>
              
            </div>
            <div class="wrapper">
            <div class="col-lg-2 col-md-6 footer-links"><p>
              <h4>Hubungi Customer Support</h4>
             <br> <a class="cta-btn" href="https://api.whatsapp.com/send?phone=6281288369394" target="_blank">Send Message</a> Mohon menyertakan informasi detail terkait kendala yang dialami. Dengan begitu, Customer Support kami bisa mencari solusi secepat mungkin.
                  </br> </p>
            </div>
        </div>
            </div>
        </div>
    </div>

    <body>
  
   

    <div id="copyright">
       
        <div class="wrapper">
            <b> Copyright</b><b> &copy; <?php echo date("Y");?>  </b>Smkn3SUKATANI
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
          Designed_by<a href="index.php">#DinamikaSarprasSmkn3su</a>
        </div>
    </div></footer>

    





    

      
 <!-- AOS -->
    
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<!-- AOS -->

 <!-- JS -->
 <!-- JS -->
<a href="index.php" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbwG-U_PIK5qZM1edUFDbyhhl6Ou-uCqu1mUdwUnpwLWmJyH-BGt2x2A0R6maX9SVUKd/exec'
      const form = document.forms['wpu-contact-form']
      const btnKirim = document.querySelector('.btn-kirim');
      const btnLoading = document.querySelector('.btn-loading');
      const myAlert = document.querySelector('.my-alert');
    
      form.addEventListener('submit', e => {
        e.preventDefault()
        // ketika tombol submit diklik
        // Tampilkan tombol loading hilangkan tombol kirim
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');

        

        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
          .then(response => {
            // tampilkan tombol kirim,Hilangkan tombol loading
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            // tampilkan alert
            myAlert.classList.toggle('d-none');
            // reset form
            form.reset();
            console.log('Success!', response)})
          .catch(error => console.error('Error!', error.message))
      })
    </script>

  </body>
</html> 