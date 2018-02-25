<nav class="navbar navbar-default navbar-fixed-top clearfix">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('') }}">Music'M Choeur</a>
        </div>
        <div class="collapse navbar-collapse" id="navBar">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('page/welcome') }}">Accueil</a></li>
                <li><a href="{{ url('events') }}">Agenda</a></li>
                @modules()
                @menu('main')
            </ul>
            <ul class="nav navbar-nav navbar-right menu">
            </ul>
        </div>
    </div>
</nav>