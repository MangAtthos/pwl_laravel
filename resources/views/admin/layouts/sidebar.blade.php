<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <div class="sidebar-brand">
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('themeadmin/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"/>
      <span class="brand-text fw-light">AdminLTE 4</span>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" data-accordion="false">

        <!-- Dashboard -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Dashboard <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link active"><i class="nav-icon bi bi-circle"></i><p>Dashboard v1</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Dashboard v2</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Dashboard v3</p></a></li>
          </ul>
        </li>

        <!-- Widgets -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-box-seam-fill"></i>
            <p>Widgets <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Small Box</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Info Box</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Cards</p></a></li>
          </ul>
        </li>

        <li class="nav-header">EXAMPLES</li>
        <!-- Auth -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-box-arrow-in-right"></i>
            <p>Auth <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Login</p></a></li>
            <li class="nav-item"><a href="{{ url('/register') }}" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Register</p></a></li>
          </ul>
        </li>

        <li class="nav-header">LABELS</li>
        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle text-danger"></i><p>Important</p></a></li>
        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle text-warning"></i><p>Warning</p></a></li>
        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle text-info"></i><p>Informational</p></a></li>

      </ul>
    </nav>
  </div>
</aside>