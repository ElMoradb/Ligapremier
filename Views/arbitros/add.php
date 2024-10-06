<div class="container">
    <div class="row">
        <div class="col">

        <h2>Agregar Arbitro</h2>
    <form action="<?=base_url('arbitros/insert'); ?>" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">

            <label for="aPaterno" class="form-label">Apellido Paterno</label>
            <input name="aPaterno" type="text" class="form-control" id="aPaterno" placeholder="Apellido Paterno">

            <label for="aMaterno" class="form-label">Apellido Materno</label>
            <input name="aMaterno" type="text" class="form-control" id="aMaterno" placeholder="Apellido Materno">

            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
            <input name="fechaNacimiento" type="text" class="form-control" id="fechaNacimiento" placeholder="Fecha de Nacimiento">

            <label for="telefono" class="form-label">Telefono</label>
            <input name="telefono" type="text" class="form-control" id="telefono" placeholder="Telefono">

        </div>

        
        <input type="submit" class="btn btn-success" value="Guardar">
        </form>
    
    </div>
    </div>
</div>