// Object.keys(ciudad) -> indice de la lista de ciudades

const form = () => {
    $("#barrio").hide();

    $.ajax({
        url: "./d-barrios.php",
        type: "GET",
    }).done(function (data) {

        const selector = document.querySelector("#barrioID");
        const selectorciudad = document.querySelector("#ciudadID");

        const barrios = data.barrios;
        const ciudades = data.ciudades;

        ciudades.map(itemsciudad => {
            const htmlciudad = `
                <option value="${itemsciudad.ciudad} | tarifa: ${itemsciudad.tarifa}" datatarifa="">${itemsciudad.ciudad} - tarifa: ${itemsciudad.tarifa}</option>
            `;
            selectorciudad.innerHTML += htmlciudad;

            $("select[name=ciudad]").change(function(){
                const ciudad = $(this).val();
                if(ciudad == 'Medellín | tarifa: ' || ciudad == 'Medellin | tarifa: ' || ciudad == 'medellín | tarifa: ' || ciudad == 'medellin | tarifa: '){
                    $("#barrio").show();
                }else{
                    $("#barrio").hide();
                }
            });
        })

        barrios.map(items => {
            const html = `
                        <option value="${items.barrio} | tarifa: ${items.tarifa}$">${items.barrio} - envio: ${items.tarifa}$</option>
                    `;
            selector.innerHTML += html;
        })
    });

    $.ajax({
        url: "./d-productos.php",
        type: "GET",
    }).done(function (data) {
        const selector = document.querySelector("#productosID");
        const productos = data.productos;

        productos.map(items => {
            const html = `
                <option value="${items.nombre} | ${items.url} | ${items.precio}$ - ${items.tipo} " data-nombre="${items.nombre}" data-precio="${items.precio}" data-tipo="${items.tipo}">${items.nombre} - ${items.precio}$</option>
            `;
            selector.innerHTML += html;
        })
    });

    $("#submit").on('click', function (event) {
        event.preventDefault();
        if ($("#ciudadID").val() == 'elegir' || $("#nombreID").val() == "" || $("#cedulaID").val() == "" || $("#direccionID").val() == "" || $("#numtelefonoID").val() == "" || $("#mensajeID").val() == "") {
            document.querySelector("#alerta").innerHTML = "<h3>Faltan campos por llenar</h3>";
        } else {
            ajax();
        }
        function ajax() {
            $.ajax({
                type: 'POST',
                url: './form.php',
                data: {
                    nombre: $("#nombreID").val(),
                    apellido: $("#apellidoID").val(),
                    cedula: $("#cedulaID").val(),
                    direccion: $("#direccionID").val(),
                    numerodetelefono: $("#numtelefonoID").val(),
                    correo: $("#correoID").val(),
                    ciudad: $("#ciudadID").val(),
                    barrio: $("#barrioID").val(),
                    producto: $("#productosID").val(),
                    mensaje: $("#mensajeID").val()
                },
                success: function (response) {
                    console.log(response);
                    $("#nombreID,ciudadID,#barrioID,#apellidoID,#cedulaID,#direccionID,#numtelefonoID,#correoID,#productosID,#mensajeID").val("");
                    document.querySelector("#alerta").innerHTML = "<h3>Mensaje enviado</h3>";
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }
    });

}

jQuery(document).ready(function () {
    const pathname = window.location.pathname;
    if (pathname == "/pago-contraentrega-medellin" || pathname == "/form-correo/") {
        form();
    } else {

    }
});