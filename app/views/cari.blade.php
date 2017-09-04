@extends('master')

@section('head')

{{HTML::style('css/demo_table.min.css') }}
{{HTML::style('css/DT_bootstrap.min.css')}}
@stop

@section('side')
@include('sidebar')
@stop

@section('content')   
<section class="wrapper site-min-height">
	<div class="row">

		<div class="col-lg-4">
			<section class="panel">
				<header class="panel-heading">Pencarian</header>
				<div class="panel-body">
					{{ Form::open(array('url' => '/cari', 'class' => 'form-validation')) }}
					<div class="form-group">
						<div class="input-group bootstrap-timepicker">
							<input type="text" name='nama_prodi' class="form-control">
							<span class="input-group-btn">
								<button id="search" type="submit"  class="btn btn-info" type="button"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</div>
					{{Form::close()}}

					<div class="form-group">
						<div class="alert alert-success alert-block fade in">
							<p>Silahkan ketikkan nama prodi yang akan dicari</p>
						</div>
					</div>
					
					

				</div>
			</section>

		</div>
		<div class="col-lg-8">
			<section class="panel">
				<header class="panel-heading">
					Hasil Pencarian Universitas
				</header>
				<div class="panel-body">


					<div class="adv-table">

						<table id="example" class="table table-striped table-bordered"cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Universitas</th>
									<th>Nama Prodi</th>
									<th>Jenjang</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $a)
								<tr>
									<td><a href="{{ URL::to('univ')}}/{{$a->nama_singkat}}">  {{$a->nama_singkat}} </a></td>
									<td> {{$a->nama_prodi}} </td>
									<td> {{$a->jenjang}} </td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>


@stop

@section('js')
{{ HTML::script('js/jquery.dataTables.min.js') }}
{{ HTML::script('js/DT_bootstrap.js') }}


<script type="text/javascript" charset="utf-8">
$(document).ready(function() {

	// $('#search').click(function() {
	// 	// alert($('#nama_prodi').val());
	// 	var nama_prodi = $('#nama_prodi').val();
	// 	// alert(nama_prodi);
	// 	$.post("{{ URL::to('/prodi') }}", {nama_prodi: nama_prodi})
	// 	.done(function(result) {
			
	// 	})

	// });
	$('#example').dataTable( {
		"aaSorting": [[ 4, "asc" ]]
	} );
} );
</script>
@stop