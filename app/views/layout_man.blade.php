<!doctype html>
<html lang="ru">
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
                    <a href="{{ URL::to('/') }}">Главная</a>
                </li>
                <li>
                    <?php echo HTML::link('/managePosts', 'Список Постов')?>
                </li>
                <li>
                    <a href="{{ URL::to('logout') }}">Выход</a>
                </li>
                <li>
                    <p class="logged_in">Вы вошли как {{Auth::user()->username}}</p>
                </li>
            </ul>
        </div>
        <div>
            @yield('content')
        </div>
        </div>
        
    </body>
</html>

