<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Maba</title>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Maba</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">



            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"><a href='/admin/products' class="nav-link">Products</a></li>
                <li class="nav-item"><a href='/about' class="nav-link">About</a></li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <input id="search" class="form-control mr-sm-2 ml-15" type="text" placeholder="Search" />
                <a href="/cart" class="p-cart">
                    <span class="material-icons md-48 " style="color : black">shopping_cart</span>

                    @guest
                        <span class="badge badge-light bg-secondary">0</span>
                        @else
                        <span class="badge badge-light bg-secondary">{{ Auth::user()->products()->sum('count') }}</span>
                    @endguest

                </a>


                @guest


                <a href="/register" class="btn btn-secondary my-2 my-sm-0 ml-4">Sign up</a>
                <a href="/login" class="btn btn-secondary my-2 my-sm-0 ml-2">Login</a>

                @else
                <a href="/profile" class="btn btn-secondary my-2 my-sm-0 ml-4">saeed</a>

                <a href="/profile" class="btn btn-secondary my-2 my-sm-0 ml-4">Profile</a>
                <a href="/logout" class="btn btn-secondary my-2 my-sm-0 ml-2">LogOut</a>

                @endguest

            </div>
        </div>
    </nav>

    <div class="container" style="margin-top:100px">


            @yield('content')
                <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <script>
                $("#search").keyup(function(){
                    var name = $("#search").val();
                    var token = $("#token").val();
                  $.post("/search" , { name : name , _token : token}).done(function(data){
                     $("#products").replaceWith(data);
                  });
                });
            </script>


            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">© 2017-2019 Maba</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Privacy</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Support</a></li>
                </ul>
            </footer>
        </div>
        </body>

        </html>

