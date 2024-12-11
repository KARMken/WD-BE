<?php
include("php/connect.php");

$islandOfPersonalityQuery = "SELECT * FROM islandsofpersonality";
$islandOfPersonalityResult = executeQuery($islandOfPersonalityQuery);


?>
<!DOCTYPE html>
<html>

<head>
  <title>Inside Out</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="css/index.css" class="rel">

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet" />

  <!-- Animate css -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p {
      cursor: default;
    }
  </style>
</head>

<body>

  <!-- Header / Home-->
  <header class="w3-display-container w3-wide bgImage w3-grayscale-min">
    <div class="banner">
      <div class="bg bg-0" id="bg0"></div>
      <div class="wow animate__animated animate__slideInRight animate__slow bg bg-1" id="bg1"></div>
      <div class="wow animate__animated animate__slideInLeft animate__slow bg bg-2" id="bg2"></div>
      <div class="w3-display-middle w3-text-white w3-center" style="padding-bottom: 40vh">
        <h1 class="wow animate__animated animate__fadeInUp animate__slower" style="font-size: 6rem; letter-spacing: -1px">Inside Out</h1>
        <h4 class="wow animate__animated animate__fadeInUp  animate__delay-2s">A look from</h4>
        <h5 class="wow animate__animated animate__fadeInUp  animate__delay-2s"><b>My Personality</b></h5>
      </div>
    </div>
  </header>

  <!-- Navbar (sticky bottom) -->
  <div class="w3-bottom w3-hide-small">
    <div class="w3-bar w3-blue w3-center w3-padding w3-opacity-min w3-hover-blue">
      <a href="#memories" style="width:33%" class="w3-bar-item w3-button">Core Memories</a>
      <a href="#me" style="width:33%" class="w3-bar-item w3-button">Me</a>
      <a href="#personalities" style="width:33%" class="w3-bar-item w3-button">Personalities</a>
    </div>
  </div>

  <div class="container-fluid w3-grayscale-min" style="background-color: #5a4665">
    <div class="row" style="height: 50px" id="memories"></div>
    <div class="row ">
      <div class="col slider-container">
        <div class="slider" style="
            --width: 100px;
            --height: 50px;
            --quantity: 10;
        ">
          <div class="list">
            <div class="first">
              <div class="item" style="--position: 1"><img src="images/family2.png" alt=""></div>
              <div class="item" style="--position: 2"><img src="images/friendship3.png" alt=""></div>
              <div class="item" style="--position: 3"><img src="images/gaming2.png" alt=""></div>
              <div class="item" style="--position: 4"><img src="images/imagination4.png" alt=""></div>
              <div class="item" style="--position: 5"><img src="images/imagination2.png" alt=""></div>
              <div class="item" style="--position: 6"><img src="images/friendship3.png" alt=""></div>
              <div class="item" style="--position: 7"><img src="images/family4.png" alt=""></div>
              <div class="item" style="--position: 8"><img src="images/imagination3.png" alt=""></div>
              <div class="item" style="--position: 9"><img src="images/gaming4.png" alt=""></div>
              <div class="item" style="--position: 10"><img src="images/family3.png" alt=""></div>
            </div>

          </div>
        </div>

        <div class="slider" reverse="true" style="
            --width: 200px;
            --height: 200px;
            --quantity: 9;
            background-color: #815d95
        ">
          <div class="list">
            <div class="item" style="--position: 1"><img src="images/family2.png" alt=""></div>
            <div class="item" style="--position: 2"><img src="images/friendship3.png" alt=""></div>
            <div class="item" style="--position: 3"><img src="images/gaming2.png" alt=""></div>
            <div class="item" style="--position: 4"><img src="images/imagination4.png" alt=""></div>
            <div class="item" style="--position: 5"><img src="images/imagination2.png" alt=""></div>
            <div class="item" style="--position: 6"><img src="images/friendship3.png" alt=""></div>
            <div class="item" style="--position: 7"><img src="images/family4.png" alt=""></div>
            <div class="item" style="--position: 8"><img src="images/imagination3.png" alt=""></div>
            <div class="item" style="--position: 9"><img src="images/gaming4.png" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Me -->
  <div class="w3-container w3-padding-64 w3-pale-yellow w3-grayscale-min" id="me">
    <div class="w3-content">
      <h1 class="wow animate__animated animate__fadeInUp norm w3-center w3-text-blue" style="font-size:3rem; margin-bottom: 50px"><b>Hi, I'm Ken</b></h1>
      <p class="wow animate__animated animate__fadeInUp w3-text-black" style="font-size:2rem; margin-bottom: 100px"><i>Growing up, my world was a colorful mix of curiosity, imagination, and learning—each emotion playing a role in shaping who I am today. From adventures with friends to moments of self-discovery, my childhood was a journey of growth, laughter, and challenges. Dive into my story, and discover the moments that made me who I am!

        </i>
      </p><br>
      <p class="w3-center"><a href="#personalities" class="wow animate__animated animate__fadeInUp animate__slow w3-button w3-teal w3-round w3-padding-large w3-large">View Islands</a></p>
    </div>
  </div>

  <!-- Background photo -->
  <div class="w3-display-container bgimg2">
    <div class="w3-display-middle w3-text-white w3-center">
      <h1 class="wow animate__animated animate__fadeInUp animate__slower w3-jumbo">Discover my Personalities</h1><br>
    </div>
  </div>




  <div class="w3-container" style="padding:100px 16px" id="personalities">
    <div class="w3-row-padding" style="margin-top:20px">
      <?php while ($islandRow = mysqli_fetch_assoc($islandOfPersonalityResult)) { ?>
        <div class="w3-col l3 m6">
          <a href="view.php?islandOfPersonalityID=<?php echo $islandRow["islandOfPersonalityID"] ?>">
            <img class="wow animate__animated animate__slideInUp animate__slow islandImage" src="images/<?php echo $islandRow['image'] ?>" style="width:100%" alt="A microphone">
          </a>
        </div>
      <?php  } ?>
    </div>
  </div>



  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-16">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  </footer>
  <div class="w3-hide-small" style="margin-bottom:32px; background-color:black"> </div>

  <!-- ----------------------Script------------------------ -->

  <!-- Wow Js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>
    new WOW().init(); // Initialize WOW.js
  </script>

  <!-- Scroll banner -->
  <script src="js/scroll.js"></script>
</body>

</html>