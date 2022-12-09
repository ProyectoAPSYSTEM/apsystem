
<section class="content">
    <div class="container-fluid">
    <form action="?ctrl=CtrlEmpleados&accion=guardarEditar" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">id:</span>
            <input type="text" name="id" value="<?=$Empleados->getid()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">dni:</span>
            <input type="text" name="dni" value="<?=$Empleados->getdni()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">nombres:</span>
            <input type="text" name="nombres" value="<?=$Empleados->getnombres()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">apellidos:</span>
            <input type="text" name="apellidos" value="<?=$Empleados->getapellidos()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">address:</span>
            <input type="text" name="address" value="<?=$Empleados->getaddress()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">fechanacimiento:</span>
            <input type="date" name="fechanacimiento" value="<?=$Empleados->getfechanacimiento()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">contact_info:</span>
            <input type="text" name="contact_info" value="<?=$Empleados->getcontact_info()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">genero:</span>
            <input type="text" name="genero" value="<?=$Empleados->getgenero()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">idposition:</span>
            <input type="text" name="idposition" value="<?=$Empleados->getidposition()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">schedule_id:</span>
            <input type="text" name="idschedules" value="<?=$Empleados->getidschedules()?>" 
                class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">created_on:</span>
            <input type="date" name="created_on" value="<?=$Empleados->getcreated_on()?>" 
                class="form-control">
        </div>
        <button type="submit" class="btn bg-info">
            <i class="bi bi-save2"></i> Guardar</button>
    </form>
    <br><a href="?ctrl=CtrlEmpleados" class="btn bg-info">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>
</div>
</section>



