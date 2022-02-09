<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>EA-Blog</title>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/app.js"></script>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/font-awesome.min.css" rel="stylesheet" />
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{route('welcome.index')}}">EA-Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{Request::routeIs('welcome.index') ? 'active' : ''}}" href="{{route('welcome.index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::routeIs('about.index') ? 'active' : ''}}" href="{{route('about.index')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::routeIs('contact.index') ? 'active' : ''}}" href="{{route('contact.index')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::routeIs('post.index') ? 'active' : ''}}" href="{{route('post.index')}}">Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::routeIs('messages.index') ? 'active' : ''}}" href="{{route('messages.index')}}"><i class="fa fa-envelope-o"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::routeIs('login') ? 'active' : ''}}" href="{{route('login')}}">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::routeIs('register') ? 'active' : ''}}" href="{{route('register')}}">register</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
       @yield('header')
        <!-- Page content-->
        @yield('content')
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
