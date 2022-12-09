
<section class="content">
    <div class="container-fluid">
        <form action="?ctrl=CtrlCashAdvance&accion=guardarNuevo" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text">salario: </span>
                <input type="text" class="form-control" placeholder="salario:"  name="idsalario" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">bonos: </span>
                <input type="text" class="form-control" placeholder="bonos"  name="bonos" value="">
            </div>
        
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit">Guardar</button>
            </div>
        </form>
        <div class="input-group mb-3">
                <a type="button" href="?ctrl=CtrlCashAdvance" class="btn btn-outline-secondary" type="submit">Retornar</a>
        </div>
    </div>
</section>