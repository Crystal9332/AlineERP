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
        <li>Nuestros Módulos</li>
      </ol>
      <h2>Nuestros Módulos</h2>

    </div>
  </section><!-- End Breadcrumbs -->




<style>
  .module-tools
  {
    margin-bottom: 15px;
  }
</style>



<style>
.module-tools
{
  margin-bottom: 15px;
}

.moduele-hover
{

  cursor: pointer;
}

</style>

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Módulos</h2>
      <p>Proporciona las soluciones, los procesos y las herramientas para ayudarlo a administrar sus datos y obtener información sobre su negocio.</p>
    </div>

    <div class="row">

      <div onclick="abrirmodalmodulo('comercial')" class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dropbox"></i></div>
          <h4><a>COMERCIAL</a></h4>
          <p>Seremos tu aliado estratégico para apoyar tus ventas</p>
        </div>
      </div>

      <div onclick="abrirmodalmodulo('compras')" class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dropbox"></i></div>
          <h4><a>COMPRAS</a></h4>
          <p>Tu sistema de compras, ahora tendrá un control exacto y productivo</p>
        </div>
      </div>

      <div onclick="abrirmodalmodulo('pos')" class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dropbox"></i></div>
          <h4><a>PUNTO DE VENTA</a></h4>
          <p>Agrega puntos de venta a tu solución</p>
        </div>
      </div>

      <div onclick="abrirmodalmodulo('factura')" class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dropbox"></i></div>
          <h4><a>FACTURA ELECTRÓNICA</a></h4>
          <p>La manera más práctica de generar tud documentos contables</p>
        </div>
      </div>


      <div onclick="abrirmodalmodulo('planilla')" class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dropbox"></i></div>
          <h4><a>PLANILLAS</a></h4>
          <p>Ahora podrás tener una planilla al día, con la información necesaria y relevante</p>
        </div>
      </div>

      <div onclick="abrirmodalmodulo('inventarios')" class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dropbox"></i></div>
          <h4><a>INVENTARIOS</a></h4>
          <p>Control total de tus existencias, para que tomes las mejores decisiones</p>
        </div>
      </div>

      <div onclick="abrirmodalmodulo('produccion')" class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dropbox"></i></div>
          <h4><a>PRODUCCIÓN</a></h4>
          <p>Usa la información del sistema para precisar tu volumen de producción</p>
        </div>
      </div>
      
      <div onclick="abrirmodalmodulo('contabilidad')" class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dropbox"></i></div>
          <h4><a>CONTABILIDAD</a></h4>
          <p>Seremos un aliado estratégico, tu mejor soporte</p>
        </div>
      </div>



    </div>



  </div>
</section><!-- End Services Section -->









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
  <div class="modal fade" id="ModalModuloGeneral" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title" id="modmodulo-titulo"></h5></b>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          
          <div id="modmodulo-contenido">
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

    
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
