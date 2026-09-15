<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title>JetSMART - Interfaz Limpia</title>
    <style>
        /* --- 1. RESET --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
        }

        html, body {
            width: 100%;
            height: 100%;
            background-color: #f8f8f8;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            overflow-x: hidden;
        }

        :root {
            --azul-jet: #1a3668;
            --azul-oscuro-jet: #1d3557;
            --rojo-jet: #b22a3a;
            --rojo-banner: #a32329;
            --turquesa-jet: #00abc8;
            --posicion-buscador: 10px; 
        }

        /* --- 2. HEADER --- */
        .main-header {
            width: 100%;
            height: 62px;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 12px;
            border-bottom: 2px solid var(--rojo-jet);
            position: relative;
            z-index: 1000;
        }

        .logo img { height: 24px; display: block; }
        .header-actions { display: flex; align-items: center; gap: 12px; }
        .login-btn { background-color: var(--azul-jet); color: #ffffff; border: none; padding: 8px 16px; border-radius: 25px; font-size: 14px; font-weight: 700; display: flex; align-items: center; gap: 8px; cursor: pointer; }
        .hamburger { display: flex; flex-direction: column; justify-content: space-between; width: 22px; height: 16px; cursor: pointer; }
        .hamburger span { width: 100%; height: 2.5px; background-color: var(--rojo-jet); border-radius: 2px; }
        .cart-box { position: relative; display: flex; align-items: center; }
        .cart-badge { position: absolute; top: -6px; right: -8px; background-color: var(--rojo-jet); color: white; font-size: 10px; font-weight: bold; width: 18px; height: 18px; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 1.5px solid #ffffff; }

        /* --- 3. BANNER --- */
        .alert-banner { background-color: var(--rojo-banner); color: #ffffff; width: 100%; padding: 5px 15px; display: flex; align-items: center; justify-content: space-between; gap: 10px; position: relative; z-index: 900; }
        .alert-banner p { font-size: 11.5px; line-height: 1.1; max-width: 85%; text-align: center; margin: 0 auto; }
        .arrow-circle-banner { width: 24px; height: 24px; border: 1.8px solid #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 12px; }

        /* --- 4. SECCIÓN HERO --- */
        .hero-section { width: 100%; position: relative; background-color: #ffffff; }
        .hero-wrapper { position: relative; width: 100%; height: 600px; overflow: hidden; border-bottom-left-radius: 40px; border-bottom-right-radius: 40px; }
        .bg-hero { width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1; }
        .floating-container { position: absolute; top: var(--posicion-buscador); left: 0; right: 0; padding: 0 15px; z-index: 800; }
        .promo-carousel { position: absolute; bottom: 25px; left: 0; right: 0; z-index: 500; display: flex; flex-direction: column; align-items: center; }
        .carousel-track { width: 92%; display: flex; overflow: hidden; }
        .carousel-slide { min-width: 100%; display: none; }
        .carousel-slide.active { display: block; }
        .carousel-slide img { width: 100%; height: auto; display: block; }
        .carousel-controls { width: 95%; display: flex; align-items: center; justify-content: space-between; margin-top: 12px; padding: 0 15px; }
        .nav-arrow { color: #ffffff; font-size: 22px; cursor: pointer; user-select: none; text-shadow: 0 2px 4px rgba(0,0,0,0.3); }
        .carousel-dots { display: flex; gap: 8px; }
        .dot { width: 8px; height: 8px; background-color: rgba(255, 255, 255, 0.4); border-radius: 50%; cursor: pointer; transition: all 0.3s ease; }
        .dot.active { background-color: #ffffff; width: 22px; border-radius: 10px; }

        /* --- 5. CONTENEDORES DE IMÁGENES --- */
        .info-container { width: 100%; padding: 15px 15px; display: flex; flex-direction: column; gap: 20px; }
        .info-box { width: 100%; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); }
        .info-box img { width: 100%; display: block; height: auto; }

        /* --- 6. BOTONES DE NAVEGACIÓN --- */
        .nav-buttons-container { width: 100%; padding: 0 15px 15px 15px; display: flex; flex-direction: column; gap: 12px; }
        .nav-button-item { background-color: #ffffff; width: 100%; height: 75px; border-radius: 15px; display: flex; align-items: center; justify-content: space-between; padding: 0 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); cursor: pointer; }
        .nav-button-content { display: flex; align-items: center; gap: 15px; }
        .nav-icon-circle { width: 45px; height: 45px; background-color: #f1f4f9; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
        .nav-button-text { color: var(--azul-jet); font-weight: 600; font-size: 16px; }
        .nav-arrow-right { color: var(--azul-jet); font-size: 18px; font-weight: bold; }

        /* --- 7. SECCIÓN DE SERVICIOS (CHECK-IN / MASCOTAS) --- */
        .services-card { background-color: #ffffff; margin: 0 15px 30px 15px; border-radius: 15px; padding: 30px 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); display: flex; flex-direction: column; align-items: center; }
        .services-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; text-align: center; margin-bottom: 25px; }
        .service-item { display: flex; flex-direction: column; align-items: center; }
        .service-icon-box { width: 55px; height: 55px; background-color: var(--turquesa-jet); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; }
        .service-title { color: var(--azul-jet); font-size: 14px; font-weight: 800; line-height: 1.2; margin-bottom: 10px; text-transform: uppercase; }
        .service-desc { font-size: 11px; color: #666; line-height: 1.4; margin-bottom: 12px; }
        .service-link { color: var(--turquesa-jet); font-size: 13px; font-weight: 700; text-decoration: underline; cursor: pointer; }
        .ver-mas-footer { display: flex; align-items: center; gap: 8px; color: var(--azul-jet); font-weight: 600; font-size: 16px; cursor: pointer; }

        /* --- 8. SECCIÓN SUSCRIPCIÓN --- */
        .subscription-section { background-color: var(--azul-oscuro-jet); width: 100%; padding: 40px 25px; color: white; text-align: center; }
        .sub-header { display: flex; align-items: center; justify-content: center; gap: 15px; margin-bottom: 30px; }
        .sub-icon { width: 50px; height: 50px; border: 1px solid rgba(255,255,255,0.4); border-radius: 50%; display: flex; align-items: center; justify-content: center; }
        .sub-text-box { text-align: left; }
        .sub-pre-title { font-size: 14px; font-weight: 400; }
        .sub-title { font-size: 22px; font-weight: 700; line-height: 1; }
        .input-group-sub { display: flex; align-items: center; background-color: transparent; border-bottom: 1px solid white; padding-bottom: 8px; margin-bottom: 25px; position: relative; }
        .input-sub { background: transparent; border: none; color: white; flex: 1; font-size: 16px; outline: none; }
        .input-sub::placeholder { color: rgba(255,255,255,0.7); }
        .btn-subscribe { background-color: var(--turquesa-jet); color: white; border: none; border-radius: 30px; padding: 12px 25px; font-weight: 700; font-size: 14px; display: flex; align-items: center; gap: 10px; cursor: pointer; position: absolute; right: 0; bottom: 5px; }
        .info-sub-footer { font-size: 14px; margin-top: 15px; color: white; }
        .privacy-link { display: block; margin-top: 8px; font-weight: 700; text-decoration: underline; cursor: pointer; }

        /* --- 9. FOOTER FINAL --- */
        .main-footer {
            background-color: #ffffff;
            padding: 40px 20px;
            text-align: center;
        }

        .footer-title {
            color: var(--azul-jet);
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .payment-methods {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-bottom: 35px;
        }

        .payment-methods img {
            height: 25px;
            width: auto;
            object-fit: contain;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background-color: var(--azul-jet);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footer-accordion {
            text-align: left;
            margin-bottom: 40px;
        }

        .accordion-item {
            border-bottom: 1px solid #eee;
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--azul-jet);
            font-weight: 700;
            font-size: 16px;
        }

        .plus-icon {
            background-color: var(--azul-jet);
            color: white;
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            font-size: 18px;
        }

        .footer-bottom {
            border-top: 1px solid #eee;
            padding-top: 25px;
        }

        .copyright {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .footer-logo img {
            height: 40px;
        }

        .modal-full { z-index: 9999 !important; }

        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(8, 24, 49, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            z-index: 9999;
        }

        .modal-overlay[hidden] {
            display: none;
        }

        .modal-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            max-width: 420px;
            width: 100%;
            padding: 24px;
            text-align: center;
        }

        .modal-card h3 {
            color: var(--azul-jet);
            margin-bottom: 12px;
            font-size: 22px;
        }

        .modal-card p {
            color: #4d5b73;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .modal-card button {
            background: var(--azul-jet);
            color: white;
            border: none;
            border-radius: 999px;
            padding: 10px 20px;
            font-weight: 700;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header class="main-header">
        <div class="logo"><img src="img2/logo.svg" alt="JetSMART"></div>
        <div class="header-actions">
            <button class="login-btn" id="login-btn">Iniciar Sesión <span class="login-icon"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3"/></svg></span></button>
            <div class="hamburger"><span></span><span></span><span></span></div>
            <div class="cart-box"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#1a3668" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg><span class="cart-badge">0</span></div>
        </div>
    </header>

    <div class="alert-banner">
        <p>Nuestro Contact Center presenta alto flujo de llamadas, por lo que podrías experimentar mayores tiempos de espera. También puedes obtener <u>ayuda</u></p>
        <div class="arrow-circle-banner"><span>❯</span></div>
    </div>

    <main class="hero-section">
        <div class="hero-wrapper">
            <img src="img2/fondo1.webp" alt="Cielo" class="bg-hero">
            <div class="floating-container"><div id="search-js-injection"></div></div>
            <div class="promo-carousel">
                <div class="carousel-track">
                    <div class="carousel-slide active"><img src="img2/1.webp" alt="Promo 1"></div>
                    <div class="carousel-slide"><img src="img2/2.webp" alt="Promo 2"></div>
                    <div class="carousel-slide"><img src="img2/3.webp" alt="Promo 3"></div>
                </div>
                <div class="carousel-controls">
                    <span class="nav-arrow" onclick="changeSlide(-1)">❮</span>
                    <div class="carousel-dots"><span class="dot active" onclick="currentSlide(0)"></span><span class="dot" onclick="currentSlide(1)"></span><span class="dot" onclick="currentSlide(2)"></span></div>
                    <span class="nav-arrow" onclick="changeSlide(1)">❯</span>
                </div>
            </div>
        </div>
    </main>

    <section class="info-container">
        <div class="info-box"><img src="img2/11.png" alt="Travel UP"></div>
        <div class="info-box"><img src="img2/22.png" alt="All You Can Fly"></div>
    </section>

    <section class="nav-buttons-container">
        <div class="nav-button-item"><div class="nav-button-content"><div class="nav-icon-circle"><svg width="24" height="24" viewBox="0 0 24 24" fill="var(--azul-jet)"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg></div><span class="nav-button-text">Grupos</span></div><span class="nav-arrow-right">❯</span></div>
        <div class="nav-button-item"><div class="nav-button-content"><div class="nav-icon-circle"><svg width="24" height="24" viewBox="0 0 24 24" fill="var(--azul-jet)"><path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/></svg></div><span class="nav-button-text">JetSMART 50</span></div><span class="nav-arrow-right">❯</span></div>
        <div class="nav-button-item"><div class="nav-button-content"><div class="nav-icon-circle"><svg width="24" height="24" viewBox="0 0 24 24" fill="var(--azul-jet)"><path d="M18.06 22.99h1.66c.84 0 1.53-.64 1.63-1.46L23 5.05h-5V1h-1.97v4.05h-4.97l.3 2.34c1.71.47 3.31 1.32 4.27 2.26 1.44 1.42 2.43 2.89 2.43 5.29v8.05zM1 21.99V21h15.03v.99c0 .55-.45 1-1 1H2c-.55 0-1-.45-1-1zm15.03-7c0-8-15.03-8-15.03 0h15.03zM1.02 17h14.99v2H1.02v-2z"/></svg></div><span class="nav-button-text">Entretención</span></div><span class="nav-arrow-right">❯</span></div>
        <div class="nav-button-item"><div class="nav-button-content"><div class="nav-icon-circle"><svg width="24" height="24" viewBox="0 0 24 24" fill="var(--azul-jet)"><path d="M12 2L4.5 20.29l.71.71L12 18l6.79 3 .71-.71z"/></svg></div><span class="nav-button-text">Quienes Somos</span></div><span class="nav-arrow-right">❯</span></div>
    </section>

    <section class="services-card">
        <div class="services-grid">
            <div class="service-item">
                <div class="service-icon-box"><svg width="28" height="28" viewBox="0 0 24 24" fill="white"><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg></div>
                <h3 class="service-title">Haz tu Check-in</h3>
                <p class="service-desc">Desde 72 horas antes de tu vuelo, entra a nuestra web y confirma tu viaje. Ahorra el costo adicional de hacerlo en el aeropuerto.</p>
                <span class="service-link">¿Qué es el Check-In?</span>
            </div>
            <div class="service-item">
                <div class="service-icon-box"><svg width="28" height="28" viewBox="0 0 24 24" fill="white"><path d="M4.5 11c1.38 0 2.5-1.12 2.5-2.5S5.88 6 4.5 6 2 7.12 2 8.5 3.12 11 4.5 11zm15 0c1.38 0 2.5-1.12 2.5-2.5S20.88 6 19.5 6 17 7.12 17 8.5s1.12 2.5 2.5 2.5zM12 7c1.38 0 2.5-1.12 2.5-2.5S13.38 2 12 2 9.5 3.12 9.5 4.5 10.62 7 12 7zm0 10c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5.5-1c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zm-11 0c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5z"/></svg></div>
                <h3 class="service-title">Cómo llevar tu mascota a bordo</h3>
                <p class="service-desc">¡No dejes a tu mascota en casa y llévala contigo a donde vayas!</p>
                <span class="service-link">Conoce los requisitos</span>
            </div>
        </div>
        <div class="ver-mas-footer">Ver más <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
    </section>

    <section class="subscription-section">
        <div class="sub-header">
            <div class="sub-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg></div>
            <div class="sub-text-box">
                <p class="sub-pre-title">¡Sé el primero en conocer</p>
                <h2 class="sub-title">nuestros descuentos!</h2>
            </div>
        </div>
        <div class="input-group-sub">
            <input type="email" class="input-sub" id="email-subscribe" placeholder="Correo electrónico">
            <button class="btn-subscribe" id="subscribe-btn">SUSCRÍBETE <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 16 12 12 16"></polyline><line x1="8" y1="12" x2="16" y2="12"></line></svg></button>
        </div>
        <p class="info-sub-footer">Ingresa tu mail y conoce primero nuestras ofertas. <span class="privacy-link">Política de Privacidad</span></p>
    </section>

    <div class="modal-overlay" id="action-modal" hidden>
        <div class="modal-card">
            <h3 id="modal-title">Información</h3>
            <p id="modal-message">Pronto podrás continuar con la experiencia.</p>
            <button id="modal-close" type="button">Cerrar</button>
        </div>
    </div>

    <!-- FOOTER FINAL -->
    <footer class="main-footer">
        <p class="footer-title">Medios de pago</p>
        <div class="payment-methods">
            <img src="img2/b1.svg" alt="Webpay">
            <img src="img2/b2.svg" alt="RedCompra">
            <img src="img2/b3.svg" alt="Visa"> <!-- Corregido aquí -->
            <img src="img2/b4.webp" alt="Mastercard">
            <img src="img2/b5.svg" alt="Magna">
            <img src="img2/b6.svg" alt="Diners Club">
            <img src="img2/b7.svg" alt="American Express">
            <img src="img2/b8.webp" alt="Mercado Pago">
        </div>

        <p class="footer-title">Síguenos en</p>
        <div class="social-links">
            <div class="social-icon"><svg width="20" height="20" fill="white" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></div>
            <div class="social-icon"><svg width="20" height="20" fill="white" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg></div>
            <div class="social-icon"><svg width="20" height="20" fill="white" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 4-8 4z"/></svg></div>
            <div class="social-icon"><svg width="20" height="20" fill="white" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></div>
            <div class="social-icon"><svg width="20" height="20" fill="white" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg></div>
        </div>

        <div class="footer-accordion">
            <div class="accordion-item">JetSMART <span class="plus-icon">+</span></div>
            <div class="accordion-item">¿Necesitas Ayuda? <span class="plus-icon">+</span></div>
            <div class="accordion-item">Transparencia <span class="plus-icon">+</span></div>
            <div class="accordion-item">Trabaja con nosotros <span class="plus-icon">+</span></div>
        </div>

        <div class="footer-bottom">
            <p class="copyright">© 2026 JetSMART Colombia</p>
            <div class="footer-logo"><img src="img2/logo.svg" alt="JetSMART"></div>
        </div>
    </footer>

    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll(".carousel-slide");
        const dots = document.querySelectorAll(".dot");
        const actionModal = document.getElementById("action-modal");
        const modalTitle = document.getElementById("modal-title");
        const modalMessage = document.getElementById("modal-message");
        const modalClose = document.getElementById("modal-close");

        function showSlides(n) {
            if (n >= slides.length) slideIndex = 0;
            if (n < 0) slideIndex = slides.length - 1;
            slides.forEach(s => s.classList.remove("active"));
            dots.forEach(d => d.classList.remove("active"));
            slides[slideIndex].classList.add("active");
            dots[slideIndex].classList.add("active");
        }

        function changeSlide(n) { showSlides(slideIndex += n); }
        function currentSlide(n) { showSlides(slideIndex = n); }

        function openActionModal(title, message) {
            modalTitle.textContent = title;
            modalMessage.textContent = message;
            actionModal.hidden = false;
        }

        function closeActionModal() {
            actionModal.hidden = true;
        }

        document.getElementById("login-btn")?.addEventListener("click", () => {
            openActionModal("Inicio de sesión", "Pronto podrás ingresar a tu cuenta desde esta interfaz.");
        });

        document.getElementById("subscribe-btn")?.addEventListener("click", () => {
            const email = document.getElementById("email-subscribe").value.trim();
            if (email) {
                openActionModal("Suscripción recibida", `Gracias por suscribirte. Te enviaremos novedades a ${email}.`);
            } else {
                openActionModal("Suscripción", "Ingresa tu correo electrónico para recibir nuestras ofertas.");
            }
        });

        modalClose?.addEventListener("click", closeActionModal);
        actionModal?.addEventListener("click", (event) => {
            if (event.target === actionModal) {
                closeActionModal();
            }
        });
        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape" && !actionModal.hidden) {
                closeActionModal();
            }
        });

        setInterval(() => changeSlide(1), 5000);
    </script>
    <script src="vuelos.js"></script>
</body>
</html>