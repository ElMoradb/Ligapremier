<div class="container">
    <div class="row">
        <div class="col">
<?php print_r($arbitro); ?>
        <h2>Actualizar Arbitro</h2>
    <form action="<?=base_url('arbitros/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="arbitro" class="form-label">Arbitro</label>
            <input name="arbitro" type="text" value="<?=$arbitro[0]->arbitro; ?>"
                 class="form-control" id="arbitro" placeholder="Arbitro">
           <input type="hidden" name="idarbitro" value="<?=$arbitro[0]->idArbitro;?>" >
        </div>
        <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
    
    </div>
    </div>
</div>