
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlReporteAsistencia&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Nuevo Anexo</a>
        <a href="index.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Retornar</a>
                                    <table class="table table-striped">
                                            <tr>
                                                <th>faltasempleados</th>
                                                <th>descuentos</th>
                                            </tr>
                                            <?php foreach ($ReporteAsistencia as $a) { ?>
                                                <tr>
                                                    <td><?=$a['faltasempleados']?></td>
                                                    <td><?=$a['descuentos']?></td>
                                                    <td>
                                                        <a href="?ctrl=CtrlReporteAsistencia&accion=editar&faltasempleados=<?=$a['faltasempleados']?>">
                                                            <i class="bi bi-pencil-square"></i> Editar</a>
                                                        / 
                                                        <a href="?ctrl=CtrlReporteAsistencia&accion=eliminar&faltasempleados=<?=$a['faltasempleados']?>">
                                                            <i class="bi bi-trash"></i>  Eliminar</a>
                                                        
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                    </table>
                               
</body>
</html>