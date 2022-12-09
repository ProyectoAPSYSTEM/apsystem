
 <!-- /.content -->
 <section class="content-header">
      <h1>
        Lista de Empleados
      </h1>
      <ol class="breadcrumb">
        <li><a href=".?"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>/</li>
        <li class="active">Lista de Empleados</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
               <a href="?ctrl=CtrlEmpleados&accion=nuevo" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
            <div class="box-body">
              <table class="table table-bordered w-100 shadow">
                <thead>
                    <th>id</th>
                    <th>dni</th>
                    <th>nombres</th>
                    <th>apellidos</th>
                    <th>Direccion</th>
                    <th>fechanacimiento</th>
                    <th>Informacion Contacto</th>
                    <th>genero</th>
                    <th>position_id</th>
                    <th>schedule_id</th>
                    <th>created_on</th>
                </thead>
                <tbody>
                <?php 
                if (is_array($data))
                    foreach ($data as $c) { ?>
                        <tr>
                        <td><?=$c["id"]?></td>
                        <td><?=$c["dni"]?></td>
                        <td><?=$c["nombres"]?></td>
                        <td><?=$c["apellidos"]?></td>
                        <td><?=$c["address"]?></td>
                        <td><?=$c["fechanacimiento"]?></td>
                        <td><?=$c["contact_info"]?></td>
                        <td><?=$c["genero"]?></td>
                        <td><?=$c["idposition"]?></td>
                        <td><?=$c["idschedules"]?></td>
                        <td><?=$c["created_on"]?></td>
                          <td>
                            <a class="btn btn-success btn-sm edit btn-flat" href="?ctrl=CtrlEmpleados&accion=editar&id=<?=$c['id']?>"><i class="fa fa-edit"></i> Editar</a>
                            <a class="btn btn-danger btn-sm delete btn-flat" href="?ctrl=CtrlEmpleados&accion=eliminar&id=<?=$c['id']?>"><i class="fa fa-trash"></i> Eliminar</a>
                          </td>
                        
                    <?php }    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   


