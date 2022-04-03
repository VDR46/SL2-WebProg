<?php
    include("config.php");
    // session_start();
    // if(isset($_POST['login'])){
    //     if(isset($_SESSION)){
    //         if(($_POST['usernameLogin'] == $_SESSION['registUsername']) && ($_POST['passwordLogin'] == $_SESSION['registPass1']  || $_SESSION['registPass2'])){
    //             echo "Login Berhasil!";
    //             echo "<br/>";
    //             echo "<a href='home.php'> Klik di sini untuk lanjut </a>";
    //         }
    //         else{
    //             echo "Login Gagal!";
    //             echo "<br/>";
    //             echo "<a href='login.php'> Klik di sini untuk kembali </a>";
    //         }
    //     }
    // }

    if(isset($_POST['login'])){
        $str_query = "select*from msuser";
        $query = mysqli_query($connection, $str_query);

        $rowCount = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);

        for($x=0; $x<=$rowCount; $x++){
            if(($row['username'] == $_POST['usernameLogin']) && ($row['Password'] == $_POST['passwordLogin'])){
                echo "Login Berhasil!";
                echo "<br/>";
                echo "<a href='home.php?id=".$row['username']."'> Klik di sini untuk lanjut </a>";
                break;
            }
            else if(($x==$rowCount) && ($row['username'] != $_POST['usernameLogin']) && ($row['Password'] != $_POST['passwordLogin'])){
                echo "Login Gagal!";
                echo "<br/>";
                echo "<a href='login.php'> Klik di sini untuk kembali </a>";
            }
        }

        // while($row = mysqli_fetch_array($query)){
        //     if(($row['username'] == $_POST['usernameLogin']) && ($row['Password'] == $_POST['passwordLogin'])){
        //         echo "Login Berhasil!";
        //         echo "<br/>";
        //         echo "<a href='home.php'> Klik di sini untuk lanjut </a>";
        //     }
        //     else{
        //         echo "Login Gagal!";
        //         echo "<br/>";
        //         echo "<a href='login.php'> Klik di sini untuk kembali </a>";
        //     }
        // }

    } 



?>