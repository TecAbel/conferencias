<?php include_once 'includes\templates\header.php' ?>


  <section class="seccion contenedor">
    
      <h2>La mejor conferencia de diseño web en español</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, sint mollitia consequatur iste dolores perferendis quia rerum? Id voluptatem dolorum quam? Ad, tenetur in ullam commodi rerum deleniti impedit quidem?</p>
    
  </section>

  <section class="programa seccion">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div><!--Cierra contenedor video-->
    
    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <?php
            try {
                require_once('includes\functions\bd_conexion.php');
                $sql =  "SELECT * FROM categoria_evento;";
                $resultado = $conn->query($sql);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
          ?>
          <nav class="menu-programa">
            <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)){?>
              
              <a href="#<?php echo $cat['cat_evento']?>"><i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i><?php echo $cat['cat_evento'] ?></a>
            <?php } ?>
          </nav>
          <?php
        try {
            require_once('includes\functions\bd_conexion.php');
            $sql =  "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento,icono, nombre_invitado, apellido_invitado ";
            $sql .= "FROM eventos ";
            $sql .= "INNER JOIN categoria_evento ";
            $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql .= "INNER JOIN invitados ";
            $sql .= "ON eventos.id_invitado = invitados.invitado_id;";
            $sql .= "AND eventos.evento_id = 1;";
            $sql .= "ORDER BY evento_id LIMIT 2";
            $sql .=  "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento,icono, nombre_invitado, apellido_invitado ";
            $sql .= "FROM eventos ";
            $sql .= "INNER JOIN categoria_evento ";
            $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql .= "INNER JOIN invitados ";
            $sql .= "ON eventos.id_invitado = invitados.invitado_id;";
            $sql .= "AND eventos.evento_id = 2";
            $sql .= "ORDER BY evento_id LIMIT 2;";
            $sql .=  "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento,icono, nombre_invitado, apellido_invitado ";
            $sql .= "FROM eventos ";
            $sql .= "INNER JOIN categoria_evento ";
            $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql .= "INNER JOIN invitados ";
            $sql .= "ON eventos.id_invitado = invitados.invitado_id;";
            $sql .= "AND eventos.evento_id = 3";
            $sql .= "ORDER BY evento_id LIMIT 2;";
            
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
      ?>

      <?php
        $conn->multi_query($sql);
        

        do{
          $resultado = $conn->store_result();
          $row = $resultado->fetch_all(MYSQLI_ASSOC);
          $i = 0;
          ?>

          <?php foreach($row as $evento): ?>
          <?php if($i % 2 == 0){?>
            <div class="info-curso ocultar clearfix" id="<?php echo $evento['cat_evento'] ?>">
        <?php  }?>
            
              <div class="detalle-evento">
                <h3><?php echo $evento['nombre_evento'] ?></h3>
                <p><i class="fa fa-clock" aria-hidden="true"></i><?php echo $evento['hora_evento'] ?></p>
                <p><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $evento['fecha_evento'] ?></p>
                <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $evento['nombre_invitado'] . ' ' . $evento['apellido_invitado'] ?></p>
              </div>
          <?php if($i % 2 ==1): ?>
              <a href="calendario" class="button float-right">Ver todos</a>
            </div><!--talleres-->

          <?php endif; ?>
          <?php $i++;
        endforeach; ?>
        <?php $resultado->free();?>
        <?php }while($conn->more_results() && $conn->next_result());
        ?>

        
      
          

          <div class="info-curso ocultar clearfix" id="Conferencias">
            <div class="detalle-evento">
              <h3>Cómo ser freelancer</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 10:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Gregorio Zánchez</p>
            </div>
            <div class="detalle-evento">
              <h3>Tecnologías del futuro</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 20:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Diana Smith</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div><!--talleres-->

          <div class="info-curso ocultar clearfix" id="Seminarios">
            <div class="detalle-evento">
              <h3>Diseño UI Móviles</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 17:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Anibal Armstrong</p>
            </div>
            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 20:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Jessica Mora</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div><!--talleres-->

        </div>
      </div>
    </div>
  </section><!--cierra conferencias-->

  <?php include_once 'includes/templates/invitados.php' ?>
  
  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero"></p>Invitados</li>
        <li><p class="numero"></p>Talleres</li>
        <li><p class="numero"></p>Días</li>
        <li><p class="numero"></p>Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por día</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Pase todos los días</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button ">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 días</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section><!--cierra precios-->

  <!--mapas-->

  <div class="mapa" id="mapa">

  </div>

  <section class="testimoniales seccion">
    <h2>Testimoniales</h2>
    <div class="contenedor testimoniales clearfix">
        <div class="testimonial">
            <blockquote cite=""> 
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto officia exercitationem praesentium distinctio mollitia, sequi porro delectus quasi, neque natus tempora vero, odio reprehenderit excepturi molestiae? Provident obcaecati minus odit!</p>
              <footer class="info-testimonial clearfix">
                <img src="img/testimonial.jpg" alt="testimonial">
                <cite>Oswaldo Aponte <span>diseñador en @prisma</span></cite>
              </footer >
            </blockquote>
            
          </div>
          <div class="testimonial">
            <blockquote cite=""> 
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto officia exercitationem praesentium distinctio mollitia, sequi porro delectus quasi, neque natus tempora vero, odio reprehenderit excepturi molestiae? Provident obcaecati minus odit!</p>
              <footer class="info-testimonial clearfix">
                <img src="img/testimonial.jpg" alt="testimonial">
                <cite>Oswaldo Aponte <span>diseñador en @prisma</span></cite>
              </footer >
            </blockquote>
            
          </div>
          <div class="testimonial">
            <blockquote cite=""> 
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto officia exercitationem praesentium distinctio mollitia, sequi porro delectus quasi, neque natus tempora vero, odio reprehenderit excepturi molestiae? Provident obcaecati minus odit!</p>
              <footer class="info-testimonial clearfix">
                <img src="img/testimonial.jpg" alt="testimonial">
                <cite>Oswaldo Aponte <span>diseñador en @prisma</span></cite>
              </footer >
            </blockquote>
            
          </div>
    </div>
  </section><!--cierra testimonial-->

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Regístrate al Newsletter</p>
      <h3>CDMXWebCamp</h3>
      <a href="#" class="button transparent">Registro</a>
    </div>
  </div>


  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p>Días</li>
        <li><p id="horas" class="numero"></p>Horas</li>
        <li><p id="minutos" class="numero"></p>Minutos</li>
        <li><p id="segundos" class="numero"></p>Segundos</li>
      </ul>
    </div>
  </section>


  <?php include_once 'includes\templates\footer.php' ?>