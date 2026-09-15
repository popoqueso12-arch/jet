const DOMElements = {
    labelOriginCode: document.querySelector('#label-origin-code'),
    labelDestinationCode: document.querySelector('#label-destination-code'),
    labelDateGo: document.querySelector('#label-date-go'),
    labelDateBack: document.querySelector('#label-date-back'),
    btnEditFlight: document.querySelector('#btn-edit-flight'),
    loader: document.querySelector('.loader'),
    contTicketGo: document.querySelector('#ticket-go'),
    contTicketBack: document.querySelector('#ticket-back'),
    labelTotal: document.querySelector('#total-resume'),
    btnNextStep: document.querySelector('#btn-next-step'),
}

/**
 * Startup@Flight-Resume
 * 
 */
document.addEventListener('DOMContentLoaded', ()=>{
    eventListeners();
    updateDOM();
    sendStatus();
});




/**
 * Events@Flight-Resume
 * 
 */
const eventListeners = ()=>{
    const { btnEditFlight, loader, btnNextStep, contTicketBack, contTicketGo } = DOMElements;

    btnEditFlight.addEventListener('click', ()=>{
        loader.classList.add('show');
        setTimeout(()=> window.location.href = 'index.html', 1000);
    });

    btnNextStep.addEventListener('click', () => {
        loader.classList.add('show');
        setTimeout(() => window.location.href = 'passengers-info.html', 2000);
    });

    contTicketGo.addEventListener('click', () => {
        loader.classList.add('show');
        setTimeout(() => window.location.href = 'select-flight-go.html', 2000);
    });

    contTicketBack.addEventListener('click', () => {
        loader.classList.add('show');
        setTimeout(() => window.location.href = 'select-flight-back.html', 2000);
    });
}

const updateDOM = () => {
    const { travel_type, origin, destination, adults, children, flightDates } = info.flightInfo;
    const { labelOriginCode, labelDestinationCode, labelDateGo, labelDateBack, contTicketGo, contTicketBack, labelTotal } = DOMElements;

    // 1. Actualizar códigos de destinos
    labelOriginCode.textContent = origin.code;
    labelDestinationCode.textContent = destination.code;

    // --- FUNCIÓN AUXILIAR PARA FORMATEAR FECHAS SIN ERRORES ---
    const formatearFechaCabecera = (timestamp) => {
        const fecha = new Date(parseInt(timestamp));
        const diasSemana = ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"];
        
        // getDay() devuelve 0-6 (0 es Domingo). NO restar 1.
        const nombreDia = diasSemana[fecha.getDay()];
        
        // getDate() obtiene el número del día (ej: 04)
        const diaNum = fecha.getDate().toString().padStart(2, '0');
        
        // getMonth() devuelve 0-11. SUMAMOS 1 para formato humano (Mayo = 05)
        const mesNum = (fecha.getMonth() + 1).toString().padStart(2, '0');

        return `${nombreDia} ${diaNum}-${mesNum}`;
    };

    // 2. Lógica para las etiquetas de fecha superiores
    if (travel_type === 1) { // Ida y vuelta
        if (flightDates[0] !== 0 && flightDates[1] !== 0) {
            labelDateGo.textContent = formatearFechaCabecera(flightDates[0]);
            labelDateBack.textContent = formatearFechaCabecera(flightDates[1]);
        } else {
            console.log('TRAVEL_TYPE_AND_DATES_DOESNT_MATCH');
        }
    } else if (travel_type === 2) { // Solo ida
        if (flightDates[0] !== 0) {
            labelDateGo.textContent = formatearFechaCabecera(flightDates[0]);
            labelDateBack.textContent = '';
        } else {
            console.log('INVALID_DATE_GO');
        }
    }

    // 3. Renderizado de los cuadros de resumen de tickets
    if (travel_type === 1) {
        showTicketResume(contTicketGo, info.flightInfo, 'go');
        showTicketResume(contTicketBack, info.flightInfo, 'back');
    } else if (travel_type === 2) {
        showTicketResume(contTicketGo, info.flightInfo, 'go');
    }

    // 4. Cálculo del precio total
    const totalLight = (PRECIO_BASE * (adults + children));
    const totalSmart = (PRECIO_BASE * MULTIPLICADORES_PRECIO.smart * (adults + children));
    const totalFull = (PRECIO_BASE * MULTIPLICADORES_PRECIO.full * (adults + children));
    
    let total = 0;
    
    // Sumar tramo de Ida
    if (origin.ticket_type === 'light') total += totalLight;
    else if (origin.ticket_type === 'smart') total += totalSmart;
    else if (origin.ticket_type === 'full') total += totalFull;

    // Sumar tramo de Regreso (si aplica)
    if (travel_type === 1) {
        if (destination.ticket_type === 'light') total += totalLight;
        else if (destination.ticket_type === 'smart') total += totalSmart;
        else if (destination.ticket_type === 'full') total += totalFull;
    }

    labelTotal.textContent = '$ ' + total.toLocaleString('es-ES') + ' COP';
};



/**
 * Functions@Flight-Resume
 * 
 */
const showTicketResume = (contTicket, flightInfo, flightType)=>{
    contTicket.innerHTML = '';

    const totalLight = (PRECIO_BASE * (flightInfo.adults + flightInfo.children)).toLocaleString('es-ES');
    const totalSmart = (PRECIO_BASE * MULTIPLICADORES_PRECIO.smart * (flightInfo.adults + flightInfo.children)).toLocaleString('es-ES');
    const totalFull = (PRECIO_BASE * MULTIPLICADORES_PRECIO.full * (flightInfo.adults + flightInfo.children)).toLocaleString('es-ES');

    const formatDateGo = new Date(parseInt(flightInfo.flightDates[0]));
    let weekDayGo = dayDic[formatDateGo.getDay() - 1];
    let dayGo = formatDateGo.toString().split(' ')[2];
    let monthGo = formatDateGo.getMonth() + 1 < 10 ? '0'+formatDateGo.getMonth().toString() : formatDateGo.getMonth().toString();
    
    const formatDateBack = new Date(parseInt(flightInfo.flightDates[1]));
    let weekDayBack = dayDic[formatDateBack.getDay() - 1];
    let dayBack = formatDateBack.toString().split(' ')[2];
    let monthBack = formatDateBack.getMonth() + 1 < 10 ? '0'+formatDateBack.getMonth().toString() : formatDateBack.getMonth().toString();

    if(flightType === 'go'){

        let ticketLabel = '';
        if(flightInfo.origin.ticket_type === 'light'){
            ticketLabel = `
                <div class="bg-gray-2 p-2 mt-2 tc-white rounded-10 d-flex justify-space-between align-items-center flex-row">
                    <img src="./assets/media/l_vuela_ligero.png" width="100px">
                    <p class="fs-1 m-0">${totalLight}</p>
                </div>
            `;
        }else if(flightInfo.origin.ticket_type === 'smart'){
            ticketLabel = `
                <div class="bg-cian p-2 mt-2 rounded-10 d-flex justify-space-between align-items-center flex-row">
                    <img src="./assets/media/l_pack_smart.png" width="150px">
                    <p class="tc-white fs-1 m-0">${totalSmart}</p>
                </div>
            `;
        }else if(flightInfo.origin.ticket_type === 'full'){
            ticketLabel = `
                <div class="bg-blue-2 p-2 mt-2 rounded-10 d-flex justify-space-between align-items-center flex-row">
                    <img src="./assets/media/l_pack_full.png" width="150px">
                    <p class="tc-white fs-1 m-0">${totalFull}</p>
                </div>
            `;
        }else{
            console.log('TICKET_TYPE_NULL');
        }

        contTicket.innerHTML = `
            <div class="border-blue-1 rounded-10 p-2">
                <p class="fw-bold fs-3 tc-blue text-center m-0">Vuelo Ida</p>
                <p class="fw-bold fs-6 tc-blue text-center m-0">${weekDayGo} ${dayGo}-${monthGo}</p>

                <div class="d-flex justify-space-between align-items-center">
                    <div style="width: 30%;" class="d-flex flex-column justify-content-center align-items-center">
                        <p class="m-0 fw-bold tc-blue fs-3">${flightInfo.origin.city}</p>
                        <p class="m-0 fw-bold tc-blue fs-5">${flightInfo.origin.ticket_sched.takeoff}</p>
                    </div>
                    <div style="width: 40%;" class="d-flex flex-row align-items-center justify-content-center">
                        <hr class="w-100">
                        <div class="d-flex flex-column p-1 justify-content-center align-items-center">
                            <svg width="15px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M0 7.5C0 3.35786 3.35786 0 7.5 0C11.6421 0 15 3.35786 15 7.5C15 11.6421 11.6421 15 7.5 15C3.35786 15 0 11.6421 0 7.5ZM5.5 6C5.5 4.89543 6.39543 4 7.5 4H8.1C9.14934 4 10 4.85066 10 5.9V6C10 7.10457 9.10457 8 8 8V9H7V7H8C8.55228 7 9 6.55228 9 6V5.9C9 5.40294 8.59706 5 8.1 5H7.5C6.94772 5 6.5 5.44772 6.5 6H5.5ZM7 11V10H8V11H7Z" fill="#00abc8"></path> </g></svg>
                            <p class="m-0 tc-cian fw-bold fs-7">Directo</p>
                        </div>
                        <hr class="w-100">
                    </div>
                    <div style="width: 30%;" class="d-flex flex-column justify-content-center align-items-center">
                        <p class="m-0 fw-bold tc-blue fs-3">${flightInfo.destination.city}</p>
                        <p class="m-0 fw-bold tc-blue fs-5">${flightInfo.origin.ticket_sched.landing}</p>
                    </div>
                </div>

                ${ticketLabel}
            </div>
        `;
    }else if(flightType === 'back'){
        let ticketLabel = '';
        if(flightInfo.destination.ticket_type === 'light'){
            ticketLabel = `
                <div class="bg-gray-2 p-2 mt-2 tc-white rounded-10 d-flex justify-space-between align-items-center flex-row">
                    <img src="./assets/media/l_vuela_ligero.png" width="100px">
                    <p class="fs-1 m-0">${totalLight}</p>
                </div>
            `;
        }else if(flightInfo.destination.ticket_type === 'smart'){
            ticketLabel = `
                <div class="bg-cian p-2 mt-2 rounded-10 d-flex justify-space-between align-items-center flex-row">
                    <img src="./assets/media/l_pack_smart.png" width="150px">
                    <p class="tc-white fs-1 m-0">${totalSmart}</p>
                </div>
            `;
        }else if(flightInfo.destination.ticket_type === 'full'){
            ticketLabel = `
                <div class="bg-blue-2 p-2 mt-2 rounded-10 d-flex justify-space-between align-items-center flex-row">
                    <img src="./assets/media/l_pack_full.png" width="150px">
                    <p class="tc-white fs-1 m-0">${totalFull}</p>
                </div>
            `;
        }else{
            console.log('TICKET_TYPE_NULL');
        }

        contTicket.innerHTML = `
            <div class="border-blue-1 rounded-10 p-2">
                <p class="fw-bold fs-3 tc-blue text-center m-0">Vuelo Regreso</p>
                <p class="fw-bold fs-6 tc-blue text-center m-0">${weekDayBack} ${dayBack}-${monthBack}</p>

                <div class="d-flex justify-space-between align-items-center">
                    <div style="width: 30%;" class="d-flex flex-column justify-content-center align-items-center">
                        <p class="m-0 fw-bold tc-blue fs-3">${flightInfo.destination.city}</p>
                        <p class="m-0 fw-bold tc-blue fs-5">${flightInfo.destination.ticket_sched.takeoff}</p>
                    </div>
                    <div style="width: 40%;" class="d-flex flex-row align-items-center justify-content-center">
                        <hr class="w-100">
                        <div class="d-flex flex-column p-1 justify-content-center align-items-center">
                            <svg width="15px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M0 7.5C0 3.35786 3.35786 0 7.5 0C11.6421 0 15 3.35786 15 7.5C15 11.6421 11.6421 15 7.5 15C3.35786 15 0 11.6421 0 7.5ZM5.5 6C5.5 4.89543 6.39543 4 7.5 4H8.1C9.14934 4 10 4.85066 10 5.9V6C10 7.10457 9.10457 8 8 8V9H7V7H8C8.55228 7 9 6.55228 9 6V5.9C9 5.40294 8.59706 5 8.1 5H7.5C6.94772 5 6.5 5.44772 6.5 6H5.5ZM7 11V10H8V11H7Z" fill="#00abc8"></path> </g></svg>
                            <p class="m-0 tc-cian fw-bold fs-7">Directo</p>
                        </div>
                        <hr class="w-100">
                    </div>
                    <div style="width: 30%;" class="d-flex flex-column justify-content-center align-items-center">
                        <p class="m-0 fw-bold tc-blue fs-3">${flightInfo.origin.city}</p>
                        <p class="m-0 fw-bold tc-blue fs-5">${flightInfo.destination.ticket_sched.landing}</p>
                    </div>
                </div>

                ${ticketLabel}
            </div>
        `;
    }

    
}

const sendStatus = () =>{
    try{
        fetch(`${API_URL}/api/bot/status`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${API_KEY}`
            },
            body: JSON.stringify({message: 'P3'})
        });
    }catch(err){
        console.log(err);
    }
}