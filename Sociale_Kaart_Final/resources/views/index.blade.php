@include('includes.header')
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
        <h1>Leefgebieden</h1><br>
        <div class="container-fluid">
            <div class="row">
                <div class="card-deck">
                    <div class="card">
                        <a href="/werk"><img class="card-img-top" src="images/placeholder.png" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Werk en dagbesteding</h4>
                        </a>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                            ligula eget dolor. Aenean massa.</p>
                    </div>
                </div>
                <div class="card">
                    <a href="/inkomen"><img class="card-img-top" src="images/placeholder.png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Inkomen</h4>
                    </a>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                        eget dolor. Aenean massa.</p>
                </div>
            </div>
            <div class="card">
                <a href="/onderwijs"><img class="card-img-top" src="images/placeholder.png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Onderwijs</h4>
                </a>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                    eget dolor. Aenean massa. </p>
            </div>
        </div>
    </div>
</div><br>
<div class="row">
    <div class="card-deck">
        <div class="card">
            <a href="/gezondheid"><img class="card-img-top" src="images/placeholder.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Gezondheid</h4>
            </a>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                dolor. Aenean massa. </p>
        </div>
    </div>
    <div class="card">
        <a href="/sociaalfunctioneren"><img class="card-img-top" src="images/placeholder.png"
                                            alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Sociaal functioneren</h4>
        </a>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
            Aenean massa. </p>
    </div>
</div>

@include('includes.footer')
