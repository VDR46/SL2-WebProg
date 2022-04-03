<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body style="margin: 0%; background-color: #c2f0f7;">
    <script src="./script.js"></script>
    <div style="text-align: center;">
        <h1>Register</h1>
    </div>

    <div style="display: flex; justify-content:center;">
        <form action="welcome.php" method="post" id="regis">
            <table>
                <tr style="padding-bottom:2rem;">
                    <td style="font-size: 14pt;">Nama Depan</td>
                    <td><input type="text" name="namaDepan" id="namaDepan"></td>
                    <td style="font-size: 14pt;">Nama Tengah</td>
                    <td><input type="text" name="namaTengah" id="namaTengah"></td>
                    <td style="font-size: 14pt;"> Nama Belakang</td>
                    <td><input type="text" name="namaBelakang" id="namaBelakang"></td>
                </tr>
                <br>
                <tr style="padding-bottom: 3rem;">
                    <td style="font-size: 14pt;">Tempat Lahir</td>
                    <td><input type="text" name="tempatLahir" id="tempatLahir"></td>
                    <td style="font-size: 14pt;">Tanggal Lahir</td>
                    <td><input type="date" name="tanggalLahir" id="tanggalLahir"></td>
                    <td style="font-size: 14pt;">NIK</td>
                    <td><input type="text" name="nik" id="nik"></td>
                </tr>
                <br>
                <tr>
                    <td style="font-size: 14pt;">Warga Negara</td>
                    <td><input type="text" name="wargaNegara" id="wargaNegara"></td>
                    <td style="font-size: 14pt;">Email</td>
                    <td><input type="text" name="email" id="email"></td>
                    <td style="font-size: 14pt;">No. HP</td>
                    <td><input type="text" name="nohp" id="nohp"></td>
                </tr>
                <br>
                <tr>
                    <td style="font-size: 14pt;">Alamat</td>
                    <td><input type="text" name="alamat" id="alamat"></td>
                    <td style="font-size: 14pt;">Kode Pos</td>
                    <td><input type="text" name="kodePos" id="kodePos"></td>
                    <td style="font-size: 14pt;">Foto Profil</td>
                    <td><input type="file" name="fotoProfil" id="fotoProfil"></td>
                </tr>
                <br>
                <tr>
                    <td style="font-size: 14pt;">Username</td>
                    <td><input type="text" name="username" id="username"></td>
                    <td style="font-size: 14pt;">Password 1</td>
                    <td><input type="password" name="pass1" id="pass1"></td>
                    <td style="font-size: 14pt;">Password 2</td>
                    <td><input type="password" name="pass2" id="pass2"></td>
                </tr>
                <br>
                <tr>
                    <td><input type="submit" value="Register" name="regis" style="font-size: 14pt; background-color: #adf59f;"></td>
                    <!-- <td><a href="./welcome.php"><button style="background-color: #fdd7ac; font-size:14pt;">Kembali</button></a></td> -->
                </tr>
            </table>
        </form>
    </div>
    <div style="display: flex; padding-left:170px;">
        <td><a href="./welcome.php"><button style="background-color: #fdd7ac; font-size:14pt;">Kembali</button></a></td>
    </div>
    

</body>
</html>
