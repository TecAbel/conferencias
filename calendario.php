<?php include_once 'includes\templates\header.php'; ?>


  

  <section class="seccion contenedor">
      <h2>Calendario de eventos</h2>
      <?php
        try {
            require_once('includes\functions\bd_conexion.php');
            $sql =  "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento,icono, nombre_invitado, apellido_invitado ";
            $sql .= "FROM eventos ";
            $sql .= "INNER JOIN categoria_evento ";
            $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql .= "INNER JOIN invitados ";
            $sql .= "ON eventos.id_invitado = invitados.invitado_id;";
            $resultado = $conn->query($sql);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
      ?>

      <div class="calendario clearfix">
        <?php
            $calendario = array();
            while($eventos = $resultado->fetch_assoc()){

              //para agrupar por fecha

              $fecha = $eventos['fecha_evento'];
              $evento = array(
                'titulo' => $eventos['nombre_evento'],
                'fecha' => $eventos['fecha_evento'],
                'hora' =>$eventos['hora_evento'],
                'categoria' => $eventos['cat_evento'],
                'icono' => 'fas'.' '.$eventos['icono'],
                'invitado' => $eventos['nombre_invitado']." ".$eventos['apellido_invitado']

              );

              $calendario[$fecha][] = $evento;
              
              ?>
              
         <?php   }

         // imprime todos los eventos

         foreach ($calendario as $dia => $lista_eventos) {?>

         <h3 class="fechas-cal">
          <i class="fa fa-calendar"></i>
          <?php /*formato a fecha*/ 

          //idioma UNIX 
          setlocale(LC_TIME, 'es_ES.UTF-8');
          //idioma windows
          setlocale(LC_TIME, 'spanish');
           echo utf8_encode(strftime('%A, %d de %B del %Y', strtotime($dia))) ;
           ?>
         </h3>
           <?php

           foreach ($lista_eventos as $evento ) {
             ?>
              <div class="dia">
                <p class="titulo"><?php echo $evento['titulo']; ?></p>
                <p class="hora">
                  <i class="far fa-clock" aria-hidden="true"></i>
                  <?php echo $evento['fecha']. " " .$evento['hora']; ?>
                </p>
                <p>
                  <i class="<?php echo $evento['icono'] ;?>"></i>
                  <?php echo $evento['categoria']; ?>
                </p>
                <p class="hora">
                  <i class="far fa-user" aria-hidden="true"></i>
                  <?php echo $evento['invitado']. " " .$evento['hora']; ?>
                </p>
              </div>
             <?php
           }
         }
        ?>
        
        
      </div>
      
      <?php $conn->close();?>
  </section>


<?php include_once 'includes\templates\footer.php';?>
