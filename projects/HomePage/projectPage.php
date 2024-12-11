<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projects</title>
  <link rel="icon" href="../../images/github.png" type="image/png" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />

  <!-- Animate css -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Bootstrap -->

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="./style.css" />


  <style>
    .navbar {
      z-index: 1000;
    }

    .navbar-brand {
      position: relative;
    }

    ::-webkit-scrollbar {
      width: 12px;
    }

    ::-webkit-scrollbar-thumb {
      background: #00abf0;
      border-radius: 20px;
    }

    ::-webkit-scrollbar-track {
      background: #081b29;
    }

    .navbar-brand::before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      width: 105%;
      height: 105%;
      background: #081b29;
      animation: showRight 1s ease-out forwards;
      animation-delay: 0.4s;
    }

    .nav-link {
      font-size: 18px;
      color: #ededed;
      text-decoration: none;
      font-weight: 500;
      margin-left: 35px;
    }

    .nav-link:hover {
      color: #00abf0;
    }

    .nav-link.active {
      color: #00abf0 !important;
      cursor: default;
    }

    .card-container {
      height: 500px;
      width: 100%;
    }

    .card-text {
      max-width: 300px;
    }

    .card-title {
      font-size: 2rem;
    }

    .glass-card {
      position: relative;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .glass-card:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .overlay-content {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      backdrop-filter: blur(15px);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .glass-card:hover .overlay-content {
      opacity: 1;
    }

    .embed-container embed {
      pointer-events: none;
    }

    @media (max-width: 768px) {
      .home-content h1 {
        font-size: 2.5rem;
      }

      .project-button {
        font-size: 1rem;
        padding: 0.8rem 1.5rem;
      }
    }

    @media (max-width: 480px) {
      .home-content h1 {
        font-size: 2rem;
      }

      .project-button {
        font-size: 0.9rem;
        padding: 0.7rem 1.2rem;
      }

      .projects {
        width: 90%;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-transparent px-5">
    <div class="container headerB">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <img
          src="../../images/wordSite.png"
          alt="KARM"
          style="width: 80px; height: 30px" />
      </a>

      <!-- Navbar Toggler for Mobile View -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links -->
      <div
        class="collapse navbar-collapse justify-content-end"
        id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a
              class="nav-link wow animate__animated animate__fadeInLeft animate__delay-1s"
              href="../../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link wow animate__animated animate__fadeInLeft animate__delay-2s"
              href="../../index.php#About">About</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link wow active animate__animated animate__fadeInLeft animate__delay-3s"
              href="#">Projects</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link wow animate__animated animate__fadeInLeft animate__delay-4s"
              href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="stars">
    <!-- Create 100 stars dynamically -->
    <script>
      for (let i = 0; i < 100; i++) {
        let star = document.createElement("div");
        star.className = "star";
        star.style.left = Math.random() * 100 + "vw";
        star.style.top = Math.random() * 150 + "vh";
        star.style.animationDelay = Math.random() * 1 + "s";
        star.style.animationDuration = Math.random() * 10 + 4 + "s";
        document.querySelector(".stars").appendChild(star);
      }
    </script>
    <div class="wow animate__animated animate__fadeInUp animate__slow container-fluid">
      <div class="row" style="height: 50px"></div>
      <div class="row">
        <div class="col-12">
          <h1 class="text-center text-light">My Projects</h1>
        </div>
      </div>
      <div class="projects p-5">
        <button
          class="project-button"
          onclick="window.location.href='../A08/index.php';">
          Inside Out
        </button>
        <button
          class="project-button"
          onclick="window.location.href='../../404.php';">
          On Status
        </button>
        <button
          class="project-button"
          onclick="window.location.href='../../404.php';">
          On Status
        </button>
        <button
          class="project-button"
          onclick="window.location.href='../../404.php';">
          On Status
        </button>
        <button class="project-button" onclick="window.location.href='../../404.php';">
          On Status
        </button>
      </div>
    </div>
  </div>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!-- Wow Js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>
    new WOW().init(); // Initialize WOW.js
  </script>
</body>

</html>