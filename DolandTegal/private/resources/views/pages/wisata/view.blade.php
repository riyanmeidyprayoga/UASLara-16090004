@extends('templates.default')
@section('main')
<div class="row">          
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>DATA WISATA</h2>
                <ul class="nav navbar-right">
                    <ol class="breadcrumb">
                    <li><a href="{{asset('/beranda')}}"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="active"><a href="{{asset('wisata')}}"><i class="fa fa-plane"></i> Data Wisata</a></li>
                        <li class="active"><a href="{{asset('user')}}"><i class="fa fa-user"></i> Data User</a></li>
                    </ol>
                </ul>
                <div class="clearfix"></div>
            </div>
           
            <div class="jumbotron text-center">
                
                <img src="{{ URL::to('/') }}/private/public/images/{{ $data->image }}" class="img-thumbnail" />
                <h3>Nama Wisata :</h3>
				<h2>{{ $data->nama_wisata }} </h2>
				<h3>Kategori :</h3>
				<h2>{{ $data->id_kategori }}</h2>
				<h3>Lokasi :</h3>
                <h2>{{ $data->lokasi }}</h2>
				<h3>Deskripsi :</h3>
				<h2>{{ $data->deskripsi }}</h2>
				<div align="right">
                    <a href="{{ route('wisata.index') }}" class="btn btn-default">Back</a>
                </div>
                <br />
            </div>
            
        </div>
    </div>
</div>
@stop
    
