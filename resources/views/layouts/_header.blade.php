<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
            LaraBBS
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">登录</a> </li>
                <li class="nav-item"><a class="nav-link" href="{{route('register')}}">注册</a> </li>
            </ul>
        </div>
    </div>
</nav>