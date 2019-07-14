
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
                ALL WISATA
            </h2>
        </section>

        <!-- Content page -->
        <section class="section-ourmenu bg2-pattern p-t-50 p-b-100" >
            <div class="container">
                <div class="row ">
                @foreach($data as $row)
                    <div class="col-md-6">
                       
                            <!-- Block4 -->
                            <div class="blo4 p-b-63">
                                <!-- - -->
                                <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative" >
                                    <a href="{{ route('all-wisata.show', $row->id) }}">
                                        <img src="{{ URL::to('/') }}/private/public/images/{{ $row->image }}" alt="IMG-BLOG" >
                                    </a>
                                </div>

                                <!-- - -->
                                <div class="text-blo4 p-t-33">
                                    <h4 class="p-b-16">
                                        <a href="{{ route('all-wisata.show', $row->id) }}" class="tit9">{{ $row->nama_wisata }}</a>
                                    </h4>

                                    <div class="txt32 flex-w p-b-24">
                                        <span>
                                            by Admin
                                            <span class="m-r-6 m-l-4">|</span>
                                        </span>

                                        <span>
                                        {{ $row->updated_at }}
                                        </span>

                                    </div>

                                    <a href="{{ route('all-wisata.show', $row->id) }}" class="txt4">
                                        Continue Reading
                                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                       
                    </div>
                    @endforeach 
                </div>
                {!! $data->links() !!}
            </div>
        </section>

        
		
		<!-- Footer -->
		@include('frontend.partials._footer')

		<!-- Script -->
		@include('frontend.partials._script')
	</body>
</html>
