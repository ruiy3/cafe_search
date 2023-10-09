<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Cafe_Search</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login_styles.css') }}">
    <style>
    body {
    	margin: 0;
        padding: 0;
        background-image: url('{{ asset('cafe1.avif') }}'); /* 写真のパスを指定 */
        background-size: cover; /* 背景をウィンドウ全体に広げる */
        background-position: center; /* 背景を中央に配置 */
        font-family: 'Nunito', sans-serif;
        color: #D3D3D3;
	}
    </style>
</head>
<body>
    <div class="hero-section">
        <br><br>
        <h1 class="hero-title">～カフェ検索～</h1>
        <p class="hero-description">---雰囲気を重視した検索アプリ---</p>
        <br><br><br>
        <a href="/login" class="cta-button">ログイン</a>
        <a href="/register" class="cta-button">登録</a>
    </div>
</body>
</html>