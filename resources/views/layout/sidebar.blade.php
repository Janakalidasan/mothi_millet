<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <br>
    <li class="nav-item ">
      <a class="nav-link" href="{{ url('dashboard') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-store"></i>

        <span class="menu-title">Product</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="basic-ui">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#add-products" aria-expanded="false"
              aria-controls="add-products">
              <i class="menu-icon mdi mdi-store"></i>
              <span class="menu-title">Add Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="add-products">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('productone') }}">Cookies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('producttwo') }}">Powder</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('category') }}">Categories</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ url('/aboutrating') }}">
        <i class="menu-icon mdi mdi-account-search"></i>
        <span class="menu-title">Rating About</span>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ url('/customers') }}">
        <i class="menu-icon mdi mdi-account-search"></i>
        <span class="menu-title">Customers</span>
      </a>
    </li>
    <!-- <li class="nav-item ">
      <a class="nav-link" href="{{ url('/tables/basic-table') }}">
        <i class="menu-icon mdi mdi-table-large"></i>
        <span class="menu-title">Tables</span>
      </a>
    </li> -->
    <!-- <li class="nav-item ">
      <a class="nav-link" href="{{ url('/icons/material') }}">
        <i class="menu-icon mdi mdi-emoticon"></i>
        <span class="menu-title">Icons</span>
      </a>
    </li> -->
    <!-- <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>
          </li>
        </ul>
      </div>
    </li> -->
    <!-- <li class="nav-item">
      <a class="nav-link" href="https://www.bootstrapdash.com/demo/star-laravel-free/documentation/documentation.html"
        target="_blank">
        <i class="menu-icon mdi mdi-file-outline"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li> -->
  </ul>
</nav>