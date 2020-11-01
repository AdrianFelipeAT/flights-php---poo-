<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Search Flights
    
    </h1>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <form role="form" method="post">

          <div class="box-body">

            
            <div class="form-group">
              
              <!-- Origin -->

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-plane"></i></span> 

                <select class="form-control input-lg" name="departure" placeholder="Departure Station" required>
                  <option value="" selected disabled hidden>Departure Airport</option>
                  <option value="PEI">PEREIRA - PEI</option>
                  <option value="BOG">BOGOTÁ - BOG</option>
                  <option value="CTG">CARTAGENA - CTG</option>
                </select>
              </div>

            </div>

            <!-- Destination -->
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-plane"></i></span> 

                <select class="form-control input-lg" name="arrival" placeholder="Arrival Station" required>
                  <option value="" selected disabled hidden>Arrival Airport</option>
                  <option value="PEI">PEREIRA - PEI</option>
                  <option value="BOG">BOGOTÁ - BOG</option>
                  <option value="CTG">CARTAGENA - CTG</option>
                </select>
              </div>

            </div>
            
            <!-- Date -->
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="date" class="form-control input-lg" name="dateFlight" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" required>

              </div>

            </div>
  
          </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="submit" class="btn btn-primary">Search flight</button>

        </div>

      </form>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Departure Airport</th>
           <th>Arrival Airport</th>
           <th>Departure Date</th>
           <th>Actions</th>

         </tr> 

        </thead>

        <tbody>

        <?php
          echo $rsrr;
          $flight = FlightController::ctrFlightSearch();
          //new Alumno($calificaciones, $salon, $studenInfo);

          //$flight = new FlightController;  // correct

          $flightArray = json_decode($flight, true);
          $flightDecode = json_decode($flightArray, true);

          if ($flightDecode) {
            foreach ($flightDecode as $key => $value) {
              

              echo '<tr>

                      <td>'.($key+1).'</td>

                      <td>'.$value["DepartureStation"].'</td>

                      <td>'.$value["ArrivalStation"].'</td>

                      <td>'.$value["DepartureDate"].'</td>

                      <td>

                        <div class="btn-group">';


                            echo '<button class="btn btn-success btnSaveFlight" DepartureDate="'.$value["DepartureDate"].'" DepartureStation="'.$value["DepartureStation"].'" ArrivalStation="'.$value["ArrivalStation"].'"><i class="fa fa-save"></i></button>';

                        

                        echo '</div>  

                      </td>

                    </tr>';
            
              }
          }

        ?>
   
        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>