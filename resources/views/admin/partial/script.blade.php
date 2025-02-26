<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('admin/assets/extra-libs/sparkline/sparkline.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('admin/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('admin/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('admin/dist/js/custom.min.js') }}"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="{{ asset('admin/assets/libs/chartist/dist/chartist.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('admin/dist/js/pages/dashboards/dashboard1.js') }}"></script>

<script>
$(document).ready(function(){
    // Add click event listener to dropdown toggle
    $('.dropdown-toggle').on('click', function() {
        // Toggle the 'show' class on the dropdown menu
        $(this).next('.dropdown-menu').toggleClass('show');
    });

    // Close dropdown when clicking outside
    $(document).on('click', function (e) {
        if (!$(e.target).closest('.dropdown').length) {
            $('.dropdown-menu').removeClass('show');
        }
    });
});
</script>
