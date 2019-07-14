@extends('templates/default')
@section('main')
<div class="x_panel">
    <div class="x_title">
        <div class="col-md-6">
            <h3>Selamat Datang, Riyan Meidy Prayoga</h3>
        </div>
        <ul class="nav navbar-right">
            <ol class="breadcrumb">
                <li><a href="{{asset('beranda')}}"><i class="fa fa-home"></i> Beranda</a></li>
                <li class="active"><a href="{{asset('wisata')}}"><i class="fa fa-plane"></i> Data Wisata</a></li>
                <li class="active"><a href="{{asset('kategori')}}"><i class="fa fa-user"></i> Data Kategori</a></li>
            </ol>
        </ul>
        <div class="clearfix" style="height:40px"></div>
    </div>
    <!-- page content -->
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>All Wisata </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">

            <div class="row">
                @foreach($data as $row)
                <div class="col-md-55">
                <div class="thumbnail">
                    <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="{{ URL::to('/') }}/private/public/images/{{ $row->image }}" alt="image" />
                    <div class="mask">
                        <p>{{ $row->nama_wisata }}</p>
                        <div class="tools tools-bottom">
                        </div>
                    </div>
                    </div>
                    <div class="caption">
                    <p>{{ $row->nama_wisata }}</p>
                    </div>
                </div>
                </div>
                @endforeach
                {!! $data->links() !!}
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- /page content -->
</div>
@stop
	