<?php
include("php/connect.php");

$ID = $_GET["islandOfPersonalityID"];

// Islands
$islandPersonalityQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = $ID";
$islandPersonalityResult = executeQuery($islandPersonalityQuery);

// Content
$islandContentQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID =$ID";
$islandContentResult = executeQuery($islandContentQuery);


// Island Storage of Information
while ($row = mysqli_fetch_assoc($islandPersonalityResult)) {
    $name = $row["name"];
    $shortDescription = $row["shortDescription"];
    $longDescription = $row["longDescription"];
    $image = $row["image"];
    $color = $row["color"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet" />

    <!-- Animate css -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        @font-face {
            font-family: "Inside";
            src: url("fonts/InsideOut-DAp0.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            cursor: default;
        }

        ::-webkit-scrollbar {
            width: 12px;
            height: 100%;
        }

        ::-webkit-scrollbar-track {
            background-color: #2c3e50;
        }

        ::-webkit-scrollbar-thumb {
            background-color: teal;
            border-radius: 10px;
            border: 3px solid #2c3e50;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #017b96;
        }

        .banner {
            height: 80vh;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        }

        .slider-container {
            width: min(1200px, 90vw);
            margin: auto;
        }

        .slider {
            width: 100%;
            height: var(--height);
            overflow: hidden;
            mask-image: linear-gradient(to right, transparent, #000 10% 90%, transparent);
        }

        .slider .list {
            display: flex;
            width: 100%;
            min-width: calc(var(--width) * var(--quantity));
            position: relative;
        }

        .slider .list .item {
            width: var(--width);
            height: var(--height);
            position: absolute;
            left: 100%;
            animation: autoRun 10s linear infinite;
            transition: filter 0.5s;
            animation-delay: calc((10s / var(--quantity)) * (var(--position) - 1) - 10s) !important;
        }

        .slider .list .item img {
            width: 100%;
            height: 200px;
        }

        .slider .list .first .item img {
            width: 100%;
            height: 100px;
        }

        @keyframes autoRun {
            from {
                left: 100%;
            }

            to {
                left: calc(var(--width) * -1);
            }
        }

        .slider:hover .item {
            animation-play-state: paused !important;
            filter: grayscale(1);
        }

        .slider .item:hover {
            filter: grayscale(0);
        }

        .slider[reverse="true"] .item {
            animation: reversePlay 10s linear infinite;
        }

        @keyframes reversePlay {
            from {
                left: calc(var(--width) * -1);
            }

            to {
                left: 100%;
            }
        }

        .island-name,
        .island-image {
            cursor: default;
            font-family: "Inside";
            font-weight: bold;
            transition: transform 0.5s ease-in-out;
        }

        .island-name:hover {
            transform: scale(1.1) rotate(3deg);
        }

        .island-image:hover {
            transform: scale(1.1);
        }


        .short-description,
        .long-description {
            margin: 20px 0;
        }

        .core-memories {
            background-color: rgba(255, 228, 225, .3);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }

        .core-memory {
            text-align: center;
            padding: 15px;
        }

        .core-images {
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .core-images:hover {
            transform: scale(1.1) rotate(5deg);
            filter: brightness(1.2) contrast(1.2);
        }

        .core-memory img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .btnView {
            background-color: rgba(255, 228, 225, .3);
            color: #fff;
            padding: 12px 30px;
            font-size: 16px;
            font-family: 'Inside', sans-serif;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 30px;
            cursor: pointer;
            outline: none;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .btnView:hover {
            color: #fff;
            transform: scale(1.1);
            box-shadow: 0 8px 16px rgba(83, 73, 89, 0.4);
            text-shadow: 0 0 15px #75637f, 0 0 25px #442c68;
        }

        .btnView:focus {
            outline: none;
            box-shadow: 0 0 15px #442c68;
        }
    </style>
</head>

<body style="background-color: <?php echo $color ?>">

    <!-- Island Banner -->
    <div class="container-fluid position-relative" style="height: 80vh;">
        <!-- Blurred Background -->
        <div class="bg-blur" style="background-image: url('images/bgIslands.png'); background-size: cover; background-position: center; height: 100%; width: 100%; position: absolute; top: 0; left: 0; filter: blur(2px); z-index: 0;"></div>

        <!-- Content (Text and Image) -->
        <div class="row align-items-center position-relative" style="height: 100%; z-index: 1;">
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="wow animate__animated animate__zoomInDown animate__slow island-name p-5" style="color: <?php echo $color ?>; 
            z-index: 1; 
            position: relative; 
            background-color: rgba(255, 255, 255, 0.2); 
            border-radius: 50px; 
            padding: 20px 40px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;"><?php echo $name ?></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center">
                <img src="images/<?php echo $image ?>" alt="<?php echo $image ?>" style="z-index: 1; position: relative;" class="wow animate__animated animate__zoomInUp animate__slow img-fluid p-5 island-image">
            </div>
        </div>
    </div>

    <!-- Island Description Section -->
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="wow animate__animated animate__fadeInUp animate__slower p-3" style="font-family: 'Inside'"><?php echo $shortDescription ?></h3>
                <p class="wow animate__animated animate__fadeInUp animate__slower pt-4" style="font-family: 'Poppins', sans-serif"><?php echo $longDescription ?></p>
            </div>
        </div>
    </section>

    <!-- Slider Memories -->
    <div class="wow animate__animated animate__fadeInUp animate__slow container-fluid">
        <div class="row" style="height: 10vh"></div>
        <div class="row">
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
            background-color: rgba(255, 255, 255, 0.2); 
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
    <!-- Core Memories Section -->
    <section class="wow animate__animated animate__slideInUp animate__slow container mt-5 core-memories my-5">
        <h3 class="wow animate__animated animate__fadeInUp animate__slow animate__delay-1s text-center mb-4" style="font-family: 'Inside'; color: #75637f !important;">Core Memories</h3>
        <div class="row">
            <!-- Core Memory 1 -->
            <?php while ($row = mysqli_fetch_assoc($islandContentResult)) {
            ?>
                <div class="wow animate__animated animate__fadeInUp animate__slow animate__delay-2s col-md-4 core-memory p-5">
                    <img class="core-images my-3" src="images/<?php echo $row["image"] ?>" alt="<?php echo $row["content"] ?>">
                    <h5 style="font-family: 'Inside'; margin-block: 30px; color: 
                        <?php
                        $memoryColor = strtolower(trim($row["color"]));
                        if ($memoryColor == "joyful memory") {
                            echo "#FFB600";
                        } elseif ($memoryColor == "sadness memory") {
                            echo "#4682B4";
                        } elseif ($memoryColor == "fearful memory") {
                            echo "#6A0DAD";
                        } elseif ($memoryColor == "raging memory") {
                            echo "#D32F2F";
                        }
                        ?>
                    ">
                        <?php echo $row["color"] ?>
                    </h5>

                    <p style="text-align: justify;"><?php echo $row["content"] ?></p>
                </div>

            <?php } ?>
        </div>

        <div class="row text-center">
            <a href="./#personalities">
                <button class="btnView"> View Other Islands</button>
            </a>
        </div>
    </section>

    <!-- ----------------------Script------------------------ -->

    <!-- Wow Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init(); // Initialize WOW.js
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>