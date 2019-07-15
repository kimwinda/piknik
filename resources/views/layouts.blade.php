
<!DOCTYPE html>
<html lang="en">

  <head>
    @include('head')
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #232b2b;">
      @include('bar')
    </nav>

    <!-- Services -->
    <section id="services">
      @yield('content')
    </section>

    <!-- Footer -->
    <footer>
      @include('footer')
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{url('Agency/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('Agency/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{url('Agency/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{url('Agency/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{url('Agency/js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{url('Agency/js/agency.min.js')}}"></script>

  </body>

</html>
