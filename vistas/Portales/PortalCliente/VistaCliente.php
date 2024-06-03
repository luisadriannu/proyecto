<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="js/Funciones.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <title>Document</title>
</head>

<body id="ContenidoIndex">

  <!-- ****** Header ****** -->
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
  <div id="ContenidoPrincipalCliente">

  </div>

  <!-- ****** Main content ****** -->
  <section class="">
    <div id="ContenidoPrincipal"></div>
    <!-- Banner -->
    <article class="backdrop flex justify-start items-center">
      <div class="ml-8 banner bg-backdrop p-3 rounded-xl">
        <h2 class="font-bold font-size">Depósitos desde 50 hasta 500m <br /> que se adaptan a tu ciclo de negocio.</h2>
        <p class="pt-2 text-lg">Alquila desde 4 semanas en nuestras 4 sedes céntricas.</p>
      </div>
      <div class="w-96 bg-white p-8 rounded-xl absolute right-16 shadow-md content-form mt-20">
        <h2 class="font-bold text-lg">¿Necesitas asesoría para solucionar tu falta de espacio?</h2>
        <p class="pt-1 text-base">Completa este formulario y nos comunicaremos contigo.</p>
        <form class="pt-4" action="">
          <input required class="border-2 w-full border-black rounded-xl p-2 my-2" type="text" placeholder="Nombres(*)">
          <input required class="border-2 w-full border-black rounded-xl p-2 my-2" type="text"
            placeholder="Apellidos(*)">
          <input required class="border-2 w-full border-black rounded-xl p-2 my-2" type="email"
            placeholder="Correo electrónico(*)">
          <input required class="border-2 w-full border-black rounded-xl p-2 my-2" type="text" placeholder="Celular(*)">
          <select required class="border-2 w-full border-black rounded-xl p-2 my-2" name="horario" id="horario">
            <option value="" disabled selected class="placeholder">Horario deseado de contacto(*)</option>
            <option value="1">Comuníquese lo más pronto posible</option>
            <option value="2">Horario 8:00 a.m. a 1 p.m.</option>
            <option value="3">Horario 1:00 p.m. a 7 p.m.</option>
          </select>
          <input class="cursor-pointer" required id="terminos" type="checkbox">
          <label for="terminos">Autorizo el uso de mi datos según la <strong>Política de Privacidad</strong>.</label>
          <div class="flex justify-center">
            <input class="background-pink p-4 rounded-xl w-full text-white font-bold mt-4 cursor-pointer hover-btn"
              type="submit" value="Enviar">
          </div>
        </form>
      </div>
    </article>
    <article class="h-64 info-color text-white">
      <div class="px-14 pt-12 container max-w-screen-lg mx-auto">
        <p class="font-bold font-size">Almacén Agora: Almacenes en<br /> alquiler para tu negocio.</p>
        <p class="pt-2 text-lg">Somos la mejor opción en almacenamiento de mercancías, materiales y más.</p>
      </div>
    </article>
    <article class="backdrop1">
      <div class="px-14 container max-w-screen-lg mx-auto flex gap-8 items-center justify-center py-8">
        <div class="w-full">
          <h2 class="pb-4 font-bold font-size">¿Por qué Alquilar Almacenes<br /> en AlmacénAgora?</h2>
          <div class="pb-2 flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="#a40047" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-heart-check">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M19.5 12.572l-3 2.928m-5.5 3.5a8916.99 8916.99 0 0 0 -6.5 -6.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
              <path d="M15 19l2 2l4 -4" />
            </svg>
            <p>Máxima Seguridad 24 Horas</p>
          </div>
          <div class="pb-2 flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="#a40047" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-heart-check">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M19.5 12.572l-3 2.928m-5.5 3.5a8916.99 8916.99 0 0 0 -6.5 -6.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
              <path d="M15 19l2 2l4 -4" />
            </svg>
            <p>Almacenes 100% Flexibles a Medida</p>
          </div>
          <div class="pb-2 flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="#a40047" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-heart-check">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M19.5 12.572l-3 2.928m-5.5 3.5a8916.99 8916.99 0 0 0 -6.5 -6.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
              <path d="M15 19l2 2l4 -4" />
            </svg>
            <p>Rápido Acceso Carr. Panamericana Sur KM 29</p>
          </div>
          <div class="pb-2 flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="#a40047" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-heart-check">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M19.5 12.572l-3 2.928m-5.5 3.5a8916.99 8916.99 0 0 0 -6.5 -6.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
              <path d="M15 19l2 2l4 -4" />
            </svg>
            <p>Modernas Áreas de Carga y Descarga</p>
          </div>
          <div class="pb-2 flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="#a40047" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-heart-check">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M19.5 12.572l-3 2.928m-5.5 3.5a8916.99 8916.99 0 0 0 -6.5 -6.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
              <path d="M15 19l2 2l4 -4" />
            </svg>
            <p>Expertos en Almacenaje Desde Hace 24 Años</p>
          </div>
          <div class="pb-2 flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="#a40047" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-heart-check">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M19.5 12.572l-3 2.928m-5.5 3.5a8916.99 8916.99 0 0 0 -6.5 -6.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
              <path d="M15 19l2 2l4 -4" />
            </svg>
            <p>Infraestructura de Almacenaje más Moderna del Perú</p>
          </div>
        </div>
        <div class="w-full">
          <img src="/assets/ñ.jpg" alt="">
        </div>
      </div>
    </article>
    <article class="container mx-auto py-8">
      <h2 class="text-3xl font-bold color-pink pl-14">Bodegas cerca de ti</h2>
      <div class="flex justify-center">
        <div class="pt-8">
          <iframe class="rounded-lg"
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d124869.99128610194!2d-77.07500598646851!3d-12.030627939018988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1716855716744!5m2!1ses-419!2smx"
            width="1420" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </article>

    <article class="container mx-auto py-8 px-4">
      <h2 class="text-3xl font-bold color-pink pl-14">¿Tienes alguna duda?</h2>
      <div class="flex gap-4 w-full justify-around py-8">
        <a class="w-96" href="https://wa.me/51972157720">
          <div class="flex items-center justify-center color-whatsapp h-52 p-14 rounded-2xl border-hover-whatsapp">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="53" height="51" fill="none" viewBox="0 0 57 55">
                <path fill="#51C170"
                  d="M44.8 11.3a22.8 22.8 0 0 0-16.3-6.7 23 23 0 0 0-23 22.7c0 4 1 7.9 3 11.3L5.4 50.4l12.2-3.1C21 49 24.7 50 28.5 50a23 23 0 0 0 23-22.7c0-6-2.3-11.8-6.7-16ZM28.5 46.2c-3.4 0-6.8-1-9.7-2.7l-.7-.4-7.3 2 2-7-.5-.8c-2-3-3-6.5-3-10A19 19 0 0 1 28.6 8.4a19 19 0 0 1 19.1 19 19 19 0 0 1-19 18.8ZM39 32l-3.9-1.9c-.5-.2-.9-.3-1.3.3L32 32.7c-.3.4-.7.4-1.3.1-.5-.2-2.4-.9-4.6-2.8a17.4 17.4 0 0 1-3.2-4c-.3-.5 0-.8.3-1 .2-.3.5-.8.8-1l.6-1c.2-.4.1-.7 0-1l-1.8-4.2c-.5-1.1-1-1-1.3-1h-1.1c-.4 0-1 .1-1.6.7-.5.6-2 2-2 4.8 0 2.7 2.1 5.5 2.4 5.8.3.4 4 6.1 9.8 8.6l3.3 1.2a8 8 0 0 0 3.6.2c1.1-.2 3.4-1.4 3.9-2.7.5-1.3.5-2.4.3-2.7-.1-.3-.5-.4-1-.6Z">
                </path>
              </svg>
              <h3 class="text-2xl">Hablemos por</h3>
              <h4 class="text-2xl font-semibold color-text-whatsapp">Whatsapp</h4>
            </div>
          </div>
        </a>
        <a class="w-96" href="tel:+51972157720">
          <div
            class="flex items-center justify-center color-phone w-auto w-92 h-52 p-14 rounded-2xl border-hover-phone">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="53" height="51" fill="none" viewBox="0 0 48 47">
                <path fill="#1A6BFF"
                  d="M39.9 41.1c-4.3 0-8.4-1-12.5-2.8a38 38 0 0 1-18.3-18c-2-4-2.9-8.2-2.9-12.4 0-.6.2-1 .6-1.4a2 2 0 0 1 1.5-.6h8c.5 0 1 .1 1.3.4.4.3.6.7.6 1.1l1.3 6.9v1.2c0 .4-.3.8-.6 1l-4.7 4.8a36.2 36.2 0 0 0 12.1 12l4.7-4.6L32 28c.5-.1 1-.2 1.4 0l6.9 1.3c.4 0 .8.3 1.1.6.3.4.5.8.5 1.2v8c0 .6-.2 1-.6 1.4a2 2 0 0 1-1.5.6Z">
                </path>
              </svg>
              <h3 class="text-2xl">Llamanos por</h3>
              <h4 class="text-2xl font-semibold color-text-phone ">Teléfono</h4>
            </div>
          </div>
        </a>
        <a class="w-96" href="mailto:abimirodriguezz@gmail.com">
          <div class="flex items-center justify-center color-email w-92 p-14 h-52 rounded-2xl border-hover-email">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="53" height="51" viewBox="0 0 53 51" fill="none">
                <path
                  d="M5.22998 25.5C5.22998 17.4866 5.22998 13.4789 7.75456 10.9905C10.277 8.5 14.3396 8.5 22.4626 8.5H31.079C39.202 8.5 43.2646 8.5 45.787 10.9905C48.3116 13.4789 48.3116 17.4866 48.3116 25.5C48.3116 33.5134 48.3116 37.5211 45.787 40.0095C43.2646 42.5 39.202 42.5 31.079 42.5H22.4626C14.3396 42.5 10.277 42.5 7.75456 40.0095C5.22998 37.5211 5.22998 33.5134 5.22998 25.5Z"
                  stroke="#B377FF" stroke-width="3.5"></path>
                <path
                  d="M13.8462 17L18.4969 20.825C22.4539 24.0763 24.4313 25.7019 26.7707 25.7019C29.11 25.7019 31.0896 24.0762 35.0445 20.8229L39.6952 17"
                  stroke="#B377FF" stroke-width="3.5" stroke-linecap="round"></path>
              </svg>
              <h3 class="text-2xl">Envianos un</h3>
              <h4 class="text-2xl font-semibold color-text-email ">Email</h4>
            </div>
          </div>
        </a>
      </div>
    </article>
  </section>

  <!-- FOOTER -->
  <footer class="background-pink py-6">
    <p class="text-center text-white font-xl font-semibold">R® 2024 Almacen Agora, el espacio que necesitas.</p>
  </footer>
</body>
<!-- <body>
    <script>
        MostrarSucursales();
    </script>
    <header style="background-color: lightblue;">
        <div>
            <div>
                
            </div>
            <button type="button" onclick="MostrarSucursales()">Sucursales</button>
        </div>
    </header>
    <div id="ContenidoPrincipalCliente" >
        
    </div>
</body>
</html> -->