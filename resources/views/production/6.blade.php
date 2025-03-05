@extends('production.1')
@section('content')
    <style>
        .bg-responsive {
            background-image: url('../../resource/1741103552_67c721c056e29portada-contactanos-escritorio.jpg');
            height: 82vh;
            background-size: cover;
            /* height: 85vh; */
        }

        /* Para pantallas medianas (tablets) */
        @media (max-width: 987px) {
            .bg-responsive {
                height: 82vh;
                background-size: cover;
                background-image: url('../../resource/1741103615_67c721ff7b3edportada-contactanos-tablet.jpg');
            }
        }

        /* Para pantallas pequeñas (móviles) */
        @media (max-width: 575px) {
            .bg-responsive {
                height: 52vh;
                width: 100%;
                background-size: cover;
                background-image: url('../../resource/1741103629_67c7220d1ecaeportada-contactanos-celular.jpg');
            }
        }
    </style>



    <form method="post" id="Customer">
        @csrf
        <!-- INICIO SECCION -->
<div class="py-1 position-relative bg-responsive" style="
        background-position: center;
        background-repeat: no-repeat;

        ">
            <div class="d-none d-sm-block " style="margin-top:35vh;">

                <div class="text-center" style="margin-left:50%">
                    <h4 class="p-2  fs-7 " style="font-family:Montserrat-SemiBold;letter-spacing:15px;">
                        <span style="color:#ffffff">CONTÁCTANOS Y </span><br> OBTÉN TU LOTE
                        <br>
                    </h4>
                    <div class=" subrayado mx-auto " style="width:50px"></div>
                    <br>
                    <span class="fs-4">¡Nosotros hacemos realidad el terreno <br> de tus sueños!</span>
                </div>

            </div>

            <div class=" d-sm-none text-center text-white position-absolute start-50 translate-middle" style="top:0%;width:290px">
                <img src="../../resource/1738076896_logo%20aybar%20blanco.svg" width="75px" alt="" srcset="">
            </div>
            <div class=" d-sm-none text-center text-white position-absolute start-50 translate-middle" style="bottom:-4%;width:300px">
                <h4 class="p-2  text-center fs-3" style="font-family:Montserrat-SemiBold;letter-spacing:10px">
                    <span style="color:#ffffff">CONTÁCTANOS Y </span><br> OBTÉN TU LOTE
                </h4>

                <div class="subrayado mx-auto " style="width:40px"></div>
                <br>
                <span class="fs-2">¡Nosotros hacemos realidad el terreno <br> de tus sueños!</span>
            </div>
        </div>
<div class="container-fluid">
  <div class="row">
            <div class="col-md-6  col-12 bg-white">

                <div class="text-justify my-5">
                    <h4 class="p-2  fs-7 text-center " style="font-family:Montserrat-SemiBold;letter-spacing:15px;">
                        <span style="color:#03424E">CONTÁCTANOS <br>
                            A UN PASO DE <br>
                            OBTENER TU
                        </span><br> LOTE IDEAL
                        <br>
                    </h4>
                    <div class=" subrayado mx-auto " style="width:50px"></div>
                    <br>
                    <div class="container col-9" style="text-align: justify">
                        <span class="fs-4" style="text-align: justify">Selecciona la opción por la que quieres comunicarte
                            connosotros y muy pronto nos pondremos en
                            contacto contigo.</span>
                    </div>

                </div>
            </div>
            <div class="col-md-6 py-5   col-12 row container-fluid justify-content-center align-content-center">
                <div class="col-4">
                    <img src="../../resource/1741119482_67c75ffab0870cliente%20nuevo.svg" alt="" width="100%" style="margin-top:-10px" height="100px">
                </div>
                <div class="col-8">
                    <span class="card-title fw-bold fs-5 py-7" style="color:#ffff">Soy Cliente Nuevo</span>
                    <br>
                    <a class="btn btn-hover-shadow" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:white; border-radius:10px; background-color:#FFA726; width: 190px;">
                        <b>Información »</b>
                    </a>
                </div>
                <div class="col-4" style="margin-top:-10px">
                    <img src="../../resource/1741119495_67c760075b467propietario%20aybar.svg" alt="" width="100%" height="100px" style="">
                </div>
                <div class="col-8">
                    <span class="card-title fw-bold fs-5 py-7" style="color:#ffff">Propietario Aybar</span>
                    <br>
                    <a class="btn btn-hover-shadow" data-bs-toggle="modal" data-bs-target="#exampleModal1" style="color:white; border-radius:100px; background-color:#FFA726; width: 190px;">
                        <b>Información »</b>
                    </a>
                </div>
            </div>
        </div>
</div>
      





        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color:#054E5C">
                    <div class="modal-header">
                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <div class="p-3 rounded" style="background-color: #055261; color: white; box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.3);">
                            <p class="text-center text-light mb-4"><b> <span style="font-size: 12px;">QUIERO
                                        INFORMACIÓN DE UN LOTE</span></b></p>


                            <select class="form-control" name="project_id" id="project_id" style="color: white; background-color: #055261">
                                <option value="">Seleccione un proyecto</option>
                            </select>
                            <br>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="names" placeholder="Nombres y Apellidos:" style="color: white;">
                            </div>
                            <div class="form-floating mb-3">


                                <input type="text" id="phone" class="form-control iti__tel-input" name="cellphone" placeholder="Número de Teléfono" style="color: white; width: 100%; padding-left: 74px;" autocomplete="off" data-intl-tel-input-id="0">
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="dni" name="dni" placeholder="Número de DNI" style="color: white;">

                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="message" name="message" placeholder="Mensaje" style="color: white; height: 70px;" maxlength="200" oninput="updateCounter()">
                                <div class="form-text text-white">
                                    <p><span id="charCount"><span style="font-size: 8px;">0</span></span><span style="font-size: 8px;">/200 caracteres</span></p>
                                </div>
                            </div>



                            <div class="form-check text-start">
                                <input class="form-check-input" type="checkbox" id="txtTratamientoDatos" name="data_aprobed_1" value="true">
                                <label class="form-check-label fs-3" for="txtTratamientoDatos">
                                    <span class="fs-2">He leído y acepto la </span>
                                    <a class="text-warning fs-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xlg2" style="cursor: pointer;">
                                        Política para envío de comunicaciones comerciales.
                                    </a>
                                </label>
                            </div>

                            <div class="form-check text-start ">
                                <input class="form-check-input" type="checkbox" id="txtTratamientoDatos2" name="data_aprobed_2" value="true">
                                <label class="form-check-label fs-3" for="txtTratamientoDatos2">
                                    <span class="fs-2">He leído y acepto el </span>
                                    <a class="text-warning fs-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xlg" style="cursor: pointer;">
                                        Tratamiento de mis datos personales.
                                    </a>
                                </label>
                            </div>




                            <div class="text-center"><span style="font-size: 9px;">

                                </span><button type="button" class="btn btn-warning btn-block" onclick="CustomerStorePublic();" style="color: white; border-radius: 100px; background-color: #F6A42C; width: 180px;"><span style="font-size: 9px;">
                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Enviar mis
                                            datos</span>
                                    </span></button><span style="font-size: 9px;">
                                </span></div><span style="font-size: 9px;">
                            </span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-white text-dark" style="background-color:black" data-bs-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header ">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="text-center modal-body">
                        <h3 class="modal-title fs-8" style="color:#003b47" id="exampleModalLabel">Central Telefónico</h3>
                        <p></p>

                        <a class="btn btn-hover-shadow text-center justify-content-center" href="tel:+5101-9049838" style="border-radius: 100px; background-color: rgb(19, 67, 77); width: 320px;">
                            &nbsp;

                            &nbsp;
                            <p class="fs-8 text-white " style="letter-spacing: 1px;">
                                <img src="../resource/1736360188_icono%201.svg" width="50px" alt="" srcset="" style="padding-bottom:10px;">
                                <b class="py-5">&nbsp;01-9049838</b>
                            </p>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div id="mycontent"></div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5517.423605390836!2d-76.96942789923634!3d-12.084221111291818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7ab490a4b17%3A0x50acc369406d2e3f!2sPatio%20Panorama!5e0!3m2!1ses-419!2spe!4v1733250273914!5m2!1ses-419!2spe" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!-- FIN SECCION -->
    </form>
    <script>
        // Ejecutar cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', ProjectList);
    </script>

    <!-- sample modal content -->
    <div class="modal fade" id="bs-example-modal-xlg" tabindex="-1" aria-labelledby="bs-example-modal-lg"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="text-warning text-center" style="font-size: 1.65rem">TRATAMIENTOS DE DATOS PERSONALES</h5>
                    <p></p>
                    <p style="text-align: justify; font-size: 15px;">
                        Declaro haber sido informado, conforme a Ley N° 29733 - Ley de Protección de Datos Personales
                        (“la Ley”) y al Decreto Supremo 003-2013/JUS - Reglamento de la Ley (“el Reglamento)”, doy mi
                        consentimiento libre, previo , informado, expreso e inequívoco para que <strong>AYBAR S.A.C.
                        </strong> realice el tratamiento de mis datos personales que le proporcione
                        de manera física o digital , con la finalidad de ejecutar cualquier relación contractual que
                        mantengo
                        y/o mantendré con la misma, contactarme y para fines estadísticos y/o analíticos.
                        <br><br>
                        Declaro mi derecho de revocar este consentimiento en cualquier momento.
                        Los datos personales entregados a <strong>AYBAR S.A.C.</strong> serán almacenados mientras dure mi
                        relación contractual, comercial y/o de cualquier índole con <strong>AYBAR S.A.C.</strong> y hasta
                        por 10
                        años de culminada la misma en el banco de datos de su titularidad, con RUC 20603865813 y con
                        domicilio en Av. Circunvalación del Golf Los Incas N° 134 (Torre B Piso 19) Distrito de Santiago de
                        Surco, Provincia y Departamento de Lima.
                        <br><br>
                        <strong>AYBAR S.A.C.</strong> podrá transferir sus datos personales a nivel nacional y/o
                        internacional.
                        sujetándose todos estos a las mismas obligaciones y medidas de seguridad, técnicas y legales
                        descritas en la Ley y el Reglamento.
                        <br><br>
                        De igual modo, la información podrá ser transferida a las autoridades o terceros autorizados
                        por ley bajo la regulación nacional y/o internacional vigente, incluyendo la Ley No. 29733,
                        su reglamento y aquellas que las modifiquen o sustituyan, así como las vinculadas a las autoridades
                        que fiscalizan la labor de <strong>AYBAR S.A.C.</strong><br><br>
                        Declaro conocer mi derecho a solicitar acceso a mis datos personales y conocer su tratamiento,
                        así como, solicitar su actualización, inclusión, rectificación, cancelación y supresión, pudiendo
                        oponerme a su uso o divulgación, pudiendo dirigir mi solicitud de ejercicio de los derechos a través
                        de la dirección especificada en la página web de <strong>AYBAR S.A.C.</strong>, teniendo a salvo
                        además el
                        ejercicio de la tutela de sus derechos ante la Autoridad Nacional de Protección de Datos Personales
                        en vía de reclamación o ante el Poder Judicial mediante la acción de hábeas data.
                        <br><br> Los datos personales
                        recolectados por <strong>AYBAR S.A.C.</strong> son obligatorios, la negativa a suministrarlos
                        supondrá la imposibilidad de concretar el fin previsto.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
                        data-bs-dismiss="modal">
                        Cerrar
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>




    <!-- sample modal content -->
    <div class="modal fade" id="bs-example-modal-xlg2" tabindex="-1" aria-labelledby="bs-example-modal-lg"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="text-warning text-center" style="font-size: 1.65rem">CLÁUSULA PARA ENVÍO DE PROMOCIONES
                        COMERCIALES</h5>
                    <p></p>
                    <p style="text-align: justify; font-size: 15px;">
                        Autorizo a <strong>AYBAR S.A.C.</strong> a utilizar mis Datos Personales y que los mismos sean
                        tratados
                        por sus empresas subsidiarias; para que me sean ofrecidos beneficios, productos y servicios,
                        publicidad, obsequios, ofertas y/o promociones (personalizadas o generales) de los servicios
                        que brinda <strong>AYBAR S.A.C.</strong> y de las empresas subsidiarias, a través de cualquier medio
                        de comunicación. Declaro conocer mi derecho a revocar este consentimiento en cualquier momento.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
                        data-bs-dismiss="modal">
                        Cerrar
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
