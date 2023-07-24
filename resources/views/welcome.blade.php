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
    <link href="{{asset('../css/style.css')}}" rel="stylesheet">
    <link href="{{asset('../css/about.css')}}" rel="stylesheet">

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
                <li><a href="#contact">Kapcsolat</a></li>
            </ul>
        </div>
    </nav>

</header><!-- End Header -->

<div class="container-fluid panel" data-color="white" id="home">
    <div class="introduction">
        <p>VauHouse</p>
        <p class="homeText" data-typed-items="Kiemelkedő gondozást nyújtunk négylábú kedvencének!"></p>
    </div>
</div>


<div class="panel" id="about" data-color="violet">
    <div class="paper"></div>
    <div class="leftTriangle"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col" id="pics">
                <div class="pic">
                    <img src="{{asset( '../img/vauhaus.png')}}" alt="logo" width="400" height="400" class="text-on-pic"
                         style=" filter: drop-shadow(15px 0px 4px #41423c);">
                    <h1 class="text-on-pic" id="rolunk"
                        style="position: absolute; top: 250px; left: 50%; transform: translateX(-50%);">-Rólunk-</h1>
                    <div class="arrow text-on-pic">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <img id="image-on-pic" src="{{asset('../img/happydog.png')}}" alt="mancs" height="700px"
                         width="650px"
                         style="display: none; position: relative; filter: drop-shadow(15px 20px 20px #41423c);">
                </div>
            </div>
            <div class="col" id="introduction" onclick="expandImage()">
                <div class="image-container">
                    <img src="{{asset('../img/whitedoghead.png')}}" class="bg-image" alt="kutyafej" />
                    <div class="content">
                        <p> Célunk, hogy kényelmet és egészséget biztosítsunk a kutyusok számára, miközben a gazdik
                            elégedetten távoznak
                            tőlünk.</p>
                    </div>
                </div>
                <div class="image-container">
                    <img src="{{asset('../img/dogheadgrey.png')}}" class="bg-image" alt="kutyafej" style="top:90px; left: 30px"/>
                    <div class="content">
                        <p>Kozmetikánkban kizárólag vegán és bio sampont használunk, valamint minőségi kutyaápolási szereket
                            alkalmazunk.
                            Fontosnak tartjuk az állatok jólétét és az egészséges, környezetbarát megoldásokat. Ezért
                            választjuk a
                            természetes alapanyagokat, amelyek megfelelően tisztítják és ápolják a kutyák szőrzetét.</p>
                    </div>
                </div>
                <div class="image-container">
                    <img src="{{asset('../img/dogbrown.png')}}" class="bg-image" alt="kutyafej" style="top:180px; left: 90px"/>
                    <div class="content">
                        <p>Emellett speciális beszoktató tréninget is kínálunk a kiskutyáknak. Tapasztalt és kutyaszerető
                            munkatársaink
                            segítségével a kutyusok könnyedén megszokhatják a kozmetikai kezeléseket, így kellemes és
                            stresszmentes
                            élményben lehet részük.</p>
                    </div>
                </div>






                {{--                    <p>Legyen a kutyus hosszú vagy rövid szőrű, kis vagy nagytestű, nálunk biztosan gyönyörű bundával--}}
                {{--                        távozik.--}}
                {{--                        Szakértelmünk és specializációnk révén kielégítjük a különböző fajták és igények szerinti--}}
                {{--                        kutyatulajdonosok--}}
                {{--                        elvárásait.--}}

                {{--                        A VauHouse-ban fontosnak tartjuk a minőséget, gondoskodást és szeretetet, amit minden egyes--}}
                {{--                        kedvencünknek--}}
                {{--                        nyújtunk. Látogasson el hozzánk, és biztos lehet benne, hogy kutyusa jó kezekben lesz!</p>--}}

            </div>
        </div>
    </div>
</div>
<div class="panel" id="services" data-color="indigo">
    <h2>Indigo panel</h2>
    <h3>This is the services</h3>
</div>
<div class="panel" id="references" data-color="blue">
    <h2>Blue panel</h2>
    <h3>This is the references</h3>
</div>
<div class="panel" id="prices" data-color="green">
    <h2>Green panel</h2>
    <h3>This is the prices</h3>
</div>
<div class="panel" id="contact" data-color="yellow">
    <h2>Yellow panel</h2>
    <h3>This is the contact</h3>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script src="{{ asset('../js/home.js') }}"></script>
<script src="{{ asset('../js/main.js') }}"></script>
<script src="{{ asset('../js/about.js') }}"></script>
</body>
</html>
