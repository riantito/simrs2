<?php
    $nama = "";
    $noktp = "";
    $nobpjs = "";
    $alamat = "";
    $jk1 = "";
    $nohp = "";
    $password = "";
    $errors = array();

    // connect to the database

    $db = mysqli_connect('localhost', 'root', '', 'simrs2');
    echo "database connected";

    // if the register button is clicked

    $nama = $_POST['nama'];
    $noktp = $_POST['noktp'];
    $nobpjs = $_POST['nobpjs'];
    $alamat = $_POST['alamat'];
    $jk1 = $_POST['jk1'];
    $nohp = $_POST['nohp'];
    $password = $_POST['password'];
    echo "data is taken";

    // if there are no errors, save user to database

    $sql = "INSERT INTO regis(nama, noktp, nobpjs, alamat, jk1, nohp, password) VALUES('$nama', '$noktp', '$nobpjs', '$alamat', '$jk1', '$nohp', '$password')";
    mysqli_query($db, $sql);
    echo "<script>alert ('Anda telah berhasil mendaftar. Mohon tunggu.');
    window.location = 'appointment.php'</script>";
