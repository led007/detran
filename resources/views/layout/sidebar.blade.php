
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img id="logo-user" class="app-sidebar__user-avatar" src="/assets/img/user.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Lucas Eduardo</p>
          <p class="app-sidebar__user-designation">Service Desk 1A</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item {{ request()->is('/*') ? 'active' : '' }}" href="/"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item {{ request()->is('chamados*') ? 'active' : '' }}" href="/chamados"><i class="app-menu__icon fa-solid fa-ticket"></i><span class="app-menu__label">Registro de Chamados</span></a></li>
        <li><a class="app-menu__item {{ request()->is('usuarios*') ? 'active' : '' }}" href="/usuarios"><i class="app-menu__icon fa-solid fa-users"></i><span class="app-menu__label">Usuários</span></a></li>
        <li><a class="app-menu__item {{ request()->is('relatorios*') ? 'active' : '' }}" href="/relatorios"><i class="app-menu__icon fa-solid fa-file-lines"></i><span class="app-menu__label">Relatórios</span></a></li>
      </ul>
    </aside>