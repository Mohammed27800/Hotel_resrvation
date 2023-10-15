<!DOCTYPE html>
<html>
<head>
    <title>Room Details</title>
    <style>
         body {
          background-image: url('room.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        /* Define CSS styles for the image slideshow */
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

        /* Add CSS styles for the previous and next buttons */
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

        /* Add CSS styles for the dots/bullets */
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
    <h1>Room Details</h1>
    
    <?php
    // Get the selected room type from the previous page
    $roomType = $_POST['roomType'];

    // Define an array to map room types to their respective image arrays
    $roomImages = array(
        'Luxury' => array('luxury_room1.jpeg', 'luxury_room2.jpeg', 'luxury_room3.jpeg'),
        'Deluxe' => array('deluxe_room1.jpeg', 'deluxe_room2.jpeg', 'deluxe_room3.jpeg'),
        'Single' => array('single_room1.jpeg', 'single_room2.jpeg', 'single_room3.jpeg')
    );

    // Display room details and image slideshow based on the selected room type
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
        // JavaScript code for image slideshow
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

            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }

        showSlides();

        function currentSlide(n) {
            slideIndex = n + 1;
            showSlides();
        }
    </script>
    

    <a href="01.html">Go back to Room Selection</a>
</body>
</html>
