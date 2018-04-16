@extends('admin.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/datatables_basic.js"></script>
@endsection
@section('content')
	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{base_url('superuser')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"><a href="#">Kuesioner</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Daftar Kuesioner</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
							<a href="{{base_url('superuser/kuesioner/create')}}"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-plus-circle2"></i></b> Tambah Kuesioner</button></a>
						</div>
						<table class="table table-striped datatable-basic table-lg table-responsive">
		                    <thead>
		                        <tr>
		                        	<th>No</th>
		                            <th>NIM/NBI/NIP</th>
		                            <th>Nama</th>
		                            <th>Instansi</th>
		                            <th class="text-center">Aksi</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($kuesioner as $key => $result)
		                         <tr>
		                        	<td align="center">{{($key+1)}}</td>
			                        <td style="width:300px;">
			                        	<a href="{{base_url('superuser/kuesioner/update/'.$result->id_kuesioner.'/'.seo($result->nama))}}">
			                        	{{$result->nim}}
			                        	</a><br>			                  
			                        </td>
			                        <td class="text-center">
			                        	<span class="text-size-small text-muted">
			                        		{{$result->nama}}
			                        	</span>
			                        </td>
			                        <td class="text-center">
			                        	<span class="text-size-small text-muted">
			                        		{{$result->instansi." - ".$result->jurusan}}
			                        	</span>
			                        </td>
			                        <td class="text-center">
			                           <div class="btn-group">
					                    	<button type="button" class="btn btn-danger btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Action <span class="caret"></span></button>
					                    	<ul class="dropdown-menu dropdown-menu-right">
												<li>
													<a href="{{base_url('superuser/kuesioner/update/'.$result->id_kuesioner)}}">
														<i class="fa fa-edit"></i> Ubah Kuesioner
													</a>
												</li>
												<li><a href="javascript:void(0)" onclick="deleteIt(this)" 
												data-url="{{base_url('superuser/kuesioner/deleted/'.$result->id_kuesioner)}}">
														<i class="fa fa-trash"></i> Hapus Kuesioner
													</a>
												</li>
											</ul>
										</div>
			                        </td>
		                        </tr>
		                        @endforeach
		                    </tbody>
		                </table>
					</div>
					<!-- /basic datatable -->					

				</div>
				<!-- /content area -->

			</div>
@endsection