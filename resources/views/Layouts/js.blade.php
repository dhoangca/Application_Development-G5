 {{-- <!--   Core JS Files   -->
 <script src="js/core/jquery.min.js"></script>
 <script src="js/core/popper.min.js"></script>
 <script src="js/core/bootstrap.min.js"></script>
 <script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
 <!--  Google Maps Plugin    -->
 <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <!-- Chart JS -->
 <script src="js/plugins/chartjs.min.js"></script>
 <!--  Notifications Plugin    -->
 <script src="js/plugins/bootstrap-notify.js"></script>
 <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
 <script src="js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
 <script src="demo/demo.js"></script>
 <script>
   $(document).ready(function() {
     // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
     demo.initChartsPages();
   });
 </script> --}}

 <script src="{{ asset('js/core/jquery.min.js') }}"></script>
 <script src="{{ asset('js/core/popper.min.js') }}"></script>
 <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
 <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
 <script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE') }}"></script>
 <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
 <script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
 <script src="{{ asset('js/paper-dashboard.min.js?v=2.0.1 type="text/javascript"') }}"></script>
 <script src="{{ asset('demo/demo.js') }}"></script>
 {{-- <script src="path/to/perfect-scrollbar.min.js"></script>
<script src="path/to/paper-dashboard.min.js"></script> --}}

 <script>
     $(document).ready(function() {
         // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
         demo.initChartsPages();
     });
 </script>
