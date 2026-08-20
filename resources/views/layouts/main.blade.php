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
  <link rel="canonical" href="@yield('canonical', 'https://conixdev.com' . Request::getPathInfo())" />
  <meta name="csrf-token" content="{{ csrf_token() ?? '' }}" />

  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="@yield('canonical', 'https://conixdev.com' . Request::getPathInfo())" />
  <meta property="og:title" content="@yield('title', 'ConixDev — Desarrollamos el software que tu empresa necesita')" />
  <meta property="og:description" content="@yield('description', 'Desarrollo de aplicaciones empresariales a medida, sistemas de geolocalización y automatización de procesos.')" />
  <meta property="og:image" content="https://conixdev.com/images/og-conixdev.jpg" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=6.0.0" />

  <!-- Schema.org JSON-LD (Organization & LocalBusiness Quito, Ecuador) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "https://conixdev.com/#organization",
        "name": "ConixDev",
        "url": "https://conixdev.com",
        "logo": "https://conixdev.com/images/logo.png",
        "description": "Desarrollo de aplicaciones y software empresarial a medida para empresas que necesitan controlar sus operaciones y automatizar procesos.",
        "sameAs": [
          "https://github.com/Nicolopexs"
        ]
      },
      {
        "@type": "LocalBusiness",
        "@id": "https://conixdev.com/#localbusiness",
        "name": "ConixDev Ecuador",
        "image": "https://conixdev.com/images/logo.png",
        "telephone": "+593962761063",
        "priceRange": "$$",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Quito",
          "addressRegion": "Pichincha",
          "addressCountry": "EC"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": "-0.180653",
          "longitude": "-78.467838"
        },
        "url": "https://conixdev.com"
      },
      {
        "@type": "WebSite",
        "@id": "https://conixdev.com/#website",
        "url": "https://conixdev.com",
        "name": "ConixDev",
        "publisher": {
          "@id": "https://conixdev.com/#organization"
        },
        "inLanguage": "es"
      }
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
        <svg class="brand-icon-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="cGrad" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#0284c7" />
              <stop offset="100%" stop-color="#06b6d4" />
            </linearGradient>
          </defs>
          <path d="M 68 22 C 55 12, 35 12, 22 25 C 9 38, 9 62, 22 75 C 35 88, 55 88, 68 78 L 58 64 C 49 71, 36 71, 28 62 C 20 53, 20 37, 28 28 C 36 19, 49 19, 58 26 Z" fill="url(#cGrad)" />
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
        <li><a href="{{ url('/desarrollo-software-ecuador') }}" class="nav-item-link">Software Ecuador</a></li>
        <li><a href="{{ url('/desarrollo-aplicaciones-moviles') }}" class="nav-item-link">Apps Móviles</a></li>
        <li><a href="{{ url('/casos-de-exito/cassara-ecuador') }}" class="nav-item-link">Caso Cassará</a></li>
        <li><a href="{{ url('/blog') }}" class="nav-item-link">Centro Conocimiento</a></li>
        <li><a href="{{ url('/contacto') }}" class="nav-item-link">Contacto</a></li>
        <li><a href="{{ url('/contacto') }}" class="btn-action btn-primary-glow" style="padding: 0.55rem 1.25rem;">Hablar con ConixDev</a></li>
        <li>
          <button id="themeToggleBtn" class="theme-toggle-btn" aria-label="Cambiar tema">
            <svg class="theme-icon-dark" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
            </svg>
            <svg class="theme-icon-light" style="display:none;" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="5"></circle>
              <line x1="12" y1="1" x2="12" y2="3"></line>
              <line x1="12" y1="21" x2="12" y2="23"></line>
              <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
              <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
              <line x1="1" y1="12" x2="3" y2="12"></line>
              <line x1="21" y1="12" x2="23" y2="12"></line>
              <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
              <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
            </svg>
          </button>
        </li>
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
            <li><a href="{{ url('/desarrollo-software-ecuador') }}">Software en Ecuador</a></li>
            <li><a href="{{ url('/casos-de-exito/cassara-ecuador') }}">Caso Cassará Ecuador</a></li>
            <li><a href="{{ url('/blog') }}">Centro de Conocimiento</a></li>
            <li><a href="{{ url('/nosotros') }}">Sobre ConixDev</a></li>
            <li><a href="{{ url('/contacto') }}">Contacto Directo</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Capacidades</h4>
          <ul class="footer-nav-links">
            <li><a href="{{ url('/desarrollo-software-ecuador') }}">Desarrollo Software Ecuador</a></li>
            <li><a href="{{ url('/desarrollo-aplicaciones-moviles') }}">Aplicaciones Móviles</a></li>
            <li><a href="{{ url('/software-empresarial') }}">Software Empresarial</a></li>
            <li><a href="{{ url('/automatizacion-procesos') }}">Automatización & IA</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Contacto</h4>
          <ul class="footer-nav-links">
            <li><a href="{{ url('/contacto') }}">Solicitar Diagnóstico</a></li>
            <li>
              <a href="https://wa.me/593962761063" target="_blank" style="display: inline-flex; align-items: center; gap: 0.4rem;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.461c-1.854 0-3.674-.497-5.263-1.442l-.377-.225-3.916 1.027 1.045-3.819-.247-.393c-1.038-1.652-1.587-3.585-1.587-5.566 0-5.74 4.671-10.411 10.413-10.411 2.781 0 5.397 1.082 7.362 3.049 1.964 1.966 3.045 4.582 3.045 7.363 0 5.742-4.671 10.417-10.475 10.417M12.051 0C5.395 0 0 5.393 0 12.05c0 2.128.556 4.204 1.614 6.035L0 24l6.097-1.599c1.764.962 3.753 1.47 5.952 1.47 6.657 0 12.051-5.395 12.051-12.052C24.1 5.393 18.707 0 12.051 0z"/></svg>
                <span>WhatsApp (+593 96 276 1063)</span>
              </a>
            </li>
            <li><a href="https://github.com/Nicolopexs" target="_blank">GitHub Developer</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom-bar">
        <p>© 2026 ConixDev. Todos los derechos reservados. | conixdev.com</p>
        <p>Software Empresarial Hecho a Medida en Ecuador</p>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/app.js') }}?v=6.0.0"></script>
</body>
</html>
