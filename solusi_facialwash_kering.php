<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:Login_IMK.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--css pribadi-->
    <link rel="stylesheet" href="style3.css">


    <title>Bot Skincare</title>
  </head>
  <body>
    <!--Awal Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">      
        <a class="navbar-brand" href="landing_page.php">Bot Skincare</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link" href="landing_page.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">About Us</a>
            <a class="btn btn-secondary" href="logout.php">Log Out</a>
          </div>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    <!--Awal isi-->
    <div class="jumbotron jumbotron-fluid">
      <div class="">
        <h1 class="display-4 jarak-bawah">This Your Solution's <?php echo $_SESSION['nama']; ?></h1>
        <p></p>
      </div>
      <div class="container">
        <div class="naik">
          <div class="row justify-content-center facialwash">
            <div class="col-lg-4">
              <img src="wardah facialwash kering.jpg" alt="facialwash" class="img-fluid facialwash-img">
            </div>
            <div class="col-lg-5">
              <h3>Wardah</h3>
              <p>Facial wash untuk kulit kering yang bisa kamu pilih salah satunya adalah dari brand Wardah. <span class="bold">Wardah Hydramild Facial Wash</span> ini memiliki busa yang wangi, ringan, dengan formula pH balance. Teksturnya lembut untuk membersihkan kulit wajah. Wajah pun akan bersih, tetapi tetap segar dan terasa lembap.</p>
                <a href="https://shopee.co.id/Wardah-Nature-Daily-Aloe-Hydramild-Facial-Wash-100ml(Besar)-i.7965656.1323730462" class="btn btn-secondary tombol-facialwash">Buy</a>
            </div>
          </div>
          
          <div class="row justify-content-center facialwash">
            <div class="col-lg-4">
              <img src="hada_labo facialwash kering.jpg" alt="facialwash" class="img-fluid facialwash-img">
            </div>
            <div class="col-lg-5">
              <h3>Hada Labo</h3>
              <p>Selanjutnya, sabun cuci muka untuk kulit kering yang recommended untuk kamu adalah <span class="bold">Hada Labo Gokujyun Ultimate Moisturizing Face Wash</span>. Tenang saja, pH kulitmu akan tetap seimbang dan kulitmu pun nggak akan menjadi kering dengan produk ini.</p>
                <a href="https://shopee.co.id/HADA-LABO-Gokujyun-Ultimate-Moisturizing-FACE-WASH-SABUN-i.3327852.2650793532" class="btn btn-secondary tombol-sunscreen">Buy</a>
            </div>
          </div>

          <div class="row justify-content-center facialwash">
            <div class="col-lg-4">
              <img src="laneige facialwash kering.jpg" alt="facialwash" class="img-fluid facialwash-img">
            </div>
            <div class="col-lg-5">
              <h3>LANEIGE</h3>
              <p>Facial wash untuk kulit kering yang bisa kamu, yaitu <span class="bold">Laneige Foam Cleanser Moisture EX</span> berasal dari Korea memiliki busa pembersih dan pelembap untuk kulit kering. Dapat membersihkan wajahmu dari sisa make up dan kotoran setelah beraktivitas seharian.</p>
                <a href="" class="btn btn-secondary tombol-sunscreen">Buy</a>
            </div>
          </div>
          
          <div class="row justify-content-center facialwash">
            <div class="col-lg-4">
              <img src="himalaya facialwash kering.jpg" alt="facialwash" class="img-fluid facialwash-img">
            </div>
            <div class="col-lg-5">
              <h3>Himalaya</h3>
              <p><span class="bold">Himalaya Moisturizing Aloe Vera Face Wash</span> ini juga termasuk sabun wajah yang sangat direkomendasikan buat kamu. Facial wash untuk kulit kering ini diperkaya dengan kandungan ekstrak lidah buaya dan mentimun yang  bisa membuat kulit wajah lebih baik.</p>
                <a href="" class="btn btn-secondary tombol-pelembab">Buy</a>
            </div>
          </div>


          <div class="row justify-content-center facialwash">
            <div class="col-lg-4">
              <img src="bioderma facialwash kering.jpg" alt="facialwash" class="img-fluid facialwash-img">
            </div>
            <div class="col-lg-5">
              <h3>BIODERMA</h3>
              <p>Masih ada nih produk cuci muka untuk kulit kering. <span class="bold">BIODERMA Atoderm Gel douche</span> ini produk yang berfungsi merawat dan melembapkan kulit. Formulanya bebas sabun, sehingga mampu merawat kulit kering dengan baik. Memiliki tekstur berupa gel yang mampu melembutkan dan melindungi kulitmu.</p>
                <a href="" class="btn btn-secondary tombol-bioderma">Buy</a>
            </div>
          </div>

          <div class="row justify-content-center facialwash">
            <div class="col-lg-4">
              <img src="https://haigadis.com/wp-content/uploads/2020/05/LOreal-Paris-Hydrafresh-Mild-Foam.jpg" alt="facialwash" class="img-fluid facialwash-img">
            </div>
            <div class="col-lg-5">
              <h3>L'OREAL</h3>
              <p>Sabun cuci muka selanjutnya adalah <span class="bold">L’Oreal Paris Hydrafresh Mild Foam</span>. Produk yang dikhususkan untuk kulit kering ini mampu membersihkan wajah dengan baik sekaligus menjaga kelembapan kulit. Formulanya sangat lembut sehingga nggak akan membuat kulit semakin kering setelah pemakaian.</p>
                <a href="" class="btn btn-secondary tombol-loreal">Buy</a>
            </div>
          </div>


        </div>
      </div>
    </div>
    <!--Akhir isi-->

    <!--Footer-->
    <div id="container">
      <div id="footer">
          Copyright &copy; 2020
          Designed by Febriando, dkk
      </div>
    </div>
    <!--Akhir Footer-->






























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>