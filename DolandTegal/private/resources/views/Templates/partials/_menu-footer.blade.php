<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Beranda"  href="{{asset('/beranda')}}">
        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Wisata" href="{{asset('wisata')}}">
        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="User" href="{{asset('user')}}">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
    </a>
    <!-- <a data-toggle="tooltip" data-placement="top" title="Logout"  href="{{url('/login')}}">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a> -->
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>