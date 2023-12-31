

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car-Rental-Website</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="style.css"> 
    <!--Box Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <a href="index.html" class="logo"><img src="images/logo.jpg" alt=""></a>
    
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#ride">Ride</a></li>
            <li><a href="Car_Shortlist.html">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#reviews">Review</a></li>
        </ul>
        <?php
            include("connect.php");
            session_start();
            echo "Welcome ".$_SESSION['username'];
        ?>
        <div class="header-btn">
        <a href="Logout.php" class="sign-in">Logout</a>
           
        </div>
    </header>
    <!-- Home -->
    <section class="home" id="home">
        <div class="text">
            <h1><span>Looking </span>to <br> rent a car</h1>
            <p>The perfect car for your next trip is just around the corner
               <br> Book your drive now! </p>
                <div class="app-stores">
                    <img src="images/ios.png" alt="reload">
                    <img src="images/512x512.png" alt="">
            
                </div>
        </div>
        <div class="form-container">
            <form action="">
                <div class="input-box">
                    <span>Location</span>
                    <input type="search" name="" id="" placeholder="search places">
                </div>
                    <div class="input-box">
                        <span>Pick-Up Date</span>
                        <input type="date" name="" id="">
                    </div>
                    <div class="input-box">
                        <span>Return Date</span>
                        <input type="date" name="" id="">
                    </div>
                    <input type="submit" name="" id="" class="btn">
                </div>
            </form>
        </div>
    </section>
    <!--ride section-->
    <section class="ride" id="ride">
        <div class="heading">
            <span>How Its Work</span>
            <h1>Rent With 3 Easy Steps</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>Choose A Location</h2>
                <p>Choose alocation from where you want to pick the car</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-check'></i>
                <h2>Pick-Up Date</h2>
                <p>Select the date according to your need and no of hours you want to rent</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-star'></i>
                <h2>Book A Car</h2>
                <p>Book a car by submitting the important documents and after verification the car is yours !</p>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services" id="services"></section>
    <div class="heading">
        <span>Best Services</span>
        <h1>Explore Out Top Deals <br> From Top Rated Dealers</h1>
    </div>
    <div class="services-container">
        <div class="box">
        <div class="box-img">
        <img src="images/car1.jpg" alt="car1">
    </div>
    <p></p>
    <h3>Nissan Kicks 2021</h3>
    <h2>₹251 <span>/hr</span></h2>
    <a href="#" class="btn">Rent Now</a>
</div>

<div class="box">
    <div class="box-img">
    <img src="images/car2.jpg" alt="car1">
    </div>
<p></p>
<h3>Mahindra XUV500 </h3>
<h2> ₹300 <span>/hr</span></h2>
<a href="#" class="btn">Rent Now</a>
</div>

<div class="box">
    <div class="box-img">
    <img src="images/car3.jpg" alt="car1">
</div>
<p></p>
<h3>KIA Sonet 2021</h3>
<h2>₹420 <span>/hr</span></h2>
<a href="#" class="btn">Rent Now</a>
</div>
<div class="box">
    <div class="box-img">
    <img src="images/car4.jpg" alt="car1">
</div>
<p></p>
<h3>Maruti Wagon R </h3>
<h2>₹200 <span>/hr</span></h2>
<a href="#" class="btn">Rent Now</a>
</div>

<div class="box">
    <div class="box-img">
    <img src="images/car5.jpg" alt="car1">
</div>
<p></p>
<h3>2018 Honda Civic</h3>
<h2>₹58500 | ₹358 <span>/month</span></h2>
<a href="#" class="btn">Rent Now</a>
</div>

<div class="box">
    <div class="box-img">
    <img src="images/car6.jpg" alt="car1">
</div>
<p></p>
<h3>Hyundai Grand i10 </h3>
<h2> ₹190 <span>/hr</span></h2>
<a href="#" class="btn">Rent Now</a>
</div>
</div>
    <!--about section-->
    <section class="about" id="about">
        <div class="heading">
            <span>About Us</span>
            <h1>Best Customer Experience</h1>
        </div>
        <div class="about-container">
            <div class="about-img">
                <img src="images/about.png" alt="">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>Our Car Rental website is India’s largest marketplace for cars on rent. From short road trips to quick in-city drives for groceries, supply pick-up, food runs, we have the cheapest car rental options for all your needs! A hatchback for daily commute, a sedan for short trips, SUV for hills or a luxury car for a surprise.</p>
                <p>With us, you can experience the convenience of online booking. The cars listed on our platform come with all-India permits that include vehicle insurance. It is extremely easy to pick up the car from the host location. You can drive unlimited KMs, with 100% Free Cancellation up to 6 hours before the trip start, 0 Security Deposit, 0 Toll Charges, and 24/7 Roadside Assistance. Car rent per KM starts as low as Rs. 149/hour. From short road trips to quick in-city drives for groceries, supply pick-up, meeting friends and family, doctor visits, business trips, we have the cheapest car rental options for all your needs! A hatchback for daily commute, a sedan for short trips, SUV for hills or a luxury car for a surprise.</p>
                <a href="#" class="btn">learn More</a>
            </div>
        </div>
    </section>
    <!--reviews-->
    <section class="reviews" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>Whats Our Customer Says.......</h1>
        </div>
        <div class="review-container">
            <div class="box">
                <div class="rev-img">
                    <img src="images/rev1.jpg" alt="">
            </div>
            <h2>Arvind</h2>
            <div class="stars">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <p>Flattered with availability of well maintained cars</p>
        </div>
        <div class="box">
            <div class="rev-img">
                <img src="images/rev2.jpg" alt="">
        </div>
        <h2>Gaurav</h2>
        <div class="stars">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
        </div>
        <p>Booked a XUV with unlimited kms, very happy with car's service           <p>
    </div>
    <div class="box">
        <div class="rev-img">
            <img src="images/rev3.jpg" alt="">
    </div>
    <h2>Himanshi </h2>
    <div class="stars">
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star-half"></i>
    </div>
    <p>Booked a car for a family trip which was very comfortable and in great condition

    </p>
</div>
        </div>
    </section>
    <!--Newsletter-->
    <section class="newsletter">
        <h2>Subscribe To Newsletter</h2>
        <div class="box">
            <input type="text" placeholder="Enter your email....">
            <a href="#" class="btn">Subscribe</a>
        </div>
    </section>
    <!--copyright-->
    <div class="copyright">
        <p>&#169 ; carpoolvenom All Right Reserved</p>
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
    </div>

    <!--Scroll Reveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <!-- Link To JS-->
    <script src="JS.js"></script>
</body>
</html>