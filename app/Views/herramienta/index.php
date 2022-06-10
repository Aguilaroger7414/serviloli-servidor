<?php echo $this->extend('plantilla'); ?>
<?php echo $this->section('contenido'); ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Herramientas</h3>
        <div class="col-auto">
            <a href="<?php echo base_url('herramientas/crear'); ?>" class="btn btn-primary btn-sm" title="Nueva herramienta">
                <i class="bi bi-plus-circle"></i>
                Nuevo
            </a>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>#</td>
                <td>Nombre de herramienta</td>
                <td>Marca</td>
                <td>Cantidad</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($herramienta as $i => $herramienta) : ?>
                <tr>
                    <td> <?= $i + 1; ?> </td>
                    <td> <?= $herramienta->nombre_herramienta; ?> </td>
                    <td> <?= $herramienta->marca; ?> </td>
                    <td> <?= $herramienta->cantidad; ?> </td>
                    <td>
                        <a href="<?php echo base_url('herramientas/editar/' . $herramienta->ID_herramienta); ?>" class="btn btn-outline-primary btn-sm">Editar</a>
                        <a href="<?php echo base_url('herramientas/eliminar/' . $herramienta->ID_herramienta); ?>" class="btn btn-outline-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links(); ?>
</div>
</div>
<?php echo $this->endSection(); ?>