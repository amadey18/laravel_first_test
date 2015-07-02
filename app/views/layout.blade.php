<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
        {{ HTML::style('css/bootstrap.min.css')}}
        {{ HTML::style('css/main.css')}}
        {{ HTML::script('js/jquery-2.1.4.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}        
        {{ HTML::script('js/tinymce/tinymce.min.js') }}
</head>
  <body>
      <div class="container">
      <!--Navigation block-->
        <div class="navigation_main_block">
            <ul class="navigation_main" id="nav_main">
                <li>
                    <?php echo HTML::link('/managePosts', 'Для пользователей')?>
                </li>
                <li>
                    <a href="{{ URL::to('/') }}">Главная</a>
                </li>
            </ul>
        </div>
        @yield('content')
      </div>
  </body>
</html>
