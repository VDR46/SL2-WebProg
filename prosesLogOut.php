<?php
    session_start();
    if(isset($_SESSION)){
        echo "Berhasil Log Out";
        echo "<a href='welcome.php'> Klik di sini untuk lanjut </a>";
        session_destroy();
    }
?>