<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/responsive_style.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/b70bdea85f.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
  </head>
  <body>
    <!--Content-->
    @yield('content')
    <!--Content-->

    
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted mt-4">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h6 class="text-uppercase fw-bold mb-4 mt-4">
              <i class="fas fa-gem me-3"></i>LPPM ULM
            </h6>
            <h7>
              Lembaga unggul, terpercaya, dan mandiri dalam penelitian menuju universitas berbasis riset dan dalam pengabdian kepada masyarakat menjadi agen pembangunan ekonomi dengan unggulan lingkungan lahan basah
            </h7>
          </div>

          <div class="col-md-3 mx-auto">
            <h6 class="text-uppercase fw-bold mb-4 mt-4">
              Useful Links
            </h6>
            <h7>
              <a class="text-muted" href="http://lppm.ulm.ac.id/id/" style="text-decoration: none;">Website LPPM</a>
            </h7>
          </div>

          <div class="col-md-4">
            <h6 class="text-uppercase fw-bold mb-4 mt-4">
              Contact
            </h6>
            <h7><i class="fas fa-home me-3"></i>Jl. Brigjend Hasan Basri, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123 <br><br>
            <i class="fas fa-envelope me-3"></i>lppm@ulm.ac.id<br><br>
            <i class="fas fa-phone me-3 mb-4"></i>(0511) 3305240</h7>
          </div>

        </div>
      </div>
    </footer>
    <!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>