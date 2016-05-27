function Login() {//#1

    var pagina = "./administracion.php";

    var usuario = {email: $("#email").val(), pass: $("#password").val()};

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "json",
        data: {
            queMuestro: 1,
            usuario: usuario
        },
        async: true
    })
    .done(function (objJson) {

        if (!objJson.Exito) {
            alert(objJson.Mensaje);
            return;
        }

        window.location.href = "principal.php";

    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });

}
function Logout() {//#2

    var pagina = "./administracion.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "html",
        data: {
            queMuestro: 2
        },
        async: true
    })
    .done(function (html) {

        window.location.href = "login.php?uss=1";

    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });

}
function MostrarGrilla() {//#3

//alert("generar ajax para cargar la grilla");

var pagina = "./administracion.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "html",
        data: {
            queMuestro: 3
        },
        async: true
    })
    .done(function (html) {

        $("#divGrilla").html(html);

    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });
    
}

function Home() {//#3-sin case

    $("#divGrilla").html("");
    $("#divAbm").html("");
}
function CargarFormUsuario() {//#4

    var pagina = "./administracion.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "html",
        data: {
            queMuestro: 4
        },
        async: true
    })
    .done(function (html) {

        $("#divAbm").html(html);
        $('#cboPerfiles > option[value="usuario"]').attr('selected', 'selected');
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });

}
function SubirFoto() {//#5

    var pagina = "./administracion.php";
    var foto = $("#archivo").val();

    if (foto === "")
    {
        return;
    }

    var archivo = $("#archivo")[0];
    var formData = new FormData();
    formData.append("archivo", archivo.files[0]);
    formData.append("queMuestro", "5");

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,
        data: formData,
        async: true
    })
    .done(function (objJson) {

        if (!objJson.Exito) {
            alert(objJson.Mensaje);
            return;
        }
        $("#fotoTmp").attr("src", objJson.PathTemporal);
        $("#hdnFotoSubir").val(objJson.PathTemporal);
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });
}
function AgregarUsuario() {//#6

    var pagina = "./administracion.php";
    var datosUsuario = {
        nombre : $("#txtNombre").val(),
        email : $("#txtEmail").val(),
        pass : $("#txtPassword").val(),
        perfil : $("#cboPerfiles").val(),
        foto : $("#hdnFotoSubir").val(),

    }

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "html",
        data: {
            queMuestro: 6,
            usuario : datosUsuario
        },
        async: true
    })
    .done(function (html) {

        alert("Usuario agregado! ID: "+ html);
        MostrarGrilla();

    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });

}
function EditarUsuario(obj) {//#7 sin case

    var pagina = "./administracion.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "html",
        data: {
            queMuestro: 4,
            usuario: obj
        },
        async: true
    })
    .done(function (html) {

        $("#divAbm").html(html);

    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });
}
function EliminarUsuario(id) {//#7

    if (!confirm("Eliminar USUARIO?")) {
        return;
    }

    var pagina = "./administracion.php";

    var objUsuario ={
        id : id
    }

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "html",
        data: {
            queMuestro: 7,
            usuario: objUsuario
        },
        async: true
    })
    .done(function (html) {

        alert("Usuario eliminado!");
        MostrarGrilla();

    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });

}
function ModificarUsuario(id) {//#8

    if (!confirm("Modificar USUARIO?")) {
        return;
    }

    var pagina = "./administracion.php";

    var datosUsuario = {
        nombre : $("#txtNombre").val(),
        email : $("#txtEmail").val(),
        pass : $("#txtPassword").val(),
        perfil : $("#cboPerfiles").val(),
        foto : $("#hdnFotoSubir").val(),
        id : id
    }
    
    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "html",
        data: {
            queMuestro: 8,
            usuario: datosUsuario
        },
        async: true
    })
    .done(function (html) {

        alert("Usuario modificado!");
        MostrarGrilla();

    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });

}
