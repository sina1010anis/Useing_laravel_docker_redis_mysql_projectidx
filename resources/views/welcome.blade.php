<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- <script type="module" src="https://9000-monospace-my-app-1715415535026.cluster-vyr53kd25jc2yvngldrwyq6zc4.cloudworkstations.dev/client"></script><link rel="stylesheet" href="https://5173-monospace-my-app-1715415535026.cluster-vyr53kd25jc2yvngldrwyq6zc4.cloudworkstations.dev/resources/css/app.css" /> --}}
        <link rel="stylesheet" href="{{mix('css/app.css')}}">

        {{-- <script type="module" src="https://5173-monospace-my-app-1715415535026.cluster-vyr53kd25jc2yvngldrwyq6zc4.cloudworkstations.dev/client"></script><link rel="stylesheet" href="https://5173-monospace-my-app-1715415535026.cluster-vyr53kd25jc2yvngldrwyq6zc4.cloudworkstations.dev/resources/css/app.css" /> --}}
    </head>
    <body>
        <div id="app">
            <p>@{{version}}</p>
            {{-- <test-page></test-page> --}}
        </div>
    </body>
            <script src="{{mix('js/app.js')}}" ></script>

</html>
