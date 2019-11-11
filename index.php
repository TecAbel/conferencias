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
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i>Talleres</a>
            <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i>Conferencias</a>
            <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i>Seminarios</a>
          </nav>

          <div class="info-curso ocultar clearfix" id="talleres">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 Y JavaScript</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 16:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Rafael Bautista</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Design</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 20:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Rafael Bautista</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div><!--talleres-->

          <div class="info-curso ocultar clearfix" id="conferencias">
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

          <div class="info-curso ocultar clearfix" id="seminarios">
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

  <section class="invitados contenedor seccion">
    <h2>Nuestros invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="imagen invitado">
          <p>Rafael Bautista</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="imagen invitado">
          <p>Diana Smith</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="imagen invitado">
            <p>Anibal Armstrong</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="imagen invitado">
          <p>Lara Fisher</p>
        </div>
      </li>
      <li>
          <div class="invitado">
            <img src="img/invitado5.jpg" alt="imagen invitado">
            <p>Giovani Govea</p>
          </div>
      </li>
      <li>
          <div class="invitado">
            <img src="img/invitado6.jpg" alt="imagen invitado">
            <p>Jessica Mora</p>
          </div>
      </li>
    </ul>
  </section><!--invitados-->
  
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