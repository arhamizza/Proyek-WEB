<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link rel="stylesheet" href="file untuk index/css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/font-awesome.min.css">
  <link rel="stylesheet" href="styleindex.css">
  <script src="jquery-3.5.1.js"></script>
  <script>
            var i=0;
            $(document).ready(function () {
                $('.slidertitle, #slider img').hide();
                showNextImage();
                setInterval('showNextImage()', 3000);
            });

            function showNextImage() {
                i++;
                $('#sliderImage' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
                $('#title' + i).appendTo('#slider').fadeIn(1100).fadeOut(1100);
                if (i==4) {
                    i=0;
                }
            };
    </script>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container" id="navbar">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand navbar-link"><img src="img/logo.png"></a>
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav navbar-right">
          <li role="presentation"><a href="index.php">HOME</a></li>
          <li role="presentation"><a href="about.php">ABOUT</a></li>
          <li>
            <form class="form-inline my-2 my-lg-0 mr-5" action="loginForm.php">
              <button class="btn btn-danger my-2 my-sm-0" type="submit">Login</button>       
          </form>
          </li>
          <li>
            <form class="form-inline my-2 my-lg-0 mr-3" action="Logout.php">
              <button class="btn btn-success my-2 my-sm-0" type="submit">Logout</button>  
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- jumbotron -->
  <div id="background">
    <div class="jumbotron">
    <h1>INDONESIA</h1>
      <p>Indonesia negara dengan kekayaan yang melimpah dan banyaknya tempat-tempat yang exotic yang jarang orang mengetahuinya</p>
      
     
    </div>
  </div>
  <!-- jumbotron -->

  <!-- container atas -->
  <div id="home">
    <div class="isi">
      <div class="container atas">
        <h1>"EZ TRAVELLER PENYEDIA PACKET TRAVELLER YANG SANGAT FANTASTIK"</h1>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-map-marker"></i>
            <h3>STRATEGIC</h3>
            <p class="text-center"><strong>Nyaman, harga terjangkau,mudah pendaftaran</strong> </p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-camera"></i>
            <h3>EXOTIC</h3>
            <p class="text-center">paket tempat wisata yang kami sediakan memiliki suasana yang <strong>EXOTIC</strong>. Sehingga akan memanjakan mata anda ketika melihat tempat wisatanya.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container atas -->

  <!-- container bawah -->
  <div class="container bawah">
    <h1>LOKASI EXOTIC DI INDONESIA</h1>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="img/gambar-1-A.jpg" width="300px">
        <h3>NUSA PENINDA</h3>
        <p class="text-center">pilihan tepat untuk Toppers yang suka melakukan Island Hoping, dan menikmati keindahan bawah laut dengan snorkeling. Dengan panorama pantai yang indah Nusa Penida dan pulau-pulau kecil sekitarnya </p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="img/gambar-1-B.jpg" width="300px">
        <h3>RAJA EMPAT</h3>
        <p class="text-center">Raja Ampat atau Empat Raja merupakan 4 pulau indah yang merupakan penghasil lukisan batu kuno. Empat pulau utama yang dimaksud adalah <strong>Waigeo, Salawati, Batanta, dan Misool</strong>.</p>
      </div><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="img/gambar-1-C.jpg" width="300px">
        <h3>DANAU KELIMUTU</h3>
        <p class="text-center">Keistimewaan danau yang terletak di Pulau Flores, NTT ini adalah pemandangan danau dengan tiga warna yakni <strong>hijau, putih dan biru</strong>. Setiap tahun, danau eksotik ini selalu ramai dikunjungi wisatawan mancanegara.</p>
      </div>
    </div>
  </div>
  <!-- container bawah -->

  <!-- container news -->
  <div id="news">
    <h1 class="text-center">PALING POPULER</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="img/gambar-2-A.jpg">
          <div class="caption">
            <h3>WAE REBO</h3>
            <p class="text-justify">terletak di Nusa Tenggara Timur pemandangan di sini sangatlah layak untuk diabadikan karena tempatnya yang sangat indah dikelilingi oleh pegunungan rimbun sepanjang mata memandang.</p>
            
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="img/gambar-2-B.jpg">
          <div class="caption">
            <h3>KAWAH IJEN</h3>
            <p class="text-justify">di daerah ujung timur pulau Jawa tepatnya di perbatasan Banyuwangi Situbondo digemari oleh wisatawan lokal maupun mancanegara.alah satu daya tariknya adalah api biru atau <strong>“Blue Fire”</strong></p>
            
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="img/gambar-2-C.jpg">
          <div class="caption">
            <h3>PULAU BINTAN</h3>
            <p class="text-justify">kamu akan menikmati keindahan pulau dengan kejernihan pantai dan air laut di sini. Bagi wisatawan daerah bernama Lagoi ini  menjadi sebuah surga dunia yang harus dikunjungi .</p>
            
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="img/gambar-2-D.jpg">
          <div class="caption">
            <h3>LABUAN CERMIN</h3>
            <p class="text-justify">merupakan muara dimana ada bagian yang asin dan bagian lainya adalah tawar. Kamu bisa menyewa sebuah perahu yang bisa dijadikan sebagai tempat kamu untuk befoto ria.</p>
            
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container news -->

  <!-- gallery PULAU JAWA-->
  <div id="gallery">
    <div class="container">
      <h1>Gallery</h1>
      
      <h2>POPULER DI PULAU JAWA</h2>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="satu"><img class="img-responsive" src="img/gambar-3-A.jpg" ></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="satu"><img class="img-responsive" src="img/gambar-3-B.jpg" width="300px"></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="satu"><img class="img-responsive" src="img/gambar-3-C.jpg" width="300px"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="dua"><img class="img-responsive" src="img/gambar-3-D.jpg"  ></div>

      </div>
    </div>
  </div>
  <!-- gallery PULAU JAWA-->

  
  <!-- gallery PULAU BALI-->
  <div id="gallery">
    <div class="container">
      
      <h2>POPULER DI PULAU BALI</h2> 
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="satu"><img class="img-responsive" src="img/gambar-4-A.jpg" ></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="satu"><img class="img-responsive" src="img/gambar-4-B.jpg" width="300px"></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="satu"><img class="img-responsive" src="img/gambar-4-C.jpg" width="300px"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="dua"><img class="img-responsive" src="img/gambar-4-D.jpg"  ></div>
      </div>
    </div>
  </div>
  <!-- gallery PULAU BALI-->

    <!-- gallery PULAU LOMBOK-->
    <div id="gallery">
    <div class="container">
      
      <h2>POPULER DI PULAU Pulau Lombok</h2> 
      <div id="slider" class="text-center">
            <img id="sliderImage1" src="Lombok/1.jpg" height="500px" width="500px">
            <div class="slidertitle" id="title1">Pantai Seger Kuta</div>

            <img id="sliderImage2" src="Lombok/2.jpg" height="500px" width="500px">
            <div class="slidertitle" id="title2">Pantai Tanjung Aan</div>

            <img id="sliderImage3" src="Lombok/3.jpg" height="500px" width="500px">
            <div class="slidertitle" id="title3">Bukit Selong</div>

            <img id="sliderImage4" src="Lombok/4.jpg" height="500px" width="500px">
            <div class="slidertitle" id="title4">Gili Trawangan, Gili Meno, dan Gili Air</div>
        </div>

  </div>
  <!-- gallery PULAU LOMBOK-->

        <footer class="bg-primary text-white text-left text-lg-start">

        <div class="p-3" style="background-color: rgba(255, 5, 109, 0.979)">
        <h3>Cari tahu sosmed kami<h3> 
        <div class="text-right"">
            <a href="#"class=""  ><img src="twitter.png"  height="30px"></a>
            <a href="#"class=""><img src= "ig.png"  height="30px"></a>
            <a href="#"class=""><img src="fb.jpg"  height="30px"></a>
        </div>
        </div>
        <!-- Grid container -->
        <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h3 class="text-uppercase">EZTRAVEL IS THE BEST</h3>

            <h4>
                Terimakasih sudah datang diwebiste kami, jika ingin mengetahui lebih lanjut bisa menghubungi contact person disamping ini
            </h4>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h3 class="text-uppercase">Arham izza</h3>

            <ul class="list-unstyled mb-0 ml-1">
                <li>
                <a href="www.facebook.com" class="text-danger">FB</a>
                </li>
                <li>
                <a href="www.instagram.com" class="text-danger">IG</a>
                </li>
                <li>
                <a href="www.gmail.com" class="text-danger">Email</a>
                </li>
                <li>
                <a href="www.googlemaps.com" class="text-danger">Adress</a>
                </li>
            </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h3 class="text-uppercase">Oscar Nur Islam</h3>

            <ul class="list-unstyled mb-0 ml-1">
                <li>
                <a href="www.facebook.com" class="text-danger">FB</a>
                </li>
                <li>
                <a href="www.instagram.com" class="text-danger">IG</a>
                </li>
                <li>
                <a href="www.gmail.com" class="text-danger">Email</a>
                </li>
                <li>
                <a href="www.googlemaps.com" class="text-danger">Adress</a>
                </li>
            </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="index.php">EZTRAVEL.com</a>
        </div>
        <!-- Copyright -->
        </footer>
</body>

</html>
