<?php echo $this->extend('plantilla'); ?>
<?php echo $this->section('contenido'); ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Prestamos</h3>
        <div class="col-auto">
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Empleado</th>
                <th>Fecha solicitud - aprobado</th>
                <th>Herramienta</th>
                <th>Cantidad</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Contenido de la tabla -->
            <?php if (isset($prestamos) and !is_null($prestamos)) : ?>

                <?php foreach ($prestamos as $i => $prestamo) : ?>
                    <tr>
                        <td><?= $i + 1; ?></td>
                        <td><?= $prestamo->emp_nombre; ?></td>
                        <td><?= $prestamo->fechasolicitud . ' - ' . $prestamo->fecha_aprob ?></td>
                        <td><?= $prestamo->nombre_herramienta; ?></td>
                        <td><?= $prestamo->cantidad; ?></td>
                        <td><?= $prestamo->estado; ?></td>
                        <td>
                            <?php if (session('empleado')->puesto == 'Administrador') : ?>
                                <?php if ($prestamo->estado == 'SOLICITUD') : ?>
                                    <a href="<?php echo base_url('prestamos/aprobar/' . $prestamo->id_prestamo); ?>" class="btn btn-outline-success btn-sm">Aprobar</a>
                                <?php endif; ?>
                                <?php if ($prestamo->estado == 'APROBADO') : ?>
                                    <a href="<?php echo base_url('prestamos/devolver/' . $prestamo->id_prestamo); ?>" class="btn btn-outline-warning btn-sm">Devolver</a>
                                <?php endif; ?>
                                <a href="<?php echo base_url('prestamos/eliminar/' . $prestamo->id_prestamo); ?>" class="btn btn-outline-danger btn-sm">Eliminar</a>
                            <?php endif; ?>
                            <a href="<?php echo base_url('prestamos/detalles/' . $prestamo->id_prestamo); ?>" class="btn btn-outline-primary btn-sm">Detalles</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td>No hay datos para mostrar</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php echo $pager->links() ?>
</div>
</div>
<?php echo $this->endSection(); ?>