<!-- layouts/navAdmin.blade.php -->

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
            background-color: #F0F0F0; /* Light gray background */
            overflow-x: hidden; /* Prevent horizontal scroll */
            margin: 0;
            padding: 0;
        }

        header {
            width: 100%;
            background-color: #365AC2; /* Dark blue */
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            z-index: 1000; /* Ensure header is above other content */
            padding: 0 1rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Shadow for header */
        }

        .menu-btn {
    font-size: 1.5rem;
    cursor: pointer;
    color: #FFF; /* White icon */
    padding: 0.75rem;
    background: #365AC2; /* Dark blue */
    border: none;
    outline: none; /* Remove default outline */
    z-index: 1000; /* Ensure the button is above other elements */
    transition: background 0.3s ease;
}

.menu-btn:hover {
    background: #2b489a; /* Darken button on hover */
    outline: none; /* Remove outline on hover */
}

.menu-btn:focus {
    outline: none; /* Remove outline when focused */
}


        .sidebar {
            width: 250px;
            height: 100vh;
            background: #365AC2; /* Dark blue */
            color: #fff;
            position: fixed;
            left: -250px;
            top: 60px; /* Adjusted for header height */
            transition: left 0.3s ease;
            display: flex;
            flex-direction: column;
            z-index: 999; /* Ensure sidebar is below header */
        }

        .sidebar.active {
            left: 0;
        }

        .sidebar .brand {
            padding: 1.5rem;
            background: #2b489a; /* Slightly darker blue for the brand section */
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
            display: flex;
            align-items: center;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            width: 100%;
            padding: 1rem 1.5rem; /* Padding adjusted for better touch area */
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease; /* Add transition for smooth hover effect */
            font-size: 1.1rem;
        }

        .sidebar ul li a i {
            margin-right: 10px;
        }

        .sidebar ul li a:hover {
            background-color: #2b489a; /* Darker blue on hover */
            color: #fff; /* White text on hover */
        }

        .main-content {
            flex-grow: 1;
            padding: 2rem;
            margin-left: 0;
            transition: margin-left 0.3s ease;
            background-color: #FFF; /* White background for the main content */
            margin-top: 60px; /* Adjust for the fixed header */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Subtle shadow for main content area */
        }

        .main-content.active {
            margin-left: 250px;
        }

        @media screen and (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .menu-btn {
                margin-left: 0.5rem; /* Adjusted margin for smaller screens */
            }

            .main-content {
                padding: 1rem;
            }

            header {
                padding: 0 0.5rem; /* Adjusted padding for smaller screens */
            }
        }
    </style>
</head>
<body>
    <header>
        <button class="menu-btn"><i class="fas fa-bars"></i></button>
        <h3 style="margin-left: 1rem;">Admin Dashboard</h3>
        <!-- Add any additional header content here -->
    </header>
    <div class="sidebar">
        <ul>
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-users"></i> Users</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    @yield('content')

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
