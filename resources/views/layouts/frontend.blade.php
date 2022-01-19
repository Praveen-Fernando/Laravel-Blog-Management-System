<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Blogs</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="{{route('welcome')}}">Blogapp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Log In</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Register</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-3 mb-lg-1"
                                   src="{{asset('img/blogimg.jpg')}}" alt="..."/></div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">Welcome To Blog App</h1>
            <p>Write Blogs and be a blogger.Join with us now.</p>
            <a class="btn btn-primary" href="{{route('register')}}">Register Now</a>
        </div>
    </div>
</div>
@yield('content')

<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
