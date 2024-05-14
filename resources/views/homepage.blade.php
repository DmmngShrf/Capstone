<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    <title>RentEase</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        header {
            margin-left: 5%;
            margin-right: 5%;
            background-color: white;
            color: #9c3f3f;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: #9c3f3f;
            text-decoration: none;
            margin-right: 2%;
            margin-bottom: 0%;
        }

        main {
            padding: 20px;
        }

        .property-grid {
            margin-left: 5%;
            margin-right: 5%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .property-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            text-align: center;
        }

        .property-card img {
            width: 100%;
            height: 200px; /* Fixed height for images */
            object-fit: cover; /* Cover the container */
        }

        .swiper-pagination {
            position: absolute;
            bottom: 10px; /* Adjust the position as needed */
            transform: translateY(-960%);
        }

        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            margin: 0 5px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.8) /* Adjust the background color opacity as needed */
            cursor: pointer;
        }

        .property-details {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .property-details h2,
        .property-details p {
            margin-bottom: 10px;
        }

        .property-details button {
            padding: 8px 20px;
            font-size: 16px;
            background-color: #9c3f3f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <h1>RentEase</h1>
    </div>
    <nav>
        @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('registration') }}">Register</a>
        @else
            <a href="{{ route('logout') }}">Logout</a>
        @endguest
    </nav>
</header>
<hr>
<main>
<div class="property-grid">
        <?php
        // Fetch properties
        $properties = [
            [
                "images" => ["Image/1.jpg", "Image/2.jpg", "Image/3.jpg", "Image/4.jpg"],
                "title" => "HI CRUSH!!!!!",
                "location" => "ANG GANDA MO PO",
                "price" => "₱100,000,000,000,000,000"
            ],
            [
                "images" => ["Image/1.jpg", "Image/2.jpg", "Image/3.jpg", "Image/4.jpg"],
                "title" => "Bed spacer for Rent",
                "location" => "P. Santos, Zamboanga City",
                "price" => "₱1,000/Month"
            ],
            [
                "images" => ["Image/1.jpg", "Image/2.jpg", "Image/3.jpg", "Image/4.jpg"],
                "title" => "Bed spacer for Rent",
                "location" => "P. Santos, Zamboanga City",
                "price" => "₱1,000/Month"
            ],
            [
                "images" => ["Image/1.jpg", "Image/2.jpg", "Image/3.jpg", "Image/4.jpg"],
                "title" => "Bed spacer for Rent",
                "location" => "P. Santos, Zamboanga City",
                "price" => "₱1,000/Month"
            ],
            [
                "images" => ["Image/1.jpg", "Image/2.jpg", "Image/3.jpg", "Image/4.jpg"],
                "title" => "Bed spacer for Rent",
                "location" => "P. Santos, Zamboanga City",
                "price" => "₱1,000/Month"
            ],
            [
                "images" => ["Image/1.jpg", "Image/2.jpg", "Image/3.jpg", "Image/4.jpg"],
                "title" => "Bed spacer for Rent",
                "location" => "P. Santos, Zamboanga City",
                "price" => "₱1,000/Month"
            ],
            // Add properties
        ];

        foreach ($properties as $property) {
            echo '<div class="property-card">';
            echo '<div class="swiper-container">';
            echo '<div class="swiper-wrapper">';
            foreach ($property["images"] as $image) {
                echo '<div class="swiper-slide"><img src="' . $image . '" alt="' . $property["title"] . '" class="property-image"></div>';
            }
            echo '</div>';
            echo '<div class="swiper-pagination"></div>';
            echo '</div>';
            echo '<div class="property-details">';
            echo '<h2>' . $property["title"] . '</h2>';
            echo '<p>' . $property["location"] . '</p>';
            echo '<p>' . $property["price"] . '</p>';
            echo '<button>Book Now!</button>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</main>


<footer>
    <p>&copy; 2024 RentEase. All rights reserved.</p>
</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiperContainers = document.querySelectorAll('.swiper-container');
        swiperContainers.forEach(function(container) {
            var swiper = new Swiper(container, {
                direction: 'horizontal',
                loop: true,
                autoplay: false,
                pagination: {
                    el: container.querySelector('.swiper-pagination'),
                    clickable: true,
                },
            });
        });
    });
</script>

</body>
</html>
