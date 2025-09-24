

<?php 

include_once("inc_header.php");
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");



//http://localhost/website-company-profile/halaman.php/8/tetap-sehat-tetap-semangat
//print_r($_SERVER);
$id = dapatkan_id();

$sql1   = "select * from galeri where id = '$id'";
$q1     = mysqli_query($koneksi,$sql1);
$n1     = mysqli_num_rows($q1);
$r1     = mysqli_fetch_array($q1);

$keterangan  = $r1['keterangan'];
?>


<?php 
if($keterangan == ''){
    echo "<div><p>Maaf data yang kamu maksud tidak ditemukan :(</p></div>";
}else{
    ?>
    <style>
        .lokasi_foto {
            float: Left;
            width: 20%;
            margin-top: 20px;
        }
        .lokasi_foto img{
            width: 100%;
            border-radius: 50%;
        }
        .lokasi_deskripsi {
            margin-top: 20px;
            float: right;
            width: 75%;
        }
    </style>
    <div class="lokasi_foto">
        <img src="<?php echo url_dasar()."../uploads/galeri/".galeri($r1['id'])?>"/>
    </div>
    <div class="lokasi_deskripsi">
        <h1><?php echo $r1['keterangan']?></h1>
    
  
        
        
        <?php echo set_isi($r1['keterangan'])?>
    </div>
    <br style="clear: both"/>
    
    <?php
}
?>



<?php include_once("inc_footer.php")?>