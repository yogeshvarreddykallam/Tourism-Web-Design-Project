<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

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
<div class="heading" style = "background:url(images/heading-img-3.jpg) no-repeat">
    <h1>Book Now</h1>
</div>

<!-- booking sectio0n starts -->
<section class="booking">
    <h1 class="heading-title">Book Your Trip!    </h1>
        <form action="book_form php" method = "post" class = "book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type = "text" placeholder="Enter Your Name" name= "name">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type = "email" placeholder="Enter Your Email" name= "email">
                </div>
                <div class="inputBox">
                    <span>Phone :</span>
                    <input type = "number" placeholder="Enter Your Number" name= "phone">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type = "text" placeholder="Enter Your Address" name= "address">
                </div>
                <div class="inputBox">
                    <span>Where To :</span>
                    <input type = "text" placeholder="Place Wanted To Visit" name= "location">
                </div>
                <div class="inputBox">
                    <span>How Many :</span>
                    <input type = "number" placeholder="Total Travellers" name= "guests">
                </div>
                <div class="inputBox">
                    <span>Leaving :</span>
                    <input type = "date" name= "leaving">
                </div>
                <div class="inputBox">
                    <span>Arrivals :</span>
                    <input type = "date" name= "arrivals">
                </div>
            </div>

            <input type = "submit" value="submit" class = "btn" name = "send">
        </form>
</section>
<!-- booking section ends -->

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