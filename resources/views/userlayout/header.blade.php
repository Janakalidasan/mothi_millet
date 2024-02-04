<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">    <img src="{{ url('assets\images\mothilogo.png') }}" style="width:70px" alt="logo" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{url('home-page')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="{{url('about-page')}}" aria-disabled="true">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('orderdashboard')}}" aria-disabled="true">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-disabled="true" href=""></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
    <div class="input-group">
        <span class="input-group-text" id="basic-addon1">
        <i class="menu-icon mdi mdi-magnify"></i>
        </span>
        <input class="form-control me-2" type="search" style="font-size:10px;" placeholder="What are you looking for?" aria-label="Search">
    </div>
    <div class="items">
    <a href="{{url('profile-pa')}}" ><i class="far fa-heart"></i></a>
    <a href="{{ url('chartview') }}">
    <div class="cart-icon-container">
        <i class="fa fa-shopping-cart"></i>
        <span class="cart-count">{{ session('chartcount') }}</span>
    </div>
</a>

    <a href="{{url('profile-page')}}" title=" {{ session('userName') }}"><i class="far fa-user" ></i>
  
  </a>
  <a href="{{ route('logout') }}" title="Logout">
    <i class="fas fa-sign-out-alt"></i>
</a>
    </div>
    
</form>

    </div>
  </div>
</nav>