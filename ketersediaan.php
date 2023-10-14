<?php include('includes/navbar.php'); ?>
<?php include('koneksi.php'); ?>

<body>
  <!-- Hero Start -->
  <div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
      <div class="col-12 text-center">
        <h1 class="display-3 text-white animated zoomIn">Ketersediaan Kamar</h1>
        <a href="" class="h4 text-white">Home</a>
        <i class="far fa-circle text-white px-2"></i>
        <a href="" class="h4 text-white">Ketersediaan Kamar</a>
      </div>
    </div>
  </div>
  <!-- Hero End -->
    <div class="container mt-5 bg-white py-5">
    <table id="example" class="display" style="width:100%">
        <table class="table table-striped table-hover table-bordered mt-3"> <br>
            <h3>Data Kamar</h3>
            <thead>
                <th>No</th>
                <th>Nama Kamar</th>
                <th>Jenis Kamar</th>
                <th>Kelas Kamar</th>
                <th>Terisi</th>
                <th>Kapasitas</th>
            </thead>

            <?php
            $sql = "SELECT * FROM kamar";
            $query = mysqli_query($conn, $sql);

            while ($data = mysqli_fetch_array($query)) {
                echo "
                <tbody>
                <tr>
                    <td>$data[id]</td>
                    <td>$data[namakamar]</td>
                    <td>$data[jeniskamar]</td>
                    <td>$data[kelaskamar]</td>
                    <td>$data[terisi]</td>
                    <td>$data[kapasitas]</td>

                          
                </tr>
            </tbody>
                ";
            };
            ?>
        </table>
    </div>
</body>

</html>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
<?php include('includes/footer.php'); ?>