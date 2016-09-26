<?php $seccion = 'aventuras'; ?>
@extends('layouts/master_map')
@section('titulo','Aventuras')
@section('contenido')
<!-- Slider Container -->

  <div class="ui two column stackable grid" style="height:100%;">
    <div class="ten wide column map">
      <div class="ui segment" style="margin-left:5px;">Filtros</div>
      <div class="ui segment" style="height:88%;margin-left:5px;" id="divMap"></div>

    </div>
    <div class="six wide column info_map">
      <div class="ui segment" style="height:auto;">
        <div class="ui styled fluid accordion">
  <div class="title active">
    <i class="dropdown icon"></i>
    What is a dog?
  </div>
  <div class="content active">
    <p class="transition visible" style="">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
  </div>
  <div class="title">
    <i class="dropdown icon"></i>
    What kinds of dogs are there?
  </div>
  <div class="content">
    <p>There are many breeds of dogs. Each breed varies in size and temperament. Owners often select a breed of dog that they find to be compatible with their own lifestyle and desires from a companion.</p>
  </div>
  <div class="title">
    <i class="dropdown icon"></i>
    How do you acquire a dog?
  </div>
  <div class="content">
    <p>Three common ways for a prospective owner to acquire a dog is from pet shops, private owners, or shelters.</p>
    <p>A pet shop may be the most convenient way to buy a dog. Buying a dog from a private owner allows you to assess the pedigree and upbringing of your dog before choosing to take it home. Lastly, finding your dog from a shelter, helps give a good home to a dog who may not find one so readily.</p>
  </div>
</div>
      </div>
    </div>
  </div>
  <script>
		var mymap = L.map('divMap').setView([-33.449, -70.669], 10);
		L.tileLayer('http://korona.geog.uni-heidelberg.de/tiles/roads/x={x}&y={y}&z={z}', {
			maxZoom: 18,
			attribution: 'ExplorUp &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
		}).addTo(mymap);


		L.marker([-33.449, -70.669]).addTo(mymap)
			.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

		var popup = L.popup();

	/**	function onMapClick(e) {
			popup
				.setLatLng(e.latlng)
				.setContent("You clicked the map at " + e.latlng.toString())
				.openOn(mymap);
		}

		mymap.on('click', onMapClick);**/
  </script>

@endsection
