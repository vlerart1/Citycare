<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Citycare Services</title>
        <link rel="shortcut icon" type="image/png" href="images/favi.png">

         <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--GOOGLE FONTS-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/listing.css" rel="stylesheet">      
        <style>
            /* Custom CSS for improved language dropdown */
            .dropdown button#languageDropdown {
                min-width: 120px;
                border-radius: 0.25rem;
                transition: background-color 0.3s ease;
            }

            .dropdown button#languageDropdown:hover, 
            .dropdown button#languageDropdown:focus {
                background-color: #ffffff;
                color: #000000;
                outline: none;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
            }

            .dropdown-menu {
                border-radius: 0.25rem;
                box-shadow: 0 4px 8px rgba(0,0,0,0.15);
                font-weight: 500;
                min-width: 140px;
                padding: 0.2rem 0;
                transition: opacity 0.3s ease;
            }

            .dropdown-item {
                padding: 0.5rem 1.2rem;
                transition: background-color 0.3s ease;
                font-size: 0.9rem;
                color: #212529;
            }

            .dropdown-item:hover, 
            .dropdown-item:focus {
                background-color: #f8f9fa;
                color: #007bff;
                outline: none;
            }
        </style>

    </head>
    
    <body>
        <main>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <i class="bi bi-buildings"></i>
                        <span>Citycare Services</span>
                    </a>
                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#home" data-key="Home">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#services" data-key="Services">Services</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#about" data-key="About">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#faq" data-key="FAQs">FAQs</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#contact" data-key="Contact">Contact</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="requester/login.php" data-key="Login">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="requester/register.php" data-key="Register">Register</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block me-3">
                            <a href="Requester/login.php" class="navbar-icon bi-person smoothscroll"></a>
                        </div>

                        <!-- Language dropdown menu -->
                        <div class="dropdown">
                            <button class="btn btn-outline-light btn-sm dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Language
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                <li><a class="dropdown-item" href="#" id="btn-en">EN - English</a></li>
                                <li><a class="dropdown-item" href="#" id="btn-sq">AL - Albanian</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            
           
            <section class="hero-section d-flex justify-content-center align-items-center" id="home">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h3 class="text-white text-center">Customer's satisfaction is our Goal.</h3>

                            <h6 class="text-center">Any services at your doorstep!</h6>

                            <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1">
                                        
                                    </span>

                                    <input name="keyword" type="search" class="form-control" id="keyword" placeholder="What kind of service do you want?" aria-label="Search">

                                    <button type="submit" class="form-control">Search</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Citycare Services</h5>

                                            <p class="mb-0">#1 door-to-door service provider in Assam!</p>
                                        </div>
                                    </div>

                                    <img src="images/topics/undraw_Deliveries_2r4y.png" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">About</h5>

                                            <p class="text-white">CityCare Services is the premier destination for all your blue-collar job needs in Kosovo. We redefine the landscape of employment
                                                services across Kosovo. We specialize in connecting job seekers with diverse opportunities, ensuring an unparalleled
                                                user experience tailored to your specific requirements in Kosovo.</p>
                                        </div>

                                      </div>

                                    <div class="social-share d-flex">
                                        <p class="text-white me-4">Share:  </p>

                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-twitter"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-facebook"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-pinterest"></a>
                                            </li>
                                        </ul>

                                        <a href="#" class="custom-icon bi-bookmark align-items-right"></a>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="explore-section section-padding" id="services">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Our Services</h1>
                        </div>

                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Cleaning</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Carpentry</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">HVAC services</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Electrical</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Plumbing</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="labour-tab" data-bs-toggle="tab" data-bs-target="#labour-tab-pane" type="button" role="tab" aria-controls="labour-tab-pane" aria-selected="false">Labour</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Bathroom Cleaning</h5>

                                                            <p class="mb-0">Get a germ-free thoroughly cleaned bathroom with Citycare's professional deep cleaning services.</p>
                                                        </div>

                                                    </div>

                                                    <img src="images/bathroom-cleaning-min.png" class="custom-block-image img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Home Deep Cleaning</h5>

                                                                <p class="mb-0">For a healthy living, Citycare offers deep cleaing services using eco friendly products!</p>
                                                        </div>

                                                    </div>

                                                    <img src="images/home-cleaning-min.png" class="custom-block-image img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Tank Cleaning</h5>

                                                                <p class="mb-0">Citycare's tank cleaning ensures that your water tank is clean inside out!</p>
                                                        </div>

                                                    </div>

                                                    <img src="images/water-tank-cleaning-service-min.png" class="custom-block-image img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Minor Carpentry work</h5>

                                                                <p class="mb-0">Need minor carpentry work done? From trim installation to furniture repair, we handle it all with precision and expertise. Contact us for efficient solutions today!</p>
                                                            </div> 
                                                        </div>

                                                        <img src="images/Carpenter Services-Sfastservices.jpeg" class="custom-block-image img-fluid" alt="">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Major Carpentry works</h5>

                                                                <p class="mb-0">Major carpentry works tailored to your needs, from intricate renovations to structural enhancements!</p>
                                                            </div>
                                                        </div>

                                                        <img src="images/Carpenter Services  Near Me.jpg" class="custom-block-image img-fluid" alt="">
                                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Any other works?</h5>

                                                                <p class="mb-0">Contact us for any kind of carpentry works and get a tailored result!</p>
                                                            </div>
                                                        </div>

                                                        <img src="images/bc03dc57ab33fceadc3e84db1b363c35.jpg" class="custom-block-image img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                  </div>

                                <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">AC repair/Maintenance</h5>

                                                            <p class="mb-0">Stay cool all year round with our expert air conditioning services! From installation to maintenance, we've got you covered for a comfortable home or office environment. Contact us today for reliable cooling solutions.</p>
                                                        </div>
                                                    </div>

                                                    <img src="images/1.png" class="custom-block-image img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Any other HVAC works?</h5>

                                                            <p class="mb-0">Experience the perfect climate in your home or office with our premier HVAC services! Our professionals ensure optimal heating, ventilation, and air conditioning performance for your utmost comfort and satisfaction.</p>
                                                        </div>
                                                    </div>

                                                    <img src="images/2.png" class="custom-block-image img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">General electrical work</h5>

                                                            <p class="mb-0">Need electrical work done? Look no further! Trust our expert team for all your general electrical needs. From installations to repairs, we've got you covered!</p>
                                                        </div>
                                                    </div>

                                                    <img src="images/Electrician-Franchises-vs.-Other-Home-Service-Franchises-e1680098823998.jpg" class="custom-block-image img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Minor electrical work</h5>

                                                            <p class="mb-0">Need minor electrical work done? We've got you covered! Trust our expert team for quick and reliable solutions. Contact us today for hassle-free service!</p>
                                                        </div>
                                                    </div>

                                                    <img src="images/5.png" class="custom-block-image img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Any other electrical service?</h5>

                                                            <p class="mb-0">Power up your home with expert electrical services! From installations to repairs, our skilled technicians ensure safety and reliability.</p>
                                                        </div>
                                                    </div>

                                                    <img src="images/Electrician Business.png" class="custom-block-image img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Water tank installation</h5>

                                                            <p class="mb-0">Water tank installation is perhaps one of the most crucial tasks pertaining to the water supply of every household. After all, it serves as the repository to provide a daily supply of fresh water.</p>
                                                        </div>
                                                    </div>
                                                    <img src="images/5 (2).jpg" class="custom-block-image img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">General plumbing work</h5>

                                                            <p class="mb-0">You may have experience in fixing a lot of things at home but plumbing isn’t everyone’s cup of tea. Plumbing issues such as clogged drains, leaky faucets, broken or damaged pipelines etc. can be a homeowner’s nightmare.</p>
                                                        </div>
                                                    </div>
<img src="https://t4.ftcdn.net/jpg/06/09/29/53/360_F_609295343_xOHOqm0KQnRf65OXla3LFHaKSz2lp6j1.jpg" class="custom-block-image img-fluid" alt="Plumbing Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="labour-tab-pane" role="tabpanel" aria-labelledby="labour-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Unskilled Labour works</h5>

                                                            <p class="mb-0">Need a hand with unskilled labor? Look no further! Reliable, efficient, and ready to tackle any task. Contact us today for all your labor needs!</p>
                                                        </div>
                                                    </div>
                                                    <img src="images/23.jpg" class="custom-block-image img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </section>


            <section class="timeline-section section-padding" id="about">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">How does it work?</h1>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>

                                    <li>
                                        <h4 class="text-white mb-3">Browse for the Job</h4>

                                        <p class="text-white">Visit our website and browse through our wide range of blue-collar job listings. From construction to landscaping, we've got you covered with various opportunities.</p>

                                        <div class="icon-holder">
                                          <i class="bi-search"></i>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <h4 class="text-white mb-3">Select the Job</h4>

                                        <p class="text-white">Once you've found a job that matches your skills and preferences, simply click on it to view more details. You'll see job requirements, location, and compensation details to help you make an informed decision.</p>

                                        <div class="icon-holder">
                                            <i class="bi-check-all"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Book Your Job</h4>

                                        <p class="text-white">Ready to get to work? Booking is easy! Simply click the "Book Now" button on the job listing page, and follow the prompts to confirm your availability and schedule. Get started on your next blue-collar gig today!</p>

                                        <div class="icon-holder">
                                            <i class="bi-calendar2-check"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 text-center mt-5">
                            <p class="text-white">
                                Want to learn more?
                                <a href="#" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="faq-section section-padding" id="faq">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Frequently Asked Questions</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-5 col-12">
                            <img src="images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What sets CityCare apart from other agencies?
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            At CityCare Services, we differentiate ourselves through our commitment to excellence in service delivery. We prioritize customer satisfaction and strive to provide a seamless and personalized user experience. Additionally, our extensive network of service centers and skilled professionals ensures that we can meet the diverse needs of both job seekers and employers.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Are there any fees for using CityCare Services?
                                    </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            No, there are no fees for job seekers to use CityCare Services. Our services are completely free for individuals seeking employment. We are committed to providing accessible and affordable job solutions to all our users.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Do you provide any training for job seekers?
                                    </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Yes, we offer training and support services to help job seekers enhance their skills and prepare for employment opportunities. Our team can provide guidance on resume writing, interview preparation, and skill development. Additionally, we may offer training programs or workshops in collaboration with our industry partners.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding section-bg" id="contact">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Get in touch</h2>
                        </div>

                        <div class="col-lg-5 col-12 mb-4 mb-lg-0">
<iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d23471.61368651997!2d21.163099033142082!3d42.662378689960605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1763808349560!5m2!1sen!2s" width="420" height="315" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                            <h4 class="mb-3">Head office</h4>

                            <p>Pub Sarania, Chandmari, Guwahati-781003, Assam    </p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Phone</span>

                                <a href="tel: 8638710257" class="site-footer-link">
                                    8638710257
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:hr@citycare.com" class="site-footer-link">
                                    hr@citycare.com
                                </a>
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mx-auto">
                            <h4 class="mb-3">Dibrugarh office</h4>

                            <p>Lane 2, West Milan Nagar, Dibrugarh-786003, Assam</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Phone</span>

                                <a href="tel: 8638710257" class="site-footer-link">
                                    8638710257
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:hr@citycare.com" class="site-footer-link">
                                    hr@citycare.com
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
            </section>
        </main>

<!--footer-->

<footer class="new_footer_area bg_color">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                        <p>Subscribe to our newletter!</p>
                        <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                            <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                            <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </form>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Download</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Android App</a></li>
                            <li><a href="#">ios App</a></li>
                            <li><a href="#">Desktop</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">My tasks</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#faq">FAQ</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Follow us!</h3>
                        <div class="f_social_icon">
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="#" class="fab fa-pinterest"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-7">
                    <p class="mb-0 f_400">© Citycare Services.. 2024 All rights reserved.</p>
                </div>
                <div class="col-lg-6 col-sm-5 text-right">
                    
                </div>
            </div>
        </div>
    </div>
</footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
        
        <script>
            const translationsEn = {
                "Citycare Services":"Citycare Services",
                "Home":"Home",
                "Services":"Services",
                "About":"About",
                "FAQs":"FAQs",
                "Contact":"Contact",
                "Login":"Login",
                "Register":"Register",
                "Customer's satisfaction is our Goal.":"Customer's satisfaction is our Goal.",
                "Any services at your doorstep!":"Any services at your doorstep!",
                "What kind of service do you want?":"What kind of service do you want?",
                "Search":"Search",
                "Get in Touch":"Get in Touch",
                "Subscribe to our newletter!":"Subscribe to our newletter!",
                "Email":"Email",
                "Subscribe":"Subscribe",
                "Help":"Help",
                "FAQ":"FAQ",
                "Follow us!":"Follow us!",
                "Admin Login":"Admin Login"
            };
            const translationsSq = {
                "Citycare Services":"Shërbimet Citycare",
                "Home":"Kreu",
                "Services":"Shërbimet",
                "About":"Rreth Nesh",
                "FAQs":"Pyetjet e Shpeshta",
                "Contact":"Kontakti",
                "Login":"Hyrje",
                "Register":"Regjistrohu",
                "Customer's satisfaction is our Goal.":"Kënaqësia e klientit është qëllimi ynë.",
                "Any services at your doorstep!":"Çdo shërbim në pragun tuaj!",
                "What kind of service do you want?":"Çfarë lloji shërbimi dëshironi?",
                "Search":"Kërko",
                "Get in Touch":"Na Kontaktoni",
                "Subscribe to our newletter!":"Abonohuni në buletinin tonë!",
                "Email":"Email",
                "Subscribe":"Abonohu",
                "Help":"Ndihmë",
                "FAQ":"Pyetjet e Shpeshta",
                "Follow us!":"Na Ndiqni!",
                "Admin Login":"Hyrje Admin"
            };
            function translateTo(language) {
                var translateDict = language==="sq"?translationsSq:translationsEn;

                document.querySelector(".navbar-brand span").textContent = translateDict["Citycare Services"];
                document.querySelectorAll(".navbar-nav a.nav-link").forEach(function(anchor){
                    var key = anchor.getAttribute("data-key");
                    if(translateDict[key]){
                        anchor.textContent = translateDict[key];
                    }
                });
                var heroSlogan = document.querySelector(".hero-section h3");
                if(heroSlogan) heroSlogan.textContent = translateDict["Customer's satisfaction is our Goal."];
                var heroSubtitle = document.querySelector(".hero-section h6");
                if(heroSubtitle) heroSubtitle.textContent = translateDict["Any services at your doorstep!"];
                var keywordInput = document.getElementById("keyword");
                if(keywordInput) keywordInput.setAttribute("placeholder", translateDict["What kind of service do you want?"]);
                var searchBtn = document.querySelector(".hero-section button[type='submit']");
                if(searchBtn) searchBtn.textContent = translateDict["Search"];
                var footerContactTitle = document.querySelector(".new_footer_area h3.f-title");
                if(footerContactTitle) footerContactTitle.textContent = translateDict["Get in Touch"];
                var footerSubscribeText = document.querySelector(".new_footer_area p");
                if(footerSubscribeText) footerSubscribeText.textContent = translateDict["Subscribe to our newletter!"];
                var subscribeEmail = document.querySelector(".new_footer_area input[name='EMAIL']");
                if(subscribeEmail) subscribeEmail.setAttribute("placeholder", translateDict["Email"]);
                var subscribeBtn = document.querySelector(".new_footer_area button.btn_get");
                if(subscribeBtn) subscribeBtn.textContent = translateDict["Subscribe"];
                var helpTitle = document.querySelector(".new_footer_area h3.f-title:nth-of-type(2)");
                if(helpTitle) helpTitle.textContent = translateDict["Help"];
                document.querySelectorAll(".new_footer_area ul.f_list li a").forEach(function(anchor){
                    var text = anchor.textContent.trim();
                    if(translateDict[text]){
                        anchor.textContent = translateDict[text];
                    }
                });
                var followUsTitle = document.querySelector(".new_footer_area h3.f-title:nth-of-type(3)");
                if(followUsTitle) followUsTitle.textContent = translateDict["Follow us!"];
                var adminLoginLink = document.querySelector(".footer_bottom a[href='Admin/login.php']");
                if(adminLoginLink) adminLoginLink.textContent = translateDict["Admin Login"];
            }
            document.getElementById("btn-en").addEventListener("click",function(event){event.preventDefault(); translateTo("en")});
            document.getElementById("btn-sq").addEventListener("click",function(event){event.preventDefault(); translateTo("sq")});
            translateTo("en");
        </script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    </body>
</html>
