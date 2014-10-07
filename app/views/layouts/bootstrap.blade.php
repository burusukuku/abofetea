
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Venganza!! Ahora puedes hacer todo lo que siempre soñaste.">
    <meta name="author" content="José Manuel Ruiz González">
    <link rel="shortcut icon" href="hand.ico"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.theme.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/sticky-footer-navbar.css">

    <title>Abofetea un Político</title>


  </head>

  <body>

    <?
              $vista= Route::currentRouteName();
              $current = array
                (
                    'index' => '',
                    'sobre' => '',
                    'contacto' => '',
                    'donar' => ''
                );
               if($vista == '' || $vista == 'index')
                {
                    $current['index']='active';
                }
                else if($vista == 'sobre')
                 {
                    $current['sobre']='active';
                 }
                else if($vista == 'contacto')
                 {
                    $current['contacto']='active';
                 }
                else if($vista == 'donar')
                 {
                    $current['donar']='active';
                 }
              ?>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">

          <a class="navbar-brand" href="{{URL::route('index')}}">Abofetea a un Político!</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Políticos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                 <li class="dropdown-header">PP</li>
                <li><a href="{{URL::route('rajoy')}}">Rajoy</a></li>
                <li><a href="{{URL::route('soraya')}}">Soraya Saenz de Santamaría</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">PSOE</li>
                <li><a href="#">Zapatero</a></li>
                <li><a href="#">Rubalcaba</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="{{$current['index']}}"><a href="{{URL::route('index')}}"><span class='glyphicon glyphicon-home'></span> Inicio</a></li>
            <li class="{{$current['sobre']}}"><a href="{{URL::route('sobre')}}"><span class='glyphicon glyphicon-info-sign'> Sobre...</a></li>
            <li class="{{$current['contacto']}}"><a href="{{URL::route('contacto')}}"><span class='glyphicon glyphicon-envelope'></span> Contacto</a></li>
            <li class="{{$current['donar']}}"><a href="{{URL::route('donar')}}"><span class='glyphicon glyphicon-euro'></span> Donar!</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container" style="margin-top: 20px">
    @yield('contenido')
    </div> <!-- /container -->
    <div class="footer">
          <div class="container">
            <p class="text-muted">Abofetea un Político | Advertencia Legal | Licencia | 2014</p>
          </div>
    </div>
  </body>
</html>
