<header>
    <div class="header_container">
        <div class="logo_container">
            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </div>
    
        <nav>
            <ul class="m-0">
                <li>
                    <a href="#" class="{{ Route::currentRouteName() == 'caracters' ? 'active' : ''}}">Caracters</a>
                </li>
                <li>
                    <a href="{{route('comics')}}" class="{{ Route::currentRouteName() == 'comics' ? 'active' : ''}}">Comics</a>
                </li>
                <li>
                    <a href="#" class="{{ Route::currentRouteName() == 'movie' ? 'active' : ''}}">Movies</a>
                </li>
                <li>
                    <a href="#" class="{{ Route::currentRouteName() == 'tv' ? 'active' : ''}}">Tv</a> 
                </li>
                <li>
                    <a href="#" class="{{ Route::currentRouteName() == 'games' ? 'active' : ''}}">Games</a>  
                </li>
                <li>
                    <a href="#" class="{{ Route::currentRouteName() == 'collectives' ? 'active' : ''}}">Collectives</a>  
                </li>
                <li>
                    <a href="#" class="{{ Route::currentRouteName() == 'videos' ? 'active' : ''}}">Videos</a>  
                </li>
                <li>
                    <a href="#" class="{{ Route::currentRouteName() == 'fans' ? 'active' : ''}}">Fans</a>  
                </li>
                <li>
                    <a href="#" class="{{ Route::currentRouteName() == 'news' ? 'active' : ''}}">News</a>  
                </li>
            </ul>
        </nav>
    </div>
</header>
<div class="jumbotron">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
</div>