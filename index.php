<!DOCTYPE html>
<html lang="en">
    <head>

  <meta charset="utf-<head>8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Librărie online</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
          <script src="js.js"></script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Acasă
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="cookie.php">Curiozități</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="log.php">Login</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="captcha.php">Contact</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Librărie online</h1>
        <div class="list-group">
          
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/a1fb023e6639fde67d4670c847c326eds1-900x350.jpg"  alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="images/561b04f3868d304f9bdd79d7e3e956e0Pacienta-tacuta-900x350.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="images/0d253f47d018ac152d1863ebbcd43febPovestiri-scurte-900x350.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="bibliapierduta.php"><img class="card-img-top" src="images/dd03be6803ff9eb0f293f3c04fb8e689bibliapierduta.jpg" width="200" height="400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                    <a href="bibliapierduta.php">Biblia pierdută</a>
                </h4>
                <h5>21 Lei</h5>
                <p class="card-text"><?php echo "An aparitie: 2016<br> Categoria: Literatura universala <br> Colectie: Carte de buzunar"?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"></small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="hotuldecarti.php"><img class="card-img-top" src="images/04fe5382e962a6da141d7d827a35c559hotuldecarti.jpg" width="200" height="400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                    <a href="hotuldecarti.php">Hotul de carti</a>
                </h4>
                <h5>21.5 Lei</h5>
                <p class="card-text"><?php echo "An aparitie: 2014<br> Categoria: Literatura universala/contemporana <br> Editie: cartonata"?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"></small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="lacincipasidetine.php"><img class="card-img-top" src="images/240c5eb6903e14ddadd1d3fc241071b3lacincipasidetine.jpg" width="200" height="400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                    <a href="lacincipasidetine.php">La cinci pasi de tine</a>
                </h4>
                <h5>35.95 Lei</h5>
                <p class="card-text"><?php echo "An aparitie: 2019<br> Categoria: Literatura universala <br> Editie: necartonata"?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"></small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="riverdale.php"><img class="card-img-top" src="images/76a6bdcb1a843976047a78e3ceedeba8riverdale.jpg" width="200" height="400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                    <a href="riverdale.php">Riverdale</a>
                </h4>
                <h5>31.41 Lei</h5>
                <p class="card-text"><?php echo "An aparitie: 2019<br> Categoria: Literatura universala <br> Editie: necartonata"?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"></small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="panalasfarsit.php"><img class="card-img-top" src="images/fa175aba632a55e3c34f0416b4398816panalasfarsit.jpg" width="200" height="400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                    <a href="panalasfarsit.php">Pana la sfarsit</a>
                </h4>
                <h5>54 Lei</h5>
                <p class="card-text"><?php echo "An aparitie: 2019<br> Categoria: Literatura Romana <br> Editie: necartonata"?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"></small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="strainuldelangamine.php"><img class="card-img-top" src="images/0f24669b13025e7ec6fe10b52f7ad1fdstrainuldelangamine.jpg" width="200" height="400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                    <a href="strainuldelangamine.php">Strainul de langa mine</a>
                </h4>
                <h5>30.40 Lei</h5>
                <p class="card-text"><?php echo "An aparitie: 2018<br> Categoria: Literatura Romana <br> Editie: necartonata"?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"></small>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.math.uaic.ro%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
 

</body>

</html>
