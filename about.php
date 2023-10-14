<?php include('includes/navbar.php'); ?>
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
      <h1 class="display-3 text-white animated zoomIn">About Us</h1>
      <a href="" class="h4 text-white">Home</a>
      <i class="far fa-circle text-white px-2"></i>
      <a href="" class="h4 text-white">About</a>
    </div>
  </div>
</div>
<!-- Hero End -->

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-7">
        <div class="section-title mb-4">
          <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
          <!-- <h1 class="display-5 mb-0">RSUD Budhi Asih</h1> -->
        </div>
        <h4 class="text-body fst-italic mb-4">VISI</h4>
        <p class="mb-4">"Mewujudkan Jakarta kota yang sehat sebagai simpul kemajuan kesehatan di Indonesia"</p>
        <h4 class="text-body fst-italic mb-4">MISI</h4>
        <p class="mb-4">Menyelenggarakan pelayanan kesehatan yang bermutu paripurna dan responsif</p>
        <p class="mb-4">Menyelenggarakan pelayanan kesehatan lanjutan dengan didukung sumber data yang memadai kompeten dan profesional</p>
        <p class="mb-4">Mengembangkan layanan unggulan</p>
        <p class="mb-4">Menyelenggarakan tempat pendidikan, pelatihan dan penelitian bagi tenaga kesehatan</p>
        <p class="mb-4">Menjadi tempat penyelenggaraan pelayanan yang mensejahterakan karyawan melalui peningkatan kinerja</p>

        <div class="row g-3">
          <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fasilitas Lengkap</h5>
            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Staff Professional</h5>
          </div>
          <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Buka 24/7</h5>
            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Terintegrasi</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-5" style="min-height: 500px">
        <div class="position-relative h-100">
          <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about3.jpg" style="object-fit: cover" />
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

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