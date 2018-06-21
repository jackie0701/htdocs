<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Start | Sociale Kaart"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Start') | Sociale kaart</title>
    @section('styles')
        <link rel="stylesheet" type="text/css" href="{{asset("../css/socialekaart.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/sidebar.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/bootstrap.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/app.css")}}">
        <script type="text/javascript" src="{{asset('../js/app.js') }}"></script>
    @show
</head>
<body>
<header id="app">