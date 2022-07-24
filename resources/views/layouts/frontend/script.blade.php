     <!--All Js Here-->

     <!--Jquery 1.12.4-->
     <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
     <!--Popper-->
     <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
     <!--Bootstrap-->
     <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
     <!--Plugins-->
     <script src="{{ asset('frontend/js/plugins.js') }}"></script>
     <!--Ajax Mail-->
     <script src="{{ asset('frontend/js/ajax.mail.js') }}"></script>
     <!-- Modernizr Js -->
     <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
     {{-- toaster js --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
     {{-- axios js --}}
     <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     <!--Main Js-->
     <script src="{{ asset('frontend/js/main.js') }}"></script>

     <script>
          @if (Session::has('messege'))
              var type="{{ Session::get('alert-type', 'info') }}"
              switch(type){
              case 'info':
              toastr.info("{{ Session::get('messege') }}");
              break;
              case 'success':
              toastr.success("{{ Session::get('messege') }}");
              break;
              case 'warning':
              toastr.warning("{{ Session::get('messege') }}");
              break;
              case 'error':
              toastr.error("{{ Session::get('messege') }}");
              break;
              }
          @endif
      </script>

     @yield('script')
