<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booksy | Online Book Shop</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Inline CSS for simplicity */
        body {
            font-family: 'Arial', sans-serif;
            margin-left: 5%;
            margin-right: 5%;
        }
        .navbar {
            padding: 20px 0;
            display: space-between;
        }

        .navbar a {
            color: #365AC2;
            text-decoration: none;
            margin: 0 15px;
            font-size: large;
            font-weight: 900;
        }

        .container input[type="text"]{
            margin-right: 35%;
            height: 30px;
        }

         i {
            color: #365AC2;
            font-size: x-large;
        }

        .search-bar {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 50px;
        }
        .banner {
            background-image: url('pict/F.jpg');
            background-size: cover;
            border-radius: 20px;
            padding: 40px 0;
        }

        .banner h2 {
            padding-left: 30px;
            color: white;
            font-size: 2.8rem;
            margin-bottom: 50px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(90px, 5fr));
            gap: 20px;
        }
        .card1 {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSuiKejk2TkaYl7JAwZQREaWrYPdieAZ1AHQ&usqp=CAU');
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
        }

        .card2 {
            background-image: url('https://cdn1-production-images-kly.akamaized.net/vp3CImfBmZerhfOvnt8kSFkVpYs=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2969791/original/042683800_1573980663-bromo-4293071_1920.jpg');
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
        }

        .container h3 {
            color: #365AC2;
            margin: 15px 0 10px;
        }
        .card1 .card2 p {
            color: #777;
        }

    </style>
</head>
<body>
    <header class="navbar">
        <div class="container">
            <a href="#" class="brand">HelpU</a>
            <input type="text" class="search-bar" placeholder="Search Your Country Weather">
            <a href="#">
                <i class="fas fa-home"></i>
            </a>
        <a href="#">
            <i class="fas fa-user"></i>
        </a> </div>
    </header>

    <section class="banner">
        <div class="container">
            <h2>Ketahui Lingkunganmu!</h2>
        </div>
    </section>

    <section class="books-section">
        <div class="container">
            <h3>Popular Now</h3>
            <div class="grid">
                <div class="card2">
                    <h4>Creative Hustle</h4>
                    <p>Ramez Alber</p> </div>

                <div class="card1">
                    <h4>Art Unleashed</h4>
                    <p>Stefano Milk</p>

                <!-- Add more book cards as needed -->
            </div>
        </div>
    </section>
</body>
</html>
