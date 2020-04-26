    <!-- LOCAL LARAVEL CSS OVERRIDE -->
    <link href="{{ URL::asset('css/ICSSCSS.css') }}" rel="stylesheet">

    <div class="container fixed-top text-white" id="header">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center" id="title">
          <div class="col-4 pt-1">
           <!--  <a class="text-white" href="#">LINK</a>   -->  <!-- WAS class="text-muted" -->
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-white" href="/">My music Centre</a>  <!-- WAS class="text-dark" -->
          </div>


          <div class="col-4 d-flex justify-content-end align-items-center">
            

            <!-- MAGNIFYING GLASS (USELESS?) -->
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <!-- END OF MAGNIFYING GLASS -->


            <!-- SIGN UP/LOGIN BUTTON -->
            <a class="btn btn-sm btn-outline-secondary text-white" href="login">Sign up/Login</a>
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
          <a class="p-2 text-white" href="/about">About</a>   <!-- WAS class="text-muted" -->
          <a class="p-2 text-white" href="/contact">Contact</a>
          <a class="p-2 text-white" href="/reports/report">Reports</a>

          <!-- FOR TESTING PURPOSES ONLY -->
          <a class="p-2 text-white" href="/scheduling/calendar">Schedule</a>
          <a class="p-2 text-white" href="/payment">Payment Info</a>
          <!-- END OF TESTING -->

          <!-- ADD MORE LINK HERE LIKE ABOVE -->
        </nav>
      </div>
      <!-- END OF TOP NAVBAR -->

    </div>