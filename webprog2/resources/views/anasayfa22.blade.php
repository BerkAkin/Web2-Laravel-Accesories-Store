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
        
    <title>Elephone</title>
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
                    <a class="nav-link active" aria-current="page" href="/"><i class="fa fa-house"></i> Anasayfa</a>
                  </li>
                  <li class="nav-item me-1">
                    <a class="nav-link" href="hesap"><i class="fa fa-user"></i> Elephone Hesap</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    </div>
<!-- Navbar Sonu -->




<!-- Slider Başlangıcı -->
    <div class="container mt-5" style="position: relative; z-index: 0;" > 
      <div  id="slider" class="carousel slide carousel-fade"  data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                  <img class="w-75" src="assets/pictures/banner2.jpg">
                </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <img class="w-75" src="assets/pictures/banner3.jpg" alt="">
              </div>
              </div>
        </div>
        <a href="#slider" class="carousel-control-prev" style="filter: invert(100%);" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
    
        <a href="#slider" class="carousel-control-next" style="filter: invert(100%);" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
<!-- Slider Sonu -->



<hr class="border-1 border border-dark-50"> 



<!-- Öne Çıkanlar Başlangıcı -->
    <div class="container mt-5 text-center">
      <h5 class="display-5 mt-1 mb-2 text-center">Tüm Ürünler</h5>
    </div>
    <div class=" container my-2">
      <div class="my-5 py-2 d-flex flex-wrap justify-content-around text-center text-break">
        @foreach ($uruns as $don)
        <div class="col-4 text-center text-break my-5">
          <img style="width: 150px; height: 150px;" src="/resources/pictures/Xiaomi/Xiaomi_Kulaklık1.jpg" alt="">
            <p>{{$don['urunbilgisi']}}</p>
            <p>{{$don['urunfiyat']}}</p>
            <p>Stok Sayısı:{{$don['urunadet']}}</p>
            <button class="btn btn-outline-dark">Sepete Ekle</button>
          </div>
        @endforeach
    </div>
    </div>
<!-- Öne Çıkanlar Sonu -->



<hr class="border-1 border border-dark-50"> 



<!-- Hakkımızda Başlangıcı -->
<div class="col-12 mt-5 pt-5">
  <div class="container display-5 text-center">Hakkımızda</div>
  <div class="container text-center d-flex align-content-center">
<div class="col-12 mt-5 mb-5"> Kocaeli merkezli çalışan iki arkadaşın kurduğu ufak çaplı bir firmayız. Teknolojik cihazlarınızın sizler 
  için ne kadar kıymetli olduğunun farkındayız ve onlara hakettikleri gibi davranılmaları için uğraşıyoruz. Websitemiz üzerindeki 
  ürünler tamamiyle resmi ürün olup bu ürünleri mağazamız aracılığı ile de temin edebilirsiniz. </div>
  </div>
</div>
<!-- Hakkımızda Sonu -->




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