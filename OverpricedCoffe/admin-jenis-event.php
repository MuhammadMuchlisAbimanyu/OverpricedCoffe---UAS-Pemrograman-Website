<?php
    session_start();
 
    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
    if(!empty($username) && ($role == "admin")) {
        
    }  else {
        header("Location: login.html");
    }
    
    require('koneksi.php');

    if(isset($_POST['cari'])){
        $keyword =  $_POST['keyword'];
        $result = mysqli_query($conn, "SELECT * FROM tb_menu WHERE name_menu LIKE '%$keyword%'");
    }else{
        $result = mysqli_query($conn, "SELECT * FROM tb_menu");
    }

    $menu = [];

    while($row = mysqli_fetch_assoc($result)){
        $menu[] = $row;
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
                    <li class="user-nav-bar"><a href='admin-akun-user.php' class="user-nav-title">Manage Accounts</a></li>
                    <li class="user-nav-bar"><a href='admin-jenis-event.php' class="user-nav-title">Manage Menu</a></li>
                    <li class="user-nav-bar"><a href='admin-pemesanan.php' class="user-nav-title">Manage Order</a></li>
                    <li class="user-nav-bar"><a href='admin-pembayaran.php' class="user-nav-title">Manage Payment</a></li>
                    <li class="user-nav-bar"><a href='logout.php' class="user-nav-title">Logout</a></li>
                </ul>
            </div>
            <img src="image/bar.png" id="user-icon-bar" onclick="showMenu()">
        </nav>
    </section>
    <section class="user-content">
        <div class="user-table-container">
        <h1 class="user-title">Data Menu</h1>
            <div class="input-search">
                <a href="admin-input-event.php"><i class='bx bxs-add-to-queue'></i></a><br>
                <form action="" method='POST'>
                    <table>
                        <tr>
                            <td><a href="admin-jenis-event.php"><i class='bx bx-arrow-back' ></i></a></td>
                            <td><input class="search-form-element" type="text" name="keyword" placeholder="Search Data..." required></td>
                            <td><button type='submit' name='cari'><i class='bx bx-search' ></i></button></td>
                        </tr>                
                    </table>    
                </form>
            </div>
            
            <table class="user-table">
                <tr>
                    <th class="user-title-table">No</th>
                    <th class="user-title-table-gambar">Image</th>
                    <th class="user-title-table">Name</th>
                    <th class="user-title-table">Price</th>
                    <th class="user-title-table">Action</th>
                </tr>
                <?php $i = 1; foreach ($menu as $tb_menu): ?>
                <tr>
                    <td class="user-sub-title-table"><?php echo $i; ?></td>
                    <td class="user-sub-title-table-gambar">
                        <img src="img-menu/<?= $tb_menu['image_menu']?>" loading="lazy"> <br> 
                    </td>
                    <td class="user-sub-title-table-kategori"><?php echo $tb_menu['name_menu']; ?></td>
                    <td class="user-sub-title-table">$<?php echo $tb_menu['price_menu']; ?></td>
                    <td class="user-sub-title-table"> 
                        <a href="admin-delete-event.php?id_menu=<?php echo $tb_menu["id_menu"]; ?>" onclick="return confirm('Yakin ingin Menghapus data ini?')" role='button'><i class='bx bxs-trash-alt'></i></a>
                        <a href="admin-update-event.php?id_menu=<?php echo $tb_menu["id_menu"]; ?>"> <i class='bx bxs-pencil'></i> </a>
                    </td>
                </tr>
                <?php $i++; endforeach; ?>
            </table>
        </div>
    </section>

    <script type='text/javascript' src='js/script.js'></script>
</body>
</html>