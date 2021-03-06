<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{ $title }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        {{ HTML::style('css/bootstrap.min.css') }}
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
       <!--  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css"> -->
        {{ HTML::style('css/bootstrap-theme.min.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::script('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <!--  <a class="navbar-brand" href="#">Project name</a> -->
          {{ link_to('/','Ebuzz Blog',array('class'=>'navbar-brand')) }}
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="#">Home</a></li> -->
            <li class="active">{{ link_to('/','Inicio') }}</li>
            <li>{{ link_to('acerca','Acerca')}}</li>
            <li>{{ link_to('contacto','Contacto')}}</li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Articulos <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>{{ link_to('articulos/publicar','Publicar')}}</li>
                <li>{{ link_to('articulos/buscar','Buscar')}}</li>
                
              </ul>
            </li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>{{ link_to('usuarios/registrar','Registrar')}}</li>
               
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Iniciar seasion</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

     <div class="container">
      <!-- Example row of columns -->
      
      @yield('auxiliarArticulos')

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || {{ HTML::script('js/vendor/jquery-1.10.1.min.js') }}</script>
        {{ HTML::script('js/vendor/bootstrap.min.js') }}
        
        {{ HTML::script('js/main.js') }}
        

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>