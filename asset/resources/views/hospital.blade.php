<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css\style.css') }}" />
    <script src="main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rumah Sakit</title>
  </head>
  <body>
    <header>
      <div class="nav-container">
        <nav>
          <a href="/"><div class="logo"></div></a>
          <ul class="nav__links">
            <li><a href="/">Home</a></li>
            <li><a href="article.html">Artikel</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <a href="/login" class="cta"><button class="login">Login</button></a>
        </nav>
      </div>
    </header>
    <div class="jumbotron-hospital">
      <div class="logo-medca-hospital"></div>
      <div class="search-box">
        <input type="text" placeholder="Cari Rumah Sakit/ Daerah/Klinik" />
        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
      </div>
      <h1 class="judul">Rumah Sakit Panti Rapih Yogyakarta</h1>
      <p class="deskripsi">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas
        eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus
        ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
      </p>

      <div class="detail-button">
        <a href="/info-rs"><input type="button" value="Detail" /></a>
      </div>

      <div class="content-hospital">
        <h5 class="rekomendasi-RS">Rumah Sakit Rekomendasi</h5>
        <h3 class="judul-rekomendasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</h3>
        <ul class="waktu">
          <li>1 jam yang lalu</li>
          <li><a href="" class="more">Selengkapnya</a></li>
        </ul>

        <h3 class="judul-rekomendasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</h3>
        <ul class="waktu">
          <li>1 jam yang lalu</li>
          <li><a href="" class="more">Selengkapnya</a></li>
        </ul>

        <h3 class="judul-rekomendasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</h3>
        <ul class="waktu">
          <li>1 jam yang lalu</li>
          <li><a href="" class="more">Selengkapnya</a></li>
        </ul>
      </div>
    </div>
    <div class="footer"><img src="/svg/footer.svg" alt="" /></div>
  </body>
</html>
