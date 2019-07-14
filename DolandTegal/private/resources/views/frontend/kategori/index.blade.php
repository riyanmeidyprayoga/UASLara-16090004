
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
                KATEGORI WISATA
            </h2>
        </section>


        <!-- Kategori -->
        <section class="section-ourmenu bg2-pattern p-t-10 p-b-100" id="kategori">
            <div class="container">
                <div class="row">
                    @foreach($data as $row)
                    <div class="col-md-4 p-t-30">
                        <!-- Item our menu -->
                        <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                            <img src="{{ URL::to('/') }}/private/public/images/kategori/{{ $row->image }}" alt="IMG-MENU">

                            <!-- Button2 -->
                            <a href="{{ route('kategori-wisata.show', $row->id) }}" class="btn2 flex-c-m txt5 ab-c-m size6">
                            {{ $row->nama_kategori }}
                            </a>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            

            </div>
        </section>
		
		<!-- Footer -->
		@include('frontend.partials._footer')

		<!-- Script -->
		@include('frontend.partials._script')
	</body>
</html>
