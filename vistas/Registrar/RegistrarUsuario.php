<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="js/Funciones.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link href="../../../css/estilo.css" rel="stylesheet">
  <script type=" text/javascript" src="../../../js/A1.js"></script>
  <script>
  function closeModal1() {
    console.log('Cerrando modal de registro');
    document.getElementById("idRegistro").classList.add("hidden");
  }

  function noClose(e) {
    e.stopPropagation();
  }

  function mostrarLoginUsuario() {
    var xml = new XMLHttpRequest();
    xml.open("GET", "vistas/Logins/LoginUsuario.php?dato=MostrarLogin", true);
    xml.onload = function() {
      if (xml.status == 200) {
        document.getElementById("ContenidoPrincipal").innerHTML = xml.responseText;
      }
    };
    xml.send();

  };
  </script>
  <title>Document</title>
  <style>
  .hidden {
    display: none;
  }
  </style>
</head>


<body>

  <div class="p-4 border-0 fixed content-login modal" id="idRegistro">
    <button class="bg-white absolute right-0 top-0 mt-6 mr-6" onclick="closeModal1()"><svg
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-x">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M18 6l-12 12" />
        <path d="M6 6l12 12" />
      </svg></button>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm" id="ContenidoRegistrar">
      <form class="rounded-2xl p-10 bg-white space-y-6" action="#" method="post" id="formRegistrar">
        <h2 class="text-center text-3xl font-bold">Bienvenido</h2>
        <div>
          <label for="txtNom" class="block text-sm font-medium leading-6 text-gray-900">Nombres:</label>
          <div class="mt-2">
            <input id="txtNombres" name="txtNombres" type="text" autocomplete="name" required
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="txtape" class="block text-sm font-medium leading-6 text-gray-900">Apellidos:</label>

          </div>
          <div class="mt-2">
            <input id="txtApellidos" name="txtApellidos" type="text" autocomplete="name" required
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="txtTelf" class="block text-sm font-medium leading-6 text-gray-900">Teléfono:</label>
          </div>
          <div class="mt-2">
            <input id="txtTelefono" name="txtTelefono" type="phone" autocomplete="phone" required
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="txtCor" class="block text-sm font-medium leading-6 text-gray-900">Correo:</label>
          </div>
          <div class="mt-2">
            <input id="txtCorreo" name="txtCorreo" type="email" autocomplete="email" required
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
          <input type="button"
            class="flex w-full justify-center rounded-md color-red px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            id="btnLogin" value="Registrarse" onclick="RegistrarUsuario()"></input>

        </div>

        <p class="mt-10 text-center text-sm text-gray-500">
          ¿Ya tienes una cuenta?
          <a onclick="mostrarLoginUsuario()" href="#"
            class="font-semibold leading-6 text-red-600 hover:text-red-500">Iniciar
            Sesión</a>
        </p>
    </div>
    </form>
    <div id="RptaRegistrar"></div>
  </div>
</body>

</html>