<!DOCTYPE html>
<html lang="es">

<scrip>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <link href="../../css/estilo.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <script src="../../js/A1.js"></script>
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

    <div class="pt-28 container mx-auto">
      <div class="px-4">
        <div class="py-8 relative" id="Sucursal-S001">
          <article class="flex bg-white rounded-xl gap-4 shadow-card items-center h-72">
            <div class="card-badges"></div>
            <img data-zoomable loading="lazy" src="../../assets/tumba.jpg" class="h-full rounded-img-card w-1/4"
              style="cursor: zoom-in; vertical-align: middle;">
            <div class=" w-full relative">
              <div class="top-badges">
                <a href="../../vistas/Sucursales/Almacenes/AlmacenesSuc1.php"
                  class="card-bodega--title font-semibold">Mallplaza
                  Bellavista</a>
              </div>
              <div>

                <h4 class="my-4 text-lg text-zinc-500 font-bold flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                  </svg>
                  Av. Óscar R. Benavides 3866
                </h4>

                <a href="https://www.google.com/maps/@-12.0556177,-77.1019947,19z?entry=ttu" target="_blank"
                  rel="noopener" class="border-4 rounded-full w-16 p-4 flex items-center hover:border-red-400">
                  <img src="../../assets/icon-applemaps.svg" alt="Mapa">
                </a>
              </div>
              <a class="background-pink p-4 text-white rounded-lg absolute right-8 bottom-0 text-lg font-semibold"
                type="button" href="../../vistas/Sucursales/Almacenes/AlmacenesSuc1.php"
                onclick="VerAlmacenesS001()">Ver Almacenes</a>
            </div>
        </div>
        </article>
      </div>
      <div class="px-4">
        <div class="py-8 relative" id="Sucursal-S002">
          <article class="flex bg-white rounded-xl gap-4 shadow-card items-center h-72">
            <div class="card-badges"></div>
            <img data-zoomable loading="lazy" src="../../assets/tumba.png" class="h-full w-1/4 rounded-img-card"
              style="cursor: zoom-in; vertical-align: middle;">
            <div class=" w-full relative">
              <div class="top-badges">
                <a href="../../vistas/Sucursales/Almacenes/AlmacenesSuc2.php"
                  class="card-bodega--title font-semibold">Jockey Plaza</a>
              </div>
              <div>

                <h4 class="my-4 text-lg text-zinc-500 font-bold flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                  </svg>
                  Av. Javier Prado Este 4200
                </h4>

                <a href="https://www.google.com/maps?ll=-12.0851775,-76.9793981" target="_blank" rel="noopener"
                  class="border-4 rounded-full w-16 p-4 flex items-center hover:border-red-400">
                  <img src="../../assets/icon-applemaps.svg" alt="Mapa">
                </a>
              </div>
              <a class="background-pink p-4 text-white rounded-lg absolute right-8 bottom-0 text-lg font-semibold"
                type="button" href="../../vistas/Sucursales/Almacenes/AlmacenesSuc2.php">Ver Almacenes</a>
            </div>
        </div>
        </article>
      </div>

    </div>
  </body>

</html>