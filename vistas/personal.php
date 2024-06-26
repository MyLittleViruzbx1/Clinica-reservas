<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';
if ($_SESSION['clinica']==1)
{
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Usuario <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>                            
                            <th>Apellidos</th>
                            <th>Nombre</th>
                            <th>Fecha de Naciemiento</th>
                            <th>Sexo</th>
                            <th>Estado Civil</th>                            
                            <th>Documento</th>
                            <th>Número</th>
                            <th>Cargo</th>
                            <th>Especialidad</th>
                            <th>Login</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                         
                        </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Nombre(*):</label>
                            <input type="hidden" name="idusuario" id="idusuario">
                            <input type="hidden" name="idpersona" id="idpersona">
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="30" placeholder="Nombre" required>
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Apellido Paterno (*):</label>
                            <input type="text" class="form-control" name="apaterno" id="apaterno" maxlength="30" placeholder="apellido Paterno" required="">
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Apellido Materno (*):</label>
                            <input type="text" class="form-control" name="amaterno" id="amaterno" maxlength="30" placeholder="apellido Materno" required="">
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Fecha de Nacimiento (*):</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required="">
                          </div>
                            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Sexo (*):</label>
                           <select class="form-control select-picker" name="sexo" id="sexo" required="">
                             <option value="M">Masculino</option>
                             <option value="F">Femenino</option>
                           </select>
                          </div>
                            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Estado civil (*):</label>
                            <select class="form-control select-picker" name="estado_civil" id="estado_civil" required="">
                              <option value="S">Soltero</option>
                              <option value="C">Casado</option>
                              <option value="V">Viudo</option>
                              <option value="D">Divorciado</option>
                            </select>
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Tipo Documento(*):</label>
                            <select class="form-control select-picker" name="tipo_documento" id="tipo_documento">
                              
                              <option value="RUC">DPI</option>
                              
                            </select>
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Número(*):</label>
                            <input type="number" class="form-control" name="num_documento" id="num_documento" maxlength="20" placeholder="Documento" required>
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Dirección:</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" maxlength="70">
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Teléfono:</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" maxlength="20" placeholder="Teléfono">
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Email:</label>
                            <input type="text" class="form-control" name="email" id="email" maxlength="50" placeholder="Email">
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Ocupacion:</label>
                            <input type="text" class="form-control" name="ocupacion" id="ocupacion" maxlength="30" placeholder="Ocupacion">
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Cargo:</label>
                            <input type="text" class="form-control" name="cargo" id="cargo" maxlength="20" placeholder="Cargo">
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Especialidad:</label>                           
                            <input type="text" class="form-control" name="especialidad" id="especialidad" maxlength="30" placeholder="Especialidad">
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Login (*):</label>
                            <input type="text" class="form-control" name="login" id="login" maxlength="20" placeholder="Login" required>
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Clave (*):</label>
                            <input type="password" class="form-control" name="clave" id="clave" maxlength="64" placeholder="Clave" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Permisos:</label>
                            <ul style="list-style: none;" id="permisos">
                              
                            </ul>
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
}
else
{
  require 'noacceso.php';
}
require 'footer.php';
?>

<script type="text/javascript" src="scripts/usuario.js"></script>
<?php 
}
ob_end_flush();
?>