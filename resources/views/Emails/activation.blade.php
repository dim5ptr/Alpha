<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activate Your Account</title>
</head>
<body>
    <h2>Activate Your Account</h2>
    <p>Click the link below to activate your account:</p>
    <a href="{{ route('activate', ['token' => $token]) }}">Activate Now</a>
</body>
</html>
