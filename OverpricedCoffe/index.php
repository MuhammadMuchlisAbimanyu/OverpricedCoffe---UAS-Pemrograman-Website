<?php

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
    <section class='header-index'>
        <nav class="nav-index">
            <a href='index.php' class="nav-title"> <img src='image/logo.png'> </a>
            <div class='nav-links' id="navLinks">
                <img src="image/cancel.png" id="icon-cancel" onclick="hideMenu()">
                <ul>
                    <!-- <span class="icon-side-bar"><i class='bx bx-home'></i></span> -->
                    <li class="nav-bar"><a href='index.php' class="nav-title">Home</a></li>
                    <li class="nav-bar"><a href='#slide-about' class="nav-title">About Us</a></li>
                    <li class="nav-bar"><a href='#slide-service' class="nav-title">Menu</a></li>
                    <li class="nav-bar"><a href='#slide-contact' class="nav-title">Contact</a></li>
                    <li class="nav-bar-reg-log">
                        <div class="nav-row">
                            <div class="nav-col-reg">
                                <a href='register.html' class="button-register">Register</a>
                            </div>
                            <div class="nav-col-log">
                                <a href='login.html' class="button-login">Login</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <img src="image/bar.png" id="icon-bar" onclick="showMenu()">
        </nav>
        <div class='content-index'>
            <h1>FRESH COFFE IN THE MORNING</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid beatae dolor at quos molestiae numquam praesentium ex quisquam minima voluptates sit optio possimus, distinctio nesciunt doloribus? Sunt cupiditate quibusdam sed?</p>
            <a href='login.html' class='button-index'>Get Yours Now</a>
        </div> 
    </section>

    <section class='about'>
        <p id="slide-about"></p>
        <h1 class="title">ABOUT US</h1>
        <p id="about-top"></p>  
        <div class='about-row'>
            <div class='about-col'>
                <p class="about-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore nulla corrupti, quo explicabo officia ullam magnam est itaque quidem id tenetur. Perspiciatis sequi eaque commodi voluptatibus dolore quod assumenda doloremque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quibusdam nesciunt, corrupti libero nostrum, at minus quis magni voluptate sit reiciendis dolorem, dignissimos error quia ullam distinctio vitae facilis dolorum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem perspiciatis quisquam inventore dolores asperiores atque, doloribus iure fuga praesentium autem ipsam cumque, assumenda eaque porro sunt rerum, eius odio amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quo facere quis, at harum suscipit sint, illum in ad quisquam, veritatis repellendus vel eos minima quidem exercitationem minus quam animi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga doloremque nobis enim eligendi eum inventore excepturi corrupti asperiores nostrum impedit ipsum obcaecati culpa corporis, laboriosam voluptate, distinctio eveniet dolor esse! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iure eaque illo et nihil pariatur magni voluptatum minima rem aut! Enim numquam ratione consequuntur illo aliquid adipisci exercitationem! Fuga, porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptates, animi officia ipsa sunt obcaecati magnam eveniet beatae temporibus facilis cum distinctio, doloremque nesciunt inventore iste? Velit exercitationem laboriosam dolorem. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit esse tenetur voluptatum inventore, amet quidem minima, modi, enim repellendus sint omnis nihil sed excepturi atque adipisci consequatur? Incidunt, dolorum quidem.</p>
            </div>
            <div class='about-col'>
                <p class="about-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, accusamus, tempora esse numquam nostrum cupiditate eveniet provident voluptatibus laboriosam repudiandae illo saepe distinctio ullam recusandae facere officia aut ipsum. Obcaecati. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsa dolor pariatur earum voluptatibus, asperiores repellat beatae molestiae officiis illum, eius architecto, reiciendis eveniet debitis magnam enim ratione aperiam labore. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta labore, consectetur vel ea quidem perferendis quam, accusantium incidunt dicta dolore reiciendis, dolorum amet odio qui quis adipisci quasi obcaecati. Hic. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat enim sit quo officia, aut voluptas nihil velit quos explicabo aperiam temporibus laborum blanditiis qui! Explicabo consequuntur reprehenderit dolore est maxime? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, ea! Rerum, voluptate libero quas assumenda inventore eum ad dolore sequi quam? Voluptatem neque hic consectetur labore iure quidem nobis blanditiis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet nam aperiam veritatis fuga possimus, temporibus libero fugiat necessitatibus, minima, sit inventore earum porro tempore! Aliquam pariatur atque nihil voluptatum mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni labore temporibus maiores totam iure. Rem, consectetur? Quisquam suscipit accusamus dolorum, quae iure, iste enim repellat repellendus at sit asperiores maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores dolor repudiandae doloribus labore rerum mollitia? Deleniti rerum delectus fugiat accusantium quasi! Quasi doloremque quia sed molestiae fugiat sequi ipsam nobis!</p>
            </div>
        </div>
        <p id="about-bottom"></p>  
    </section>

    <section class='service'>
        <p id="slide-service"></p>
        <h1 class="title">MENU</h1>
        <p id="service-top"></p>  
        <div class='service-row'>
            <?php foreach ($menu as $tb_menu): ?>
            <div class='service-col'>
                <div class="service-container">
                    <p class="service-content"><a href="login.html"><img src="img-menu/<?php echo $tb_menu['image_menu'] ?>" class="service-image" loading="lazy"></a></p>
                    <p class="service-sub-title"><b><?php echo $tb_menu['name_menu'] ?></b></p>
                    <p class="service-sub-title">$<?php echo $tb_menu['price_menu'] ?></p>
                </div>
            </div>
            <?php endforeach; ?> 
        <p id="service-bottom"></p>    
    </section>

    <section class="footer">
        <p id="slide-contact"></p>
        <div class='contact-row'>
            <div class='contact-col'>
                <h1 class="footer-title">Company</h1>
                <p class="footer-sub-title"><a href="#slide-about" class="footer-sub-title">About Us</a></p>
                <p class="footer-sub-title"><a href="#slide-service" class="footer-sub-title">Menu</a></p>
            </div>
            <div class='contact-col'>
                <h1 class="footer-title">Contact</h1>
                <p class="footer-sub-title">amanyu851@gmail.com</p>
                <p class="footer-sub-title">+62-813-5050-2003</p>         
                <a href="https://www.instagram.com/mchls._"><i class='bx bxl-instagram'></i></a>           
                <a href="https://api.whatsapp.com/send/?phone=6281350502003&text&type=phone_number&app_absent=0"><i class='bx bxl-whatsapp'></i></a>  
                <a href="https://youtu.be/dQw4w9WgXcQ"><i class='bx bxl-youtube'></i></a>
            </div>
            <div class='contact-col'>
                <h1 class="footer-title">Address</h1>
                <p class="footer-sub-title">Jl. Manunggal, Loa Bakung, Kecamatan Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75242</p>
            </div>
        </div>
        <!-- <p id="contact-bottom"></p> -->
    </section>

    <script type='text/javascript' src='js/script.js'></script>
</body>
</html>