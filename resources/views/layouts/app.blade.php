<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EveCalc</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">

  </head>
  <body id="body">

    @include('inc.topbar')

    <div class="container">

      @if(Request::is('/'))
        @include('inc.showcase')
      @endif

      @if(Request::is('/','contact','about'))
        <div class="row">
          <div class="col-md-8 col-lg-8">

                @include('inc.messages')
                @yield('content')

          </div>
          <div class="col-md-4 col-lg-4">

                @include('inc.sidebar')

          </div>
        </div>

      @endif

      @if(Request::is('minerals','pitiertwo','evelpapp'))

        @yield('content')

      @endif

    </div>

    <footer id="footer" class="text-center">
      <p>Copyright 2018 &copy; ARS-DEV -v1.0- All EvE related materials are property of CCP Games. See <a href="http://evecalc.net/about">legal notice.</a></p>
    </footer>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  </body>
</html>
