








<div class="container-fluid py-4">
      
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>LECTURA DE POTENCIA DEL PANEL SOLAR</h6>
                

                 
                  <!-- <?php
                    echo form_open_multipart('riego/agregar');
                  ?>

                      <button type="submit" class="btn btn-success btn-xs">Agregar lectura</button>

                  <?php echo form_close();
                  ?>   -->


            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Número</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Voltaje</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Corriente</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Fecha</th>
                      <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Modificar</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Eliminar</th> -->
                      
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php
                    $indice=1; //le damos valor al indice para no mostrar el id

                    foreach($medicionsolar->result() as $row){  //$estudiante se rescata del controlador estudiante con el mismo nombre que esta en el array asociativo $row solo es una variable que almacena datos 
                      ?>
                    
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="<?php echo base_url(); ?>assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm"><?php echo $indice; ?></h6>
                          </div>
                        </div>
                      </td>
                      
                      <td>
                        <span class="text-xs font-weight-bold"><?php echo $row->voltaje; ?> v</span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold"><?php echo $row->corriente; ?> I</span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold"><?php echo formatearFecha($row->fecha_registro); ?></span>
                      </td>
                      <!-- <td>
                        <?php
                          echo form_open_multipart('riego/modificar');
                        ?>
                        <input type="hidden" name="idLecturaEnergiaSolar" value="<?php echo $row->idpanel; ?>">
                        <button type="submit" class="btn btn-primary btn-xs">Modificar</button>
                        <?php
                          echo form_close();
                        ?>
                      </td>
                      <td>
                        <?php
                          echo form_open_multipart('riego/eliminarbd');
                        ?>
                        <input type="hidden" name="idLecturaEnergiaSolar" value="<?php echo $row->idpanel; ?>">
                        <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                        <?php
                          echo form_close();
                        ?>
                      </td> -->

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
        </div>

        <div class="row mt-4">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Grafico voltaje</h6>
              </div>
              <div class="card-body p-3">
              
                <canvas id="miGrafico"></canvas>
              
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Grafico corriente</h6>
                
              </div>
              <div class="card-body p-3">
              
                <canvas id="miGrafico2"></canvas>
              
              </div>
            </div>
          </div>

        </div>
        
      </div>


      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    
    <script>
        // Obtener los datos de PHP y asignarlos a una variable de JavaScript
        var medicionsolar = <?php echo json_encode($medicionsolar); ?>;
        console.log(medicionsolar.result_object);
        // Obtener el contexto del lienzo
        var ctx = document.getElementById('miGrafico').getContext('2d');

        var ctx2 = document.getElementById('miGrafico2').getContext('2d');

        // Configurar los datos para el gráfico1
        var labels = [];
        var corrienteData = [];
        var voltajeData = [];
        var arrayMed = medicionsolar.result_object;

        console.log(arrayMed[1].voltaje);

        //array para el primer grafico
        for (var i = 0; i < arrayMed.length; i++) {
            // Acceder a los valores de fechaHora y voltaje de cada objeto
            var voltajes = arrayMed[i].voltaje;
            var corrientes = arrayMed[i].corriente;
            var label = arrayMed[i].fecha_registro;
            console.log("valor corriente:"+corrientes);
            corrienteData.push(corrientes); // Convertir a número flotante
            voltajeData.push(voltajes); // Convertir a número flotante
            labels.push(label);
        }

        console.log("valor final:"+labels);

        var datos = {
            labels: labels,
            datasets: [{
                label: 'Voltajes',
                data: voltajeData,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };

        // Crear el gráfico de barras
        var miGrafico = new Chart(ctx, {
            type: 'line',
            data: datos,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        //segundo grafico
        var datos2 = {
            labels: labels,
            datasets: [{
                label: 'corriente',
                data: corrienteData,
                fill: false,
                borderColor: 'rgb(99, 0, 57)',
                tension: 0.1
            }]
        };

        // Crear el gráfico de barras
        var miGrafico2 = new Chart(ctx2, {
            type: 'line',
            data: datos2,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        
    </script>