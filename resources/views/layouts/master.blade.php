<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ReBits Lab - @yield('title')</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>
    <body>
            
                <h2>
                <div class="container">                    
                    @yield('title')
                    <div class='u-pull-right'>
                        <a class='button' href="/usuarios">Usuarios</a>
                        <a class='button' href="/vehiculos">Vehiculos</a>
                    </div>
                    <div class="u-cf"></div>
                    </div>
                </h2>
                <div class="container">                
                @yield('content')
                </div>
            
    </body>
</html>
