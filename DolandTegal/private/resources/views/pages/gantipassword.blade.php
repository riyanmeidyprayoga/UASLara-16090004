@extends('templates/default')
@section('main')
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>GANTI PASSWORD</h2>
            <ul class="nav navbar-right">
                <ol class="breadcrumb">
                    <li><a href="{{asset('/beranda')}}"><i class="fa fa-home"></i> Beranda</a></li>
                    <li class="active"><a href="{{asset('wisata')}}"><i class="fa fa-plane"></i> Data Wisata</a></li>
                    <li class="active"><a href="{{asset('user')}}"><i class="fa fa-user"></i> Data User</a></li>
                </ol>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- top tiles -->
                <div>
                    <form>
                    
                    <div class="form-group row">
                        <label for="inputInstansi" class="col-sm-3 col-form-label">Password Lama</label>
                        <div class="col-sm-8">
                            <input name="projek" type="text" class="form-control" id="inputProjek" placeholder="masukan password lama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editStatus" class="col-sm-3 col-form-label">Password Baru</label>
                        <div class="col-sm-8">
                            <input name="projek" type="text" class="form-control" id="inputProjek" placeholder="masukan passworrd baru">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="inputMulai" class="col-sm-3 col-form-label">Ulangi Password Baru</label>
                        <div class="col-sm-8">
                            <input name="mulai" type="text" class="form-control" id="inputMulai" placeholder="masukan kembali password baru">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
                    </form>
                </div>
                
            
            <!-- /top tiles -->
            
    </div>
</div>
@stop
	