<?php echo $this->extend('plantilla'); ?>

<?php echo $this->section('contenido'); ?>
<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>
<!-- DIV para un contenido o header de presentacion -->
<div class=" container mt-5 text-center">


    <!-- la imagen de servilolihksbfkjgj
                            dfibsdhfbgdsjkbfkjdsbkfhbusdbfkhbdskhfbkhbf
                        sdopfjojusdhfkhbsdfjbkjbd
                    ljdbkj khd kvhbkjbhbjhdbhkbd -->
    <img src="https://i.imgur.com/KnYkoJl.png" width="200" height="130">
</div>

<!-- DIV para contenido de ka app [tablas, forms, etc.] -->
<div class="container  px-4  gy-5">
    <h4>Bienvenido a SERVILOLI</h4>
    <p>Una sucursal de Trupper :D</p>
</div>

<div class="container  px-4  gy-5">
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
    <center>
        <h4>Página principal de SERVILOLI</h4>
        <h4>SOLO PERSONAL AUTORIZADO</h4>
    </center>

</div>
<?= $this->endSection() ?>
<?php echo $this->endSection(); ?>