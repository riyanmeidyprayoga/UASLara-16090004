<section class="section-blog bg-white p-t-20 p-b-100">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
                <span class="tit2 t-center">
					New
				</span>
				<h3 class="tit5 t-center m-t-2">
					Upload Wisata
				</h3>
			</div>

			<div class="row">
				@foreach($data as $row)
				<div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="{{ route('all-wisata.show', $row->id) }}"><img src="{{ URL::to('/') }}/private/public/images/{{ $row->image }}" alt="IMG-INTRO"></a>

							<div class="time-blog">
							{{ $row->updated_at }}
							</div>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="{{ route('all-wisata.show', $row->id) }}"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
							{{ $row->nama_wisata }}
							</h4></a>

							<p class="m-b-20">{{ str_limit($row->deskripsi , 200 , ' ...') }}</p>

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