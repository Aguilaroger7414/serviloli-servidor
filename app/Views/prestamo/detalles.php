<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container">
    <div class="row">
        <p>Folio: <?= $prestamo->id_prestamo ?></p>
        <p>Estado: <?= $prestamo->estado ?></p>
        <p>Empleado: <?= $prestamo->emp_nombre ?></p>
    </div>
    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>ID préstamo</td>
                    <td>Fecha</td>
                    <td>Nombre de la herramienta</td>
                    <td>Marca</td>
                    <td>Cantidad</td>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><?= $prestamo->id_prestamo; ?></td>
                    <td><?= $prestamo->fecha_aprob; ?></td>
                    <td><?= $prestamo->nombre_herramienta; ?></td>
                    <td><?= $prestamo->marca; ?></td>
                    <td><?= $prestamo->cantidad; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>