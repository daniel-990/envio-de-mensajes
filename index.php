<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <style>
        .alert-pop {
            position: fixed;
            top: 20rem;
            right: -45px;
            z-index: 5;

        }

        .img-pop-alert {
            width: 259px;
        }

        .contacto-whatsapp {
            position: fixed;
            right: -91px;
            top: 43rem;
        }

        .titulo-wapp {
            position: relative;
            right: -4px;
            font-size: 17px;
            font-weight: 700;
            color: white;
            padding: 3px;
            padding-right: 13px;
            background-color: #27bcb2;
            border-radius: 5px;
        }

        .contacto-whatsapp a img {
            width: 316px;
            position: relative;
            right: -7px;
        }

        #click-animate {
            font-size: 20px;
            cursor: pointer;
            position: relative;
            top: 151px;
            left: -46px;
            color: white;
            border-radius: 100px;
            padding: 7px;
            background-color: #2e4297;
        }

        .display-pagina {
            display: none
        }

        /*
            rotador
        */

        #rotador {
            list-style: none;
        }

        #rotador li a {
            color: black;
            text-decoration: none;
        }

        #rotador li i.icon {
            color: #ffde02;
        }

        #alerta h3 {
            font-size: 20px;
            background-color: red;
            color: white;
            padding: 10px;
            border-radius: 7px;
            width: 240px;
        }
    </style>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <div id="form-pagoscontraentrega" class="container">
        <h1>Pago Contraentrega - Medellin - D'luchi</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <form action="./form.php" method="POST" id="my_form">
                    <div class="form-group row">
                        <label for="nombreID" class="col-sm-3 col-form-label">Su nombre *</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nombreID" placeholder="Nombre" required="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellidoID" class="col-sm-3 col-form-label">Apellido *</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="apellidoID" placeholder="Apellido" required="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cedulaID" class="col-sm-3 col-form-label">Cedula *</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="cedulaID" placeholder="Cedula" required="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direccionID" class="col-sm-3 col-form-label">Dirección *</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="direccionID" placeholder="Dirección" required="" />
                            <small id="emailHelp" class="form-text text-muted">Por favor ingrese la dirección completa si es fuera de Medellín ingresar el sector, pueblo, municipio, vereda etc...</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="numtelefonoID" class="col-sm-3 col-form-label">Número de teléfono *</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="numtelefonoID" placeholder="Número de teléfono" required="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="correoID" class="col-sm-3 col-form-label">Correo electrónico *</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="correoID" placeholder="Correo electrónico" required="" />
                        </div>
                    </div>
                    <p style="color: #17a2b8;">Recuerda que al valor del producto se le suma el <span style="font-weight: 700;color: #299eb1;">valor del domicilio</span></p>
                    <hr />
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Sector</th>
                                <th scope="col">Tarifas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Medellín</th>
                                <td>$7.000</td>
                            </tr>
                            <tr>
                                <th scope="row">Envigado y Sabaneta</th>
                                <td>$8.000</td>
                            </tr>
                            <tr>
                                <th scope="row">Bello</th>
                                <td>$9.000</td>
                            </tr>
                            <tr>
                                <th scope="row">La Estrella y Caldas</th>
                                <td>$10.000</td>
                            </tr>
                            <tr>
                                <th scope="row">Girardota</th>
                                <td>$15.000</td>
                            </tr>
                            <tr>
                                <th scope="row">Rionegro</th>
                                <td>$25.000</td>
                            </tr>
                            <tr>
                                <th scope="row" style="color:#199cb1;">Resto del pais</th>
                                <td style="color:#199cb1;">$10.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr />

                    <div id="ciudad" class="form-group row">
                        <label for="ciudadID" class="col-sm-3 col-form-label">Ciudad *</label>
                        <div class="col-md-6">
                            <select name="ciudad" class="form-control" id="ciudadID"></select>
                        </div>
                    </div>

                    <div id="barrio" class="form-group row">
                        <label for="barrioID" class="col-sm-3 col-form-label">Barrio *</label>
                        <div class="col-md-6">
                            <select class="form-control" id="barrioID"></select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="productosID" class="col-sm-3 col-form-label">Producto *</label>
                        <div class="col-md-6">
                            <select class="form-control" id="productosID" style="width: 400px;"></select>
                        </div>
                    </div>
                    <p style="color: #17a2b8;">Si no encuentras el producto en la lista por favor adjuntar el Nombre o URL en este cuadro de texto</p>
                    <hr />
                    <div class="form-group row">
                        <label for="mensajeID" class="col-sm-3 col-form-label">Mensaje</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" placeholder="Adicione información para el envió - Link del producto - unidad residencial - nombre del edificio etc.." id="mensajeID" require=""></textarea>
                        </div>
                    </div>
                    <button id="submit" class="btn btn-primary mb-2">Enviar</button>
                    <br>
                    <div id="alerta"></div>
                </form>
            </div>
            <div class="col-md-6">.......</div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="main.js" async defer></script>
</body>

</html>