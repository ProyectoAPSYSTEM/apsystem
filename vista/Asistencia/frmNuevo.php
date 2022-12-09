
<section class="content">
    <div class="container-fluid">
        <form action="?ctrl=CtrlAsistencia&accion=guardarNuevo" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text">Id: </span>
                <input type="text" class="form-control" placeholder=""  name="id" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Numero de asistencias: </span>
                <input type="text" class="form-control" placeholder=""  name="numeroasistencias" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Numero de faltas: </span>
                <input type="text" class="form-control" placeholder=""  name="numerofaltas" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Numero de justificaciones: </span>
                <input type="text" class="form-control" placeholder=""  name="numerojustificaciones" value="">
            </div>
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit">Guardar</button>
            </div>
        </form>
        <div class="input-group mb-3">
                <a type="button" href="?ctrl=CtrlAsistencia" class="btn btn-outline-secondary" type="submit">Retornar</a>
        </div>
    </div>
</section>