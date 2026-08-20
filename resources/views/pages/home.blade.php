@extends('layouts.main')

@section('title', 'ConixDev — Desarrollamos el software que tu empresa necesita')
@section('description', 'Desarrollo de aplicaciones y software empresarial a medida. Transformamos procesos manuales, Excel y WhatsApp en sistemas operativos eficientes.')

@section('content')
<!-- HERO PRINCIPAL — Impacto Inmediato Sin Frases Genéricas -->
<section style="padding-top: 9.5rem; padding-bottom: 5rem; position: relative;">
  <div class="canvas-glow-1"></div>
  <div class="container" style="text-align: center;">
    <div class="trust-badge">
      <span class="trust-badge-dot"></span>
      Software Empresarial Construido a Medida
    </div>

    <h1 class="title-hero" style="max-width: 980px; margin: 0 auto 1.5rem;">
      Desarrollamos el <span class="text-gradient">software que tu empresa necesita</span>
    </h1>

    <p style="font-size: clamp(1.1rem, 2vw, 1.35rem); color: var(--text-muted); max-width: 780px; margin: 0 auto 2.5rem; line-height: 1.6;">
      Analizamos los problemas de tu operación y construimos aplicaciones web y móviles personalizadas para que tu empresa controle mejor su trabajo y automatice sus procesos.
    </p>

    <div style="display: flex; gap: 1.25rem; justify-content: center; flex-wrap: wrap; margin-bottom: 3.5rem;">
      <a href="{{ url('/diagnostico') }}" class="btn-action btn-primary-glow" style="padding: 0.95rem 2rem; font-size: 1rem;">
        <span>Hablar con ConixDev</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round"/></svg>
      </a>
      <a href="#cassara-case" class="btn-action btn-secondary-dark" style="padding: 0.95rem 2rem; font-size: 1rem;">
        <span>Ver Trabajo Real</span>
      </a>
    </div>

    <!-- PREVISUALIZACIÓN INTERACTIVA DE SOFTWARE REAL -->
    <div class="hero-software-showcase" id="software-demo">
      <div class="showcase-tab-bar">
        <div class="showcase-window-dots">
          <span class="window-dot dot-r"></span>
          <span class="window-dot dot-y"></span>
          <span class="window-dot dot-g"></span>
        </div>
        
        <div class="showcase-tab-items">
          <button class="tab-btn active" data-tab="tab-gps">📍 Geolocalización & Campo</button>
          <button class="tab-btn" data-tab="tab-ia">🤖 Escaneo IA Facturas</button>
          <button class="tab-btn" data-tab="tab-dash">📊 Dashboard Operativo</button>
        </div>
      </div>

      <div class="showcase-body">
        <!-- Panel 1: Geolocalización GPS -->
        <div class="showcase-panel active" id="tab-gps">
          <div class="panel-card">
            <div class="panel-label">Trazabilidad de Terreno</div>
            <div class="panel-value text-cyan">GPS Activo</div>
            <p style="font-size: 0.88rem; color: var(--text-muted);">Verificación por coordenadas en cada visita médica o comercial.</p>
          </div>
          <div class="panel-card">
            <div class="panel-label">Control de Visitas</div>
            <div class="panel-value" style="color: #34d399;">Reporte en Vivo</div>
            <p style="font-size: 0.88rem; color: var(--text-muted);">Registro inmediato de actividades sin usar WhatsApp ni archivos sueltos.</p>
          </div>
          <div class="panel-card">
            <div class="panel-label">Cobertura de Rutas</div>
            <div class="panel-value" style="color: #818cf8;">Rutas en Mapa</div>
            <p style="font-size: 0.88rem; color: var(--text-muted);">Supervisión directa del avance de metas en tiempo real.</p>
          </div>
        </div>

        <!-- Panel 2: Inteligencia Artificial Facturas -->
        <div class="showcase-panel" id="tab-ia">
          <div class="panel-card">
            <div class="panel-label">Extracción de Datos</div>
            <div class="panel-value" style="color: #34d399;">OCR + IA</div>
            <p style="font-size: 0.88rem; color: var(--text-muted);">Lectura de RUC, monto e ítems automáticamente al tomar una foto.</p>
          </div>
          <div class="panel-card">
            <div class="panel-label">Organización masiva</div>
            <div class="panel-value text-cyan">Lotes de Gastos</div>
            <p style="font-size: 0.88rem; color: var(--text-muted);">Clasificación instantánea de comprobantes deducibles y no deducibles.</p>
          </div>
        </div>

        <!-- Panel 3: Dashboard Ejecutivo -->
        <div class="showcase-panel" id="tab-dash">
          <div class="panel-card">
            <div class="panel-label">Indicadores KPIs</div>
            <div class="panel-value" style="color: #818cf8;">Automático</div>
            <p style="font-size: 0.88rem; color: var(--text-muted);">Consolidado ejecutivo en tiempo real para tomar decisiones con información real.</p>
          </div>
          <div class="panel-card">
            <div class="panel-label">Permisos de Usuario</div>
            <div class="panel-value text-cyan">Roles & Accesos</div>
            <p style="font-size: 0.88rem; color: var(--text-muted);">Seguridad para administradores, supervisores y personal de campo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2. PROBLEMA OPERATIVO REAL -->
<section class="section-spacing" style="background: rgba(14, 22, 38, 0.4); border-top: 1px solid var(--border-subtle);">
  <div class="container">
    <div style="text-align: center; max-width: 820px; margin: 0 auto 3rem;">
      <span class="trust-badge">Diagnóstico de Operaciones</span>
      <h2 class="title-section">
        ¿Tu empresa pierde tiempo y control por operar en <span class="text-gradient">Excel y WhatsApp</span>?
      </h2>
    </div>

    <div class="cards-layout-grid">
      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Falta de trazabilidad de campo</h3>
        <p class="body-sm">No sabes con certeza dónde está trabajando tu personal ni si las visitas fueron realizadas en el lugar adecuado.</p>
      </div>

      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Información dispersa</h3>
        <p class="body-sm">Los datos clave de tu negocio están fragmentados en conversaciones de WhatsApp, correos e historial no centralizado.</p>
      </div>

      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Reportes manuales lentos</h3>
        <p class="body-sm">Tus líderes gastan horas valiosas armando reportes a mano que deberían generarse automáticamente en segundos.</p>
      </div>

      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Pérdida de tiempo en documentos</h3>
        <p class="body-sm">Personal ordenando facturas físicas o rindiendo gastos comprobante por comprobante manualmente.</p>
      </div>

      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Errores de tipeo e inconsistencias</h3>
        <p class="body-sm">Ingreso manual de información que provoca duplicaciones, pérdidas de registros e información poco confiable.</p>
      </div>

      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Sin software a tu medida</h3>
        <p class="body-sm">Los programas genéricos del mercado obligan a tu empresa a cambiar su forma de trabajar, en lugar de adaptarse a ti.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3. EVIDENCIA REAL: CASO ESTRELLA CASSARÁ ECUADOR -->
<section class="section-spacing" id="cassara-case">
  <div class="container">
    <div class="case-study-hero-card">
      <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 1.5rem;">
        <div>
          <span class="trust-badge" style="margin-bottom: 0.75rem;">Proyecto Real Entregado</span>
          <h2 class="title-section">Caso de Éxito: <span class="text-gradient">Cassará Ecuador</span></h2>
        </div>
        <a href="{{ url('/casos-de-exito/cassara-ecuador') }}" class="btn-action btn-primary-glow">
          <span>Ver caso de estudio en detalle</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round"/></svg>
        </a>
      </div>

      <p style="font-size: 1.15rem; color: var(--text-muted); max-width: 820px; margin-bottom: 2rem; line-height: 1.7;">
        Cassará Ecuador es una plataforma empresarial desarrollada por ConixDev a la medida de la industria farmacéutica para digitalizar y supervisar la operación completa de sus visitadores médicos en terreno.
      </p>

      <div class="case-grid-capabilities">
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Geolocalización GPS de visitadores</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Registro y auditoría de visitas</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Gestión de médicos y farmacias</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Escaneo de facturas con IA</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Organización de gastos por lotes</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Dashboard de avance de ciclos</span>
        </div>
      </div>

      <div style="background: rgba(6, 182, 212, 0.06); border-left: 4px solid var(--brand-cyan); padding: 1.5rem 1.75rem; border-radius: 0 var(--radius-sm) var(--radius-sm) 0; font-style: italic; color: var(--text-main); font-size: 1.05rem;">
        “Demostramos con hechos que convertimos requerimientos operativos complejos en software empresarial funcional y fácil de usar.”
      </div>
    </div>
  </div>
</section>

<!-- 4. CAPACIDADES DESDE LA PERSPECTIVA DEL CLIENTE -->
<section class="section-spacing" style="background: rgba(14, 22, 38, 0.4); border-top: 1px solid var(--border-subtle);">
  <div class="container">
    <div style="text-align: center; max-width: 800px; margin: 0 auto 3rem;">
      <span class="trust-badge">Nuestras Soluciones</span>
      <h2 class="title-section">¿Qué construimos para tu empresa?</h2>
    </div>

    <div class="cards-layout-grid">
      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Aplicaciones Empresariales</h3>
        <p class="body-sm">Plataformas completas para administrar, supervisar y controlar las operaciones internas de tu negocio desde cualquier navegador.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Aplicaciones Móviles</h3>
        <p class="body-sm">Apps para smartphones diseñadas para equipos que trabajan fuera de la oficina o para interacción directa con tus clientes.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Automatización de Procesos</h3>
        <p class="body-sm">Convertimos tareas manuales repetitivas en flujos digitales automáticos para ahorrar cientos de horas a tu personal.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Sistemas de Geolocalización</h3>
        <p class="body-sm">Verificación GPS y mapas interactivos para confirmar rutas, entregas y visitas en terreno de tu equipo operativo.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Inteligencia y Datos</h3>
        <p class="body-sm">Dashboards ejecutivos y reportes que consolidan la información crítica de tu empresa para la toma de decisiones.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Integraciones</h3>
        <p class="body-sm">Conectamos tu nuevo software con las herramientas, bases de datos o pasarelas de pago que tu empresa ya utiliza.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5. ORGULLO ECUATORIANO & EQUIPO REAL -->
<section class="section-spacing">
  <div class="container">
    <div class="ecuador-pride-banner">
      <span class="trust-badge" style="margin-bottom: 1rem;">Ingeniería de Nivel Internacional</span>
      <h2 class="title-section" style="max-width: 850px; margin: 0 auto 1.25rem;">
        Desde <span class="text-gradient">Ecuador</span>, construimos software para empresas que quieren crecer
      </h2>
      <p style="font-size: 1.15rem; color: var(--text-muted); max-width: 750px; margin: 0 auto 2rem; line-height: 1.7;">
        En ConixDev no vendemos plantillas improvisadas. Nos enfocamos en entender a fondo el problema de tu negocio y programar herramientas robustas diseñadas para durar.
      </p>

      <div style="display: flex; gap: 1.5rem; justify-content: center; align-items: center; flex-wrap: wrap; border-top: 1px solid var(--border-subtle); padding-top: 2rem; max-width: 600px; margin: 0 auto;">
        <div>
          <strong style="font-size: 1.1rem; color: var(--text-main); display: block;">Nico López // ConixDev</strong>
          <span style="font-size: 0.88rem; color: var(--text-muted);">Lead Software Engineer & Fundador</span>
        </div>
        <div style="display: flex; gap: 0.75rem;">
          <a href="{{ url('/nosotros') }}" class="btn-action btn-secondary-dark" style="padding: 0.5rem 1rem; font-size: 0.88rem;">
            Conoce nuestra filosofía →
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 6. CONTACTO RIDÍCULAMENTE FÁCIL -->
<section class="section-spacing" id="contacto-directo" style="background: rgba(14, 22, 38, 0.4); border-top: 1px solid var(--border-subtle);">
  <div class="container">
    <div class="contact-simple-card">
      <div style="text-align: center; margin-bottom: 2rem;">
        <span class="trust-badge">Comunicación Directa</span>
        <h2 class="title-section" style="font-size: clamp(1.8rem, 3vw, 2.5rem);">
          Hablar con ConixDev
        </h2>
        <p style="color: var(--text-muted); font-size: 1rem; margin-top: 0.5rem;">
          Cuéntanos brevemente qué necesita tu empresa y analizaremos tu proyecto.
        </p>
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
          <input type="text" id="empresa" name="empresa" class="form-input-simple" placeholder="Ej. Logística Andina S.A." required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="whatsapp">WhatsApp o Correo de contacto *</label>
          <input type="text" id="whatsapp" name="whatsapp" class="form-input-simple" placeholder="Ej. +593 99 123 4567 o correo@empresa.com" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="proceso_mejorar">Cuéntanos brevemente qué necesitas o deseas mejorar *</label>
          <textarea id="proceso_mejorar" name="proceso_mejorar" class="form-input-simple" placeholder="Ej. Queremos controlar las visitas de nuestro personal de campo con geolocalización..." required></textarea>
        </div>

        <div style="margin-top: 2rem; text-align: center;">
          <button type="submit" class="btn-action btn-primary-glow" style="width: 100%; font-size: 1rem;">
            Enviar Mensaje a ConixDev
          </button>
        </div>
      </form>

      <div style="margin-top: 2rem; text-align: center; border-top: 1px solid var(--border-subtle); padding-top: 1.5rem;">
        <a href="https://wa.me/593962761063?text=Hola%20ConixDev,%20quisiera%20consultar%20sobre%20un%20proyecto%20de%20software" target="_blank" style="color: var(--brand-cyan-glow); font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
          <span>💬 O si prefieres, escríbenos directamente por WhatsApp (+593 96 276 1063)</span>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
