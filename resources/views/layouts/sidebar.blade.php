      <div class="col-md-4 blog-sidebar" id="sidebar" style="float: left;" >

<!-- 
  PUT THIS IN SIDEBAR SEGMENT TO INCLUDE SIDEBAR:
      
      <div>
      @include('layouts.sidebar')
      </div>
-->
          <div class="p-3">
            <footer class="blog-footer">
              <p>
                <a href="/">Home Page</a>
              </p>

              <a id="welcome-sidebar" class="out-of-view" href="/">TEST</a>

              <script text="JavaScript">
                  if (window.location.href === "http://localhost:8000/") {
                    $('#welcome-sidebar').toggleClass('out-of-view', 'in-view');
                  } else if (window.location.href === "http://localhost:8000/") {
                    $('#welcome-sidebar').toggleClass('out-of-view', 'in-view');
                  }
              </script>

              <hr>

              <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
              <p>
                <a href="#">Back to top</a>
              </p>
            </footer>
          </div>  


        </div><!-- /.blog-sidebar -->


<style>
    /* modal styling */
  .out-of-view {
      visibility: hidden;
  }
  .in-view {
      visibility: visible;
  }
</style>