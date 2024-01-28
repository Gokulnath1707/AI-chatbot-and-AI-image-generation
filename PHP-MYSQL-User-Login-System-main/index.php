<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulti Gen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- navbar section   -->

    <header class="navbar-section">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-robot"></i> ULTI Gen</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">about us</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="#services">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">projects</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">signup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- hero section  -->

    <section id="home" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 text-content">
                    <h1>Empowering Conversations<br> Enlightening Solutions</h1>
                    <p>To Access the Our ChatBot, <br> CLick the button 👇
                    </p>
                    <button class="btn" onclick="showLoginMessage()"><i class="bi bi-robot"></i> ChatBot</button>
                    <script>
                    function showLoginMessage() { alert("Please Login First"); }
                    </script>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <img src="images/about.png" alt="" class="img-fluid">
                </div>

            </div>
        </div>
    </section>

    <!-- services section  -->
<!--
    <section class="services-section" id="services">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 services">

                    <div class="row row1">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="images/research.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Research</h4>
                                    <p class="card-text">We build effective strategies to help you reach customers
                                        and
                                        prospects
                                        across the entire.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="images/brand.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Branding</h4>
                                    <p class="card-text">Brand identity represents the visual elements and assets
                                        that
                                        distinguish a brand.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row row2">

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="images/ux.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">UI/UX Design</h4>
                                    <p class="card-text">UI/UX design services focus on creating intuitive &
                                        user-centric
                                        interfaces for digital products.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="images/app-development.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Development</h4>
                                    <p class="card-text">A concept is brought to life through the services various
                                        stages, such
                                        as planning, testing and deployment.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                    <h3>services</h3>
                    <h1>We can help you solve your problem through our service.</h1>
                    <p>We are a brand strategy & digital design agency building brands that matter in culture with more
                        than ten years of experience.</p>
                    <button class="btn">Explore Services</button>
                </div>

            </div>
        </div>
    </section>
-->
    <!-- about section  -->

    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="images/imagegen_img.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                    <h3>AI Image Generator</h3>
                    <h1> Illuminating Creativity,<br> Pixel by Pixel...!</h1>

                 <p>"Unleash the power of your imagination with AI image generation - <br>
                    where pixels become canvases, and creativity knows no bounds. Witness the magic of AI as it brings your visions to life,<br>
                     crafting visual masterpieces with every pixel."</p>
                     <button class="btn" onclick="showLoginMessage()"><i class="bi bi-images"></i> AI Image Gen</button>
                    <script>
                    function showLoginMessage() { alert("Please Login First"); }
                    </script>
                </div>
            </div>
        </div>
    </section>

    <!-- project section  -->
   
    <section class="project-section" id="projects">
        <div class="container">
            <div class="row text">
                <div class="col-lg-6 col-md-12">
                    <h3>To Know</h3>
                    <h1>ABOUT OUR SITE</h1>
                    <hr>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>  <p>"Enter the realm of infinite possibilities with our AI-powered chatbot and image generator site. <br>
                    Unleash creativity, engage in insightful conversations, <br>and watch imaginations come to life with just a click."</p></p>
                </div>
            </div>
            <div class="row project">

                

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                            <h4 class="card-title">ChatBot</h4>
                                <p class="card-text">Conversational AI for interactive communication.</p>
                                <button class="btn" onclick="showLoginMessage()"><i class="bi bi-robot"></i> ChatBot</button>
                    <script>
                    function showLoginMessage() { alert("Please Login First"); }
                    </script>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                            <h4 class="card-title">AI Image Generator</h4>
                                <p class="card-text">"Innovative AI-driven image creation tool."</p>
                                <button class="btn" onclick="showLoginMessage()"><i class="bi bi-images"></i> AI Image Gen</button>
                    <script>
                    function showLoginMessage() { alert("Please Login First"); }
                    </script>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>

        </div>
    </section>
 
    <!-- contact section  -->

    <section class="contact-section" id="contact">
        <div class="container">

            <div class="row gy-4">

                <h1>contact us</h1>
                <div class="col-lg-6">

                <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>Main Road,<br>Pollachi, 642133</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+91 7339397567</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>7amventure@gmail.com</p>
                            </div>
                        </div>
                        
                    </div>

                </div>

                <div class="col-lg-6 form">
                    <form action="contact.php" method="POST" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>

    <!-- footer section  -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="logo"><i class="bi bi-robot"></i>ULTI Gen</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <!--<ul class="d-flex">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="#">projects</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>-->
                </div>

                <div class="col-lg-2 col-md-12 col-sm-12">
                    <p>&copy;2024_7AMVENTURES</p>
                </div>

                <div class="col-lg-1 col-md-12 col-sm-12">
                    <!-- back to top  -->

                    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                            class="bi bi-arrow-up-short"></i></a>
                </div>

            </div>

        </div>

    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>