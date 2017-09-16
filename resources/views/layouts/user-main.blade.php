<!DOCTYPE html>
<html>
<head>
    <title></title>

     <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/user.css')}}">

     <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head>
</head>
<body>
   <div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">


        @include('layouts.user-partials.header')

        @include('layouts.user-partials.nav')
    
        @yield('content')
    
        @include('layouts.user-partials.footer')


</div>
    
    </body>
</html>