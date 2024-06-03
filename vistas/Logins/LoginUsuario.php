<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/estilo.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <script type="text/javascript" src="../js/JQuery/JQLogin.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script type=" text/javascript" src="../../js/A1.js"></script>
  <title>Document</title>
  <script>
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
      success: function(res) {
        $("#RptaIniciarSesion").html(res);
        var a = $("#RptaIniciarSesion").text();
        if (a != "Usuario o Contraseña Incorrectas") {
          $("#ContenidoIndex").html(res);
        }
      },
    });
  }
  </script>
</head>

<body>
  <div class=" p-4 border-0 fixed content-login modal" id="Login">
    <button class="bg-white absolute right-0 top-0 mt-6 mr-6" onclick="closeModal()"><svg
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-x">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M18 6l-12 12" />
        <path d="M6 6l12 12" />
      </svg></button>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm" id="contenidoLogin">
      <form class="rounded-2xl bg-white space-y-6" action="#" method="post" id="formLogin">
        <h2 class="text-center text-3xl font-bold">Iniciar Sesión</h2>

        <div>
          <label for="txtCor" class="block text-sm font-medium leading-6 text-gray-900">Correo:</label>
          <div class="mt-2">
            <input id="txtUsuario" name="txtCorreo" type="email" autocomplete="email" required
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="txtCon" class="block text-sm font-medium leading-6 text-gray-900">Contraseña:</label>

          </div>
          <div class="mt-2">
            <input id="txtContraseña" name="txtContraseña" type="password" autocomplete="current-password" required
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <input type="button" id="txtBtn"
            class="flex w-full justify-center rounded-md color-red px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            id="btnLoginUsuario" value="Login" onclick="IniciarSesionUsuario()"></input>
        </div>
        <div class="respuesta" id="RptaIniciarSesion"></div>

        <p class="mt-10 text-center text-sm text-gray-500">
          ¿No tienes cuenta?
          <a onclick="MostrarFormRegistrarUsuario()" href="#"
            class="font-semibold leading-6 text-red-600 hover:text-red-500">Registrarse</a>
        </p>
      </form>

</body>

</html>