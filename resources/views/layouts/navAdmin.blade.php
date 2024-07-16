<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: #365AC2;
            color: #fff;
            position: fixed;
            left: -250px;
            top: 0;
            transition: left 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .sidebar.active {
            left: 0;
        }

        .sidebar .brand {
            padding: 1.5rem;
            background: #2b489a;
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            padding: 1rem 1.5rem;
            text-align: left;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
        }

        .sidebar ul li a:hover {
            background: #2b489a;
        }

        .main-content {
            flex-grow: 1;
            padding: 2rem;
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }

        .main-content.active {
            margin-left: 0;
        }

        .menu-btn {
            font-size: 1.5rem;
            cursor: pointer;
            color: #fff;
            padding: 1rem;
            background: #365AC2;
            border: none;
            outline: none;
            position: fixed;
            top: 0;
            left: 0;
        }

    </style>
</head>
<body>
    <button class="menu-btn"><i class="fas fa-bars"></i></button>
    <div class="sidebar">
        <div class="brand">
            Admin Dashboard
        </div>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        @yield('content')
    </div>

    <script>
        document.querySelector('.menu-btn').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.main-content').classList.toggle('active');
        });

        document.addEventListener('click', function(e) {
            if (!document.querySelector('.sidebar').contains(e.target) && !document.querySelector('.menu-btn').contains(e.target)) {
                document.querySelector('.sidebar').classList.remove('active');
                document.querySelector('.main-content').classList.remove('active');
            }
        });
    </script>
</body>
</html>
