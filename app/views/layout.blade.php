<!-- 
   ______                      ____         __
  / ____/___  ____ ___  ____  / __ \___  __/ /_
 / /   / __ \/ __ `__ \/ __ \/ / / / _ \/_   _/
/ /___/ /_/ / / / / / / /_/ / / / /  __/ / /_
\____/\____/_/ /_/ /_/ .___/_/ /_/\___/ /___/
                    /_/
-->
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">

    <title>@yield('title')</title>
    <meta name="author" content="compnet.kz">
    <meta name="description" content="@yield('meta_description')">

    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-yeti.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    @yield('head')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body @yield('attribute')>
    <!-- Navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('index') }}">CN</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="{{ (Request::is('/') ? 'active' : '') }}"><a href="{{ route('index') }}">Главная</a></li>
            <li class="{{ (Request::is('portfolio') ? 'active' : '') }}"><a href="{{ route('portfolio') }}">Портфолио</a></li>
            <li class="{{ (Request::is('services/*') ? 'active' : '') }}"><a href="{{ URL::to('services/it-outsourcing') }}">Услуги</a></li>
            <li class="{{ (Request::is('compnet') ? 'active' : '') }}"><a href="{{ route('compnet') }}">О Компании</a></li>
            <li class="{{ (Request::is('partners') ? 'active' : '') }}"><a href="{{ route('partners') }}">Партнеры</a></li>
            <li class="{{ (Request::is('contacts') ? 'active' : '') }}"><a href="{{ route('contacts') }}">Контакты</a></li>
          </ul>
        </div>
      </div>
    </div>
    <br><br>

    @yield('content')

    <br><br>
    <footer class="bg-dark">
      <br>
      <div class="container">
        <div class="col-md-12 text-center">
          <ul class="list-inline">
            <li><a href="#"><i class="fa fa-facebook fa-3x"></i> </a></li>
            <li><a href="#"><i class="fa fa-vk fa-3x"></i> </a></li>
            <li><a href="#"><i class="fa fa-google-plus fa-3x"></i> </a></li>
            <li><a href="#"><i class="fa fa-twitter fa-3x"></i> </a></li>
            <li><a href="#"><i class="fa fa-youtube fa-3x"></i> </a></li>
            <li><a href="#"><i class="fa fa-linkedin fa-3x"></i> </a></li>
          </ul>
          <h4>Подпишитесь на Наши группы и будьте в курсе актуальных новостей IT</h4><br>
          <h4 class="text-left">Copyright &copy; 2011 - 2015 ТОО &laquo;CompNet Technologies&raquo;. Алматы, Казахстан.</h4>
        </div>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    @yield('scripts')
  </body>
</html>