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
            @yield('content')
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                Edit
                            </div>
                            <div class="card-body">
                                {{session('status')}}
                                <form action="{{ route('gebruiker.update',$gebruiker->id) }}"
                                      enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method ('PUT')
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <strong>Name:</strong>
                                            <input type="text" name="name" value="{{$gebruiker->name}}"
                                                   class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <strong>User type (admin, user)</strong>
                                            <input type="text" class="form-control" name="user_type"
                                                   placeholder="user_type" value="{{$gebruiker->user_type}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <strong>Email:</strong>
                                            <input type="text" class="form-control" name="email" placeholder="Detail"
                                                   value="{{$gebruiker->email}}">
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        </main>
    @endcan
@endsection
