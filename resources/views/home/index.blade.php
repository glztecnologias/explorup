<?php $seccion = 'home'; ?>
@extends('layouts/master')
@section('titulo','   Inicio')
@section('contenido')
<!-- Slider Container -->
<div class="ui fluid container slider">
  <div class="owl-carousel" id="single-slider">
      <div class="item"><img src="assets/img/1000x400.png"></div>
      <div class="item"><img src="assets/img/1000x400.png"></div>
      <div class="item"><img src="assets/img/1000x400.png"></div>
      <div class="item"><img src="assets/img/1000x400.png"></div>
  </div>
</div>

<div class="ui segment" style="height:auto;z-index:10;position:relative;margin-left: 50px;margin-right: 50px;top:-100px;">
  <div class="item">
        <div class="ui action left icon input">
          <i class="search icon"></i>
          <input type="text" placeholder="Ingresa Direccion...">
          <button class="blue ui button">Buscar</button>
        </div>
          <button class="blue ui button">Localizarme & Buscar <i class="marker icon"></i></button>
  </div>

</div>

<!-- Content area -->
<div class="section one">
  <div class="ui container">
    <h1>About this Project</h1>
    <p><b>Moderns Template</b> adalah free template siap pakai yang saya buat untuk di pakai, di modifikasi, dan di share kepada siapapun tetapi dengan tetap menyertakan alamat dan pembuat asli dari template ini yaitu saya sendiri di dalam file index, license, atau lainnya. Semoga template ini dapat berguna untuk anda sekalian. Terima kasih karena telah menggunakan template ini.</p>
    <blockquote><h3>"Berkarya, Bersama, Berjaya"</h3></blockquote>
  </div>
</div>
<div class="ui divider"></div>
<div class="section two">
  <div class="ui container">
    <h1>Feature</h1>
    <div class="ui four column stackable doubling grid">
      <div class="column">
        <div class="ui segment">
          <h2 class="ui icon header">
            <i class="lab icon"></i>
            <div class="content">
              Base in Semantic UI
              <div class="sub header">
                Template ini dibuat dengan core dari framework CSS Semantic-UI
              </div>
            </div>
          </h2>
        </div>
      </div>
      <div class="column">
        <div class="ui segment">
          <h2 class="ui icon header">
            <i class="block layout icon"></i>
            <div class="content">
              Griding System
              <div class="sub header">
                Template responsive dan akan menyesuaikan dengan ukuran device
              </div>
            </div>
          </h2>
        </div>
      </div>
      <div class="column">
        <div class="ui segment">
          <h2 class="ui icon header">
            <i class="puzzle icon"></i>
            <div class="content">
              Interactive
              <div class="sub header">
                Menggunakan plugin-plugin base JQuery seperti Owl Carousel.
              </div>
            </div>
          </h2>
        </div>
      </div>
      <div class="column">
        <div class="ui segment">
          <h2 class="ui icon header">
            <i class="fork icon"></i>
            <div class="content">
              Fork Github
              <div class="sub header">
                Anda dapat berkontribusi mengembangkan template ini untuk di jadikan template Wordpress, Bloger dll.
              </div>
            </div>
          </h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="ui hidden divider"></div>
<div class="section three">
  <div class="ui container">
    <h1><i class="fork icon"></i> Contribute this Project</h1>
    <a href="https://github.com/muhibbudins/moderns" target="_blank" class="ui massive inverted button">Download Now!</a>
  </div>
</div>
<div class="ui hidden divider"></div>
<div class="section four">
  <div class="ui container">
    <h1>Our Client</h1>
    <!-- Slider Container -->
    <div class="ui container">
      <div class="ui centered stackable doubling grid">
        <div class="ten wide column">
          <div class="owl-carousel" id="multiple-slider">
              <div class="item"><img src="assets/img/400x400.png"></div>
              <div class="item"><img src="assets/img/400x400.png"></div>
              <div class="item"><img src="assets/img/400x400.png"></div>
              <div class="item"><img src="assets/img/400x400.png"></div>
              <div class="item"><img src="assets/img/400x400.png"></div>
              <div class="item"><img src="assets/img/400x400.png"></div>
              <div class="item"><img src="assets/img/400x400.png"></div>
              <div class="item"><img src="assets/img/400x400.png"></div>
              <div class="item"><img src="assets/img/400x400.png"></div>
              <div class="item"><img src="assets/img/400x400.png"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
