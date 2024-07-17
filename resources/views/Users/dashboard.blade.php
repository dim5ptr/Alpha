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
                    height: 100vh;
                    background-color: #d5def7;
                }


                .navbar {
                    margin-top: 1%;
                    padding: 20px 0;
                    display: flex;
                    justify-content: space-between; /* Ensure space between the brand and the rest */
                }

                .container {
                    display: flex;
                    align-items: center;
                    width: 100%; /* Ensure the container spans the full width */
                }

                .navbar a {
                    color: #365AC2;
                    text-decoration: none;
                    margin: 0 15px;
                    font-size: large;
                    font-weight: 900;
                }

                i {
                    color: #365AC2;
                    font-size: x-large;
                }

                .search-bar {
                    display: flex; /* Use flexbox for the container */
                    align-items: center; /* Center items vertically */
                    flex: 1; /* Allow the search bar to take up remaining space */
                    max-width: 500px; /* Optional: limit the max width */
                    padding: 5px;
                    border: 2px solid #ffffff;
                    border-radius: 50px;
                    background-color: #ffffff;
                margin-right: 40%;
                margin-left: 5%;

                }

                .search-bar input {
                    flex: 1; /* Allow the input to take up all available space */
                    border: none;
                    background-color: #ffffff;
                    outline: none;
                    padding-left: 10px;
                }

                .search-bar i {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: #fffafa;
                    background-color: #365AC2;
                    border-radius: 20px;
                    font-size: medium;
                    width: 30px;
                    height: 30px;
                    margin-left: 10px; /* Add some space between the input and the icon */
                }


                .banner {
                    display: flex;
                    background-color: #fbfbfb;
                    background-size: cover;
                    border-radius: 20px;
                    margin-top: 1.3%;
                    padding: 40px 0;
                    box-shadow: 0 4px 8px 4px rgba(0, 0, 0, 0.1); /* Add box shadow */
                }

                .wlc h1 {
                    font-size: 2.3rem;
                    font-weight: bold;
                    color: #365AC2;
                    margin-bottom: 20px;
                }

                .wlc span {
                    font-size: 2.3rem;
                    font-weight: bold;
                    color: #333;
                    margin-bottom: 20px;
                }

                .wlc {
                    margin-left: 10%;
                    max-width: 40%;
                }

                .wlc p {
                    color: #666;
                    font-size: 1rem;
                    line-height: 1.5;
                }

                .pict{
                    max-width: 40%;
                    margin-left: 50px;
                }

                .pict img {
                    width: 60%;
                    margin-left: 20%;
                }

                section {
                    max-width: 100%;
                    margin: 0 auto;
                    padding: 20px;
                }

                .grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(5%, 4fr));
                    height: 210px;
                    gap: 20px;
                }

                .card {
                    background-color: #fff;
                    border-radius: 15px;
                    overflow: hidden;
                    transition: transform 0.3s, box-shadow 0.3s;
                    cursor: pointer;
                    position: relative;
                }

                .card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0; /* Awalnya tidak terlihat */
    transition: opacity 0.3s; /* Transisi opacity */
}

.card-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    border-radius: 15px;
    border: 2px solid wheat;
    width: 93%;
    padding: 20px;
    background-color: white;
    color: #020202;
    opacity: 0;
    transition: opacity 0.3s;
}

.card:hover .card-overlay {
    opacity: 1;
}

.card:hover .card-text {
    opacity: 1;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}


                .card-content {
                    align-items: center; /* Mengatur kartu dan ikon menjadi sejajar */
                }

                .card-icon {
                    width: 97%; /* Ukuran gambar */
                    height: 0.5%;
                    border: 5px solid white;
                    border-radius: 15px;
                }

                .card:hover {
                    transform: translateY(-10px); /* Efek naik saat dihover */
                    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2); /* Efek bayangan saat dihover */
                }

                .card p {
                    font-size: 1rem; /* Ukuran teks deskripsi */
                    margin-bottom: 10px;
                    padding: 10px; /* Ruang dalam */
                }




    </style>
</head>
<body>
    <header class="navbar">
        <div class="container">
            <a href="#" class="brand">HelpU</a>
            <div class="search-bar">
            <input type="text" placeholder="What are you looking for?">
            <i class="fas fa-search"></i></div>
            <a href="#">
                <i class="fas fa-home"></i>
            </a>
            <a href="{{ route('profile') }}">
            <i class="fas fa-user"></i>
        </a> </div>
    </header>

    <section class="banner">
        <div class="wlc">
            <h1>Selamat datang!<span></br>Cari tahu desain populer disekitarmu</span></h1>
            <p>Hire pre-vetted remote developers, designers and product managers with world-class technical and communication skills, without worrying about crazy fees or the legal hassles.</p>
        </div>
        <div class="pict">
            <img src="pict/C.jpg">
        </div>
    </section>

    <section>
        <div class="grid">
            <div class="card">
                <div class="card-content">
                    <img src="pict/il.jpg" alt="Grafis ilustratif" class="card-icon">
                    <div class="card-text">
                        <p>Grafis ilustratif</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <img src="pict/anm.jpg" alt="Motion graphics" class="card-icon">
                    <div class="card-text">
                        <p>Motion graphics</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <img src="pict/grp.jpg" alt="Komunikasi visual" class="card-icon">
                    <div class="card-text">
                        <p>Komunikasi visual</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <img src="pict/vid.jpg" alt="Sinematografi digital" class="card-icon">
                    <div class="card-text">
                        <p>Sinematografi digital</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
</html>
