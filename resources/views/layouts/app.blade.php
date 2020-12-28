<!doctype html>
<html lang-="en">

@if ($errors->any())
    <div>
        Errors:
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <head>
        <title>Basketball Forum - @yield('title')</title>
</head>
<body>
    <h1>Basketball Forum - @yield('title')</h1>

    
    <div>
        @yield('content')
    </div>


    </body>
</html>