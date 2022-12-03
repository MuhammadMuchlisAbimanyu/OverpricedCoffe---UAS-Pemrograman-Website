<?php 
    session_start();
    
    require ('koneksi.php');
    
    if(isset($_POST['masuk'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $sql = "SELECT * FROM tb_user WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password']) && $username == $row['username'] ){
                $_SESSION['id_user'] = $row['id_user'];
                $_SESSION['username'] = $username;
                $_SESSION['name_user'] = $row['name_user'];
                $_SESSION['address_user'] = $row['address_user'];
                $_SESSION['email_user'] = $row['email_user'];
                $_SESSION['phone_number_user'] = $row['phone_number_user'];
                $_SESSION['role'] = $row['role'];
                header("Location: admin.php");
                die();
            }else{
                echo '<script type="text/JavaScript">
                alert("Username atau Password yang anda masukkan salah, silahkan coba lagi...");
                window.Location.href="login.html";
                </script>' ;
                require('login.html');
            }

        }else{
            echo '<script type="text/JavaScript">
            alert("Username atau Password yang anda masukkan salah, silahkan coba lagi...");
            window.Location.href="login.html";
            </script>' ;
            require('login.html');
        }
    }
?>