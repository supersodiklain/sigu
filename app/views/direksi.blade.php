@extends('master')

@section('side')
@include('sidebar')
@stop

@section('content')   
<section class="wrapper">

  <section class="panel">
    <header class="panel-heading">Jalur<div class="pull-right"><i class="fa fa-map-signs"></i></div>
    </header>

    <div class="panel-body-map">
      <div id="gmap_basic" class="gmaps"></div>

      <div class="infowindow">
        <div class="panel">
         <div class="panel-body">
          KARANGMALANG 
        </div>
      </div>
    </div>

    <div id="gmap_marker" class="gmaps_profile"></div>
    
  </div>
</section>
<section class="panel">
  <header class="panel-heading">
    Arahan
    <span class="tools pull-right">
      <a class="fa fa-chevron-down" href="javascript:;"></a>
      <a class="fa fa-times" href="javascript:;"></a>
    </span>
  </header>
  <div class="panel-body">
    <div id="right-panel"></div>
  </div>
</section>

</section>
@stop

@section('js')



<script type="text/javascript">
// alert({{$melat}}+","+{{$melng}})
function initMap() {
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var directionsService = new google.maps.DirectionsService;
  var map = new google.maps.Map(document.getElementById('gmap_marker'), {
    zoom: 7,
    center: {lat: 41.85, lng: -87.65}
  });
  
  $('#tombol').click(function() {
    
  });
  google.maps.event.addListenerOnce(map, 'idle', function(){
      window.setTimeout(function() {
        calculateAndDisplayRoute(directionsService, directionsDisplay, map);
      },0);
    });
  document.getElementById('start').addEventListener('change', onChangeHandler);
  document.getElementById('end').addEventListener('change', onChangeHandler);
}

function calculateAndDisplayRoute(directionsService, directionsDisplay, map) {
  var pos = {lat: -7.775828, lng: 110.383972};
  var start = {{$melat}}+","+{{$melng}};
  var end = {{$goallat}}+","+{{$goallng}};
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById('right-panel'));

  //var control = document.getElementById('floating-panel');
  //control.style.display = 'block';
  //map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
  directionsService.route({
    origin: start,
    destination: end,
    travelMode: google.maps.TravelMode.DRIVING
  }, function(response, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}

</script>

<script async defer type ="text/javascript"  src="http://maps.google.com/maps/api/js?key=AIzaSyCciL_tEsRSA_aBsWcEsIB6ZNN0RSf8ueg&signed_in=true&callback=initMap"></script>





@stop