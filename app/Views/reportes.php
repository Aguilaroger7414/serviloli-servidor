<?php echo $this->extend('plantilla'); ?>

<?php echo $this->section('contenido'); ?>
<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<!-- DIV para un contenido o header de presentación -->
<div class="container">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Reportes</h3>
    </div>
    <div class="row my-3 mx-1 gap-2">
        <div class="card bg-light border-0 shadow-sm col-md-3">
            <div class="card-body">
                <h5 class="card-title">Herramientas prestadas</h5>
                <h6 class="card-subtitle mb-2 text-muted">Reporte</h6>
                <p class="card-text">Listado de herramientas prestadas</p>
                <a href="<?= base_url('/reportes/herramientas-prestadas'); ?>" class="btn btn-primary btn-sm">Ver reportes</a>
            </div>
        </div>
        <div class="card bg-light border-0 shadow-sm col-md-3">
            <div class="card-body">
                <h5 class="card-title">Préstamos por empleado</h5>
                <h6 class="card-subtitle mb-2 text-muted">Reporte</h6>
                <p class="card-text">Número de préstamos que ha realizado cada empleado</p>
                <a href="<?php echo base_url('/reportes/prestamos-por-empleado'); ?>" class="btn btn-primary btn-sm">Ver reportes</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?php echo $this->endSection(); ?>