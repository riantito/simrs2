<?php include('includes/navbar.php'); ?>

<body>
  <!-- Full Screen Search Start -->
  <div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content" style="background: rgba(9, 30, 62, 0.7)">
        <div class="modal-header border-0">
          <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex align-items-center justify-content-center">
          <div class="input-group" style="max-width: 600px">
            <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword" />
            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Full Screen Search End -->

  <!-- Carousel Start -->
  <div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="img/budhi.png" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h5 class="text-white text-uppercase mb-3 animated slideInDown">RUMAH SAKIT UMUM DAERAH BUDHI ASIH</h5>
              <h1 class="display-1 text-white mb-md-4 animated zoomIn">RUMAH SEHAT UNTUK JAKARTA</h1>
              <a href="buatjanji.php" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">Buat Janji/Booking</a>&ensp;
              <a href="signup.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Daftar</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="img/carousel-2.jpg" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h5 class="text-white text-uppercase mb-3 animated slideInDown">RUMAH SAKIT UMUM DAERAH BUDHI ASIH</h5>
              <h1 class="display-1 text-white mb-md-4 animated zoomIn">MENUJU JAKARTA LEBIH SEHAT</h1>
              <a href="contact.php" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">Kontak Kami</a>
              <a href="ketersediaan.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Cek Ketersediaan Kamar</a>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->
  <!-- Appointment Start -->
  <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row gx-5">
        <div class="col-lg-6 py-5">
          <div class="py-5">
            <h1 class="display-5 text-white mb-4">Mengapa anda harus memilih Budhi Asih?</h1>
            <p class="text-white mb-0">
              Selain memiliki tenaga medis yang profesional, RSUD Budi Asih juga didukung dengan berbagai peralatan kesehatan yang sangat canggih. Beberapa diantaranya bahkan merupakan alat terbaru sehingga bisa kita simpulkan bahwa
              memang rumah sakit ini selalu mengikuti perkembangan zaman, khususnya di bidang kesehatan.
            </p>
          </div>
        </div>
        <!-- Newsletter Start -->
        <<div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1">
          <div class="container">
            <div class="bg-color: #fff">
            </div>
          </div>
      </div>
      <!-- Newsletter End -->
</body>

</html>

<?php include('includes/footer.php'); ?>