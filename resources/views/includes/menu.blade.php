
<div class="panel panel-primary">
  <div class="panel-heading">Menú</div>
  <div class="panel-body"> 
      <ul class="nav nav-pills nav-stacked">
      @if (auth()->check())
        <li @if(request()->is('maptable')) class="active" @endif>
          <a href="{{ url('maptable') }}">Datos
          </a>
        </li>
        <li @if(request()->is('map')) class="active" @endif>
          <a href="{{ url('map') }}">Mapa
          </a>
        </li>
<!--          <li @if(request()->is('home')) class="active" @endif>
          <a href="{{ url('home') }}">Datos y Mapa</a>
        </li> -->
      @else
        <li><a href="">Bienvenido</a></li>
        <li><a href="Instrucciones">Instrucciones</a></li>
        <li><a href="Acerca-de">Créditos</a></li>

      @endif
      </ul>
  </div>
</div>


