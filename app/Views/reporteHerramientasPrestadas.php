<?php echo $this->extend('plantilla'); ?>

<?php echo $this->section('contenido'); ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Herramientas prestadas</h3>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>ID de la herramienta</td>
                <td>Nombre de la herramienta</td>
                <td>Cantidad prestada</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($herramientasPrestadas as $datos) : ?>
                <tr>
                    <td><?= $datos->ID_herramienta; ?></td>
                    <td><?= $datos->nombre_herramienta; ?></td>
                    <td><?= $datos->cantidad ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links(); ?>
</div>
</div>
<?php echo $this->endSection(); ?>