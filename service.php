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
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
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
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="service.php" class="nav-item nav-link active">Service</a>
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
        
        
       
        
        
        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>Premium Detailing Services</h2>
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
            </div>
        </div>
        <!-- Service End -->
        
        
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
                            <p><i class="fa fa-map-marker-alt"></i>Mile 18, Chariot Juction, Buea</p>
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
