<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Material Design fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/1.7.22/css/materialdesignicons.min.css">

    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-material-design.css">
    <link rel="stylesheet" type="text/css" href="dist/css/ripples.min.css">

    <link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">
</head>
<body style="background-color: #F7F9F9">
 @include('includes.header')
<div class="container">
    @yield('content')
</div>
 <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
 <script src="https://cdn.rawgit.com/HubSpot/tether/v1.3.4/dist/js/tether.min.js"></script>
 <script src="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.iife.min.js"></script>
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
 <script>
     $('body').bootstrapMaterialDesign();
 </script>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.0.0rc1.js"></script>

<script src="{{URL::to('src/js/app.js')}}"></script>
</body>
</html>
