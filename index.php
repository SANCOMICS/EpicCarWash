<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Epic Car Wash</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
         
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <style>
            #notification {
                display: none;
                position: fixed;
                top: 20px;
                right: 20px;
                background-color: #28a745;
                color: white;
                padding: 15px;
                border-radius: 5px;
                z-index: 1000;
            }
            #notification.error {
                background-color: #dc3545;
            }
        </style>
        <?php
        session_start();
        ?>
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.php">
                                <h1>EpicCar<span>Wash</span></h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p>Mon - Fri, 8:00 - 9:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>+237 676237346</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>epiccarwash@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="service.php" class="nav-item nav-link">Service</a>
                            <a href="price.php" class="nav-item nav-link">Price</a>
                            <a href="location.php" class="nav-item nav-link">Location</a>
                            <a href="feedback.php" class="nav-item nav-link">Feedback</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn btn-custom" href="location.php">Get Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Keep your Car Newer</h1>
                            <p>
                                Welcome to epic car wash, where we specialize in giving your vehicle the pampering it deserves. 
                                With our state-of-the-art facilities, eco-friendly practices, and dedicated team, we ensure that your car
                                 not only looks sparkling clean but also maintains its shine for miles ahead.
                            </p>
                            <a class="btn btn-custom" href="price.php">Explore More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Quality service for you</h1>
                            <p>
                                At epic car wash, we believe that quality is not just a goal; it's a standard 
                                we uphold in every aspect of our service. From the moment you drive in to the moment you drive out, 
                                our commitment to excellence shines through in every interaction, ensuring that your experience with us is nothing short of exceptional.
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Exterior & Interior Washing</h1>
                            <p>
                                At epic car wash, we understand that your car is more than just a vehicle; 
                                it's a reflection of your lifestyle and personality. That's why we offer comprehensive 
                                interior and exterior cleaning services designed to rejuvenate and refresh your ride, both inside and out.
                                 From removing dirt and grime to restoring that showroom shine, we're here to make your car look and feel its best.
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about_service2.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>Car Wash & Car detailing</h2>
                        </div>
                        <div class="about-content">
                            <p>
                                Welcome to epic car wash, where we provide top-quality car wash services to keep your 
                                vehicle looking its best. Our dedicated team of professionals is committed to delivering exceptional 
                                results and ensuring customer satisfaction. Here's what you can expect from our car wash services :
                            </p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Exterior Detailing.</li>
                                <li><i class="far fa-check-circle"></i>Interior Detailing.</li>
                                <li><i class="far fa-check-circle"></i>Window Protection.</li>
                                <li><i class="far fa-check-circle"></i>Seat Cleaning.</li>
                            </ul>
                            <a class="btn btn-custom" href="about.php">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>Premium Washing Services</h2>
                </div>
                <div class="main-detail">
                    <div class="detail-wrapper">
                        <div class="detail-card">
                            <img class="detail-img" src="img/exterior.jpg">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>Exterior detailing</h4>
                                    <p class="detail-sub"> Our exterior cleaning service goes beyond the surface, 
                                        uncovering the true radiance that lies within. We believe that a clean car is a reflection of its owner's pride, 
                                        and we take that responsibility seriously.</p>
                                </div>
                            </div> 
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="img/interior.jpg">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>Interior detailing</h4>
                                    <p class="detail-sub">Step into a world of pure comfort and luxury as we revitalize your car's interior.
                                         Our interior cleaning service is a meticulous journey that transforms your vehicle's cabin into a haven of cleanliness and freshness. </p>
                                </div>
                            </div>
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="img/vacuum.jpg">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>Vacuum Cleanning</h4>
                                    <p class="detail-sub">Step into a world where every dust particle is banished, and the hidden clean is revealed. 
                                        Our professional vacuum cleaning service goes beyond the surface, delving deep into the nooks and crannies of your car's interior to uncover its true beauty.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="img/seat.jpg">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>Seat Washing</h4>
                                    <p class="detail-sub">Your car's seats deserve the royal treatment, and we're here to revive their beauty. Our seat cleaning service is a transformative experience that brings new life to your vehicle's interior. 
                                        Whether it's fabric, leather, or vinyl, our expert technicians use specialized techniques and premium products to remove stains, dirt, and odors, leaving your seats looking and feeling fresh. </p>
                                </div>
                            </div>
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="img/polishing.jpeg">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>Car Polishing</h4>
                                    <p class="detail-sub">Prepare to unleash the brilliance of your car's exterior with our expert car polishing service. We believe that your vehicle deserves to shine like a star, 
                                        and our skilled technicians are masters of the art of car polishing. Using cutting-edge techniques and premium products, we gently remove swirl marks, scratches, and imperfections,
                                         revealing a flawless and mirror-like finish. </p>
                                </div>
                            </div>
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="img/tire_shine.jpg">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>Tire Shinning</h4>
                                    <p class="detail-sub">Elevate Your Wheels with Tire Shining"
                                        Get ready to unleash the power and elevate your wheels with our exceptional tire shining service. We believe that your vehicle's tires should be more than just functional – they should make a statement. 
                                        Our tire shining experts use premium products and meticulous techniques to create a deep, rich shine that enhances the overall aesthetics of your car. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- Ends here -->
            </div> 
        </div>
        <!-- Service End -->
          
        <!-- gallary -->
       
       <h1>Gallery</h1>
       <div class="slider">
            <div class="images">
                <input type="radio" name="slide" id="img1" checked>
                <input type="radio" name="slide" id="img2">
                <input type="radio" name="slide" id="img3">
                <input type="radio" name="slide" id="img4">
                <input type="radio" name="slide" id="img5">
            
                <img src="img/img1.jpg" class="m1" alt="img1">
                <img src="img/carousel-3.jpg" class="m2" alt="img2">
                <img src="img/img3.jpg" class="m3" alt="img3">
                <img src="img/img4.jpg" class="m4" alt="img4">
                <img src="img/carousel-1.jpg" class="m5" alt="img5">
            </div>
            <div class="dots">
                <label for="img1"></label>
                <label for="img2"></label>
                <label for="img3"></label>
                <label for="img4"></label>
                <label for="img5"></label>
            </div>

       </div>
        
        <!-- Facts Start -->
        <!-- <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">25</h3>
                                <p>Service Points</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">5</h3>
                                <p>Car Experts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">1500</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">5000</h3>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Facts End -->
        
        
        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Washing Plan</p>
                    <h2>Choose Your Plan</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Basic Cleaning</h3>
                                <h2><bold>4,000</bold><span>CFA</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Exterior detailing</li>
                                    <li><i class="far fa-check-circle"></i>Interior detailing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window protection</li>
                                    <li><i class="far fa-check-circle"></i>Tire shinning</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="https://checkout.fapshi.com/products/y66lmw">Book Now</a>
                                <!-- <a class="btn btn-custom" href="payment.html">Book Now</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Standard Clearning</h3>
                                <h2><bold>10,000</bold><span>CFA</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Detailing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Seats Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Car wax</li>
                                    
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="https://checkout.fapshi.com/products/n1lm39">Book Now</a>
                                <!-- <a class="btn btn-custom" href="payment.html">Book Now</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Premium Cleaning</h3>
                                <p>Everything including</p>
                                <h2><bold>20,000</bold><span>CfA</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Upholstery cleaning</li>
                                    <br>
                                    <li><i class="far fa-check-circle"></i>Paint Correction</li>
                                    <br>
                                    <li><i class="far fa-check-circle"></i>Car Polishing</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="https://checkout.fapshi.com/products/7v9e6z">Book Now</a>
                                <!-- <a class="btn btn-custom" href="payment.html">Book Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        
        <!-- Location Start -->
        <div class="location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-header text-left">
                            <p>Epic Car Wash</p>
                            <h2>Car Wash & Care Detailing</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Epic Car Wash</h3>
                                        <p>Mile 18, Chariot Juction, Buea</p>
                                        <p><strong>Call:</strong>+237 676237346</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Epic Car Wash</h3>
                                        <p>Mile 18, Chariot, Buea</p>
                                        <p><strong>Call:</strong>+237 676237346</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Epic Car Wash</h3>
                                        <p>Mile 18, Chariot Junction, Buea</p>
                                        <p><strong>Call:</strong>+237 676237346</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Epic Car Wash</h3>
                                        <p>Mile 18, Chariot Junction, Buea</p>
                                        <p><strong>Call:</strong>+237 676237346</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="location-form">
                            <h3>Request for a car wash</h3>
                            <form action="send_email.php" method="POST">
                                <div class="control-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" name="message" placeholder="Description" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Send Request</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Location End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <h2>Our Car Experts & Workers</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Donald John</h2>
                                <p>Car Expert</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Adam Phillips</h2>
                                <p>Accountant</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Thomas Olsen</h2>
                                <p>Maneger</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>James Alien</h2>
                                <p>Worker</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What our clients say</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="img/testimonial-1.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Client Name</h3>
                            <h4>Profession</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-2.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Client Name</h3>
                            <h4>Profession</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-3.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Client Name</h3>
                            <h4>Profession</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-4.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Client Name</h3>
                            <h4>Profession</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
        <!-- Notification -->
        <div id="notification"></div>

        <script>
        $(document).ready(function () {
            <?php
            if (isset($_SESSION['notification'])) {
                $notification = $_SESSION['notification'];
                unset($_SESSION['notification']);
                echo "showNotification('$notification');";
            }
            ?>
            
            function showNotification(message) {
                var notification = $('#notification');
                notification.removeClass('error');
                if (message.includes('Error')) {
                    notification.addClass('error');
                }
                notification.text(message);
                notification.fadeIn().delay(3000).fadeOut();
            }
        });
    </script>


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Mile 18, Chariot Junction, Buea</p>
                            <p><i class="fa fa-phone-alt"></i>+237 676237346</p>
                            <p><i class="fa fa-envelope"></i>epiccarwash@gmail.com</p>
                            <div class="footer-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Our Service</a>
                            <a href="">Service Points</a>
                            <a href="">Pricing Plan</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                    <h2>Newsletter</h2>
                    <form action="send_req.php" method="POST">
                        <div class="control-group">
                            <input type="text" name="name" class="form-control" placeholder="Full Name" required="required">
                        </div>
                        <div class="control-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" name="message" placeholder="I want to subscribe to the newsletter." style="display:none;"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-custom" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
