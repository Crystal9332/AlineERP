@extends('layout.index')
@section('content')
@include('common.header.nonAuthHeader');

    <main id="main">


      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <br>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Nuestros Clientes</li>
          </ol>
          <h2>Nuestros Clientes</h2>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
    
  
  
    <style>
      .module-tools
      {
        margin-bottom: 15px;
      }
    </style>
  
      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>NUESTRO CLIENTES</h2>
            <p>El enfoque de servicio personalizado nos ha permitido atender a una amplia cantidad de usuarios localizados en industrias y sectores diferentes. A continuación nos enorgullece listar a algunos de ellos</p>
          </div>
  
          <div class="row">
  
  
  
         
  
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/01_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/02_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/03_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/04_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/05_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/06_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/07_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/08_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/09_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/10_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/11_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/12_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/13_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/14_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/15_logo.png" class="img-fluid" alt="">
            </div>
          
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/16_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/17_logo.jpg" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/18_logo.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/19_logo.jpeg" class="img-fluid" alt="">
            </div>
  
            <div class="col-md-3 module-tools">
              <img src="assets/img/clientes/20_logo.jpg" class="img-fluid" alt="">
            </div>
            
  
          </div>
  
        </div>
      </section><!-- End Team Section -->
  
  
  
      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta" style="padding: 60px 0px;">
        <div class="container" data-aos="zoom-in">
  
          <div class="row text-center">
            <div class="col-lg-12 text-center">
              <h3>Únete a ellos</h3>
              <p> Y haz crecer tu negocio</p>
              <a class="cta-btn align-middle" href="#">CONTÁCTANOS</a>
            </div>
          </div>
  
        </div>
      </section><!-- End Cta Section -->
  
  
    <!-- Modal -->
    <div class="modal fade" id="Modal_cotizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Estás a un paso de ver crecer tu negocio</b></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          
            <form class="row g-3">
  
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label"><b>Tu nombre</b></label>
                <input type="text" class="form-control" id="" placeholder="Nombres y apellidos">
              </div>
  
  
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label"><b>Correo Electronico</b></label>
                <input type="email" class="form-control" id="" placeholder="tu@empresa.com">
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label"><b>N° de RUC</b></label>
                <input type="text" class="form-control" id="" placeholder="Validado por SUNAT">
              </div>
  
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label"><b>Celular</b></label>
                <input type="tel" class="form-control" id="" placeholder="9########">
              </div>
  
  
              <div class="col-md-12">
                <label for="inputPassword4" class="form-label"><b>Producto</b></label>
                <select class="form-select">
                  <option value="Versión Completa">Versión Completa</option>
                  <option value="Versión Básica">Versión Básica</option>
                  <option value="Versión Básica">Versión Industrial</option>
                  <option value="Versión Básica">Versión Distribución</option>
                  <option value="Versión Básica">Versión Proyectos</option>
                  <option value="Versión Básica">Módulo Recursos Humanos</option>
                  <option value="Versión Básica">Módulo Proyectos</option>
                  <option value="Versión Básica">Módulo Mantenimiento</option>
                  <option value="Versión Básica">Módulo Mesa de ayuda</option>
                  <option value="Versión Básica">Módulo Contabilidad</option>
                  <option value="Versión Básica">Módulo CRM</option>
                </select>
              </div>
  
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label"><b>N° de Usuarios</b></label>
                <input type="number" class="form-control" id="" value="5">
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label"><b>Base de Datos Adicionales</b></label>
                <input type="number" class="form-control" id="" value="5">
              </div>
  
              <div class="col-12">
                <label for="inputAddress" class="form-label"><b>Mensaje</b></label>
                <textarea type="text" class="form-control" id="" placeholder="Dejanos algún comentario adicional" rows="3">
                </textarea>
              </div>
  
  
              <div class="col-12 text-center">
                <button type="button" class="btn btn-primary">Enviar Cotización</button>
              </div>
  
            </form>
  
          </div>
        </div>
      </div>
    </div>
  
  
  
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
   @include('common.footer.footer');

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
