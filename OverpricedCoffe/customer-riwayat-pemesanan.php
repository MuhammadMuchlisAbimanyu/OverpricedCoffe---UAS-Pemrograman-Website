<?php
    session_start();
 
    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
    if(!empty($username) && ($role == "customer")) {
        
    }  else {
        header("Location: login.html");
    }
    
    require('koneksi.php');
    
    if(isset($_POST['cari'])){
        $keyword =  $_POST['keyword'];
        $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username LIKE '%$keyword%' OR nama LIKE '%$keyword%'");
    }else{
        $id_user = $_SESSION['id_user'];
        $result = mysqli_query($conn, "SELECT * FROM tb_pemesanan WHERE id_user = '$id_user'");
    }

    $pemesanan = [];

    while($row = mysqli_fetch_assoc($result)){
        $pemesanan[] = $row;
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
    <section class=''>
        <nav class="user-nav-index">
            <img src='image/logo.png'>
            <div class='user-nav-links' id="navLinks">
                <img src="image/cancel.png" id="user-icon-cancel" onclick="hideMenu()">
                <ul>
                    <li class="user-nav-bar"><a href='customer-pemesanan.php' class="user-nav-title">Order</a></li>
                    <li class="user-nav-bar"><a href='customer-riwayat-pemesanan.php' class="user-nav-title">Order History</a></li>
                    <li class="user-nav-bar"><a href='logout.php' class="user-nav-title">Logout</a></li>
                </ul>
            </div>
            <img src="image/bar.png" id="user-icon-bar" onclick="showMenu()">
        </nav>
    </section>
    <section class="user-content">
        <div class="user-table-container">
            <h1 class="user-title">RIWAYAT PEMESANAN</h1>
            <table class="user-table">
                <tr>
                    <th class="user-title-table">No</th>
                    <th class="user-title-table">Name Menu</th>
                    <th class="user-title-table">Price</th>
                    <th class="user-title-table">Address</th>
                    <th class="user-title-table">Note</th>
                    <th class="user-title-table">Status</th>
                    <th class="user-title-table">Payment</th>
                </tr>
                <?php $i = 1; foreach ($pemesanan as $tb_pemesanan): ?>
                <tr>
                    <td class="user-sub-title-table"><?php echo $i; ?></td>
                    <td class="user-sub-title-table"><?php echo $tb_pemesanan['name_menu']; ?></td>
                    <td class="user-sub-title-table">$<?php echo $tb_pemesanan['price_menu']; ?></td>
                    <td class="user-sub-title-table"><?php echo $tb_pemesanan['address_user']; ?></td>
                    <td class="user-sub-title-table"><?php echo $tb_pemesanan['note']; ?></td>
                    <td class="user-sub-title-table"><?php if($tb_pemesanan['status'] == "Unpaid"){
                        echo "<p class='user-sub-title-table-belum-bayar'>"."Unpaid"."</p>"; ?>
                        <td class="user-sub-title-table"> 
                            <a href="customer-konfirmasi-pemesanan.php?id_pemesanan=<?php echo $tb_pemesanan["id_pemesanan"]; ?>"><i class='bx bx-money'></i></a>
                        </td>
                    <?php }else{
                        echo "<p class='user-sub-title-table-sudah-bayar'>"."Paid"."</p>"; 

                        ?>
                        <td class="user-sub-title-table">
                            <a href="customer-riwayat-pemesanan.php" onclick="return alert('Anda sudah melakukan pembayaran untuk pemesanan ini...')"><i class='bx bx-money'></i></a>
                        </td>
                    <?php } ?>
                </tr>
                <?php $i++; endforeach; ?>
            </table>
        </div>
    </section>

    <script type='text/javascript' src='js/script.js'></script>
</body>
</html>