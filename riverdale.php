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
            <a class="nav-link" href="login.php">Login</a>
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
        $sql="SELECT * FROM images WHERE ID='14'";
        $query=  mysqli_query($con,$sql)or die(mysqli_error($con));
        $row=mysqli_fetch_array($query);
             echo "<img src=".$row['image']."><br/>";
             echo '<br>';
            ?>
              </th>
          <th>
               <textarea rows="9" cols="50" >
                    An aparitie: 2019
                    Autor: Micol Ostow
                    Categoria: Literatura Universala
                    Colectie:  Leda Edge
                    Editie: Necartonata
                    Editura: LEDA
                    Format: 200 x 130 x 21 mm
                    Nr. pagini: 256</textarea>      
                  <th>
        </table>
          
           <svg height="30" width="300">
           <text x="0" y="15" fill="blue" ><strong>Descriere</strong></text>
             <p>Inainte ca Jason Blossom sa fie declarat disparut, patru adolescenti profitau din plin de vacanta de vara. Archie era indragostit, Betty isi obtinuse stagiul dorit la Los Angeles, Veronica era regina Manhattanului, iar Jughead incerca sa se descurce cu toate problemele.
             </p>
             <p>
                 Riverdale. Un serial original Netflix
             </p>
             <p>  Fragment din cartea "Riverdale. In urma cu o zi" de Micol Ostow:</p>

           <p>  "Daca Riverdale nu se schimba niciodata, atunci firma luminoasa a localului Pop's este cea mai neschimbatoare emblema a sa. Semnul ala cu lumini de neon stralucitoare este, practic, un reper in sine. Ar trebui sa-l inscrie in registrul istoric. Nici nu vreau sa ma gandesc la cate ore mi-am petrecut cu fundul lipit de canapeaua de vinilin a localului. Sau la cati burgeri mi-a trecut Pop's pe "datoria" in crestere.
Am s-o platesc, desigur. De indata ce voi putea. Trebuie doar sa-mi dau seama cum. E mai usor de zis, decat de facut. Archie l ucreaza pentru tatal lui. Tatal meu... ei bine, teoretic, si el lucreaza pentru tatal lui Archie. Oricum, asta-i placa. Zilele astea avem un program atat de diferit, ca nu-l vad niciodata prin preajma. Instinctul meu imi spune ca nu e ceva nemaipomenit.
Archie, tatal meu... toata lumea se indeparteaza de mine vara asta?
Poate ma-nsel in privinta lucrurilor care nu se schimba niciodata in Riverdale. E ca-n poezia aia, "Nothing Gold Can Stay".
E de mirare ca Pop's a devenit casa mea departe de casa? E mereu deschis, iar Pop e intotdeauna in spatele tejghelei. Macar asta e o constanta.
Cum am spus, parcarea era cam goala, dar nu parasita, in dimineata aia; cand m-am apropiat, l-am vazut pe Jason Blossom sprijinit de peretele lateral al cladirii, cocosat deasupra telefonu lui si scriind furios mesaje. In soarele diminetii, pielea ii parea extrem de palida, chiar translucida. Se incrunta.
- Salut! am spus cand m-am apropiat.
El si-a ridicat privirea si m-a studiat rapid cu o expresie impenetrabila.
Jason si cu mine ne invartim in cercuri foarte diferite. El e genul care... nu se bucura niciodata in mod deosebit sa ma vada, iar dimineata asta nu era o exceptie. Nu am luat-o personal.
Sincer, la cum statea acolo, in lumina orbitoare a soarelul, imi parea o fantoma.
- Le trimiti mesaje fanelor care te adora?
Era o replica ciudata. Dar, pe de alta parte, Jason facea parte din echipa de polo a liceului - cel putin doua treimi dintre eleve faceau la un moment dat o pasiune pentru el, pe durata studiilor la liceul Riverdale.
- Mda, sigur.
A revenit la telefonul sau, scriind in continuare. Nu puteant sa ii citesc energia - era stimulat, alert, dornic, dar si distras, preocupat si agitat. Daca ma intrebi pe mine, erau prea multe sentimente pentru un singur trup. Nici macar nu sunt sigur si-a dat seama ca mai sunt acolo. Am inteles aluzia."</p>
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
          
          