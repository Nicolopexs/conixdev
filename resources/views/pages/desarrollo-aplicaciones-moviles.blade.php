@extends('layouts.main')

@section('title', 'Desarrollo de Aplicaciones Móviles Empresariales en Ecuador | ConixDev')
@section('description', 'Desarrollo de aplicaciones móviles a medida para iOS y Android en Ecuador. Creamos apps para equipos en terreno, supervisión GPS y portales de clientes.')
@section('canonical', 'https://conixdev.com/desarrollo-aplicaciones-moviles')

@section('content')
<!-- SCHEMA.ORG JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://conixdev.com/desarrollo-aplicaciones-moviles#service",
      "name": "Desarrollo de Aplicaciones Móviles Empresariales",
      "provider": {
        "@type": "Organization",
        "name": "ConixDev",
        "url": "https://conixdev.com"
      },
      "description": "Desarrollo de aplicaciones móviles corporativas para smartphones Android y iOS enfocadas en personal operativo de campo, geolocalización y sincronización de datos."
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
          "name": "Aplicaciones Móviles",
          "item": "https://conixdev.com/desarrollo-aplicaciones-moviles"
        }
      ]
    }
  ]
}
</script>

<!-- HERO APPS MÓVILES -->
<section style="padding-top: 6.5rem; padding-bottom: 1.5rem; position: relative;">
  <div class="canvas-glow-1"></div>
  <div class="container" style="text-align: center;">
    <div class="trust-badge" style="margin-bottom: 0.75rem;">
      <span class="trust-badge-dot"></span>
      Desarrollo Móvil iOS & Android Empresarial
    </div>

    <h1 class="title-hero" style="max-width: 950px; margin: 0 auto 0.75rem;">
      Desarrollo de <span class="text-gradient">Aplicaciones Móviles Empresariales</span>
    </h1>

    <p style="font-size: clamp(1.05rem, 1.8vw, 1.25rem); color: var(--text-muted); max-width: 820px; margin: 0 auto 1.25rem; line-height: 1.6;">
      Construimos aplicaciones móviles nativas e híbridas diseñadas para operar en campo, registrar auditorías con GPS, tomar fotografías y capturar firmas sin conexión a internet.
    </p>

    <!-- 📱 MOCKUP VISUAL MOBILE DE ALTO IMPACTO -->
    <div class="hero-visual-frame" style="max-width: 880px; margin: 2rem auto 0; position: relative;">
      <div class="visual-frame-bar" style="background: rgba(14, 22, 38, 0.9); border: 1px solid var(--border-subtle); border-bottom: none; border-radius: var(--radius-md) var(--radius-md) 0 0; padding: 0.75rem 1.25rem; display: flex; align-items: center; justify-content: space-between;">
        <div style="display: flex; gap: 0.5rem; align-items: center;">
          <span style="width: 11px; height: 11px; border-radius: 50%; background: #ef4444; display: inline-block;"></span>
          <span style="width: 11px; height: 11px; border-radius: 50%; background: #f59e0b; display: inline-block;"></span>
          <span style="width: 11px; height: 11px; border-radius: 50%; background: #10b981; display: inline-block;"></span>
        </div>
        <div style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--text-muted); display: flex; align-items: center; gap: 0.5rem;">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" stroke-width="2"/></svg>
          ConixDev Mobile Engine — iOS & Android Native
        </div>
        <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--brand-cyan-glow); font-weight: 600;">GPS & OCR AI</span>
      </div>

      <div class="visual-frame-body" style="border: 1px solid var(--border-subtle); border-radius: 0 0 var(--radius-md) var(--radius-md); overflow: hidden; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 40px -10px rgba(6, 182, 212, 0.25); position: relative;">
        <img src="/images/mobile-showcase.jpg" alt="ConixDev Desarrollo de Apps Móviles Empresariales" style="width: 100%; height: auto; display: block; object-fit: cover;" />
        
        <div style="position: absolute; bottom: 1.25rem; left: 1.25rem; background: rgba(7, 9, 18, 0.85); backdrop-filter: blur(12px); border: 1px solid var(--border-active); border-radius: var(--radius-sm); padding: 0.65rem 1.1rem; display: flex; align-items: center; gap: 0.75rem; color: var(--text-main); font-size: 0.85rem;">
          <span style="width: 10px; height: 10px; border-radius: 50%; background: #10b981; box-shadow: 0 0 10px #10b981;"></span>
          <span style="font-weight: 600;">Geolocalización GPS & Escaneo OCR en Vivo</span>
        </div>
      </div>
    </div>

    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 2rem;">
      <a href="#contacto-directo" class="btn-action btn-primary-glow" style="padding: 0.85rem 1.85rem; font-size: 0.95rem;">
        <span>Cotizar App Móvil Empresarial</span>
      </a>
      <a href="{{ url('/casos-de-exito/cassara-ecuador') }}" class="btn-action btn-secondary-dark" style="padding: 0.85rem 1.85rem; font-size: 0.95rem;">
        <span>Ver App en Caso Cassará</span>
      </a>
    </div>
  </div>
</section>

<section class="section-spacing section-alt-bg">
  <div class="container">
    <div style="text-align: center; max-width: 820px; margin: 0 auto 2.5rem;">
      <span class="trust-badge" style="margin-bottom: 0.75rem;">Capacidades Técnicas</span>
      <h2 class="title-section">
        ¿Qué tipo de <span class="text-gradient">apps móviles</span> desarrollamos?
      </h2>
    </div>

    <div class="cards-layout-grid" style="margin-top: 1.5rem;">
      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Apps para Personal de Terreno</h3>
        <p class="body-sm">Supervisión por GPS de visitadores médicos, técnicos, vendedores y entregas con registro instantáneo de coordenadas y fotos.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Captura de Datos Offline</h3>
        <p class="body-sm">Permite a tus colaboradores registrar información sin conexión a internet y sincronizarla automáticamente al recuperar cobertura.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Escaneo de Facturas y Documentos</h3>
        <p class="body-sm">Integración de cámara con lectura inteligente por Inteligencia Artificial para digitalizar recibos de gastos al instante.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Portales y Apps de Clientes</h3>
        <p class="body-sm">Canales móviles privados para que tus clientes corporativos soliciten servicios, revisen estados y aprueben pedidos.</p>
      </div>
    </div>
  </div>
</section>

<!-- FORMULARIO CONTACTO -->
<section class="section-spacing" id="contacto-directo">
  <div class="container">
    <div class="contact-simple-card">
      <div style="text-align: center; margin-bottom: 2rem;">
        <span class="trust-badge" style="margin-bottom: 0.75rem;">Consulta Directa</span>
        <h2 class="title-section" style="margin-bottom: 0.5rem;">Desarrolla tu <span class="text-gradient">App Empresarial</span></h2>
        <p style="color: var(--text-muted); font-size: 1.05rem;">Sin compromisos ni intermediarios. Conversa directamente con el equipo de ConixDev.</p>
      </div>

      <div id="contactSuccessAlert" style="display: none; background: rgba(6, 182, 212, 0.15); border: 1px solid rgba(6, 182, 212, 0.3); color: var(--brand-cyan-glow); padding: 1.25rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem; text-align: center; font-weight: 600;">
        ✔ ¡Formulario enviado! Abriendo WhatsApp con los datos para atención inmediata...
      </div>

      <form id="conixdevContactForm">
        <div class="form-field-group">
          <label class="form-label-simple" for="nombre">Nombre completo *</label>
          <input type="text" id="nombre" name="nombre" class="form-input-simple" placeholder="Ej. Javier Ramírez" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="empresa">Nombre de tu empresa *</label>
          <input type="text" id="empresa" name="empresa" class="form-input-simple" placeholder="Ej. Distribuidora del Pacífico" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="whatsapp">WhatsApp de contacto *</label>
          <input type="text" id="whatsapp" name="whatsapp" class="form-input-simple" placeholder="Ej. +593 96 276 1063" required />
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
          <label class="form-label-simple" for="proceso_mejorar">¿Qué función debe tener tu aplicación móvil? *</label>
          <textarea id="proceso_mejorar" name="proceso_mejorar" class="form-input-simple" placeholder="Ej. Requerimos una app móvil para que nuestros supervisores registren visitas con GPS..." required></textarea>
        </div>

        <div style="margin-top: 1.75rem; text-align: center;">
          <button type="submit" class="btn-action btn-primary-glow" style="width: 100%; font-size: 1rem;">
            Enviar Consulta de App Móvil
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
