<div class="container">

<div class="row">
    <div class="col">
        <h1>Arbitros</h1>
        <a href="<?=base_url('arbitros/add/');?> " class="btn btn-success">Agregar</a>
    </div>
</div>

<?php //echo "aqui"; print_r($arbitro); ?>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>IdArbitro</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Telefono</th>

                </thead>
                <tbody>
                    <?php foreach($arbitro as $key) : ?>
                        <tr>
                        <td><?=$key->idArbitro ?></td>
                        <td><?=$key->nombre ?></td>
                        <td><?=$key->aPaterno ?></td>
                        <td><?=$key->aMaterno ?></td>
                        <td><?=$key->fechaNacimiento ?></td>
                        <td><?=$key->telefono ?></td>
                        
                        <td>
                            <a href="<?=base_url('arbitro/delete/'.$key->idArbitro);?> " class="btn btn-danger">Borrar</a>
                            <a href="<?=base_url('arbitro/edit/'.$key->idArbitro);?> " class="btn btn-warning">Modificar</a>
                        
                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>