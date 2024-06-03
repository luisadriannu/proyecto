<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="js/Funciones.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <link href="css/estilo.css" rel="stylesheet">
  <link href="../../css/estilo.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <title>Document</title>
</head>

<body>
  <header class="fixed border header-menu z-10">
    <div class="w-full py-1 flex justify-around ">
      <a href="/">
        <img class="w-auto h-20" src="/assets/logo.png" alt="Logo" />
      </a>
      <div class="style-menu-options">
        <div class="flex gap-6">
          <div class="flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24 " height="24" viewBox="0 0 24 24" fill="none"
              stroke="#a40047" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-search">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
              <path d="M21 21l-6 -6" />
            </svg>

            <a href="../../../vistas/Sucursales/VistaSucursales.php">Sucursales</a>
          </div>

          <div class="navbar ">
            <div class="flex nav-item gap-1" onmouseover="miCuenta()">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="#a40047" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
              </svg>
              <div class="cursor-pointer">
                Mi cuenta
              </div>
              <div class="submenu" id="submenu">
                <a href="../../../vistas/Portales/PortalCliente/Menu/VistaMiCuenta.php">Mi Cuenta</a>
                <a href="javascript:showMisArriendos()">Mis Arriendos</a>
                <a href="javascript:showMisFacturas()">Mis Facturas</a>
                <a href="javascript:Salir()">Salir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </header>

  <div class="container mx-auto pt-32">
    <div>
      <h1>INFORMACION DEL ALMACEN</h1>
      <div id="AlmacenSeleccionado"></div>
      <form method="post">
        <h1 class="text-4xl">INFORMACION PERSONAL</h1>
        <hr class="my-4">
        <div class="grid grid-cols-2 gap-4">
          <div class="flex flex-col mb-4">
            <label class="text-lg font-semibold" for="txtNombres">Nombres:</label>
            <input class="border-2 w-full rounded-md p-4" type="text" placeholder="Escribe tus nombres *"
              id="txtNombres" required>
          </div>
          <div class="flex flex-col mb-4">
            <label class="text-lg font-semibold" for="txtApellidos">Apellidos:</label>
            <input class="border-2 w-full rounded-md p-4" type="text" id="txtApellidos"
              placeholder="Escribe tus apellidos *" required>
          </div>
          <div class="flex flex-col mb-4">
            <label class="text-lg font-semibold" for="txtDNI">DNI:</label>
            <input class="border-2 w-full rounded-md p-4" type="number" id="txtDNI" min="0" placeholder="123456789 *"
              required>
          </div>
          <div class="flex flex-col mb-4">
            <label class="text-lg font-semibold" for="txtTipo">Tipo:</label>
            <select class="border-2 w-full rounded-md p-4" id="cbxTipo" required>
              <option>Natural</option>
              <option>Juridica</option>
            </select>
          </div>
          <div class="flex flex-col mb-4">
            <label class="text-lg font-semibold" for="txtTipo">RUC:</label>
            <input class="border-2 w-full rounded-md p-4" placeholder="Escribe tu RUC *" type="number" min="0"
              id="txtRUC">
          </div>
          <div class="flex flex-col mb-4">
            <label class="text-lg font-semibold" for="txtTelefono">Teléfono:</label>
            <input class="border-2 w-full rounded-md p-4" placeholder="Escribe tu teléfono *" type="text"
              id="txtTelefono" required>
          </div>
          <div class="flex flex-col mb-4">
            <label class="text-lg font-semibold" for="txtCorreo">Correo:</label>
            <input class="border-2 w-full rounded-md p-4" placeholder="Escribe tu correo *" type="text" id="txtCorreo"
              required>
          </div>
          <div class="flex flex-col mb-4">
            <label class="text-lg font-semibold" for="txtContraseña">Contraseña:</label>
            <input class="border-2 w-full rounded-md p-4" placeholder="Escribe tu contraseña *" type="text"
              id="txtPassword" required>
          </div>
          <div class="flex flex-col mb-4">
            <label class="text-lg font-semibold" for="txtFecha">Fecha:</label>
            <input class="border-2 w-full rounded-md p-4" type="date" id="txtDate" required>
          </div>
        </div>
        <button class="background-pink p-4 w-72 text-white rounded-lg text-lg font-semibold mt-8" type="submit"
          id="btnAlquilar">ALQUILAR ALMACEN</button>
      </form>
      <div id="RespuestaAlquiler"></div>
    </div>
  </div>
</body>

</html>