<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Onderwijs - Sociale Kaart"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Onderwijs') | Sociale kaart</title>
    @section('styles')
        <link rel="stylesheet" type="text/css" href="{{asset("../css/sidebar.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/bootstrap.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/app.css")}}">
        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    @show
</head>
<body class="default">
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
                        <!-- BEGIN FILTERS -->
                        <div class="col-md-3 filter-desktop">
                            <h2 class="grid-title"><i class="fa fa-filter"></i>Verfijnen</h2>
                            <hr>
                            <!-- BEGIN FILTER BY CATEGORY -->
                            <div class="filter1">
                                <h4>Filter 1</h4>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> {Optie 1}</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> {Optie 2}</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> {Optie 3}</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> {Optie 4}</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> {Optie 5}</label>
                                </div>
                            </div>
                            <br>
                            <!-- END FILTER BY CATEGORY -->

                            <div class="padding"></div>
                            <!-- BEGIN FILTER BY CATEGORY -->
                            <div class="filter2">
                                <h4>Filter 2</h4>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> {Optie 1}</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> {Optie 2}</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> {Optie 3}</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> {Optie 4}</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> {Optie 5}</label>
                                </div>
                            </div>
                            <!-- END FILTER BY CATEGORY -->

                            <div class="padding"></div>


                        </div>

                        <!-- END FILTERS -->
                        <!-- BEGIN RESULT -->
                        <div class="col-md-9">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Start</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Onderwijs</li>
                                </ol>
                            </nav>
                            <hr>
                            <p style="float:left;">{aantal resultaten}</p>

                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="filter1">
                                    <h4>Filter 1</h4>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="icheck"> {Optie 1}</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="icheck"> {Optie 2}</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="icheck"> {Optie 3}</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="icheck"> {Optie 4}</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="icheck"> {Optie 5}</label>
                                    </div>
                                </div>
                                <br>
                                <!-- END FILTER BY CATEGORY -->

                                <div class="padding"></div>
                                <!-- BEGIN FILTER BY CATEGORY -->
                                <div class="filter2">
                                    <h4>Filter 2</h4>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="icheck"> {Optie 1}</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="icheck"> {Optie 2}</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="icheck"> {Optie 3}</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="icheck"> {Optie 4}</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="icheck"> {Optie 5}</label>
                                    </div>
                                </div>
                            </div>
                            <div id="main">
                                <span style="font-size:15px;cursor:pointer; float:right;" class="filter-mobile" onclick="openNav()">Filter<img src="images/filter.png" style="width:30px; height:30px;"></span>
                            </div>
                            <div class="padding"></div>

                            <!-- BEGIN TABLE RESULT -->
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach($organisaties as $object)
                                        <tr>
                                            <td class="image"><a href="{{ route('organisatie.zoeken.show',$object->organisatie_id) }}"><img src="images/placeholder-image.png" alt=""></td>
                                            <td class="naam"><strong>{{$object->naam}}</strong></td>
                                            <td class="adres">{{ $object->adres }}</td>
                                            <td class="contactpersoon">{{$object->contactpersoon}}</td>
                                            <td class="gemeente">{{$object->gemeente}}</td>
                                            <td class="telefoonnummer">{{$object->telefoonnummer}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- END TABLE RESULT -->

                            <!-- BEGIN PAGINATION -->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    {{$organisaties->links()}}
                                </ul>
                            </nav>
                            <!-- END PAGINATION -->
                        </div>
                        <!-- END RESULT -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END SEARCH RESULT -->
    </div>

    @include('includes.footer')

</div>
</body>
</html>


