<?php include ("navbar.php") ?>

<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <div class="card-header">
        Datos del Postre
    </div>
    <div class="card-body">

      <form action="<?php echo base_url()?>C_c_postres/save" method="POST" enctype="multipart/form-data">
        Nombre: <input class="form-control" type="text" name="nombre" id="">
        <br/>
        Precio: <input class="form-control" type="text" name="precio" id="">
        <br/>
        Imagen del Postre: <input class="form-control" type="file" name="imagen" id="">
        <br/>
        <label>Descripcion</label>
        <textarea class="form-control" name="descripcion" rows="3"></textarea>
        <br/>
        <input class="btn btn-success" type="submit" value="Guardar Datos">
      </form>


    </div>
</div>
           
        </div>
        <div class="col-md-6">
        <div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th >ID</th>
                <th >Nombre</th>
                <th >Precio</th>
                <th >Imagen</th>
                <th >Descripcion</th>
                <th >Accion</th>
            </tr>
        </thead>

        <?php foreach ($lista as $key => $postre) {
            
            ?>

        <tbody>
            <tr >
                <td><?php echo $postre["ID_postres"] ?></td>
                <td><?php echo $postre["P_nombre"] ?></td>
                <td><?php echo $postre["P_precio"] ?></td>
                <td>-</td>
                <td><?php echo $postre["P_descripcion"] ?></td>
                
                <td><a class="btn btn-danger">Eliminar</a></td>
                
                
            </tr>
        </tbody>

        <?php } ?>

    </table>
</div>
        </div>
        
    </div>
</div>

<?php include ("footer.php") ?>

