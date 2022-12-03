<?php
    session_start();
 
    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
    if(!empty($username) && ($role == "customer")) {
        
    }  else {
        header("Location: login.html");
    }
    
    require('koneksi.php');

    if(isset($_POST['pesan'])) {
        $id_user = $_SESSION['id_user'];
        $name_menu = htmlspecialchars($_POST['name_menu']);
        $price = htmlspecialchars($_POST['price_menu']);
        $name_user = htmlspecialchars($_POST['name_user']);
        $address_user = htmlspecialchars($_POST['address_user']);
        $phone_number_user = htmlspecialchars($_POST['phone_number_user']);
        if($_POST['note'] == NULL){
            $note = "-";
        }else{
            $note = htmlspecialchars($_POST['note']);
        }
        $bank_accout = "-";
        $payment_slip = "-";
        $status = "Unpaid";
        
        $sql = "INSERT INTO tb_pemesanan VALUES ('', '$id_user', '$name_menu', '$price', '$name_user','$address_user', '$phone_number_user', '$note', '$bank_account', '$payment_slip','$status')";
        $result = mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0) {
            echo"
            <script>
                alert('Pemesanan Berhasil...');
                document.location.href = 'customer-riwayat-pemesanan.php';
            </script>";
        }else{
            echo"
            <script>
                alert('Pemesanan Gagal...');
                document.location.href = 'customer.php';
            </script>";
            }
        }

?>