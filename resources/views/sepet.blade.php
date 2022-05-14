@include('sweetalert::alert')
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
                  <li class="nav-item me-5  my-auto">
                    <a class="nav-link" aria-current="page" href="/"><i class="fa fa-house"></i> Anasayfa</a>
                  </li>
                  <li class="nav-link active mx-5 my-auto"><?php
                    $user = Auth::user();
                    echo"Hoş geldiniz! ". $user->name; 
                    ?>
                    <div><?php echo $user->email; ?></div>
                  </li>
                  <li class="nav-item me-5 my-auto">
                    <a class="nav-link active" aria-current="page" href="sepet"><i class="fa fa-basket-shopping"></i> Sepetim</a>
                  </li>
                  <li class="nav-item my-auto">
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Çıkış Yap') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </li>
                </ul>
              </div>
            </div>
          </nav>
          
        </div>
  </div>
<!-- Navbar Sonu -->





<!-- Sepetimdeki Ürünler Başlangıcı -->
<div class="container mt-5 ">
  <h5 class="display-5 mt-1 mb-2 text-center">Sepetimdeki Ürünler</h5>
  <hr class="border border-1 border-dark">
</div>
<div class="container my-1 ">
  <?php foreach(Cart::content() as $row) :?>
  <div class="s mt-2 d-flex justify-content-start"> 
    <div class="col-6 text-start mt-1">
      <p id="sepetUrunBilgisi"><td><?php echo $row->name; ?></td></p>
    </div>
    <div class=" col-2 text-center mt-1">
      <p id="sepetUrunFiyati"><?php echo $row->price; ?> TL</p>
    </div>
    <div class="col-4 d-flex justify-content-center">
      <a class="btn btn-dark " 
      style="text-decoration: none; color: rgb(255, 255, 255);" 
      href={{url('sepettensil').'/'.$row->rowId }}>Sepetten Kaldır</a>
    </div>
  </div>
  <?php endforeach;?>
</div>
<div class="container">
  <div class="col-12 text-end my-5">
    <?php echo"Kargo ücretleri ve KDV dahil ara toplam: ". Cart::subtotal(); ?><span> TL</span>
    <a  data-bs-toggle="modal" data-bs-target="#siparisiver" class="btn btn-dark ms-2" 
    style="text-decoration: none; color: rgb(255, 255, 255);">Sipariş Ver</a>
  </div>
  
</div>

<!-- Sepetimdeki Ürünler Sonu -->


<!--Sipariş Vermek İçin Modal Başlangıcı-->

<div class="modal fade" id="siparisiver">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="display-6 modal-title">Siparişi Tamamla</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form method="get" action="{{ url("/siparisiver") }}">
          @csrf
          <div class="my-2 text-success container d-flex justify-content-center text-center">
            <div class="col-12">
              <?php echo"Kargo ücretleri ve KDV dahil ara toplam: ". Cart::subtotal();?><span> TL</span>
          </div>
          </div>
          <div class="container d-flex justify-content-center">
            <div class="col-6">
              <label class="mt-3" for="siparisAdSoyad">Ad-Soyad</label>
              <div class=""><input class="form-control" name="siparisAdSoyad"required></div>
              <label class="mt-3" for="siparisTelNo">Telefon Numarası</label>
              <div class=""><input class="form-control" name="siparisTelNo"required></div>
              <label class="mt-3" for="siparisposta">E-posta</label>
              <div class=""><input class="form-control" type="email" name="siparisposta"required></div>
              <label class="mt-3" for="siparisAdres">Adres Bilgisi</label>
              <div class=""><textarea cols="10" rows="5"  style="resize:none" class="form-control" name="siparisAdres" type="text"></textarea></div>
            </div>
          </div>
          <div class="modal-footer mt-4">
            <button type="button" class="btn btn-outline-danger"  data-bs-dismiss="modal">İptal</button>
           
              @foreach (Cart::content() as $sepet )
              <input hidden name="sepeticerigi[]" value="{{ $sepet->name }}">
              @endforeach

            <button type="submit" class="btn btn-outline-success">Siparişi Tamamla</button>
            
          </div>
        </form>
      </div>
      

    </div>
  </div>
</div>
<!--Sipariş Vermek İçin Modal Sonu-->














  <!-- Footer Başlangıcı -->
  <footer class="text-center text-white mt-auto" style="background-color: #f1f1f1;">
    <div class="container pt-4">
      <section class="mb-4">
        <!-- Facebook -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="https://www.facebook.com/" target="_blank"
          role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
        <!-- Twitter -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="https://twitter.com/?lang=tr" target="_blank"
          role="button"
          ><i class="fab fa-twitter"></i
        ></a>
        <!-- Instagram -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="https://www.instagram.com/?hl=tr" target="_blank"
          role="button"
          ><i class="fab fa-instagram"></i
        ></a>
      </section>
    </div>
    <!-- Grid container -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Tüm Hakları Saklıdır
        <div>
          Şikayet, görüş, istek ve önerileriniz için <p><a href="mailto:dummymailadiresi@hotmail.com">BİZE ULAŞIN</a></p>
        </div>
  </footer>
  <!-- Footer Sonu -->
   
  
</body>
</html>