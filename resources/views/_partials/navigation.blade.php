<div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
    <ul class="navbar-nav text-uppercase g-font-weight-600 ml-auto">

        @foreach($menus as $menu)
            @if(isset($currentMenu) && ($currentMenu->id == $menu->id) )
            <li class="nav-item g-mx-20--lg active">
                <a href="/{{LaravelLocalization::getCurrentLocale()}}/{{ $menu->slug }}" class="nav-link px-0">
                    {{ $menu->title }}
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            @else
                <li class="nav-item g-ml-20--lg g-mr-0--lg">
                    <a href="/{{LaravelLocalization::getCurrentLocale()}}/{{ $menu->slug }}" class="nav-link px-0">
                        {{ $menu->title }}
                    </a>
                </li>
            @endif
        @endforeach

    </ul>
</div>
<br>
