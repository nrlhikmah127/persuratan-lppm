<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/style_login.css">
    <link rel="stylesheet" type="text/css" href="/assets/responsive_login.css">

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
            <img src="img/login.png" alt="icon back" class="img">
       
            <div class="login">
                <!-- form login -->
                <form action="{{ url('/login') }}" method="POST" class="login">
                    {{ csrf_field }}
<<<<<<< HEAD
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
=======
>>>>>>> 01191866d5040360bd364fb0c8fd5bb73c441caa
                    <h2 class="title">LPPM SINGLE SIGN ON</h2>
                    <!-- username login -->
                    <h3>Username</h3>
                    <div class="input-field">
                        <input type="text" name="username" @if(Cookie::has('adminuser')) value="{{ Cookie::get('adminuser') }}" @endif
                        id="username" autofocus required value="{{ old('username') }}">
                    </div>
                    <!-- password login -->
                    <h3>Password</h3>
                    <div class="input-field">
                        <input type="password" name="password"  @if(Cookie::has('adminpw')) value="{{ Cookie::get('adminpw') }}" @endif id="password" required>
                    </div>
                    <!-- remember me-->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" @if(Cookie::has('adminuser')) checked @endif name="remember" value="" id="flexCheckDefault">
                        <label>
                            Remember Me
                        </label>
                    </div>
                    <input type="submit" value="login" class="btn solid">
                </form>
               
            </div>
        </div>
    </div>
</body>

</html>
