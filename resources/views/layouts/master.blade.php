<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EduFun</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
</head>
<body> 
  <script src="{{asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js')}}"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand col-3" href={{ route('home.view') }}>
            <img src="{{ asset('image/Logo.png') }}" alt="" style="width: 50px; height: 50px">
          </a>
          <div class="col-9 d-flex justify-content-end" id="navbarNavDropdown">
            {{-- gap maks sampai 5 --}}
            <ul class="navbar-nav gap-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href={{ route('home.view') }}>Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href={{ route('category.view', 1) }}>Interactive Multimedia</a></li>
                  <li><a class="dropdown-item" href={{ route('category.view', 2) }}>Software Engineering</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{ route('writer.view') }}>Writers</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{ route('aboutUs.view') }}>About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{ route('popular.view') }}>Popular</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    @yield('content')

    <div class="d-flex justify-content-center py-5" style="background-color: rgb(2, 2, 62)">
        <div class="text-white text-center">
            EduFun 2024
        </div>
    </div>
</body>
</html>