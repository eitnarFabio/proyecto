
<div class="container">
  <div class="row">
    <div class="mb-12">

    <?php
      echo date ('y/m/d H:i:s');
    ?>
    <br>
    <table class="table">

      <?php
        echo form_open_multipart('estudiante/agregar');
      ?>

          <button type="submit" class="btn btn-success btn-xs">Agregar estudiante</button>

      <?php echo form_close();
      ?>

      <thead>  
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Primer Apellido</th>
          <th scope="col">Segundo Apellido</th>
          <th scope="col">Nota</th>
          <th scope="col">Fecha creado</th>
          <th scope="col">Modificar</th>
          <th scope="col">Eliminar</th>
          
        </tr>
      </thead>

      <tbody>

      <?php
        $indice=1; //le damos valor al indice para no mostrar el id

        foreach($estudiante->result() as $row){  //$estudiante se rescata del controlador estudiante con el mismo nombre que esta en el array asociativo $row solo es una variable que almacena datos 
          ?>

          <tr>
            <th scope="row"><?php echo $indice; ?></th>
            <td><?php echo $row->nombre; ?></td>   <!--nombre es el parametro de BD y debe ser escrito como en la BD y $row es el dato almacenado momentaneamente-->
            <td><?php echo $row->primerApellido; ?></td>
            <td><?php echo $row->segundoApellido; ?></td>
            <td><?php echo $row->nota; ?></td>
            <td><?php echo formatearFecha($row->creado); ?></td>
            <td>
              <?php
                echo form_open_multipart('estudiante/modificar');
              ?>
              <input type="hidden" name="idEstudiante" value="<?php echo $row->idEstudiante; ?>">
              <button type="submit" class="btn btn-primary btn-xs">Modificar</button>
              <?php
                echo form_close();
              ?>
            </td>
            <td>
              <?php
                echo form_open_multipart('estudiante/eliminarbd');
              ?>
              <input type="hidden" name="idEstudiante" value="<?php echo $row->idEstudiante; ?>">
              <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
              <?php
                echo form_close();
              ?>
            </td>
          </tr>

          <?php
          $indice++;
        }
      ?>

      </tbody>
    </table>
    
    </div>
  </div>  
  
</div>
