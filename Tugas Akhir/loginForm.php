<html>  
    <head></head>
    <style>
          .text-right img{
      height: 30px;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="Login.css" type="text/css" >
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
                <li class="nav-item">
                  <a class="nav-link" href="homeGuest.php">Beli Tiket</a>
                </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  BLOG
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="Bali.php">Bali</a>
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
          <div class="body">
            <br>
            <br>
          <form action="loginMultiProses.php" method="POST">
              <div class="row justify-content-center ">
                  <div class="col-6">
                      <div class="card text-center">
                          <div class="card-header bg-success">
                             <h1>Silahkan Anda Login </h1>
                          </div>
                          <div class="card-body bg-primary pt-5 pb-5">
                              <div class="row justify-content-center">
                                  <div class="col-8">
                                      <div class="input-group mb-3">
                                          <span class="input-group-text" id="basic-addon1">@</span>
                                          <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                      </div>
                                  </div>
                                  <div class="col-8">
                                      <div class="input-group mb-3">
                                          <span class="input-group-text" id="basic-addon1">@</span>
                                          <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                      </div>
                                  </div>
                                  
                              </div>
                              <button type="submit" name="login" class="btn btn-danger">Submit</button>
                          </div>
                          <div class="card-footer text-muted bg-success">
                            
                          </div>
                      </div>
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
                  <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ">
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

        </form>
</body>
</html>