document.getElementById('btnCalcular').addEventListener('click', function() {
    // Obtener los valores del formulario
    const k = parseFloat(document.getElementById('k').value);
    const area = parseFloat(document.getElementById('area').value);
    const horas = parseFloat(document.getElementById('horas').value);
    const dias = parseFloat(document.getElementById('dias').value);
    const costo = parseFloat(document.getElementById('costo').value);
    const precio = parseFloat(document.getElementById('precio').value);
  
    // Calcular la energía generada al año (kWh)
    const energiaAnual = k * area * horas * dias;
  
    // Calcular el ahorro anual (en euros)
    const ahorroAnual = energiaAnual * precio;
  
    // Calcular la amortización (tiempo en años)
    const amortizacion = costo / ahorroAnual;
  
    // Mostrar el resultado en el recuadro
    const resultadoTexto = `La amortización del colector solar es de ${amortizacion.toFixed(2)} años.`;
    document.getElementById('resultadoTexto').innerText = resultadoTexto;
  });
  