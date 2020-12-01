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

      <li class="menu-header">{{ __('user management') }}</li>
      <li class="nav-item dropdown {{ Request::is('admin/user') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>{{ __('User') }}</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link {{ Request::is('admin/user') ? 'active' : '' }}"
              href="{{ route('admin.user') }}">{{__('Manage User')}}</a>
          </li>
          <li><a class="nav-link " href="#">{{ __('Manage Report') }}</a></li>
        </ul>
      </li>

      <li class="menu-header">{{ __('Pages') }}</li>
      <li class="nav-item dropdown ">
        <a href="{{ route('admin.user') }}" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
          <span>{{ __('Page') }}</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link " href="#">{{ __('Add New Page') }}</a></li>
          <li><a class="nav-link " href="#">{{ __('Manage Page') }}</a></li>
        </ul>
      </li>
      <li>
        <a class="nav-link" href="{{ route('admin.logout') }}">
          <i class="fas fa-sign-out-alt"></i>
          <span>{{ __('Logout') }}</span></a></li>
    </ul>
  </aside>
</div>
