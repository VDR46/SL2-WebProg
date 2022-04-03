<?php 
    include("config.php");

    session_start();
    if(isset($_POST['editProfil'])){

        $str_query = "update msuser set namaDepan= '".$_POST['namaDepan']."', namaTengah='".$_POST['namaTengah']."', namaBelakang='".$_POST['namaBelakang']."', tempatLahir='".$_POST['tempatLahir']."', tanggalLahir='".$_POST['tanggalLahir']."', wargaNegara='".$_POST['wargaNegara']."', email='".$_POST['email']."', nohp='".$_POST['nohp']."', alamat='".$_POST['alamat']."', kodePos='".$_POST['kodePos']."', username='".$_POST['username']."', Password='".$_POST['password']."' where nik='".$_POST['nik']."' ";

        $query = mysqli_query($connection, $str_query);


        if($query){
            header('location: home.php');
        }else{
            echo "gagal ". mysqli_error($connection);
        }

    }
?>