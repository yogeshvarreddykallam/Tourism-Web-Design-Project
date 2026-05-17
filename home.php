<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    
    <!-- front awesome cdn link -->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel = "stylesheet" href = "css/style.css">


</head>
<body>

<!-- header section starts -->

<section class = "header">
    <a href = "home.php" class = "logo">Travel...</a>
    <nav class = "navbar">
        <a href = "home.php">Home</a>
        <a href = "About.php">About</a>
        <a href = "package.php">Package</a>
        <a href = "book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>


</section>

<!-- home section start -->
<section class = "home">
    <div class = "swiper home-slider">
        <div class = "swiper-wrapper">
            <div class="swiper-slide" style = "background:url(images/home-slide-1.gif) no-repeat">
                <div class="content">
                    <span>Explore,Discover,Travel</span>
                    <h3> Travel Around The world</h3>
                    <a href = "package.php" class = "btn">Discover More</a>
                </div>
            </div>
            
            <div class="swiper-slide" style = "background:url(images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span>Explore,Discover,Travel</span>
                    <h3>Discover The New Places</h3>
                    <a href = "package.php" class = "btn">Discover More</a>
                </div>
            </div>

            <div class="swiper-slide" style = "background:url(images/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <span>Explore,Discover,Travel</span>
                    <h3>Make your Tour WorthWhile</h3>
                    <a href = "package.php" class = "btn">Discover More</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</section>
<!-- home section ends -->
<!-- services section start -->
<section class = "services">
    <h1 class="heading-title">Our Services</h1>
    <div class = "box-container">

        <div class = "box">
            <img src = "images/icon-1.png" alt = ""><br>
            <h3>Adventure</h3>
        </div>

        <div class = "box">
            <img src = "images/icon-2.png" alt = ""><br>
            <h3>Tour Guide</h3>
        </div>

        <div class = "box">
            <img src = "images/icon-3.png" alt = ""><br>
            <h3>Trekking</h3>
        </div>

        <div class = "box">
            <img src = "images/icon-4.png" alt = ""><br>
            <h3>Camp-Fire</h3>
        </div>

        <div class = "box">
            <img src = "images/icon-5.png" alt = ""><br>
            <h3>Off Road</h3>
        </div>

        <div class = "box">
            <img src = "images/icon-6.png" alt = ""><br>
            <h3>Camping</h3>
        </div>
    </div>
</section>

<!-- home about section starts -->
<section class="home-about">
    <div class="image">
        <img src = "images/about-img.jpg" alt = "">
    </div>

    <div class="content">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet,consectetur adipisci elit, 
            sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p> 
        <a href = "About.php" class = "btn">Read More</a>
    </div>
</section>
<!-- home about section ends -->

<section class = "home-packages">

<h1 class = "heading-title">Our Packages</h1>
<div class = "box-container">
    <div class = "box">
        <div class = "image">
            <img src = "images/img-1.jpg" alt="">
        </div>
        <div class="content">
            <h3>Adventure And Tour</h3>
            <p>Lorem ipsum dolor sit amet,consectetur adipisci elit, 
            sed eiusmod tempor incidunt ut labore et dolore magna aliqua. 
            <a href = "book.php" class = "btn">Book Now</a>     
        </div>
    </div>

    <div class = "box">
        <div class = "image">
            <img src = "images/img-2.jpg" alt="">
        </div>
        <div class="content">
            <h3>Adventure And Tour</h3>
            <p>Lorem ipsum dolor sit amet,consectetur adipisci elit, 
            sed eiusmod tempor incidunt ut labore et dolore magna aliqua. 
            <a href = "book.php" class = "btn">Book Now</a>     
        </div>
    </div>

    <div class = "box">
        <div class = "image">
            <img src = "images/img-3.jpg" alt="">
        </div>
        <div class="content">
            <h3>Adventure And Tour</h3>
            <p>Lorem ipsum dolor sit amet,consectetur adipisci elit, 
            sed eiusmod tempor incidunt ut labore et dolore magna aliqua. 
            <a href = "book.php" class = "btn">Book Now</a>     
        </div>
    </div>
</div>

<div class = "load-more">
    <a href="package.php" class = "btn">Load More</a>
</div>

</section>

<!-- home offers section starts -->
<section class="home-offer">
    <div class="content">
        <h3>Upto 50% Off</h3>
        <p>Lorem ipsum dolor sit amet,consectetur adipisci elit, 
            sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
        </p>
        <a href = "book.php" class = "btn">Book Now</a>     

    </div>
</section>
<!-- home offers section ends -->




<!-- footer section start -->
<section class = "footer">
    <div class = "box-container">
        <div class="box">
        <h3>Quick links</h3>
        <a href = "Home.php"> <i class="fas fa-angle-right"></i> Home</a>
        <a href = "About.php"> <i class="fas fa-angle-right"></i>About</a>
        <a href = "package.php"> <i class="fas fa-angle-right"></i>Package</a>
        <a href = "book.php"> <i class="fas fa-angle-right"></i>Book</a>
        </div>
        <div class="box">
        <h3>Extra links</h3>
        <a href = "#"> <i class="fas fa-angle-right"></i> Any Questions?? </a>
        <a href = "#"> <i class="fas fa-angle-right"></i> About us </a>
        <a href = "#"> <i class="fas fa-angle-right"></i> Privacy Policy </a>
        <a href = "#"> <i class="fas fa-angle-right"></i> Terms Of Use </a>
        </div>

        <div class="box">
        <h3>Contact Info</h3>
        <a href = "#"> <i class="fas fa-phone"></i> +91 999-999-9999 </a>
        <a href = "#"> <i class="fas fa-phone"></i> +91 888-888-8888 </a>
        <a href = "#"> <i class="fas fa-envelope"></i> kartheekgrpt@gmail.com </a>
        <a href = "#"> <i class="fas fa-map"></i> Vijayawada-India-521151 </a>
        </div>

        <div class="box">
        <h3>Follow us</h3>
        <a href = "#"> <i class="fab fa-facebook"></i> Facebook </a>
        <a href = "#"> <i class="fab fa-twitter"></i> Twitter </a>
        <a href = "#"> <i class="fab fa-instagram"></i> Instagram </a>
        <a href = "#"> <i class="fab fa-linkedin"></i> LinkedIn </a>
        </div>
    
    </div>

    <div class="credit">Created By <span> Kartheek </span>| All Rights Reserved </span></div>
</section>
<!-- footer section end -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>
    
</body>
</html>