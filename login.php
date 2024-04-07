    <?php
    $insert=false;
    if(isset($_POST['name'])){
        //set connection variables
       $server="localhost";
       $username="root";
       $password="";
    
       //create a connection
       $con= mysqli_connect($server, $username, $password);
    
       //check for connection status
       if(!$con){
        die("connection to this database failed due to" . 
        mysqli_connect_error());
    
       }
       //echo "success connecting to db";
    
       //collect post variables
    $name = $_POST['name'];
	$phone = $_POST['phone'];
	$roll = $_POST['roll'];
	$person = $_POST['person'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $message = $_POST['message'];
      $sql = " INSERT INTO `restor`.`login` ( `name`, `phone`, `roll`, `person`, `email`, `message`, `dt`)
       VALUES ('$name', '$phone', '$roll', '$person', '$email', '$message', current_timestamp());";
      // echo $sql;
    
      //Execute the query
       if($con->query($sql)== true)
       {
       // echo"successfully inserted";
    
       //Flag for successful insertion
       $insert= true;
       }
       else{
        echo "ERROR: $sql <br> $con->error";
       }
       //close database connection
       $con->close();
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>FRCRCE CAFE</title>
  <meta name="title" content="CRCE Caffe">
  <meta name="description" content="cafe">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">CRCE CAFE</p>
  </div>





  <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          Fr. Agnel Ashram, Bandstand, Bandra (W), Mumbai
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Daily : 8.00 am to 3.00 pm</span>
      </div>

      <a href="tel:+11234567890" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+91 22-6711 4100</span>
      </a>

      <div class="separator"></div>

      <a href="crce@frcrce.ac.in" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">crce@frcrce.ac.in</span>
      </a>

    </div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="index.html" class="logo">
        <img src="./assets/images/frlogo.jpg" width="80" height="30" alt="cafe Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/images/logo.svg" width="160" height="50" alt="cafe Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="menu.html" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Menus</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#events" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Events</span>
            </a>
          </li>


          <li class="navbar-item">
            <a href="#reservations" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Contact</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Visit Us</p>

          <address class="body-4">
            Fr. Agnel Ashram, Bandstand, <br>
            Bandra (W), Mumbai
          </address>

          <p class="body-4 navbar-text">Open: 9.30 am - 2.30pm</p>

          <a href="crce@frcrce.ac.in" class="body-4 sidebar-link">crce@frcrce.ac.in</a>

          <div class="separator"></div>

          <p class="contact-label">Order Request</p>

          <a href="tel:+91 22-6711 4100" class="body-1 contact-number hover-underline">
            +91 22-6711 4100
          </a>
        </div>

      </nav>

      <a href="#" class="btn btn-secondary">
        <span class="text text-1">Order Online</span>

        <span class="text text-2" aria-hidden="true">Order Now</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/coca.jpeg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Street</p>

            <h1 class="display-1 hero-title slider-reveal">
             
            </h1>

            <p class="body-2 hero-text slider-reveal">
              
            </p>

            <a href="menu.html" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>

              <span class="text text-2" aria-hidden="true">View Our Menu</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/fast.jpeg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Fast Food</p>

            <h1 class="display-1 hero-title slider-reveal">
             
            </h1>

            <p class="body-2 hero-text slider-reveal">
              
            </p>

            <a href="menu.html" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>

              <span class="text text-2" aria-hidden="true">View Our Menu</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/coca.jpeg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Drinks</p>

            <h1 class="display-1 hero-title slider-reveal">
             
            </h1>

            <p class="body-2 hero-text slider-reveal">
           
            </p>

            <a href="menu.html" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>

              <span class="text text-2" aria-hidden="true">View Our Menu</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#" class="hero-btn has-after">
          <img src="./assets/images/hero-icon.png" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">Order</span>
        </a>

      </section>

      <!-- 
        - #RESERVATION
      -->
      <?php
      if($insert == true){
          echo "<p class='submitMsg':)</p>";
      }
?>
      <section class="reservation">
        <div class="container">

          <div class="form reservation-form bg-black-10">

            <form action="login.php" method="Post" class="form-left">

              <h2 class="headline-1 text-center">Order Online</h2>

              <p class="form-text text-center">
                To Order Call <a href="tel:+91 22-6711 4100" class="link">+91 22-6711 4100</a>
                or fill out the order form
              </p>

              <div class="input-wrapper">
                <input type="text" name="name" placeholder="Your Name" autocomplete="off" class="input-field">

                <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field">

                <input type="tel" name="roll" placeholder="Roll Number" autocomplete="off" class="input-field">

                <input type="email" name="email" placeholder="Email" autocomplete="off" class="input-field">

                <input type="password" name="password" placeholder="Password" autocomplete="off" class="input-field">



              </div>


              <div class="input-wrapper">

                <div class="icon-wrapper">
                  <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                  <select name="person" class="input-field">
                    <option value="1-person">1st Year</option>
                    <option value="2-person">2nd Year</option>
                    <option value="3-person">3rd Year</option>
                    <option value="4-person">4th Year</option>
                  </select>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

              </div>

              <textarea name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>

              <button type="submit" class="btn btn-secondary">
                <span class="text text-1">Submit</span>

                <span class="text text-2" aria-hidden="true">Submit</span>
              </button>
             
              
             
            </form>

            <div class="form-right text-center" style="background-image: url('./assets/images/form-pattern.png')">

              <h2 class="headline-1 text-center">Contact Us</h2>

              <p class="contact-label">Order Request</p>

              <a href="tel:+91 22-6711 4100" class="body-1 contact-number hover-underline">+91 22-6711 4100</a>

              <div class="separator"></div>

              <p class="contact-label">Location</p>

              <address class="body-4">
                Fr. Agnel Ashram, Bandstand, <br>
                Bandra (W), Mumbai
              </address>



            </div>

          </div>

        </div>
      </section>





     




      <!-- 
        - #EVENT
      -->

      <section class="section event bg-black-10" aria-label="event">
        <div class="container">

          <p class="section-subtitle label-2 text-center">Recent Updates</p>

          <h2 class="section-title headline-1 text-center">Upcoming Event</h2>

          <ul class="grid-list">

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/atlos.jpg" width="350" height="400" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-15">01/02/2024</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center"></p>

                  <h3 class="card-title title-2 text-center">
                   
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/hacka.jpg" width="350" height="400" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-08">04/02/2024</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center"></p>

                  <h3 class="card-title title-2 text-center">
                   
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/tedx.jpg" width="350" height="400" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-03">03/02/2024</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center"></p>

                  <h3 class="card-title title-2 text-center">
                    
                  </h3>
                </div>

              </div>
            </li>

          </ul>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">Our Events</span>

            <span class="text text-2" aria-hidden="true">Our Events</span>
          </a>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center"
    style="background-image: url('./assets/images/footer-bg.jpg')">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="index.html" class="logo">
            <img src="./assets/images/frlogo.jpg" width="160" height="50" loading="lazy" alt="grilli home">
          </a>

          <address class="body-4">
            Fr. Agnel Ashram, Bandstand, <br>
            Bandra (W), Mumbai
          </address>

          <a href="crce@frcrce.ac.in" class="body-4 contact-link">crce@frcrce.ac.in</a>

          <a href="tel:+91 22-6711 4100" class="body-4 contact-link">Order Request :</a>

          <p class="body-4">
            Open : 09:00 am - 03:00 pm
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          

          <p class="label-1">
            Login To Order <span class="span"></span>
          </p>

          <form action="" class="input-wrapper">
           

            <button type="submit" class="btn btn-secondary">
              <span class="text text-1">Sign Up</span>

              <span class="text text-2" aria-hidden="true">Sign In</span>
            </button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <a href="index.html" class="label-2 footer-link hover-underline">Home</a>
          </li>

          <li>
            <a href="menu.html" class="label-2 footer-link hover-underline">Menus</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Events</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Contact</a>
          </li>

        </ul>

        <ul class="footer-list">

          
          <li>
            <a href="https://www.instagram.com/frcrce_official?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc
            0MzIxNw==" class="label-2 footer-link hover-underline">Instagram</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
          </li>

          <li>
            <a href="https://www.google.com/maps/place/Fr.+Conceicao+Rodrigues+College+of+Engineering/@19.0443533,72.8203705,17
            z/data=!4m6!3m5!1s0x3be7c9410830616d:0x111b63353dbbce01!8m2!3d19.044333!4d72.8
            203705!16zL20vMDhtMWZq?authuser=0&hl=en&entry=ttu" class="label-2 footer-link hover-underline">Google Map</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <p class="extra">
          
        </p>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>