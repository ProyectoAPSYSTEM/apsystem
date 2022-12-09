
<section class="content">
    <div class="container-fluid">
        <form action="?ctrl=Ctrlhorarios&accion=guardarNuevo" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text">id: </span>
                <input type="text" class="form-control" placeholder=""  name="idschedules" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Hora Entrada: </span>
                <input type="time" class="form-control" placeholder=""  name="time_in" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Hora Salida: </span>
                <input type="time" class="form-control" placeholder=""  name="time_out" value="">
            </div>
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit">Guardar</button>
            </div>
        </form>
        <div class="input-group mb-3">
                <a type="button" href="?ctrl=Ctrlhorarios" class="btn btn-outline-secondary" type="submit">Retornar</a>
        </div>
    </div>
</section>