<?php 
    session_start();
 
    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
    if(!empty($username) && ($role == "customer")) {
        
    }  else {
        header("Location: login.html");
    }
    
    require('koneksi.php');

    $id = $_GET['id_menu'];

    $result = mysqli_query($conn, "SELECT * FROM tb_menu WHERE id_menu = '$id'");

    while($row = mysqli_fetch_assoc($result)){
        $menu = $row;
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
            <div class='user-nav-links-form-order' id="navLinks">
                <img src="image/cancel.png" id="user-icon-cancel" onclick="hideMenu()">
                <ul>
                <ul>
                    <li class="user-nav-bar"><a href='customer-pemesanan.php' class="user-nav-title">Order</a></li>
                    <li class="user-nav-bar"><a href='customer-riwayat-pemesanan.php' class="user-nav-title">Order History</a></li>
                    <li class="user-nav-bar"><a href='logout.php' class="user-nav-title">Logout</a></li>
                </ul>
            </div>
            <img src="image/bar.png" id="user-icon-bar" onclick="showMenu()">
        </nav>
        <div class="form-order-container">
            <div class="form-order">
                <h1 class="user-title">Order Form</h1>
                <form action="pemesanan-proses.php" method="post">
                    <p class="form-order-sub-title">Name Menu</p>
                    <input class="form-order-element-readonly" name='name_menu' type="text" value="<?php echo $menu['name_menu'] ?>" readonly>
                    <p class="form-order-sub-title">Price ($)</p>
                    <input class="form-order-element-readonly" name='price_menu' type="number" value="<?php echo $menu['price_menu'] ?>" readonly>
                    <p class="form-order-sub-title">Customer Name</p>
                    <input class="form-order-element-readonly" name='name_user' type="text" value="<?php echo $_SESSION['name_user'] ?>" readonly>
                    <p class="form-order-sub-title">Customer Address</p>
                    <input class="form-order-element" name='address_user' type="text" placeholder="Enter your address..." value="<?php echo $_SESSION['address_user'] ?>" required>
                    <p class="form-order-sub-title">Customer Phone Number</p>
                    <input class="form-order-element" name='phone_number_user' type="number" placeholder="Enter your phone number..." value="<?php echo $_SESSION['phone_number_user'] ?>" required>
                    <p class="form-order-sub-title">Note</p>
                    <textarea class="form-order-element" name="note"></textarea>
            <div class="form-button-order">
                <a href="customer-pemesanan.php" class='back-button-order'>Back</a>
                <input class='button-order' type="submit" name="pesan" value="Order"> 
                </form>                      
            </div>
        </div>
    </section>

    <script type='text/javascript' src='js/script.js'></script>
</body>
</html>