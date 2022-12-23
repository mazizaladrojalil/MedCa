<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css\style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat Docter</title>
</head>
<style>
    body{
        background: url('/svg/background-chat.svg');
    }
</style>
<body>
    <div class="nav-container">
        <nav>
            <a href="index.html"><div class="logo"></div></a>
            <ul class="nav__links">
                <li><a href="index.html">Home</a></li>
                <li><a href="article.html">Artikel</a></li>
                <li><a href="#contact">Contact</a></li>                
            </ul>
            <a href = "login.html" class="cta"><button class="login"> Login </button></a>
        </nav>
    </div>
    <div class="wrap-content-chatDoc">
        <div class="container-profile-doc">
            <div class="profile_doc">
                
            </div>
        </div>
        <div class="container-box-chat"></div>
    </div>
    <div class="footer"></div>
</body>
</html>