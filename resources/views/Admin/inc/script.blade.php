<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="{{ asset('assets/script/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/script/respond.min.js') }}"></script>
<![endif]-->
<!--
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/scripts/jquery.min.js') }}"></script>
<script src="{{ asset('assets/scripts/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('assets/plugin/nprogress/nprogress.js') }}"></script>
<script src="{{ asset('assets/plugin/sweet-alert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/plugin/waves/waves.min.js') }}"></script>
<!-- Full Screen Plugin -->
<script src="{{ asset('assets/plugin/fullscreen/jquery.fullscreen-min.js') }}"></script>

<!-- Google Chart -->
<script type="text/javascript" src="{{ asset('https://www.gstatic.com/charts/loader.js') }}"></script>

<!-- chart.js Chart -->
<script src="{{ asset('assets/plugin/chart/chartjs/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('assets/scripts/chart.chartjs.init.min.js') }}"></script>

<!-- FullCalendar -->
<script src="{{ asset('assets/plugin/moment/moment.js') }}"></script>
<script src="{{ asset('assets/plugin/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/scripts/fullcalendar.init.js') }}"></script>

<!-- Sparkline Chart -->
<script src="{{ asset('assets/plugin/chart/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/scripts/chart.sparkline.init.min.js') }}"></script>

<script src="{{ asset('assets/scripts/main.min.js') }}"></script>
<script src="{{ asset('assets/color-switcher/color-switcher.min.js') }}"></script>

<!-- Data Tables -->
<script src="{{ asset('assets/plugin/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugin/datatables/media/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/scripts/datatables.demo.min.js') }}"></script>

@stack('js')
