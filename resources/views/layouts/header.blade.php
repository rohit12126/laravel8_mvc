 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top " style="    background: #3d4d6a !important;">
     <div class="container d-flex align-items-center">

         <h1 class="logo mr-auto"><a href="{{ url('/') }}">Chapter 247</a></h1>
         <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

         <nav class="nav-menu d-none d-lg-block">
             <ul>
                 <li class="active"><a href="{{ url('/') }}">Home</a></li>
                 <li><a href="{{ route('user.list') }}">User List</a></li>
                 @guest
                 @auth
                 <li><a href="{{ url('/home') }}">Home</a></li>
                 @else
                 <li><a href="{{ route('login') }}">Login</a></li>

                 @if (Route::has('register'))
                 <li><a href="{{ route('register') }}">Register</a></li>
                 @endif
                 @endif
                 @else

                 @if (session('status'))
                 <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                 </div>
                 @endif

                 <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a></li>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                 @endguest

             </ul>
         </nav><!-- .nav-menu -->

         <a href="#about" class="get-started-btn scrollto">Get Started</a>

     </div>
 </header><!-- End Header -->
