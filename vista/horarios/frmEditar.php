<div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0">Editar Horarios</h1>
             </div><!-- /.col -->
         </div><!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
<section class="content">
    <div class="container-fluid">
    <form action="?ctrl=Ctrlhorarios&accion=guardarEditar" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">Id:</span>
            <input type="text" name="idschedules" value="<?=$horarios->getidschedules()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Hora Entrada:</span>
            <input type="time" name="time_in" value="<?=$horarios->gettime_in()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Hora Salida:</span>
            <input type="time" name="time_out" value="<?=$horarios->gettime_out()?>" 
                class="form-control">
        </div>
        <button type="submit" class="btn bg-info">
            <i class="bi bi-save2"></i> Guardar</button>
    </form>
    <br><a href="?ctrl=Ctrlhorarios" class="btn bg-info">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>
</div>
</section>