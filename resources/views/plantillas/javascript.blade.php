<!-- jQuery -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
<!-- Morris Charts JavaScript -->
<script src="{{asset('bower_components/raphael/raphael-min.js')}}"></script>
<script src="{{asset('bower_components/morrisjs/morris.min.js')}}"></script>
<script src="{{asset('js/morris-data.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('dist/js/sb-admin-2.js')}}"></script>
<!-- DataTables JavaScript -->
<script src="{{asset('bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>

<script>
  $('#example').DataTable( {
    "ajax": '{{asset('products')}}'
  });
</script>