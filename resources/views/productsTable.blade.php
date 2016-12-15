@extends('plantillas.main')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Productos</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
              DataTables Advanced Tables
              <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-plus"></i></button>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <thead>
                            <tr>
                                <th>CODIGO</th>
                                <th>NOMBRE</th>
                                <th>PRECIO UNITARIO</th>
                                <th>PRECIO DOCENA</th>
                                <th>STOCK</th>
                                <th>ACCIÓN</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>CODIGO</th>
                                <th>NOMBRE</th>
                                <th>PRECIO UNITARIO</th>
                                <th>PRECIO DOCENA</th>
                                <th>STOCK</th>
                                <th>ACCIÓN</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
                <!-- Modal -->
                <div class="modal fade" id="deletedModal" tabindex="-1" role="dialog" aria-labelledby="deletedLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="deletedLabel">Eliminar producto</h4>
                            </div>
                            <div class="modal-body">
                                ¿Está usted seguro que desea eliminar el producto?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <button type="button" id="deletedProduct" class="btn btn-primary">Eliminar</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
    </div>
</div>
<!-- /.row -->
@endsection

@section('queries')
<!-- DataTables JavaScript -->
<script src="{{asset('bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
<script>
  $('#example').DataTable( {
    "ajax": "{{asset('products')}}"
  });
  $('#deletedModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    $('#deletedProduct').data('id',button.data('id'))
    console.log($('#deletedProduct').data('id'))
  })
  $('#deletedProduct').on('click',function(){
    console.log( $( this ).data('id') );
    $.ajax({
      method: "DELETE",
      url: "{{url('products')}}"+"/"+$( this ).data('id'),
      data: { _token:"{{ csrf_token() }}"}
    })
    .done(function( msg ) {
      if(msg == '1'){
        $('#deletedModal').modal('hide')
        $('#example_wrapper').remove()
        $('.dataTable_wrapper').prepend('<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El producto fue eliminado correctamente.</div>')
        $('.dataTable_wrapper').append('<table class="table table-striped table-bordered table-hover" id="example"><thead><tr><th>CODIGO</th><th>NOMBRE</th><th>PRECIO UNITARIO</th><th>PRECIO DOCENA</th><th>STOCK</th><th>ACCIÓN</th></tr></thead><tfoot><tr><th>CODIGO</th><th>NOMBRE</th><th>PRECIO UNITARIO</th><th>PRECIO DOCENA</th><th>STOCK</th><th>ACCIÓN</th></tr></tfoot></table>')
        $('#example').DataTable( {
          "ajax": "{{asset('products')}}"
        });
      }
    });
  })
</script>
@endsection
