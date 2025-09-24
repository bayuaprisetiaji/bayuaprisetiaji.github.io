<?php 
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    


<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smkn3su</title>
    
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
   
</head>
<body>
    <!-- Font Awesome CDN -->
    <nav>
        <div class="wrapper">
            <div class="logo">
             <a href="index.php"><img class="logo" border="0" src="gambar/smkn3su.jpg" width="60px" style="margin: 2px; padding: 0px" alt="" class="img-fluid"><a href='<?php echo url_dasar()?>'><h5>Smkn3su</h5></a></a>
          
            </div>
            <div class="menu">
                <ul data-aos="fade-down" data-aos-duration="1000">
                    <li><a href="<?php echo url_dasar()?>#home" class="bi bi-house-door">Home</a></li>
                    <li><a href="<?php echo url_dasar()?>#tenaga_pendidik" class="bi bi-person-badge">Pendidik</a></li>                    
                    <li><a href="<?php echo url_dasar()?>#partnership" class="bi bi-hand-thumbs-up">Partnership</a></li>
                    <li><a href="<?php echo url_dasar()?>#galeri" class="bi bi-claude">Galeri</a></li>
                    <li><a href="<?php echo url_dasar()?>#contact" class="bi bi-person-rolodex">Contact</a></li>
                    <li><a href="login.php" class="tbl-biru">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">


<!-- untuk home -->
     

        <!-- untuk courses -->
         <section id="galeri">
            <div class="right">
                <div class="kolom">
                     
                    <p><h2 data-aos="fade-up" data-aos-duration="1000">Galeri</h2><p class="deskripsi" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Perluas relasi untuk membuka peluang kedepannya</p>Partnership (kemitraan atau persekutuan) adalah bentuk kerja sama yang melibatkan dua pihak atau lebih untuk mencapai tujuan bersama, di mana setiap pihak berkontribusi sumber daya, membagi tanggung jawab, keuntungan, serta risiko bisnis. Hubungan ini bisa formal, misalnya melalui perjanjian tertulis, atau informal, dan umumnya bertujuan untuk meningkatkan kemampuan, keuntungan, serta memanfaatkan keahlian dan sumber daya masing-masing mitra.</p>
                </div>

                <div  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <?php
                    $sql1 = "select * from galeri order by id asc";
                    $q1 = mysqli_query ($koneksi,$sql1);
                    while ($r1 = mysqli_fetch_assoc($q1)) {
                        ?>
                        <div class="kartu-partner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            
                            <a href="<?php echo buat_link_galeri($r1['id'])?>">
                        <img src="<?php echo url_dasar()."/gambar/".galeri($r1['id'])?>"/>
                    </a>
                        </div>
                        <?php
                        
                    }
                    ?>

                    
                </div>
            </div>
        </section>

        <!-- untuk guru -->
       

       
        
        <!-- untuk partners -->
      


         <!-- untuk galeri -->
      
<!-- Halaman Footer -->

<footer></div>

    <div id="contact">
        <div class="wrapper">




        
            <div class="footer">
                <div class="footer-section">
                    <h4>Smkn3su.</h4>
                    <p>SELARAS,</p>
                </div>
               
                <div class="footer-section">
                    <h4>Sarana dan Prasarana</h4>
                    <br>Luas Tanah	:	11.379 m2</br>
                    <br>Akses Internet	:	1-2.50 Mb</br>
                    <br> Sumber Listrik	:	PLN</br>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <p>Jl. Desa Sukamaju, Sukatani Purwakarta Jawa Barat</p>
                    <p>Telepon	:	</p>
 	                <p>Email	:	smkn3sukatani2014@gmail.com</p>
 	                
                </div>
                <div class="footer-section">
                    <h4>Social</h4>
                    <p><b>YouTube:</b>Programming di Smkn3su</p>
                    
                </div>
               
        </div>
            </div>
        </div>
    </div>

    <body>
    <nav>
        
    </nav>
   

    <div id="copyright">
       
        <div class="wrapper">
            <b>copyright</b> I #Bidang Sarpras I SMKN 3 SUKATANI PURWAKARTA.<b> &copy; <?php echo date("Y");?></b>
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

</body>
</html> 