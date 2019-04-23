<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
          rel='stylesheet'
          integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T'
          crossorigin='anonymous'>
    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')
</head>
<body class='p-5'>

<header>
    <nav class='navbar'>
        <a class='navbar-brand' href='/'><img src='/images/logo.png' class='img' id='logo' alt='ToDO Replace Me'></a>
        <li class='navbar-text'>Welcome</li>
        @foreach(config('app.nav') as $link => $label)
            @if(!in_array($label, ['DB Test']) or config('app.debug'))
                <ul class='navbar-nav'>
                    @if(Request::is($link))
                        {{-- If currrent path matches, do no link --}}
                        <li class='nav-item active'>{{$label}}</li>
                    @elseif($label == 'Ni Hao')
                        <li class='nav-item'><a class='nav-link disabled' href='/{{$link}}'>{{ $label }}</a></li>
                    @elseif($label == 'DB Test')
                        <li class='nav-item'><a class='nav-link' href='/{{$link}}'>{{ $label }}</a></li>
                    @else
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