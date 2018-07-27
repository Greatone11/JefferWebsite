<!DOCTYPE html>
<html>
<title>Jefferson Montalvo</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="magnific.css">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Montserrat", sans-serif
  }

  .w3-row-padding img {
    margin-bottom: 12px
  }

  /* Set the width of the sidebar to 120px */

  .w3-sidebar {
    width: 120px;
    background: #222;
  }

  .text {
    padding-left: 590px;
    padding-bottom: 50px;
  }

  .form-container {
    border: 0px solid #fff;
    padding: 30px 40px;
    margin-top: 20vh;
    margin-bottom: 20vh;
    -webkit-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
  }


  /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */

  #main {
    margin-left: 120px
  }

  /* Remove margins from "page content" on small screens */

  @media only screen and (max-width: 600px) {
    #main {
      margin-left: 0
    }
  }
</style>

<body class="w3-black">

  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="jbw.jpg" style="width:100%" width="150" height="150">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>ABOUT</p>
    </a>
    <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>PHOTOS</p>
    </a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->
  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
      <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
      <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
      <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    </div>
  </div>

  <!-- Page Content -->
  <div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
      <h1 class="w3-jumbo">
        <span class="w3-hide-small"></span> Jefferson Montalvo.</h1>
      <img src="jbw.jpg" alt="" class="w3-image" width="640" height="799">
    </header>

    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">

      <hr style="width:200px" class="w3-opacity">
      <p style="font-size:20px; padding-left: 100px">I'm Jefferson, a photographer and fashion designer from a small town.
      </p>


      <br>



      <!-- Portfolio Section -->
      <div class="w3-padding-64 w3-content" id="photos">
        <h2 class="w3-text-light-grey">Catalog</h2>
        <hr style="width:200px" class="w3-opacity">

        <!-- Grid for photos -->
        <!--<div class="popup-gallery">
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <img src="one.jpg" style="width:100%">
              <img src="two.jpg" style="width:100%">
              <img src="three.jpg" style="width:100%">
              <img src="smoke.jpg" style="width:100%">
              <img src="sec.jpg" style="width:100%">
              <img src="one.jpg" style="width:100%">
            </div>-->
        <div class="w3-row-padding" style="margin:0 -16px">
          <div class="w3-half">
            <div class="popup-gallery">

              <a href="one.jpg" title="The Cleaner">
                <img src="one.jpg" width="100%">
              </a>
              <a href="two.jpg" title="Winter Dance">
                <img src="two.jpg" width="100%">
              </a>
              <a href="three.jpg" title="The Uninvited Guest">
                <img src="three.jpg" width="100%">
              </a>
            </div>
          </div>

          <div class="popup-gallery">
            <div class="w3-half">
              <a href="sec.jpg" title="Oh no, not again!">
                <img src="sec.jpg" width="100%">
              </a>
              <a href="smoke.jpg" title="Swan Lake">
                <img src="smoke.jpg" width="100%">
              </a>
              <a href="moon.jpg" title="Swan Lake">
                <img src="moon.jpg" width="100%">
              </a>
              <a href="adv.jpg" title="Swan Lake">
                <img src="adv.jpg" width="100%">
              </a>
            </div>
          </div>


        </div>



        <!-- End photo grid -->
      </div>
    </div>
    <!-- End Portfolio Section -->
  </div>

  <!--Instagram-->
  <div class="instagram">
    <div class="text">
      <h2 class="w3-text-light-grey"> Recent Instagram Feed</h2>
    </div>
    <div class="container">

      <div id="instafeed" class="row gallery"></div>

    </div>


    <script src="jquery.min.js"></script>
    <script src="instafeed.min.js"></script>
    <script src="magnific.min.js"></script>
    <script src="custom.js"></script>

    <!--End of Instagram-->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p>
        <i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Orlando, US</p>
      <p>
        <i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: 407-680-8622</p>
      <p>
        <i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: jeffersonm2323@gmail.com</p>
    </div>
    <br>
    <p>Lets get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p>
        <input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name">
      </p>
      <p>
        <input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email">
      </p>
      <p>
        <input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject">
      </p>
      <p>
        <input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message">
      </p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    <!-- End Contact Section -->
  </div>

  <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">

    <a href="https://www.instagram.com/jeffersonsweirdworld" class="fa fa-instagram w3-hover-opacity"></a>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>


    <!-- End footer -->
  </footer>

  <!-- END PAGE CONTENT -->
  </div>

</body>

</html>