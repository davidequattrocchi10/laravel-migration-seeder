<header class="bg-dark">
    <nav class="nav justify-content-center">
        <a class="nav-link {{Route::currentRouteName() === 'home' ? 'bg-primary text-white' : 'text-white'}}" href="{{route('home')}}">Home</a>
        <a class="nav-link {{Route::currentRouteName() === 'trains_Rome' ? 'bg-primary text-white' : 'text-white'}}" href="{{route('trains_Rome')}}">From Rome</a>
        <a class="nav-link {{Route::currentRouteName() === 'trains_Milan' ? 'bg-primary text-white' : 'text-white'}}" href="{{route('trains_Milan')}}">From Milan</a>
        <a class="nav-link {{Route::currentRouteName() === 'highSpeed' ? 'bg-primary text-white' : 'text-white'}}" href="{{route('highSpeed')}}">High Speed Trains</a>
    </nav>


</header>