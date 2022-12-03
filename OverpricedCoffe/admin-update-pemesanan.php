<?php
    session_start();
 
    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
    if(!empty($username) && ($role == "admin")) {
        
    }  else {
        header("Location: login.html");
    }
    
    require('koneksi.php');

    $id = $_GET['id_pemesanan'];

    $result = mysqli_query($conn, "SELECT * FROM tb_pemesanan WHERE id_pemesanan = $id");
    $event = [];

    $data = mysqli_fetch_assoc($result);

    while ($row = mysqli_fetch_assoc(($result))){
        $event[] = $row;
    }

    if (isset($_POST['tambah'])){
        $alamat = htmlspecialchars($_POST['address_user']);
        $no_telp = htmlspecialchars($_POST['phone_number_user']);

        $query = mysqli_query($conn, "UPDATE tb_pemesanan SET address_user = '$alamat', phone_number_user = '$no_telp' WHERE id_pemesanan = '$id'");
        if ($query) {
            echo "
                <script>
                    alert('Data Berhasil Diubah...');
                    document.location.href = 'admin-pemesanan.php';
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('Data Gagal Diubah...');
                    document.location.href = 'admin-pemesanan.php';
                </script>
            ";
        }
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
        <div class="form-order-container">
            <div class="form-order">
                <h1 class="form-order-title">UPDATE DATA PEMESANAN</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <p class="form-order-sub-title">Lokasi Acara</p>
                    <input class="form-order-element" name='address_user' type="text" value="<?php echo $data['address_user']; ?>" placeholder="Masukkan lokasi acara..."                               required>
                    <p class="form-order-sub-title">Nomor Telepon</p>
                    <input class="form-order-element" name='phone_number_user' type="number" value="<?php echo $data['phone_number_user']; ?>" placeholder="Masukkan nomor telepon..."                          required>
            <div class="form-button-order">
                <a href="admin-pemesanan.php" class='back-button-order'>Kembali</a>
                <input class='button-order' type='submit' name="tambah" value='Ubah'></a>
                </form>                      
            </div>
        </div>
    </section>

    <script type='text/javascript' src='js/script.js'></script>
</body>
</html>