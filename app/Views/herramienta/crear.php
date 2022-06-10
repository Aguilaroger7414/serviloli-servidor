<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Nueva herramienta</h3>
        <div class="col-auto">
            <button form="formularioHerramienta" class="btn btn-primary btn-sm" title="Registrar herramienta">
                Registrar
            </button>
        </div>
    </div>
    <form action="<?php echo base_url('herramientas/registrar'); ?>" method="post" class="row g-3" id="formularioHerramienta">
        <div class="col-md-6">
            <label for="nombre_herramienta" class="form-label">Nombre</label>
            <input required type="text" size="5" class="form-control" name="nombre_herramienta" id="nombre_herramienta">
        </div>
        <div class="col-md-6">
            <label for="marca" class="form-label">Marca</label>
            <input required type="text" class="form-control" name="marca" id=" marca">
        </div>
        <div class="col-md-6">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input required type="number" class="form-control" name="cantidad" id=" cantidad">
        </div>

    </form>
</div>
<?= $this->endSection() ?>