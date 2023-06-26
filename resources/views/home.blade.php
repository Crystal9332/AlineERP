@extends('layout.index')
@section('content')
@include('common.header.nonAuthHeader');

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Juntos haremos crecer tu negocio</h1>
                    <h2>Somos una empresa preparada para darte el mejor soporte ERP que llevara a tu empresa al
                        siguiente nivel.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Comencemos</a>
                        <a href="https://www.youtube.com/watch?v=R8kzzeMW9H8" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Ver Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <!-- <img src="assets/img/hero-img.png" class="img-fluid animated" alt=""> -->
                    <img src="assets/img/banner.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Nosotros</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-4">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <img src="./assets/img/values-1.png" class="img-fluid" alt="">
                            <h3>Misión</h3>
                            <p>Buscar los mejores resultados para satisfacer las necesidades de la micro, mediana y gran
                                empresa,
                                con soluciones al alcance del cliente.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="400">
                            <img src="./assets/img/values-2.png"class="img-fluid" alt="">
                            <h3>Visión</h3>
                            <p> Convertirnos en una empresa reconocida en el Perú, capaces de cumplir con todas
                                las necesidades de tecnología y brindar un servicio de calidad. </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="600">
                            <img src="./assets/img/values-3.png" class="img-fluid" alt="">
                            <h3>Fortaleza</h3>
                            <p>Nuestra grandeza se encuentra en el servicio personalizado que brindamos,
                                contamos con talento humano capaz de desarrollar estrategias de investigación y
                                desarrollo e innovación
                                que es parte fundamental de la compañia. </p>
                        </div>
                    </div>


                </div>
        </section><!-- End About Us Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h1 style="font-weight: 700; color: #2f84cd; ">¿Por qué elegirnos?</h1>
                    <!-- <p>¿Por qué elegirnos?</p> -->
                </header>

                <div class="row">




                    <!-- <div class="col-lg-5">
              <img src="{{ asset('plugins/arsha/img/about_3.jpg') }}" class="img-fluid" alt="">
            </div> -->

                    <div class="col-lg-12 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6 pt-2 pb-2" data-aos="zoom-out" data-aos-delay="200">

                                <div class="feature-box d-flex align-items-center">
                                    <img class="ld image-check mr-3" src="assets/img/giphy.gif">
                                    <h3>Tenemos experiencia</h3>
                                </div>
                            </div>

                            <div class="col-md-6 pt-2 pb-2" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <img class="ld image-check mr-3" src="assets/img/giphy.gif">
                                    <h3>Soporte 24x7x365 días</h3>
                                </div>
                            </div>

                            <div class="col-md-6 pt-2 pb-2" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <img class="ld image-check mr-3" src="assets/img/giphy.gif">
                                    <h3>No hay cargos ocultos</h3>
                                </div>
                            </div>

                            <div class="col-md-6 pt-2 pb-2" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <img class="ld image-check mr-3" src="assets/img/giphy.gif">
                                    <h3>Atención personalizada</h3>
                                </div>
                            </div>

                            <div class="col-md-6 pt-2 pb-2" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <img class="ld image-check mr-3" src="assets/img/giphy.gif">
                                    <h3>Calidad de servicio</h3>
                                </div>
                            </div>



                        </div>
                    </div>

                </div> <!-- / row -->


            </div>

        </section><!-- End Features Section -->

        <style>
            .module-tools {
                margin-bottom: 15px;
            }

            .moduele-hover {

                cursor: pointer;
            }
        </style>

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Módulos</h2>
                    <p>Proporciona las soluciones, los procesos y las herramientas para ayudarlo a administrar sus datos
                        y obtener información sobre su negocio.</p>
                </div>

                <div class="row">

                    <div onclick="abrirmodalmodulo('comercial')"
                        class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dropbox"></i></div>
                            <h4><a>COMERCIAL</a></h4>
                            <p>Seremos tu aliado estratégico para apoyar tus ventas</p>
                        </div>
                    </div>

                    <div onclick="abrirmodalmodulo('compras')"
                        class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dropbox"></i></div>
                            <h4><a>COMPRAS</a></h4>
                            <p>Tu sistema de compras, ahora tendrá un control exacto y productivo</p>
                        </div>
                    </div>

                    <div onclick="abrirmodalmodulo('pos')"
                        class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dropbox"></i></div>
                            <h4><a>PUNTO DE VENTA</a></h4>
                            <p>Agrega puntos de venta a tu solución</p>
                        </div>
                    </div>

                    <div onclick="abrirmodalmodulo('factura')"
                        class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dropbox"></i></div>
                            <h4><a>FACTURA ELECTRÓNICA</a></h4>
                            <p>La manera más práctica de generar tud documentos contables</p>
                        </div>
                    </div>


                    <div onclick="abrirmodalmodulo('planilla')"
                        class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dropbox"></i></div>
                            <h4><a>PLANILLAS</a></h4>
                            <p>Ahora podrás tener una planilla al día, con la información necesaria y relevante</p>
                        </div>
                    </div>

                    <div onclick="abrirmodalmodulo('inventarios')"
                        class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dropbox"></i></div>
                            <h4><a>INVENTARIOS</a></h4>
                            <p>Control total de tus existencias, para que tomes las mejores decisiones</p>
                        </div>
                    </div>

                    <div onclick="abrirmodalmodulo('produccion')"
                        class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dropbox"></i></div>
                            <h4><a>PRODUCCIÓN</a></h4>
                            <p>Usa la información del sistema para precisar tu volumen de producción</p>
                        </div>
                    </div>

                    <div onclick="abrirmodalmodulo('contabilidad')"
                        class="col-xl-3 col-md-6 d-flex align-items-stretch module-tools moduele-hover" data-aos="zoom-in"
                        data-aos-delay="400">
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
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>ALLIN ERP</h3>
                        <p> Los negocios son más vulnerables en épocas de crisis, necesitas estar mejor preparado.
                            Haz que la incertidumbre juegue a tu favor, conoce la solución de ALLIN ERP.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">COTIZAR</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->



        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>CERTIFICACIONES</h2>
                    <p>Proporciona las soluciones, los procesos y las herramientas para ayudarlo a administrar sus datos
                        y obtener información sobre su negocio.</p>
                </div>

                <div class="row">






                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="assets/img/team/iso.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>ISO 9001:2015</h4>
                                <span>(Organización Internacional de Normalización)</span>
                                <p>ISO integrado en nuestra empresa.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="assets/img/team/iso.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>ISO 27001:2013</h4>
                                <span>(Organización Internacional de Normalización)</span>
                                <p>ISO integrado en nuestra empresa.</p>

                            </div>
                        </div>
                    </div>






                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Curiosidades</h2>
                    <p>No te quedes atrás.</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bxs-message-detail icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">¿Cuáles son los módulos indispensables
                                para que mi ERP impulse el crecimiento de mi empresa? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Elegir un sistema ERP es una decisión muy importante para la vida de la empresa. Que
                                    un ERP tenga muchos módulos o funcionalidades no indica
                                    que sea mejor, sino más bien debe ajustarse a lo que necesite y que pueda llegar a
                                    necesitar.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bxs-message-detail icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed"> ¿Por qué mi empresa debe invertir en
                                tecnología? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    En un mundo globalizado, las empresas están en constante cambio para pensar en
                                    distintas formas de ampliar sus fuentes de ingresos al mismo tiempo
                                    que recortan gastos. Para liderar en el mercado hay que competir cada vez más y para
                                    eso, qué mejor que contar con sistemas de información integrados
                                    que generen soluciones que les permita automatizar todos sus procesos.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bxs-message-detail icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">¿Sabes cómo llevar la funcionalidad de
                                tu ERP a otro nivel? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Si bien el ERP por sí mismo cuenta con los principales módulos necesarios para tener
                                    un control total del negocio. Hay empresas que requieren especial control de algunas
                                    áreas en específico. La integración de todos los procesos, la reducción de errores
                                    en el trabajo diario y la simplificación de la operativa brindan un gran ahorro.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bxs-message-detail icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">¿Está aprovechando el auge tecnológico
                                en favor de su organización? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Toda empresa que busque crecer, debe necesariamente adoptar tecnologías que la
                                    ayuden a generar más ventas y mejorar procesos todo al mismo tiempo. Este es un
                                    proceso que es altamente recomendable apostar por él; de tal forma que todos los
                                    procesos de la empresa se estandarizan y así es mucho más fácil la administración y
                                    gestión.
                                </p>
                            </div>
                        </li>


                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>¿DONDÉ PUEDES ENCONTRARNOS?</h2>

                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Localizacón:</h4>
                                <p>
                                    <strong>Dirección Principal:</strong>
                                    <br>
                                    El Rosario del Norte, Av. Los Paltinos Mz Q Lote 42 Departamento 101 - LIMA
                                    <br>
                                    Celular: 949867060
                                </p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>
                                    <!-- GERENCIA<br>gerencia@allinerpsoftware.com.pe <br><br> -->
                                    VENTAS<br>ventas@allinerpsoftware.com<br><br>
                                    <!-- SOPORTE GENERAL<br>acollantes@allinerpsoftware.com.pe<br><br>
                      CONTADOR<br>eduardo.contador@allinerpsoftware.com.pe -->
                                </p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Celular:</h4>
                                <p>+51 949 867 060</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Mapa:</h4>
                            </div>
                            <br>
                            <br>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.42604238898716!2d-78.52303451303366!3d-7.147185159751911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b25a5f25a6aaab%3A0x9bd2915450ff7627!2sALLIN%20ERP%20SOFTWARE%20S.A.C.!5e0!3m2!1ses-419!2spe!4v1645829014604!5m2!1ses-419!2spe"
                                width="600" height="450" style="border:0;" allowfullscreen=""
                                loading="lazy"></iframe>

                        </div>


                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->


        <!-- Modal -->
        <div class="modal fade" id="ModalModuloGeneral" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <b>
                            <h5 class="modal-title" id="modmodulo-titulo"></h5>
                        </b>
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
        <div class="modal fade" id="Modal_cotizar" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Estás a un paso de ver crecer tu
                                negocio</b></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form class="row g-3">

                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"><b>Tu nombre</b></label>
                                <input type="text" class="form-control" id=""
                                    placeholder="Nombres y apellidos">
                            </div>


                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"><b>Correo Electronico</b></label>
                                <input type="email" class="form-control" id="" placeholder="tu@empresa.com">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label"><b>N° de RUC</b></label>
                                <input type="text" class="form-control" id=""
                                    placeholder="Validado por SUNAT">
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
                                <label for="inputPassword4" class="form-label"><b>Base de Datos
                                        Adicionales</b></label>
                                <input type="number" class="form-control" id="" value="5">
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label"><b>Mensaje</b></label>
                                <textarea type="text" class="form-control" id="" placeholder="Dejanos algún comentario adicional"
                                    rows="3">
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
