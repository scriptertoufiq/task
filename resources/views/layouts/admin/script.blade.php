    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
    <!-- inject:js-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/jquery/jquery-ui.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/bootstrap/popper.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/accordion.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/autoComplete.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/charts.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/drawer.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/dynamicBadge.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/dynamicCheckbox.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/fullcalendar@5.2.0.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/google-chart.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/jquery.filterizr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/jquery.mCustomScrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/jquery.star-rating-svg.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/leaflet.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/leaflet.markercluster.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/loader.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/message.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/moment.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/muuri.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/notification.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/popover.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/trumbowyg.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/wickedpicker.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor_assets/js/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/theme_assets/js/drag-drop.js') }}"></script>
    <script src="{{ asset('admin/assets/theme_assets/js/full-calendar.js') }}"></script>
    <script src="{{ asset('admin/assets/theme_assets/js/googlemap-init.js') }}"></script>
    <script src="{{ asset('admin/assets/theme_assets/js/icon-loader.js') }}"></script>
    <script src="{{ asset('admin/assets/theme_assets/js/jvectormap-init.js') }}"></script>
    <script src="{{ asset('admin/assets/theme_assets/js/leaflet-init.js') }}"></script>
    <script src="{{ asset('admin/assets/theme_assets/js/dropzone.js') }}"></script>
    {{-- ck-editor --}}
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    {{-- sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- toaster js --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('admin/assets/theme_assets/js/main.js') }}"></script>
    <!-- endinject-->
    <script>
        $(document).ready(function() {
            $('select.select2').select2();
            $('table.dataTable').DataTable({
                "order": [
                    [0, "desc"]
                ]
            });
        });
    </script>
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

    <script>
        $(document).on("click", "#delete", function(e) {

            e.preventDefault();
            var link = $(this).attr("href");
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = link;
                    } else {
                        swal("Your file is safe!");
                    }
                });

        });
    </script>

    <script>
        CKEDITOR.replace('description');
        CKEDITOR.replace('testimonial');
        CKEDITOR.replace('mission');
        CKEDITOR.replace('vission');
    </script>
    @yield('script')
