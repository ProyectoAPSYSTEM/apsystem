<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlAsistencia&accion=guardarNuevo" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">ID: </span>
            <input type="text" class="form-control" placeholder="ID:"  name="ID" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">EMPLEADO: </span>
            <input type="text" class="form-control" placeholder="EMPLEADO"  name="EMPLEADO" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">DNI: </span>
            <input type="text" class="form-control" placeholder="DNI"  name="DNI" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">CARGO: </span>
            <input type="text" class="form-control" placeholder="CARGO"  name="CARGO" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">ENTRADA: </span>
            <input type="text" class="form-control" placeholder="ENTRADA"  name="ENTRADA" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">SALIDA: </span>
            <input type="text" class="form-control" placeholder="SALIDA"  name="SALIDA" value="">
        </div>
    
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>
    </form>
    <p><a href="?" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>
</body>
</html>