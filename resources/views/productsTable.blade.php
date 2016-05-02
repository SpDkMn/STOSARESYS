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
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>CODIGO</th>
                                <th>NOMBRE</th>
                                <th>PRECIO UNITARIO</th>
                                <th>PRECIO DOCENA</th>
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
</div>
<!-- /.row -->
@endsection
