<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Register</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #AFC3FC, #365AC2);
            height: 100vh;
        }
        .container {
            padding-top: 5%;
            max-width: 75%;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            margin: 50px auto;
        }
        .form-container {
            background: #365AC2 ;
            width: 50%;
            height: 480px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan di sekitarnya */
            color: white; /* Warna teks di dalam form */
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 35px;
            font-weight: 900;
        }
        .form-group {
            margin-left: 20%;
            margin-bottom: 15px;
        }
        .form-group .input-group {
            position: relative;
            width: 100%;
        }
        .form-group .input-group i {
            position: absolute;
            left: 20px;
            top: 47%;
            transform: translateY(-50%);
            color: #365AC2;
        }
        .form-group .input-group input {
            outline: none;
            font-size: medium;
            width: calc(80% - 20px); /* Lebar input dikurangi dengan padding untuk ikon */
            height: 50px;
            padding: 10px;
            padding-left: 50px; /* Ruang untuk ikon */
            border: 1px solid #ccc;
            border-radius: 30px;
            box-sizing: border-box;
            color: #090909; /* Warna teks di dalam input */
        }

        .form-group .input-group input:hover {
            box-shadow: 0 0 5px #AFC3FC;
        }
        
        .btn-primary {
            font-weight: bolder;
            width: 60%;
            height: 40px;
            margin-left: 20%;
            margin-top: 10px;
            padding: 10px;
            background-color: #c4d3ff;
            font-size: medium;
            color: #365AC2;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }
        .btn-primary:hover {
            color: #0e0e0e;
            background-color: #90b3d8;
        }
        .form-text {
            text-align: center;
            margin-top: 10px;
        }
        .form-text a {
            font-weight: bolder;
            color: #AFC3FC;
            text-decoration: none;
        }
        .form-text a:hover {
            text-decoration: underline;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #f5c6cb;
            border-radius: 4px;
        }
        .alert-danger ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        .pict {
            background-color: white;
            width: 50%;
            display: flex;
            justify-content: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan di sekitarnya */
            align-items: center;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .pict img {
            max-width: 70%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Daftar</h2>
            <!-- Menampilkan error validasi -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form registrasi -->
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <i class="fa fa-user"></i>
                        <input type="text" id="username" name="username" placeholder="Username" value="{{ old('username') }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <i class="fa fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <i class="fa fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <button type="submit" class="btn-primary">Daftar</button>
                <div class="form-text">
                    <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
                </div>
            </form>
        </div>
        <div class="pict">
            <img src="pict/A.jpg" alt="Registration Image">
        </div>
    </div>
</body>
</html>
