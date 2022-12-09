<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar ReporteAsistencia</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlReporteAsistencia&accion=guardarEditar" method="post">
        faltasempleados : <input type="text" name="faltasempleados" readonly
            value="<?=$tipo['faltasempleados']?>"><br>
        descuentos: <input type="text" name="descuentos" 
            value="<?=$tipo['descuentos']?>"><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>