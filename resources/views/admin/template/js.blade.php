<!-- Jquery Core Js -->
<script src="{{ asset('admin') }}/assets/bundles/libscripts.bundle.js"></script>
<!--Lib Scripts Plugin Js-->
{{-- <script src="{{ asset('admin') }}/assets/bundles/vendorscripts.bundle.js"></script>
<!-- Lib Scripts Plugin Js --> --}}
<script src="{{ asset('admin') }}/assets/bundles/sparkline.bundle.js"></script>
<!--Sparkline Plugin Js-->
<script src="{{ asset('admin') }}/assets/bundles/jvectormap.bundle.js"></script>
<!--JVectorMap Plugin Js-->
<script src="{{ asset('admin') }}/assets/bundles/morrisscripts.bundle.js"></script>
<!--Morris Plugin Js-->
<script src="{{ asset('admin') }}/assets/bundles/knob.bundle.js"></script>
<!--Jquery Knob Plugin Js-->
<script src="{{ asset('admin') }}/assets/bundles/mainscripts.bundle.js"></script>
<script src="{{ asset('admin') }}/assets/js/pages/index.js"></script>
<script src="{{ asset('admin') }}/assets/js/pages/charts/jquery-knob.min.js"></script>


<script src="{{ asset('admin') }}/assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js -->
<script src="{{ asset('admin') }}/assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script
    src="{{ asset('admin') }}/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
</script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('admin') }}/assets/bundles/datatablescripts.bundle.js"></script>
<script src="{{ asset('admin') }}/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="{{ asset('admin') }}/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('admin') }}/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="{{ asset('admin') }}/assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="{{ asset('admin') }}/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="{{ asset('admin') }}/assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="{{ asset('admin') }}/assets/js/pages/tables/jquery-datatable.js"></script>


<script src="{{ asset('admin') }}/assets/plugins/ckeditor/ckeditor.js"></script> <!-- Ckeditor -->
<script src="{{ asset('admin') }}/assets/js/pages/forms/editors.js"></script>
@toastr_js
@toastr_render
@stack('scripts')
