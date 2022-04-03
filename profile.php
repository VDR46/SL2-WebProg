<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body style="margin: 0%; background-color: #cad1ff;">
    <div style="background-color: #f9ffca; width:100%; display: flex; flex-direction: row; justify-content:space-between; padding-top:1rem; padding-bottom:1rem;">
        <div style=" padding-left:2rem;">
            <div style="font-size: 16pt;">Aplikasi Pengelolaan Keuangan</div>
        </div>
        <div style="display: flex; flex-direction:row; padding-right:2rem; justify-content:space-evenly;">
            <div style="padding-right: 3rem; font-size: 16pt;"><a href="./home.php">Home</a></div>
            <div style="padding-right: 3rem; font-size: 16pt;"><a href="./profile.php">Profile</a></div>
            <div style="padding-right: 3rem; font-size: 16pt;"><a href="editProfile.php">Edit Profile</a></div>
            <div style="font-size: 16pt;"><a href="./prosesLogOut.php">Log Out</a></div>
        </div>
    </div>

    <div style="display: flex; justify-content:center;">
        <h2>Profil Pribadi</h2>
    </div>

    <div style="display:flex; padding-left:1rem; justify-content:center; font-size:16pt;">
        <?php
            session_start();
            if(isset($_SESSION)){
                echo "<table>";
                echo "<tr>";
                echo "<td> Nama Depan:".' '."</td>";
                echo "<td style='display:flex; padding-right:3rem;'>"."<b>".$_SESSION['registNamaDepan']."</b>"."</td>";
                echo "<td> Nama Tengah:".' '."</td>";
                echo "<td style='display:flex; padding-right:3rem;'>"."<b>".$_SESSION['registNamaTengah']."</b>"."</td>";
                echo "<td> Nama Belakang:".' '."</td>";
                echo "<td style='display:flex; padding-right:3rem;'>"."<b>".$_SESSION['registNamaBelakang']."</b>"."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td> Tempat Lahir: </td>";
                echo "<td style='display:flex; padding-right:3rem;'>"."<b>".$_SESSION['registTempatLahir']."</b>"."</td>";
                echo "<td> Tanggal Lahir: </td>";
                echo "<td style='display:flex; padding-right:3rem;'>"."<b>".$_SESSION['registTanggalLahir']."</b>"."</td>";
                echo "<td> NIK: </td>";
                echo "<td style='display:flex; padding-right:3rem;'>"."<b>".$_SESSION['registNik']."</b>"."</td>";
                echo "</tr>";


                echo "<tr>";
                echo "<td> Warga Negara: </td>";
                echo "<td style='display:flex; padding-right:3rem;'>"."<b>".$_SESSION['registWargaNegara']."</b>"."</td>";
                echo "<td> Email: </td>";
                echo "<td style='display:flex; padding-right:3rem;'>"."<b>".$_SESSION['registEmail']."</b>"."</td>";
                echo "<td> No HP: </td>";
                echo "<td style='display:flex; padding-right:3rem;'>"."<b>".$_SESSION['registNohp']."</b>"."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td> Alamat: </td>";
                echo "<td style='display:flex; padding-right:3rem;'>"."<b>".$_SESSION['registAlamat']."</b>"."</td>";
                echo "<td> Kode Pos: </td>";
                echo "<td style='display:flex; padding-right:3rem;'>"."<b>".$_SESSION['registKodePos']."</b>"."</td>";
                echo "<td> Foto Profil: </td>";
                echo "<td>"."<img src=",$_SESSION['registFotoProfil'],">"."</td>";
                echo "</tr>";
                echo "</table>";

            }
        ?>
    </div>

</body>
</html>