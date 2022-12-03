<?php
    session_start();
 
    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
    if(!empty($username) && ($role == "customer")) {
        
    }  else {
        header("Location: login.html");
    }
    
    require('koneksi.php');

    $id = $_GET['id_pemesanan'];

    $result = mysqli_query($conn, "SELECT * FROM tb_pemesanan WHERE id_pemesanan=$id");

    $event = [];

    while ($row = mysqli_fetch_assoc(($result))){
        $event[] = $row;
    }

    $jenisevent = $event[0];

    if (isset($_POST['bayar'])){
        $namafile = htmlspecialchars($_POST["name_user"]);
        $gambar = $_FILES["gambar"]["name"];
        $no_rekening = htmlspecialchars($_POST['account_bank']);

        $x = explode(".", $gambar);
        $extensi = strtolower(end($x));
        $gambar_baru = "paymentslip.$namafile.(id_pemesanan=$id).$extensi";
        $temp = $_FILES["gambar"]["tmp_name"];

        if (move_uploaded_file($temp, 'img-pembayaran/'. $gambar_baru)){
            $query = mysqli_query($conn, "UPDATE tb_pemesanan SET bank_account = '$no_rekening', payment_slip = '$gambar_baru', status = 'Paid' WHERE id_pemesanan = '$id'");
            if ($query) {
                echo "
                    <script>
                        alert('Bukti Pembayaran Anda Berhasil Dikirim...');
                        document.location.href = 'customer-riwayat-pemesanan.php';
                    </script>
                ";
            } else {
                echo error_log($query);
            }
        }
        else{
            echo "
                <script>
                    alert('Bukti Pembayaran Anda Gagal Dikirim...');
                    document.location.href = 'customer-riwayat-pemesanan.php';
                </script>
            ";
        }
    }
?>