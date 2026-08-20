@extends('layouts.main')

@section('title', 'Caso de Éxito: Cassará Ecuador | ConixDev Software')
@section('description', 'Estudio de caso visual de la plataforma empresarial desarrollada a medida por ConixDev para Cassará Ecuador: geolocalización de visitadores y escaneo de facturas con IA.')
@section('canonical', 'https://conixdev.com/casos-de-exito/cassara-ecuador')

@section('content')
<!-- SCHEMA.ORG JSON-LD CASE STUDY -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Article",
      "@id": "https://conixdev.com/casos-de-exito/cassara-ecuador#article",
      "headline": "Caso de Éxito: Plataforma Empresarial Cassará Ecuador",
      "description": "Estudio de caso del software desarrollado por ConixDev para la farmacéutica Cassará Ecuador, digitalizando la supervisión con geolocalización GPS y lectura OCR de facturas con IA.",
      "author": {
        "@type": "Organization",
        "name": "ConixDev"
      },
      "publisher": {
        "@type": "Organization",
        "name": "ConixDev",
        "url": "https://conixdev.com"
      },
      "inLanguage": "es"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Inicio",
          "item": "https://conixdev.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Casos de Éxito",
          "item": "https://conixdev.com/casos-de-exito"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Cassará Ecuador",
          "item": "https://conixdev.com/casos-de-exito/cassara-ecuador"
        }
      ]
    }
  ]
}
</script>
<section style="padding-top: 7rem; padding-bottom: 2.5rem;">
  <div class="container">
    <div style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 1rem;">
      <a href="{{ url('/') }}" style="color: var(--text-muted); text-decoration: none;">Inicio</a> / 
      <a href="{{ url('/casos-de-exito') }}" style="color: var(--text-muted); text-decoration: none;">Casos de Éxito</a> / 
      <span style="color: var(--brand-cyan-glow);">Cassará Ecuador</span>
    </div>
    <span class="trust-badge">Caso de Estudio Estrella</span>
    <h1 class="title-hero" style="margin-bottom: 1rem;">
      Caso de Éxito: <span class="text-gradient">Cassará Ecuador</span>
    </h1>
    <p style="font-size: 1.2rem; color: var(--text-muted); max-width: 820px;">
      Plataforma empresarial construida a medida para digitalizar, controlar y auditar la operación de visitadores médicos en terreno.
    </p>
  </div>
</section>

<section class="section-spacing">
  <div class="container">
    
    <!-- 🎥 SECCIÓN 1: REPRODUCTOR Y ESPACIO PARA VIDEO DEMOSTRATIVO -->
    <div style="margin-bottom: 4rem;">
      <div style="text-align: center; max-width: 750px; margin: 0 auto 2rem;">
        <span class="trust-badge">Demostración en Video</span>
        <h2 class="title-section" style="font-size: 2rem;">Recorrido en Vivo por la Plataforma</h2>
        <p style="color: var(--text-muted); font-size: 1rem; margin-top: 0.5rem;">
          Espacio reservado para reproducción de video demo del sistema Cassará Ecuador.
        </p>
      </div>

      <div class="video-showcase-box">
        <div class="video-window-bar">
          <div class="showcase-window-dots">
            <span class="window-dot dot-r"></span>
            <span class="window-dot dot-y"></span>
            <span class="window-dot dot-g"></span>
          </div>
          <div style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--text-muted);">
            cassara-ecuador-demo-recording.mp4
          </div>
        </div>

        <div class="video-content-area" id="videoContainer">
          <!-- Si tienes un archivo .mp4 o iframe, reemplaza este contenedor con:
               <video controls autoplay loop muted poster="/images/cassara-poster.jpg" style="width:100%; height:100%;">
                 <source src="/videos/cassara-demo.mp4" type="video/mp4">
               </video>
          -->
          <div class="video-placeholder-overlay">
            <div class="play-icon-glow" onclick="alert('Espacio listo para reproducir el video .mp4 o iframe de Cassará Ecuador')">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg>
            </div>
            <h3 style="font-size: 1.25rem; color: var(--text-main); margin-bottom: 0.4rem;">
              Reproducir Demostración de Cassará Ecuador
            </h3>
            <p style="font-size: 0.88rem; color: var(--text-muted); max-width: 500px; margin: 0 auto;">
              Haz clic para reproducir el video. Puedes subir tu archivo <code>.mp4</code> o insertar tu iframe de Vimeo/YouTube aquí.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- 📸 SECCIÓN 2: GALERÍA DE CAPTURAS E INTERFAZ DEL SISTEMA -->
    <div style="margin-bottom: 4rem;">
      <div style="text-align: center; max-width: 750px; margin: 0 auto 2.5rem;">
        <span class="trust-badge">Galería de Capturas e Interfaz</span>
        <h2 class="title-section" style="font-size: 2rem;">Capturas Reales del Sistema</h2>
        <p style="color: var(--text-muted); font-size: 1rem; margin-top: 0.5rem;">
          Explora los módulos y pantallas diseñadas para la operación diaria de Cassará Ecuador.
        </p>
      </div>

      <div class="screenshots-grid">
        <!-- Captura 1 -->
        <div class="screenshot-card">
          <div class="screenshot-img-frame">
            <!-- Coloca tu etiqueta <img src="/images/cassara-app-movil.jpg" alt="App Móvil"> cuando tengas la foto -->
            <div style="text-align: center; padding: 1.5rem;">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color: var(--brand-cyan); margin-bottom: 0.5rem;"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
              <div style="font-size: 0.82rem; font-family: var(--font-mono); color: var(--text-muted);">Espacio para Captura #1</div>
            </div>
          </div>
          <div class="screenshot-body">
            <span class="screenshot-tag">01 / Aplicación Móvil</span>
            <h3 class="screenshot-title">Marcado GPS de Visitas en Campo</h3>
            <p class="screenshot-desc">Interface intuitiva para que los visitadores médicos registren coordenadas exactas y notas de la visita en tiempo real.</p>
          </div>
        </div>

        <!-- Captura 2 -->
        <div class="screenshot-card">
          <div class="screenshot-img-frame">
            <div style="text-align: center; padding: 1.5rem;">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color: var(--brand-cyan); margin-bottom: 0.5rem;"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
              <div style="font-size: 0.82rem; font-family: var(--font-mono); color: var(--text-muted);">Espacio para Captura #2</div>
            </div>
          </div>
          <div class="screenshot-body">
            <span class="screenshot-tag">02 / Panel Ejecutivo</span>
            <h3 class="screenshot-title">Dashboard de Avance de Ciclo</h3>
            <p class="screenshot-desc">Panel centralizado para que los supervisores monitoreen el porcentaje de cumplimiento por zona y representante.</p>
          </div>
        </div>

        <!-- Captura 3 -->
        <div class="screenshot-card">
          <div class="screenshot-img-frame">
            <div style="text-align: center; padding: 1.5rem;">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color: var(--brand-cyan); margin-bottom: 0.5rem;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
              <div style="font-size: 0.82rem; font-family: var(--font-mono); color: var(--text-muted);">Espacio para Captura #3</div>
            </div>
          </div>
          <div class="screenshot-body">
            <span class="screenshot-tag">03 / Módulo de Inteligencia Artificial</span>
            <h3 class="screenshot-title">Escaneo OCR de Facturas</h3>
            <p class="screenshot-desc">Extracción automática de datos fiscales (RUC, número de comprobante, ítems) al tomar una fotografía del recibo.</p>
          </div>
        </div>

        <!-- Captura 4 -->
        <div class="screenshot-card">
          <div class="screenshot-img-frame">
            <div style="text-align: center; padding: 1.5rem;">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color: var(--brand-cyan); margin-bottom: 0.5rem;"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
              <div style="font-size: 0.82rem; font-family: var(--font-mono); color: var(--text-muted);">Espacio para Captura #4</div>
            </div>
          </div>
          <div class="screenshot-body">
            <span class="screenshot-tag">04 / Padrón de Contactos</span>
            <h3 class="screenshot-title">Gestión de Médicos y Farmacias</h3>
            <p class="screenshot-desc">Directorio completo con filtros por especialidad, ubicaciones geográficas y muestras médicas entregadas.</p>
          </div>
        </div>

        <!-- Captura 5 -->
        <div class="screenshot-card">
          <div class="screenshot-img-frame">
            <div style="text-align: center; padding: 1.5rem;">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color: var(--brand-cyan); margin-bottom: 0.5rem;"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
              <div style="font-size: 0.82rem; font-family: var(--font-mono); color: var(--text-muted);">Espacio para Captura #5</div>
            </div>
          </div>
          <div class="screenshot-body">
            <span class="screenshot-tag">05 / Rendición de Cuentas</span>
            <h3 class="screenshot-title">Organización de Gastos por Lotes</h3>
            <p class="screenshot-desc">Clasificación de comprobantes deducibles y no deducibles agrupados para revisión contable directa.</p>
          </div>
        </div>

        <!-- Captura 6 -->
        <div class="screenshot-card">
          <div class="screenshot-img-frame">
            <div style="text-align: center; padding: 1.5rem;">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color: var(--brand-cyan); margin-bottom: 0.5rem;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              <div style="font-size: 0.82rem; font-family: var(--font-mono); color: var(--text-muted);">Espacio para Captura #6</div>
            </div>
          </div>
          <div class="screenshot-body">
            <span class="screenshot-tag">06 / Seguridad & Permisos</span>
            <h3 class="screenshot-title">Administración de Roles de Usuario</h3>
            <p class="screenshot-desc">Jerarquías de acceso para administradores globales, jefes regionales y representantes de ventas.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- 📋 SECCIÓN 3: FICHA DE LA PLATAFORMA CASSARÁ -->
    <div class="case-study-hero-card" style="margin-top: 0;">
      <div style="margin-bottom: 2rem;">
        <span class="trust-badge" style="margin-bottom: 0.5rem;">Industria Farmacéutica</span>
        <h2 class="title-section" style="font-size: 1.8rem; margin-top: 0.25rem;">La Necesidad Operativa</h2>
        <p style="font-size: 1.05rem; color: var(--text-muted); line-height: 1.7; margin-top: 0.75rem;">
          Cassará requería reemplazar los reportes en papel, chats de WhatsApp y archivos Excel desactualizados por una plataforma propia que permitiera supervisar las rutas en campo, confirmar las visitas a médicos y farmacias mediante GPS en tiempo real y simplificar la rendición de gastos operativos con inteligencia artificial.
        </p>
      </div>

      <h3 class="title-card" style="margin-bottom: 1.25rem; color: var(--brand-cyan-glow);">
        Funcionalidades y Módulos Desarrollados:
      </h3>

      <div class="case-grid-capabilities">
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Geolocalización GPS de visitadores médicos</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Registro y auditoría de visitas</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Gestión de médicos</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Gestión de farmacias</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Dashboard para visualizar avance de ciclos</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Escaneo de facturas utilizando Inteligencia Artificial</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Organización de facturas por lotes</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Gastos deducibles y no deducibles</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Gestión de usuarios y permisos</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Reportes para seguimiento de la operación</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Aplicación fácil de instalar y utilizar</span>
        </div>
      </div>

      <div style="margin-top: 3rem; border-top: 1px solid var(--border-subtle); padding-top: 2rem;">
        <h4 style="font-size: 0.9rem; font-family: var(--font-mono); color: var(--text-muted); text-transform: uppercase; margin-bottom: 1rem;">
          Sección Técnica Secundaria (Stack & Herramientas):
        </h4>
        <div style="display: flex; flex-wrap: wrap; gap: 0.6rem;">
          <span style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); padding: 0.35rem 0.75rem; border-radius: 6px; font-family: var(--font-mono); font-size: 0.82rem; color: var(--text-muted);">Laravel Engine</span>
          <span style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); padding: 0.35rem 0.75rem; border-radius: 6px; font-family: var(--font-mono); font-size: 0.82rem; color: var(--text-muted);">MySQL Storage</span>
          <span style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); padding: 0.35rem 0.75rem; border-radius: 6px; font-family: var(--font-mono); font-size: 0.82rem; color: var(--text-muted);">Geolocation API</span>
          <span style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); padding: 0.35rem 0.75rem; border-radius: 6px; font-family: var(--font-mono); font-size: 0.82rem; color: var(--text-muted);">AI Document Processing OCR</span>
        </div>
      </div>

      <div style="margin-top: 3rem; text-align: center;">
        <a href="{{ url('/contacto') }}" class="btn-action btn-primary-glow" style="padding: 1rem 2rem;">
          Solicitar una solución similar para mi empresa
        </a>
      </div>
    </div>

  </div>
</section>
@endsection
