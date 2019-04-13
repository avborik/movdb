<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="/" class="navbar-brand">Mov-DB</a>
    
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="#" class="nav-item nav-link active">Featured</a>
            <a href="#" class="nav-item nav-link active">Pricing</a>
        </div>
    </div>
    @if(Auth::user())
        <a href="{{url('/admin')}}" class="nav-link nav-user-img"></a>
            <i class="fa fa-user mr-2"></i>
    @endif
</nav>
</header>