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
        <h1 class="display-3 text-white animated zoomIn">Sign Up</h1>
        <a href="" class="h4 text-white">Home</a>
        <i class="far fa-circle text-white px-2"></i>
        <a href="" class="h4 text-white">Daftar</a>
      </div>
    </div>
  </div>
  <!-- Hero End -->

  <!-- Newsletter Start -->
  <!-- coba -->

  </div>

  <!-- <form method="POST" enctype="multipart/form-data"> -->
  <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1">
    <div class="container">
      <div class="bg-primary p-5">
        <form class="mx-auto" style="max-width: 600px" method="post" action="action_signup.php">
          <div class="input-group">
            <input type="text" class="form-control border-white p-3" name="nama" placeholder="Nama" required>
          </div><br>
          <div class="input-group">
            <input type="text" class="form-control border-white p-3" name="noktp" placeholder="No. KTP" required>
          </div><br>
          <div class="input-group">
            <input type="text" class="form-control border-white p-3" name="nobpjs" placeholder="No. BPJS" required>
          </div><br>
          <div class="input-group">
            <input type="text" class="form-control border-white p-3" name="alamat" placeholder="Alamat" required>
          </div><br>
          <input type="radio" name="jk1" value="lakilaki"> Laki-Laki &emsp;
          <input type="radio" name="jk1" value="perempuan"> Perempuan<br><br>
          <div class="input-group">
            <input type="text" class="form-control border-white p-3" name="nohp" placeholder="No. Handphone" required>
          </div><br>
          <div class="input-group">
            <input type="password" class="form-control border-white p-3" name="password" placeholder="Password" required>
          </div><br>
          <div class="input-group">
            <button class="btn btn-dark px-4">Sign Up</button>
            <div class="text-center position-relative p-5 input-group">
              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="index.php" class="btn btn-dark py-3 px-5 me-3">Kembali ke halaman Utama</a>
            </div>
        </form>
      </div>
    </div>
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1">
      <div class="container">
      </div>
    </div>
    <!-- </form> -->
    <!-- Newsletter End -->
</body>

</html>
<?php include('includes/footer.php'); ?>