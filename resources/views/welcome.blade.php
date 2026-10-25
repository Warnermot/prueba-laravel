<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecoandino | Operadora de turismo – Próximamente</title>
    <meta name="description" content="Ecoandino, operadora de turismo. Estamos preparando nuestro nuevo sitio web.">
    <meta name="theme-color" content="#070b14">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=cormorant-garamond:500i,600i|montserrat:400,500,600" rel="stylesheet">

    <style>
        :root {
            --noche: #070b14;
            --nieve: #f4f6f8;
            --hielo: #8fb4d9;
            --bruma: #1a2640;
            --alba: #e8a04a;
        }
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html, body { height: 100%; }
        body {
            font-family: 'Montserrat', system-ui, sans-serif;
            background: var(--noche);
            color: var(--nieve);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            position: relative;
        }

        /* Resplandor de amanecer detrás de las montañas */
        body::before {
            content: "";
            position: fixed;
            inset: auto 0 0 0;
            height: 70vh;
            background: radial-gradient(ellipse 60% 70% at 50% 100%, rgba(232,160,74,.28), rgba(143,180,217,.10) 45%, transparent 70%);
            pointer-events: none;
            animation: amanecer 3s ease-out both;
        }
        @keyframes amanecer { from { opacity: 0; } to { opacity: 1; } }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: clamp(24px, 5vw, 56px) 24px 0;
            position: relative;
            z-index: 2;
        }

        .logo {
            width: min(420px, 78vw);
            height: auto;
            margin-bottom: clamp(24px, 5vh, 48px);
        }

        h1 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-style: italic;
            font-weight: 600;
            font-size: clamp(2rem, 6vw, 3.6rem);
            line-height: 1.1;
            letter-spacing: .01em;
            margin-bottom: 18px;
        }

        .mensaje {
            max-width: 46ch;
            font-size: clamp(.95rem, 2vw, 1.05rem);
            line-height: 1.7;
            color: rgba(244,246,248,.78);
            margin-bottom: 32px;
        }

        .contacto {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-bottom: 32px;
        }
        .contacto a {
            color: var(--nieve);
            text-decoration: none;
            font-weight: 500;
            font-size: .9rem;
            padding: 12px 26px;
            border: 1px solid rgba(143,180,217,.5);
            border-radius: 999px;
            transition: background .2s, border-color .2s, color .2s;
        }
        .contacto a:hover { background: var(--nieve); color: var(--noche); border-color: var(--nieve); }
        .contacto a:focus-visible { outline: 2px solid var(--alba); outline-offset: 3px; }
        .contacto a.principal { background: var(--nieve); color: var(--noche); border-color: var(--nieve); }
        .contacto a.principal:hover { background: var(--alba); border-color: var(--alba); }

        /* Montañas en capas */
        .montanas {
            position: relative;
            z-index: 1;
            width: 100%;
            line-height: 0;
            margin-top: auto;
        }
        .montanas svg { width: 100%; height: clamp(120px, 24vw, 260px); display: block; }
        .capa-fondo { fill: var(--bruma); }
        .capa-media { fill: #101a2e; }
        .capa-frente { fill: #070b14; }
        .nieve { fill: var(--nieve); opacity: .9; }
        .montanas .grupo { animation: subir 1.6s cubic-bezier(.2,.7,.2,1) both; }
        @keyframes subir { from { transform: translateY(40px); opacity: 0; } to { transform: none; opacity: 1; } }

        footer {
            position: relative;
            z-index: 2;
            background: var(--noche);
            text-align: center;
            padding: 16px 24px 22px;
            font-size: .75rem;
            color: rgba(244,246,248,.5);
            letter-spacing: .04em;
        }

        @media (prefers-reduced-motion: reduce) {
            body::before, .montanas .grupo { animation: none; }
        }
    </style>
</head>
<body>
    <main>
        <img class="logo" src="{{ asset('img/logo_2_sin_fondo_azul.png') }}" alt="Ecoandino – Enjoy your trip. Operadora de turismo">

        <h1>Estamos preparando la ruta</h1>

        <p class="mensaje">
            Nuestro sitio web está en construcción. 
            Muy pronto podrás conocer nuestros destinos para tu próxima aventura andina.
        </p>

        <div class="contacto">
            {{-- Reemplaza con tus datos reales --}}
            <a class="principal" href="https://wa.me/59100000000" target="_blank" rel="noopener">Escríbenos por WhatsApp</a>
            <a href="mailto:info@ecoandino.com">info@ecoandino.com</a>
        </div>
    </main>

    <div class="montanas" aria-hidden="true">
        <svg viewBox="0 0 1440 260" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <g class="grupo">
                <path class="capa-fondo" d="M0 260V150l120-50 110 60 140-90 130 80 150-110 160 120 130-70 140 90 120-60 140 70v140z"/>
                <path class="capa-media" d="M0 260V190l160-80 120 70 180-130 170 120 120-60 190 110 150-90 180 100 170-60v190z"/>
                <path class="nieve" d="M460 50l-42 30 22-8 20 14 14-12 16 12zM1020 90l-26 18 14-5 12 10 10-8 14 8z"/>
                <path class="capa-frente" d="M0 260V215l200-60 160 70 200-90 220 80 180-70 220 90 260-60v250z"/>
            </g>
        </svg>
    </div>

    <footer>&copy; {{ date('Y') }} Ecoandino · Operadora de turismo</footer>
</body>
</html>
