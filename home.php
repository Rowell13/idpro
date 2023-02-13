<?php 
    include "koneksi/koneksi.php";
    
?>
        
        <section id="hero">
          <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

              <?php 
                $sql = "SELECT * FROM profil"; 
                $profil = mysqli_query($koneksi, $sql);
                if (mysqli_num_rows($profil) > 0 ) {
                  while ($data = mysqli_fetch_assoc($profil)) {
                
              ?>

              <!-- Slide 1 -->
              <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
                <div class="carousel-container">
                  <div class="carousel-content animate__animated animate__fadeInUp">
                    <h5><?php echo $data["nama_perusahaan"]; ?></h5>
                    <p><?php echo $data["tentang"];?></p>
                    <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                  </div>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
                <div class="carousel-container">
                  <div class="carousel-content animate__animated animate__fadeInUp">
                    <h2>Lorem Ipsum Dolor</h2>
                    <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                    <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                  </div>
                </div>
              </div>

              <!-- Slide 3 -->
              <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
                <div class="carousel-container">
                  <div class="carousel-content animate__animated animate__fadeInUp">
                    <h2>Sequi ea ut et est quaerat</h2>
                    <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                    <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                  </div>
                </div>
              </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

          </div>
        </section>

    <!--main id="main">


      <section id="about-us" class="about-us">
          <div class="container" data-aos="fade-up">

            <div class="row content">
              <div class="col-lg-6" data-aos="fade-right">
                <h2>Eum ipsam laborum deleniti velitena</h2>
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
            </div>

          </div>
        </section>

    </main-->
        
        <?php }}?>
 