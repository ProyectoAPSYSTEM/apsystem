<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Asistencia</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlAsistencia&accion=guardarEditar" method="post">
        ID: <input type="text" name="ID" readonly
            value="<?=$tipo['ID']?>"><br>
        EMPLEADO: <input type="text" name="EMPLEADO"
            value="<?=$tipo['EMPLEADO']?>"><br>
        DNI: <input type="text" name="DNI"
            value="<?=$tipo['DNI']?>"><br>
        CARGO: <input type="text" name="CARGO"
            value="<?=$tipo['CARGO']?>"> <br>
        ENTRADA: <input type="text" name="ENTRADA"
            value="<?=$tipo['ENTRADA']?>"> <br>
        SALIDA: <input type="text" name="SALIDA"
            value="<?=$tipo['SALIDA']?>"> <br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>