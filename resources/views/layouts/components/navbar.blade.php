 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg bg-primmary-bg-subtle shadow p-3 mb-5 bg-body-tertiary rounded">
     <div class="container">
         <a class="navbar-brand" href="#">Arti<span class="text-danger">Ku</span></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
             aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
             <ul class="me-auto justify-content-end navbar-nav collapse navbar-collapse " id="navbarTogglerDemo03">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active" href="#">About Me</a>
                 </li>
                 {{-- @guest --}}
                     <li class="nav-item">
                         <a class="nav-link active" href="" type="button" data-bs-toggle="modal"
                             data-bs-target="#loginModal">Login</a>
                     </li>
                     <li class="nav-item">
                         <button class="btn btn-primary" href="" type="button"
                             data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-radius: 24px">
                             Get Started
                         </button>
                     </li>
                 {{-- @endguest --}}
                 {{-- <form action="" id="logout-form" method="POST">
                     @csrf
                 </form> --}}
             </ul>
             <form class="d-flex" role="search">
                 <input class="form-control me-1" id="form-control" type="search" placeholder="Search"
                     aria-label="Search" />
                 <button class="btn btn-outline-dark" type="submit">Search</button>
             </form>
         </div>
     </div>
 </nav>

 <!-- Sign Up Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="container h-100">
                 <div class="row justify-content-center align-items-center h-100">
                     <div class="col-lg-12 col-xl-11">
                         <div class="card text-black" style="border-style: none;">
                             <div class="card-body p-md-3">
                                 <div class="row justify-content-center">
                                     <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                         <button type="button" class="btn-close" data-bs-dismiss="modal"
                                             aria-label="Close"></button>
                                         <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"
                                             id="exampleModalLabel">
                                             Sign Up</p>

                                         <form action="" class="mx-1 mx-md-4" method="POST">
                                             @csrf
                                             <div class="d-flex flex-row align-items-center mb-4">
                                                 <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                 <div class="form-outline flex-fill mb-0">
                                                     <input type="text" name="name" id="form3Example1c"
                                                         class="form-control" value="{{ old('name') }}" />
                                                     <label class="form-label" for="form3Example1c">Your
                                                         Name</label>
                                                     @error('name')
                                                         <span class="text-danger">
                                                             {{ $message }}
                                                         </span>
                                                     @enderror
                                                 </div>
                                             </div>

                                             <div class="d-flex flex-row align-items-center mb-4">
                                                 <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                 <div class="form-outline flex-fill mb-0">
                                                     <input type="email" name="email" id="form3Example3c"
                                                         class="form-control" value="{{ old('email') }}" />
                                                     <label class="form-label" for="form3Example3c">Your
                                                         Email</label>
                                                     @error('email')
                                                         <span class="text-danger">
                                                             {{ $message }}
                                                         </span>
                                                     @enderror
                                                 </div>
                                             </div>

                                             <div class="d-flex flex-row align-items-center mb-4">
                                                 <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                 <div class="form-outline flex-fill mb-0">
                                                     <input type="password" name="password" id="form3Example4c"
                                                         class="form-control" value="{{ old('password') }}" />
                                                     <label class="form-label" for="form3Example4c">Password</label>
                                                     @error('password')
                                                         <span class="text-danger">
                                                             {{ $message }}
                                                         </span>
                                                     @enderror
                                                 </div>
                                             </div>

                                             <div class="d-flex flex-row align-items-center mb-4">
                                                 <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                 <div class="form-outline flex-fill mb-0">
                                                     <input type="password" id="form3Example4cd" class="form-control"
                                                         name="password_confirmation" />
                                                     <label class="form-label" for="form3Example4cd">Repeat your
                                                         password</label>
                                                 </div>
                                             </div>

                                             <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                 <button type="button"
                                                     class="btn btn-primary btn-lg">Register</button>
                                             </div>

                                         </form>

                                     </div>
                                     <div
                                         class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                         <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                             class="img-fluid" alt="Sample image">

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             </section>
         </div>
     </div>
 </div>

 <!-- Login Modal -->
 <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="container h-100">
                 <div class="row justify-content-center align-items-center h-100">
                     <div class="col-lg-12 col-xl-11">
                         <div class="card text-black" style="border-style: none;">
                             <div class="card-body p-md-3">
                                 <div class="row justify-content-center">
                                     <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                         <button type="button" class="btn-close" data-bs-dismiss="modal"
                                             aria-label="Close"></button>
                                         <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"
                                             id="loginModalLabel">
                                             Log In</p>

                                         <form class="mx-1 mx-md-4">

                                             <div class="d-flex flex-row align-items-center mb-4">
                                                 <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                 <div class="form-outline flex-fill mb-0">
                                                     <input type="email" id="form3Example3c"
                                                         class="form-control" />
                                                     <label class="form-label" for="form3Example3c">Your
                                                         Email</label>
                                                 </div>
                                             </div>

                                             <div class="d-flex flex-row align-items-center mb-4">
                                                 <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                 <div class="form-outline flex-fill mb-0">
                                                     <input type="password" id="form3Example4c"
                                                         class="form-control" />
                                                     <label class="form-label" for="form3Example4c">Password</label>
                                                 </div>
                                             </div>

                                             <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                 <button type="button"
                                                     class="btn btn-primary btn-lg">Register</button>
                                             </div>

                                         </form>

                                     </div>
                                     <div
                                         class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                         <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                             class="img-fluid" alt="Sample image">

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             </section>
         </div>
     </div>
 </div>
