<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="icon" href="./images/github.png" type="image/png" />

    <!-- Animate css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- Bootstrap -->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent px-5">
      <div class="container headerB">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
          <img
            src="images/wordSite.png"
            alt="KARM"
            style="width: 80px; height: 30px"
          />
        </a>

        <!-- Navbar Toggler for Mobile View -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link active wow animate__animated animate__fadeInLeft animate__delay-1s"
                href="#"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link wow animate__animated animate__fadeInLeft animate__delay-1s"
                href="#About"
                >About</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link wow animate__animated animate__fadeInLeft animate__delay-1s"
                href="projects/HomePage/projectPage.php"
                >Projects</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link wow animate__animated animate__fadeInLeft animate__delay-1s"
                href="./404.php"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Starry Background -->
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
      <div class="container">
        <div class="row" style="height: 200px"></div>
        <div class="row">
          <div class="col-md-6 col-12 home-content p-5">
            <h1 class="wow animate__animated animate__fadeInLeft">
              Hi, I'm Ken Aeron!
            </h1>
            <h3
              class="wow animate__animated animate__fadeInLeft animate__delay-1s"
            >
              IT Student
            </h3>
            <p
              class="wow animate__animated animate__fadeInLeft animate__delay-2s"
            >
              I'm 20 years old and currently studying web development. This
              website is for educational and future purposes.
            </p>
            <div
              class="btn-box wow animate__animated animate__fadeInLeft animate__delay-3s me-3"
            >
              <a href="#">Hire Me</a>
              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" alt="?"
                >Let's Talk</a
              >
            </div>
          </div>
          <div
            class="col-md-6 col-12 home-image px-5 wow animate__animated animate__zoomInUp animate__delay-1s animate__slower pt-5"
          >
            <img src="images/karmLogo.png" alt="K's" />
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row" style="height: 100px"></div>
        <div class="row">
          <div class="col-12">
            <div class="section" id="About">
              <h2
                class="section_title wow animate__animated animate__slideInLeft"
              >
                About <span class="section_title_highlight">Me</span>
              </h2>
              <p
                class="section_info wow animate__animated animate__slideInLeft"
              >
                Hello, I am Ken Aeron Milorin, a third-year IT student based in
                the Philippines. With over
                <span class="text_highlight">6 months</span> of hands-on
                experience in web development, I have gained proficiency in a
                variety of web technologies. My skill set includes HTML, CSS,
                JavaScript, PHP, C, Python, Java, and Bootstrap. I am passionate
                about my work, consistently delivering well-coded, reliable
                websites. While my projects so far have been for academic
                purposes, I am eager to expand my portfolio and expertise.
                <span class="text_highlight"
                  >I am particularly interested in game development, which I
                  plan to pursue further upon graduation.</span
                >
                Feel free to explore my work in the
                <span class="text_highlight">Projects section</span>. I am
                always open to new opportunities and collaborations, and I pride
                myself on my ability to communicate effectively to bring your
                vision to life.
              </p>
            </div>
          </div>
        </div>
        <div class="row" style="height: 100px"></div>
        <div class="row">
          <div
            class="col-12 px-5"
            style="border-top: 2px solid #fff; padding-top: 50px"
          >
            <div class="tech">
              <h2
                class="fade-in-on-scroll visible wow animate__animated animate__slideInLeft"
              >
                Skills
              </h2>
              <div
                class="icons wow animate__animated animate__fadeInUp"
                style="padding-top: 20px"
              >
                <div class="icon">
                  <i class="bx bxl-php"></i>
                  <h3>PHP</h3>
                </div>
                <div class="icon">
                  <i class="bx bxl-html5"></i>
                  <h3>HTML</h3>
                </div>
                <div class="icon">
                  <i class="bx bxl-css3"></i>
                  <h3>CSS</h3>
                </div>
                <div class="icon">
                  <i class="bx bxl-javascript"></i>
                  <h3>Javascript</h3>
                </div>
                <div class="icon">
                  <i class="bx bxl-python"></i>
                  <h3>Python</h3>
                </div>
                <div class="icon">
                  <i class="bx bxl-java"></i>
                  <h3>Java</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row"></div>
        <div class="row" style="height: 100px"></div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="./assets/main.js"></script>
    <!-- Wow Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init(); // Initialize WOW.js
    </script>
  </body>
</html>