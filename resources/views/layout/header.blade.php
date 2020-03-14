<!-- header area start here -->
<div class="header-area" id="sticky">
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="" alt="Elmarzougui Abdelghafour">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="{{route('home')}}">HOME</a></li>
                    <li class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}"><a href="{{route('about')}}">ABOUT</a></li>
                    <li class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}"><a href="{{route('services')}}">SERVICES</a></li>
                    <li class="{{ Route::currentRouteName() == 'portfolio' ? 'active' : '' }}"><a href="{{route('portfolio')}}">PORTFOLIO</a></li>
                    <li class="{{ Route::currentRouteName() == 'blog' ? 'active' : '' }}"><a href="{{route('blog')}}">BLOG</a></li>
                    <li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}"><a href="{{route('contact')}}">CONTACT</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</div>
<!-- header area end here -->
