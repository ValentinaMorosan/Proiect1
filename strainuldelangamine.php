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
        $sql="SELECT * FROM images WHERE ID='15'";
        $query=  mysqli_query($con,$sql)or die(mysqli_error($con));
        $row=mysqli_fetch_array($query);
             echo "<img src=".$row['image']."><br/>";
             echo '<br>';
            ?>
              </th>
          <th>
               <textarea rows="9" cols="50" >
                    An aparitie: 2018
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
             <p>Noul roman are ca eroine trei prietene, “de varste diferite, cu povesti diferite, demente, dar reale suta la suta”.
                    Cartea este inspirata si de aceasta data din realitate si promite povesti picante, fara cenzuri.</p>
             <p>
                 Strainul de langa mine
Este omul caruia i-ai daruit timp de multi ani – poate o viata intreaga – cele mai bune ganduri, visuri, sentimente si realizari ale tale.
Este vecinul sau colegul cu care te intersectezi uneori, cu care poate ca te si saluti si care isi traieste bucuriile si tristetile vietii la o usa sau la un perete distanta de tine.
Este necunoscutul pe care hazardul sau Destinul ti-l aduce in cale intr-o buna zi, pret de o conversatie ce iti schimba viata.
Este acel miez al tau adeseori lasat in tacere, in uitare, dar care isi face auzita vocea deopotriva stranie si familiara atunci cand te privesti cu adevarat in oglinda.
Cine esti Tu? Cine este Celalalt?

             </p>
             <p>  Fragment din romanul Strainul de langa mine, de Irina Binder</p>

           <p>  "Perioada aceea a fost un chin pentru Adela, care nu intelegea lipsa sotului ei, nici indiferenta si tacerea cu care o tortura atunci cand era acasa. L-a banuit de infidelitate, insa se temea atat de tare de o asemenea nenorocire, incat refuza evidentele, nedorind de fapt sa afle adevarul. Suferea in tacere si nu-i punea intrebari. Se straduia sa ii faca pe plac, sa ii fie lui bine, sa-i dea toate motivele sa vina cu drag acasa si sa fie multumit de ea. Insa el era din ce in ce mai distant, se purta de parca nici nu o mai vedea. Era irascibil, se plangea mereu de lipsa timpului si de oboseala. Pleca in delegatii, iar in weekenduri isi facea de lucru la casa parintilor lui, care locuiau la cateva sute de kilometri distanta. Nu o lua cu el, motivand ca merge acolo sa munceasca si sa repare o casa, pe care ei doi ar fi urmat sa o mosteneasca intr-un viitor indepartat.
               Intr-o zi, Adela a sunat la parintii lui si a aflat ca el nu fusese pe acolo. Si chiar de foarte multa vreme. A stiut din momentul acela ca el o minte, dar a asteptat sa ii spuna el tot ce se intampla. Numai ca domnul si stapanul inimii ei nu i-a spus nimic, iar Adela era din ce in ce mai singura si mai trista. Gatea pentru el si il astepta, dar el abia daca ajungea acasa noaptea tarziu, motivand ca lucreaza peste program. Asa a inceput sa isi aline ea singuratatea si sa-si umple golurile sufletesti cu mancare, iar in cateva luni a fost de nerecunoscut. S-a ingrasat cu peste treizeci de kilograme. Mancarea era refugiul ei. Nu avea nimic altceva. Cu cat se ingrasa mai tare, cu atat el o admonesta si ii adresa remarci umilitoare, care o faceau sa se refugieze si mai tare in viciul ei. Incerca sa umple cu mancare golurile sufletesti, insa reusea doar sa-si umple stomacul, nu si sufletul. N-a avut pe nimeni s-o opreasca din sinuciderea aceea lenta. N-a avut prieteni carora sa li se destainuie, s-a simtit singura si inutila, iar sotul ei nu ratase nicio ocazie sa-i aduca aminte ca ea nu mai este ca la inceput, ca s-a ingrasat peste masura, ca nu se mai simte atras de ea. "</p>
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
          
          