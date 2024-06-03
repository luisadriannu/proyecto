function closeModal() {
  document.getElementById("Login").classList.add("hidden");
}

function noClose(e) {
  e.stopPropagation();
}

function MostrarFormRegistrarUsuario() {
  $.ajax({
    type: "POST",
    url: "Controladores/ControlGeneral.php",
    data: {
      dato: "MostrarFormRegistrarUsuario",
    },
    success: function (res) {
      $("#ContenidoPrincipal").html(res);
    },
  });
}

function IniciarSesionUsuario() {
  let correo = $("#txtUsuario").val();
  let contraseña = $("#txtContraseña").val();

  $.ajax({
    type: "POST",
    url: "controladores/ControlGeneral.php",
    data: {
      dato: "VerificarUsuario",
      correo: correo,
      contraseña: contraseña,
    },
    success: function (res) {
      $("#RptaIniciarSesion").html(res);
      var a = $("#RptaIniciarSesion").text();
      if (a != "Usuario o Contraseña Incorrectas") {
        $("#ContenidoIndex").html(res);
      }
    },
  });
}

/* FUNCIONES LOGIN TRAB */

function IniciarSesionTrab() {
  let correo = $("#txtUsuarioTrab").val();
  let contra = $("#txtContraseñaTrab").val();

  $.ajax({
    type: "POST",
    url: "controladores/ControlGeneral.php",
    data: {
      dato: "IniciarSesionTrab",
      correo: correo,
      contraseña: contra,
    },
    success: function (res) {
      $("#RptaIniciarSesisionTrab").html(res);
      var a = $("#RptaIniciarSesisionTrab").text();
      if (a != "Usuario o Contraseña Incorrectas") {
        $("#ContenidoIndex").html(res);
      }
    },
  });
}

/* FUNCIONES PORTAL CLIENTE */

function MostrarSucursales() {
  $.ajax({
    type: "POST",
    url: "../controladores/ControlGeneral.php",
    data: {
      dato: "MostrarSucursales",
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
    },
  });
}

function VerAlmacenesS001() {
  $.ajax({
    type: "POST",
    url: "../controladores/ControlGeneral.php",
    data: {
      dato: "VerAlmacenes1",
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
    },
  });
}

function VerAlmacenesS002() {
  $.ajax({
    type: "POST",
    url: "../controladores/ControlGeneral.php",
    data: {
      dato: "VerAlmacenes2",
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
    },
  });
}

function VerAlmacenesS003() {
  $.ajax({
    type: "POST",
    url: "../controladores/ControlGeneral.php",
    data: {
      dato: "VerAlmacenes3",
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
    },
  });
}

function showMiCuenta() {
  alert("xd");
}

/* ALMACENES DE LA SUCURSAL S001 */

$("#btnAlquilarA004").click(function (e) {
  let infoalmacen = $("#Almacen-A004").html();
  let idalmacen = $("#btnAlquilarA004").val();

  $.ajax({
    type: "POST",
    url: "../controladores/ControlGeneral.php",
    data: {
      dato: "RegistrarAlquiler",
      almacen: idalmacen,
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
      $("#AlmacenSeleccionado").html(infoalmacen);
    },
  });

  e.preventDefault();
});

$("#btnAlquilarA006").click(function (e) {
  let infoalmacen = $("#Almacen-A006").html();
  let idalmacen = $("#btnAlquilarA006").val();

  $.ajax({
    type: "POST",
    url: "../controladores/ControlGeneral.php",
    data: {
      dato: "RegistrarAlquiler",
      almacen: idalmacen,
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
      $("#AlmacenSeleccionado").html(infoalmacen);
    },
  });

  e.preventDefault();
});

$("#btnAlquilarA008").click(function (e) {
  let infoalmacen = $("#Almacen-A008").html();
  let idalmacen = $("#btnAlquilarA008").val();

  $.ajax({
    type: "POST",
    url: "../controladores/ControlGeneral.php",
    data: {
      dato: "RegistrarAlquiler",
      almacen: idalmacen,
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
      $("#AlmacenSeleccionado").html(infoalmacen);
    },
  });

  e.preventDefault();
});

/* ALMACENES DE LA SUCURSAL S002 */

$("#btnAlquilarA001").click(function (e) {
  let infoalmacen = $("#Almacen-A001").html();
  let idalmacen = $("#btnAlquilarA001").val();

  $.ajax({
    type: "POST",
    url: "Controladores/ControlGeneral.php",
    data: {
      dato: "RegistrarAlquiler",
      almacen: idalmacen,
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
      $("#AlmacenSeleccionado").html(infoalmacen);
    },
  });

  e.preventDefault();
});

$("#btnAlquilarA002").click(function (e) {
  let infoalmacen = $("#Almacen-A002").html();
  let idalmacen = $("#btnAlquilarA002").val();

  $.ajax({
    type: "POST",
    url: "Controladores/ControlGeneral.php",
    data: {
      dato: "RegistrarAlquiler",
      almacen: idalmacen,
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
      $("#AlmacenSeleccionado").html(infoalmacen);
    },
  });

  e.preventDefault();
});

$("#btnAlquilarA005").click(function (e) {
  let infoalmacen = $("#Almacen-A005").html();
  let idalmacen = $("#btnAlquilarA005").val();

  $.ajax({
    type: "POST",
    url: "Controladores/ControlGeneral.php",
    data: {
      dato: "RegistrarAlquiler",
      almacen: idalmacen,
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
      $("#AlmacenSeleccionado").html(infoalmacen);
    },
  });

  e.preventDefault();
});

$("#btnAlquilarA009").click(function (e) {
  let infoalmacen = $("#Almacen-A009").html();
  let idalmacen = $("#btnAlquilarA009").val();

  $.ajax({
    type: "POST",
    url: "Controladores/ControlGeneral.php",
    data: {
      dato: "RegistrarAlquiler",
      almacen: idalmacen,
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
      $("#AlmacenSeleccionado").html(infoalmacen);
    },
  });

  e.preventDefault();
});

/* ALMACENES DE LA SUCURSAL S003 */

$("#btnAlquilarA003").click(function (e) {
  let infoalmacen = $("#Almacen-A003").html();
  let idalmacen = $("#btnAlquilarA003").val();

  $.ajax({
    type: "POST",
    url: "Controladores/ControlGeneral.php",
    data: {
      dato: "RegistrarAlquiler",
      almacen: idalmacen,
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
      $("#AlmacenSeleccionado").html(infoalmacen);
    },
  });

  e.preventDefault();
});

$("#btnAlquilarA007").click(function (e) {
  let infoalmacen = $("#Almacen-A007").html();
  let idalmacen = $("#btnAlquilarA007").val();

  $.ajax({
    type: "POST",
    url: "Controladores/ControlGeneral.php",
    data: {
      dato: "RegistrarAlquiler",
      almacen: idalmacen,
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
      $("#AlmacenSeleccionado").html(infoalmacen);
    },
  });

  e.preventDefault();
});

$("#btnAlquilarA010").click(function (e) {
  let infoalmacen = $("#Almacen-A010").html();
  let idalmacen = $("#btnAlquilarA010").val();

  $.ajax({
    type: "POST",
    url: "Controladores/ControlGeneral.php",
    data: {
      dato: "RegistrarAlquiler",
      almacen: idalmacen,
    },
    success: function (res) {
      $("#ContenidoPrincipalCliente").html(res);
      $("#AlmacenSeleccionado").html(infoalmacen);
    },
  });

  e.preventDefault();
});

/* ALQUILAR ALMACEN SELECCIONADO */

$("#btnAlquilar").click(function (e) {
  let nombres = $("#txtNombres").val();
  let apellidos = $("#txtApellidos").val();
  let DNI = $("#txtDNI").val();
  let tipo = $("#cbxTipo").val();
  let ruc = $("#txtRUC").val();
  let telefono = $("#txtTelefono").val();
  let correo = $("#txtCorreo").val();
  let contra = $("#txtContraseña").val();
  let idalmacen = $("#btnAlquilar").val();
  let fecha = new Date();
  let mes = String(fecha.getMonth() + 1).padStart(2, "0");
  let año = fecha.getFullYear();
  let tiempo = $("#txtTiempoAlquiler").val();

  switch (mes) {
    case "06":
      mes = "Junio";
    case "07":
      mes = "Julio";
  }

  if (
    (nombres == "") |
    (apellidos == "") |
    (DNI == "") |
    (tipo == "") |
    (telefono == "") |
    (correo == "") |
    (contra == "")
  ) {
    alert("LLENE TODOS LOS CAMPOS");
  } else {
    $.ajax({
      type: "POST",
      url: "Controladores/ControlGeneral.php",
      data: {
        dato: "RegistrarCliente",
        nombres: nombres,
        apellidos: apellidos,
        dni: DNI,
        tipo: tipo,
        ruc: ruc,
        telefono: telefono,
        correo: correo,
        contra: contra,
        mes: mes,
        año: año,
        almacen: idalmacen,
        tiempo: tiempo,
      },
      success: function (res) {
        $("#RespuestaAlquiler").html(res);
      },
    });

    $("#txtNombres").val("");
    $("#txtApellidos").val("");
    $("#txtDNI").val("");
    $("#cbxTipo").val("");
    $("#txtRUC").val("");
    $("#txtTelefono").val("");
    $("#txtCorreo").val("");
    $("#txtContraseña").val("");
  }

  e.preventDefault();
});
