<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- SEO Primary Meta Tags -->
  <title>ConixDev | Desarrollo de Software Empresarial a Medida</title>
  <meta name="title" content="ConixDev | Desarrollo de Software Empresarial a Medida" />
  <meta name="description" content="Desarrollo aplicaciones empresariales, sistemas de geolocalización, dashboards y automatizaciones con IA adaptadas a las necesidades reales de cada empresa." />
  <meta name="keywords" content="desarrollo de software a medida, desarrollo de aplicaciones empresariales, aplicaciones empresariales personalizadas, software para controlar visitas médicas, software para fuerza de ventas, software de geolocalización empresarial, desarrollo de aplicaciones en Ecuador, automatización empresarial con inteligencia artificial, sistemas empresariales personalizados, desarrollo de aplicaciones web y móviles" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="ConixDev" />
  <link rel="canonical" href="https://conixdev.com/" />
  <meta name="csrf-token" content="{{ csrf_token() ?? '' }}" />

  <!-- Open Graph / Facebook / LinkedIn -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://conixdev.com/" />
  <meta property="og:title" content="ConixDev | Desarrollo de Software Empresarial a Medida" />
  <meta property="og:description" content="Transformo procesos manuales, Excel y WhatsApp en aplicaciones empresariales diseñadas para la operación real de cada empresa." />
  <meta property="og:image" content="https://conixdev.com/images/og-conixdev.jpg" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://conixdev.com/" />
  <meta property="twitter:title" content="ConixDev | Desarrollo de Software Empresarial a Medida" />
  <meta property="twitter:description" content="Transformo procesos manuales, Excel y WhatsApp en aplicaciones empresariales diseñadas para la operación real de cada empresa." />
  <meta property="twitter:image" content="https://conixdev.com/images/og-conixdev.jpg" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Main CSS Asset -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=1.0.0" />
  <style>
    /* Inline fallback in case Laravel asset helper resolves locally */
  </style>

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
      "https://github.com"
    ]
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "Cassará Ecuador",
    "operatingSystem": "Web, iOS, Android",
    "applicationCategory": "BusinessApplication",
    "description": "Plataforma empresarial a medida desarrollada por ConixDev para la gestión de visitadores médicos, geolocalización y escaneo de facturas con Inteligencia Artificial."
  }
  </script>
</head>
<body>
  <!-- Ambient background lighting -->
  <div class="grid-pattern"></div>
  <div class="bg-light-1"></div>
  <div class="bg-light-2"></div>
  <div class="bg-light-3"></div>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container navbar-inner">
      <a href="#" class="logo">
        CONIX<span>DEV</span>
      </a>
      <ul class="nav-menu" id="navMenu">
        <li><a href="#problemas" class="nav-link">Problemas</a></li>
        <li><a href="#cassara" class="nav-link">Caso Cassará</a></li>
        <li><a href="#servicios" class="nav-link">Servicios</a></li>
        <li><a href="#proceso" class="nav-link">Proceso</a></li>
        <li><a href="#sobre-mi" class="nav-link">Sobre Mí</a></li>
        <li><a href="#contacto" class="btn btn-primary" style="padding: 0.5rem 1.25rem;">Diagnóstico</a></li>
      </ul>
      <button class="mobile-toggle" id="mobileToggle" aria-label="Abrir menú">☰</button>
    </div>
  </header>

  <!-- 1. HERO PRINCIPAL -->
  <section class="hero-section">
    <div class="container">
      <div class="trust-badge">
        <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#10b981; box-shadow:0 0 10px #10b981;"></span>
        Software diseñado alrededor de las necesidades reales de cada empresa
      </div>

      <h1 class="hero-title text-gradient">
        Desarrollo de software empresarial <span class="text-highlight">a medida</span>
      </h1>

      <p class="hero-subtitle">
        Diseño y desarrollo aplicaciones web y móviles para empresas que necesitan controlar mejor sus operaciones, automatizar procesos y tomar decisiones con información real.
      </p>

      <div class="hero-actions">
        <a href="#contacto" class="btn btn-primary">
          <span>Solicitar diagnóstico</span>
          <span>→</span>
        </a>
        <a href="#cassara" class="btn btn-secondary">
          <span>Ver caso de éxito</span>
        </a>
      </div>

      <!-- Mockup genérico de aplicación empresarial -->
      <div class="hero-mockup-wrap">
        <div class="hero-mockup">
          <div class="mockup-header">
            <span class="mockup-dot dot-red"></span>
            <span class="mockup-dot dot-yellow"></span>
            <span class="mockup-dot dot-green"></span>
            <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--text-muted); margin-left: 0.5rem;">
              conixdev-enterprise-dashboard // V2.4
            </span>
          </div>
          <div class="mockup-body">
            <div class="mockup-card">
              <div class="mockup-stat-lbl">Control de Operaciones</div>
              <div class="mockup-stat-val text-accent">99.8%</div>
              <p style="font-size:0.8rem; color:var(--text-muted); margin-top:0.4rem;">Trazabilidad en tiempo real</p>
            </div>
            <div class="mockup-card">
              <div class="mockup-stat-lbl">Automatización IA</div>
              <div class="mockup-stat-val" style="color:#34d399;">Facturación</div>
              <p style="font-size:0.8rem; color:var(--text-muted); margin-top:0.4rem;">Procesamiento sin errores</p>
            </div>
            <div class="mockup-card">
              <div class="mockup-stat-lbl">Equipos en Campo</div>
              <div class="mockup-stat-val" style="color:#818cf8;">Geolocalización</div>
              <p style="font-size:0.8rem; color:var(--text-muted); margin-top:0.4rem;">Visitas y reportes en vivo</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. PROBLEMAS QUE RESUELVO -->
  <section class="section-padding" id="problemas">
    <div class="container">
      <div class="text-center">
        <span class="section-tag">Diagnóstico Operativo</span>
        <h2 class="hero-title text-gradient" style="font-size: clamp(2rem, 4vw, 3rem);">
          ¿Tu empresa todavía depende de <span class="text-highlight">Excel, WhatsApp y procesos manuales</span>?
        </h2>
      </div>

      <div class="cards-grid">
        <div class="card">
          <div class="card-icon">📍</div>
          <h3 class="card-title">Sin trazabilidad de campo</h3>
          <p class="card-desc">No sabes exactamente dónde está trabajando tu equipo en terreno ni si las visitas fueron realizadas en el lugar correcto.</p>
        </div>

        <div class="card">
          <div class="card-icon">📁</div>
          <h3 class="card-title">Información dispersa</h3>
          <p class="card-desc">La data crítica de tu empresa vive en conversaciones de WhatsApp, correos sueltos y múltiples hojas de cálculo.</p>
        </div>

        <div class="card">
          <div class="card-icon">📊</div>
          <h3 class="card-title">Reportes manuales lentos</h3>
          <p class="card-desc">Tus líderes pierden horas valiosas consolidando manualmente reportes que deberían generarse automáticamente.</p>
        </div>

        <div class="card">
          <div class="card-icon">⚠️</div>
          <h3 class="card-title">Errores al registrar datos</h3>
          <p class="card-desc">El ingreso manual de información provoca duplicaciones, pérdidas de registros y fallas en la facturación.</p>
        </div>

        <div class="card">
          <div class="card-icon">📑</div>
          <h3 class="card-title">Pérdida de tiempo en documentos</h3>
          <p class="card-desc">Tu equipo gasta días organizando facturas físicas o clasificando comprobantes de gastos uno por uno.</p>
        </div>

        <div class="card">
          <div class="card-icon">🎯</div>
          <h3 class="card-title">Falta de control operativo</h3>
          <p class="card-desc">No tienes visibilidad inmediata sobre el avance de metas, visitas agendadas o inventario en tiempo real.</p>
        </div>

        <div class="card" style="grid-column: span 1;">
          <div class="card-icon">🧩</div>
          <h3 class="card-title">Sin software a la medida</h3>
          <p class="card-desc">Tu empresa requiere un sistema propio, pero los programas genéricos del mercado no se adaptan a tu forma de trabajar.</p>
        </div>
      </div>

      <div style="margin-top: 3.5rem; text-align: center;">
        <p style="font-size: 1.2rem; font-weight: 600; color: var(--accent-cyan);">
          "Analizo tu proceso y te propongo una solución tecnológica adaptada a tu operación."
        </p>
      </div>
    </div>
  </section>

  <!-- 3. CASO DE ÉXITO PRINCIPAL: CASSARÁ ECUADOR -->
  <section class="section-padding" id="cassara">
    <div class="container">
      <div class="text-center">
        <span class="section-tag">Proyecto Real Entregado</span>
        <h2 class="hero-title text-gradient" style="font-size: clamp(2rem, 4vw, 3rem);">
          Caso de éxito: <span class="text-highlight">Cassará Ecuador</span>
        </h2>
        <p style="max-width: 750px; margin: 0 auto; color: var(--text-muted); font-size: 1.1rem;">
          Cassará es una plataforma empresarial desarrollada a medida por ConixDev para digitalizar y controlar la operación completa de visitadores médicos.
        </p>
      </div>

      <div class="case-study-hero">
        <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 1rem;" class="text-accent">
          Módulos y Capacidades Desarrolladas:
        </h3>

        <div class="case-grid">
          <div class="case-module-item">
            <span class="case-module-icon">📍</span>
            <span>Geolocalización de visitadores médicos</span>
          </div>
          <div class="case-module-item">
            <span class="case-module-icon">📅</span>
            <span>Registro y control de visitas</span>
          </div>
          <div class="case-module-item">
            <span class="case-module-icon">👨‍⚕️</span>
            <span>Gestión de médicos</span>
          </div>
          <div class="case-module-item">
            <span class="case-module-icon">🏥</span>
            <span>Gestión de farmacias</span>
          </div>
          <div class="case-module-item">
            <span class="case-module-icon">📈</span>
            <span>Dashboard para visualizar avance de ciclos</span>
          </div>
          <div class="case-module-item">
            <span class="case-module-icon">🤖</span>
            <span>Escaneo de facturas con IA</span>
          </div>
          <div class="case-module-item">
            <span class="case-module-icon">📦</span>
            <span>Organización de facturas por lotes</span>
          </div>
          <div class="case-module-item">
            <span class="case-module-icon">💳</span>
            <span>Gastos deducibles vs no deducibles</span>
          </div>
          <div class="case-module-item">
            <span class="case-module-icon">🔐</span>
            <span>Gestión de usuarios y permisos</span>
          </div>
          <div class="case-module-item">
            <span class="case-module-icon">📄</span>
            <span>Reportes de operación en vivo</span>
          </div>
          <div class="case-module-item">
            <span class="case-module-icon">📱</span>
            <span>Aplicación fácil de instalar y usar</span>
          </div>
        </div>

        <!-- Galería / Contenedor preparado para imágenes y videos reales -->
        <h4 style="font-size: 1.1rem; color: var(--text-muted); margin-top: 2.5rem; margin-bottom: 1rem;">
          Vista Previa de la Plataforma (Espacio para capturas y demostración):
        </h4>

        <div class="device-gallery">
          <div class="device-placeholder">
            <div style="font-size: 2rem; margin-bottom: 0.5rem;">🖥️</div>
            <strong style="color:var(--text-main);">Dashboard Web Administrador</strong>
            <span style="font-size: 0.82rem; margin-top:0.4rem;">[Espacio reservado para captura de computadora]</span>
          </div>

          <div class="device-placeholder">
            <div style="font-size: 2rem; margin-bottom: 0.5rem;">📱</div>
            <strong style="color:var(--text-main);">App Móvil de Campo</strong>
            <span style="font-size: 0.82rem; margin-top:0.4rem;">[Espacio reservado para mockup de smartphone]</span>
          </div>

          <div class="device-placeholder">
            <div style="font-size: 2rem; margin-bottom: 0.5rem;">🎥</div>
            <strong style="color:var(--text-main);">Video Demostrativo</strong>
            <span style="font-size: 0.82rem; margin-top:0.4rem;">[Espacio preparado para video de la app]</span>
          </div>
        </div>

        <div class="cassara-quote">
          “Cassará demuestra que ConixDev puede convertir una necesidad operativa compleja en una plataforma empresarial funcional.”
        </div>

        <div style="margin-top: 2rem; text-align: center;">
          <a href="#contacto" class="btn btn-primary">
            Solicitar una solución similar para mi empresa
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. SERVICIOS -->
  <section class="section-padding" id="servicios">
    <div class="container">
      <div class="text-center">
        <span class="section-tag">Capacidades Técnicas</span>
        <h2 class="hero-title text-gradient" style="font-size: clamp(2rem, 4vw, 3rem);">
          ¿Qué puedo desarrollar para tu empresa?
        </h2>
      </div>

      <div class="cards-grid">
        <div class="card">
          <div class="card-icon">🌐</div>
          <h3 class="card-title">Aplicaciones Web Empresariales</h3>
          <p class="card-desc">Plataformas centralizadas accesibles desde cualquier navegador para gestionar clientes, inventarios o flujos de trabajo.</p>
        </div>

        <div class="card">
          <div class="card-icon">📱</div>
          <h3 class="card-title">Aplicaciones Móviles</h3>
          <p class="card-desc">Apps intuitivas para iOS y Android diseñadas para que tus empleados o clientes interactúen desde cualquier lugar.</p>
        </div>

        <div class="card">
          <div class="card-icon">⚙️</div>
          <h3 class="card-title">Sistemas de Gestión Personalizados</h3>
          <p class="card-desc">Software adaptado a la lógica de tu negocio, reemplazando plantillas rígidas por herramientas hechas a tu medida.</p>
        </div>

        <div class="card">
          <div class="card-icon">🚶</div>
          <h3 class="card-title">Plataformas para Equipos de Campo</h3>
          <p class="card-desc">Herramientas especializadas para coordinar técnicos, vendedores o personal operativo que trabaja fuera de la oficina.</p>
        </div>

        <div class="card">
          <div class="card-icon">🗺️</div>
          <h3 class="card-title">Sistemas de Geolocalización</h3>
          <p class="card-desc">Rastreo inteligente y verificación geográfica para confirmar visitas, entregas y rutas de tu personal en tiempo real.</p>
        </div>

        <div class="card">
          <div class="card-icon">📊</div>
          <h3 class="card-title">Dashboards y Reportes</h3>
          <p class="card-desc">Paneles visuales e indicadores ejecutivos (KPIs) actualizados automáticamente para tomar decisiones con información real.</p>
        </div>

        <div class="card">
          <div class="card-icon">⚡</div>
          <h3 class="card-title">Automatización de Procesos</h3>
          <p class="card-desc">Eliminación de tareas repetitivas conectando sistemas, notificaciones automáticas y aprobaciones sin intervención manual.</p>
        </div>

        <div class="card">
          <div class="card-icon">🤖</div>
          <h3 class="card-title">Procesamiento de Documentos con IA</h3>
          <p class="card-desc">Lectura inteligente y extracción automática de datos en facturas, recibos y formularios mediante IA.</p>
        </div>

        <div class="card">
          <div class="card-icon">🛍️</div>
          <h3 class="card-title">Control de Ventas y Visitas</h3>
          <p class="card-desc">Seguimiento detallado de metas comerciales, pedidos en terreno y la actividad de tus asesores de ventas.</p>
        </div>

        <div class="card">
          <div class="card-icon">🔌</div>
          <h3 class="card-title">Integraciones de Servicios</h3>
          <p class="card-desc">Conexión de tu nuevo software con bases de datos existentes, pasarelas de pago, facturación electrónica o servicios de terceros.</p>
        </div>

        <div class="card">
          <div class="card-icon">🛠️</div>
          <h3 class="card-title">Mantenimiento y Evolución</h3>
          <p class="card-desc">Soporte técnico, optimización de velocidad y desarrollo continuo de nuevas funciones para sistemas ya construidos.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. SOLUCIONES POR NECESIDAD -->
  <section class="section-padding" style="background: rgba(15, 23, 42, 0.4);">
    <div class="container">
      <div class="text-center">
        <span class="section-tag">Soluciones Directas</span>
        <h2 class="hero-title text-gradient" style="font-size: clamp(2rem, 4vw, 3rem);">
          Soluciones según la necesidad de tu empresa
        </h2>
      </div>

      <div class="cards-grid">
        <div class="card" style="padding: 1.5rem;">
          <h3 class="card-title" style="font-size: 1.1rem; color: var(--accent-sky);">• Control de visitas médicas</h3>
          <p class="card-desc">Plataforma integral para laboratorios y empresas farmacéuticas.</p>
        </div>
        <div class="card" style="padding: 1.5rem;">
          <h3 class="card-title" style="font-size: 1.1rem; color: var(--accent-sky);">• Control de vendedores</h3>
          <p class="card-desc">Rastreo de rutas comerciales, pedidos e historial de clientes.</p>
        </div>
        <div class="card" style="padding: 1.5rem;">
          <h3 class="card-title" style="font-size: 1.1rem; color: var(--accent-sky);">• Equipos en campo</h3>
          <p class="card-desc">Coordinación de personal técnico, supervisores e inspectores.</p>
        </div>
        <div class="card" style="padding: 1.5rem;">
          <h3 class="card-title" style="font-size: 1.1rem; color: var(--accent-sky);">• Geolocalización empresarial</h3>
          <p class="card-desc">Confirmación por coordenadas GPS de actividades operativas.</p>
        </div>
        <div class="card" style="padding: 1.5rem;">
          <h3 class="card-title" style="font-size: 1.1rem; color: var(--accent-sky);">• Automatización de facturas</h3>
          <p class="card-desc">Lectura OCR e Inteligencia Artificial para procesamiento masivo.</p>
        </div>
        <div class="card" style="padding: 1.5rem;">
          <h3 class="card-title" style="font-size: 1.1rem; color: var(--accent-sky);">• Dashboards de indicadores</h3>
          <p class="card-desc">Paneles visuales para gerencia y toma de decisiones.</p>
        </div>
        <div class="card" style="padding: 1.5rem;">
          <h3 class="card-title" style="font-size: 1.1rem; color: var(--accent-sky);">• Apps personalizadas</h3>
          <p class="card-desc">Desarrollo a medida sin limitaciones de software genérico.</p>
        </div>
        <div class="card" style="padding: 1.5rem;">
          <h3 class="card-title" style="font-size: 1.1rem; color: var(--accent-sky);">• Digitalización de procesos</h3>
          <p class="card-desc">Migración estructurada de archivos manuales a bases de datos.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. PROCESO DE TRABAJO -->
  <section class="section-padding" id="proceso">
    <div class="container">
      <div class="text-center">
        <span class="section-tag">Metodología Clara</span>
        <h2 class="hero-title text-gradient" style="font-size: clamp(2rem, 4vw, 3rem);">
          De la idea al sistema funcionando
        </h2>
        <p style="color: var(--text-muted); font-size: 1.05rem; max-width: 700px; margin: 0 auto;">
          No necesitas saber programación ni términos técnicos. Solo me explicas qué necesitas mejorar en tu operación y yo estructuro el sistema.
        </p>
      </div>

      <div class="process-grid">
        <div class="process-step">
          <div class="step-number">01</div>
          <h3 class="card-title">Análisis</h3>
          <p class="card-desc">Conozco el proceso de tu empresa a fondo y detecto el problema real a resolver.</p>
        </div>

        <div class="process-step">
          <div class="step-number">02</div>
          <h3 class="card-title">Diseño</h3>
          <p class="card-desc">Defino los módulos, pantallas, roles de usuario, permisos y flujo de trabajo optimizado.</p>
        </div>

        <div class="process-step">
          <div class="step-number">03</div>
          <h3 class="card-title">Desarrollo</h3>
          <p class="card-desc">Construyo la aplicación utilizando código limpio, seguro, de alto rendimiento y escalable.</p>
        </div>

        <div class="process-step">
          <div class="step-number">04</div>
          <h3 class="card-title">Implementación</h3>
          <p class="card-desc">Pongo el sistema en funcionamiento real, capacito al equipo y continúo con su evolución.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. DIFERENCIADORES -->
  <section class="section-padding">
    <div class="container">
      <div class="text-center">
        <span class="section-tag">Por Qué Elegirme</span>
        <h2 class="hero-title text-gradient" style="font-size: clamp(2rem, 4vw, 3rem);">
          ¿Por qué trabajar con ConixDev?
        </h2>
      </div>

      <div class="cards-grid">
        <div class="card">
          <h3 class="card-title">• Necesidades Reales</h3>
          <p class="card-desc">Desarrollo basado exclusivamente en la operación real de tu empresa, sin funciones innecesarias.</p>
        </div>
        <div class="card">
          <h3 class="card-title">• 100% Personalizado</h3>
          <p class="card-desc">Soluciones construidas a la medida, nunca plantillas genéricas o adaptaciones forzadas.</p>
        </div>
        <div class="card">
          <h3 class="card-title">• Comunicación Directa</h3>
          <p class="card-desc">Trato directo con el desarrollador senior responsable de tu proyecto, sin intermediarios.</p>
        </div>
        <div class="card">
          <h3 class="card-title">• Automatización y Eficiencia</h3>
          <p class="card-desc">Enfoque constante en ahorrar horas de trabajo manual a tu equipo operativo.</p>
        </div>
        <div class="card">
          <h3 class="card-title">• Diseñado para Crecer</h3>
          <p class="card-desc">Arquitectura escalable preparada para soportar más usuarios y módulos en el futuro.</p>
        </div>
        <div class="card">
          <h3 class="card-title">• Plataformas Completas</h3>
          <p class="card-desc">Experiencia integrando bases de datos, APIs, aplicaciones móviles e inteligencia artificial.</p>
        </div>
        <div class="card">
          <h3 class="card-title">• Análisis Previo</h3>
          <p class="card-desc">Estudio detallado del flujo operativo antes de escribir la primera línea de código.</p>
        </div>
        <div class="card">
          <h3 class="card-title">• Evolución Continua</h3>
          <p class="card-desc">Posibilidad de soporte continuo, mantenimiento y desarrollo de nuevas características.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. SOBRE MÍ -->
  <section class="section-padding" id="sobre-mi" style="background: rgba(15, 23, 42, 0.5);">
    <div class="container">
      <div style="max-width: 850px; margin: 0 auto; background: var(--bg-card); border: 1px solid var(--border-card); border-radius: 24px; padding: 3rem 2.5rem;">
        <span class="section-tag">Fundador & Creador</span>
        <h2 class="hero-title text-gradient" style="font-size: clamp(1.8rem, 3vw, 2.5rem); margin-bottom: 1.25rem;">
          Soy el creador de ConixDev, desarrollador de aplicaciones y soluciones tecnológicas
        </h2>

        <p style="font-size: 1.1rem; color: var(--text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
          Me especializo en convertir ideas y problemas empresariales complejos en aplicaciones sencillas y funcionales. Mi objetivo es ayudar a las empresas a dejar atrás los procesos manuales y trabajar con herramientas digitales creadas específicamente para su realidad.
        </p>

        <p style="font-size: 0.95rem; color: var(--accent-cyan); font-weight: 600; margin-bottom: 2rem;">
          📍 Opero desde Ecuador atendiendo proyectos para empresas nacionales e internacionales.
        </p>

        <!-- Espacios reservados para información profesional y enlaces -->
        <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; align-items: center; border-top: 1px solid var(--border-card); padding-top: 1.5rem;">
          <div style="display: flex; align-items: center; gap: 1rem;">
            <div style="width: 54px; height: 54px; border-radius: 50%; background: linear-gradient(135deg, var(--primary), var(--accent-cyan)); display: flex; align-items: center; justify-content: center; font-weight: 800;">
              CD
            </div>
            <div>
              <strong style="display: block; color: var(--text-main);">Nico López // ConixDev</strong>
              <span style="font-size: 0.85rem; color: var(--text-muted);">Lead Software Developer</span>
            </div>
          </div>

          <div style="margin-left: auto; display: flex; gap: 1rem;">
            <a href="https://linkedin.com" target="_blank" class="quick-link">LinkedIn Profile</a>
            <a href="https://github.com/Nicolopexs" target="_blank" class="quick-link">GitHub Repos</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. LLAMADO A LA ACCIÓN (CTA) -->
  <section class="section-padding text-center">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto; background: linear-gradient(135deg, rgba(99, 102, 241, 0.15), rgba(6, 182, 212, 0.15)); border: 1px solid rgba(99, 102, 241, 0.3); border-radius: 24px; padding: 4rem 2rem;">
        <h2 class="hero-title text-gradient" style="font-size: clamp(2rem, 4vw, 3rem);">
          Cuéntame qué necesita mejorar tu empresa
        </h2>
        <p style="font-size: 1.15rem; color: var(--text-muted); max-width: 650px; margin: 0 auto 2.5rem;">
          No necesitas saber qué tecnología necesitas. Explícame cómo funciona actualmente tu operación y analizaré cómo podría digitalizarse.
        </p>
        <a href="#contacto" class="btn btn-primary" style="font-size: 1.1rem; padding: 1rem 2.25rem;">
          Solicitar diagnóstico empresarial
        </a>
      </div>
    </div>
  </section>

  <!-- 10. FORMULARIO DE CONTACTO PROFESIONAL -->
  <section class="section-padding" id="contacto">
    <div class="container">
      <div class="contact-wrapper">
        <div class="text-center">
          <span class="section-tag">Evaluación Sin Compromiso</span>
          <h2 class="hero-title text-gradient" style="font-size: clamp(2rem, 3.5vw, 2.8rem);">
            Solicita un diagnóstico empresarial
          </h2>
          <p style="color: var(--text-muted); font-size: 0.98rem; margin-bottom: 2rem;">
            Completa la información de tu empresa y analizaré la mejor solución para tu proyecto.
          </p>
        </div>

        <div class="alert-success" id="formSuccessAlert">
          ✔ ¡Diagnóstico solicitado con éxito! He recibido tus datos y analizaré tu caso para ponerme en contacto contigo a la brevedad.
        </div>

        <form id="diagnosticoForm">
          <div class="form-grid">
            <div>
              <label class="form-label" for="nombre">Nombre completo *</label>
              <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ej. Carlos Mendoza" required />
            </div>

            <div>
              <label class="form-label" for="empresa">Nombre de tu empresa *</label>
              <input type="text" id="empresa" name="empresa" class="form-control" placeholder="Ej. Logística Andina S.A." required />
            </div>

            <div>
              <label class="form-label" for="pais">País *</label>
              <input type="text" id="pais" name="pais" class="form-control" placeholder="Ej. Ecuador, Colombia, México..." required />
            </div>

            <div>
              <label class="form-label" for="email">Correo electrónico profesional *</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="carlos@tuempresa.com" required />
            </div>

            <div>
              <label class="form-label" for="whatsapp">WhatsApp de contacto *</label>
              <input type="tel" id="whatsapp" name="whatsapp" class="form-control" placeholder="+593 99 123 4567" required />
            </div>

            <div>
              <label class="form-label" for="tipo_empresa">Tipo / Sector de la empresa *</label>
              <select id="tipo_empresa" name="tipo_empresa" class="form-control" required>
                <option value="">Selecciona una opción...</option>
                <option value="Farmacéutica / Salud">Farmacéutica / Salud</option>
                <option value="Comercial / Distribución">Comercial / Distribución</option>
                <option value="Servicios / Operaciones de Campo">Servicios / Operaciones de Campo</option>
                <option value="Industria / Manufactura">Industria / Manufactura</option>
                <option value="Otra">Otra empresa o sector</option>
              </select>
            </div>

            <div class="form-group-full">
              <label class="form-label" for="proceso_mejorar">¿Qué proceso deseas mejorar o automatizar? *</label>
              <textarea id="proceso_mejorar" name="proceso_mejorar" class="form-control" placeholder="Ej. Actualmente registramos visitas en Excel y queremos controlar la geolocalización de nuestros vendedores en campo..." required></textarea>
            </div>

            <div>
              <label class="form-label" for="usuarios_estimados">¿Cuántos usuarios aproximados tendría el sistema? *</label>
              <select id="usuarios_estimados" name="usuarios_estimados" class="form-control" required>
                <option value="">Selecciona la escala...</option>
                <option value="1 a 10 usuarios">1 a 10 usuarios</option>
                <option value="11 a 50 usuarios">11 a 50 usuarios</option>
                <option value="51 a 200 usuarios">51 a 200 usuarios</option>
                <option value="Más de 200 usuarios">Más de 200 usuarios</option>
              </select>
            </div>

            <div>
              <label class="form-label" for="tipo_solucion">¿Qué tipo de solución buscas? *</label>
              <select id="tipo_solucion" name="tipo_solucion" class="form-control" required>
                <option value="">Selecciona la solución...</option>
                <option value="Aplicación Web Empresarial">Aplicación Web Empresarial</option>
                <option value="Aplicación Móvil (iOS / Android)">Aplicación Móvil (iOS / Android)</option>
                <option value="Sistema de Geolocalización de Campo">Sistema de Geolocalización de Campo</option>
                <option value="Automatización / Inteligencia Artificial">Automatización / Inteligencia Artificial</option>
                <option value="No estoy seguro, necesito asesoría">No estoy seguro, necesito asesoría</option>
              </select>
            </div>

            <div>
              <label class="form-label" for="presupuesto">Presupuesto estimado (Opcional)</label>
              <input type="text" id="presupuesto" name="presupuesto" class="form-control" placeholder="Ej. $1,500 - $5,000 USD" />
            </div>

            <div class="form-group-full">
              <label class="form-label" for="mensaje">Mensaje o detalle adicional</label>
              <textarea id="mensaje" name="mensaje" class="form-control" placeholder="Cualquier detalle relevante sobre los plazos o requerimientos especiales..."></textarea>
            </div>
          </div>

          <div style="margin-top: 2rem; text-align: center;">
            <button type="submit" class="btn btn-primary" style="width: 100%; max-width: 400px; font-size: 1.05rem;">
              Enviar Solicitud de Diagnóstico
            </button>
          </div>
        </form>

        <!-- Botones de contacto rápido -->
        <div class="quick-contact-bar">
          <a href="https://wa.me/593991234567?text=Hola%20ConixDev,%20quisiera%20solicitar%20un%20diagn%C3%B3stico%20de%20software" target="_blank" class="quick-link">
            💬 Contactar por WhatsApp
          </a>
          <a href="mailto:contacto@conixdev.com" class="quick-link">
            ✉️ contacto@conixdev.com
          </a>
          <a href="https://linkedin.com" target="_blank" class="quick-link">
            🔗 Conectar en LinkedIn
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container footer-inner">
      <div>
        <strong style="color: var(--text-main); font-size: 1.1rem;">CONIX<span>DEV</span></strong>
        <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 0.25rem;">
          Desarrollo de Software & Aplicaciones Empresariales a Medida.
        </p>
      </div>

      <div>
        <p>© 2026 ConixDev. Todos los derechos reservados. | conixdev.com</p>
      </div>
    </div>
  </footer>

  <!-- App JavaScript -->
  <script src="{{ asset('js/app.js') }}?v=1.0.0"></script>
  <script>
    // Asset fallback script when static entry is loaded
    if (typeof document.addEventListener !== 'undefined') {
      // Script ready
    }
  </script>
</body>
</html>
