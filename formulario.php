<?php

?>
<?php include_once "encabezado.php" ?>
<div class="row">
    <div class="col-12" style="background-color: white; border-radius: 20px;">
        <div style="width: 100%; text-align: center;">
            <h1>Agregar</h1>
        </div>
        <form action="insertar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input required name="nombre" type="text" id="nombre" placeholder="Nombre de mascota"
                    class="form-control">
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input required name="edad" type="number" id="edad" placeholder="Edad de mascota" class="form-control">
            </div>
            <div style="width: 100%; align-items: center; text-align: center;">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="./listar.php" class="btn btn-warning">Ver todas</a>
            </div>

        </form>
    </div>
</div>
<?php include_once "pie.php" ?>