@extends('master')

@section('head')

{{HTML::style('css/demo_table.min.css') }}
{{HTML::style('css/DT_bootstrap.css')}}

@stop

@section('side')
@include('sidebar')
@stop


@section('content')   
<section class="wrapper">
  <div class="row">

    <aside class="profile-nav col-lg-3">
      <section class="panel">
        <div class="user-heading round">
          <a href="#">
            <img src="{{ Asset('img/'.$info->nama_singkat.'_i.jpg') }}" alt="">
          </a>
          <h1>{{$info->nama_singkat}}</h1>
          <p>{{$info->nama_lengkap}}</p>
        </div>

        <ul class="nav nav-pills nav-stacked">
          <li ><a href="{{ URL::to('http://'.$info->web)}}" target="blank"><i class="fa fa-cloud"></i> {{$info->web}}</a></li> 
          <li><a><i class="fa fa-envelope"></i>{{$info->email}}</a> {{-- <span class="label label-danger pull-right r-activity">9</span> --}}</li>
          <li><a><i class="fa fa-phone"></i> {{$info->telp}}</a></li>
        </ul>

      </section>
    </aside>

    <aside class="profile-info col-lg-9"> 
      <section class="panel">
        <header class="panel-heading"><div class="pull-right"><i class="fa fa-map-signs"></i> Peta lokasi {{$info->nama_lengkap}}</div>
          <button class="btn btn-primary btn-xs" data-toggle="modal" href="#myModal">Bagikan</button>
          
        </header>
        <div class="panel-body-map">
          <div id="gmap_basic" class="gmaps"></div>

          {{Form::open(array('url'=>'/direksi','method'=>'post'))}}
          <div class="infowindow">
            <div class="panel">
             <div class="panel-body">
              {{$info->alamat}}
              <input type="hidden" name="poslat" id="poslat" value="">
              <input type="hidden" name="poslng" id="poslng" value="">
              <input type="hidden" name="centerlat" id="centerlat" value="">
              <input type="hidden" name="centerlng" id="centerlng" value="">
              <button type="submit" class="btn btn-primary btn-xs" id="direksi">Arahkan</button>
            </div>
          </div>
          {{Form::close()}}
        </div>
        <div id="gmap_marker" class="gmaps_profile"></div>
      </div>
    </section>

    <section class="panel">
      <header class="panel-heading">
        Daftar Prodi {{$info->nama_singkat}}
      </header>
      <div class="panel-body">
        <div class="adv-table">
          <table  class="display table table-bordered table-striped" id="example">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Prodi</th>
                <th>Jenjang</th>
              </tr>
            </thead>
            <tbody>
              <?php $c=1; ?>
              @foreach($prodi as $p)
              <tr>
                <td>{{$c}}</td>
                <td>{{$p->nama_prodi}}</td>
                <td>{{$p->jenjang}}</td>
              </tr>
              <?php $c++; ?>
              @endforeach
            </tbody>

          </table>
        </div>
      </div>
    </section>


  </aside>
</div>
</section>

<section class="panel">
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Bagikan Lewat Social Media</h4>
        </div>
        <div class="modal-body ">
          <ul class="summary-list">
            <li>
              <a href="{{ URL::to('https://www.facebook.com/sharer/sharer.php?u='.$info->share)}}" target="_blank">
                <i class="fa fa-facebook-official text-info"></i>
                Facebook
              </a>
            </li>
            <li>
              <a href="{{ URL::to('https://twitter.com/home?status='.$info->share)}}" target="_blank">
                <i class=" fa fa-twitter text-primary"></i>
                Twitter
              </a>
            </li>
            <li>
              <a href="{{ URL::to('https://plus.google.com/share?url='.$info->share)}}" target="_blank">
                <i class="fa fa-google-plus text-danger"></i>
                Google+
              </a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
</section>

@stop

@section('js')

{{ HTML::script('js/jquery.dataTables.min.js') }}
{{ HTML::script('js/DT_bootstrap.min.js') }}

<script>
var la = {{$info->lo}};
var lo = {{$info->la}};
var center;
var pos;

$(document).ready(function() {
  $('#example').dataTable( {
    "aaSorting": [[ 4, "asc" ]]
  } );
} );

function initMap() {
  center = {lat: la, lng: lo};
  var map = new google.maps.Map(document.getElementById('gmap_marker'), {
    zoom: 12,
    center: center,
    zoomControl: false,
    mapTypeControl: false,
    scaleControl: false,
    streetViewControl: false,
    rotateControl: false
  });

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      var marker1 = new google.maps.Marker({
        position: pos,
        map: map,
        icon:'../img/me.png'
      });

      var marker2 = new google.maps.Marker({
        position: center,
        map: map,
        icon:'../img/pin.png'
      });
      document.getElementById('poslat').value = pos['lat'];
      document.getElementById('poslng').value = pos['lng'];
      document.getElementById('centerlat').value = center['lat']; 
      document.getElementById('centerlng').value = center['lng'];     
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
  // var contentString = 
  // '<article class="media">'+
  // '<div class="media-body">'+
  // '<a class=" p-head" href="#">Alamat</a>'+
  // '<p>{{$info->alamat}}</p>'+
  // '</div>'+
  // '</article>';

  // var infowindow = new google.maps.InfoWindow({
  //   content: contentString
  // });


  // marker.addListener('click', function() {
  //   infowindow.open(map, marker);
  // });
}


</script>
<script async defer type ="text/javascript"  src="http://maps.google.com/maps/api/js?key=AIzaSyCciL_tEsRSA_aBsWcEsIB6ZNN0RSf8ueg&signed_in=true&callback=initMap"></script>





@stop