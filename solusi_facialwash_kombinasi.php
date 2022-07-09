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
            <a class="btn btn-secondary" href="logout_IMK.php">Log Out</a>
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
          <div class="row justify-content-center berminyak">
            <div class="col-lg-4">
              <img src="https://asset-a.grid.id/crop/0x0:0x0/700x0/photo/2018/10/05/4093986225.jpg" alt="facialwash" class="img-fluid facialwash-img">
            </div>
            <div class="col-lg-5">
              <h3>Clean & Clear Foaming Face Wash</h3>
              <p>Facial wash untuk kulit kombinasi yang pertama adalah dari produk Clean & Clear seri Foaming Face Wash. Memiliki formula khusus untuk mengontrol minyak selama 8 jam tanpa membuat kulit wajah terasa kering. Diklaim dapat membersihkan kotoran secara menyeluruh serta melawan bakteri penyebab jerawat.</p>
                <a href="" class="btn btn-secondary tombol-facialwash">Buy</a>
            </div>
          </div>
          
          <div class="row justify-content-center berminyak">
            <div class="col-lg-4">
              <img src="https://www.sociolla.com/cdn-cgi/image/w=360,format=auto,dpr=1.25/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/5/3/4/5/15345-large_default.jpg" alt="facialwash" class="img-fluid facialwash-img">
            </div>
            <div class="col-lg-5">
              <h3>Dove Deep Pure Facial Foam</h3>
              <p>Produk ini mengandung natrium moisture beauty yang mampu menyeimbangkan kelembapan pada kulit wajah kombinasi. Membersihkan kotoran hingga ke dalam pori-pori kulit tanpa membuatnya terasa kering. Facial wash untuk kulit kombinasi ini juga bisa dipakai untuk kalian yang memiliki masalah jerawat di wajah loh.</p>
                <a href="" class="btn btn-secondary tombol-facialwash">Buy</a>
            </div>
          </div>

          <div class="row justify-content-center berminyak">
            <div class="col-lg-4">
              <img src="https://asset-a.grid.id/crop/0x0:0x0/700x0/photo/2018/10/05/479306354.jpg" alt="facialwash" class="img-fluid facialwash-img">
            </div>
            <div class="col-lg-5">
              <h3>Nivea</h3>
              <p><span class="bold">Nivea Sparkling White Whitening Foam</span> efektif untuk membersihkan wajah secara total. Mengangkat kotoran yang ada di pori-pori wajah sehingga menjadikan kulit telihat lebih cerah dan tidak kusam.</p>
                <a href="" class="btn btn-secondary tombol-berminyak">Buy</a>
            </div>
          </div>

          <div class="row justify-content-center berminyak">
            <div class="col-lg-4">
              <img src="https://images-na.ssl-images-amazon.com/images/I/51zA4wiqjYL._SL1000_.jpg" alt="facialwash" class="img-fluid facialwash-img">
            </div>
            <div class="col-lg-5">
              <h3>Himalaya</h3>
              <p>Facial wash untuk kulit kombinasi dari Himalaya memiliki kandungan ekstrak nimba dan kunyit. Mengurangi produksi minyak berlebih pada wajah tanpa menjadikannya terasa kering. Selain itu <span class="bold">Himalaya Herbals Purifying Neem Face Wash</span> juga ampuh dalam mengobati dan mencegah jerawat. Facial wash untuk kulit kombinasi ini juga diklaim sebagai pencuci muka tanpa paraben Stylovers.</p>
                <a href="" class="btn btn-secondary tombol-himalaya">Buy</a>
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