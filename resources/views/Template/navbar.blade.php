<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/navbarStyle.css') }}" />
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        <div class="navbar-brand">
            <a href="/"><img src="img/Coolyeah.png"></a>
        </div>

        <div class="navbar-content">
            <div class="navbar-menu-container">
                <div class="dropdown">
                    <a href="#" class="navbar-menu sign">Courses</a>
                    <div class="dropdown-menu">
                        <a href="/#">Course a</a>
                        <a href="/#">Course b</a>
                        <a href="/#">Course c</a>
                    </div>
                </div>
            </div>
            <form class="searchbox" role="search" method="GET" action="/search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn-outline-success" type="submit"><img src="img/search.png"></button>
            </form>
            <div class="navbar-menu-container">
                @if (Auth::check() == false)
                    <a id="Login" href="/login" class="navbar-menu sign">Login</a>
                    <a id="SignUp" href="/register" class="navbar-menu sign">Sign Up</a>
                @else
                    <a id="Logout" href="/logout">logout</a>
                @endif
            </div>
        </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
