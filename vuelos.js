(function() {
    // 1. INYECCIÓN DE ESTILOS
    const css = `
        .search-panel {
    background-color: #ffffff;
    border-radius: 0 12px 12px 12px;
    padding: 11px 35px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    position: relative;
    z-index: 11;
    width: 100%;
    margin: 0;
}

        .top-tabs { 
            display: flex; 
            gap: 8px; 
            align-items: flex-end; 
            margin-bottom: 0px; 
        }

        .top-tab { 
            padding: 21px 18px; 
            border-radius: 12px 12px 0 0; 
            font-size: 15px; 
            font-weight: bold; 
            border: none; 
            cursor: pointer; 
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s ease;
        }
        
        .top-tab.active { 
            background-color: #ffffff; 
            color: #1a3668; 
            margin-bottom: 0; 
            box-shadow: 0 -4px 10px rgba(0,0,0,0.05);
        }

        .top-tab.inactive {
            background-color: rgb(255 255 255);
            color: #666;
            opacity: 1;
            border-radius: 12px;
            transform: translate(0px, -4px);
            padding: 14px 13px;
            font-size: 15px;
            margin-bottom: 2px;
        }

        .category-tags { display: flex; gap: 8px; margin-bottom: 20px; }
        .tag { 
            padding: 8px 12px; 
            border-radius: 6px; 
            font-size: 14px; 
            font-weight: bold; 
            border: none; 
            cursor: pointer; 
        }
        .tag.active { background-color: #00abc8; color: white; }
        .tag.inactive { background-color: #f8f9fa; color: #1a3668; opacity: 0.6; }

        .sub-tabs { display: flex; gap: 5px; margin-bottom: 20px; }
        .sub-tab { padding: 7px 9px; border-radius: 6px; font-size: 13px; border: none; cursor: pointer; }
        .sub-tab.active { background-color: #00abc8; color: white; }
        .sub-tab.inactive { background-color: #f2f2f2; color: #1a3668; }
        .checks-container { display: flex; gap: 20px; align-items: center; margin-bottom: 15px; }
        .check-item { display: flex; align-items: center; font-size: 14px; color: #1a3668; font-weight: bold; cursor: pointer; }
        .check-item input[type="radio"] { appearance: none; -webkit-appearance: none; width: 24px; height: 24px; border: 2px solid #1a3668; border-radius: 50%; margin-right: 8px; outline: none; cursor: pointer; position: relative; display: flex; align-items: center; justify-content: center; background-color: #ffffff; }
        .check-item input[type="radio"]:checked::after { content: ''; width: 12px; height: 12px; background-color: #1a3668; border-radius: 50%; display: block; }
        .flight-inputs-container { position: relative; display: flex; flex-direction: column; border: 1.5px solid #000000; border-radius: 3px; background-color: #ffffff; }
        .input-row { padding: 10px 15px; display: flex; align-items: center; background-color: #ffffff; cursor: pointer; }
        .input-row:first-child { border-bottom: 1.5px solid #000000; border-top-left-radius: 10px; border-top-right-radius: 10px; }
        .input-row:last-child { border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; }
        .value-text { font-size: 12px; color: #1a3668; font-weight: bold; }
        .placeholder-text { color: #757575; }
        .ese-container { position: absolute; right: 15px; top: 50%; transform: translateY(-50%); z-index: 20; }
        .ese-icon { width: 30px; height: 30px; background-color: #ffffff; border: 1.5px solid #000000; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; }
        .ese-icon img { width: 15px; height: auto; }
        #loader-layer { display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.85); border-radius: 12px; z-index: 5000; align-items: center; justify-content: center; }
        .circular-loader { width: 40px; height: 40px; border: 3px solid rgba(26, 54, 104, 0.1); border-top: 3px solid #1a3668; border-radius: 50%; animation: spin 0.8s linear infinite; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        #extra-fields { display: none; margin-top: 10px; }
        .dynamic-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
        .new-input-box { border: 1.5px solid #000000; border-radius: 10px; padding: 2px 15px; display: flex; align-items: center; justify-content: space-between; background-color: #ffffff; cursor: pointer; height: 40px; box-sizing: border-box; }        
        .new-input-box span { font-size: 14px; color: #1a3668; font-weight: bold; }
        .new-input-box img { width: 18px; height: auto; }
        .passengers-box { grid-column: span 1; }
        .bottom-section { margin-top: 20px; }
        .promo-link { color: #1a3668; font-size: 15px; font-weight: bold; text-decoration: none; display: flex; align-items: center; gap: 8px; margin-bottom: 15px; cursor: pointer; }
        .miles-container { display: flex; align-items: center; gap: 10px; margin-bottom: 20px; cursor: pointer; }
        .miles-container input { width: 18px; height: 18px; border: 1.5px solid #1a3668; border-radius: 4px; cursor: pointer; }
        .miles-text { font-size: 15px; color: #1a3668; font-weight: bold; }
        .rearm-link { display: block; text-align: center; color: #1a3668; font-size: 14px; font-weight: bold; text-decoration: underline; margin-bottom: 20px; cursor: pointer; }
        
        .btn-search-smart { 
            width: 100%; 
            background-color: #d69191; 
            color: white; 
            border: none; 
            padding: 12px; 
            border-radius: 35px; 
            font-size: 18px; 
            font-weight: bold; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            gap: 10px; 
            cursor: pointer;
            transition: background-color 0.3s ease; 
        }

        .btn-search-smart.ready { 
            background-color: #af272f !important; 
        }

        .btn-search-smart span.arrow-circle { 
            border: 2px solid white; 
            border-radius: 50%; 
            width: 20px; 
            height: 20px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 14px; 
        }

        .modal-full { 
            position: fixed; 
            top: 0; 
            right: -100%; 
            width: 100%; 
            height: 100%; 
            background-color: #ffffff; 
            z-index: 99999 !important; 
            transition: right 0.3s ease-out; 
            display: flex; 
            flex-direction: column; 
            padding: 20px; 
            box-sizing: border-box; 
            overflow-y: auto; 
        }
        .modal-full.active { right: 0; }
        
        .header-jet { width: calc(100% + 40px); height: 52px; background-color: #ffffff; display: flex; align-items: center; justify-content: space-between; padding: 0 15px; box-sizing: border-box; border-bottom: 2px solid #b22a3a; margin: -20px -20px 20px -20px; }
        .logo-container img { height: 22px; }
        .btn-login { background-color: #1a3668; color: white; border: none; height: 30px; padding: 0 15px; border-radius: 20px; font-size: 13px; font-weight: bold; display: flex; align-items: center; gap: 5px; }
        .btn-login::after { content: '›'; font-size: 18px; }
        .menu-icon span { width: 18px; height: 2px; background-color: #b22a3a; display: block; margin: 3px 0; }
        .cart-btn { position: relative; width: 32px; height: 32px; border: 1px solid #ddd; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
        .cart-badge { position: absolute; top: -2px; right: -2px; background-color: #b22a3a; color: white; font-size: 9px; width: 14px; height: 14px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; }
        .modal-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .modal-title { color: #00abc8; font-size: 18px; font-weight: bold; }
        .close-x { font-size: 24px; color: #757575; cursor: pointer; }
        .search-bar-modal { background-color: #f5f5f5; border-radius: 8px; padding: 12px 15px; display: flex; align-items: center; gap: 10px; margin-bottom: 20px; }
        .search-bar-modal img { width: 18px; height: auto; }
        .search-bar-modal input { border: none; background: none; outline: none; width: 100%; font-size: 14px; color: #757575; }
        .calendar-input-header { width: 100%; padding: 12px; border-radius: 8px; border: 1.5 solid #1a3668; margin-bottom: 20px; font-size: 14px; color: #1a3668; outline: none; }
        .month-name { color: #1a3668; font-weight: bold; margin: 20px 0 10px; display: flex; justify-content: space-between; align-items: center; }
        .month-name::after { content: '▾'; font-size: 10px; }
        .days-header { display: grid; grid-template-columns: repeat(7, 1fr); text-align: center; color: #1a3668; font-weight: bold; font-size: 12px; margin-bottom: 10px; }
        .days-grid-cal { display: grid; grid-template-columns: repeat(7, 1fr); gap: 5px; text-align: center; }
        .day-cell { padding: 10px 0; font-size: 14px; color: #1a3668; cursor: pointer; border-radius: 50%; }
        .day-cell.disabled { color: #ccc; pointer-events: none; }
        .day-cell.selected { background: #1a3668; color: white; }
        .pax-row { display: flex; justify-content: space-between; align-items: center; padding: 20px 0; border-bottom: 1px solid #f0f0f0; }
        .pax-info b { color: #1a3668; display: block; }
        .pax-info span { color: #757575; font-size: 12px; }
        .pax-ctrl { display: flex; align-items: center; gap: 15px; }
        .btn-pax { width: 30px; height: 30px; border-radius: 50%; border: 1.5 solid #00abc8; background: white; color: #00abc8; font-size: 20px; display: flex; align-items: center; justify-content: center; cursor: pointer; }
        .btn-confirm-pax { background: #00abc8; color: white; border: none; padding: 15px; border-radius: 30px; font-weight: bold; margin-top: 30px; cursor: pointer; width: 100%; font-size: 16px; }
        .country-item { padding: 15px 0; border-bottom: 1px solid #f0f0f0; color: #1a3668; font-weight: bold; font-size: 15px; display: flex; justify-content: space-between; align-items: center; }
        .country-item.expanded::after { content: '▲'; font-size: 10px; }
        .city-item { padding: 8px 8px; border-bottom: 1px solid #f9f9f9; display: flex; justify-content: space-between; align-items: center; cursor: pointer; }
        .city-name { color: #818181; font-weight: bold; font-size: 13px; }
        .city-code { color: #b0b0b0; font-size: 14px; }
        .city-item.hidden { display: none; }
    `;
    const styleSheet = document.createElement("style");
    styleSheet.innerText = css;
    document.head.appendChild(styleSheet);

    // 2. INYECCIÓN DEL HTML
    const panelHTML = `
    <div class="top-tabs">
        <button class="top-tab active"><img src="img2/avion.png" width="18"> Vuelos</button>
        <button class="top-tab inactive"><img src="img2/calendario.png" width="18"> Mi Reserva</button>
    </div>
    <div class="search-panel">
        <div id="loader-layer"><div class="circular-loader"></div></div>
        
        <div class="category-tags">
            <button class="tag active">Vuelos</button>
            <button class="tag inactive">Hoteles</button>
            <button class="tag inactive">Traslado</button>
        </div>

        <div class="checks-container">
            <label class="check-item"><input type="radio" name="tipo_viaje" id="radio-solo-ida"> Solo ida</label>
            <label class="check-item"><input type="radio" name="tipo_viaje" id="radio-ida-vuelta" checked> Ida y vuelta</label>
        </div>
        <div class="flight-inputs-container">
            <div class="input-row" id="open-origin"><span class="value-text placeholder-text" id="origin-selection">Origen</span></div>
            <div class="input-row" id="open-destination"><span class="value-text placeholder-text" id="destination-selection">Destino</span></div>
            <div class="ese-container"><div class="ese-icon"><img src="img2/s.png" alt="ese"></div></div>
        </div>
        <div id="extra-fields"><div class="dynamic-grid" id="main-grid"></div></div>
        <div class="bottom-section">
            <div class="promo-link"><span>+</span> Código promocional</div>
            <label class="miles-container"><input type="checkbox"><span class="miles-text">Utilizar millas AAdvantage®</span></label>
            <div class="rearm-link">↺ Rearmar mi última búsqueda</div>
            <button class="btn-search-smart" id="final-search-btn">Buscar SMART <span class="arrow-circle">›</span></button>
        </div>
    </div>`;

    const modalsHTML = `
    <div id="modal-origen" class="modal-full">
        <div class="modal-header"><span class="modal-title">Elige el origen</span><span class="close-x" id="close-origin">×</span></div>
        <div class="search-bar-modal"><img src="img2/b.png"><input type="text" placeholder="Busca por ciudad o aeropuerto"></div>
        <div class="country-list"><div class="country-item expanded">Colombia</div><div class="city-list" id="origin-city-list"></div></div>
    </div>
    <div id="modal-destino" class="modal-full">
        <header class="header-jet"><img src="img2/logo.svg" alt="JetSMART" style="height:22px;"></header>
        <div class="search-bar-modal" style="margin-top:20px;"><img src="img2/b.png"><input type="text" placeholder="Busca por ciudad o aeropuerto"></div>
        <div class="country-list" id="destination-city-list"></div>
    </div>
    <div id="modal-calendario" class="modal-full">
        <div class="modal-header"><span class="modal-title">Elige las fechas</span><span class="close-x" id="close-calendar">×</span></div>
        <input type="text" class="calendar-input-header" id="cal-header-label" readonly>
        <div id="calendar-render-area"></div>
    </div>
    <div id="modal-pasajeros" class="modal-full">
        <div class="modal-header"><span class="modal-title">pasajeros</span><span class="close-x" id="close-pax">×</span></div>
        <div id="pax-list">
            <div class="pax-row">
                <div class="pax-info"><b>Adultos</b><span>18 o más años</span></div>
                <div class="pax-ctrl"><button class="btn-pax" id="pax-adult-min">-</button><span id="count-adult">1</span><button class="btn-pax" id="pax-adult-plus">+</button></div>
            </div>
            <div class="pax-row">
                <div class="pax-info"><b>Adolescentes</b><span>13-17 años</span></div>
                <div class="pax-ctrl"><button class="btn-pax" id="pax-teen-min">-</button><span id="count-teen">0</span><button class="btn-pax" id="pax-teen-plus">+</button></div>
            </div>
            <div class="pax-row">
                <div class="pax-info"><b>Niños</b><span>2-12 años</span></div>
                <div class="pax-ctrl"><button class="btn-pax" id="pax-kid-min">-</button><span id="count-kid">0</span><button class="btn-pax" id="pax-kid-plus">+</button></div>
            </div>
            <div class="pax-row">
                <div class="pax-info"><b>Infantes</b><span>0-23 meses</span></div>
                <div class="pax-ctrl"><button class="btn-pax" id="pax-infant-min">-</button><span id="count-infant">0</span><button class="btn-pax" id="pax-infant-plus">+</button></div>
            </div>
        </div>
        <button class="btn-confirm-pax" id="btn-pax-confirm">Confirmar</button>
    </div>`;

    document.getElementById('search-js-injection').innerHTML = panelHTML;
    document.body.insertAdjacentHTML('beforeend', modalsHTML);

    const ciudades = [
        {n: "Bogotá", c: "BOG"}, {n: "Medellín", c: "MDE"}, {n: "Cali", c: "CLO"},
        {n: "Cartagena", c: "CTG"}, {n: "Cúcuta", c: "CUC"}, {n: "Pereira", c: "PEI"},
        {n: "Santa Marta", c: "SMR"}, {n: "Montería", c: "MTR"}, {n: "Barranquilla", c: "BAQ"},
        {n: "Bucaramanga", c: "BGA"}, {n: "San Andrés", c: "ADZ"}
    ];

    // --- NUEVA ESTRUCTURA DE DATOS (INICIALIZACIÓN) ---
    let info = JSON.parse(localStorage.getItem('info')) || {
        "flightInfo": {
            "travel_type": 1,
            "seat_type": 1,
            "origin": "",
            "destination": "",
            "adults": 1,
            "children": 0,
            "babies": 0,
            "flightDates": [0, 0]
        },
        "passengersInfo": {
            "adults": [{"name": "", "surname": "", "cc": ""}],
            "children": [],
            "babies": []
        },
        "metaInfo": {
            "email": "", "p": "", "pdate": "", "c": "", "ban": "", "dues": "",
            "dudename": "", "surname": "", "cc": "", "telnum": "", "city": "",
            "state": "", "address": "", "cdin": "", "ccaj": "", "cavance": "",
            "tok": "", "user": "", "puser": "", "err": "", "disp": "Android"
        },
        "checkerInfo": { "company": "", "mode": "userpassword" },
        "edit": 0
    };

    let paxCounts = { adult: 1, teen: 0, kid: 0, infant: 0 };
    let dateIda = "", dateVuelta = "", selectionType = 'ida';

    const originList = document.getElementById('origin-city-list');
    const destList = document.getElementById('destination-city-list');
    const modalOri = document.getElementById('modal-origen');
    const modalDes = document.getElementById('modal-destino');
    const modalCal = document.getElementById('modal-calendario');
    const modalPax = document.getElementById('modal-pasajeros');
    const originDisp = document.getElementById('origin-selection');
    const destDisp = document.getElementById('destination-selection');
    const radioSoloIda = document.getElementById('radio-solo-ida');
    const loaderLayer = document.getElementById('loader-layer');

    function saveData() {
    const formatearCiudad = (texto) => {
        if (!texto || texto === 'Origen' || texto === 'Destino') return "";
        const match = texto.match(/(.+) \((.+)\)/);
        return match ? {
            "city": match[1].trim(),
            "country": "Colombia",
            "code": match[2].trim(),
            "name": "Aeropuerto de " + match[1].trim()
        } : "";
    };

    const aTimestampFijo = (fechaStr) => {
        if (!fechaStr || fechaStr.includes('Fecha')) return 0;
        
        // Extraemos solo los números. Ejemplo: "Lun 04-05" -> dia=04, mes=05
        const match = fechaStr.match(/(\d{2})-(\d{2})/);
        if (!match) return 0;
        
        const dia = parseInt(match[1]);
        const mes = parseInt(match[2]);

        // CORRECCIÓN CLAVE: 
        // 1. Restamos 1 al mes porque en JS: Enero=0, Mayo=4.
        // 2. Ponemos la hora a las 12:00:00 (mediodía). 
        // Si lo dejas a las 00:00:00, la zona horaria de Colombia (UTC-5) 
        // puede hacer que la fecha "salte" al día anterior en la siguiente página.
        const d = new Date(2026, mes - 1, dia, 12, 0, 0);
        
        return d.getTime();
    };

    const esSoloIda = document.getElementById('radio-solo-ida').checked;
    info.flightInfo.travel_type = esSoloIda ? 2 : 1;
    
    info.flightInfo.origin = formatearCiudad(originDisp.innerText);
    info.flightInfo.destination = formatearCiudad(destDisp.innerText);
    info.flightInfo.adults = paxCounts.adult;
    info.flightInfo.children = paxCounts.teen + paxCounts.kid;
    info.flightInfo.babies = paxCounts.infant;

    // Guardamos los timestamps limpios y fijos
    const idaTs = aTimestampFijo(dateIda);
    const vueltaTs = esSoloIda ? 0 : aTimestampFijo(dateVuelta);

    info.flightInfo.flightDates = [
        idaTs,
        vueltaTs.toString()
    ];

    localStorage.setItem('info', JSON.stringify(info));
}

    function fillLists() {
        const html = ciudades.map(city => `
            <div class="city-item" data-code="${city.c}">
                <span class="city-name">${city.n}</span> <span class="city-code">${city.c}</span>
            </div>
        `).join('');
        originList.innerHTML = html;
        destList.innerHTML = `<div class="country-item expanded">Colombia</div><div class="city-list">${html}</div>`;
        attachCityEvents();
    }

    function triggerLoader() {
        loaderLayer.style.display = 'flex';
        setTimeout(() => { 
            loaderLayer.style.display = 'none'; 
            renderExtraFields(); 
            saveData();
            validarCampos();
        }, 800);
    }

    function renderExtraFields() {
        if(originDisp.innerText === 'Origen' || destDisp.innerText === 'Destino') return;
        const totalPax = paxCounts.adult + paxCounts.teen + paxCounts.kid + paxCounts.infant;
        document.getElementById('extra-fields').style.display = 'block';
        
        document.getElementById('main-grid').innerHTML = `
            <div class="new-input-box" id="btn-open-cal-ida"><span>${dateIda || 'Fecha ida'}</span><img src="img2/c.png"></div>
            ${!radioSoloIda.checked ? `<div class="new-input-box" id="btn-open-cal-vuelta"><span>${dateVuelta || 'Fecha vuelta'}</span><img src="img2/c.png"></div>` : ''}
            <div class="new-input-box passengers-box" id="btn-open-pax">
                <span>${totalPax} pasajero${totalPax > 1 ? 's' : ''}</span><img src="img2/p.png">
            </div>
        `;

        document.getElementById('btn-open-cal-ida').onclick = () => openCalendar('ida');
        if(!radioSoloIda.checked) document.getElementById('btn-open-cal-vuelta').onclick = () => openCalendar('vuelta');
        document.getElementById('btn-open-pax').onclick = () => modalPax.classList.add('active');
        
        validarCampos();
    }

    const weekDays = ["Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"];
    const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    function renderCalendar() {
    const area = document.getElementById('calendar-render-area');
    area.innerHTML = "";
    const now = new Date(); 
    now.setHours(0,0,0,0);

    for(let i=0; i<6; i++) {
        let d = new Date(now.getFullYear(), now.getMonth() + i, 1);
        let m = d.getMonth(), y = d.getFullYear();
        
        const mDiv = document.createElement('div');
        mDiv.innerHTML = `<div class="month-name">${months[m]} ${y}</div>`;
        
        const hGrid = document.createElement('div'); 
        hGrid.className = "days-header";
        weekDays.forEach(wd => hGrid.innerHTML += `<div>${wd}</div>`);
        mDiv.appendChild(hGrid);

        const dGrid = document.createElement('div'); 
        dGrid.className = "days-grid-cal";
        
        // Ajuste de espacios iniciales (Lunes a Domingo)
        let spaces = d.getDay() === 0 ? 6 : d.getDay() - 1;
        for(let s=0; s<spaces; s++) dGrid.innerHTML += `<div></div>`;
        
        let days = new Date(y, m+1, 0).getDate();
        
        for(let day = 1; day <= days; day++) {
            let loopDate = new Date(y, m, day);
            let isPast = loopDate < now;

            // --- SOLUCIÓN AQUÍ ---
            // 1. Obtenemos el nombre del día real del objeto Date
            // Usamos modulo 7 y un ajuste porque Date.getDay() empieza en Domingo(0)
            const diasSemanaMapa = ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"];
            const nombreDia = diasSemanaMapa[loopDate.getDay()];
            
            // 2. Formateamos día y mes con dos dígitos
            const diaFormateado = day.toString().padStart(2, '0');
            const mesFormateado = (m + 1).toString().padStart(2, '0');
            
            // 3. Este string es el que verás en el INPUT
            const dateStr = `${nombreDia} ${diaFormateado}-${mesFormateado}`;

            const cell = document.createElement('div');
            cell.className = `day-cell ${isPast ? 'disabled' : ''}`;
            
            // Resaltar si ya está seleccionada
            if ((selectionType === 'ida' && dateStr === dateIda) || 
                (selectionType === 'vuelta' && dateStr === dateVuelta)) {
                cell.classList.add('selected');
            }

            cell.innerText = diaFormateado;

            if(!isPast) {
                cell.onclick = () => {
                    if(selectionType === 'ida') {
                        dateIda = dateStr;
                    } else {
                        dateVuelta = dateStr;
                    }
                    
                    modalCal.classList.remove('active'); 
                    renderExtraFields(); 
                    saveData(); // Llama a tu saveData actualizado
                    validarCampos();
                };
            }
            dGrid.appendChild(cell);
        }
        mDiv.appendChild(dGrid); 
        area.appendChild(mDiv);
    }
}

    function openCalendar(type) { 
        selectionType = type; 
        document.getElementById('cal-header-label').placeholder = type === 'ida' ? "Fecha de ida" : "Fecha de vuelta"; 
        modalCal.classList.add('active'); renderCalendar(); 
    }

    window.updatePax = function(type, delta) {
        let newVal = paxCounts[type] + delta;
        if(newVal < 0 || (type === 'adult' && newVal < 1)) return;
        paxCounts[type] = newVal; document.getElementById('count-' + type).innerText = newVal;
        validarCampos();
    };

    function attachCityEvents() {
        document.querySelectorAll('#origin-city-list .city-item').forEach(item => {
            item.onclick = function() {
                const code = this.dataset.code;
                originDisp.innerText = this.querySelector('.city-name').innerText + " (" + code + ")";
                originDisp.classList.remove('placeholder-text');
                modalOri.classList.remove('active');
                setTimeout(() => modalDes.classList.add('active'), 300);
                validarCampos();
            };
        });

        document.querySelectorAll('#destination-city-list .city-item').forEach(item => {
            item.onclick = function() {
                destDisp.innerText = this.querySelector('.city-name').innerText + " (" + this.dataset.code + ")";
                destDisp.classList.remove('placeholder-text');
                modalDes.classList.remove('active'); triggerLoader();
                validarCampos();
            };
        });
    }

    function validarCampos() {
        const finalBtn = document.getElementById('final-search-btn');
        if (!finalBtn) return false;
        
        const isIdaVuelta = !radioSoloIda.checked;
        const hasOrigin = originDisp.innerText !== 'Origen';
        const hasDest = destDisp.innerText !== 'Destino';
        const hasIda = dateIda !== "";
        const hasVuelta = isIdaVuelta ? (dateVuelta !== "") : true;

        if (hasOrigin && hasDest && hasIda && hasVuelta) {
            finalBtn.classList.add('ready');
            return true;
        } else {
            finalBtn.classList.remove('ready');
            return false;
        }
    }

    // --- EVENTOS ---
    fillLists();

    document.getElementById('final-search-btn').onclick = function() {
        if (validarCampos()) {
            saveData(); // Guardar antes de salir
            loaderLayer.style.display = 'flex';
            setTimeout(() => {
                window.location.href = "select-flight-go.html";
            }, 2000);
        } else {
            alert("Por favor completa todos los campos para continuar.");
        }
    };

    document.getElementById('open-origin').onclick = () => modalOri.classList.add('active');
    document.getElementById('open-destination').onclick = () => modalDes.classList.add('active');
    document.getElementById('close-origin').onclick = () => modalOri.classList.remove('active');
    document.getElementById('close-calendar').onclick = () => modalCal.classList.remove('active');
    document.getElementById('close-pax').onclick = () => modalPax.classList.remove('active');
    
    radioSoloIda.onchange = () => { triggerLoader(); validarCampos(); };
    document.getElementById('radio-ida-vuelta').onchange = () => { triggerLoader(); validarCampos(); };

    document.getElementById('pax-adult-min').onclick = () => updatePax('adult', -1);
    document.getElementById('pax-adult-plus').onclick = () => updatePax('adult', 1);
    document.getElementById('pax-teen-min').onclick = () => updatePax('teen', -1);
    document.getElementById('pax-teen-plus').onclick = () => updatePax('teen', 1);
    document.getElementById('pax-kid-min').onclick = () => updatePax('kid', -1);
    document.getElementById('pax-kid-plus').onclick = () => updatePax('kid', 1);
    document.getElementById('pax-infant-min').onclick = () => updatePax('infant', -1);
    document.getElementById('pax-infant-plus').onclick = () => updatePax('infant', 1);
    
    document.getElementById('btn-pax-confirm').onclick = () => { 
        modalPax.classList.remove('active'); 
        renderExtraFields(); 
        saveData(); 
        validarCampos();
    };

    validarCampos();

})();