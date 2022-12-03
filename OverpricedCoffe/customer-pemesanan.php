<?php
    session_start();
 
    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
    if(!empty($username) && ($role == "customer")) {
        
    }  else {
        header("Location: login.html");
    }
    
    require('koneksi.php');

    $resultMenu = mysqli_query($conn, "SELECT * FROM tb_menu");

    $menu = [];

    while($rowMenu= mysqli_fetch_assoc($resultMenu)){
        $menu[] = $rowMenu;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>OVERPRICED COFFE</title>
    <link rel='icon' href='image/icon/logo.ico'>
    <link rel='stylesheet' href='css/style.css'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class='user-header-index'>
        <nav class="user-nav-index">
            <img src='image/logo.png'>
            <div class='user-nav-links-order' id="navLinks">
                <img src="image/cancel.png" id="user-icon-cancel" onclick="hideMenu()">
                <ul>
                    <li class="user-nav-bar"><a href='customer-pemesanan.php' class="user-nav-title">Order</a></li>
                    <li class="user-nav-bar"><a href='customer-riwayat-pemesanan.php' class="user-nav-title">Order History</a></li>
                    <li class="user-nav-bar"><a href='logout.php' class="user-nav-title">Logout</a></li>
                </ul>
            </div>
            <img src="image/bar.png" id="user-icon-bar" onclick="showMenu()">
        </nav>
        <div class="service-customer">
            <br><br><br>
            <p id="service-top"></p>  
            <div class='service-row'>
                <?php foreach ($menu as $tb_menu): ?>
                <div class='service-col'>
                    <div class="service-container">
                        <p class="service-content"><a href="customer-form-pemesanan.php?id_menu=<?php echo $tb_menu["id_menu"] ?>" name="pesan"><img src="img-menu/<?php echo $tb_menu['image_menu'] ?>" class="service-image" loading="lazy"></a></p>
                        <p class="service-sub-title"><b><?php echo $tb_menu['name_menu'] ?></b></p>
                        <p class="service-sub-title">$<?php echo $tb_menu['price_menu'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?> 
            <p id="service-bottom"></p>            
        </div>
    </section>

    <script type='text/javascript' src='js/script.js'></script>
</body>
</html>