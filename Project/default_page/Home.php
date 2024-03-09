



<?php 
    echo "INI HALAMAN HOME!!!";
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch ($page) {
            case 'Home':
                include "default_page/Home.php";
                break;
            case 'tentang':
                include "default_page/tentang.php";
                break;
            case 'kontak':
                include "halaman/kontak.php";
                break;			
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    }else{
        include "halaman/home.php";
    }  
?>