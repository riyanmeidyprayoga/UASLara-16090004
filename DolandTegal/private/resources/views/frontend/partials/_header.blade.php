<header>
	<!-- Header desktop -->
	<div class="wrap-menu-header gradient1 trans-0-4">
		<div class="container h-full">
			<div class="wrap_header trans-0-3">
				<!-- Logo -->
				<div class="logo">
					<a href="{{url('/')}}">
						<img src="{{ asset('public/assetfrontend/images/icons/logo.png')}}" alt="IMG-LOGO" data-logofixed="{{ asset('public/assetfrontend/images/icons/logo2.png')}}">
					</a>
				</div>
				<!-- Menu -->
				<div class="wrap_menu p-l-45 p-l-0-xl">
					<nav class="menu">
						<ul class="main_menu">
							<li class="hidden">
                   	 		    <a href="#page-top"></a>
                			    </li>
							<li>
			 					<a href="{{url('/')}}">Home</a>
							</li>
							<li>
			 					<a href="{{url('/all-wisata')}}">All Wisata</a>
							</li>
							<li>
								<a href="{{url('/about')}}">About</a>
							</li>
							<li>
								<a class="#page-scroll" href="{{url('/kategori-wisata')}}">Kategori</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- Social -->
				<div class="social flex-w flex-l-m p-r-20">
					
					<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
				</div>
			</div>
		</div>
	</div>
</header>

<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="{{url('/')}}" class="txt19">Home</a>
			</li>
			<li class="t-center m-b-13">
				<a href="{{url('/all-wisata')}}" class="txt19">All Wisata</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{url('/about')}}" class="txt19">About</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{url('/kategori-wisata')}}" class="txt19">Kategori</a>
			</li>

        	<li class="t-center">
				<!-- Button3 -->
				<a href="{{url('/login')}}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Login
				</a>
			</li>
		</ul>	
	</aside>