<div class="container">
    <div class="row">
        <div class="col">

        <h2>Agregar Cancha</h2>
    <form action="<?=base_url('canchas/insert'); ?>" method="POST">
        <div class="mb-3">
            <label for="cancha" class="form-label">Cancha</label>
            <input name="cancha" type="text" class="form-control" id="cancha" placeholder="Cancha">
        </div>
        <input type="submit" class="btn btn-success" value="Guardar">
        </form>
    
    </div>
    </div>
</div>