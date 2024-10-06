<div class="container">
    <div class="row">
        <div class="col">
<?php print_r($cancha); ?>
        <h2>Actualizar Cancha</h2>
    <form action="<?=base_url('canchas/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="cancha" class="form-label">Cancha</label>
            <input name="cancha" type="text" value="<?=$cancha[0]->cancha; ?>"
                 class="form-control" id="cancha" placeholder="Cancha">
           <input type="hidden" name="idcancha" value="<?=$cancha[0]->idCancha;?>" >
        </div>
        <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
    
    </div>
    </div>
</div>