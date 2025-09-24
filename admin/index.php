<?php 
session_start();
if(isset($_SESSION['admin_username'])!=''){
    header("location:index.php");
    exit();
}
?>



<?php include 'header.php' ?>



		<!-- content -->
		<div class="content">

			<div class="container">

				<div class="box">

					<div class="box-header">
						Dashboard
					</div>

					<div class="box-body">
						<h3>Hello, <?= $_SESSION['uname'] ?> di Panel Admin <?= $d->nama ?></h3>
						<br>
						 <p class="deskripsi"><h2 data-aos="fade-up" data-aos-duration="1000">Selamat Datang di N3GASU</h2>
						</br>
					<br>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Pemerintah melalui Instruksi Presiden Nomor 7 Tahun 2025 mendorong peningkatan kualitas sumber daya manusia melalui percepatan pelaksanaan pembagunan dan revitalisasi sekolah untuk pendidikan anak usia dini, pendidikan dasar, dan pendidikan menengah. Di dalamnya juga mendorong pembangunan dan pengelolaan Sekolah Menengah Atas (SMA) Unggul Garuda dan digitalisasi pembelajaran.</p></br>
                    <br>NPSN : 69849090</br>

<br>Status : Negeri</br>

<br>Bentuk Pendidikan : SMK</br>

<br>Status Kepemilikan : Pemerintah Daerah</br>

<br>SK Pendirian Sekolah : 421/Kep.505-Disdikpora/2014</br>

<br>Tanggal SK Pendirian : 2014-05-26</br>

<br>SK Izin Operasional : 420/2102/Dikmen/2014</br>

<br>Tanggal SK Izin Operasional : 2014-07-02</br>
					</div>
					
				</div>

			</div>





			

		</div>

<!-- Halaman Footer -->

<footer></div>

    <div id="contact">
        <div class="wrapper">




        
            <div class="footer">
               <h2>Smkn3su.</h2><p><b><h7>Smkn3su.</h7></p>
                <div class="footer-section">
                    <div class="card">
    
  </div>
                    <p>adalah</b> salah satu bentuk satuan pendidikan formal yang menyelenggarakan pendidikan kejuruan pada jenjang pendidikan menengah yang mempersiapkan peserta didik terutama untuk bekerja di bidang tertentu.</p>
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
                    <p>Telepon	:	081288369394</p>
 	                <p>Email	:	smkn3sukatani2014@gmail.com</p>
 	                
                </div>
                <div class="footer-section">
                    <h4>Social</h4>
                    <p>  <a href="http://www.twitter.com/smkn3su/" class="twitter"><i class="bx bxl-x"></i></a>

                    
                        <a href="https://www.facebook.com/NegasuPWK/" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/smkn3su" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.youtube.com/@smkn3sukatanipurwakarta605/" class="youtube"><i class="bx bxl-youtube"></i></a>
                        <a href="https://www.smkn3su.sch.id/" class="web"><i class="bx bx-globe"></i></a>
                    
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
            <b>Copyright</b><b> &copy; <?php echo date("Y");?></b>#DinamikaSarprasSmkn3su.
        </div>
    </div></footer>