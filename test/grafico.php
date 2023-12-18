<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gráfico superhero</title>
</head>
<body>
  
  <div style="width: 70%; margin: auto;">
    <!-- Canvas = lienzo = obra de arte -->
    <canvas id="lienzo"></canvas>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>

    //contexto = lienzo donde pintaremos/renderizaremos
    const contexto = document.querySelector("#lienzo")

    const equipos =[
      {pais:"A",puntos:15},
      {pais:"B",puntos:13},
      {pais:"C",puntos:12},
      {pais:"D",puntos:9}
    ]

    //Chart(referencia_canvas, configuracion_grafico)
    const grafico = new Chart(contexto, {
      type: 'bar',
      data: {
        labels: superhero.map(equipos=>superhero.),
        datasets: [{
          label: "2023",
          data: superhero.map(superhero=>superhero.puntos)
        }]
      },
      options:{
        scales:{
          y:{
            max:20,
            min: 0
          }
        }
      }
    })

  </script>
</body>
</html>