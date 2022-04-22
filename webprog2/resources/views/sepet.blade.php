<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/fontawesome-free-6.1.1-web/css/all.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/fontawesome-free-6.1.1-web/css/fontawesome.css')}}">
        <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{url('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <title>Sepetim</title>
    </head>
<body class="d-flex flex-column min-vh-100">

  <!-- Navbar Başlangıcı -->
  <div class="bg-image" style="position: relative; z-index: 1; height: 30vh; filter: grayscale(85%);  background-image: url(assets/pictures/banner.jpg)">
    <div class="col-12 pt-5" >
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <div class="container-fluid" >
              <div class="navbar-brand ms-3 pb-2">
                 <img src="assets/pictures/fil2.png" style="width: 80px; height: 60px;" alt="Anasayfa">
                </div>
                <div class="navbar-brand ms-3">
                  <h1 class="display-5 pt-1">Elephone Aksesuar</h1>
                  </div> 
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler02" aria-controls="navbarToggler02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarToggler02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item me-5">
                    <a class="nav-link" aria-current="page" href="/"><i class="fa fa-house"></i> Anasayfa</a>
                  </li>
                  <li class="nav-item me-5">
                    <a class="nav-link active" aria-current="page" href="sepet"><i class="fa fa-basket-shopping"></i> Sepetim</a>
                  </li>
                  <li class="nav-item me-1">
                    <a class="nav-link " href="cikis"><i class="fa fa-right-from-bracket"></i> Çıkış Yap</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="container mt-4 d-flex justify-content-center">
            <div class=" bg-light col-2 rounded text-center"><h6 class="small pt-2">Kullanıcı Adı Buraya</h6></div>
          </div>
        </div>
  </div>
<!-- Navbar Sonu -->

<!-- Sepetimdeki Ürünler Başlangıcı -->
<div class="container mt-5 ">
  <h5 class="display-5 mt-1 mb-2 text-center">Sepetimdeki Ürünler</h5>
  <hr class="border border-1 border-dark">
</div>
<div class="container my-1 ">
  <div class="my-5 d-flex justify-content-start"> 
    <div class="col-6 text-center mt-2">
      <p id="sepetUrunBilgisi">Ürün Bilgisi Buraya Gelecek</p>
    </div>
    <div class="col-2 text-start mt-2">
      <p id="sepetUrunFiyati">Fiyat Bilgisi Buraya Gelecek</p>
    </div>
    <div class="col-4 d-flex justify-content-center">
      <button class="btn-sm rounded-3 btn-dark h-75 mt-2" id="sepetUrunKaldir">Sepetten Kaldır</button>
    </div>
  </div>
</div>
<!-- Sepetimdeki Ürünler Sonu -->
  <!-- Footer Başlangıcı -->
  <footer class="text-center text-white mt-auto" style="background-color: #f1f1f1;">
    <div class="container pt-4">
      <section class="mb-4">
        <!-- Facebook -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
        <!-- Twitter -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          ><i class="fab fa-twitter"></i
        ></a>
        <!-- Instagram -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          ><i class="fab fa-instagram"></i
        ></a>
      </section>
    </div>
    <!-- Grid container -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Tüm Hakları Saklıdır
    </div>
  </footer>
  <!-- Footer Sonu -->
   
  
</body>
</html>