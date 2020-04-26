    <!-- LOCAL LARAVEL CSS OVERRIDE -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/ICSSCSS.css') }}" rel="stylesheet">
    <div class="container fixed-top text-white" id="header">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center" id="title">
          <div class="col-4 pt-1">
           <!--  <a class="text-white" href="#">LINK</a>   -->  <!-- WAS class="text-muted" -->
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo" href="/">My Music Centre</a>  <!-- WAS class="text-dark" -->
          </div>


          <div class="col-4 d-flex justify-content-end align-items-center">


            <!-- SIGN UP/LOGIN BUTTON -->
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                      <!-- Authentication Links -->
                      @if (Auth::guest())
                          <li><a href="{{ route('login') }}">Login</a></li>
                          <li><a href="{{ route('register') }}">Register</a></li>
                      @else
                          <li class="dropdown">
                              <a href="#" class="text-white text-medium" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                              </ul>
                          </li>
                      @endif
                  </ul>
                  <script src="{{ asset('js/app.js') }}"></script>
            <!-- END OF SIGN UP/LOGIN BUTTON -->

          </div>
        </div>
      </header>


      <svg height="1" width="100%">
        <line x1="0" y1="0" x2="5000" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" />
        Sorry, your browser does not support inline SVG.
      </svg>


      <!-- TOP NAVBAR -->
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-small text-white" href="/">Home</a>
          <a class="p-2 text-small text-white" href="/about">About</a>   <!-- WAS class="text-muted" -->
          <a class="p-2 text-small text-white" href="/reports/report">Reports</a>

          <!-- FOR TESTING PURPOSES ONLY -->
          <a class="p-2 text-small text-white" href="/payment">Payment Info</a>
          <a class="p-2 text-small text-white" href="/scheduling/calendar">Schedule</a>
          <!-- END OF TESTING -->

          <!-- ADD MORE LINK HERE LIKE ABOVE -->
        </nav>
      </div>
      <!-- END OF TOP NAVBAR -->

    </div>