
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
        <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{ URL::to('/') }}/private/public/images/{{ $data->image }});">
            <h2 class="tit6 t-center">
            {{ $data->nama_wisata }}
            </h2>
        </section>


        <!-- Content page -->
        <section>
            <div class="bread-crumb bo5-b p-t-17 p-b-17">
                <div class="container">
                    <a href="{{url('/')}}" class="txt27">
                        Home
                    </a>
                    <span class="txt29 m-l-10 m-r-10">/</span>

                    <span class="txt29">
                    {{ $data->nama_wisata }}
                    </span>
                </div>
            </div>

            <div class="container">
                <div class="row ">
                    <div class="col-md-8 col-lg-7">
                        <div class="p-t-50 p-b-50 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
                            <!-- Block4 -->
                            <div class="blo4 p-b-63">
                                <!-- - -->
                                <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
                                    <a href="#">
                                        <img src="{{ URL::to('/') }}/private/public/images/{{ $data->image }}" alt="IMG-BLOG">
                                    </a>
                                </div>

                                <!-- - -->
                                <!-- <div class="text-blo4 p-t-33">
                                    <h4 class="p-b-16">
                                        <a class="tit9">{{ $data->nama_wisata }}</a>
                                    </h4>

                                    <div class="txt32 flex-w p-b-24">
                                        <span>
                                            by Admin
                                            <span class="m-r-6 m-l-4">|</span>
                                        </span>

                                        <span>
                                        {{ $data->updated_at }}
                                    
                                        </span>

                                    
                                    </div>

                                    <p>{{ $data->deskripsi }}</p>
                                </div> -->
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-lg-5">
                        <div class="sidebar2 p-t-50 p-b-50p-l-50 p-l-0-md p-t-0-md">
                            <!-- Categories -->
                            <!-- - -->
                            <div class="text-blo4 p-t-5">
                                    <h4 class="p-b-16">
                                        <a class="tit9">{{ $data->nama_wisata }}</a>
                                    </h4>

                                    <div class="txt32 flex-w p-b-24">
                                        <span>
                                            by Admin
                                            <span class="m-r-6 m-l-4">|</span>
                                        </span>

                                        <span>
                                        {{ $data->updated_at }}
                                    
                                        </span>

                                    
                                    </div>

                                    <p>{{ $data->deskripsi }}</p>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

		
		<!-- Footer -->
		@include('frontend.partials._footer')

		<!-- Script -->
		@include('frontend.partials._script')
	</body>
</html>
