<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>My Music Center</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/"> -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    
    <!--

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

    -->

    <!-- <link href="blog.css" rel="stylesheet"> -->

    <!-- USE LARAVEL PARENTHESIS TO REFER TO HREF -->
    <!-- LOCAL LARAVEL CSS OVERRIDE -->
    <link href="{{ URL::asset('css/ICSSCSS.css') }}" rel="stylesheet">


  </head>

  <body class="bg-black">

    <!-- HEADER CONTAINER -->
    @extends ('../layouts/header')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- END OF HEADER CONTAINER -->



    <!-- PRIMARY SUPERCONTAINER -->
    <main role="main" class="container">



      <!-- SIDEBAR CONTAINER -->
      
      

      <!-- END OF SIDEBAR CONTAINER -->

      <div class="row">
        <div class="col-md-8 blog-main">
        </div><!-- /.blog-main -->

      </div><!-- /.row -->

      <!-- CONTENT -->
      <div class="wrapper content">

      @yield('content')  <!-- CONTENT GOES HERE -->

      </div>

      <!-- END OF CONTENT -->



      <!-- FOOTER -->
      <div class="footer">
      <footer class="blog-footer border-top">
            <?php $mytime = Carbon\Carbon::now();
            echo $mytime->toDateTimeString();?>
            <p>Jesseau Industries &copy;</p>
      </footer>
      <div>
      <!-- END OF FOOTER -->



    </main><!-- /.container -->
    <!-- END OF PRIMARY SUPERCONTAINER -->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!--

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    -->

    <!-- <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script> -->
    
    <!--

    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    -->

      <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Plugin JavaScript -->
  <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

  <!-- Contact Form JavaScript -->
  <!-- <script src="js/jqBootstrapValidation.js"></script> -->
  <!-- <script src="js/contact_me.js"></script> -->

  <!-- Custom scripts for this template -->
  <!-- <script src="js/freelancer.min.js"></script> -->
  </body>
</html>
