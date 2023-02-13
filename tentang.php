<?php 
    //include "koneksi/fungsi.php";
    include "template/head.php";
    include "template/header.php"; 

?>
<main id="main">
    <?php 
        $sql = "SELECT * FROM profil"; 
        $profil = mysqli_query($koneksi, $sql);
        if (mysqli_num_rows($profil) > 0 ) {
            while ($data = mysqli_fetch_assoc($profil)) {
        
    ?>

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <!--div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>About</li>
          </ol>
        </div-->

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="?p=tentang" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2><?php echo $data["nama_perusahaan"]; ?></h2>
            <h3><?php echo $data["deskripsi"]; ?></h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
              <?php echo $data["tentang"]; ?>
            </p>
          </div>
        </div>

      </div>
      <?php }} ?>
    </section><!-- End About Us Section -->
