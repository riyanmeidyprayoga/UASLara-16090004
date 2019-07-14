@extends('templates.default')
@section('main')
<div class="row">          
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <div class="col-md-2">
                    <h2>DATA LOG AKTIVITAS</h2>
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
            
                <table id="datatable" class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                        <th class="column-title ">Id User </th>
                        <th class="column-title ">Aktivitas</th>
                        <th class="column-title ">Tanggal</th>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row)
                        <tr class="even pointer">
                
                        <td>{{ $row->id_user }}</td>
                        <td>{{ $row->act }}</td>
                        <td>{{ $row->created_at}}</td>
						
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