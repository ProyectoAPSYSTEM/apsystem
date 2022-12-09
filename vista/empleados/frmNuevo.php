
<section class="content">
    <div class="container-fluid">
        <form action="?ctrl=CtrlEmpleados&accion=guardarNuevo" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text">id: </span>
                <input type="text" class="form-control" placeholder="id:"  name="id" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">dni: </span>
                <input type="text" class="form-control" placeholder="dni"  name="dni" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">nombres: </span>
                <input type="text" class="form-control" placeholder="nombres"  name="nombres" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">apellidos: </span>
                <input type="text" class="form-control" placeholder="apellidos"  name="apellidos" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">address: </span>
                <input type="text" class="form-control" placeholder="address"  name="address" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">fechanacimiento: </span>
                <input type="date" class="form-control" placeholder="fechanacimiento"  name="fechanacimiento" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">contact_info: </span>
                <input type="text" class="form-control" placeholder="contact_info"  name="contact_info" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">genero: </span>
                <input type="text" class="form-control" placeholder="genero"  name="genero" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">position_id: </span>
                <input type="text" class="form-control" placeholder="position"  name="idposition" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">schedule_id: </span>
                <input type="text" class="form-control" placeholder="schedule_id"  name="idschedules" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">created_on: </span>
                <input type="date" class="form-control" placeholder="created_on"  name="created_on" value="">
            </div>
        
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit">Guardar</button>
            </div>
        </form>
        <div class="input-group mb-3">
                <a type="button" href="?ctrl=CtrlEmpleados" class="btn btn-outline-secondary" type="submit">Retornar</a>
        </div>
    </div>
</section>