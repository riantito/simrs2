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

  <!-- Hero Start -->
  <div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
      <div class="col-12 text-center">
        <h1 class="display-3 text-white animated zoomIn">Informasi Kamar</h1>
        <a href="" class="h4 text-white">Home</a>
        <i class="far fa-circle text-white px-2"></i>
        <a href="" class="h4 text-white">Informasi Kamar</a>
      </div>
    </div>
  </div>
  <!-- Hero End -->

  <!-- Pricing Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-5">
          <div class="section-title mb-4">
            <h5 class="position-relative d-inline-block text-primary text-uppercase">INFORMASI KAMAR</h5>
            <h1 class="display-5 mb-0">Informasi Kamar RSUD Budhi Asih</h1>
          </div>
          <p class="mb-4">
            Berikut adalah informasi ketersediaan kamar yg ada di RSUD Budhi Asih saat ini. </p>
          <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">Informasi lebih lanjut</h5>
          <h1 class="wow fadeInUp" data-wow-delay="0.6s">021 8090282</h1>
          <a href="ketersediaan.php" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">Cek Ketersediaan Kamar</a>
        </div>
        <div class="col-lg-7">
          <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
            <div class="price-item pb-4">
              <div class="position-relative">
                <img class="img-fluid rounded-top" src="img/bpjs1.jpg" alt="" />
                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2">
                  <h2 class="text-primary m-0">BPJS</h2>
                </div>
              </div>
              <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                <h4>Kelas 1</h4>
                <hr class="text-primary w-50 mx-auto mt-0" />
                <div class="d-flex justify-content-between mb-3"><span>Konsultasi Dokter</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-3"><span>Akomodasi/Kamar Perawatan</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>1 Kamar 1-2 Pasien</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>Ruangan AC</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>Toilet disetiap kamar</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>Obat-obatan</span><i class="fa fa-check text-primary pt-1"></i></div>
              </div>
            </div>
            <div class="price-item pb-4">
              <div class="position-relative">
                <img class="img-fluid rounded-top" src="img/bpjs2.jpg" alt="" />
                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2">
                  <h2 class="text-primary m-0">BPJS</h2>
                </div>
              </div>
              <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                <h4>Kelas 2</h4>
                <hr class="text-primary w-50 mx-auto mt-0" />
                <div class="d-flex justify-content-between mb-3"><span>Konsultasi Dokter</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-3"><span>Akomodasi/Kamar Perawatan</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-3"><span>1 Kamar 3-4 Pasien</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-3"><span>Ruangan AC</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>Toilet disetiap kamar</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>Obat-obatan</span><i class="fa fa-check text-primary pt-1"></i></div>
              </div>
            </div>
            <div class="price-item pb-4">
              <div class="position-relative">
                <img class="img-fluid rounded-top" src="img/bpjs3.jpg" alt="" />
                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2">
                  <h2 class="text-primary m-0">BPJS</h2>
                </div>
              </div>
              <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                <h4>Kelas 3</h4>
                <hr class="text-primary w-50 mx-auto mt-0" />
                <div class="d-flex justify-content-between mb-3"><span>Konsultasi Dokter</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-3"><span>Akomodasi/Kamar Perawatan</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>1 Kamar 6 Pasien</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>Ruangan AC</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>Toilet disetiap kamar</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>Obat-obatan</span><i class="fa fa-check text-primary pt-1"></i></div>
              </div>
            </div>
            <div class="price-item pb-4">
              <div class="position-relative">
                <img class="img-fluid rounded-top" src="img/vip.jpg" alt="" />
                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2">
                  <h2 class="text-primary m-0">UMUM</h2>
                </div>
              </div>
              <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                <h4>VIP</h4>
                <hr class="text-primary w-50 mx-auto mt-0" />
                <div class="d-flex justify-content-between mb-3"><span>Konsultasi Dokter</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-3"><span>Akomodasi/Kamar Perawatan</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>1 Kamar 1 Pasien</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>Ruangan AC & TV</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>Toilet & Kamar Mandi</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>Obat-obatan</span><i class="fa fa-check text-primary pt-1"></i></div>
                <div class="d-flex justify-content-between mb-2"><span>Ruang Tamu & Kulkas</span><i class="fa fa-check text-primary pt-1"></i></div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Pricing End -->
</body>

</html>
<?php include('includes/footer.php'); ?>