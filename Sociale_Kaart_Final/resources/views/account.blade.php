@include('layouts.adminheader')
<nav class="sidebar toggled">
    <div class="sidebar-wrapper bg-dark">
        <ul class="sidebar-nav">
            <li>
                <a class="nav-link" href="{{ url('/account') }}">Home</a>
            </li>
            <li>
                <a class="nav-link" href="{{url('gebruiker')}}">Gebruikers</a>
            </li>
            <li>
                <a class="nav-link" href="{{url('organisatie')}}">Organisaties</a>
            </li>
        </ul>
    </div>
</nav>


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
                        Dit is de admin panel.
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
