<?php 
    include("config.php");

    session_start();
    if(isset($_SESSION)){
        $str_query = "select*from msuser where nik = '".$_SESSION["registNik"]."'";
        $query = mysqli_query($connection, $str_query);
        $row = mysqli_fetch_array($query);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
</head>
<body style="margin: 0%; background-color: #c2f0f7;">
    <script src="./script.js"></script>
    <div style="text-align: center;">
        <h1>Edit Profil</h1>
    </div>

    <div style="display: flex; justify-content:center;">
        <form action="prosesEdit.php" method="post" id="">
            <table>
                <tr style="padding-bottom:2rem;">
                    <td style="font-size: 14pt;">Nama Depan</td>
                    <td><input type="text" name="namaDepan" id="namaDepan" value="<?php echo $row['namaDepan'];?>"></td>
                    <td style="font-size: 14pt;">Nama Tengah</td>
                    <td><input type="text" name="namaTengah" id="namaTengah" value="<?php echo $row['namaTengah'];?>"></td>
                    <td style="font-size: 14pt;"> Nama Belakang</td>
                    <td><input type="text" name="namaBelakang" id="namaBelakang" value="<?php echo $row['namaBelakang'];?>"></td>
                </tr>
                <br>
                <tr style="padding-bottom: 3rem;">
                    <td style="font-size: 14pt;">Tempat Lahir</td>
                    <td><input type="text" name="tempatLahir" id="tempatLahir" value="<?php echo $row['tempatLahir'];?>"></td>
                    <td style="font-size: 14pt;">Tanggal Lahir</td>
                    <td><input type="date" name="tanggalLahir" id="tanggalLahir" value="<?php echo $row['tanggalLahir'];?>"></td>
                    <td style="font-size: 14pt;">NIK</td>
                    <td><input type="text" name="nik" id="nik" value="<?php echo $row['nik'];?> readonly"></td>
                </tr>
                <br>
                <tr>
                    <td style="font-size: 14pt;">Warga Negara</td>
                    <td><input type="text" name="wargaNegara" id="wargaNegara" value="<?php echo $row['wargaNegara'];?>"></td>
                    <td style="font-size: 14pt;">Email</td>
                    <td><input type="text" name="email" id="email" value="<?php echo $row['email'];?>"></td>
                    <td style="font-size: 14pt;">No. HP</td>
                    <td><input type="text" name="nohp" id="nohp" value="<?php echo $row['nohp'];?>"></td>
                </tr>
                <br>
                <tr>
                    <td style="font-size: 14pt;">Alamat</td>
                    <td><input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat'];?>"></td>
                    <td style="font-size: 14pt;">Kode Pos</td>
                    <td><input type="text" name="kodePos" id="kodePos" value="<?php echo $row['kodePos'];?>"></td>
                </tr>
                <br>
                <tr>
                    <td style="font-size: 14pt;">Username</td>
                    <td><input type="text" name="username" id="username" value="<?php echo $row['username'];?>"></td>
                    <td style="font-size: 14pt;">Password</td>
                    <td><input type="password" name="password" id="password" value="<?php echo $row['Password'];?>"></td>
                </tr>
                <br>
                <tr>
                    <td><input type="submit" value="Edit" name="editProfil" style="font-size: 14pt; background-color: #adf59f;"></td>
                    <!-- <td><a href="./welcome.php"><button style="background-color: #fdd7ac; font-size:14pt;">Kembali</button></a></td> -->
                </tr>
            </table>
        </form>
    </div>
    <div style="display: flex; padding-left:170px;">
        <td><a href="home.php"><button style="background-color: #fdd7ac; font-size:14pt;">Kembali</button></a></td>
    </div>
    

</body>
</html>