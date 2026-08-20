@extends('layouts.main')

@section('title', 'Empresa de Desarrollo de Software a Medida en Ecuador | ConixDev')
@section('description', 'Desarrollo de software empresarial, aplicaciones móviles y automatización con IA en Ecuador. Creamos sistemas a medida para controlar y escalar tu operación.')

@section('content')
<section class="hero-surface">
  <div class="hero-bg-glow"></div>
  <div class="container hero-container">
    <div class="hero-copy">
      <div class="hero-kicker">
        <span class="hero-kicker-pulse"></span> Cassará Ecuador · Demo En Vivo
      </div>
      <h1 class="hero-title">Tu operación, <span>en una sola vista.</span></h1>
      <p class="hero-lead">Conectamos personas, procesos y geolocalización GPS en tiempo real para que tu empresa controle el campo con claridad total.</p>
      <div class="hero-actions">
        <a href="{{ url('/diagnostico') }}" class="btn-action btn-primary-glow">
          <span>Diseñar mi sistema</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round"/></svg>
        </a>
        <a href="#cassara-case" class="hero-text-link">Ver Caso Cassará Ecuador <span>↗</span></a>
      </div>
      <div class="hero-signal-line">
        <span class="hero-signal-line-dot"></span>
        <span>Demostración de Geolocalización GPS</span>
        <span class="hero-signal-line-arrow">→</span>
        <span>Quito, Ecuador</span>
      </div>
    </div>

    <div class="hero-cassara-demo">
      <!-- Barra Superior de Métricas Operativas (Copia Screenshot 3) -->
      <div class="cassara-top-stats">
        <div class="cassara-stat-item">
          <span class="stat-icon">🚶</span>
          <div>
            <small>DISTANCIA</small>
            <strong id="cassaraStatDist">8.65 km</strong>
          </div>
        </div>
        <div class="cassara-stat-item">
          <span class="stat-icon">⏱️</span>
          <div>
            <small>DURACIÓN JORNADA</small>
            <strong id="cassaraStatDuration">07:14:30</strong>
          </div>
        </div>
        <div class="cassara-stat-item">
          <span class="stat-icon">🎯</span>
          <div>
            <small>VISITAS</small>
            <strong id="cassaraStatVisits">8</strong>
          </div>
        </div>
        <div class="cassara-stat-item">
          <span class="stat-icon">📍</span>
          <div>
            <small>PUNTOS GPS</small>
            <strong id="cassaraStatGps">353</strong>
          </div>
        </div>
        <div class="cassara-live-badge">
          <span class="live-dot"></span>
          <span>En vivo | Última señal: <strong id="cassaraLiveTime">16:43:36 (hace 47s)</strong></span>
        </div>
      </div>

      <!-- Barra de Controles y Leyenda -->
      <div class="cassara-toolbar">
        <div class="cassara-legend">
          <span class="legend-title">LEYENDA:</span>
          <span class="legend-tag tag-route"><i class="dot-route"></i> Ruta</span>
          <span class="legend-tag tag-start"><i class="dot-start"></i> Inicio</span>
          <span class="legend-tag tag-end"><i class="dot-end"></i> Fin</span>
          <span class="legend-tag tag-effective"><i class="dot-effective"></i> Visita Efectiva</span>
        </div>
        <div class="cassara-controls">
          <button id="btnReproducirRuta" class="btn-cassara-play">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg>
            <span>Reproducir Ruta</span>
          </button>
          <button id="btnCentrarMapa" class="btn-cassara-btn">Centrar</button>
          <div class="cassara-visit-pills">
            <button class="visit-pill active" data-visit="1">1</button>
            <button class="visit-pill" data-visit="2">2</button>
            <button class="visit-pill" data-visit="3">3</button>
            <button class="visit-pill" data-visit="4">4</button>
            <button class="visit-pill" data-visit="5">5</button>
            <button class="visit-pill" data-visit="6">6</button>
            <button class="visit-pill" data-visit="7">7</button>
            <button class="visit-pill" data-visit="8">8</button>
          </div>
        </div>
      </div>

      <!-- Contenedor del Mapa Interactivo y Modal Detalle -->
      <div class="cassara-map-wrapper">
        <div id="quitoMapContainer" class="quito-map-frame"></div>

        <!-- Tarjeta Flotante Detalle de Visita Médica (Copia Screenshot 4) -->
        <div id="cassaraDoctorModal" class="doctor-detail-card">
          <button id="closeDoctorModal" class="card-close-btn" aria-label="Cerrar">&times;</button>
          <div class="doctor-card-header">
            <span class="doc-num-pill" id="modalVisitNum">1</span>
            <span class="doc-role-badge">👨‍⚕️ MÉDICO</span>
            <span class="doc-status-badge tag-effective" id="modalVisitStatus">Visita Efectiva</span>
          </div>
          <h3 class="doctor-name" id="modalDocName">Dr. Jose Manolo Maestre Guzman</h3>
          <div class="doctor-meta">
            <span>📅 20/8/2026</span>
            <span>🕒 <strong id="modalVisitTime">10:15</strong></span>
          </div>
          <div class="doctor-notes" id="modalVisitNotes">
            <strong>Notas:</strong> Dr. Manolo agradece la visita. Confirma recepción de muestras médicas y catálogo de productos.
          </div>
          <div class="samples-table-wrap">
            <div class="samples-table-head">
              <span>💧 MUESTRAS MÉDICAS</span>
              <small>PLAN / ENTR</small>
            </div>
            <table class="samples-table">
              <thead>
                <tr>
                  <th>Producto (MM)</th>
                  <th style="text-align:center;">P</th>
                  <th style="text-align:center;">E</th>
                </tr>
              </thead>
              <tbody id="modalSamplesBody">
                <tr><td>MEDICAMENTO DEMO A X 250 DOSIS</td><td align="center">1</td><td align="center" class="text-green">1</td></tr>
                <tr><td>MEDICAMENTO DEMO B X 100 MG</td><td align="center">1</td><td align="center" class="text-green">1</td></tr>
                <tr><td>FÁRMACO GENÉRICO C X 200 DOSIS</td><td align="center">1</td><td align="center" class="text-green">1</td></tr>
                <tr><td>SOLUCIÓN ORAL DEMO X 150 ML</td><td align="center">1</td><td align="center" class="text-green">1</td></tr>
                <tr><td>CÁPSULAS DE CONTROL D X 30 UNID</td><td align="center">1</td><td align="center" class="text-green">1</td></tr>
                <tr><td>JARABE MULTIVITAMÍNICO E X 200 ML</td><td align="center">1</td><td align="center" class="text-green">1</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="hero-proof-row">
      <span>Sistema de Geolocalización y Control de Operaciones · ConixDev Ecuador</span>
      <div><b>01</b> Rastreo GPS <b>02</b> Reportes Médicos <b>03</b> Muestras Entregadas</div>
    </div>
  </div>
</section>

<!-- 2. PILARES DE SERVICIOS — Soluciones de Software de Alto Nivel -->
<section class="section-spacing section-alt-bg">
  <div class="container">
    <div style="text-align: center; max-width: 820px; margin: 0 auto 2.5rem;">
      <span class="trust-badge" style="margin-bottom: 0.75rem;">Capacidades de Ingeniería</span>
      <h2 class="title-section">Soluciones de Software que Impulsan tu Negocio</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; margin-top: 0.75rem;">
        Desarrollamos soluciones tecnológicas con arquitecturas modernas, escalables y seguras, diseñadas a la medida exacta de tus requerimientos.
      </p>
    </div>

    <div class="cards-layout-grid" style="margin-top: 1.5rem;">
      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Desarrollo de Software a Medida</h3>
        <p class="body-sm" style="margin-bottom: 1rem;">Plataformas web corporativas que centralizan la administración, automatizan flujos operativos y eliminan los errores del ingreso manual.</p>
        <a href="{{ url('/software-empresarial') }}" style="color: var(--brand-cyan-glow); font-weight: 600; font-size: 0.9rem; text-decoration: none;">Ver Software Empresarial →</a>
      </div>

      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Desarrollo de Aplicaciones Móviles</h3>
        <p class="body-sm" style="margin-bottom: 1rem;">Apps para iOS y Android con sincronización offline, geolocalización GPS y captura de datos en terreno para personal comercial y técnico.</p>
        <a href="{{ url('/desarrollo-aplicaciones-moviles') }}" style="color: var(--brand-cyan-glow); font-weight: 600; font-size: 0.9rem; text-decoration: none;">Ver Apps Móviles →</a>
      </div>

      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 2a10 10 0 1 0 10 10H12V2z"/><path d="M12 2a10 10 0 0 1 10 10"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Automatización de Procesos con IA</h3>
        <p class="body-sm" style="margin-bottom: 1rem;">Lectura óptica de documentos y facturas (OCR con Inteligencia Artificial), procesamiento masivo de datos y sincronización de inventarios.</p>
        <a href="{{ url('/automatizacion-procesos') }}" style="color: var(--brand-cyan-glow); font-weight: 600; font-size: 0.9rem; text-decoration: none;">Ver Automatización con IA →</a>
      </div>

      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Arquitectura e Integración de APIs</h3>
        <p class="body-sm" style="margin-bottom: 1rem;">Conexión de sistemas con el SRI (facturación electrónica), pasarelas de pago (Kushki, Payphone, Stripe), ERPs y plataformas contables.</p>
        <a href="{{ url('/desarrollo-software-ecuador') }}" style="color: var(--brand-cyan-glow); font-weight: 600; font-size: 0.9rem; text-decoration: none;">Ver Integraciones en Ecuador →</a>
      </div>
    </div>
  </div>
</section>

<!-- 3. INDUSTRIAS Y SECTORES ATENDIDOS -->
<section class="section-spacing">
  <div class="container">
    <div style="text-align: center; max-width: 820px; margin: 0 auto 2.5rem;">
      <span class="trust-badge" style="margin-bottom: 0.75rem;">Sectores Productivos</span>
      <h2 class="title-section">Experiencia en Industrias Clave</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; margin-top: 0.75rem;">
        Entendemos las regulaciones, flujos y desafíos técnicos específicos de diferentes sectores en Ecuador y la región.
      </p>
    </div>

    <div class="cards-layout-grid" style="margin-top: 1.5rem;">
      <div class="card-box">
        <div style="font-size: 2rem; margin-bottom: 0.75rem;">🏥</div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Farmacéutica & Salud</h3>
        <p class="body-sm">Plataformas de supervisión médica, auditoría de visitas en consultorios y farmacias, y control de muestras con trazabilidad por coordenadas GPS.</p>
      </div>

      <div class="card-box">
        <div style="font-size: 2rem; margin-bottom: 0.75rem;">🚚</div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Distribución & Logística</h3>
        <p class="body-sm">Sistemas de liquidación de rutas, control de pedidos en terreno, gestión de despachos y confirmación de entregas con firma digital.</p>
      </div>

      <div class="card-box">
        <div style="font-size: 2rem; margin-bottom: 0.75rem;">💳</div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Finanzas & Facturación SRI</h3>
        <p class="body-sm">Módulos de emisión masiva de comprobantes electrónicos, retenciones, notas de crédito y conciliación bancaria automatizada.</p>
      </div>

      <div class="card-box">
        <div style="font-size: 2rem; margin-bottom: 0.75rem;">🏢</div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Empresas Corporativas & Servicios</h3>
        <p class="body-sm">Portales de autoservicio para clientes, gestión de contratos, flujos de aprobación interna y reportería ejecutiva consolidada.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4. CASO DE ÉXITO ESTRELLA: CASSARÁ ECUADOR -->
<section class="section-spacing section-alt-bg" id="cassara-case">
  <div class="container">
    <div class="case-study-hero-card">
      <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 1.5rem;">
        <div>
          <span class="trust-badge" style="margin-bottom: 0.75rem;">Caso de Estudio Real</span>
          <h2 class="title-section">Caso de Éxito: <span class="text-gradient">Cassará Ecuador</span></h2>
        </div>
        <a href="{{ url('/casos-de-exito/cassara-ecuador') }}" class="btn-action btn-primary-glow">
          <span>Ver Caso Completo</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round"/></svg>
        </a>
      </div>

      <p style="font-size: 1.15rem; color: var(--text-muted); max-width: 820px; margin-bottom: 2rem; line-height: 1.7;">
        Cassará Ecuador es una plataforma empresarial desarrollada por ConixDev a la medida de la industria farmacéutica para digitalizar y auditar la operación completa de sus visitadores médicos en terreno a nivel nacional.
      </p>

      <div class="case-grid-capabilities">
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Geolocalización GPS en consultorios</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Auditoría de visitas médicas</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Lectura OCR de facturas con IA</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Dashboard de avance de ciclos</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5. METODOLOGÍA DE INGENIERÍA — Cómo Trabajamos -->
<section class="section-spacing">
  <div class="container">
    <div style="text-align: center; max-width: 820px; margin: 0 auto 2.5rem;">
      <span class="trust-badge" style="margin-bottom: 0.75rem;">Metodología Probada</span>
      <h2 class="title-section">Nuestro Proceso de Ingeniería</h2>
      <p style="color: var(--text-muted); font-size: 1.05rem; margin-top: 0.75rem;">
        Garantizamos entregas predecibles, código de calidad y transparencia en cada etapa de tu proyecto.
      </p>
    </div>

    <div class="cards-layout-grid" style="margin-top: 1.5rem;">
      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--brand-cyan-glow); font-weight: 700;">PASO 01</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Diagnóstico & Arquitectura</h3>
        <p class="body-sm">Analizamos a fondo los flujos operativos de tu empresa, definimos el modelo de datos y seleccionamos la arquitectura tecnológica óptima.</p>
      </div>

      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--brand-cyan-glow); font-weight: 700;">PASO 02</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Diseño UX/UI & Prototipado</h3>
        <p class="body-sm">Diseñamos interfaces intuitivas y funcionales para que tu equipo aprenda a utilizar el sistema rápidamente y sin resistencia al cambio.</p>
      </div>

      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--brand-cyan-glow); font-weight: 700;">PASO 03</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Desarrollo Ágil & Clean Code</h3>
        <p class="body-sm">Programamos con altos estándares de calidad, seguridad y pruebas continuas. Entregamos avances funcionales cada dos semanas.</p>
      </div>

      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--brand-cyan-glow); font-weight: 700;">PASO 04</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Despliegue & Código 100% Tuyo</h3>
        <p class="body-sm">Implementamos en la nube (AWS / DigitalOcean / Cloudflare), capacitamos a tu personal y te entregamos la propiedad total del código fuente.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6. POR QUÉ ELEGIR CONIXDEV (Diferenciadores Clave) -->
<section class="section-spacing section-alt-bg">
  <div class="container">
    <div style="text-align: center; max-width: 820px; margin: 0 auto 2.5rem;">
      <span class="trust-badge" style="margin-bottom: 0.75rem;">Ventajas Competitivas</span>
      <h2 class="title-section">Por Qué Empresas Confían en ConixDev</h2>
    </div>

    <div class="cards-layout-grid" style="margin-top: 1.5rem;">
      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Propiedad Total del Software</h3>
        <p class="body-sm">No cobramos rentas mensuales por usuario. Tu empresa es la dueña absoluta del código fuente y de la base de datos.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Soporte Local y Directo</h3>
        <p class="body-sm">Atención directa con ingenieros de software en Ecuador sin tickets lentos ni intermediarios que no entienden tu negocio.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Cumplimiento Legal y SRI</h3>
        <p class="body-sm">Sistemas preparados para la normativa tributaria ecuatoriana, facturación electrónica y retenciones del SRI.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Escalabilidad y Seguridad</h3>
        <p class="body-sm">Arquitecturas en la nube preparadas para crecer con tu empresa sin caídas de servidor ni pérdidas de rendimiento.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7. PREGUNTAS FRECUENTES (SEO FAQ) -->
<section class="section-spacing">
  <div class="container" style="max-width: 900px;">
    <div style="text-align: center; margin-bottom: 2.5rem;">
      <span class="trust-badge" style="margin-bottom: 0.75rem;">Respuestas Claras</span>
      <h2 class="title-section">Preguntas Frecuentes sobre Desarrollo de Software</h2>
    </div>

    <div style="display: flex; flex-direction: column; gap: 1.25rem;">
      <div class="card-box">
        <h3 style="font-size: 1.15rem; color: var(--text-main); margin-bottom: 0.5rem; font-weight: 700;">¿Cuánto cuesta desarrollar un software a medida en Ecuador?</h3>
        <p class="body-sm">En ConixDev, los proyectos de software empresarial y prototipos funcionales inician a partir de <strong>$3,000 USD</strong>. El costo final depende de la cantidad de módulos, usuarios, integraciones con APIs externas y si requiere aplicaciones móviles complementarias.</p>
      </div>

      <div class="card-box">
        <h3 style="font-size: 1.15rem; color: var(--text-main); margin-bottom: 0.5rem; font-weight: 700;">¿Cuánto tiempo toma construir una plataforma empresarial?</h3>
        <p class="body-sm">Un sistema modular o versión inicial (MVP) suele tomar entre <strong>6 y 10 semanas</strong> de desarrollo. Proyectos corporativos más complejos con múltiples integraciones pueden tomar entre 3 y 5 meses con entregas quincenales funcionales.</p>
      </div>

      <div class="card-box">
        <h3 style="font-size: 1.15rem; color: var(--text-main); margin-bottom: 0.5rem; font-weight: 700;">¿El software desarrollado le pertenece al 100% a mi empresa?</h3>
        <p class="body-sm">Sí, absolutamente. En ConixDev entregamos el código fuente completo, documentación técnica y accesos a la infraestructura en la nube. Tu empresa no queda atada a pagos mensuales por licencia ni a exclusividad de proveedor.</p>
      </div>

      <div class="card-box">
        <h3 style="font-size: 1.15rem; color: var(--text-main); margin-bottom: 0.5rem; font-weight: 700;">¿Cómo se integra el software con la facturación electrónica del SRI?</h3>
        <p class="body-sm">Construimos servicios de integración directa con los Web Services del SRI para emisión de facturas XML, firma electrónica (.p12), autorización automática y envío de RIDE por correo electrónico.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8. FORMULARIO DE CONTACTO DIRECTO -->
<section class="section-spacing section-alt-bg" id="contacto-directo">
  <div class="container">
    <div class="contact-simple-card">
      <div style="text-align: center; margin-bottom: 2rem;">
        <span class="trust-badge" style="margin-bottom: 0.75rem;">Evaluación de Proyecto</span>
        <h2 class="title-section" style="margin-bottom: 0.5rem;">Inicia tu Proyecto de Software con <span class="text-gradient">ConixDev</span></h2>
        <p style="color: var(--text-muted); font-size: 1.05rem;">Analizamos los requerimientos de tu empresa y te entregamos una propuesta técnica clara.</p>
      </div>

      <div id="contactSuccessAlert" style="display: none; background: rgba(6, 182, 212, 0.15); border: 1px solid rgba(6, 182, 212, 0.3); color: var(--brand-cyan-glow); padding: 1.25rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem; text-align: center; font-weight: 600;">
        ✔ ¡Mensaje recibido! Nos pondremos en contacto contigo a la brevedad.
      </div>

      <form id="conixdevContactForm">
        <div class="form-field-group">
          <label class="form-label-simple" for="nombre">Nombre completo *</label>
          <input type="text" id="nombre" name="nombre" class="form-input-simple" placeholder="Ej. Carlos Mendoza" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="empresa">Nombre de tu empresa *</label>
          <input type="text" id="empresa" name="empresa" class="form-input-simple" placeholder="Ej. Corporación Andina S.A." required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="whatsapp">WhatsApp o Correo de contacto *</label>
          <input type="text" id="whatsapp" name="whatsapp" class="form-input-simple" placeholder="Ej. +593 96 276 1063 o correo@empresa.com" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="presupuesto">Presupuesto estimado del proyecto *</label>
          <select id="presupuesto" name="presupuesto" class="form-input-simple" required style="cursor: pointer; appearance: auto;">
            <option value="" disabled selected>Selecciona un rango de presupuesto...</option>
            <option value="$3,000 - $5,000 USD">$3,000 – $5,000 USD (Prototipo / Módulo Base)</option>
            <option value="$5,000 - $10,000 USD">$5,000 – $10,000 USD (Sistema Empresarial Completo)</option>
            <option value="Más de $10,000 USD">Más de $10,000 USD (Plataforma Corporativa Avanzada)</option>
          </select>
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="proceso_mejorar">Cuéntanos brevemente qué necesita tu empresa *</label>
          <textarea id="proceso_mejorar" name="proceso_mejorar" class="form-input-simple" placeholder="Ej. Necesitamos un sistema web para controlar operaciones, visitas en terreno y sincronizar facturas..." required></textarea>
        </div>

        <div style="margin-top: 1.75rem; text-align: center;">
          <button type="submit" class="btn-action btn-primary-glow" style="width: 100%; font-size: 1rem;">
            Enviar Consulta a ConixDev
          </button>
        </div>
      </form>

      <div style="margin-top: 2rem; text-align: center; border-top: 1px solid var(--border-subtle); padding-top: 1.5rem;">
        <a href="https://wa.me/593962761063?text=Hola%20ConixDev,%20quisiera%20consultar%20sobre%20un%20proyecto%20de%20desarrollo%20de%20software" target="_blank" class="btn-whatsapp-brand">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="#25D366" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.461c-1.854 0-3.674-.497-5.263-1.442l-.377-.225-3.916 1.027 1.045-3.819-.247-.393c-1.038-1.652-1.587-3.585-1.587-5.566 0-5.74 4.671-10.411 10.413-10.411 2.781 0 5.397 1.082 7.362 3.049 1.964 1.966 3.045 4.582 3.045 7.363 0 5.742-4.671 10.417-10.475 10.417M12.051 0C5.395 0 0 5.393 0 12.05c0 2.128.556 4.204 1.614 6.035L0 24l6.097-1.599c1.764.962 3.753 1.47 5.952 1.47 6.657 0 12.051-5.395 12.051-12.052C24.1 5.393 18.707 0 12.051 0z"/>
          </svg>
          <span>WhatsApp Directo: +593 96 276 1063</span>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
