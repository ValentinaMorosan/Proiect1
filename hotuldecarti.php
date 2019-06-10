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
        $sql="SELECT * FROM images WHERE ID='11'";
        $query=  mysqli_query($con,$sql)or die(mysqli_error($con));
        $row=mysqli_fetch_array($query);
             echo "<img src=".$row['image']."><br/>";
             echo '<br>';
            ?>
              </th>
          <th>
               <textarea rows="9" cols="50" >
                    An aparitie: 2014
                    Autor: Markus Zusak
                    Categoria: Literatura Universala
                    Categoria: Literatura Universala
                    Editia: a 2-a, revazuta si adaugita
                    Editie: cartonata
                    Editura: RAO
                    Format: 200x130
                    Nr. pagini: 568</textarea>      
                  <th>
        </table>
          
           <svg height="30" width="300">
           <text x="0" y="15" fill="blue" ><strong>Descriere</strong></text>
             <p>Este anul 1939. Germania nazista. Tara isi tine rasuflarea. Moartea nu a avut niciodata mai mult de lucru, si va deveni chiar mai ocupata. Liesel Meminger si fratele ei mai mic sunt dusi de catre mama lor sa locuiasca cu o familie sociala in afara orasului Munchen. Tatal lui Liesel a fost dus departe sub soapta unui singur cuvant nefamiliar - Kommunist -, iar Liesel vede in ochii mamei sale teama unui destin similar. Pe parcursul calatoriei, Moartea ii face o vizita baietelului si o observa pe Liesel. Va fi prima dintre multe intalniri apropiate. Langa mormantul fratelui ei, viata lui Liesel se schimba atunci cand ea ridica un singur obiect, ascuns partial in zapada. Este Manualul Groparului, lasat acolo din greseala, si este prima ei carte furata. Astfel incepe o poveste despre dragostea de carti si de cuvinte, pe masura ce Liesel invata sa citeasca cu ajutorul tatalui ei adoptiv, care canta la acordeon. In curand, va fura carti de la incendierile de carti organizate de nazisti, din biblioteca sotiei primarului, si de oriunde le mai putea gasi. Hotul de carti este o poveste despre puterea cuvintelor de a crea lumi. Cu o scriitura superb maiestrita si arzand cu intensitate, premiatul autor Marcus Zusak ne-a daruit una dintre cele mai durabile povesti ale timpurilor noastre.
             </p>

             <p>  Fragment din romanul "Hotul de carti" de Markus Zusak:

    ”JURNALUL MORTII: KOLN</p>

           <p>   Primele ore ale zilei de 30 mai.
    Sunt sigura ca Liesel Meminger dormea dusa cand peste o mie de avioane de bombardament zburau spre un loc numit Koln. Pentru mine, rezultatul a fost cinci sute de oameni sau pe-aproape. Cinci mii de oameni ramasi fara adapost umblau in jurul mormanelor fantomatice de moloz, incercand sa-si dea seama ce apartinea cui si ce bucati de casa distrusa erau ale cui.
    Cinci sute de suflete.
    Le-am purtat in degete, ca pe valize. Sau le-am aruncat pe umar. Numai pe copii i-am dus in brate.
    Pana cand am terminat, cerul devenise galben ca un ziar in flacari. Daca ma uitam indeaproape, puteam vedea cuvintele, titlurile informative care comentau evolutia razboiului si asa mai departe. Cum mi-ar fi placut sa-l trag pe tot in jos, sa mototolesc cerul ca un ziar si sa-l arunc departe! Bratele ma dureau si nu-mi puteam permite sa-mi ard degetele. Inca mai era multa treaba de facut.
    Dupa cum v-ati astepta, multi oameni au murit instantaneu. Altora le-a trebuit ceva timp. Mai aveam cateva alte locuri de vizitat, ceruri de intalnit si suflete de colectat, iar atunci cand m-am intors in Koln, mai tarziu, nu mult dupa trecerea ultimelor avioane, am avut ocazia sa observ cel mai nemaipomenit lucru.
    Purtam sufletul carbonizat al unei adolescente cand am privit cu solemnitate in sus, la ceea ce era acum un cer sulfuros. Un grup de fete de zece ani erau prin apropiere. Una dintre ele a strigat:
    - Ce-i asta?
    Bratul i s-a intins si degetul a aratat catre un obiect negru, care cadea incet de sus. La inceput, arata ca o pana neagra, plutind, saltand. Ca o bucatica de cenusa. Apoi, a devenit tot mai mare. Aceeasi fata — o roscata, cu pistrui — vorbi din nou, de data aceasta nerabdatoare:
    - Ce e asta?
    - E un corp, sugera, o alta fata.
    Par negru, codite cu carare pe mijloc.
    - E o alta, bomba!
    Era prea lenta ca sa fie o bomba.
     Cu spiritul adolescentin inca arzand usor in bratele mele, am mers cateva sute de metri impreuna cu ele. Ca si fetele, am ramas cu privirea atintita spre cer. Ultimul lucru pe care il voiam era sa ma uit in jos, la fata chinuita a adolescentei mele. O fata, draguta. Avea toata moartea in fata.”</p>
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
          
          