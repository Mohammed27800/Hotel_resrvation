<!DOCTYPE html>
<html>
<head>
    <title>Room Details</title>
    <link rel="stylesheet" href="../CSS/style2.css">

    <style>
        body {
            background-image: url('room.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .slideshow-container {
            max-width: 450px;
            position: relative;
            margin: auto;
        }

        .mySlides {
            display: none;
        }

        img {
            width: 100%;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .dot-container {
            text-align: center;
            padding: 20px;
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }
    </style>
</head>
<body>
    <header>
        <h1>Room details</h1>
        <nav>
            <ul>
                <li><a href="log-in.html">Main Page</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h1>Room details</h1>

            <?php
                $roomType = $_POST['roomType'];

                $roomImages = array(
                    'Luxury' => array('luxury_room1.png', 'luxury_room2.png', 'luxury_room3.png'),
                    'Deluxe' => array('deluxe_room1.png', 'deluxe_room2.png', 'deluxe_room3.png'),
                    'Single' => array('single_room1.png', 'single_room2.png', 'single_room3.png')
                );

                if (array_key_exists($roomType, $roomImages)) {
                    echo "<p>You have selected a $roomType room. Here are the details:</p>";
                    echo '<div class="slideshow-container">';
                    foreach ($roomImages[$roomType] as $index => $image) {
                        echo "<div class='mySlides'>";
                        echo "<img src='$image' alt='$roomType Room'>";
                        echo "</div>";
                    }
                    echo '</div>';
                    echo '<div class="dot-container">';
                    foreach ($roomImages[$roomType] as $index => $image) {
                        echo "<span class='dot' onclick='currentSlide($index)'></span>";
                    }
                    echo '</div>';
                } else {
                    echo '<p>Invalid room type selection.</p>';
                }
            ?>
            <script>
                let slideIndex = 0;

                function showSlides() {
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("dot");

                    for (let i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }

                    slideIndex++;

                    if (slideIndex > slides.length) {
                        slideIndex = 1;
                    }

                    for (let i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }

                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";

                    setTimeout(showSlides, 2000);
                }

                showSlides();

                function currentSlide(n) {
                    slideIndex = n + 1;
                    showSlides();
                }
            </script>

            <a href="01.html">Go back to Room Selection</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Mohammad Mohjri, Mofareh Al-Hadri, Hatem Al-Qadhi</p>
    </footer>
</body>
</html>
