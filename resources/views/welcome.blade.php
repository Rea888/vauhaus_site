<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VauHouse</title>
    <meta content="kutyakozmetika" name="description">
    <meta content="kutya, kutyakozmetika, nyírás, vágás, szőrápolás, bio, vegán, olcsó, közelben" name="keywords">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('../css/home.css')}}" rel="stylesheet">
    <link href="{{asset('../css/font.css')}}" rel="stylesheet">
</head>
<body>


<header id="header" class="fixed-top ">

    <nav class="navbar">
        <a href="/" class="logo"><img src="{{asset( '../img/logo.png')}}"
                                      alt="mancs"
                                      class="img-fluid" height="20px" width="200px"></a>
        <input type="checkbox" id="toggler">
        <label for="toggler"><i class="bi bi-list mobile-nav-toggle"></i></label>
        <div class="menu">
            <ul class="list">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Rólunk</a></li>
                <li><a href="#services">Szolgáltatások</a></li>
                <li><a href="#references">Referenciák</a></li>
                <li><a href="#prices">Árak</a></li>
                <li><a href="#references">Kapcsolat</a></li>
            </ul>
        </div>
    </nav>

</header><!-- End Header -->

<div class="container-fluid" id="home">
    <div class="introduction">
        <p>VauHouse</p>
        <p class="homeText" data-typed-items="Kiemelkedő gondozást nyújtunk négylábú kedvencének!"></p>
    </div>
</div>



<div id="about">
    <h3>This is the about</h3>
</div>

<div id="services">
    <h3>This is the sevices</h3>
</div>

<div id="references">
    <h3>This is the referencies</h3>
</div>

<div id="prices">
    <h3>This is the prices</h3>
</div>

<div id="contact">
    <h3>This is the contact</h3>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>


<script src="{{ asset('../js/home.js') }}"></script>
</body>
</html>
