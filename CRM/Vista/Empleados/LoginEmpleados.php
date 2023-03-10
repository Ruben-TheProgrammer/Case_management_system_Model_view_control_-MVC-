<!DOCTYPE html>
<html lang="ES-SV">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>..:: Sistema Gesti&oacute;n de Casos vtiger ..::</title>
    <meta name="description" content="Sistema Gesti&oacute;n de Casos vtiger CRM Espa&ntilde;ol" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="../Vista/dist/img/favicon.ico">
    <link rel="icon" href="../Vista/dist/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="../Vista/dist/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../Vista/dist/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../Vista/dist/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../Vista/dist/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../Vista/dist/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../Vista/dist/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../Vista/dist/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../Vista/dist/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../Vista/dist/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../Vista/dist/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../Vista/dist/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../Vista/dist/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../Vista/dist/img/favicon-16x16.png">
    <link rel="manifest" href="../Vista/dist/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../Vista/dist/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Custom CSS -->
    <link href="../Vista/dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
                <a class="d-flex text-white auth-brand" href="#">
                    VTiger
                </a>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                        <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                            <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(../Vista/dist/img/BGLogin1.jpg);">
                                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-3 text-white mb-20">Soluciones Integrales</h1>
                                        <p class="text-white">Sabemos que nuestros clientes necesitan
                                        de un servicio de calidad, es por eso implementamos est&aacute;ndares que suplen las necesidades de cada cliente con tecnolog&iacute;a a la vanguardia.</p>
                                    </div>
                                </div>
                                <div class="bg-overlay bg-trans-dark-50"></div>
                            </div>
                            <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(../Vista/dist/img/BGLogin2.jpg);">
                                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-3 text-white mb-20">Amplia Experiencia Nos Respalda</h1>
                                        <p class="text-white">Contamos con m&aacute;s de 20 a&ntilde;os de experiencia, cada uno de nuestros clientes nos respaldan sobre las soluciones que nosotros brindamos la resoluci&oacute;n y gesti&oacute;n de valiosa informaci&oacute;n</p>
                                    </div>
                                </div>
								<div class="bg-overlay bg-trans-dark-50"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                                <form method='POST' action='ControlLoginEmpleados.php?acc=2' class="needs-validation" novalidate>
                                    <h1 class="display-4 mb-10">?? Bienvenido(a) !</h1>
                                    <p class="mb-30">Por favor complete los campos para iniciar sesi&oacute;n.</p>
                                    <div class="form-group">
                                        <label for="validationCustom01"></label>
                                        <input type="text" minlength="5" maxlength="50" name="UsuarioEmpleados" class="form-control" id="validationCustom01" placeholder="Por favor Ingrese El Usuario..." value="" required>
                                        <!-- INVALIDO -->
                                        <div class="invalid-feedback">
                                            Por favor ingrese un usuario v&aacute;lido, no puede contener menos de 5 car&aacute;cteres...
                                        </div>
                                        <!-- VALIDO -->
                                        <div class="valid-feedback">
                                            Campo Completado Exitosamente!...
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label for="validationCustom01"></label>
                                            <input class="form-control" name="ClaveEmpleados" id="validationCustom01" minlength="5" maxlength="15" placeholder="Ingrese su contrase&ntilde;a..." type="password" required>
                                            <!-- INVALIDO -->
                                            <div class="invalid-feedback">
                                                Por favor ingrese una contrase&ntilde;a v&aacute;lida, no puede contener menos de 5 car&aacute;cteres...
                                            </div>
                                            <!-- VALIDO -->
                                            <div class="valid-feedback">
                                                Campo Completado Exitosamente!...
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-plus"></i> Ingresar</button>
                                    <div class="option-sep"> :) </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
	<!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="../Vista/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../Vista/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../Vista/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="../Vista/dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="../Vista/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Owl JavaScript -->
    <script src="../Vista/vendors/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="../Vista/dist/js/feather.min.js"></script>

    <!-- Init JavaScript -->
    <script src="../Vista/dist/js/init.js"></script>
    <script src="../Vista/dist/js/login-data.js"></script>
    <script src="../Vista/dist/js/validation-data.js"></script>
</body>

</html>