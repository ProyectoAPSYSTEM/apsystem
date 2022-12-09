<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=apellido.0">
    <title>Editar Anexo4</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlPersona&accion=guardarEditar" method="post">
        nombre: <input type="text" name="nombre" readonly
            value="<?=$tipo['nombre']?>"><br>
        apellido: <input type="text" name="apellido"
            value="<?=$tipo['apellido']?>"><br>
        celular: <input type="text" name="celular"
            value="<?=$tipo['celular']?>"><br>
        genero: <input type="text" name="genero"
            value="<?=$tipo['genero']?>"> <br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>