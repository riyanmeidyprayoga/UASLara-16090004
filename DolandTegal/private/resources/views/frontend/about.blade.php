
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doland Tegal</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		@include('frontend.partials._link')
	</head>
	<body class="animsition">
		<!-- Header -->
		@include('frontend.partials._header')

		<!-- Title Page -->
        <section class="bg-title-page flex-c-m  p-t-100 p-b-50  p-l-15 p-r-15" style="background-image: url({{asset('public/assetfrontend/images/bgab.jpg')}});">
            <h2 class="tit6 t-center">
                About Us
            </h2>
        </section>


        <!-- Our Story -->
        <section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
            <span class="tit2 t-center">
                Doland Tegal
            </span>

            <h3 class="tit3 t-center m-b-35 m-t-5">
                Pariwisata
            </h3>

            <p class="t-center size40 m-l-r-auto">
                Doland Tegal adalah sistem informasi berbasis website yang digunakan untuk memberikan informasi kepada pengunjung tentang website “Do Land Tegal” serta untuk memudahkan  para wisatawan masyarakat itu sendiri baik luar kota maupun luar negri yang ingin berwisata ke Tegal.
            </p>
        </section>
		
		<!-- Footer -->
		@include('frontend.partials._footer')

		<!-- Script -->
		@include('frontend.partials._script')
	</body>
</html>
