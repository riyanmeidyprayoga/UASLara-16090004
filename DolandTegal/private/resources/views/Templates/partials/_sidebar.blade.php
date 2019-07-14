<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>MENU UTAMA</h3>
        <ul class="nav side-menu">
            <li><a href="{{url('/beranda')}}"><i class="fa fa-home"></i> Beranda</a>
            </li>
        </ul>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-plane"></i> Data Wisata <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('wisata.index') }}">Daftar Wisata</a></li>
                    <li><a href="{{ route('kategori.index') }}">Daftar Kategori</a></li>
                </ul>
            </li>
            <!-- <li><a><i class="fa fa-user"></i> Data User <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('user')}}">Daftar User</a></li>
                </ul>
            </li> -->
        </ul>
    </div>
    <div class="menu_section">
        <h3>Menu Admin</h3>
            <ul class="nav side-menu">
            <li><a><i class="fa fa-bug"></i> Pengaturan Admin <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('log.index') }}">Log Aktivitas</a></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->