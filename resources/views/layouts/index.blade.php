<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Meta -->
    <meta name="description" content="Lam Alif">
    <meta name="author" content="Lam Alif">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lam Alif</title>
    <link rel="icon" href="{{asset('favicon.ico')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- vendor css -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/ionicons.css')}}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"> --}}
    
    <link href="{{ asset('assets/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery.steps.css')}}" rel="stylesheet">
    @stack('style')
    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slim-merah2.css')}}">

  </head>
  <body>
    @include('partials.header')

    <div class="slim-body">
      @include('partials.sidebar')

      <div class="slim-mainpanel">
        <div class="container"> 
          @include('alert')
          @yield('contents')
        </div><!-- container -->
      </div><!-- slim-mainpanel -->
    </div><!-- slim-body -->
    @include('partials.footer')

    <script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/popper.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js')}}"></script>
    {{-- maybe you can put the script plugin from the stack method below, for optimizing web reload speed  -> From: TinDev--}}
    <script src="{{ asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!-- <script src="{{ asset('assets/ckeditor/ckeditor.js')}}"></script> -->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="{{ asset('assets/js/slim.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.steps.js')}}"></script>
    @stack('script')
  </body>
</html>