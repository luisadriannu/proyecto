<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="../../../js/A1.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <link href="../../../css/estilo.css" rel="stylesheet">
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

  <div class="container mx-auto pt-28">
    <div id="Almacen-A004" class="shadow-card my-8">
      <article class="flex items-center gap-8 ">
        <div class="w-full border-right">
          <img class="h-full rounded-img-card w-full" src="../../../assets/medida-almacen.jpeg" alt="Medida almacen 1">
        </div>
        <div class="w-full h-72 flex flex-col justify-between">
          <div>
            <h1 class="text-4xl font-semibold">ALMACEN A004</h1>
          </div>
          <div>
            <h5 class="my-4 text-xl text-zinc-500 mt-0">Precio</h5>
            <p class="text-3xl font-semibold">S/.284 <span class="text-lg font-normal">por mes</span></p>
          </div>
        </div>
        <div class="w-full flex justify-center">
          <div>
            <label class="text-lg" for="date">Fecha de inicio de reserva:</label>
            <br>
            <input id="date" type="date">
            <br>
            <a class="background-pink p-4 w-44 text-white rounded-lg right-8 bottom-0 text-lg font-semibold mt-8"
              type="button" href="../../../vistas/Registrar/RegistrarCliente.php" onclick="">ALQUILAR</a>
          </div>
        </div>

        <div class="flex flex-col w-full h-full gap-6 my-4">
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                fill="currentColor">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path
                  d="M3 5v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h2c.55 0 1-.45 1-1s-.45-1-1-1H5c-1.1 0-2 .9-2 2zm1 10c-.55 0-1 .45-1 1v3c0 1.1.9 2 2 2h3c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1zm15 3c0 .55-.45 1-1 1h-2c-.55 0-1 .45-1 1s.45 1 1 1h3c1.1 0 2-.9 2-2v-3c0-.55-.45-1-1-1s-1 .45-1 1v2zm0-15h-3c-.55 0-1 .45-1 1s.45 1 1 1h2c.55 0 1 .45 1 1v2c0 .55.45 1 1 1s1-.45 1-1V5c0-1.1-.9-2-2-2z">
                </path>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">SUPERFICIE DE BODEGA:</h4>
              <p class="text-lg font-semibold">4.39m²</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ALTURA MÁXIMA:</h4>
              <p class="text-lg font-semibold">240cm</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg style="transform: rotate(90deg);" xmlns="http://www.w3.org/2000/svg"
                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ANCHURA LIBRE DE PUERTA:</h4>
              <p class="text-lg font-semibold">90cm</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ALTURA LIBRE DE PUERTA:</h4>
              <p class="text-lg font-semibold">200cm</p>
            </div>
          </div>
        </div>
      </article>
    </div>
    <div id="Almacen-A006" class="shadow-card my-8">
      <article class="flex items-center gap-8 ">
        <div class="w-full border-right">
          <img class="h-full rounded-img-card w-full" src="../../../assets/medida-almacen-2.jpeg"
            alt="Medida almacen 1">
        </div>
        <div class="w-full h-72 flex flex-col justify-between">
          <div>
            <h1 class="text-4xl font-semibold">ALMACEN A006 </h1>
          </div>
          <div>
            <h5 class="my-4 text-xl text-zinc-500 mt-0">Precio</h5>
            <p class="text-3xl font-semibold">S/.421 <span class="text-lg font-normal">por mes</span></p>
          </div>
        </div>
        <div class="w-full flex justify-center">
          <div>
            <label class="text-lg" for="date">Fecha de inicio de reserva:</label>
            <br>
            <input id="date" type="date">
            <br>
            <a class="background-pink p-4 w-44 text-white rounded-lg right-8 bottom-0 text-lg font-semibold mt-8"
              type="button" href="../../../vistas/Registrar/RegistrarCliente.php" onclick="">ALQUILAR</a>
          </div>
        </div>

        <div class="flex flex-col w-full h-full gap-6 my-4">
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                fill="currentColor">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path
                  d="M3 5v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h2c.55 0 1-.45 1-1s-.45-1-1-1H5c-1.1 0-2 .9-2 2zm1 10c-.55 0-1 .45-1 1v3c0 1.1.9 2 2 2h3c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1zm15 3c0 .55-.45 1-1 1h-2c-.55 0-1 .45-1 1s.45 1 1 1h3c1.1 0 2-.9 2-2v-3c0-.55-.45-1-1-1s-1 .45-1 1v2zm0-15h-3c-.55 0-1 .45-1 1s.45 1 1 1h2c.55 0 1 .45 1 1v2c0 .55.45 1 1 1s1-.45 1-1V5c0-1.1-.9-2-2-2z">
                </path>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">SUPERFICIE DE BODEGA:</h4>
              <p class="text-lg font-semibold">5.81m²</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ALTURA MÁXIMA:</h4>
              <p class="text-lg font-semibold">240cm</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg style="transform: rotate(90deg);" xmlns="http://www.w3.org/2000/svg"
                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ANCHURA LIBRE DE PUERTA:</h4>
              <p class="text-lg font-semibold">90cm</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ALTURA LIBRE DE PUERTA:</h4>
              <p class="text-lg font-semibold">200cm</p>
            </div>
          </div>
        </div>
      </article>
    </div>
    <div id="Almacen-A008" class="shadow-card my-8">
      <article class="flex items-center gap-8 ">
        <div class="w-full border-right">
          <img class="h-full rounded-img-card w-full" src="../../../assets/medida-almacen-3.jpeg"
            alt="Medida almacen 1">
        </div>
        <div class="w-full h-72 flex flex-col justify-between">
          <div>
            <h1 class="text-4xl font-semibold">ALMACEN A008 </h1>
          </div>
          <div>
            <h5 class="my-4 text-xl text-zinc-500 mt-0">Precio</h5>
            <p class="text-3xl font-semibold">S/.615 <span class="text-lg font-normal">por mes</span></p>
          </div>
        </div>
        <div class="w-full flex justify-center">
          <div>
            <label class="text-lg" for="date">Fecha de inicio de reserva:</label>
            <br>
            <input id="date" type="date">
            <br>
            <a class="background-pink p-4 w-44 text-white rounded-lg right-8 bottom-0 text-lg font-semibold mt-8"
              type="button" href="../../../vistas/Registrar/RegistrarCliente.php" onclick="">ALQUILAR</a>
          </div>
        </div>

        <div class="flex flex-col w-full h-full gap-6 my-4">
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                fill="currentColor">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path
                  d="M3 5v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h2c.55 0 1-.45 1-1s-.45-1-1-1H5c-1.1 0-2 .9-2 2zm1 10c-.55 0-1 .45-1 1v3c0 1.1.9 2 2 2h3c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1zm15 3c0 .55-.45 1-1 1h-2c-.55 0-1 .45-1 1s.45 1 1 1h3c1.1 0 2-.9 2-2v-3c0-.55-.45-1-1-1s-1 .45-1 1v2zm0-15h-3c-.55 0-1 .45-1 1s.45 1 1 1h2c.55 0 1 .45 1 1v2c0 .55.45 1 1 1s1-.45 1-1V5c0-1.1-.9-2-2-2z">
                </path>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">SUPERFICIE DE BODEGA:</h4>
              <p class="text-lg font-semibold">8.49m²</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ALTURA MÁXIMA:</h4>
              <p class="text-lg font-semibold">240cm</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg style="transform: rotate(90deg);" xmlns="http://www.w3.org/2000/svg"
                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ANCHURA LIBRE DE PUERTA:</h4>
              <p class="text-lg font-semibold">90cm</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ALTURA LIBRE DE PUERTA:</h4>
              <p class="text-lg font-semibold">200cm</p>
            </div>
          </div>
        </div>
      </article>
    </div>
    <div id="Almacen-1029" class="shadow-card my-8">
      <article class="flex items-center gap-8 ">
        <div class="w-full border-right">
          <img class="h-full rounded-img-card w-full" src="../../../assets/medida-almacen-4.jpeg"
            alt="Medida almacen 1">
        </div>
        <div class="w-full h-72 flex flex-col justify-between">
          <div>
            <h1 class="text-4xl font-semibold">ALMACEN 1029 </h1>
          </div>
          <div>
            <h5 class="my-4 text-xl text-zinc-500 mt-0">Precio</h5>
            <p class="text-3xl font-semibold">S/.750<span class="text-lg font-normal">por mes</span></p>
          </div>
        </div>
        <div class="w-full flex justify-center">
          <div>
            <label class="text-lg" for="date">Fecha de inicio de reserva:</label>
            <br>
            <input id="date" type="date">
            <br>
            <a class="background-pink p-4 w-44 text-white rounded-lg right-8 bottom-0 text-lg font-semibold mt-8"
              type="button" href="../../../vistas/Registrar/RegistrarCliente.php" onclick="">ALQUILAR</a>
          </div>
        </div>

        <div class="flex flex-col w-full h-full gap-6 my-4">
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                fill="currentColor">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path
                  d="M3 5v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h2c.55 0 1-.45 1-1s-.45-1-1-1H5c-1.1 0-2 .9-2 2zm1 10c-.55 0-1 .45-1 1v3c0 1.1.9 2 2 2h3c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1zm15 3c0 .55-.45 1-1 1h-2c-.55 0-1 .45-1 1s.45 1 1 1h3c1.1 0 2-.9 2-2v-3c0-.55-.45-1-1-1s-1 .45-1 1v2zm0-15h-3c-.55 0-1 .45-1 1s.45 1 1 1h2c.55 0 1 .45 1 1v2c0 .55.45 1 1 1s1-.45 1-1V5c0-1.1-.9-2-2-2z">
                </path>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">SUPERFICIE DE BODEGA:</h4>
              <p class="text-lg font-semibold">10.35m²</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ALTURA MÁXIMA:</h4>
              <p class="text-lg font-semibold">240cm</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg style="transform: rotate(90deg);" xmlns="http://www.w3.org/2000/svg"
                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ANCHURA LIBRE DE PUERTA:</h4>
              <p class="text-lg font-semibold">90cm</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ALTURA LIBRE DE PUERTA:</h4>
              <p class="text-lg font-semibold">200cm</p>
            </div>
          </div>
        </div>
      </article>
    </div>
    <div id="Almacen-1030" class="shadow-card my-8">
      <article class="flex items-center gap-8 ">
        <div class="w-full border-right">
          <img class="h-full rounded-img-card w-full" src="../../../assets/medida-almacen-5.jpeg"
            alt="Medida almacen 1">
        </div>
        <div class="w-full h-72 flex flex-col justify-between">
          <div>
            <h1 class="text-4xl font-semibold">ALMACEN 1030 </h1>
          </div>
          <div>
            <h5 class="my-4 text-xl text-zinc-500 mt-0">Precio</h5>
            <p class="text-3xl font-semibold">S/.770<span class="text-lg font-normal">por mes</span></p>
          </div>
        </div>
        <div class="w-full flex justify-center">
          <div>
            <label class="text-lg" for="date">Fecha de inicio de reserva:</label>
            <br>
            <input id="date" type="date">
            <br>
            <a class="background-pink p-4 w-44 text-white rounded-lg right-8 bottom-0 text-lg font-semibold mt-8"
              type="button" href="../../../vistas/Registrar/RegistrarCliente.php" onclick="">ALQUILAR</a>
          </div>
        </div>

        <div class="flex flex-col w-full h-full gap-6 my-4">
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                fill="currentColor">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path
                  d="M3 5v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h2c.55 0 1-.45 1-1s-.45-1-1-1H5c-1.1 0-2 .9-2 2zm1 10c-.55 0-1 .45-1 1v3c0 1.1.9 2 2 2h3c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1zm15 3c0 .55-.45 1-1 1h-2c-.55 0-1 .45-1 1s.45 1 1 1h3c1.1 0 2-.9 2-2v-3c0-.55-.45-1-1-1s-1 .45-1 1v2zm0-15h-3c-.55 0-1 .45-1 1s.45 1 1 1h2c.55 0 1 .45 1 1v2c0 .55.45 1 1 1s1-.45 1-1V5c0-1.1-.9-2-2-2z">
                </path>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">SUPERFICIE DE BODEGA:</h4>
              <p class="text-lg font-semibold">10.63m²</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ALTURA MÁXIMA:</h4>
              <p class="text-lg font-semibold">240cm</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg style="transform: rotate(90deg);" xmlns="http://www.w3.org/2000/svg"
                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ANCHURA LIBRE DE PUERTA:</h4>
              <p class="text-lg font-semibold">90cm</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ALTURA LIBRE DE PUERTA:</h4>
              <p class="text-lg font-semibold">200cm</p>
            </div>
          </div>
        </div>
      </article>
    </div>
    <div id="Almacen-1033" class="shadow-card my-8">
      <article class="flex items-center gap-8 ">
        <div class="w-full border-right">
          <img class="h-full rounded-img-card w-full" src="../../../assets/medida-almacen-6.jpeg"
            alt="Medida almacen 1">
        </div>
        <div class="w-full h-72 flex flex-col justify-between">
          <div>
            <h1 class="text-4xl font-semibold">ALMACEN 1033 </h1>
          </div>
          <div>
            <h5 class="my-4 text-xl text-zinc-500 mt-0">Precio</h5>
            <p class="text-3xl font-semibold">S/.2.109<span class="text-lg font-normal">por mes</span></p>
          </div>
        </div>
        <div class="w-full flex justify-center">
          <div>
            <label class="text-lg" for="date">Fecha de inicio de reserva:</label>
            <br>
            <input id="date" type="date">
            <br>
            <a class="background-pink p-4 w-44 text-white rounded-lg right-8 bottom-0 text-lg font-semibold mt-8"
              type="button" href="../../../vistas/Registrar/RegistrarCliente.php" onclick="">ALQUILAR</a>
          </div>
        </div>

        <div class="flex flex-col w-full h-full gap-6 my-4">
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                fill="currentColor">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path
                  d="M3 5v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h2c.55 0 1-.45 1-1s-.45-1-1-1H5c-1.1 0-2 .9-2 2zm1 10c-.55 0-1 .45-1 1v3c0 1.1.9 2 2 2h3c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1zm15 3c0 .55-.45 1-1 1h-2c-.55 0-1 .45-1 1s.45 1 1 1h3c1.1 0 2-.9 2-2v-3c0-.55-.45-1-1-1s-1 .45-1 1v2zm0-15h-3c-.55 0-1 .45-1 1s.45 1 1 1h2c.55 0 1 .45 1 1v2c0 .55.45 1 1 1s1-.45 1-1V5c0-1.1-.9-2-2-2z">
                </path>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">SUPERFICIE DE BODEGA:</h4>
              <p class="text-lg font-semibold">29.11m²</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ALTURA MÁXIMA:</h4>
              <p class="text-lg font-semibold">240cm</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg style="transform: rotate(90deg);" xmlns="http://www.w3.org/2000/svg"
                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ANCHURA LIBRE DE PUERTA:</h4>
              <p class="text-lg font-semibold">90cm</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                viewBox="0 0 24 24" width="24px" fill="currentColor">
                <g>
                  <rect fill="none" height="24" width="24"></rect>
                  <rect fill="none" height="24" width="24"></rect>
                </g>
                <g>
                  <g></g>
                  <path
                    d="M13,6.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,6.14C8.54,6.45,8.76,6.99,9.21,6.99 H11v10.02H9.21c-0.45,0-0.67,0.54-0.35,0.85l2.79,2.78c0.2,0.19,0.51,0.19,0.71,0l2.79-2.78c0.32-0.31,0.09-0.85-0.35-0.85H13V6.99 z">
                  </path>
                </g>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold">ALTURA LIBRE DE PUERTA:</h4>
              <p class="text-lg font-semibold">200cm</p>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
</body>

</html>