<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>{{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/dist/css/style.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./assets/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
{{-- header --}}
@include('template.header')

<div class="container-fluid">
  <div class="row">
    {{-- navside --}}
    @include('template.navside')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      {{-- container / main --}}
      <div class="my-3">
        @yield('container')
      </div>
    </main>
  

 </div>
</div>

    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/dist/js/dashboard.js"></script>

  </body>
</html>