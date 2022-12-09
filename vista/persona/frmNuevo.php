<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=celular.0">
    <title>Nuevo Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-betacelular/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@celular.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlPersona&accion=guardarNuevo" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">nombre: </span>
            <input type="text" class="form-control" placeholder="nombre:"  name="nombre" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">apellido: </span>
            <input type="text" class="form-control" placeholder="apellido"  name="apellido" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">celular: </span>
            <input type="text" class="form-control" placeholder="celular"  name="celular" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">genero: </span>
            <input type="text" class="form-control" placeholder="genero"  name="genero" value="">
        </div>
    
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>
    </form>
    <p><a href="?" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>
</body>
</html>