<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->


<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
<script src="assets/js/main.js"></script>

<script>
    function abrirmodalmodulo(indice) {

        if (indice == "comercial") {
            $('#modmodulo-titulo').text('MODULO COMERCIAL');
            $('#modmodulo-contenido').html(
                '<p style="text-align: justify;">El software de Ventas se encarga del flujo comercial y se adapta a las necesidades del giro de negocio, las funciones principales que controla son: los Pedidos de Venta, la Facturación, la Cobranza, el manejo de clientes, vendedores, productos, precios, comisiones, entre otros. El módulo Comercial tiene otras verticales y módulos de apoyo que ayudan a cubrir los requerimientos del área de ventas.<p>' +

                '<p><b>CARACTERÍSTICAS GENERALES</b></p>' +
                '<p style="text-align: justify;">Este módulo gestiona el trabajo del Área Comercial, Gerencia de Ventas, manejando información del Cliente, de Productos, Vendedores, Canales de Venta, Sucursales, entre otros.</p>' +

                '<p><b>FUNCIONALIDADES</b></p>' +
                '<ul>' +
                '<li>Registra la Facturación Local o al Exterior (Facturas, Boletas, Nota Crédito, Nota Debito)</li>' +
                '<li>Actualiza el Stock de Venta</li>' +
                '<li>Registra Proformas, Toma de pedidos</li>' +
                '<li>Gestiona las Cuentas por Cobrar</li>' +
                '<li>Letras por Cobrar</li>' +
                '<li>Cuenta Corriente de Clientes, Líneas de Crédito</li>' +
                '<li>Guías de Remisión</li>' +
                '<li>Distribución Masiva (Zonas/Rutas)</li>' +
                '<li>Fuerza de Ventas, Canales de Venta, Giros de Negocio</li>' +
                '<li>Control de Sucursales</li>' +
                '<li>Control de Puntos de Venta</li>' +
                '<li>Lectura de Códigos de Barra</li>' +
                '<li>Impresión y Anulación de Documentos (Masivas)</li>' +
                '<li>Numeración de Documentos por Serie/Numeración</li>' +
                '<li>Generación de Asientos Contables Automáticos</li>' +
                '</ul>' +

                '<p><b>VENTAS AL EXTERIOR</b></p>' +
                '<ul>' +
                '<li>Registra los Packing List y genera la Facturación de acuerdo a las especificaciones del lugar de destino manejando la Lista de Precios del Exterior de manera independiente y registrando la venta de acuerdo a las normas tributarias vigentes para el Comercio Exterior.</li>' +
                '</ul>' +

                '<p><b>DISTRIBUCIÓN MASIVA</b></p>' +
                '<ul style="text-align: justify;">' +
                '<li>El sistema maneja canales de venta de distribución, registrando datos de la ubicación del Cliente como la Zona/Ruta/Módulo/Frecuencia de Visita/Recorrido para la Fuerza de Ventas, además de la Toma de Pedidos, y Facturación Automática de Pedidos, Impresión Masiva de Documentos, Liquidación de Documentos con el Transportista</li>' +
                '</ul>' +

                '<p><b>TABLAS MAESTRAS</b></p>' +
                '<ul>' +
                '<li>Maestro de Clientes (Canales de Venta, Giros de Negocio, Formas de Pago)</li>' +
                '<li>Maestro de Vendedores</li>' +
                '<li>Maestro de Productos (Familia de Productos, Marcas, Características, Código de Barras)</li>' +
                '<li>Otros (Lista de Precios, Tipo de Cambio, Moneda, Parámetros)</li>' +
                '</ul>' +

                '<p><b>CONSULTAS Y REPORTES</b></p>' +
                '<p>El Módulo incorpora Tablas Dinámicas, Consultas y Reportes aprovechando al máximo la información registrada en el sistema</p>'
            );
        } else if (indice == "compras") {
            $('#modmodulo-titulo').text('MODULO DE COMPRAS');
            $('#modmodulo-contenido').html(
                '<p style="text-align: justify;">El módulo de Compras gestiona la eficiencia del área de compras. Consolida las solicitudes de compra y valida el presupuesto. Realiza una licitación o concurso de proveedores y emite la orden de compra previamente aprobada por el jefe o gerente según nivel de aprobación.<p>' +

                '<p><b>FUNCIONALIDADES</b></p>' +
                '<ul>' +
                '<li>Solicitudes de Compra, Solicitud de Cotizaciones al Proveedor</li>' +
                '<li>Órdenes de Compra, Ordenes de Servicio</li>' +
                '<li>Listado de Ítems (Materiales, Productos, Servicios)</li>' +
                '<li>Clasificación por Familia de ítems (Categoría, Línea, SubLínea, Marcas, Grupos, Características)</li>' +
                '</ul>' +

                '<p><b>IMPORTACIONES – COMPRAS AL EXTERIOR</b></p>' +
                '<ul>' +
                '<li>•	Registro de DUA de Importación con los Gastos de la Importación (Aduana, Fletes, Seguros, etc.) ingresando los Productos al Almacén con su Costo procesado directo al Kardex Valorizado (Prorrateo Automático)</li>' +
                '</ul>' +

                '<p><b>TABLAS MAESTRAS</b></p>' +
                '<ul>' +
                '<li>Maestro de Proveedores</li>' +
                '<li>Maestro de Transportistas</li>' +
                '<li>Maestro de Productos (Familia, Marcas, Características, Código de Barras)</li>' +
                '<li>Otros (Parámetros)</li>' +
                '</ul>' +

                '<p><b>CONSULTAS Y REPORTES</b></p>' +
                '<p>El Módulo incorpora Tablas Dinámicas, Consultas y Reportes aprovechando al máximo la información registrada en el sistema</p>'
            );
        } else if (indice == "contabilidad") {
            $('#modmodulo-titulo').text('MODULO DE CONTABILIDAD');
            $('#modmodulo-contenido').html(
                '<p style="text-align: justify;">ALLIN ERP está orientado a que las empresas puedan emitir sus estados financieros en el tiempo más oportuno posible y el sistema contable o módulo contabilidad recibe la información de los módulos periféricos en forma de asientos contables automáticos y apuntamos a que el personal del área de contabilidad sea un personal que analice cifras y que no tomen la mayor parte del tiempo en digitación duplicando funciones dentro del negocio.<p>' +

                '<p><b>DATOS GENERALES</b></p>' +
                '<p style="text-align: justify;">Este módulo gestiona el trabajo del área de Contable, puede aplicarse a empresas constructoras, inmobiliarias, industriales, comerciales, servicios, financieras, navieras y en general todos los giros de negocios. Es Multiempresa y Bimoneda, emite reportes corporativos. Se adecua a las necesidades del negocio por medio de parámetros que son manejados en el plan de contable empresarial y configuraciones complementarias. Este módulo está homologado con SUNAT para Perú y cumple todos los requisitos para Principales Contribuyentes, Agentes de Retención, Percepción y Detracciones, además de los Libros Electrónicos y otras declaraciones como DAOT y Balance de Comprobación para declaración jurada anual.</p>' +

                '<p><b>FUNCIONALIDADES</b></p>' +
                '<ul>' +
                '<li>Registro de Asiento de Apertura</li>' +
                '<li>Registro de Asientos Contables</li>' +
                '<li>Plan de Cuentas Gerencial</li>' +
                '<li>Asientos Automáticos desde otros módulos</li>' +
                '<li>Amarres Automáticos</li>' +
                '<li>Análisis de Cuentas por Mayor, por Documento, por Auxiliar</li>' +
                '<li>Análisis por Centro de Costo</li>' +
                '<li>Análisis por Cuenta Analítica (cuenta corriente de clientes y proveedores)</li>' +
                '<li>Ajustes por Diferencia de Tipo de Cambio</li>' +
                '<li>Libros Electrónicos</li>' +
                '<li>Libros Oficiales según SUNAT</li>' +
                '<li>Estados Financieros</li>' +
                '<li>Auditoria de Operaciones Contables – Asientos Automáticos</li>' +
                '<li>Cierre de Periodo</li>' +
                '<li>Interfase con PDT SUNAT</li>' +
                '</ul>' +

                '<p><b>ESTADOS FINANCIEROS</b></p>' +
                '<ul>' +
                '<li>Estado de Situación (Balance General)</li>' +
                '<li>Estado de Resultados (Ganancias y Pérdidas)</li>' +
                '<li>Estado de Flujo de Efectivo</li>' +
                '<li>Anexos a los Estados Financieros</li>' +
                '<li>Registro de Compras</li>' +
                '<li>Liquidaciones de Compra</li>' +
                '<li>Registro de Recibos por Honorarios</li>' +
                '<li>Centros de Costo</li>' +
                '<li>Financiamiento con Letras x Pagar</li>' +
                '<li>Programación de Pagos</li>' +
                '<li>Administración de Chequeras y Giro de Cheques</li>' +
                '<li>Pago a Proveedores</li>' +
                '<li>Estado de Cuenta por Proveedor</li>' +
                '<li>Cuentas por Pagar – Cancela Documentos</li>' +
                '<li>Compensación de Documentos</li>' +
                '<li>Liquidación de Viáticos y Cuentas A Rendir</li>' +
                '<li>Órdenes de Pago</li>' +
                '<li>Cobranzas – Cuentas por Cobrar</li>' +
                '<li>Conciliación Bancaria</li>' +
                '<li>Impresión de Voucher</li>' +
                '<li>Movimientos de Caja y Bancos (Ingresos, Egresos, Transferencias)</li>' +
                '<li>Presupuestos por Partida de Gasto</li>' +
                '<li>Pago de Detracciones y Comprobantes de Retención</li>' +
                '<li>DAOT Sunat</li>' +
                '<li>Flujo de Caja</li>' +
                '<li>Generación de Asientos Contables Automáticos</li>' +
                '<li>Registro del Activo Fijo</li>' +
                '<li>Datos de Compra del Activo</li>' +
                '<li>Clasificación del Activo</li>' +
                '<li>Valor Residual del Activo</li>' +
                '<li>Depreciación Lineal</li>' +
                '<li>Ubicación del Activo</li>' +
                '<li>Responsable del Activo</li>' +
                '<li>Área de Trabajo del Activo</li>' +
                '<li>Centro de Costo</li>' +
                '<li>Asientos Contables Automáticos </li>' +
                '<li>Baja y motivo de baja del Activo </li>' +
                '</ul>' +

                '<p><b>TABLAS MAESTRAS</b></p>' +
                '<ul>' +
                '<li>Maestro de Plan de Contable</li>' +
                '<li>Maestro de Centros de Costo</li>' +
                '<li>Maestro de Sub-diarios</li>' +
                '</ul>'
            );

        } else if (indice == "inventarios") {
            $('#modmodulo-titulo').text('MODULO DE INVENTARIOS');
            $('#modmodulo-contenido').html(
                '<p style="text-align: justify;">El módulo de Inventarios se encarga de controlar las existencias del negocio. Registra los ingresos y salidas de los almacenes y genera un kardex Valorizado automáticamente. Además valida los ingresos con orden de compra, Salidas del almacén según requerimientos por área. Valorización de existencias, Toma de inventarios, entre otras opciones de la gestión de un almacén.<p>' +

                '<p><b>FUNCIONALIDADES</b></p>' +
                '<ul>' +
                '<li>Registra los movimientos de Entrada y Salida de Almacenes</li>' +
                '<li>Guías de Remisión (Despacho y Traslado)</li>' +
                '<li>Transferencias entre almacenes</li>' +
                '<li>Requerimientos al Almacén, Atención de Requerimientos</li>' +
                '<li>Solicitudes de Compra, Solicitud de Cotizaciones al Proveedor</li>' +
                '<li>Órdenes de Compra, Ordenes de Servicio</li>' +
                '<li>Toma de Inventarios, Saldos Iniciales</li>' +
                '<li>Existencias en Almacén, Kardex Valorizado, Actualiza Stock</li>' +
                '<li>Procesos automáticos para Despachos al Cliente o entregas en Sucursales</li>' +
                '<li>Múltiples Almacenes</li>' +
                '<li>Gestión de Productos, Lectura de Códigos de Barra</li>' +
                '<li>Clasificación por Familia de Productos (Categoría, Línea, SubLínea, Marcas, Grupos, Características)</li>' +
                '<li>Control de Stock en Puntos de Venta</li>' +
                '<li>Impresión y Anulación de Documentos (Masivas)</li>' +
                '<li>Numeración de Documentos por Serie/Numeración</li>' +
                '<li>Generación de Asientos Contables Automáticos</li>' +
                '</ul>' +

                '<p><b>TABLAS MAESTRAS</b></p>' +
                '<ul>' +
                '<li>Maestro de Proveedores</li>' +
                '<li>Maestro de Transportistas</li>' +
                '<li>Maestro de Productos (Familia de Productos, Marcas, Características, Código de Barras)</li>' +
                '<li>Otros (Lista de Precios, Tipo de Cambio, Moneda, Parámetros)</li>' +
                '</ul>' +

                '<p><b>CONSULTAS Y REPORTES</b></p>' +
                '<p>El Módulo incorpora Tablas Dinámicas, Consultas y Reportes aprovechando al máximo la información registrada en el sistema</p>'
            );
        } else if (indice == "factura") {
            $('#modmodulo-titulo').text('MODULO DE FACTURA ELECTRÓNICA');
            $('#modmodulo-contenido').html(
                '<p style="text-align: justify;">Somos emisores de comprobantes electrónicos autorizados por SUNAT, contamos con una certificación ISO 27001 que es una norma que garantiza la confidencialidad e integridad de los datos y de la información. Mediante buenas prácticas y controles establecidos en la norma ISO. Nuestro sistema de Factura Electrónica emite documentos desde el módulo de ventas de oficina, desde el módulo de finanzas y desde el módulo de punto de venta.Contamos con un Portal allinerpsoftware.com.pe en donde los usuarios pueden consultar y descargar sus comprobantes electrónicos a través de Internet<p>' +

                '<p><b>SISTEMA DE FACTURACIÓN ELECTRÓNICA PERÚ</b></p>' +
                '<p style="text-align: justify;">REQUERIMIENTOS</p>' +
                '<p style="text-align: justify;">Se requiere de un certificado digital para por emitir documentos electrónicos desde ALLIN ERP SOFTWARE, de no tenerlo nosotros podemos proporcionar uno. Luego se debe configurar las series electrónicas en los módulos de venta y todo estará listo para empezar a emitir comprobantes electrónicos desde su sistema de ventas.</p>' +

                '<p><b>FUNCIONALIDADES</b></p>' +
                '<ul>' +
                '<li>Emisión de Comprobante Electrónico Factura</li>' +
                '<li>Emisión de Comprobante Electrónico Boleta de Venta</li>' +
                '<li>Emisión de Comprobante Electrónico Nota de Crédito</li>' +
                '<li>Emisión de Comprobante Electrónico Nota de Debito</li>' +
                '<li>Emisión de Comprobante Electrónico Guía de Remisión</li>' +
                '<li>Emisión de Resumen de Boletas de Venta</li>' +
                '<li>Emisión de Comunicado de Bajas</li>' +
                '</ul>' +

                '<p><b>INFORMES ANALÍTICOS</b></p>' +
                '<ul>' +
                '<li>Documentos Enviados</li>' +
                '<li>Documentos No Procesados</li>' +
                '<li>Comunicado de Bajas</li>' +
                '<li>Resumen de Boletas</li>' +
                '</ul>' +

                '<p><b>INTERFASES</b></p>' +
                '<ul style="text-align: justify;">' +
                '<li>Sistemas OSE</li>' +
                '<li>Webservices SUNAT</li>' +
                '<li>Código HASH</li>' +
                '<li>Código QR</li>' +
                '</ul>' +

                '<p><b>AUDITORIAS</b></p>' +
                '<p>El Módulo cuenta con registro de documentos enviados a SUNAT, así como envíos de resúmenes de bajas y anulaciones.</p>'
            );
        } else if (indice == "planilla") {
            $('#modmodulo-titulo').text('MODULO DE PLANILLA');
            $('#modmodulo-contenido').html(
                '<p style="text-align: justify;">Conocido también como sistema de Nóminas en otros países de la región. Nuestro módulo de Planilla de Remuneraciones sirve de apoyo al área de recursos humanos para el cálculo de la boleta de pago en los diferentes regímenes laborales, entrega al área contable el asiento contable automático de la planilla y se comunica con los sistemas bancarios para realizar pagos masivos de remuneraciones.<p>' +

                '<p><b>FUNCIONALIDADES</b></p>' +
                '<ul>' +
                '<li>Datos del Empleado</li>' +
                '<li>Registro de Conceptos (Ingresos y Descuentos)</li>' +
                '<li>Formulación de Conceptos</li>' +
                '<li>Tareo de Conceptos</li>' +
                '<li>Proceso de Cálculo de Conceptos y Tributos</li>' +
                '<li>Boleta de Pago</li>' +
                '<li>Planilla Oficial</li>' +
                '<li>Préstamos al Personal</li>' +
                '<li>Requerimientos del Personal, Evaluación</li>' +
                '<li>Emisión y Control de Contratos</li>' +
                '<li>Interfase PDT 601 SUNAT</li>' +
                '<li>Generación de Asientos Contables Automáticos</li>' +
                '</ul>' +

                '<p><b>CONTROL DE ASISTENCIA</b></p>' +
                '<ul>' +
                '<li>Datos del Empleado</li>' +
                '<li>Control de Asistencia</li>' +
                '<li>Interfase con Equipos Reloj</li>' +
                '<li>Entradas</li>' +
                '<li>Salidas</li>' +
                '<li>Refrigerio</li>' +
                '<li>Horarios, Turnos</li>' +
                '<li>Permisos</li>' +
                '<li>Tardanzas</li>' +
                '<li>Horas Extras</li>' +
                '<li>Reportes de Asistencia</li>' +
                '</ul>' +

                '<p><b>TABLAS MAESTRAS</b></p>' +
                '<ul>' +
                '<li>•	Maestro de Empleados</li>' +
                '<li>Maestro de Vendedores</li>' +
                '<li>•	Maestro de Conceptos de Planilla</li>' +
                '<li>•	Maestro de Tributos y Beneficios Sociales</li>' +
                '</ul>' +

                '<p><b>CONSULTAS Y REPORTES</b></p>' +
                '<p>El Módulo incorpora Tablas Dinámicas, Consultas y Reportes aprovechando al máximo la información registrada en el sistema</p>'
            );
        } else if (indice == "produccion") {
            $('#modmodulo-titulo').text('MODULO DE PRODUCCION');
            $('#modmodulo-contenido').html(
                '<p style="text-align: justify;">Este módulo gestiona el trabajo del Área de Producción, consta de las etapas de Desarrollo de Producto, Procesos de Producción y Costos de Producción<p>' +

                '<p><b>FUNCIONALIDADES</b></p>' +
                '<ul>' +
                '<li>Registro de Recetas</li>' +
                '<li>Relación de Materiales (MRP)</li>' +
                '<li>Ficha de Producto – Ruta de Procesos – Receta de Insumos y Servicios</li>' +
                '<li>Registro de Orden de Trabajo u Orden de Producción</li>' +
                '<li>Consumo de Materiales</li>' +
                '<li>Registro de Tercerizaciones</li>' +
                '<li>Control de Talleres de Terceros</li>' +
                '<li>Seguimiento de la Orden de Trabajo (Fechas Programadas)</li>' +
                '<li>Guías de Remisión</li>' +
                '<li>Ubicación de Productos en Proceso</li>' +
                '<li>Gastos de Fabricación – Gastos Mensuales (Luz, Agua, Gas, Mano de Obra)</li>' +
                '<li>Registro de Partes de Producción por Proceso (Maquina, Operario, Horas Trabajadas, etc.)</li>' +
                '<li>Entrega de Productos Terminados al Almacén (parciales y totales)</li>' +
                '<li>Generación de Asientos Contables Automáticos</li>' +
                '</ul>' +

                '<p><b>TABLAS MAESTRAS</b></p>' +
                '<ul>' +
                '<li>Maestro de Productos</li>' +
                '<li>Maestro de Procesos</li>' +
                '<li>Maestro de Ficha de Productos</li>' +
                '</ul>' +

                '<p><b>CONSULTAS Y REPORTES</b></p>' +
                '<p>El Módulo incorpora Tablas Dinámicas, Consultas y Reportes aprovechando al máximo la información registrada en el sistema</p>'
            );
        } else if (indice == "pos") {
            $('#modmodulo-titulo').text('MODULO DE PUTNO DE VENTA (POS)');
            $('#modmodulo-contenido').html(
                '<p style="text-align: justify;">Este módulo gestiona el trabajo de Venta en Sucursales, maneja la venta en Tienda, puede trabajar con código de barras, con pantallas táctiles, ofrece posibilidad de conexión con la sede central para sincronizar datos y monitoreo de las ventas en línea, trabaja con equipos como impresoras de tickets, impresoras de etiquetas, lectores de código de barras, pantallas táctiles, Gavetas de Dinero, etc.<p>' +


                '<p><b>FUNCIONALIDADES</b></p>' +
                '<ul>' +
                '<li>Venta Rápida – Tickets de Venta</li>' +
                '<li>Cobranzas (Efectivo, Tarjetas de Crédito, Vales, Cheques, Notas de Crédito)</li>' +
                '<li>Movimientos de Caja – Entrada y Salida de Dinero</li>' +
                '<li>Devolución o Cambio de Productos</li>' +
                '<li>Devoluciones de Dinero al Cliente</li>' +
                '<li>Stock de Productos</li>' +
                '<li>Catálogo de Productos – Fotos</li>' +
                '<li>Interconexión con Sede Central y otras Sucursales</li>' +
                '</ul>' +

                '<p><b>INTERFASES</b></p>' +
                '<ul>' +
                '<li>Importar Guías de Despacho desde Sede Central</li>' +
                '<li>Sincronizar Listas de Precios y Descuentos con Sede Central</li>' +
                '<li>Envío de Registro de Venta y Cierre de Caja</li>' +
                '</ul>' +

                '<p><b>INFORMES ANALÍTICOS</b></p>' +
                '<ul style="text-align: justify;">' +
                '<li>Lista de Ventas</li>' +
                '<li>Ranking de Ventas por Producto</li>' +
                '<li>Ranking de Ventas por Cliente</li>' +
                '<li>Productos sin Rotación</li>' +
                '<li>Productos sin Rotación</li>' +
                '<li>Ventas por Rango Horario</li>' +
                '<li>Ventas por Día Semana</li>' +
                '<li>Ventas por Categoría y Línea de Producto</li>' +
                '</ul>' +

                '<p><b>TABLAS MAESTRAS</b></p>' +
                '<ul>' +
                '<li>Maestro de Productos</li>' +
                '<li>Maestro de Precios y Descuentos</li>' +
                '<li>Maestro de Clientes</li>' +
                '</ul>' +

                '<p><b>CONSULTAS Y REPORTES</b></p>' +
                '<p>El Módulo incorpora Tablas Dinámicas, Consultas y Reportes aprovechando al máximo la información registrada en el sistema</p>'
            );
        }

        $('#ModalModuloGeneral').modal('show')




    }
</script>
