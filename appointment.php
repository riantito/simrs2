<?php include('includes/navbar.php'); ?>

<body> <!-- Full Screen Search Start -->
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
        <h1 class="display-3 text-white animated zoomIn">Login</h1>
        <a href="" class="h4 text-white">Home</a>
        <i class="far fa-circle text-white px-2"></i>
        <a href="" class="h4 text-white">Login</a>
      </div>
    </div>
  </div>
  <!-- Hero End -->

  <!-- Newsletter Start -->
  <?php
  if (empty($_SESSION['noktp']))
  ?>
  <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1">
    <div class="container">
      <div class="bg-primary p-5">
        <form class="mx-auto" style="max-width: 600px" method="POST" action="action_login.php">
          <div class="input-group">
            <input type="text" class="form-control border-white p-3" placeholder="No. KTP" name="noktp" />
          </div><br>
          <div class="input-group">
            <input type="password" class="form-control border-white p-3" placeholder="Password" name="password" />
          </div><br>
          <div class="input-group">
            <button class="btn btn-dark px-4" position="align">Login</button>
            <p class="mb-md-0"> <a class="text-white mb-0"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                Silahkan Daftar! <a class="text-white border-bottom" href="signup.php" class="text-white mb-0"> Sign Up </a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Newsletter End -->
</body>

</html>
<?php include('includes/footer.php'); ?>