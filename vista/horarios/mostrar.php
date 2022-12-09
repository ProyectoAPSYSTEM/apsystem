
    <section class="content-header">
      <h1>
        Lista de Horarios
      </h1>
      <ol class="breadcrumb">
        <li><a href=".?"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>/</li>
        <li class="active">Lista de Horarios</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
               <a href="?ctrl=CtrlHorarios&accion=nuevo" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
            <div class="box-body">
              <table class="table table-bordered w-100 shadow">
                <thead>
                    <th>Id</th>
                    <th>Hora Entrada</th>
                    <th>Hora Salida</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                <?php 
                if (is_array($data))
                    foreach ($data as $c) { ?>
                        <tr>
                        <td><?=$c["idschedules"]?></td>
                        <td><?=$c["time_in"]?></td>
                        <td><?=$c["time_out"]?></td>
                          <td>
                            <a class="btn btn-success btn-sm edit btn-flat" href="?ctrl=Ctrlhorarios&accion=editar&idschedules=<?=$c['idschedules']?>"><i class="fa fa-edit"></i> Editar</a>
                            <a class="btn btn-danger btn-sm delete btn-flat" href="?ctrl=Ctrlhorarios&accion=eliminar&idschedules=<?=$c['idschedules']?>"><i class="fa fa-trash"></i> Eliminar</a>
                          </td>
                        
                    <?php }    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   