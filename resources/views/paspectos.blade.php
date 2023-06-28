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
                    <li>Produto</li>
                </ol>
                <h2>Aspectos Técnicos</h2>

            </div>
        </section><!-- End Breadcrumbs -->




        <style>
            .module-tools {
                margin-bottom: 15px;
            }
        </style>

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg" hidden>
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>NUESTRO CLIENTES</h2>
                    <p>El enfoque de servicio personalizado nos ha permitido atender a una amplia cantidad de usuarios
                        localizados en industrias y sectores diferentes. A continuación nos enorgullece listar a algunos de
                        ellos</p>
                </div>

            </div>
        </section><!-- End Team Section -->



        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">



                <div class="row">

                    <div class="col-md-6">

                        <img src="assets/img/aspectos-tecnicos.jpg" class="img-fluid" alt="">

                    </div>

                    <div class="col-md-6">
                        <div class="portfolio-details-container ">

                            <div class="portfolio-description " style="padding-top: 0px !important;">
                                <h2>LICENCIA DE USO</h2>
                                <p>
                                    La Licencia de Uso de un módulo cubre para instalación en todos los Computadores del
                                    Negocio
                                    ya que no se asocia la Licencia al Equipo, La Licencia es por PC-Servidor el cual
                                    normalmente
                                    se encuentra en la sede central de cada Empresa, por lo que un módulo puede ser
                                    ejecutado tanto
                                    en la sede central como en las sucursales del Negocio (con excepción del módulo de punto
                                    de venta
                                    que tiene un Licenciamiento por Caja).
                                </p>

                            </div>

                            <div class="portfolio-description ">
                                <h2>CONTROL DE ACCESO AL SISTEMA</h2>
                                <p>

                                    Al adquirir cualquier módulo viene con un sistema Administrador que se encarga de
                                    gestionar la seguridad
                                    y mantenimiento de tablas maestras del ERP, permite tener una seguridad por Usuario, el
                                    cual se debe validar
                                    con una contraseña. Este módulo Administrador permite indicarle al Sistema que opciones
                                    podrá tener Acceso
                                    un Grupo de Usuarios a determinados menús del Sistema ALLIN ERP. </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="portfolio-details-container ">

                            <div class="portfolio-description ">
                                <h2>BASE DE DATOS</h2>
                                <p>
                                    ALLIN ERP, utiliza Base de Datos SQL Server en sus versiones actuales, que al ser
                                    Relacional garantiza la
                                    Integridad de los datos almacenados. además, permite conexiones remotas y ofrece
                                    ejecución de Copias de
                                    Seguridad Automáticas (Backus) lo cual nos da seguridad de la información almacenada en
                                    el Sistema.
                                </p>
                            </div>
                            <div class="portfolio-description ">
                                <h2>ENTREGABLES</h2>
                                <p>
                                    El Sistema se entrega en versión ejecutable, más los manuales de Usuario
                                    correspondientes a cada módulo
                                    adquirido, además de los Instaladores para ser ejecutados en las PC’s de la red del
                                    Cliente.
                                </p>
                            </div>
                            <div class="portfolio-description ">
                                <h2>CONECTIVIDAD</h2>
                                <p>
                                    Todos los módulos pueden tener acceso de manera remota a través de conexiones VPN o
                                    Internet, de manera que
                                    se puede registrar información desde sucursales o supervisar el trabajo desde fuera de
                                    la empresa si los
                                    usuarios de mayor rango requieren hacer seguimiento o consultar información On-line es
                                    totalmente posible
                                    con el acceso y la infraestructura de conectividad previamente implementada.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="portfolio-details-container ">
                            <div class="portfolio-description ">
                                <h2>HERRAMIENTAS DE DESARROLLO</h2>
                                <p>
                                    ALLIN ERP, ha sido desarrollado para plataformas Microsoft y trabaja en modalidad
                                    Cliente/Servidor, está
                                    codificado en el entorno Visual Studio .NET 2019.
                                </p>
                            </div>
                            <div class="portfolio-description ">
                                <h2>REQUERIMIENTOS TÉCNICOS</h2>
                                <p>
                                    Los Requerimientos mínimos y recomendados de hardware y software para que el sistema
                                    opere de manera aceptable
                                    son los siguientes:
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="portfolio-details-container ">


                            <div class="portfolio-description ">
                                <div class="table-responsive-md">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr class="table-info">
                                                <th colspan="4" class="text-center"> <strong> SERVIDOR DE BASE DE DATOS
                                                    </strong> </th>
                                            </tr>
                                            <tr class="table-active">
                                                <th scope="col"> PARTE/PIEZA/DISPOSITIVO </th>
                                                <th scope="col"> CONFIGURACIÓN MINIMA </th>
                                                <th scope="col"> CONFIGURACIÓN RECOMENDADA </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"> Procesador </th>
                                                <td> Intel CORE I5 o superior </td>
                                                <td> Equipo Servidor de Configuración Actual </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> Memoria RAM </th>
                                                <td> 8 GB o superior </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> Disco Duro </th>
                                                <td> 500GB </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> CDROM </th>
                                                <td> CD-RW (Opcional) </td>
                                                <td> CD-RW </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <p><strong>Software :</strong></p>
                                                    <p>Sistema Operativo Windows Server (Actualizado)<br>
                                                        Microsoft SQL SERVER (Actualizado)<br>
                                                        Se Recomienda que el servidor solo sea utilizado como SERVIDOR de
                                                        BASE de DATOS y
                                                        no ejecutar otros servicios de Red</p>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="portfolio-details-container ">

                            <div class="portfolio-description ">
                                <div class="table-responsive-md">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr class="table-info">
                                                <th colspan="4" class="text-center"> ESTACIONES DE TRABAJO </th>
                                            </tr>
                                            <tr class="table-active">
                                                <th scope="col"> PARTE/PIEZA/DISPOSITIVO </th>
                                                <th scope="col"> CONFIGURACIÓN MINIMA </th>
                                                <th scope="col"> CONFIGURACIÓN RECOMENDADA </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"> Procesador </th>
                                                <td> Intel Pentium CORE I3 o superior </td>
                                                <td> Computador de Configuración Actual en el Mercado </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> Memoria RAM </th>
                                                <td> 4 GB o superior </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> Disco Duro </th>
                                                <td> 60 GB Disponibles </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <p><strong>Software :</strong></p>
                                                    <p> Sistema Operativo Windows 7 o Superior <br>
                                                        Microsoft Office</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="col-md-12">
                        <div class="portfolio-details-container ">


                            <div class="portfolio-description ">
                                <p> Adicionalmente la red debe tener una velocidad de 100Mbps (Mínimo Recomendado) y
                                    protocolo TCP/IP <br>
                                    El Sistema no Funciona en Plataformas Linux, Mac u otra que no sea Microsoft Windows</p>
                            </div>

                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="portfolio-details-container ">

                            <div class="portfolio-description ">
                                <h2> ASESORÍA Y CONSULTORÍA </h2>
                                <p>
                                    Analizamos los procesos actuales, las necesidades de información y las expectativas de
                                    su empresa, para ayudarlos
                                    a optimizar sus procesos y definir sus requerimientos de información. Evaluamos la
                                    disponibilidad y adecuación del
                                    entorno tecnológico de su organización (hardware, software, comunicaciones) para
                                    garantizar el éxito del proyecto.
                                    Planificamos el proyecto para asegurar una rápida implantación y beneficios tangibles en
                                    cada etapa del proyecto.
                                </p>
                            </div>

                            <div class="portfolio-description ">
                                <h2 style="width: 100% !important;"> ADAPTACIONES O AJUSTES AL SISTEMA (PERSONALIZACIÓN)
                                </h2>
                                <p>
                                    La funcionalidad del sistema puede ser configurada de acuerdo a los requerimientos
                                    particulares de su empresa. Sin
                                    embargo, en caso lo requiera podemos ofrecerle tres niveles de personalización
                                    complementarios:
                                </p>
                                <ul style="list-style: none;">
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i>
                                        Desarrollo de reportes adicionales de acuerdo a requerimientos específicos. </li>
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i>
                                        Desarrollo de servicios y funcionalidad complementaria. </li>
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i>
                                        Además, considerando que los requerimientos de información evolucionan con su
                                        empresa, capacitamos
                                        a su personal en la generación de nuevos reportes, que permitan atender las futuras
                                        demandas de
                                        información, sin dependencia de su proveedor de software.</li>
                                </ul>
                            </div>

                            <div class="portfolio-description ">
                                <h2> IMPLEMENTACIÓN </h2>
                                <p>
                                    Nuestra metodología de implementación es personalizada y plantea soluciones alcanzables
                                    y logra implantaciones
                                    exitosas rápidamente. Atendiendo a un análisis previo de sus procesos y necesidades de
                                    información, llevamos
                                    a cabo la implementación de forma efectiva e integral, brindando los siguientes
                                    servicios:
                                <ul style="list-style: none;">
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i> Instalación y configuración de la solución.
                                    </li>
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i> Planificación y control de las actividades de
                                        la implantación. </li>
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i> Planificación y control del ingreso de data
                                        inicial y/o migración de data de sistemas heredados. </li>
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i> Soporte a la puesta en operación. </li>
                                </ul>

                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="portfolio-details-container ">

                            <div class="portfolio-description ">
                                <h2> SOPORTE TÉCNICO PERMANENTE </h2>
                                <p>
                                    <b>ALLIN ERP, </b> garantiza la disponibilidad de servicios de asistencia técnica
                                    (consultoría, personalización, implantación, 1
                                    entrenamiento) no sólo durante la implantación del producto sino durante todo el ciclo
                                    de vida de la relación.

                                </p>
                                <p>
                                    Los servicios de soporte técnico permanente pueden llevarse a cabo en tres modalidades.
                                <ul style="list-style: none;">
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i>
                                        Soporte técnico presencial. </li>
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i>
                                        Soporte técnico telefónico. </li>
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i>
                                        Soporte técnico En Línea. </li>
                                </ul>

                                </p>
                            </div>

                            <div class="portfolio-description ">
                                <h2> GARANTÍA </h2>
                                <p>
                                    La garantía por problemas de código es permanente y sin costo para el cliente, Cualquier
                                    modificación
                                    que no sea considerada una Garantía será cotizada antes de su implementación. <br>
                                    La Garantía no cubre problemas originados por modificaciones o manipulación indebida de
                                    la base de datos
                                    realizadas por otro proveedor o por el mismo Cliente. <br>
                                    Los tiempos de respuesta por garantía se definen de la siguiente manera:

                                <ul style="list-style: none;">
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i>
                                        Problemas menores (modificaciones mínimas) 1 semana. </li>
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i>
                                        Problemas de Consultas y Reportes críticos 2 días. </li>
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i>
                                        Problemas de incidencia grave 5 horas. </li>
                                    <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                            class="ri-check-double-line"></i>
                                        Problemas de incidencia muy grave 3 horas. </li>
                                </ul>

                                <b>Nota: </b> Las Garantías serán coordinadas y evaluadas con el responsable técnico por
                                parte del Cliente.


                                </p>
                            </div>


                        </div>
                    </div>






                </div>



                <div class="portfolio-details-container " hidden>

                    <div class="portfolio-description ">
                        <h2>LICENCIA DE USO</h2>
                        <p>
                            La Licencia de Uso de un módulo cubre para instalación en todos los Computadores del Negocio
                            ya que no se asocia la Licencia al Equipo, La Licencia es por PC-Servidor el cual normalmente
                            se encuentra en la sede central de cada Empresa, por lo que un módulo puede ser ejecutado tanto
                            en la sede central como en las sucursales del Negocio (con excepción del módulo de punto de
                            venta
                            que tiene un Licenciamiento por Caja).
                        </p>

                    </div>

                    <div class="portfolio-description ">
                        <h2>CONTROL DE ACCESO AL SISTEMA</h2>
                        <p>

                            Al adquirir cualquier módulo viene con un sistema Administrador que se encarga de gestionar la
                            seguridad
                            y mantenimiento de tablas maestras del ERP, permite tener una seguridad por Usuario, el cual se
                            debe validar
                            con una contraseña. Este módulo Administrador permite indicarle al Sistema que opciones podrá
                            tener Acceso
                            un Grupo de Usuarios a determinados menús del Sistema ALLIN ERP. </p>
                    </div>

                    <div class="portfolio-description ">
                        <h2>BASE DE DATOS</h2>
                        <p>
                            ALLIN ERP, utiliza Base de Datos SQL Server en sus versiones actuales, que al ser Relacional
                            garantiza la
                            Integridad de los datos almacenados. además, permite conexiones remotas y ofrece ejecución de
                            Copias de
                            Seguridad Automáticas (Backus) lo cual nos da seguridad de la información almacenada en el
                            Sistema.
                        </p>
                    </div>
                    <div class="portfolio-description ">
                        <h2>ENTREGABLES</h2>
                        <p>
                            El Sistema se entrega en versión ejecutable, más los manuales de Usuario correspondientes a cada
                            módulo
                            adquirido, además de los Instaladores para ser ejecutados en las PC’s de la red del Cliente.
                        </p>
                    </div>
                    <div class="portfolio-description ">
                        <h2>CONECTIVIDAD</h2>
                        <p>
                            Todos los módulos pueden tener acceso de manera remota a través de conexiones VPN o Internet, de
                            manera que
                            se puede registrar información desde sucursales o supervisar el trabajo desde fuera de la
                            empresa si los
                            usuarios de mayor rango requieren hacer seguimiento o consultar información On-line es
                            totalmente posible
                            con el acceso y la infraestructura de conectividad previamente implementada.
                        </p>
                    </div>
                    <div class="portfolio-description ">
                        <h2>HERRAMIENTAS DE DESARROLLO</h2>
                        <p>
                            ALLIN ERP, ha sido desarrollado para plataformas Microsoft y trabaja en modalidad
                            Cliente/Servidor, está
                            codificado en el entorno Visual Studio .NET 2019.
                        </p>
                    </div>
                    <div class="portfolio-description ">
                        <h2>REQUERIMIENTOS TÉCNICOS</h2>
                        <p>
                            Los Requerimientos mínimos y recomendados de hardware y software para que el sistema opere de
                            manera aceptable
                            son los siguientes:
                        </p>
                    </div>

                    <div class="portfolio-description ">
                        <div class="table-responsive-md">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-info">
                                        <th colspan="4" class="text-center"> <strong> SERVIDOR DE BASE DE DATOS
                                            </strong> </th>
                                    </tr>
                                    <tr class="table-active">
                                        <th scope="col"> PARTE/PIEZA/DISPOSITIVO </th>
                                        <th scope="col"> CONFIGURACIÓN MINIMA </th>
                                        <th scope="col"> CONFIGURACIÓN RECOMENDADA </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"> Procesador </th>
                                        <td> Intel CORE I5 o superior </td>
                                        <td> Equipo Servidor de Configuración Actual </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Memoria RAM </th>
                                        <td> 8 GB o superior </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Disco Duro </th>
                                        <td> 500GB </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> CDROM </th>
                                        <td> CD-RW (Opcional) </td>
                                        <td> CD-RW </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <p><strong>Software :</strong></p>
                                            <p>Sistema Operativo Windows Server (Actualizado)<br>
                                                Microsoft SQL SERVER (Actualizado)<br>
                                                Se Recomienda que el servidor solo sea utilizado como SERVIDOR de BASE de
                                                DATOS y
                                                no ejecutar otros servicios de Red</p>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="portfolio-description ">
                        <div class="table-responsive-md">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-info">
                                        <th colspan="4" class="text-center"> ESTACIONES DE TRABAJO </th>
                                    </tr>
                                    <tr class="table-active">
                                        <th scope="col"> PARTE/PIEZA/DISPOSITIVO </th>
                                        <th scope="col"> CONFIGURACIÓN MINIMA </th>
                                        <th scope="col"> CONFIGURACIÓN RECOMENDADA </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"> Procesador </th>
                                        <td> Intel Pentium CORE I3 o superior </td>
                                        <td> Computador de Configuración Actual en el Mercado </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Memoria RAM </th>
                                        <td> 4 GB o superior </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Disco Duro </th>
                                        <td> 60 GB Disponibles </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <p><strong>Software :</strong></p>
                                            <p> Sistema Operativo Windows 7 o Superior <br>
                                                Microsoft Office</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="portfolio-description ">
                        <p> Adicionalmente la red debe tener una velocidad de 100Mbps (Mínimo Recomendado) y
                            protocolo TCP/IP <br>
                            El Sistema no Funciona en Plataformas Linux, Mac u otra que no sea Microsoft Windows</p>

                    </div>

                    <div class="portfolio-description ">
                        <h2> ASESORÍA Y CONSULTORÍA </h2>
                        <p>
                            Analizamos los procesos actuales, las necesidades de información y las expectativas de su
                            empresa, para ayudarlos
                            a optimizar sus procesos y definir sus requerimientos de información. Evaluamos la
                            disponibilidad y adecuación del
                            entorno tecnológico de su organización (hardware, software, comunicaciones) para garantizar el
                            éxito del proyecto.
                            Planificamos el proyecto para asegurar una rápida implantación y beneficios tangibles en cada
                            etapa del proyecto.
                        </p>
                    </div>

                    <div class="portfolio-description ">
                        <h2 style="width: 100% !important;"> ADAPTACIONES O AJUSTES AL SISTEMA (PERSONALIZACIÓN) </h2>
                        <p>
                            La funcionalidad del sistema puede ser configurada de acuerdo a los requerimientos particulares
                            de su empresa. Sin
                            embargo, en caso lo requiera podemos ofrecerle tres niveles de personalización complementarios:
                        </p>
                        <ul style="list-style: none;">
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i>
                                Desarrollo de reportes adicionales de acuerdo a requerimientos específicos. </li>
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i>
                                Desarrollo de servicios y funcionalidad complementaria. </li>
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i>
                                Además, considerando que los requerimientos de información evolucionan con su empresa,
                                capacitamos
                                a su personal en la generación de nuevos reportes, que permitan atender las futuras demandas
                                de
                                información, sin dependencia de su proveedor de software.</li>
                        </ul>
                    </div>

                    <div class="portfolio-description ">
                        <h2> IMPLEMENTACIÓN </h2>
                        <p>
                            Nuestra metodología de implementación es personalizada y plantea soluciones alcanzables y logra
                            implantaciones
                            exitosas rápidamente. Atendiendo a un análisis previo de sus procesos y necesidades de
                            información, llevamos
                            a cabo la implementación de forma efectiva e integral, brindando los siguientes servicios:
                        <ul style="list-style: none;">
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i> Instalación y configuración de la solución. </li>
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i> Planificación y control de las actividades de la
                                implantación. </li>
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i> Planificación y control del ingreso de data inicial
                                y/o migración de data de sistemas heredados. </li>
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i> Soporte a la puesta en operación. </li>
                        </ul>

                        </p>
                    </div>

                    <div class="portfolio-description ">
                        <h2> SOPORTE TÉCNICO PERMANENTE </h2>
                        <p>
                            <b>ALLIN ERP, </b> garantiza la disponibilidad de servicios de asistencia técnica (consultoría,
                            personalización, implantación, 1
                            entrenamiento) no sólo durante la implantación del producto sino durante todo el ciclo de vida
                            de la relación.

                        </p>
                        <p>
                            Los servicios de soporte técnico permanente pueden llevarse a cabo en tres modalidades.
                        <ul style="list-style: none;">
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i>
                                Soporte técnico presencial. </li>
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i>
                                Soporte técnico telefónico. </li>
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i>
                                Soporte técnico En Línea. </li>
                        </ul>

                        </p>
                    </div>

                    <div class="portfolio-description ">
                        <h2> GARANTÍA </h2>
                        <p>
                            La garantía por problemas de código es permanente y sin costo para el cliente, Cualquier
                            modificación
                            que no sea considerada una Garantía será cotizada antes de su implementación. <br>
                            La Garantía no cubre problemas originados por modificaciones o manipulación indebida de la base
                            de datos
                            realizadas por otro proveedor o por el mismo Cliente. <br>
                            Los tiempos de respuesta por garantía se definen de la siguiente manera:

                        <ul style="list-style: none;">
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i>
                                Problemas menores (modificaciones mínimas) 1 semana. </li>
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i>
                                Problemas de Consultas y Reportes críticos 2 días. </li>
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i>
                                Problemas de incidencia grave 5 horas. </li>
                            <li><i style="left: 0; top: 2px; font-size: 20px; color: #47b2e4; line-height: 1;"
                                    class="ri-check-double-line"></i>
                                Problemas de incidencia muy grave 3 horas. </li>
                        </ul>

                        <b>Nota: </b> Las Garantías serán coordinadas y evaluadas con el responsable técnico por parte del
                        Cliente.


                        </p>
                    </div>


                </div>

            </div>
        </section><!-- End Portfolio Details Section -->




        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta" style="padding: 60px 0px;">
            <div class="container" data-aos="zoom-in">

                <div class="row text-center">
                    <div class="col-lg-12 text-center">
                        <h3>Únete a Nosotros</h3>
                        <p> Y haz crecer tu negocio</p>
                        <a class="cta-btn align-middle" href="#">CONTÁCTANOS</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->


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
                                <label for="inputPassword4" class="form-label"><b>Base de Datos Adicionales</b></label>
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
