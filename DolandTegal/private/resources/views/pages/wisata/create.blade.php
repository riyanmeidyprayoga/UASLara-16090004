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
                        <li class="active"><a href="{{asset('kategori')}}"><i class="fa fa-user"></i> Data Kategori</a></li>
                    </ol>
                </ul>
                <div class="clearfix" style="height:40px" ></div>
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
            <form action="{{ route('wisata.store') }}" method="POST" enctype="multipart/form-data"  data-parsley-validate>
                        @csrf
                        <div align="right" class="box-header with-border" >
                                <i class="fa fa-info-circle"></i> <i><b>(*)</b> harus diisi !</i>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="inputInstansi" class="col-sm-3 col-form-label" >Nama  Wisata</label>
                            <span >*</span>
                            <div class="col-sm-8">
                                <input name="nama_wisata" type="text" class="form-control" placeholder="masukan nama wisata" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_kategori" class="col-sm-3 col-form-label">Kategori</label>
                            <span >*</span>
                            <div class="col-sm-8">
                                <select name="id_kategori"  id="id_kategori" placeholder="pilih kategori" type="text" class="form-control">
                                    <?php foreach($data as $d) { ?>
                                    <option value="<?php echo $d->id ?>"><?php echo $d->nama_kategori ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputInstansi" class="col-sm-3 col-form-label">Lokasi</label>
                            <span >*</span>
                            <div class="col-sm-8">
                                <input name="lokasi" type="text" class="form-control"  placeholder="masukan lokasi">
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="inputInstansi" class="col-sm-3 col-form-label">Deskripsi</label>
                            <span >*</span>
                            <div class="col-sm-8">
                                <input name="deskripsi" type="text" class="form-control"placeholder="masukan deskripsi" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputInstansi" class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input">
                                </div>
                            </div>
                        </div>

                        
                       
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a type="button" href="{{ route('wisata.index') }}" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</a >
                        </div>
                    </form>
        </div>
    </div>
</div>
@stop