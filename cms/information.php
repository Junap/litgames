<!DOCTYPE html>


<?php
            
    require_once '../config/conexion.php';
    $query = "select * from users";
    $resultado = mysqli_query($conexion,$query);
    include 'head.php';
?>
<?php
include 'nav.php';
?>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
 <script>window.jQuery || document.write('<script src="../public/js/jquery-3.1.1.min.js"><\/script>')</script>
    <!-- DATATABLES -->
    <script src="../public/datatables/jquery.dataTables.min.js"></script>    
    <script src="../public/datatables/dataTables.buttons.min.js"></script>
    <script src="../public/datatables/buttons.html5.min.js"></script>
    <script src="../public/datatables/buttons.colVis.min.js"></script>
    <script src="../public/datatables/jszip.min.js"></script>
    <script src="../public/datatables/pdfmake.min.js"></script>
    <script src="../public/datatables/vfs_fonts.js"></script> 

    <script src="../public/js/bootbox.min.js"></script> 
    <script src="../public/js/bootstrap-select.min.js"></script>  


    <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Imagenes top <button class="btn btn-success" id="btnagregar1" onclick="show(true)"><i class="fa fa-plus-circle"></i> Agregar</button--></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros1">
                        <table id="tbllistado1" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            
                            <th>name</th>
                            <th>duration</th>
                            <th>description</th>

                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>

                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros1">
                        <form name="formulario1" id="formulario1" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>idgame:</label>
                            <input type="hidden" name="idgame" id="idgame">
                            <input type="input" class="form-control" name="idgame" id="idgame" >
                            <input type="hidden" name="ia1" id="ia1">
                            <img src="" width="150px" height="120px" id="im1">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Name:</label>
                            <input type="input" class="form-control" name="name" id="name" >
                            <input type="hidden" name="ia2" id="ia2">
                            <img src="" width="150px" height="120px" id="im2">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Duration:</label>
                            <input type="input" class="form-control" name="duration" id="duration" >
                            <input type="hidden" name="ia3" id="ia3">
                            <img src="" width="150px" height="120px" id="im1">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Description:</label>
                            <input type="input" class="form-control" name="description" id="description" >
                            <input type="hidden" name="ia4" id="ia4">
                            <img src="" width="150px" height="120px" id="im4">
                          </div>
                                                    
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar1"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->
      <footer>

  </footer>
    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
include 'footer.php';
?>


<script type="text/javascript" src="script/product.js"></script>
</body>
</html>