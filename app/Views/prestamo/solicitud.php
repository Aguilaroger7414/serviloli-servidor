<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<div class="container mt-3">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Solicitud de préstamo</h3>

    </div>
    <div class="row">
        <p>Fecha: <?php echo date('Y-m-d'); ?></p>
        <p>Empleado: <?php echo session('empleado')->emp_nombre; ?> </p>
    </div>
    <form action="<?php echo base_url('prestamos/registrar'); ?>" method="post" class="row g-3" id="formulario">
        <div class="col-md-6">
            <label for="herramienta" class="form-label">Herramienta</label>
            <select required class="form-select" aria-label="Selección de herramienta" name="herramienta" id="herramienta">
                <option disabled selected value="">Seleccionar</option>
                <?php foreach ($herramientas as $herramienta) : ?>
                    <option value-ID_herramienta="<?= $herramienta->ID_herramienta ?>" value-nombre_herramienta="<?= $herramienta->nombre_herramienta ?>"><?= $herramienta->nombre_herramienta; ?></option>
                <?php endforeach; ?>
            </select>
            <input required type="text" placeholder="Cantidad" name="cantidad" id="cantidad" class="form-control needs-validation">
            <button class="btn btn-outline-primary" type="button" onclick="agregarHerramienta();">Agregar</button>
        </div>

    </form>
</div>
<div class="container">
    <form action="<?php echo base_url('prestamos/agregarHerramienta/'); ?>" method="post" class="row g-3" id="form">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-auto me-auto">
                        <h3>Herramientas por agregar al préstamo</h3>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-primary" type="submit">Registrar</button>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush" id="solicitudHerramientas">

                </ul>
            </div>
        </div>
    </form>
</div>
<script>
    function agregarHerramienta() {

        var cantidad = document.getElementById('cantidad').value;
        var i = document.getElementById('herramienta');
        var ID_herramienta = i.options[i.selectedIndex].getAttribute('value-ID_herramienta');
        var nombre_herramienta = i.options[i.selectedIndex].getAttribute('value-nombre_herramienta');
        console.log(ID_herramienta)

        var numberList = document.getElementById("solicitudHerramientas");
        numberList.innerHTML += '<li class="list-group-item" id="' + ID_herramienta + '">' +
            '<input type="text" name="ID_herramienta[]" value="' + ID_herramienta + '" readonly>' +
            '<input type="text" name="cantidad[]" value="' + cantidad + '" readonly>' +
            '<input type="text" name="nombre_herramienta[]" value="' + nombre_herramienta + '" readonly>' +
            '<button class="btn btn-secondary" onclick = "eliminarItem (event, ' + ID_herramienta + ');">Eliminar </button>' +
            '</li>';
    }

    function eliminarItem(event, id) {
        event.preventDefault();
        console.log(id)
        var text = id.toString();
        console.log(text)
        var item = document.getElementById(text);
        item.parentNode.removeChild(item);
    }
</script>
<?= $this->endSection() ?>