<nav class="bg-indigo-500 p-4 fixed w-full top-0 z-50">
    <div class="container mx-auto flex items-center justify-between">
        <a href="{{ url('/') }}" class="text-white text-lg font-semibold"><i class="fas fa-list"></i> TodoList</a>

        <div class="flex items-center">
            @if (auth()->user())
                <div class="relative group inline-block">
                    <span
                        class="text-white mr-4 transition-opacity duration-200 ease-in-out group-hover:opacity-0 delay-200">{{ auth()->user()->name }}</span>
                    <a href="{{ route('logout') }}" class="text-white"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <span
                            class="absolute right-0 transform translate-x-full opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-200 ease-in-out delay-200 text-white whitespace-nowrap"
                            style="left: -70px;">
                            Se déconnecter
                        </span>
                    </a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <div class="relative group inline-block">
                    <a href="{{ route('login') }}" class="text-white">
                        <i class="fas fa-sign-in-alt"></i>
                        <span
                            class="absolute right-0 transform translate-x-full opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-200 ease-in-out delay-200 text-white whitespace-nowrap"
                            style="left: -105px;">
                            Se connecter
                        </span>
                    </a>
                </div>
            @endif
        </div>
    </div>
</nav>
