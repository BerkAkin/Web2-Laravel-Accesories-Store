
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


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
    </head>
<body class="d-flex flex-column min-vh-100">


<!-- Navbar Başlangıcı -->
<div>
    <div class="col-12" >
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <div class="container-fluid" >
              <div class="navbar-brand ms-3 pb-2"></div>
                <div class="navbar-brand ms-3">
                  <h1 class="display-5 pt-1">Elephone Admin</h1>
                  </div> 
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler02" aria-controls="navbarToggler02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarToggler02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-link active mx-5 my-auto"><?php
                    $user = Auth::user();
                    echo"Hoş geldiniz! ". $user->name; 
                    ?>
                    <div><?php echo $user->email; ?></div>
                  </li>
                  <li class="nav-item me-1">
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


<!-- Kayıtları görüntülemek için tablo başlangıcı-->
<div class="mt-5 d-flex justify-content-evenly ">
    <div class="rounded rounded-3 col-8  ">
        <p class="display-6 text-center">Mevcut Ürünler</p>
        <hr class="border border-1 border-dark">

        <div class="col-12 d-flex ">
          <div class="col-6">
            <input class=" my-3 form-control" type="text" id="urunAra" onkeyup="urunArama()" placeholder="Ürün Ara">
          </div>
          <div class="col-6 d-flex justify-content-end">
            <div>
              <button class="mt-3 btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal">Ürün Ekle</button> 
            </div>
          </div>
        </div>

        <div style="height: 300px" class="table-responsive-md overflow-scroll rounded rounded-3">
            <table id="urunTablosu" class="table-bordered table table-light table-striped table-hover" >
                <thead class=" table-dark">
                <tr>
                    <th class="text-center ">ID</th>
                    <th class="text-center ">Fotoğraf</th>
                    <th class="text-start ">Adı</th>
                    <th class="text-center ">Adeti</th>
                    <th class="text-center ">Fiyatı</th>
                    <th class="text-center ">Ürüneri Sil</th>
                </tr>
                </thead>
                <tbody>
                  @if(isset($uruns)) 
                  @foreach ($uruns as $don)
                <tr>
                   <td class="text-center pt-4 "><b>{{$don['id']}}</b></td>
                   <td class="text-center"><img src="{{asset('/')}}{{$don->urunfoto}}" width="60px" height="60px"> </td>
                   <td class="text-start pt-4">{{$don['urunbilgisi']}}</td>
                   <td class="text-center pt-4">{{$don['urunadet']}}</td>
                   <td class="text-center pt-4">{{$don['urunfiyat']}}</td>
                   <td class="text-center pt-3" class="ps-3 text-center" >
                      <a class="btn btn-dark " 
                      style="text-decoration: none; color: rgb(255, 255, 255);" 
                      href={{url('sil').'/'.$don->id }}>Ürünü Sil</a>
                  </td>
                </tr>
                
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    
</div>
<!-- Kayıtları görüntülemek için tablo sonu-->



<!-- Kullanıcı Kayıtları görüntülemek için tablo başlangıcı-->
<div class="my-5 d-flex justify-content-evenly ">
  <div class="rounded rounded-3 col-8  ">
      <p class="display-6 text-center">Mevcut Kullanıcılar</p>
      <hr class="border border-1 border-dark">

      <div class="col-12 d-flex ">
        <div class="col-6">
          <input class=" my-3 form-control" type="text" id="kullaniciAra" onkeyup="kullaniciArama()" placeholder="Kullanıcı Ara">
        </div>
       
      </div>

      <div style="height: 300px" class="table-responsive-md overflow-scroll rounded rounded-3">
          <table id="epostaTablosu" class="table-bordered table table-light table-striped table-hover" >
              <thead class=" table-dark">
              <tr>
                <th class="text-start ">ID</th>
                  <th class="text-start ">Adı</th>
                  <th class="text-center ">E-Posta</th>
                  <th class="text-center ">Admin Mi?</th>
                  <th class="text-center ">Kullanıcı Sil</th>
              </tr>
              </thead>
              <tbody>
                @if(isset($kullanicis)) 
                @foreach ($kullanicis as $don)
              <tr>
                <td class="text-start pt-4">{{$don['id']}}</td>
                 <td class="text-start pt-4">{{$don['name']}}</td>
                 <td class="text-center pt-4">{{$don['email']}}</td>
                 <td class="text-center pt-4">{{$don['is_admin']}}</td>
                 <td class="text-center pt-3" class="ps-3 text-center" >
                    <a class="btn btn-dark " 
                    style="text-decoration: none; color: rgb(255, 255, 255);" 
                    href={{url('kullanicisil').'/'.$don->id }}>Kullanıcıyı Sil</a>
                </td>
              </tr>
              
              @endforeach
              @endif
              </tbody>
          </table>
      </div>
  </div>
  
</div>
<!-- Kullanıcı Kayıtları görüntülemek için tablo sonu-->













<!--Ürün Eklemek İçin Modal Başlangıcı-->

<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">


      <div class="modal-header">
        <h4 class="display-6 modal-title">Ürün Ekle</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>


      <div class="modal-body">
        <form action="{{ url("/urunukaydet") }}" method="POST" enctype="multipart/form-data" >
          @csrf
          <div class="container d-flex justify-content-center">
            <div class="col-6">
              <label class="mt-3" for="foto">Ürün Fotoğrafı</label>
              <div class=""><input class="form-control" name="urunEkleFoto" type="file" accept="image/png, image/jpeg" required></div>
              
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
   
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Tüm Hakları Saklıdır
    </div>
</footer>
<!-- Footer Sonu -->
   

<!--Ürün aramak için fonksiyon başlangıcı-->
<script>
    function urunArama() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("urunAra");
      filter = input.value.toUpperCase();
      table = document.getElementById("urunTablosu");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
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
<!--Ürün aramak için fonksiyon sonu-->

<!--Kullanıcı aramak için fonksiyon başlangıcı-->
<script>
  function kullaniciArama() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("kullaniciAra");
    filter = input.value.toUpperCase();
    table = document.getElementById("epostaTablosu");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
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
<!--Kullanıcı aramak için fonksiyon sonu-->
</body>
</html>