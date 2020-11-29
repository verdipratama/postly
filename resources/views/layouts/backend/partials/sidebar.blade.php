<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ route('dashboard') }}">{{ __('Admin Area') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="#">A</a>
    </div>
    <ul class="sidebar-menu">
      <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a class="nav-link"
          href="{{ route('dashboard') }}"><i class="fas fa-fire"></i>
          <span>{{ __('Dashboard') }}</span></a>
      </li>

      <li class="menu-header">user management</li>
      <li class="nav-item dropdown {{ Request::is('admin/user') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Pengguna</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link {{ Request::is('admin/user') ? 'active' : '' }}"
              href="{{ route('admin.user') }}">Manage
              Pengguna</a>
          </li>
          <li><a class="nav-link " href="#">Manage Reports</a></li>
        </ul>
      </li>

      <li class="menu-header">Pages</li>
      <li class="nav-item dropdown ">
        <a href="{{ route('admin.user') }}" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
          <span>Page</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link " href="#">Add New Page</a></li>
          <li><a class="nav-link " href="#">Manage Page</a></li>
        </ul>
      </li>
      <li>
        <a class="nav-link" href="{{ route('admin.logout') }}">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a></li>
    </ul>
  </aside>
</div>
