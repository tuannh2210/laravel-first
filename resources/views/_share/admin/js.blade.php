{{-- <script src="{{asset('theme/admin/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('theme/admin/global/plugins/excanvas.min.js')}}"></script> 
<script src="{{asset('theme/admin/global/plugins/ie8.fix.min.js')}}"></script>  --}}
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('theme/admin/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('theme/admin/global/plugins/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/amcharts/amcharts/amcharts.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/amcharts/amcharts/serial.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/amcharts/amcharts/pie.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/amcharts/amcharts/radar.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/amcharts/amcharts/themes/light.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/amcharts/amcharts/themes/patterns.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/amcharts/amcharts/themes/chalk.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/amcharts/ammap/ammap.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/amcharts/ammap/maps/js/worldLow.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/amcharts/amstockcharts/amstock.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/horizontal-timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{asset('theme/admin/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('theme/admin/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{asset('theme/admin/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>

{{-- BOOBOX --}}
<script src="{{asset('theme/admin/global/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>

{{-- end bootbox --}}
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
<!-- Google Code for Universal Analytics -->
<script src="{{asset('tinymce/tinymce.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/sweetalert2/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/admin/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
{{-- Edit table --}}
<script src="{{asset('theme/admin/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js')}}" type="text/javascript"></script>


<script type="text/javascript" src="{{asset('js/custom-validate-method.js')}} "></script>
<script src="{{asset('js/main.js')}}" type="text/javascript"></script>



