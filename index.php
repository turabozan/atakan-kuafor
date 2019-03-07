<!doctype html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ATAKAN KUAFÖR</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="animate/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
</head>

<body>

    <section id="cover">

        <!----------------------------------------------------------------------------
                                            Header Bar
        ----------------------------------------------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-dark custom-navBar">
            <a class="navbar-brand" href="#"><img src="images/akyel.png" height="50" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-start" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Anasayfa <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">İletişim</a>
                    </li>

                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" style="background: #10ac84; border-radius: 20px; padding: 0px 16px;">
                        <a class="nav-link" style="color: white;" href="#">Giriş Yap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kayıt Ol</a>
                    </li>
                </ul>
            </div>
        </nav>


        <!----------------------------------------------------------------------------
                                        First Section
        ----------------------------------------------------------------------------->
        <div clsas="container align-self-center justify-content-center fa-align-center" style="max-width: 80%; margin: 5% auto auto 5%;">
            <div class="row">
                <div class="col-6 col-md-auto align-self-center justify-content-center">
                    <img src="images/home-i2.png" class="home-i2" alt="">
                </div>

                <div class=" col-12 col-md-8 align-self-center">
                    <div style="width: 50%;">
                        <h1 class="wow fadeInRight" data-wow-duration="5s" data-wow-delay="0.5s" style="color:white; font-family: 'Staatliches', cursive;">Head Titlasdasdase</h1>
                    </div>
                    <h4 class="wow fadeInUp" data-wow-duration="5s" data-wow-delay="0.5s" style="color:white; font-family: 'QuickSand', sans-serif;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab cumque veritatis delectus ipsum quam? Quae tempora iste eveniet, omnis iusto dolore mollitia ab modi deleniti, blanditiis eaque magnam. Blanditiis, consequuntur?</h4>
                </div>

            </div>
        </div>
    </section>

    <!----------------------------------------------------------------------------
                                        Second Section
        ----------------------------------------------------------------------------->
    <section id="cover2" style="padding-top: 100px;">
        <div class="container">
            <div class="text-center" style="font-size: 60px; color: #3a3c3f; font-family: 'Staatliches', cursive;">HAKKIMIZDA</div>
            <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="animate/wow.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>

<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        callback: function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    });
    wow.init();
    document.getElementById('moar').onclick = function() {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };
</script> 