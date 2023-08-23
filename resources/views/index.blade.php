<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Cafe_Search</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Add your custom CSS here -->
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('cafe.jpeg') }}');
            background-size: cover;
            background-position: center;
            font-family: 'Nunito', sans-serif;
            color: white;
        }
        .hero-section {
            text-align: center;
            padding: 100px 0;
        }
        .hero-title {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .hero-description {
            font-size: 18px;
            margin-bottom: 40px;
        }
        .cta-button {
            padding: 12px 24px;
            font-size: 16px;
            background-color: #dcdcdc;
            color: Black;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <br><br>
        <h1 class="hero-title">～Cafe Search～</h1>
        <p class="hero-description">Discover the best cafes around you.</p>
        <br><br><br>
        <a href="/login" class="cta-button">Log in</a>
        <a href="/register" class="cta-button">Register</a>
    </div>
</body>
</html>