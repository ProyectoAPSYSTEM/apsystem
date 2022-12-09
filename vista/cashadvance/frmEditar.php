
<section class="content">
    <div class="container-fluid">
    <form action="?ctrl=CtrlCashAdvance&accion=guardarEditar" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">Salario:</span>
            <input type="text" name="idsalario" value="<?=$CashAdvance->getidsalario()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Bonos:</span>
            <input type="text" name="bonos" value="<?=$CashAdvance->getbonos()?>" 
                class="form-control">
        </div>
        <button type="submit" class="btn bg-info">
            <i class="bi bi-save2"></i> Guardar</button>
    </form>
    <br><a href="?ctrl=CtrlCashAdvance" class="btn bg-info">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>
</div>
</section>



