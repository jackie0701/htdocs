<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Sociale Kaart"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Instantienaam') | Sociale kaart</title>
    @section('styles')
        <link rel="stylesheet" type="text/css" href="{{asset("../css/sidebar.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/bootstrap.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/app.css")}}">
        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    @show
</head>
<div class="default">
    @include('includes.navbar')
    <div class="jumbotron">
        <div class="container" style="margin-top:80px;">
            <h1 class="display-4">OnsPlaform</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a
                jumbotron and three supporting pieces of content. Use it as a starting point to create something more
                unique.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- BEGIN SEARCH RESULT -->
            <div class="col-md-12">
                <div class="grid search">
                    <div class="grid-body">
                        <div class="row">
                            <div class="col-md-9">
                                <nav aria-label="breadcrumb">

                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Start</a></li>
                                        <li class="breadcrumb-item"><a href="/werk">Werk</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{$organisaties->naam}}</li>
                                    </ol>
                                </nav>
                                <hr>
                                <div class=" card__title">
                                    <h2>Instantie details</h2>
                                </div>
                                <br>
                                <div class="row table-row">
                                    <!-- details -->
                                    <div class="col-xs-6 col-sm-6">
                                        Bedrijfsnaam
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        {{$organisaties->naam}}
                                    </div>
                                </div>
                                <div class="row table-row">
                                    <!-- details -->
                                    <div class="col-xs-6 col-sm-6">
                                        Bedrijfsnaam ID
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                    </div>
                                </div>
                                <div class="row table-row">
                                    <!-- details -->
                                    <div class="col-xs-6 col-sm-6">
                                        Adres
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        {{$organisaties->naam}}<br>
                                        {{$organisaties->adres}}
                                    </div>
                                </div>
                                <div class="row table-row">
                                    <!-- details -->
                                    <div class="col-xs-6 col-sm-6">
                                        Contactpersoon
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        {{$organisaties->contactpersoon}}
                                    </div>
                                </div>
                                <div class="row table-row">
                                    <!-- details -->
                                    <div class="col-xs-6 col-sm-6">
                                        Gemeente
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        {{$organisaties->gemeente}}
                                    </div>
                                </div>
                                <div class="row table-row">
                                    <!-- details -->
                                    <div class="col-xs-6 col-sm-6">
                                        Telefoonnummer
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        {{$organisaties->telefoonnummer}}
                                    </div>
                                </div>
                                <br>
                                <div class="row table-row">
                                    <!-- details -->
                                    <div class="col-xs-6 col-sm-6">
                                        Over {{$organisaties->naam}}
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        {{$organisaties->beschrijving}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>
    </body>
</html>

