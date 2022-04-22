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
        
        <title>Admin</title>

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
                    <a class="nav-link" aria-current="page" href="admin"><i class="fa fa-file-pen"></i> Admin Paneli</a>
                  </li>
                  <li class="nav-item me-1">
                    <a class="nav-link " href="cikis"><i class="fa fa-right-from-bracket"></i> Çıkış Yap</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
</div>
<!-- Navbar Sonu -->


<!-- Kayıtları görüntülemek için tablo başlangıcı-->
<div class="container my-2 d-flex justify-content-evenly">
    <div class="rounded rounded-3 col-8 my-5 ">
        <h1 class="display-6 my-2"> Ürünler</h1>
        <hr class="border border-1 border-dark">

        <div class="col-12 d-flex">
          <div class="col-6">
            <input class=" my-3 form-control" type="text" id="urunAra" onkeyup="urunArama()" placeholder="Ürün Ara">
          </div>
          <div class="col-6 d-flex justify-content-end">
            <div>
              <button class="my-3 btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal">Ürün Ekle</button> 
            </div>
          </div>
        </div>

        <div class="table-responsive-md overflow-auto rounded rounded-3">
            <table id="urunTablosu" class="table table-light table-striped table-hover" >
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Adı</th>
                    <th>Adeti</th>
                    <th>Fiyatı</th>
                    <th ></th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($uruns as $don)
                <tr>
                   <td>{{$don['id']}}</td>
                    <td>{{$don['urunbilgisi']}}</td>
                    <td>{{$don['urunadet']}}</td>
                    <td>{{$don['urunfiyat']}}</td>
                    <td class="d-flex justify-content-start">
                        <a class="btn btn-dark" 
                        style="text-decoration: none; color: rgb(255, 255, 255);" 
                        href={{"sil/".$don['id']}}>Ürünü Sil</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
<!-- Kayıtları görüntülemek için tablo sonu-->

<!--Ürün Eklemek İçin Modal Başlangıcı-->

<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">


      <div class="modal-header">
        <h4 class="display-6 modal-title">Ürün Ekle</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>


      <div class="modal-body">
        <form action="urunukaydet" method="post">
          @csrf
          <div class="container d-flex justify-content-center">
            <div class="col-6">
              <label class="mt-3" for="foto">Ürün Fotoğrafı</label>
              <div class=""><input class="form-control" name="urunEkleFoto" type="file" required></div>
              
              <label class="mt-3" for="urunEkleFiyat">Ürün Fiyatı</label>
              <div class=""><input class="form-control" name="urunEkleFiyat"  type="text"></div>
              <label class="mt-2" for="urunEkleAdet">Ürün Adeti</label>
              <div><input class="form-control" name="urunEkleAdet" type="text"></div>
              <label class="mt-2" for="urunEkleAciklama">Ürün Açıklaması</label>
              <div><input class="form-control" name="urunEkleAciklama" type="text"></div>
            </div>
          </div>
          <div class="modal-footer mt-4">
            <button type="button" class="btn btn-outline-danger"  data-bs-dismiss="modal">İptal</button>
            <button type="submit" class="btn btn-outline-success">Ekle</button>
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      

    </div>
  </div>
</div>
<!--Ürün Eklemek İçin Modal Sonu-->




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
   

<!--Ürün ve kullanıcı aramak için fonksiyonların başlangıcı-->
<script>
    function urunArama() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("urunAra");
      filter = input.value.toUpperCase();
      table = document.getElementById("urunTablosu");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }

    function kullaniciArama() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("kullaniciAra");
      filter = input.value.toUpperCase();
      table = document.getElementById("kullaniciTablosu");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
</script>
<!--Ürün ve kullanıcı aramak için fonksiyonların sonu-->


</body>
</html>