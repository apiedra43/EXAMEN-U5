<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cálculo del Tiempo de Amortización</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">StemPhp</a></h1>
      <nav>
        <ul>
          <li><a href="index.php" class="current">Inicio</a></li>
        </ul>
      </nav>
    </header>
    <section id="contenedor">
      <section class="problema">
        <h2>Problema:</h2>
        <p>Un colector solar plano, que se va a utilizar como medio de calefacción en Andalucía, mide 4 m² y vale 2600 €, incluida la instalación. Determinar el tiempo que se tardará en amortizar (pagar lo que ha costado), si K=0,8 cal/min·cm² y está funcionando una media de 6 horas al día, durante 150 días del año. Este colector sería una alternativa al radiador eléctrico. Un KWh vale 0,08 €.</p>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        <p>Q = K × t × S × r (en Kcal)</p>
        <p>Convertir a KWh (base 1 h)</p>
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        <ul>
          <li>Q: Energía generada</li>
          <li>K: Coeficiente de radiación</li>
          <li>t: Tiempo, en minutos</li>
          <li>S: Área, en cm²</li>
          <li>r: Rendimiento</li>
        </ul>
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <div id="resultadoA" class="resultado">
          <p id="resultadoTexto">Presiona el botón para mostrar la solución.</p>
        </div>
        <button id="btnCalcular">Solución</button>
      </section>
    </section>
    <footer class="pie">
      Creative Commons versión 4.0 SciSoft 2024
    </footer>
  </section>
  <script src="script.js"></script>
</body>
</html>
