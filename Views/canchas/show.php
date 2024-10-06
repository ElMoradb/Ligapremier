<div class="container">

<div class="row">
    <div class="col">
        <h1>Canchas</h1>
        <a href="<?=base_url('canchas/add/');?> " class="btn btn-success">Agregar</a>
    </div>
</div>

<?php //echo "aqui"; print_r($canchas); ?>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>IdCancha</th>
                    <th>Cancha</th>
                </thead>
                <tbody>
                    <?php foreach($canchas as $key) : ?>
                        <tr>
                        <td><?=$key->idCancha ?></td>
                        <td><?=$key->cancha ?></td>
                        <td>
                            <a href="<?=base_url('canchas/delete/'.$key->idCancha);?> " class="btn btn-danger">Borrar</a>
                            <a href="<?=base_url('canchas/edit/'.$key->idCancha);?> " class="btn btn-warning">Modificar</a>
                        
                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>