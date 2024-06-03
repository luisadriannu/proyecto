<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visualización de datos con ChartJS</title>
  <link rel="stylesheet" href="../CSS/estilo.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>

  </style>
</head>

<body class="bg-gray-100">

  <!-- ****** Header ****** -->
  <header class="fixed border header-menu z-10 header">
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
                <a href="javascript:Salir()">Salir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </header>
  <!-- Aquí se incluirá el header existente -->


  <div class="container mx-auto p-4">
    <br>
    <div class="text-center mb-8">
      <h1 class="text-3xl font-bold">Planilla Trabajadores</h1>
      <p class="text-lg mt-4">Visualización de estadísticas de almacenes alquilados por mes:</p>
      <div class="inline-block relative mt-2">
        <select name="" id="selectAno"
          class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
          <option value="2024">2024</option>
          <option value="2023">2023</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
              d="M10 3a1 1 0 00-.707.293l-7 7a1 1 0 001.414 1.414L10 5.414l6.293 6.293a1 1 0 001.414-1.414l-7-7A1 1 0 0010 3z" />
          </svg>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-2 gap-8">
      <section>
        <canvas id="modelsChart" class="bg-white rounded shadow p-4"></canvas>
      </section>
      <section>
        <canvas id="pieChart" class="bg-white rounded shadow p-4"></canvas>
      </section>
    </div>
    <div class="mt-8">
      <h2 class="text-2xl font-semibold mb-4">Clientes con Almacenes Alquilados que Faltan Pagar:</h2>
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
          <thead>
            <tr class="bg-gray-100 border-b">
              <th class="text-left py-2 px-4">ID_CLIENTE</th>
              <th class="text-left py-2 px-4">ID_USUARIO</th>
              <th class="text-left py-2 px-4">APE_CLIENTE</th>
              <th class="text-left py-2 px-4">DNI</th>
              <th class="text-left py-2 px-4">TELEFONO</th>
              <th class="text-left py-2 px-4">TIPO</th>
              <th class="text-left py-2 px-4">RUC</th>
            </tr>
          </thead>
          <tbody id="clientesTable" class="text-gray-700">
            <!-- Datos de la tabla se llenarán aquí -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
  var chart; // Variable para almacenar la instancia del gráfico
  var pieChart; // Variable para almacenar la instancia del gráfico circular

  function CargarDatosGraficoBar() {
    var selectedYear = document.getElementById('selectAno').value;
    $.ajax({
      url: '../../../controladores/Control_Grafico.php',
      type: 'POST',
      data: {
        anno: selectedYear
      },
    }).done(function(resp) {
      try {
        var data = JSON.parse(resp);
        var meses = [];
        var totalAlquilados = [];
        var nombresMeses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
          'Octubre', 'Noviembre', 'Diciembre'
        ];

        for (var i = 0; i < data.length; i++) {
          meses.push(nombresMeses[data[i].mes - 1]); // Convertir el número del mes al nombre del mes
          totalAlquilados.push(data[i].total_alquilados);
        }

        var ctx = document.getElementById('modelsChart');

        // Si ya existe un gráfico, destrúyelo antes de crear uno nuevo
        if (chart) {
          chart.destroy();
        }

        chart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: meses,
            datasets: [{
              label: 'Total de Almacenes Alquilados',
              data: totalAlquilados,
              borderWidth: 2,
              backgroundColor: '#eb0450'
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });

        // Gráfico de pie
        var pieCtx = document.getElementById('pieChart');

        // Si ya existe un gráfico de pie, destrúyelo antes de crear uno nuevo
        if (pieChart) {
          pieChart.destroy();
        }

        pieChart = new Chart(pieCtx, {
          type: 'pie',
          data: {
            labels: meses,
            datasets: [{
              data: totalAlquilados,
              backgroundColor: ['#eb0450', '#f547c3', '#7a0406', '#2e1424', '#D38A09']
            }]
          },
          options: {
            responsive: true
          }
        });
      } catch (e) {
        console.error("Error parsing JSON response:", e);
        console.log("Response received:", resp);
      }
    }).fail(function(jqXHR, textStatus, errorThrown) {
      console.error("AJAX request failed:", textStatus, errorThrown);
    });
  }

  function CargarClientes() {
    $.ajax({
      url: '../../../controladores/Control_Cliente.php',
      type: 'POST',
      data: {},
    }).done(function(resp) {
      try {
        var data = JSON.parse(resp);
        var tbody = document.getElementById('clientesTable');
        tbody.innerHTML = ""; // Limpiar la tabla antes de agregar nuevos datos

        for (var i = 0; i < data.length; i++) {
          var row = tbody.insertRow();
          row.insertCell(0).innerText = data[i].id_cliente;
          row.insertCell(1).innerText = data[i].id_usuario;
          row.insertCell(2).innerText = data[i].ape_cliente;
          row.insertCell(3).innerText = data[i].dni || 'N/A';
          row.insertCell(4).innerText = data[i].telefono;
          row.insertCell(5).innerText = data[i].tipo || 'N/A';
          row.insertCell(6).innerText = data[i].ruc || 'N/A';
        }
      } catch (e) {
        console.error("Error parsing JSON response:", e);
        console.log("Response received:", resp);
      }
    }).fail(function(jqXHR, textStatus, errorThrown) {
      console.error("AJAX request failed:", textStatus, errorThrown);
    });
  }

  // Llama a las funciones al cargar la página
  $(document).ready(function() {
    CargarDatosGraficoBar();
    CargarClientes();

    // Añade un listener al select para cambiar el gráfico cuando se selecciona un año diferente
    document.getElementById('selectAno').addEventListener('change', CargarDatosGraficoBar);
  });
  </script>
  <footer class="background-pink py-6">
    <p class="text-center text-white font-xl font-semibold">R® 2024 Almacen Agora, el espacio que necesitas.</p>
  </footer>
</body>

</html>