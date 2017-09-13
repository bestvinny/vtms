<!DOCTYPE html>
<html>
<head>
    <title></title>

     <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">

     <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
     <script type="text/javascript" src="{{asset('js/js.js')}}"></script>
</head>
</head>
<body>
   <div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">


        @include('layouts.admin-partials.header')

        @include('layouts.admin-partials.nav')
    
        @yield('content')
    
        @include('layouts.admin-partials.footer')


</div>
    
    </body>
</html>