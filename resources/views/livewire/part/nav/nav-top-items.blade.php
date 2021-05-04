@if ($default)
    @if ($responsive)
        @stack('nav_top_responsive')
        @if (isset($navs))
            @foreach ($navs as $nav)
                <x-jet-responsive-nav-link href="{{ route($nav['route']) }}" :active="request()->routeIs($nav['route'])">
                    {{ __($nav['title']) }}
                </x-jet-responsive-nav-link>
            @endforeach
        @endif
    @else
        @stack('nav_top')
        @if (isset($navs))
            @foreach ($navs as $nav)
                <x-jet-nav-link href="{{ route($nav['route']) }}" :active="request()->routeIs($nav['route'])">
                    {{ __($nav['title']) }}
                </x-jet-nav-link>
            @endforeach
        @endif
    @endif
@else
    @if ($full)
        @push('nav_top')
            @if (isset($navs))
                @foreach ($navs as $nav)
                    <x-jet-nav-link href="{{ route($nav['route']) }}" :active="request()->routeIs($nav['route'])">
                        {{ __($nav['title']) }}
                    </x-jet-nav-link>
                @endforeach
            @endif
        @endpush
    @endif
    @if ($responsive)
        @push('nav_top_responsive')
            @if (isset($navs))
                @foreach ($navs as $nav)
                    <x-jet-responsive-nav-link href="{{ route($nav['route']) }}" :active="request()->routeIs($nav['route'])">
                        {{ __($nav['title']) }}
                    </x-jet-responsive-nav-link>
                @endforeach
            @endif
        @endpush
    @endif
@endif
