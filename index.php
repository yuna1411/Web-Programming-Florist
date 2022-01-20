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
                <p class="deskripsi">Hot Item!</p>
                <h2>Signature Grande Bouquet</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, nobis.</p>
                <p><a href="" class="tbl-pink">Shop Now</a></p>
            </div>
        </section>

        <!-- Banner 2 -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">Hot Item!</p>
                <h2>For Lady Bouquet</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deserunt voluptatibus possimus blanditiis reiciendis.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deserunt voluptatibus possimus blanditiis reiciendis.</p>
                <p><a href="" class="tbl-biru">Shop Now</a></p>
            </div>
            <img src="./images/IMG_1359_600x-rsz.jpg"/>
        </section>


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
    </section>


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


    <!-- untuk tutors -->
    <section id="tutors">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi">Our Top Tutors</p>
                <h2>Tutors</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, optio!</p>
            </div>

            <div class="tutor-list">
                <div class="kartu-tutor">
                    <img src="https://dfu1k3y1rami2.cloudfront.net/wp-content/uploads/2014/07/26195109/2020_cb.jpg"/>
                    <p>Jason Lee Scott</p>
                </div>
                <div class="kartu-tutor">
                    <img src="https://images.ctfassets.net/1wryd5vd9xez/4DxzhQY7WFsbtTkoYntq23/a4a04701649e92a929010a6a860b66bf/https___cdn-images-1.medium.com_max_2000_1_Y6l_FDhxOI1AhjL56dHh8g.jpeg"/>
                    <p>John Doe</p>
                </div>
                <div class="kartu-tutor">
                    <img src="https://images.fastcompany.net/image/upload/w_596,c_limit,q_auto:best,f_auto/fc/3021752-inline-i-1-why-square-designed-its-new-offices-to-work-like-a-city.jpg"/>
                    <p>Michael Dell</p>
                </div>
                <div class="kartu-tutor">
                    <img src="https://blogs-images.forbes.com/jackkelly/files/2019/06/Jack-Kelly_avatar_1559658819-400x400.jpg"/>
                    <p>Bruce Wills</p>
                </div>
            </div>
        </div>
    </section>

        <!-- untuk partners -->
        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Partners</p>
                    <h2>Partners</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi magni tempore expedita sequi. Similique rerum doloremque impedit saepe atque maxime.</p>
                </div>

                <div class="partner-list">
                    <div class="kartu-partner">
                        <img src="https://www.designevo.com/res/templates/thumb_small/black-wheat-and-mortarboard.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-63.jpg"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-62.jpg"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://www.designevo.com/res/templates/thumb_small/encircled-branches-and-book.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-64.jpg"/>
                    </div>
                </div>
            </div>
        </section>
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