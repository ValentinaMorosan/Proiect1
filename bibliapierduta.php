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
            <a class="nav-link" href="despre.php">Curiozități</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="log.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
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

          <table>
              <th>
 <?php
       //include connection file
        include 'connection.php';
        $sql="SELECT * FROM images WHERE ID='10'";
        $query=  mysqli_query($con,$sql)or die(mysqli_error($con));
        $row=mysqli_fetch_array($query);
             echo "<img src=".$row['image']."><br/>";
             echo '<br>';
            ?>
              </th>
          <th>
               <textarea rows="9" cols="50" >
                    An aparitie: 2016
                    Autor: Igor Bergler
                    Categoria: Literatura Universala
                    Colectie: Carte de buzunar
                    Editia: a 2-a, revazuta si adaugita
                    Editie: Necartonata
                    Editura: RAO
                    Format: 180 x 110 mm
                    Nr. pagini: 633</textarea>      
                  <th>
        </table>
          
           <svg height="30" width="300">
           <text x="0" y="15" fill="blue" ><strong>Descriere</strong></text>
             <p>Trei crime macabre ii schimba planurile profesorului Baker de la Universitatea Princeton aflat la
                 Sighisoara pentru o conferinta de istorie. Cea mai controversata figura a Europei de Est, Vlad
                 Tepes, a finantat un proiect ambitios care avea sa schimbe fata intregii lumi. Proiectul:
                 multiplicarea unui mesaj menit a fi descifrat doar de anumiti initiati. In 1455 codul este ascuns
                 in prima lucrare tiparita vreodata: Biblia B42 cunoscuta si ca Biblia lui Gutenberg.
               O adevarata odisee cuturala care imbina desavarsit momente de umor fin, episoade de suspans 
               autentic, mesaje ascunse si coduri secrete minutios construite, cartea eveniment a anului captiveaza
               de la prima propozitie si ofera o experienta literara de neegalat.
             </p>

             <p>  Fragment din romanul "Biblia pierduta" de Igor Bergler:</p>

           <p>  “In timp ce Christa si Charles discutau despre semnificatia celor intamplate in ziua aceea, un spectator avizat
    ar fi putut vedea ca pe banca din parcul central un barbat, trecut bine de saizeci de ani, imbracat intr-un
    pardesiu demodat de mai bine de un sfert de veac, statea cuminte si ii privea peste parc, prin geam Omul avea o
    mapa maronie pe care si-o asezase pe genunchi ca un scolar cuminte care isi asteapta randul la tabla. Nu
    rabdarea ii lipsea individului misterios care incercase sa il abordeze pe profesor in seara anterioara. Trebuia
    neaparat sa reuseasca sa-i vorbeasca lui Charles si sa il gaseasca singur si dispus sa il aculte. Pana atunci
    fusese imposibil din cauza nebuniei cu toata povestea de pe scari. Stia ca Baker urma sa plece in dupa-amiaza
    urmatoare, asa ca nu mai avea decat o incercare. In timp ce ii urmarea pe cei doi cu privirea, se chinuia sa 
    gaseasca o solutie pentru a ajunge din nou in interiorul hotelului fara a fi observat. Daca ar fi avut ochi si 
    pentru altceva decat pentru cei doi, omul ar fi observat ca Julius Henry cara un fel de geanta foarte 
    neobisnuita, mai mult lunga decat lata si destul de ingusta, in cladirea de vizavi de hotel. Ar fi vazut si ca
    acesta urcase si ca o lumina se aprinsese la primul etaj al imobilului dupa doar doua minute. Dar ar mai fi 
    putut vedea ca un alt individ statea chiar in spatele lui si ca nu il scapa din ochi nici macar pentru o 
    secunda. Bella isi pusese oamenii din teren, inclusiv pe politistul obez, aflat pe statul sau de plata, sa 
    noteze clar si exact orice persoana ce nu facea parte din logica desfasurarii evenimentelor — conferinta si 
    autoritatile — si care incerca sa intre in contact cu el. In urma tentativei omului in pardesiu de a-l contacta
    pe Charles, pusese unul dintre oameni pe urmele lui. Acesta trebuia, pentru moment, doar sa observe ce se 
    intampla si sa raporteze.”</p>
</svg> 
<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.math.uaic.ro%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
 </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

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
          
          