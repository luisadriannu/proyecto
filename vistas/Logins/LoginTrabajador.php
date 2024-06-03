<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="../../js/A1.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <link href="../../css/estilo.css" rel="stylesheet">
  <script type=" text/javascript" src="../../../js/A1.js"></script>
  <title>Almacén Agora</title>
  <script>
  function closeModal2() {
    console.log('Cerrando modal de registro');
    document.getElementById("LoginTrab").classList.add("hidden");
  }

  function noClose(e) {
    e.stopPropagation();
  }
  </script>
  <style>
  .hidden {
    display: none;
  }
  </style>
</head>

<body>
  <div class=" p-4 border-0 fixed content-login modal" id="LoginTrab">
    <button class="bg-white absolute right-0 top-0 mt-6 mr-6" onclick="closeModal2()"><svg
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-x">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M18 6l-12 12" />
        <path d="M6 6l12 12" />
      </svg></button>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm" id="contenidoLogin">
      <form class="rounded-2xl bg-white space-y-6" action="#" method="post" id="formLogin">
        <h2 class="text-center text-3xl font-bold">Iniciar Sesión Trabajador</h2>

        <div>
          <label for="txtCor" class="block text-sm font-medium leading-6 text-gray-900">Correo:</label>
          <div class="mt-2">
            <input id="txtUsuarioTrab" name="txtCorreo" type="email" autocomplete="email" required
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="txtCon" class="block text-sm font-medium leading-6 text-gray-900">Contraseña:</label>

          </div>
          <div class="mt-2">
            <input id="txtContraseñaTrab" name="txtContraseña" type="password" autocomplete="current-password" required
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <input type="button" id="txtBtn"
            class="flex w-full justify-center rounded-md color-red px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            id="btnLoginUsuario" value="Login" onclick="IniciarSesionTrab()"></input>
        </div>
        <div class="respuesta" id="RptaIniciarSesisionTrab"></div>
      </form>

</body>

</html>