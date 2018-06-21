@extends ('layouts.adminheader')
@section('content')
@can('isUser')
    <main class="py-4 px-4">
        @yield('content')
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card text-black bg-white">
                        <div class="card-header">
                            Welkom, {{ ucfirst(Auth::user()->name)}}
                        </div>
                        <div class="card-body">
                            U heeft helaas niet de juiste rechten om deze pagina te betreden.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endcan
@can('isAdmin')
    <main class="py-4 px-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Add
                        </div>
                        <div class="card-body">
                            <h1>{{session('status')}}</h1>
                            <form method="POST" class="adminform" action="{{ action('PageController@create') }}">
                                @csrf
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <strong>Naam:</strong>
                                        <input type="text" name="naam" class="form-control" placeholder="Naam">
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <strong>Adres</strong>
                                        <input type="text" class="form-control" name="adres" placeholder="Adres">
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <strong>Contactpersoon</strong>
                                        <input type="text" class="form-control" name="contactpersoon"
                                               placeholder="contactpersoon">
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <strong>Gemeente</strong>
                                        <input type="text" class="form-control" name="gemeente"
                                               placeholder="gemeente">
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <strong>Telefoonnummer</strong>
                                        <input type="text" class="form-control" name="telefoonnummer"
                                               placeholder="telefoonnummer">
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <strong>Beschrijving</strong>
                                        <textarea class="form-control" name="beschrijving"
                                                  placeholder="beschrijving"></textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endcan
@endsection