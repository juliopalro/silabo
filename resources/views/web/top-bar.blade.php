<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Silabo</li>
      <li {{{ (Request::is('/') ? 'class=active' : '') }}}>
        <a href="{{{ URL::to('/') }}}">Inicio</a>
      </li>
      <li {{{ (Request::is('teachers') ? 'class=active' : '') }}}>
        <a href="{{{ URL::to('/teachers') }}}">Profesores</a>
      </li>
      <li {{{ (Request::is('courses') ? 'class=active' : '') }}}>
        <a href="{{{ URL::to('/courses') }}}">Cursos</a>
      </li>
    </ul>
  </div>
</div>