<!-- JAVASCRIPT -->
{{-- <script src="https://unpkg.com/eva-icons"></script> --}}

{{-- <script src="{{ URL::asset('assets/admin/libs/eva-icons/eva.min.js') }}"></script> --}}

<script src="{{ URL::asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('assets/admin/libs/metismenujs/metismenujs.min.js') }}"></script>
<script src="{{ URL::asset('assets/admin/libs/simplebar/simplebar.min.js') }}"></script>

<script src="{{ URL::asset('assets/admin/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('assets/admin/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('assets/admin/libs/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/pages/dashboard.init.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/app.js') }}"></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Toastr JS & CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


{{-- Custom Script  --}}
<script src="{{ URL::asset('assets/admin/js/custom-script.js') }}"></script>



<script>
    $(document).ready(function() {
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.success("{{ session('success') }}");
        @endif
    });
</script>

@yield('scripts')
