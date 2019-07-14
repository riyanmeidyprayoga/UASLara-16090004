@extends('templates.default')
@section('main')
<div class="row">          
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>DATA USER</h2>
                <ul class="nav navbar-right">
                    <ol class="breadcrumb">
                    <li><a href="{{asset('/beranda')}}"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="active"><a href="{{asset('wisata')}}"><i class="fa fa-plane"></i> Data Wisata</a></li>
                        <li class="active"><a href="{{asset('user')}}"><i class="fa fa-user"></i> Data User</a></li>
                    </ol>
                </ul>
                <div class="clearfix"></div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
            @endif
            <div class="x_content">
                <div class="col-4">
                    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm"><span class="fa fa-plus"></span> Tambah User</a>
                    <div class="pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div> 
            </div>
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                        <th class="column-title ">Nama </th>
                        <th class="column-title ">Email</th>
                        <th class="column-title ">Password </th>
						<th class="column-title ">Jenis Kelamin </th>
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
                        <td>{{ $row->nama }}</td>
						<td>{{ $row->email }}</td>
                        <td>{{ $row->password }}</td>
						<td>{{ $row->jenis_kelamin }}</td>
                    
                    
                        <td align="center" ><form action="{{ route('user.destroy', $row->id) }}" method="post" >
                                
                                <a href="{{ route('user.edit', $row->id) }}" class="btn btn-warning btn-xs">
								<i class="fa fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-xs">
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