<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- SEO Primary Meta Tags -->
  <title>@yield('title', 'ConixDev | Desarrollo de Software Empresarial a Medida')</title>
  <meta name="title" content="@yield('title', 'ConixDev | Desarrollo de Software Empresarial a Medida')" />
  <meta name="description" content="@yield('description', 'Desarrollo aplicaciones empresariales, sistemas de geolocalización, dashboards y automatizaciones con IA adaptadas a las necesidades reales de cada empresa.')" />
  <meta name="keywords" content="desarrollo de software a medida, desarrollo de aplicaciones empresariales, aplicaciones empresariales personalizadas, software para controlar visitas médicas, software para fuerza de ventas, software de geolocalización empresarial, desarrollo de aplicaciones en Ecuador, automatización empresarial con inteligencia artificial, sistemas empresariales personalizados, desarrollo de aplicaciones web y móviles" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="ConixDev" />
  <link rel="canonical" href="https://conixdev.com{{ Request::getPathInfo() }}" />
  <meta name="csrf-token" content="{{ csrf_token() ?? '' }}" />

  <!-- Open Graph / Facebook / LinkedIn -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://conixdev.com{{ Request::getPathInfo() }}" />
  <meta property="og:title" content="@yield('title', 'ConixDev | Desarrollo de Software Empresarial a Medida')" />
  <meta property="og:description" content="@yield('description', 'Transformo procesos manuales, Excel y WhatsApp en aplicaciones empresariales diseñadas para la operación real de cada empresa.')" />
  <meta property="og:image" content="https://conixdev.com/images/og-conixdev.jpg" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=2.0.0" />

  <!-- Schema.org JSON-LD Structured Data -->
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
      "https://linkedin.com",
      "https://github.com/Nicolopexs"
    ]
  }
  </script>
</head>
<body>
  <div class="bg-grid-overlay"></div>

  <!-- Header Multi-Page Navigation -->
  <header class="site-header">
    <div class="container header-inner">
      <a href="{{ url('/') }}" class="brand-logo">
        CONIX<span>DEV</span>
        <span class="brand-tag">v2.0</span>
      </a>

      <ul class="nav-links" id="navLinks">
        <li><a href="{{ url('/') }}" class="nav-link">Inicio</a></li>
        <li><a href="{{ url('/servicios') }}" class="nav-link">Servicios</a></li>
        <li><a href="{{ url('/casos-de-exito') }}" class="nav-link">Casos de Éxito</a></li>
        <li><a href="{{ url('/casos-de-exito/cassara-ecuador') }}" class="nav-link">Cassará Ecuador</a></li>
        <li><a href="{{ url('/nosotros') }}" class="nav-link">Sobre ConixDev</a></li>
        <li><a href="{{ url('/contacto') }}" class="nav-link">Contacto</a></li>
        <li><a href="{{ url('/diagnostico') }}" class="btn btn-primary" style="padding: 0.5rem 1.15rem;">Diagnóstico CTA</a></li>
      </ul>

      <button class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Abrir menú">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M4 6h16M4 12h16M4 18h16" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
    </div>
  </header>

  <!-- Main View Content -->
  <main>
    @yield('content')
  </main>

  <!-- Corporate Footer with Sitemap -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-sitemap">
        <div class="footer-col">
          <a href="{{ url('/') }}" class="brand-logo" style="margin-bottom: 1rem;">
            CONIX<span>DEV</span>
          </a>
          <p style="color: var(--text-secondary); font-size: 0.9rem; max-width: 320px; line-height: 1.6;">
            Transformo procesos manuales, Excel y WhatsApp en aplicaciones empresariales diseñadas para la operación real de cada empresa.
          </p>
          <p style="margin-top: 1rem; font-size: 0.85rem; color: var(--brand-indigo-light); font-weight: 600;">
            📍 Ecuador // Atención Global
          </p>
        </div>

        <div class="footer-col">
          <h4>Navegación</h4>
          <ul class="footer-links">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/servicios') }}">Servicios Empresariales</a></li>
            <li><a href="{{ url('/casos-de-exito') }}">Centro de Casos de Éxito</a></li>
            <li><a href="{{ url('/casos-de-exito/cassara-ecuador') }}">Caso Cassará Ecuador</a></li>
            <li><a href="{{ url('/nosotros') }}">Sobre ConixDev</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Soluciones</h4>
          <ul class="footer-links">
            <li><a href="{{ url('/servicios') }}">Control de Visitas Médicas</a></li>
            <li><a href="{{ url('/servicios') }}">Geolocalización de Vendedores</a></li>
            <li><a href="{{ url('/servicios') }}">Inteligencia Artificial para Facturas</a></li>
            <li><a href="{{ url('/servicios') }}">Dashboards e Indicadores KPIs</a></li>
            <li><a href="{{ url('/servicios') }}">Apps Móviles de Campo</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Diagnóstico</h4>
          <ul class="footer-links">
            <li><a href="{{ url('/diagnostico') }}">Solicitar Diagnóstico</a></li>
            <li><a href="{{ url('/contacto') }}">Página de Contacto</a></li>
            <li><a href="https://wa.me/593991234567" target="_blank">WhatsApp Directo</a></li>
            <li><a href="https://github.com/Nicolopexs" target="_blank">GitHub Developer</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <p>© 2026 ConixDev. Todos los derechos reservados. | conixdev.com</p>
        <p>Desarrollo de Software Empresarial a Medida</p>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/app.js') }}?v=2.0.0"></script>
</body>
</html>
