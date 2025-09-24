<?php include_once("inc_header.php")?>
<?php include 'header.php' ?>

<?php
$sukses = "";
$katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : "";
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1   = "select foto from wakilkepala where id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    @unlink("../gambar/".$r1['foto']);

    $sql1   = "delete from wakilkepala where id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses     = "Berhasil hapus data";
    }
}
?>
<h1>Halaman Admin Guru</h1>
<p>
    <a href="wakilkepala_input.php">
        <input type="button" class="btn btn-primary" value="Tambah Data Wakil Kepala" />
    </a>
</p>
<?php
if ($sukses) {
?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
<?php
}
?>
<form class="row g-3" method="get">
    <div class="col-auto">
        <input type="text" class="form-control" placeholder="Masukkan Nama Wakil Kepala" name="katakunci" value="<?php echo $katakunci ?>" />
    </div>
    <div class="col-auto">
        <input type="submit" name="cari" value="Cari Data" class="btn btn-secondary" />
    </div>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-1">No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th class="col-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sqltambahan = "";
        $per_halaman = 10;
        if ($katakunci != '') {
            $array_katakunci = explode(" ", $katakunci);
            for ($x = 0; $x < count($array_katakunci); $x++) {
                $sqlcari[] = "(nama like '%" . $array_katakunci[$x] . "%' or foto like '%" . $array_katakunci[$x] . "%' or isi like '%" . $array_katakunci[$x] . "%')";
            }
            $sqltambahan    = " where " . implode(" or ", $sqlcari);
        }
        $sql1   = "select * from wakilkepala $sqltambahan";
        $page   = isset($_GET['page'])?(int)$_GET['page']:1;
        $mulai  = ($page > 1) ? ($page * $per_halaman) - $per_halaman : 0;
        $q1     = mysqli_query($koneksi,$sql1);
        $total  = mysqli_num_rows($q1);
        $pages  = ceil($total / $per_halaman);
        $nomor  = $mulai + 1;
        $sql1   = $sql1." order by id desc limit $mulai,$per_halaman";

        $q1     = mysqli_query($koneksi, $sql1);
      
        while ($r1 = mysqli_fetch_array($q1)) {
        ?>
            <tr>
                <td><?php echo $nomor++ ?></td>
                
                <td><img src="../gambar/<?php echo wakil_kepala ($r1['id'])?>" style="max: height 100px;max: width 100px;"/></td>
                <td><?php echo $r1['nama'] ?></td>
                
                <td>
                    <a href="wakilkepala_input.php?id=<?php echo $r1['id']?>">
                        <span class="badge bg-warning text-dark">Edit</span>
                    </a>

                    <a href="wakilkepala.php?op=delete&id=<?php echo $r1['id'] ?>" onclick="return confirm('Apakah yakin mau hapus data bro?')">
                        <span class="badge bg-danger">Delete</span>
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>

<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php 
        $cari = isset($_GET['cari'])? $_GET['cari'] : "";

        for($i=1; $i <= $pages; $i++){
            ?>
            <li class="page-item">
                <a class="page-link" href="wakilkepala.php?katakunci=<?php echo $katakunci?>&cari=<?php echo $cari?>&page=<?php echo $i ?>"><?php echo $i ?></a>
            </li>
            <?php
        }
        ?>
    </ul>
</nav>
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
