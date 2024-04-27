<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turbines</title>
    <!-- Flaticon Website -->
    <link rel="icon" href="img/pexels-pixabay-414837.jpg">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="color:black;background-color:white ;">

<img src="img/Remote Control Centre (4).png" alt="Small Image" id="topleftImage">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
    h1 {
        text-align: center;
    }
</style>
<div>
    <style>
        /* Add some basic styling to the navigation bar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 5;
            width: 5;
        }

        .navbar {
            background-color: #3CB371;
            overflow: hidden;
            Color: WHITE;
            margin-top: 5px;
            font-size: 15PX;
            line-height: 20px;
            font-weight: bold;
        }

        .navbar a {
            float: left;
            display: block;
            text-align: CENTER;
            padding: 4.5px 120px;
            text-decoration: none;
            height: 20px;
        }

        .navbar a:hover {
            color: black;
            touch-action: none;
        }

        /* Default styles */
        /* Add your default CSS styles here */

        /* Media query for small devices (e.g., smartphones) */
        @media only screen and (max-width: 767px) {
            /* CSS rules for small devices */
            /* Adjust layout, font sizes, etc. for smaller screens */
            .navbar {
                /* Example: Reduce padding on the navbar for small screens */
                padding: 5px;
            }

            .jumbotron {
                /* Example: Increase font size for headings in the jumbotron */
                font-size: 24px;
            }
        }

        /* Media query for medium devices (e.g., tablets) */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            /* CSS rules for medium devices */
            /* Adjust layout, font sizes, etc. for medium-sized screens */
            .navbar {
                /* Example: Increase padding on the navbar for medium screens */
                padding: 15px;
            }

            .jumbotron {
                /* Example: Decrease font size for headings in the jumbotron */
                font-size: 20px;
            }
        }

        /* Media query for large devices (e.g., desktops) */
        @media only screen and (min-width: 600px) {
            /* Styles for laptop and larger screens */
            .container {
                width: 60%;
            }
        }

    </style>
    <DIV>

        <nav class="navbar">
            <!-- Add seven buttons with unique IDs and onclick events -->


            <a href='https://rccstatus123.neocities.org/event/Rcc'>Home</a>
            <a href='https://rccstatus123.neocities.org/event/event'>RCC STATUS</a>
            <a href='http://192.168.14.26/scada/overview/dashboard'>EVERRENEW</a>
            <a href='https://125.20.183.173/'>GE SCADA</a>
            <a href='https://www.rooktec.in/wmapp/'>SGRE SCADA</a>
        </nav>
</div>

<script>
    function toggleDropdown(id) {
        var dropdown = document.getElementById(id);
        var dropdowns = document.querySelectorAll('.dropdown-content');
        dropdowns.forEach(function (element) {
            if (element.id !== id) {
                element.classList.remove('show');
            }
        });
        dropdown.classList.toggle('show');
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.querySelectorAll('.dropdown-content');
            dropdowns.forEach(function (element) {
                element.classList.remove('show');
            });
        }
    }
</script>

</body>
</div>


<body>
<nav>
    <header>

    </header>
</nav>
<div>
    <style>
        /* Style to create a horizontal scrolling container */
        #image-container {
            width: 100%;
            overflow-x: scroll;
            white-space: nowrap;
        }

        /* Style for each image in the scrolling container */
        .scrolling-image {
            display: inline-block;
            width: 1100px; /* Adjust the width as needed */
            margin-right: 10px; /* Adjust the margin between images as needed */
        }
    </style>
</head>
<body>

<!-- Container for scrolling images -->
<div id="image-container">
    <!-- Images with the class 'scrolling-image' -->
    <?php
    // PHP code to dynamically generate image tags
    $imagePaths = [
        "img/Screenshot 2024-01-29 175109.png",
        "img/Screenshot 2024-01-29 175427.png",
        "img/Screenshot 2024-01-29 175627.png"
        // Add more image paths as needed
    ];

    foreach ($imagePaths as $path) {
        echo "<img class='scrolling-image' src='$path' alt='Image'>";
    }
    ?>
    <!-- Add more images as needed -->
</div>

<script>
    // JavaScript to handle scrolling behavior
    var imageContainer = document.getElementById('image-container');

    // You can adjust the scroll speed by changing the value of 'scrollAmount'
    var scrollAmount = 1;

    function scrollImages() {
        imageContainer.scrollLeft += scrollAmount;

        // Reset the scroll position when it reaches the end
        if (imageContainer.scrollLeft >= (imageContainer.scrollWidth - imageContainer.clientWidth)) {
            imageContainer.scrollLeft = 1;
        }
    }

    // Set an interval for scrolling
    setInterval(scrollImages, 50); // Adjust the interval as needed
</script>

</div>
<header>
    <div id="photo-container" style="display: none;">
        <img class="photo" src
