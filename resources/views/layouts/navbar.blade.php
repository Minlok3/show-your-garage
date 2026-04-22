<style>
nav{
        position: absolute;
        right: 0;
        top: 0;
        left: 0;
        padding: 5px;
        background-color:black;
    }
    nav a{
        text-decoration: none;
        color: #26a62a;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        text-shadow: 0 0 15px #26a62a;
    }
    nav a:hover{
        text-decoration: none;
        color: #69f759;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        text-shadow: 0 0 15px #26a62a;
    }
</style>
<nav>
        <a href="{{ url('/') }}" style="font-size: 40px; margin-left: 20px">Show your garage</a>
        @guest
        <a href="{{ route('register') }}" style="float: right;">{{__('Register')}}</a>
        <a href="{{ route('login') }}" style="float: right; margin-right: 10px" >{{__('Login')}}</a>
        @endguest
        @auth
        <div style="float: right; margin-right: 20px; font-size: 30px;">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <!-- <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                    </svg>
                </x-responsive-nav-link> -->
                <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                    </svg>
                </a>
            </form>
        </div>
        <a href="{{ route('profile.edit') }}" style="float: right; margin-right: 20px; font-size: 30px;" >{{ Auth::user()->name }}</a>
        <a href="{{ route('garage', ['id'=>Auth::user()->id]) }}" style="float: right; margin-right: 20px; font-size: 30px;" >Garaż</a>
            
        @endauth
</nav>