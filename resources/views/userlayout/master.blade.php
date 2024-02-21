<!DOCTYPE html>
<html>
<head>
  <title>Mothi Millet</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">
  
  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- plugin css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/@mdi/font/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
  <!-- end plugin css -->

  @stack('plugin-styles')

  <!-- common css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- end common css -->

  @stack('style')
  <style>
    /* .bgs{
    
    background-image: url('https://img.freepik.com/free-vector/blank-brown-notepaper-design-vector_53876-173620.jpg?t=st=1708539395~exp=1708542995~hmac=e1c769d780a757541b969c08d3df85aea354f6c9312d93e7e6c9859c29e0fbde&w=360'); 
    background-size: cover; 
    background-repeat: no-repeat; 
    } */
    .bgs{
    
    background-image: url('./assets/images/mothilogo.png'); 
    background-size: contain; 
    background-position:center;
    background-repeat: repeat; 
    height: 900px;

    }
  </style>
   
</head>
<body data-base-url="{{url('/')}}" class="bgs">

  <div class="container-scroller" id="app">
    @include('userlayout.header')
    <div class="container-fluid page-body-wrapper">  
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('userlayout.footer')
      </div>
    </div>
  </div>

 <!-- base js -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<!-- end base js -->

<!-- plugin js -->
@stack('plugin-scripts')
<!-- end plugin js -->

<!-- common js -->
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/js/misc.js') }}"></script>
<script src="{{ asset('assets/js/settings.js') }}"></script>
<script src="{{ asset('assets/js/todolist.js') }}"></script>

  <!-- end common js -->
  <script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
  @stack('custom-scripts')
  
</body>
</html>