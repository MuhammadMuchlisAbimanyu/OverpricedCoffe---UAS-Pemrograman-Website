<?php 
    session_start();
    
    if ($_SESSION['role'] == 'customer') {
        header("Location: customer.php");
    }
    else if ($_SESSION['role'] != 'admin') {
        header("Location: admin.php");
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
            <div class='user-nav-links' id="navLinks">
                <img src="image/cancel.png" id="user-icon-cancel" onclick="hideMenu()">
                <ul>
                <li class="user-nav-bar"><a href='admin-akun-user.php' class="user-nav-title">Manage Accounts</a></li>
                    <li class="user-nav-bar"><a href='admin-jenis-event.php' class="user-nav-title">Manage Menu</a></li>
                    <li class="user-nav-bar"><a href='admin-pemesanan.php' class="user-nav-title">Manage Order</a></li>
                    <li class="user-nav-bar"><a href='admin-pembayaran.php' class="user-nav-title">Manage Payment</a></li>
                    <li class="user-nav-bar"><a href='logout.php' class="user-nav-title">Logout</a></li>
                </ul>
            </div>
            <img src="image/bar.png" id="user-icon-bar" onclick="showMenu()">
        </nav>
        <div class='content-index'>
            <h1 class='user-title'>Hi! <?php echo $_SESSION['name_user'] ?></h1>
            <p class="user-sub-title"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla repellat ut laboriosam consequuntur molestiae numquam aliquid enim. Tempora maxime minus hic beatae, commodi veniam eveniet maiores nulla perspiciatis odit saepe. </p>
    </section>

    <script type='text/javascript' src='js/script.js'></script>
</body>
</html>