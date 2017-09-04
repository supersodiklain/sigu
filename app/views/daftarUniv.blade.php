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
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          Daftar Universitas
        </header>
        <div class="panel-body">
          <div class="adv-table">
            <table  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Universitas</th>
                  <th>Nama Singkatan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $a)
                <tr>
                  <td> {{$a->id}} </td>
                  <td><a href="{{ URL::to('univ')}}/{{$a->nama_singkat}}"> {{$a->nama_lengkap}}</a> </td>
                  <td> {{$a->nama_singkat}} </td>
                  <td> {{$a->status}} </td>
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
{{ HTML::script('js/DT_bootstrap.min.js') }}


<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
  $('#example').dataTable( {
    "aaSorting": [[ 4, "asc" ]]
  } );
} );
</script>
@stop