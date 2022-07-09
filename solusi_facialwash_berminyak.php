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
              <img src="https://d3hctp6gkh4e3f.cloudfront.net/prod/2lo5djsmeo6ho30wfiiy" alt="facialwash" class="img-fluid facialwash-img">
            </div>
            <div class="col-lg-5">
              <h3>Bioré Deep Pore Charcoal Cleanser</h3>
              <p>Seperti namanya, cleanser ini diperkaya dengan kandungan charcoal yang mampu mengangkat minyak, sisa makeup, dan kotoran pada wajah secara menyeluruh hingga ke pori-pori. Yup,  pori-pori akan terasa lebih ringan berkat komedo yang terangkat, serta kulit yang bebas dari minyak.</p>
                <a href="https://www.tokopedia.com/find/biore-charcoal" class="btn btn-secondary tombol-facialwash">Buy</a>
            </div>
          </div>
          
          <div class="row justify-content-center berminyak">
            <div class="col-lg-4">
              <img src="https://d3hctp6gkh4e3f.cloudfront.net/prod/itkyc56gpb7jn413swzk" alt="facialwash" class="img-fluid facialwash-img">
            </div>
            <div class="col-lg-5">
              <h3>Acnes</h3>
              <p>Tak hanya bagus untuk tipe kulit berminyak, sabun wajah <span class="bold">Rohto Acnes Natural Care Facewash Complete White</span> ini juga jadi andalan untuk mengatasi jerawat. Mengandung bahan aktif antiacne dan sulfur yang mampu melawan bakteri jerawat.</p>
                <a href="https://www.bukalapak.com/products/s/acnes-natural-care-complete-white-facewash" class="btn btn-secondary tombol-facialwash">Buy</a>
            </div>
          </div>

          <div class="row justify-content-center berminyak">
            <div class="col-lg-4">
              <img src="https://d3hctp6gkh4e3f.cloudfront.net/prod/7xjj2ezi6sqrikrenahc" alt="facialwash" class="img-fluid facialwash-img">
            </div>
            <div class="col-lg-5">
              <h3>L’Oreal Pure Clay Wash</h3>
              <p>Memiliki kandungan mineral, ekstrak lumpur, dan eucalyptus sabun wajah dari L’Oreal ini dipercaya mampu menghilangkan minyak berlebih pada wajah sekaligus memurnikan wajah Anda, lho!</p>
                <a href="" class="btn btn-secondary tombol-sunscreen">Buy</a>
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