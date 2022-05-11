

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/fontawesome-free-6.1.1-web/css/all.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/fontawesome-free-6.1.1-web/css/fontawesome.css')}}">
        <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{url('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
           
        <title>Anasayfa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <!-- ScrollBar görüntüsü için ayar başlangıcı-->
        <style>
          /* width */
          ::-webkit-scrollbar {
            width:10px;
            height: 10px;
          }
          
          /* Track */
          ::-webkit-scrollbar-track {
            background: #e9e9e9; 
            border-radius: 10px;
          }
           
          /* Handle */
          ::-webkit-scrollbar-thumb {
            background: #22262A; 
            border-radius: 10px;
          }
          
          /* Handle on hover */
          ::-webkit-scrollbar-thumb:hover {
            background: rgb(22, 22, 22); 
          }
          </style>

      <!-- ScrollBar görüntüsü için ayar sonu-->
    </head>
    <body class="d-flex flex-column min-vh-100">

        <div class="bg-image" style="position: relative; z-index: 1; height: 30vh; filter: grayscale(85%);  background-image: url(assets/pictures/banner.jpg)">
           
             <!-- Navbar Başlangıcı -->
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
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item me-5  my-auto">
                        <a class="nav-link active" aria-current="page" href="/"><i class="fa fa-house"></i> Anasayfa</a>
                      </li>
                      

                        @if (Route::has('login'))
                
                        @auth
                        <li class="nav-link active mx-5 my-auto"><?php
                          $user = Auth::user();
                          echo"Hoş geldiniz! ". $user->name; 
                          ?>
                          <div><?php echo $user->email; ?></div>
                        </li>


                        <li class="nav-item me-5  my-auto">
                          <a class="nav-link " aria-current="page" href="sepet"><i class="fa fa-basket-shopping"></i> Sepetim</a>
                        </li> 
                        <li class="nav-item  my-auto">
                              <a class="nav-link" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                  {{ __('Çıkış Yap') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                              
                      </li>
                      
                        <span class="ai-list"></span>
                      @else
                        <li class="nav-item me-1">
                            <a href="{{ route('login') }}" class="nav-link"><i class="fa-solid fa-arrow-right-to-bracket"></i> Elephone Hesabıma Giriş Yap</a>
                        </li>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link"><i class="fa fa-user"></i> Elephone Hesabı Oluştur</a>
                            @endif
                        @endauth
                @endif
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
                  <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                      <img class="w-50" src="assets/pictures/banner4.jpg" alt="">
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
          <h5 class="display-5 mt-1 mb-2 text-center">Mevcut Ürünler</h5>
        </div>
        <div style="height: 600px" class="overflow-auto container my-2">
          <div class="my-3 py-2 d-flex flex-wrap justify-content-around text-center text-break">
            @if(isset($uruns)) 
            @foreach ($uruns as $don)
        <div class="col-4 text-center text-break my-5">
          <form action="{{url('sepete-ekle')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
              <textarea readonly hidden name="urununidsi">{{$don['id']}}</textarea>
              <img id="urununfotosu" src="{{asset('/')}}{{$don->urunfoto}}" width="150px" height="150px" alt="ürünfotoğrafı">
              <div>
                <textarea class="mt-2 text-center" rows="3" cols="20" style="resize: none; overflow:auto;  outline: none;" readonly name="urununadi">{{$don['urunbilgisi']}}</textarea>
              </div>
              <div class="d-flex justify-content-center">
                <textarea class=" text-center" class="ms-4" rows="1" cols="3" style="resize: none;  outline: none;" readonly name="urununfiyati">{{$don['urunfiyat']}}</textarea>
                <span class="pt-1">TL</span>
              </div>
              <button class="btn btn-outline-dark my-2" type="submit">Sepete Ekle</button>
            </div>
            <textarea hidden name="qty">1</textarea>
              
          </form>
          </div>
        @endforeach
        @endif
        </div>
        </div>
    <!-- Öne Çıkanlar Sonu -->
    
    
    
    <hr class="border-1 border border-dark-50"> 
    
    
    
    <!-- Hakkımızda Başlangıcı -->
    <div class="col-12 mt-1 pt-5">
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
      </div>
      
    </footer>
    <!-- Footer Sonu -->
     
    
        </div>
    </body>
</html>
