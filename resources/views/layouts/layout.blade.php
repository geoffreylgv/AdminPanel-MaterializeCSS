<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fan's Award | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon======= -->
        <link rel="apple-touch-icon" sizes="180x180">
    <!-- Google Fonts===== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>


  <!--NAV plus SIDENAV -->
  <nav class="teal accent-4">
    <div class="nav-wrapper">
      <div class="container">
        <a href="/" class="brand-logo fan-side text-blue hide-on-small-only">Fan's Award</a>
        <a href="" class="sidenav-trigger show-on-medium-and-up " data-target="slide-out"><i class="material-icons">menu</i></a>
        <!--LINKS ICONS-->
        <ul class="right">
          <li>
            <a href="#" class="tooltipped btn-floating btn-small lighht-blue z-depth-0" data-tooltip="Messages">
              <i class="material-icons">chat</i>
            </a>
          </li>
          <li>
            <a href="#" class="tooltipped btn-floating btn-small red z-depth-2" data-tooltip="Notifications">
              <i class="material-icons">notifications_active</i>
            </a>
          </li>
          <li class="on-bell">
            <span class="new badge red">4</span>
          </li>
          <li>
            <a href="#" class="tooltipped btn-floating btn-small orange z-depth-0 dropdown-trigger" data-tooltip="Mon profile" data-target="display-profile">
              <i class="material-icons">person_outline</i>
            </a>
            <ul id="display-profile" class="dropdown-content">
              <li><a href="#" class="teal-text"><i class="material-icons">person</i>Profile</a></li>
              <li><a href="#" class="red-text lighten-2"><i class="material-icons">exit_to_app</i>Logout</a></li>
            </ul>
          </li>
          <li>
            
          </li>
        </ul>
        <!--/ LINKS-->
      </div>
    </div>
  </nav>

  <ul  id="slide-out" class="sidenav sidenav-side">
    <!--<li class="teal"><a class="sidenav-close white-text fan-close">X Fermer</a></li>-->
    <li>
      <div class="user-view">
        <div class="background">
          <img src="https://images.pexels.com/photos/1841841/pexels-photo-1841841.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
        </div>
        <a href="#user"><img class="circle" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"></a>
        <a href="#name"><span class="white-text name">Geoffrey Logovi</span></a>
        <a href="#email"><span class="white-text email">geoffreylogovi2@gmail.com</span></a>
      </div>
    </li>
    <!--Links to site-->
    <li><a href="#"><i class="material-icons teal-text">home</i>Accueill</a></li>
    <li><a href="#!"><i class="material-icons teal-text">chrome_reader_mode</i>Actualités</a></li>
    <li><a href="#!"><i class="material-icons teal-text">touch_app</i>Évènements</a></li>
    <li><a href="#!"><i class="material-icons pink-text">stars</i>BetLive</a></li>
    <li><a href="#!"><i class="material-icons teal-text">videogame_asset</i>FanLive</a></li>
    <li><a href="#!"><i class="material-icons teal-text">history</i>Historique</a></li>
    <!--/END Links-->
    
  </ul>
  <!-- / NAV plus SIDENAV-->

  <!--All CONTENT HER : the BODY YIELD-->
    @yield('content')
  <!--END CONTENT-->

  <!--FOOTER-->
  <div class="page-footer fan-bg-footer">
    <div class="footer-copyright">
      <div class="container">
        &copy; Copyright 2020 All rigth reserved
        <span class="right">
          <img src="" alt="" srcset="">
          <a href="https://mfn-32.webself.net" target="_blank">mfn Inc</a>. 
        </span>
      </div>
    </div>
  </div>
  <!--END FOOTER-->

  <!-- Compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>