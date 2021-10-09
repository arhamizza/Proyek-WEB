<?php  

session_start();
    if( !isset($_SESSION["login"])) {
        header("location: loginForm.php");
        exit;
    } 
?>



<html>  
  
    <head>       
    </head>
    <style>
          .text-right img{
      height: 30px;
    }

    table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}
    </style>
    <title>Home USER</title>
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
                    <a class="dropdown-item" href="Bali.php">Bali</a>
                    <a class="dropdown-item" href="Lombok.php">Lombok</a>
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="Pulaukomodo.php">pulau komodo</a>
                    <a class="dropdown-item" href="Jogjakarta.php">Jogjakarta</a>
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 mr-5" action="loginForm.php">
                  <button class="btn btn-danger my-2 my-sm-0" type="submit">Login</button>
                
              </form>
              <form class="form-inline my-2 my-lg-0 mr-3" action="Logout.php">
                  <button class="btn btn-success my-2 my-sm-0" type="submit">Logout</button>
                
              </form>
            </div>
          </nav>
          <h3 class="text-warning">Anda Masuk Sebagai Admin</h3>
          <br>
          <br>

            <div class="container">
              <div class="row justify-content-md-center">
                <div class="col-md-auto">
                  <h1>PERUBAHAN PASSWORD</h1>

                  <form class="form-inline my-2 my-lg-0 mr-3" action="insertForm.html">
                  <button class="btn btn-warning my-2 my-sm-0" type="submit">Tambah USER</button>
                
                  </form>
                  <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>

            <?php  
                include "koneksi.php";
                
                $query="SELECT * FROM user";
                $result=mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row["id"]  ?></td>
                <td><?php echo $row["username"]  ?></td>
                <td><?php echo $row["password"]  ?></td>
                <td>
                    <a href="editForm.php?id=<?php echo $row ['id']; ?>">
                    Edit</a>
                    <a href="hapus.php?id=<?php echo $row ['id']; ?>">
                    Hapus</a>
                </td>
            </tr>

            <?php  
                    }
                }
                else {
                    echo "0 results";
                }           
            ?>
                
        </table>
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