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
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data"  data-parsley-validate>
                        @csrf
                        <div align="right" class="box-header with-border" >
                            <i class="fa fa-info-circle"></i> <i><b>(*)</b> harus diisi !</i>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="inputInstansi" class="col-sm-3 col-form-label" >Nama </label>
                            <span >*</span>
                            <div class="col-sm-8">
                                <input name="nama" type="text" class="form-control" placeholder="masukan nama lengkap" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputInstansi" class="col-sm-3 col-form-label" >Email </label>
                            <span >*</span>
                            <div class="col-sm-8">
                                <input name="email" type="text" class="form-control" placeholder="masukan email" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputInstansi" class="col-sm-3 col-form-label" >Password </label>
                            <span >*</span>
                            <div class="col-sm-8">
                                <input name="password" type="password" class="form-control" placeholder="masukan password" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="editStatus" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <span >*</span>
                            <div class="col-sm-8">
                                <select name="jenis_kelamin" type="text" class="form-control">
                                    <option value="">-- Pilih Jenis Kelamin--</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a type="button" href="{{ route('user.index') }}" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</a >
                        </div>
                    </form>
        </div>
    </div>
</div>
@stop