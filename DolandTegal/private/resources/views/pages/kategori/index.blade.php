@extends('templates.default')
@section('main')
<div class="row">          
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <div class="col-md-2">
                    <h2>DATA KATEGORI</h2>
                </div>
                <div class="col-md-2">
                    <div class="col-5">
                        <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm"><span class="fa fa-plus"></span> Tambah Kategori</a>
                    </div>
                </div>
                <ul class="nav navbar-right">
                    <ol class="breadcrumb">
                        <li><a href="{{asset('/beranda')}}"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="active"><a href="{{asset('wisata')}}"><i class="fa fa-plane"></i> Data Wisata</a></li>
                        <li class="active"><a href="{{asset('kategori')}}"><i class="fa fa-user"></i> Data Kategori</a></li>
                    </ol>
                </ul>
                <div class="clearfix" style="height:40px" ></div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
            @endif
                <table id="datatable" class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                        <th class="column-title ">Image </th>
                        <th class="column-title ">Nama Kategori</th>
                        <th class="column-title no-link last text-center"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row)
                        <tr class="even pointer">
                        <td><img src="{{ URL::to('/') }}/private/public/images/kategori/{{ $row->image }}" class="img-thumbnail" width="100" /></td>
                        <td>{{ $row->nama_kategori }}</td>
						
                        <td align="center" ><form action="{{ route('kategori.destroy', $row->id) }}" method="post" >
                                
                                @csrf
                                @method('DELETE')
                                <button id="delete" type="submit" class="btn btn-danger btn-xs ">
								<i class="fa fa-trash-o"></i></button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
				{!! $data->links() !!}

            </div>
			
        </div>
		
    </div>
	
</div>

@stop