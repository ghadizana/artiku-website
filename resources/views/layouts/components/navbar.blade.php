 <!-- Navbar -->
 <nav class="navbar fixed-top navbar-expand-lg bg-primmary-bg-subtle shadow p-3 mb-5 bg-body-secondary rounded">
     <div class="container">
         <a class="navbar-brand" href="#">Arti<span class="text-danger">Ku</span></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
             aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse bg-primmary-bg-subtle" id="navbarTogglerDemo02">
             <ul class="me-auto justify-content-end navbar-nav collapse navbar-collapse " id="navbarTogglerDemo02">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active"  href="{{ url('/about') }}">About Me</a>
                 </li>
                 @guest
                     <li class="nav-item">
                         <a class="nav-link active" href="{{ route('login') }}" type="button">Login</a>
                     </li>
                     <li class="nav-item">
                         <a class="btn btn-outline-danger shadow rounded-pill" href="{{ route('register') }}"
                             type="button">
                             Get Started
                         </a>
                     </li>
                 @else
                     <a href="{{ url('/articles') }}" class="nav-link active">My Blog</a>
                     <a href="{{ route('logout') }}" class="nav-link active "
                         onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Log
                         Out</a>
                 @endguest
                 <form action="{{ route('logout') }}" id="logout-form" method="POST">
                     @csrf
                 </form>
             </ul>
             <form action="#" method="GET" class="d-flex" role="search">
                 <input class="form-control me-1" id="form-control" type="text" name="search" placeholder="Search"
                     aria-label="Search" />
                 <button class="btn btn-outline-success" type="submit">Search</button>
             </form>
         </div>
     </div>
 </nav>
