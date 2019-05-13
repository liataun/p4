<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          rel="stylesheet"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
          crossorigin="anonymous">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
          rel='stylesheet'
          integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T'
          crossorigin='anonymous'>
    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')
</head>
<body class='p-5'>

@if(session('alert'))
    <div class='alert-general'>{{ session('alert') }}</div>
@endif

<header>
    <nav class='navbar'>
        <a class='navbar-brand' href='/'><img src='/images/logo.png' class='img' id='logo' alt='Art Poem Logo'></a>
        <div class='navbar-text'>Welcome</div>
        @foreach(config('app.nav') as $link => $label)
            @if(!in_array($label, ['DB Test']) or config('app.debug'))
                <ul class='navbar-nav'>
                    @if(Request::is($link) and $label != 'User')
                        {{-- If currrent path matches, do no link --}}
                        <li class='nav-item active'>{{$label}}</li>
                    @elseif(Request::is($link) and $label == 'User' and Auth::check())
                        <li class='nav-item active'>{{ $user->name }}</li>
                    @elseif($label == 'User' and Auth::check())
                        <li class='nav-item'><a class='nav-link' href='/{{$link}}'>{{ $user->name }}</a></li>
                    @elseif($label == 'User' and !Auth::check())
                        <li class='nav-item'><a class='nav-link' href='/{{$link}}'>{{ $label }}</a></li>
                    @elseif($label == 'Ni Hao' and Auth::check())
                        <li class='nav-item'><a class='nav-link disabled' href='/{{$link}}'>{{ $label }}</a></li>
                    @elseif($label == 'DB Test' and Auth::check())
                        <li class='nav-item'><a class='nav-link' href='/{{$link}}'>{{ $label }}</a></li>
                    @elseif(Auth::check())
                        <li class='nav-item'><a class='nav-link' href='/{{$link}}'>{{ $label }}</a></li>
                    @endif
                </ul>
            @endif
        @endforeach
    </nav>
</header>

<section>
    @yield('content')
</section>

<footer>
    &copy; {{ date('Y') }}
</footer>

</body>
</html>