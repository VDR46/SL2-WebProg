<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body style="margin: 0%; background-color: #cad1ff;">
    <div style="background-color: #f9ffca; width:100%; display: flex; flex-direction: row; justify-content:space-between; padding-top:1rem; padding-bottom:1rem;">
        <div style=" padding-left:2rem;">
            <div style="font-size: 16pt;">Aplikasi Pengelolaan Keuangan</div>
        </div>
        <div style="display: flex; flex-direction:row; padding-right:2rem; justify-content:space-evenly;">
            <div style="padding-right: 3rem; font-size: 16pt;"><a href="home.php">Home</a></div>
            <div style="padding-right: 3rem; font-size: 16pt;"><a href="profile.php">Profile</a></div>
            <div style="padding-right: 3rem; font-size: 16pt;"><a href="editProfile.php">Edit Profile</a></div>
            <div style="font-size: 16pt;"><a href="./prosesLogOut.php">Log Out</a></div>
        </div>
    </div>

    <div style="display: flex; justify-content:center; padding-top:5rem;">
        <?php
            include("config.php");
            // session_start();
            // if(isset($_SESSION)){
            //     echo "<h2>Halo".' '.$_SESSION['registNamaDepan'].' '.$_SESSION['registNamaTengah'].' '.$_SESSION['registNamaBelakang'].", Selamat Datang di Aplikasi Pengelolaan Keuangan </h2>";
            // }
            session_start();
            if(isset($_GET['id'])){
                $str_query = "select*from msuser where username = '".$_GET['id']."'";
                $query = mysqli_query($connection, $str_query);

                $row = mysqli_fetch_array($query);

                $namaDepan = $row['namaDepan'];
                $namaTengah = $row['namaTengah'];
                $namaBelakang = $row['namaBelakang'];
                $tempatLahir = $row['tempatLahir'];
                $tanggalLahir = $row['tanggalLahir'];
                $nik = $row['nik'];
                $wargaNegara = $row['wargaNegara'];
                $email = $row['email'];
                $nohp = $row['nohp'];
                $alamat = $row['alamat'];
                $kodePos = $row['kodePos'];
                $fotoProfil = $row['fotoProfil'];
                // $destination = "asset/" . $_FILES['fotoProfil'];
                // move_uploaded_file($fotoProfil, $destination);
                $username = $row['username'];
                $pass = $row['Password'];
    
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
                $_SESSION["registPass1"] = $pass;

                echo "<h2>Halo".' '.$row['namaDepan'].' '.$row['namaTengah'].' '.$row['namaBelakang'].", Selamat Datang di Aplikasi Pengelolaan Keuangan </h2>";
            }
            else if(isset($_SESSION)){
                echo "<h2>Halo".' '.$_SESSION['registNamaDepan'].' '.$_SESSION['registNamaTengah'].' '.$_SESSION['registNamaBelakang'].", Selamat Datang di Aplikasi Pengelolaan Keuangan </h2>";
            }

        ?>
    </div>



</body>
</html>