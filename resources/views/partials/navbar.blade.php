<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>
            <a class="nav-link" href="#">About</a>

            @if (Auth::check())
			<a class="nav-link ml-auto" href="#">{{ Auth()->user()->name }}</a>
            <a class="nav-link" href="/logout">Logout</a>
            @else
            <a class="nav-link ml-auto" href="/login">Login</a>
            @endif
        </nav>
    </div>
</div>