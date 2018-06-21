@extends ('layouts.adminheader')
<div class="default">
    @section('content')
        <main class="py-4 px-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h1>{{session('status')}}</h1>
                        <div class="card">
                            <table class="table">
                                <thead>
                                <th scope="col">id:</th>
                                <th scope="col">Naam:</th>
                                <th scope="col">Adres</th>
                                <th scope="col">Contactpersoon</th>
                                <th scope="col">Gemeente</th>
                                <th scope="col">Telefoonnummer</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                </thead>
                                @foreach ($organisatie as $organisaties)
                                    <tbody>
                                        <td>{{$organisaties->organisatie_id}}</td>
                                        <td>{{$organisaties->naam}}</td>
                                        <td>{{$organisaties->adres}}</td>
                                        <td>{{$organisaties->contactpersoon}}</td>
                                        <td>{{$organisaties->gemeente}}</td>
                                        <td>{{$organisaties->telefoonnummer}}</td>
                                        @can('isAdmin')
                                        <td><a class="btn btn-info"href="{{ route('organisatie.edit',$organisaties->organisatie_id) }}">edit</a>
                                        </td>
                                        <form action="{{url('/organisatie/' . $organisaties->organisatie_id . '/delete')}}" method="POST">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <td>
                                                <button type="submit" id="delete-organisatie-{{ $organisaties->organisatie_id }}"
                                                        class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </td>
                                        </form>
                                        @endcan
                                    </tbody>
                                @endforeach
                            </table>
                            @can('isAdmin')
                            <table class="table">
                                <tbody>
                                <th>Create organisatie</th>
                                    <td>
                                        <a class="btn btn-info" href="{{ url('organisatie/addOrganisatie') }}">add</a>
                                    </td>
                                </tbody>
                            </table>
                            @endcan
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    {{$organisatie->links()}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</div>
@endsection

