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
                                <th scope="col">naam:</th>
                                <th scope="col">email</th>
                                </thead>
                                @foreach ($gebruikers as $gebruiker)
                                    <tbody>
                                    <td>{{$gebruiker->id}}</td>
                                    <td>{{$gebruiker->name}}</td>
                                    <td>{{$gebruiker->email}}</td>
                                    @can('isAdmin')

                                        <td><a class="btn btn-info"
                                           href="{{ route('gebruiker.edit',$gebruiker->id) }}">edit</a>
                                    </td>
                                    <form action="{{url('/gebruiker/' . $gebruiker->id . '/delete')}}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <td>
                                            <button type="submit" id="delete-gebruiker-{{ $gebruiker->id }}"
                                                    class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </td>
                                    </form>
                                    </tbody>
                                    @endcan
                                @endforeach
                            </table>
                            @can('isAdmin')
                            <table class="table">
                                <tbody>
                                <th>Create user</th>
                                <td>
                                    <a class="btn btn-info" href="{{ url('gebruiker/add') }}">add</a>
                                </td>
                                </tbody>
                            </table>
                            @endcan
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    {{$gebruikers->links()}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</div>
@endsection
