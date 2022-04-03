<?php 
        include("config.php");

        if(isset($_POST['regis'])){
            $str_query = "insert into msuser values('".$_POST["namaDepan"]."', '".$_POST["namaTengah"]."', '".$_POST["namaBelakang"]."', '".$_POST["tempatLahir"]."', '".$_POST["tanggalLahir"]."', '".$_POST["nik"]."', '".$_POST["wargaNegara"]."', '".$_POST["email"]."', '".$_POST["nohp"]."', '".$_POST["alamat"]."', '".$_POST["kodePos"]."', '".$_POST["username"]."', '".$_POST["pass1"]."', '".$_POST["fotoProfil"]."')";

            $query = mysqli_query($connection, $str_query);
            
        }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengelolaan Keuangan</title>
</head>
<body style="margin: 0%; background-color: #e5edeb;">
    <div>
        <h3 style="text-align: center;">Aplikasi Pengelolaan Keuangan</h3>
    </div>
    <div>
        <h1 style="text-align: center; padding-top: 4rem;">Selamat Datang di Aplikasi Pengelolaan Keuangan</h1>
    </div>

    <div style="display: flex; flex-direction: row; justify-content: center; margin-top: 3rem;">
        <div style="padding-right: 7rem;">
            <a href="./login.php">
                <button type="button" style="background-color: #99d6ed; height: 75px; width: 150px; border: 0px; font-size: 18pt;">
                    Login
                </button>
            </a>
            
        </div>
        <div>
            <a href="./register.php">
                <button type="button" style="background-color: #c6ed99; height: 75px; width: 150px; border: 0px; font-size: 18pt;">
                    Register
                </button>
            </a>
        </div>
    </div>


    <!-- <?php
        session_start();
        if(isset($_POST['regis'])){

            $namaDepan = $_POST['namaDepan'];
            $namaTengah = $_POST['namaTengah'];
            $namaBelakang = $_POST['namaBelakang'];
            $tempatLahir = $_POST['tempatLahir'];
            $tanggalLahir = $_POST['tanggalLahir'];
            $nik = $_POST['nik'];
            $wargaNegara = $_POST['wargaNegara'];
            $email = $_POST['email'];
            $nohp = $_POST['nohp'];
            $alamat = $_POST['alamat'];
            $kodePos = $_POST['kodePos'];
            $fotoProfil = $_POST['fotoProfil'];
            // $destination = "asset/" . $_FILES['fotoProfil'];
            // move_uploaded_file($fotoProfil, $destination);
            $username = $_POST['username'];
            $pass1 = $_POST['pass1'];
            $pass2 = $_POST['pass2'];

            $_SESSION["registNamaDepan"] = $namaDepan;
            $_SESSION["registNamaTengah"] = $namaTengah;
            $_SESSION["registNamaBelakang"] = $namaBelakang;
            $_SESSION["registTempatLahir"] = $tempatLahir;
            $_SESSION["registTanggalLahir"] = $tanggalLahir;
            $_SESSION["registNik"] = $nik;
            $_SESSION["registWargaNegara"] = $wargaNegara;
            $_SESSION["registEmail"] =  $email;
            $_SESSION["registNohp"] = $nohp;
            $_SESSION["registAlamat"] = $alamat;
            $_SESSION["registKodePos"] = $kodePos;
            $_SESSION["registFotoProfil"] = $fotoProfil;
            $_SESSION["registUsername"] = $username;
            $_SESSION["registPass1"] = $pass1;
            $_SESSION["registPass2"] = $pass2;



        }
    ?> -->

</body>
</html>