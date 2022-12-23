<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css\style.css') }}" />
    <script src="main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pilih Jadwal</title>
  </head>
  <style>
    body {
      height: 100vh;
      width: 100%;
      background: linear-gradient(180deg, #ffb9b9 0%, #f5dbdb 100%);
    }
  </style>
  <body>
    <header>
      <div class="nav-container">
        <nav>
          <a href="/"><div class="logo"></div></a>
          <ul class="nav__links">
            <li><a href="index.html">Home</a></li>
            <li><a href="article.html">Artikel</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <a href="login.html" class="cta"><button class="login">Login</button></a>
        </nav>
      </div>
    </header>
    <div class="buatjanji">
      <div class="logo-medca-dokter"></div>
      <h2 class="header-buatjanji">Pilih Jadwal</h2>
      <h4 class="pilih-kategori">Pilih Kategori Dokter</h4>
      <div class="kateogri-dokter">
        <select name="kategori_dokter" id="kategori_dokter">
          <option selected disabled>Pilih opsi kategori</option>
          <option value="spesial jantung">spesialis jantung</option>
          <option value="spesialis paru-paru">spesialis paru-paru</option>
          <option value="dokter anak">dokter anak</option>
          <option value="spesialis">spesialis udara</option>
          <option value="spesialis">spesialis api</option>
          <option value="spesialis">spesialis angin</Jption>
        </select>
      </div>
    </div>
    <div class="pilih-dokter">
      <div class="dokter-1">
        <img class="foto-dokter" src="/svg/foto-dokter.png" alt="" />
        <div class="wrap-dokter">
          <h2 class="nama-dokter">Dr. Daniel</h2>
          <h6 class="spesialisasi">Spesialis Jantung</h6>
          <h6 class="infoRs">Rs. Sakit Panti Rapih Yogyakarta </h6>
        </div>
        <div class="wrap-rating">
          <h3 class="rating-text">Rating Dokter</h2>
          <h5 style="text-align:center">9.9</h5>
          <div class="button-ajukan">
            <button style="border-radius:10px"class="button-ajukan">Ajukan</button>
          </div>
        </div>
        
      </div>
      
    </div>
  </body>
</html>
