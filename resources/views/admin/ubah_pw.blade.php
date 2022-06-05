<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/style_ubahpw.css">
    <link rel="stylesheet" type="text/css" href="/assets/responsive_ubahpw.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/b70bdea85f.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <div class="container">
    @if(session()->has('success'))
            <div class="alert alert-success alert-dismissable fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="forms-container">
            <div class="login">
                <!-- form login -->
                <form action="{{ url('/ganti_password') }}" method="POST" class="login">
                    @csrf
                    <h2 class="title">GANTI PASSWORD</h2>
                   <!-- password login -->
                   <h3>Password Lama</h3>
                    <div class="input-field">
                        <input type="password" name="password_lama" id="password" required>
                    </div>

                    <!-- password login -->
                    <h3>Password Baru</h3>
                    <div class="input-field">
                        <input type="password" name="password_baru" id="password" required>
                    </div>
                    <input type="submit" value="Simpan" class="btn solid">
                    <a href="{{ url('/beranda_admin') }}" class="text-white fw-bold text-decoration-none">Kembali</a>
                </form>
               
            </div>
        </div>
    </div>
</body>

</html>