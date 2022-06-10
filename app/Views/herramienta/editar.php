<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Editar herramienta</h3>
        <div class="col-auto">
            <button form="formularioHerramienta" class="btn btn-primary btn-sm" title="Editar herramienta">
                Actualizar
            </button>
        </div>
    </div>
    <form action="<?php echo base_url('herramientas/actualizar/' . $herramienta->ID_herramienta); ?>" method="post" class="row g-3" id="formularioHerramienta">
        <div class="col-md-6">
            <label for="nombre_herramienta" class="form-label">Nombre de la herramienta</label>
            <input required type="text" size="5" class="form-control" value="<?php echo $herramienta->nombre_herramienta; ?>" name="nombre_herramienta" id="nombre_herramienta">
        </div>
        <div class="col-md-6">
            <label for="marca" class="form-label">Marca</label>
            <input required type="text" class="form-control" value="<?php echo $herramienta->marca; ?>" name="marca" id=" marca">
        </div>
        <div class="col-md-6">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input required type="number" class="form-control" value="<?php echo $herramienta->cantidad; ?>" name="cantidad" id=" cantidad">
        </div>
    </form>
</div>
<?= $this->endSection() ?>