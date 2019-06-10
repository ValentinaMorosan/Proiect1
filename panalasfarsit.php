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
        $sql="SELECT * FROM images WHERE ID='13'";
        $query=  mysqli_query($con,$sql)or die(mysqli_error($con));
        $row=mysqli_fetch_array($query);
             echo "<img src=".$row['image']."><br/>";
             echo '<br>';
            ?>
              </th>
          <th>
               <textarea rows="9" cols="50" >
                    An aparitie: 2019
                    Autor: Irina Binder
                    Categoria: Literatura Romana
                    Editie: Necartonata
                    Editura: FOR YOU
                    Format: 200 x 130 mm
                    Nr. pagini: 288</textarea>      
                  <th>
        </table>
          
           <svg height="30" width="300">
           <text x="0" y="15" fill="blue" ><strong>Descriere</strong></text>
             <p>Am scris cu sinceritate ca si cum i-as fi povestit totul celei mai bune prietene si confidente. Am pus mult suflet in ea si nu m-am gandit nicio clipa la pareri, la judecati, la ce o sa creada lumea... - Irina Binder</p>
             <p>
                Descopera noua perspectiva a intamplarilor petrecute in volumele Fluturi!

Un fenomen in Romania, romanul Fluturi a dominat topurile vanzarilor ani la rand.
Acum ai sansa de a redescoperi povestea de iubire dintre Irina si Robert. Protagonistii se confrunta cu tensiuni ireconciliabile si cu sentimente devastatoare. Stim trairile Irinei, le-am simtit alaturi de ea, dar care este punctul de vedere al lui Robert?

Oare iubirea adevarata este imposibila?

In romanul Pana la sfarsit vei redescoperi pasiuni puternice si slabiciuni profund umane.

Ce va birui? Fiorul iubirii unice si desavarsite sau simtul datoriei fata de cei dragi?

Pana la sfarsit este noua carte semnata de autoarea bestsellerelor: Fluturi, Insomnii si Strainul de langa mine.


             </p>
             <p>  Fragment din romanul Pana la sfarsit, de Irina Binder</p>

           <p>  "Ma aflam la vila familiei noastre din Poiana Brasov. Tocmai iesisem sa plimb cainele, cand, dintr-odata, blanosul meu a rupt-o la fuga spre pajistea din fata casei. Credeam ca vazuse vreo pisica si avea chef de harjoneala, dar cainele meu lup vazuse doar o fata in fata careia s-a oprit si cu care a inceput sa se joace de parca erau prieteni dintotdeauna. N-aveam chef sa merg dupa el, stiam ca urma sa revina singur acasa cand ar fi fost satul de hoinarit, asa cum facea, de altfel, mereu. Doar ca mai tarziu, vazand ca prietenul meu nu se intorsese, m-am uitat pe geam sa vad daca este tot acolo, cu fata aceea. Ar fi fost prea putin probabil, dat fiind ca trecuse mai mult de o ora de cand il lasasem afara, iar el isi avea propriul ceas, care-l facea sa ajunga acasa mult mai repede. 
Imaginea descoperita m-a amutit... Mi se parea ca Dumnezeu imi asezase dinaintea ochilor cea mai senina, mai simpla si mai frumoasa poveste: fata era intinsa pe iarba sub un pom urias, iar cainele meu statea langa ea. Dormeau amandoi de parca erau doi ingeri. I-am privit cu o duiosie de care nu ma stiam in stare, iar cand m-am dezmeticit din visare, m-am gandit ca fata este de prin vecini, fiindca o mai vazusem o data citind in acelasi loc. Insa tot mi se parea straniu sa doarma acolo, afara, mai ales ca era cam racoare. 
Am fluierat de la fereastra, crezand ca asa voi aduce cainele acasa, dar el, desi de obicei raspundea imediat la chemarea mea, nu se clintea. Asa ca am iesit si m-am apropiat incet si grijuliu de ei. Dormeau amandoi, fata cu capul pe o geanta dintr-un material crosetat, iar cainele meu cu botul sprijinit pe piciorul ei, parca pazindu-i odihna."
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
          
          