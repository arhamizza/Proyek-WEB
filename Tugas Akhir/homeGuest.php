<html>  
    <head>      
      <style>
        .text-right img{
      height: 30px;
      }
      </style> 
    </head>
    <title>Home Guest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="homeadmin.css" type="text/css" >
    <body>
          <nav class="navbar navbar-expand-lg navbar-dark bg-info">
          <a class="navbar-brand text-danger mr-5" href="#"><img src="img/logo.png" width="80px" height="35px" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="homeGuest.php">Beli Tiket</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    BLOG
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item active" href="Bali.php">Bali</a>
                    <a class="dropdown-item" href="Lombok.php">Lombok</a>
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="Pulaukomodo.php">pulau komodo</a>
                    <a class="dropdown-item" href="Jogjakarta.php">Jogjakarta</a>
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0" action="loginForm.php">
                  <button class="btn btn-danger my-2 my-sm-0" type="submit">Login</button>
                
              </form>
            </div>
          </nav>
          <h3 class="text-warning">Anda Masuk Sebagai Guest</h3>
          <br>
          <br>
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-auto">
                <h1>Wisata Indonesia</h1>
              </div>
            </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-6">
                        <h3>BALI</h3>
                        <div class="container bg-light">
                            <h3>Is a small beautiful island and a part of Indonesia archipelago. It own the panorama and unique culture that make this island is exclusively than others and apple has made Bali famous around the world..</h3>
                        </div>
                        <img src="Bali.jpg" class="img-thumbnail" alt="BA">
                        <br>
                        
                    </div>
                    
                    <div class="col-6">
                        <h3>LOMBOK</h3>
                        <div class="container bg-light">
                            <h3>The Republic of Indonesia is made up of 17,508 islands. One of these islands is Komodo Island the New & Wonders of Nature, made famous because of one of its inhabitants—the Komodo dragon. The island is</h3>
                        </div>
                        <img src="lombok.jpg" class="img-thumbnail" alt="lombok">
                    </div>
                    <div class="col-6 mt-5">
                        <h3>PULAU KOMODO</h3>
                        <div class="container bg-light">
                            <h3>The Republic of Indonesia is made up of 17,508 islands. One of these islands is Komodo Island the New & Wonders of Nature, made famous because of one of its inhabitants—the Komodo dragon. The island is</h3>
                        </div>
                        <img src="komodo.jpg" class="img-thumbnail" alt="pulau komodo">
                    </div>
                    
                    <div class="col-6 mt-5">
                        <h3>Jogjakarta</h3>
                        <div class="container bg-light">
                            <h3>The Republic of Indonesia is made up of 17,508 islands. One of these islands is Komodo Island the New & Wonders of Nature, made famous because of one of its inhabitants—the Komodo dragon. The island is</h3>
                        </div>
                        <img src="jogja.jpg" class="img-thumbnail" alt="jogja">
                    </div>
                </div>
            </div>

            <div class="container">
              <div class="row justify-content-md-center">
                <div class="col-md-auto">
                  <h1>PEMBELIAN TIKET</h1>
                </div>
              </div>
              </div>


           <div class="container mt-5">
                <div class="row">
                  
                    <div class="col-6">
                      <label for="id_pembeli" color= "white" style="padding-left: 30px;">ID Pembeli</label>
                      <input type="text" id="id_pembeli" name="id_pembeli" required>
                      <br><br>
                      <label for="nama_pembeli" style="padding-left: 30px;">Nama Pembeli</label>
                      <input type="text" id="nama_pembeli" name="nama_pembeli" required>
                      <br><br>
                        
                    </div>
                    
                    <div class="col-6">
                        <label for="nama_makanan" style="padding-left: 30px;">Nama Makanan</label>
                        <select id="nama_makanan" name="nama_makanan">
                            <option value="BALI">BALI - Rp 500.000</option>
                            <option value="lombok">lombok - Rp 750,000</option>
                            <option value="Pulau komodo">Pulau komodo- Rp 650.000</option>
                            <option value="Jogjakarta">Jogjakarta - Rp 500.000</option>
                        </select>
                        <br><br>
                        <label for="jumlah" style="padding-left: 30px;">Jumlah</label>
                        <input type="number" id="jumlah" name="jumlah" required>
                        <br><br>

                    </div>
                     
                    <div class="container">
                      <div class="row justify-content-md-center">
                        <div class="col-md-auto">
                          <button type="submit" id="submit" name="submit" class="button" onclick="form_process()">Submit</button>
                          <div id="hasil_submit"></div>
                        </div>
                      </div>
                      </div>

                    <script>
                      function myFunction() { }
                      var menu = ["BALI", "lombok", "Pulau komodo",  "Jogjakarta"];
      
                      function form_process() {
                          var harga_makanan = 0;
                          var diskon = 0;
                          var id_pembeli = document.getElementById('id_pembeli').value;
                          var nama_pembeli = document.getElementById('nama_pembeli').value;
                          var nama_makanan = document.getElementById('nama_makanan').value;
                          var jumlah = document.getElementById('jumlah').value;
      
                          if (nama_makanan == "BALI") {
                              harga_makanan = 500000;
                          } else if (nama_makanan == "lombok") {
                              harga_makanan = 750000;
                          } else if (nama_makanan == "Pulau komodo") {
                              harga_makanan = 650000;
                          } else if (nama_makanan == "Jogjakarta") {
                              harga_makanan = 500000;
                          }
      
                          total = harga_makanan * jumlah;
                          var par = document.createElement("h3")
                          var boom = document.createElement("h3")
                          var wk = document.createElement("h3")
                          var id = document.createTextNode(
                            "IDpembeli: " + id_pembeli
                          )
                          var nama = document.createTextNode(
                            "NAMA : " + nama_pembeli
                          )
                          var node = document.createTextNode(
                              "TOTAL BAYAR : " + total
                          )
                          boom.appendChild(id)
                          wk.appendChild(nama)
                          par.appendChild(node)

                          document.getElementById("hasil_submit").appendChild(boom)
                          document.getElementById("hasil_submit").appendChild(wk)
                          document.getElementById("hasil_submit").appendChild(par)
                          // location.replace("kwitansi.php")
                      }
                  </script>
                  
                </div>
            </div>

            </div>

            <footer class="bg-dark text-white text-left text-lg-start mt-5">

              <div class="p-3" style="background-color: rgba(255, 5, 109, 0.979)">
                <h4>Cari tahu sosmed kami</h4> 
                <div class="text-right">
                  <a href="#"class=""><img src="twitter.png"></a>
                  <a href="#"class=""><img src= "ig.png"></a>
                  <a href="#"class=""><img src="fb.jpg"></a>
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
            
                    <ul class="list-unstyled mb-0">
                      <li>
                        <a href="www.facebook.com" class="text-white">FB</a>
                      </li>
                      <li>
                        <a href="www.instagram.com" class="text-white">IG</a>
                      </li>
                      <li>
                        <a href="www.gmail.com" class="text-white">Email</a>
                      </li>
                      <li>
                        <a href="www.googlemaps.com" class="text-white">Adress</a>
                      </li>
                    </ul>
                  </div>
                  <!--Grid column-->
            
                  <!--Grid column-->
                  <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h3 class="text-uppercase">Oscar Nur Islam</h3>
            
                    <ul class="list-unstyled mb-0">
                      <li>
                        <a href="www.facebook.com" class="text-white">FB</a>
                      </li>
                      <li>
                        <a href="www.instagram.com" class="text-white">IG</a>
                      </li>
                      <li>
                        <a href="www.gmail.com" class="text-white">Email</a>
                      </li>
                      <li>
                        <a href="www.googlemaps.com" class="text-white">Adress</a>
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