<?php
include_once("control/config.php");
include_once("control/fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blooming Everyday</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<main class="main-container">
    <div class="page1">
      <div class="frame">

        <!-- Header -->

        <header>
          <nav class="nav-bar">
          <img class="rose-logo" src="./images/lotus (1).png" alt="logo">
            <h1 class="brand-header">
              <a href="index.php">Blooming Everyday</a>
            </h1>
            <ul class="menu">
                <li><a href="#courses">New Products</a></li>
                <li><a href="#tutors">Best Seller</a></li>
                <li><a href="#partners">Categories</a></li>
                <li><a href="#contact">About Us</a></li>
                <li><a href="" class="tbl-login">Sign Up</a></li>
            </ul>
          </nav>
        </header>
      </div>
    </div>

    <div class="wrapper">
        <!-- Banner 1 -->
        <section id="home">
            <img src="./images/a5_b522643f-1bbc-42c4-b945-a576f0d4bd6e_600xx.jpg"/>
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_subtitle('4')?></p>
                <h2><?php echo ambil_title('4')?></h2>
                <?php echo ambil_content('4')?>
                <p><a href="" class="tbl-pink">Shop Now</a></p>
            </div>
        </section>

        <!-- Banner 2 -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_subtitle('5')?></p>
                <h2><?php echo ambil_title('5')?></h2>
                <?php echo ambil_content('5')?>
                <p><a href="" class="tbl-biru">Shop Now</a></p>
            </div>
            <img src="./images/IMG_1359_600x-rsz.jpg"/>
        </section>
    </div>


    <!-- Slider Pick Your Favourite-->
    <div class="slider">
        <div class="favourite">
            <h3 align="center">For Your Needs</h3>
            <center><hr width="30%" height="2px" size="3px" color="#ac5c60"></center>
        </div>

        <div class="slides">
            <div class="slide">
                <center><a href=""><img src="./images/white-textile-classical-style-sofa-vintage-room-flowers-ob-painted-barrels.jpg" alt="Slider1"></a></center>
            </div>
            <div class="slide">
                <center><a href=""><img src="./images/beautiful-wedding-bouquet-roses.jpg" alt="Slider2"></a></center>
            </div>
            <div class="slide">
                <center><a href=""><img src="./images/close-up-view-two-gold-wedding-rings-lying-roses-bouquet.jpg" alt="Slider3"></a></center>
            </div>
            <div class="slide">
                <center><a href=""><img src="./images/beautiful-bouquet-with-red-roses-lily-flowers-box.jpg" alt="Slider4"></a></center>
            </div>
            <div class="navigation">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(-1)">&#10095;</a>
            </div>
        </div>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function showSlides(n){
                var i;
                var slides = document.getElementsByClassName("slide");
                if (n > slides.length)
                {
                    slideIndex = 1;
                }
                if (n < 1)
                {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++)
                {
                    slides[i].style.display = "none";
                }
                slides[slideIndex-1].style.display = "block";
            }
        </script>
    </div>


    <!-- Order by Categories--> 
    <div class="categories">
        <div class="heading">
            <center><h3>Order by Categories</h3></center>
            <center><hr width="36%" height="2px" size="3px" color="#ac5c60"></center>
        </div>

        <div class="shop-container">
            <!-- Box 1 -->
                <div class="box">
                    <div class="box-img">
                        <a href="#"><img src="./images/order1.jpg" alt="Order1"></a>
                    </div>
                    <div class="title">
                        <h4>Flower Bouquet</h4>
                        <a href="view" class="btn-view">View All</a>
                    </div>
                </div>


            <!-- Box 2 -->
                <div class="box">
                    <div class="box-img">
                        <a href="#"><img src="./images/order2.jpg" alt="Order2"></a>
                    </div>
                    <div class="title">
                        <h4>Dome Glass</h4>
                        <a href="view" class="btn-view">View All</a>
                    </div>
                </div>


            <!-- Box 3 -->
                <div class="box">
                    <div class="box-img">
                        <a href="#"><img src="./images/order3.jpg" alt="Order3"></a>
                    </div>
                    <div class="title">
                        <h4>Flower Box</h4>
                        <a href="view" class="btn-view">View All</a>
                    </div>
                </div>


            <!-- Box 4 -->
                <div class="box">
                    <div class="box-img">
                        <a href="#"><img src="./images/order4.jpg" alt="Order4"></a>
                    </div>
                    <div class="title">
                        <h4>Balloon Bouquet</h4>
                        <a href="view" class="btn-view">View All</a>
                    </div>
                </div>
        </div>
    </div>


    <!-- On Sale-->
    <div class="products">
        <center><h1 class="heading"> On <span>Sale</span></h1></center>
        <div class="box-container">
            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img src="./images/OnSale1.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Shop Now</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <p>Rose in Dome Glass</p>
                    <div class="price"> $12.99 <span>$15.99</span> </div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-15%</span>
                <div class="image">
                    <img src="./images/Onsale2.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Shop Now</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <p>Sweet Pastel Bouquet</p>
                    <div class="price"> $12.99 <span>$15.99</span> </div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-5%</span>
                <div class="image">
                    <img src="./images/onsale3.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Shop Now</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <p>Unicorn Bouquet</p>
                    <div class="price"> $12.99 <span>$15.99</span> </div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-20%</span>
                <div class="image">
                    <img src="./images/onsale4.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Shop Now</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <p>Disney Series</p>
                    <div class="price"> $12.99 <span>$15.99</span> </div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-17%</span>
                <div class="image">
                    <img src="./images/onsale5.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Shop Now</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <p>Pink in White Bouquet</p>
                    <div class="price"> $12.99 <span>$15.99</span> </div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-3%</span>
                <div class="image">
                    <img src="./images/onsale6.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Shop Now</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <p>Flower Love Box</p>
                    <div class="price"> $12.99 <span>$15.99</span> </div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-18%</span>
                <div class="image">
                    <img src="./images/onsale7.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Shop Now</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <p>Earth Tone Bouquet</p>
                    <div class="price"> $12.99 <span>$15.99</span> </div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img src="./images/onsale8.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Shop Now</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <p>Beige Bouquet Pom-Pom</p>
                    <div class="price"> $12.99 <span>$15.99</span> </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Best Seller -->
    <section id="tutors">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_subtitle('6')?></p>
                <h2><?php echo ambil_title('6')?></h2>
                <?php echo ambil_content('6')?>
            </div>  
            <div class="tutor-list">
                <?php
                $sql1   = "select * from bestseller order by id desc";
                $q1     = mysqli_query($mysqli, $sql1);
                while($r1 = mysqli_fetch_array($q1)){
                ?>
                    <div class="kartu-tutor">
                        <a href="#"><img src="<?php echo url_dasar()."/images/".bestseller_picture($r1['id']) ?>"/></a>
                        <a href="#"><p><?php echo $r1['nama']?></p></a>
                    </div>
                <?php
                }
                ?>
                
                
            </div>
        </div>
    </section>


    <!-- Featured Products -->
    <section id="partners">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_subtitle('7')?></p>
                <h2><?php echo ambil_title('7')?></h2>
                <?php echo ambil_content('7')?>
            </div>

            <div class="partner-list">
                <?php
                $sql1   = "select * from featured order by id asc";
                $q1     = mysqli_query($mysqli, $sql1);
                while($r1 = mysqli_fetch_assoc($q1)){
                ?>
                    <div class="kartu-partner">
                        <a href="#"><img src="<?php echo url_dasar()."/images/".featured_picture($r1['id'])?>"/></a>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </section>

    

    <!-- Reach Us -->
    <div class="contact">
        <h1 class="heading"> <span> Reach</span> Us </h1>
        <div class="row">

            <form action="" method="POST">
                <input type="varchar" placeholder="Name" class="boxes" name="nama">
                <input type="varchar" placeholder="Email" class="boxes" name="email">
                <input type="varchar" placeholder="Number" class="boxes" name="nomor">
                <textarea name="" class="boxes" placeholder="Message" id="" cols="30" rows="10" name="pesan"></textarea>
                <input type="submit" value="Send" class="btn-send" name="send">
            </form>

            <?php
            if(isset($_POST['send'])){
                mysqli_quer($mysqli, "insert into members set 
                nama    = '$_POST[nama]',
                email   = '$_POST[email]',
                nomor   = '$_POST[nomor]',
                pesan   = '$_POST[pesan]'");

                echo "Your Message Has Been Sent";
            }
            ?>

            <div class="image">
                <img src="./images/flowers-bouquet-with-empty-note (1).jpg" alt="">
            </div>

        </div>
    </div>


    <!-- Footer-->
    <footer>
        <div class="footer-container">
            <div class="top">
                 <div class="logo-details">
                     <span class="logo-name">Blooming Everyday</span>
                 </div>
                 <div class="socialmedia">
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                 </div>
            </div>

            <div class="link-boxes">
                <ul class="footerbox">
                    <li class="link-name">Company</li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Partnership</a></li>
                    <li><a href="#">Locations</a></li>
                </ul>
                <ul class="footerbox">
                    <li class="link-name">Products</li>
                    <li><a href="#">How to Order</a></li>
                    <li><a href="#">All Products</a></li>
                    <li><a href="#">Custom Bouquet</a></li>
                </ul>
                <ul class="footerbox">
                    <li class="link-name">Contact Us</li>
                    <li><a href="#">Hotline</a></li>
                    <li><a href="#">WhatsApp</a></li>
                    <li><a href="#">Email</a></li>
                </ul>
                <ul class="footerbox input-box">
                    <li class="link-name">Subscribe</li>
                    <li><input type="text" placeholder="Enter your email"></li>
                    <li><input type="button" value="Subscribe"></li>
                </ul>
           </div>
           </div>
           <div class="bottom">
            <div class="bottom-text">
                <span class="copyright-text">Copyright &#169; 2022 <a href="#">Blooming Everyday.</a>All rights reserved</span>
                <span class="policy_terms">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                </span>
            </div>
        </div>
    </footer>

</main>
</body>
</html>