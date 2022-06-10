<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/style_form.css">
    <link rel="stylesheet" type="text/css" href="/assets/style_cek.css">
    <link rel="stylesheet" type="text/css" href="/assets/style_proses.css">
    <link rel="stylesheet" type="text/css" href="/assets/style_print.css">
    <link rel="stylesheet" type="text/css" href="/assets/responsive_form.css">
    <link rel="stylesheet" type="text/css" href="/assets/responsive_cek.css">
    <link rel="stylesheet" type="text/css" href="/assets/responsive_proses.css">

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
    @auth
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <span class="navbar-brand mb-0 h1">LPPM ULM</span>
            <div class="navbar-nav ml-auto">
                <a class="nav-item btn tbl_beranda nav-res" href="/beranda_admin">BERANDA</a>
                <form action="{{ url('/logout') }}" method="POST">
                    @csrf
                    <button class="buttonlogout nav-res" type="submit">LOGOUT</button>
                </form>
                
            </div>
            <div class="hamberger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>
    <!--Navbar-->

    <!--Content-->
    @yield('content')
    <!--Content-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
          const hamberger = document.querySelector(".hamberger");
          const navMenu = document.querySelector(".navbar-nav");
  
          hamberger.addEventListener("click", () => {
              hamberger.classList.toggle("active");
              navMenu.classList.toggle("active");
          })
  
          document.querySelectorAll(".nav-res").forEach(n => n.addEventListener("click", () => {
              hamberger.classList.remove("active");
              navMenu.classList.remove("active");
          }))
    </script>
    @endauth
</body>
</html>