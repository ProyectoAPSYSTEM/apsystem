<section class="content">
    <div class="container-fluid">
    <form action="?ctrl=CtrlAsistencia&accion=guardarEditar" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">Id:</span>
            <input type="text" name="id" value="<?=$Asistencia->getid()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Numero de Asistencias:</span>
            <input type="text" name="numeroasistencias" value="<?=$Asistencia->getnumeroasistencias()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Numero de Faltas:</span>
            <input type="text" name="numerofaltas" value="<?=$Asistencia->getnumerofaltas()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Numero de Justificaciones:</span>
            <input type="text" name="numerojustificaciones" value="<?=$Asistencia->getnumerojustificaciones()?>" 
                class="form-control">
        </div>

        <button type="submit" class="btn bg-info">
            <i class="bi bi-save2"></i> Guardar</button>
    </form>
    <br><a href="?ctrl=CtrlAsistencia" class="btn bg-info">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>
</div>
</section>




