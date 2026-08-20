<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- SEO Primary Meta Tags -->
  <title>@yield('title', 'ConixDev — Desarrollamos el software que tu empresa necesita')</title>
  <meta name="title" content="@yield('title', 'ConixDev — Desarrollamos el software que tu empresa necesita')" />
  <meta name="description" content="@yield('description', 'Desarrollo de aplicaciones empresariales a medida, sistemas de geolocalización, automatización de procesos y plataformas operativas en Ecuador y Latinoamérica.')" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="ConixDev" />
  <link rel="canonical" href="https://conixdev.com{{ Request::getPathInfo() }}" />
  <meta name="csrf-token" content="{{ csrf_token() ?? '' }}" />

  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://conixdev.com{{ Request::getPathInfo() }}" />
  <meta property="og:title" content="@yield('title', 'ConixDev — Desarrollamos el software que tu empresa necesita')" />
  <meta property="og:description" content="@yield('description', 'Desarrollo de aplicaciones empresariales a medida, sistemas de geolocalización y automatización de procesos.')" />
  <meta property="og:image" content="https://conixdev.com/images/og-conixdev.jpg" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=3.0.0" />

  <!-- Schema.org JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "ConixDev",
    "url": "https://conixdev.com",
    "logo": "https://conixdev.com/images/logo.png",
    "description": "Desarrollo de aplicaciones y software empresarial a medida para empresas que necesitan controlar sus operaciones y automatizar procesos.",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "EC"
    },
    "sameAs": [
      "https://github.com/Nicolopexs"
    ]
  }
  </script>
</head>
<body>
  <div class="canvas-grid"></div>

  <!-- Header Navigation Bar -->
  <header class="nav-header">
    <div class="container nav-container">
      <a href="{{ url('/') }}" class="brand-wrapper">
        <!-- Official ConixDev Pixelated C Logo SVG -->
        <svg class="brand-icon-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="cGrad" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#0284c7" />
              <stop offset="100%" stop-color="#06b6d4" />
            </linearGradient>
          </defs>

          <!-- Stylized C body -->
          <path d="M 68 22 C 55 12, 35 12, 22 25 C 9 38, 9 62, 22 75 C 35 88, 55 88, 68 78 L 58 64 C 49 71, 36 71, 28 62 C 20 53, 20 37, 28 28 C 36 19, 49 19, 58 26 Z" fill="url(#cGrad)" />
          
          <!-- Geometric Pixel Cubes dissolving top right -->
          <rect x="66" y="16" width="9" height="9" fill="#06b6d4" rx="2" />
          <rect x="78" y="16" width="9" height="9" fill="#38bdf8" rx="2" />
          <rect x="72" y="27" width="9" height="9" fill="#0284c7" rx="2" />
          <rect x="84" y="27" width="9" height="9" fill="#06b6d4" rx="2" />
          <rect x="78" y="38" width="9" height="9" fill="#38bdf8" rx="2" />
        </svg>

        <span class="brand-text">Conix<span>Dev</span></span>
      </a>

      <ul class="nav-links-wrap" id="navLinksWrap">
        <li><a href="{{ url('/') }}" class="nav-item-link">Inicio</a></li>
        <li><a href="{{ url('/casos-de-exito/cassara-ecuador') }}" class="nav-item-link">Caso Cassará</a></li>
        <li><a href="{{ url('/servicios') }}" class="nav-item-link">Capacidades</a></li>
        <li><a href="{{ url('/nosotros') }}" class="nav-item-link">Sobre ConixDev</a></li>
        <li><a href="{{ url('/contacto') }}" class="nav-item-link">Contacto</a></li>
        <li><a href="{{ url('/diagnostico') }}" class="btn-action btn-primary-glow" style="padding: 0.55rem 1.25rem;">Hablar con ConixDev</a></li>
      </ul>

      <button class="mobile-toggle-btn" id="mobileToggleBtn" aria-label="Abrir menú">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M4 6h16M4 12h16M4 18h16" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
    </div>
  </header>

  <!-- Main View Slot -->
  <main style="flex: 1;">
    @yield('content')
  </main>

  <!-- Corporate Footer -->
  <footer class="footer-corporate">
    <div class="container">
      <div class="footer-nav-grid">
        <div>
          <a href="{{ url('/') }}" class="brand-wrapper" style="margin-bottom: 1.25rem;">
            <svg class="brand-icon-svg" viewBox="0 0 100 100" fill="none">
              <path d="M 68 22 C 55 12, 35 12, 22 25 C 9 38, 9 62, 22 75 C 35 88, 55 88, 68 78 L 58 64 C 49 71, 36 71, 28 62 C 20 53, 20 37, 28 28 C 36 19, 49 19, 58 26 Z" fill="url(#cGrad)" />
              <rect x="66" y="16" width="9" height="9" fill="#06b6d4" rx="2" />
              <rect x="78" y="16" width="9" height="9" fill="#38bdf8" rx="2" />
              <rect x="72" y="27" width="9" height="9" fill="#0284c7" rx="2" />
            </svg>
            <span class="brand-text">Conix<span>Dev</span></span>
          </a>
          <p style="color: var(--text-muted); font-size: 0.9rem; max-width: 320px; line-height: 1.6;">
            Desarrollamos el software que tu empresa necesita. Transformamos operaciones manuales en sistemas de alto rendimiento.
          </p>
          <p style="margin-top: 1rem; font-size: 0.88rem; color: var(--brand-cyan-glow); font-weight: 600;">
            🇪🇨 Desde Ecuador, construyendo software de nivel internacional.
          </p>
        </div>

        <div>
          <h4 class="footer-col-title">Empresa</h4>
          <ul class="footer-nav-links">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/casos-de-exito/cassara-ecuador') }}">Caso Cassará Ecuador</a></li>
            <li><a href="{{ url('/nosotros') }}">Sobre ConixDev</a></li>
            <li><a href="{{ url('/contacto') }}">Contacto Directo</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Capacidades</h4>
          <ul class="footer-nav-links">
            <li><a href="{{ url('/servicios') }}">Aplicaciones Empresariales</a></li>
            <li><a href="{{ url('/servicios') }}">Aplicaciones Móviles</a></li>
            <li><a href="{{ url('/servicios') }}">Sistemas de Geolocalización</a></li>
            <li><a href="{{ url('/servicios') }}">Inteligencia Artificial & Facturación</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Contacto</h4>
          <ul class="footer-nav-links">
            <li><a href="{{ url('/diagnostico') }}">Solicitar Propuesta</a></li>
            <li><a href="https://wa.me/593991234567" target="_blank">WhatsApp Directo</a></li>
            <li><a href="https://github.com/Nicolopexs" target="_blank">GitHub Developer</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom-bar">
        <p>© 2026 ConixDev. Todos los derechos reservados. | conixdev.com</p>
        <p>Software Empresarial Hecho a Medida</p>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/app.js') }}?v=3.0.0"></script>
</body>
</html>
