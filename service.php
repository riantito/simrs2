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
        <h1 class="display-3 text-white animated zoomIn">Services</h1>
        <a href="" class="h4 text-white">Home</a>
        <i class="far fa-circle text-white px-2"></i>
        <a href="" class="h4 text-white">Layanan</a>
      </div>
    </div>
  </div>
  <!-- Hero End -->

  <!-- Service Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row g-5 mb-5">
        <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px">
          <img class="posotion-absolute w-100 h-100" src="img/dokter.jpg" />
          <!-- <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
              <img class="position-absolute w-100 h-100" src="img/before.jpg" style="object-fit: cover" />
              <img class="position-absolute w-100 h-100" src="img/after.jpg" style="object-fit: cover" />
            </div> -->
        </div>
        <div class="col-lg-7">
          <div class="section-title mb-5">
            <h5 class="position-relative d-inline-block text-primary text-uppercase">Layanan Kami</h5>
            <h1 class="display-5 mb-0">Beberapa pelayanan yang ada di RSUD Budhi Asih</h1>
          </div>
          <div class="row g-5">
            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
              <div class="rounded-top overflow-hidden">
                <img class="img-fluid" src="img/igd.jpg" />
              </div>
              <div class="position-relative bg-light rounded-bottom text-center p-4">
                <h5 class="m-0">Instalasi Gawat Darurat</h5>
              </div>
            </div>
            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
              <div class="rounded-top overflow-hidden">
                <img class="img-fluid" src="img/mcu.jpg" />
              </div>
              <div class="position-relative bg-light rounded-bottom text-center p-4">
                <h5 class="m-0">Medical Check Up</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-7">
          <div class="row g-5">
            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
              <div class="rounded-top overflow-hidden">
                <img class="img-fluid" src="img/lab.jpg" alt="" />
              </div>
              <div class="position-relative bg-light rounded-bottom text-center p-4">
                <h5 class="m-0">Labolatorium</h5>
              </div>
            </div>
            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
              <div class="rounded-top overflow-hidden">
                <img class="img-fluid" src="img/service-4.jpg" alt="" />
              </div>
              <div class="position-relative bg-light rounded-bottom text-center p-4">
                <h5 class="m-0">Poli Gigi</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
          <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
            <h3 class="text-white mb-3">Keadaan Darurat</h3>
            <p class="text-white mb-3">Hubungi nomor berikut untuk mendapatkan pelayanan darurat</p>
            <h2 class="text-white mb-0">021-8090282</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- Newsletter Start -->
  <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1">
    <div class="container">
      <div class="bg-color: #fff">
      </div>
    </div>
  </div>
  <!-- Newsletter End -->
</body>

</html>
<?php include('includes/footer.php'); ?>