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
        
        <style>
            body {
                font-family: 'figtree', sans-serif;
                padding:0;
                margin:0;
            }
            h2{
                background-color: #f2f2f2;
                padding: 10px;
                font-size:28px;
                text-decoration: underline;
            }
            h2 .button{
                font-size: 16px !important;
                font-weight: bolder;
                padding:4px; height:32px;
                line-height: 22px !important;
                margin:4px;
                position: relative;
                top: 3px;
            }
            form, input, select{
                width: 100% !important;
                max-width: 100% !important;
            }
            td .button, .boton{
                color:red;
                padding:6px 8px 8px 6px;
                line-height: 18px !important;
                font-size: 20px !important;
                display: inline-block;
                position: relative;
                top: 10px;
                width:32px;
                height:32px;
                margin:2px 0 !important;
            }
            .boton{
                float:right !important;
                top:-7px;
            }

            form {
                display: inline-block;
            }

            @media screen and (max-width: 800px) {
                .hide-mobile {
                    display: none;
                }

            }

        </style>
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
