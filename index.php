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
    <link rel="stylesheet" type="text/css" href="css/substyle.css">
    <link rel="stylesheet" type="text/css" href="animate/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jockey+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
                    <li class="nav-item girisBtn-frame">
                        <a class="nav-link girisBtn" href="#">Giriş Yap</a>
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
        <div class="container align-self-center justify-content-center fa-align-center firstSection">
            <div class="row">
                <div class="col-6 col-md-auto align-self-center justify-content-center">
                    <img src="images/home-i2.png" class="home-i2" alt="">
                </div>

                <div class=" col-12 col-md-8 align-self-center">
                    <div style="width: 50%;">
                        <h1 class="wow fadeInRight mainheadTitle" data-wow-duration="5s" data-wow-delay="0.5s">Head Title</h1>
                    </div>
                    <h4 class="wow fadeInUp mainsubTitle" data-wow-duration="5s" data-wow-delay="0.5s">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab cumque veritatis delectus ipsum quam? Quae tempora iste eveniet, omnis iusto dolore mollitia ab modi deleniti, blanditiis eaque magnam. Blanditiis, consequuntur?
                    </h4>
                </div>

            </div>
        </div>
    </section>

    <!----------------------------------------------------------------------------
                                        Second Section
    ----------------------------------------------------------------------------->
    <section id="cover2">
        <div class="container">
            <div class="text-center hakkimizdaTxt">HAKKIMIZDA</div>
            <div class="jumbotron hakkimizda">
                <i class="fas fa-quote-left fa-5x" style="position: absolute; margin-top: -100px; opacity: 0.7;"></i>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi amet eos illo doloribus vero tempore nihil, veritatis ullam consectetur nemo beatae pariatur, laborum officiis aperiam sunt voluptatibus accusantium dignissimos corporis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, assumenda sapiente et neque quidem est vel numquam corporis, quis porro maxime, odio dolorem veniam mollitia! Delectus vitae unde voluptas vel.</p>
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
