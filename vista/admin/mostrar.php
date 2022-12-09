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
    <a href="?ctrl=CtrlAsistencia&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Nuevo Asistencia</a>
        <a href="index.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Retornar</a>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>EMPLEADO</th>
            <th>DNI</th>
            <th>CARGO</th>
            <th>ENTRADA</th>
            <th>SALIDA</th>
        </tr>
        <?php foreach ($asistencia as $a) { ?>
            <tr>
                <td><?=$a['ID']?></td>
                <td><?=$a['EMPLEADO']?></td>
                <td><?=$a['DNI']?></td>
                <td><?=$a['CARGO']?></td>
                <td><?=$a['ENTRADA']?></td>
                <td><?=$a['SALIDA']?></td>
                <td>
                    <a href="?ctrl=CtrlAsistencia&accion=editar&ID=<?=$a['ID']?>">
                        <i class="bi bi-pencil-square"></i> Editar</a>
                    / 
                    <a href="?ctrl=CtrlAsistencia&accion=eliminar&ID=<?=$a['ID']?>">
                        <i class="bi bi-trash"></i>  Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>