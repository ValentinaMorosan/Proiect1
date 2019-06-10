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
        $sql="SELECT * FROM images WHERE ID='12'";
        $query=  mysqli_query($con,$sql)or die(mysqli_error($con));
        $row=mysqli_fetch_array($query);
             echo "<img src=".$row['image']."><br/>";
             echo '<br>';
            ?>
              </th>
          <th>
               <textarea rows="9" cols="50" >
                    An aparitie: 2019
                    Autori: Rachael Lippincott, Mikki Daughtry, Tobias Iaconis
                    Categoria: Literatura Universala
                    Editie: Necartonata
                    Editura: LITERA
                    Format:  200 x 140 x 25 mm
                    Nr. pagini: 288</textarea>      
                  <th>
        </table>
          
           <svg height="30" width="300">
           <text x="0" y="15" fill="blue" ><strong>Descriere</strong></text>
             <p>Stella Grant simte nevoia sa-si planifice viata pas cu pas - poate pentru ca plamanii ei bolnavi, pe care nu-i poate controla, i-o guverneaza oricum, trimitand-o periodic in spital, inca din copilarie. In momentul de fata, Stella trebuie sa-si planifice foarte bine viata pentru a nu pierde locul pe lista beneficiarilor unui transplant de plamani, care-i va asigura cinci ani de existenta fara probleme. Pentru asta e obligata sa stea in permanenta la sase pasi de oricine i-ar putea transmite o infectie pulmonara. Sase pasi. Fara exceptii. Will Newman este exact persoana de care Stella trebuie sa se fereasca. Lui Will nu-i pasa de reguli, de tratamente, nu-si respecta orarul de medicatie si abia asteapta sa implineasca optsprezece ani ca sa-si decida singur soarta. Vrea sa plece sa vada lumea - nu doar spitalele ei. Mai mult, Will o poate infecta pe Stella cu o bacterie mortala. Si totusi, dintr-odata, cei sase pasi dintre ei nu mai par un spatiu de siguranta, ci o pedeapsa. Oare n-ar putea sa fure macar o mica parte din aceasta distanta, in schimbul a tot ceea ce plamanii lor defecti le-au furat din viata? Cat de periculosi ar putea fi numai cinci pasi intre ei, daca asta ii ajuta sa castige sufleteste?
             </p>

             <p>  Carte ecranizata: descopera un nou Love Story in cea mai recenta productie cinematografica a anului, cu Cole Sprouse si Haley Lu Richardson in rolurile principale </p>
             <p>Fragment din cartea "La cinci pasi de tine" de Rachael Lippincott, Mikki Daughtry si Tobias Iaconis:</p>

           <p>  "Deschid pagina de cautare si tastez „Stella Grant" in fereastra Google, fara sa ma astept la prea multe. Pare genul care are o pagina Facebook doar pentru prietenii foarte apropiati. Sau un amarat de cont pe Twitter pe care reposteaza clisee despre importanta spalatului pe maini.
Primul rezultat e insa o pagina pe YouTube cu titlul Jurnalui FC nu tocmai secret al Stellei Grant, pe care sunt cel putin o suta de clipuri video, cele mai vechi datand de acum vreo sase ani. Mati incrunt usor, fiindca numele paginii imi pare ciudat de familiar. Ah, Doamne, asta e canalul ala jalnic al carui link mi l-a trimis mama cu cateva luni in urma, intr-o tentativa de a ma convinge sa-mi iau tratamentele in serios.
Daca as fi stiut ca fata arata asa...
Derulez pana la cea mai veche postare si accesez un clip video pe a carui eticheta vad o Stella mai tanara, cu aparat dentar si o coada de cal in varful capului. Incerc sa nu rad. Si ma intreb cum arata dintii ei acum, dat fiind ca inca n-am vazut-o zambind.
Probabil ca n-arata rau. Pare genul care isi poarta retainerul dentar noaptea, in loc sa-l lase sa se prafuiasca pe etajera din baie, Pe al meu cred ca nici nu l-am luat de la cabinetul ortodontistului.
Apas butonul de volum, si glasul ei se revarsa din boxe.
„Ca toti fibrochisticii, sunt in faza terminala de cand m-a nascut. Corpul fabrica prea mult mucus, iar mucusului ii place sa intre in plamani si sa provoace infectii respiratorii, ceea ce face ca functia pulmonara sa se dete-riore-ze." Se balbaie la ultim cuvant si apoi etaleaza un zambet larg. „In momentul de fata functia mea pulmonara e de cincizeci la suta." 
Dupa asta, clipul e taiat grosolan, iar ea coteste pe o scara pe care o recunosc: e intrarea principala in spital. Nu-i de mirare ca stie sa se orienteze atat de bine. Vine aici de cand lumea si pamantul.
Ii zambesc, cu toate ca taietura aia a fost cea mai jalnica pe care am vazut-o vreodata. Se asaza pe trepte si trage adanc aer in piept. „Doamna doctor Hamid zice ca, in ritmul asta, o sa am nevoie de transplant inainte sa intru la liceu. Transplantul nu inseamna si vindecare, dar o sa-mi dea mai mult timp! Mi-ar placea tare mult sa mai traiesc cativa ani, daca o sa am norocul sa primesc un transplant!"
Mie-mi spui, Stella?
Cel putin, ea are o sansa."</p>
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
          
          