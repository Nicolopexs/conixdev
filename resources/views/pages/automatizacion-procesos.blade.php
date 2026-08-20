@extends('layouts.main')

@section('title', 'Automatización de Procesos e Inteligencia Artificial Empresarial | ConixDev')
@section('description', 'Automatizaciones inteligentes para empresas en Ecuador. Lectura automática de facturas físicas con IA, eliminación de trabajo repetitivo e integración de flujos.')
@section('canonical', 'https://conixdev.com/automatizacion-procesos')

@section('content')
<!-- SCHEMA.ORG JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://conixdev.com/automatizacion-procesos#service",
      "name": "Automatización de Procesos e Inteligencia Artificial Empresarial",
      "provider": {
        "@type": "Organization",
        "name": "ConixDev",
        "url": "https://conixdev.com"
      },
      "description": "Automatización de tareas repetitivas en empresas mediante algoritmos de inteligencia artificial, escaneo OCR de facturas y flujos de trabajo inteligentes."
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
          "name": "Automatización de Procesos",
          "item": "https://conixdev.com/automatizacion-procesos"
        }
      ]
    }
  ]
}
</script>

  <!-- HERO AUTOMATIZACIÓN DE PROCESOS -->
<section style="padding-top: 6.5rem; padding-bottom: 1.5rem; position: relative;">
  <div class="canvas-glow-1"></div>
  <div class="container" style="text-align: center;">
    <div class="trust-badge" style="margin-bottom: 0.75rem;">
      <span class="trust-badge-dot"></span>
      Automatización con IA & Integración de APIs
    </div>

    <h1 class="title-hero" style="max-width: 950px; margin: 0 auto 0.75rem;">
      Automatización de <span class="text-gradient">Procesos Empresariales</span>
    </h1>

    <p style="font-size: clamp(1.05rem, 1.8vw, 1.25rem); color: var(--text-muted); max-width: 820px; margin: 0 auto 1.25rem; line-height: 1.6;">
      Eliminamos la digitación manual repetitiva en tu empresa. Automatizamos la lectura de facturas físicas con IA (OCR), procesamiento de documentos y sincronización entre plataformas.
    </p>

    <!-- 🖼️ MOCKUP VISUAL AUTOMATIZACIÓN DE ALTO IMPACTO -->
    <div class="hero-visual-frame" style="max-width: 880px; margin: 2rem auto 0; position: relative;">
      <div class="visual-frame-bar" style="background: rgba(14, 22, 38, 0.9); border: 1px solid var(--border-subtle); border-bottom: none; border-radius: var(--radius-md) var(--radius-md) 0 0; padding: 0.75rem 1.25rem; display: flex; align-items: center; justify-content: space-between;">
        <div style="display: flex; gap: 0.5rem; align-items: center;">
          <span style="width: 11px; height: 11px; border-radius: 50%; background: #ef4444; display: inline-block;"></span>
          <span style="width: 11px; height: 11px; border-radius: 50%; background: #f59e0b; display: inline-block;"></span>
          <span style="width: 11px; height: 11px; border-radius: 50%; background: #10b981; display: inline-block;"></span>
        </div>
        <div style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--text-muted); display: flex; align-items: center; gap: 0.5rem;">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke-width="2"/></svg>
          https://conixdev-ai.sec/ocr-pipeline-automation
        </div>
        <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--brand-cyan-glow); font-weight: 600;">VISION AI OCR</span>
      </div>

      <div class="visual-frame-body" style="border: 1px solid var(--border-subtle); border-radius: 0 0 var(--radius-md) var(--radius-md); overflow: hidden; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 40px -10px rgba(6, 182, 212, 0.25); position: relative;">
        <img src="/images/mobile-showcase.jpg" alt="ConixDev Automatización con IA y Lectura OCR" style="width: 100%; height: auto; display: block; object-fit: cover;" />
        
        <div style="position: absolute; bottom: 1.25rem; left: 1.25rem; background: rgba(7, 9, 18, 0.85); backdrop-filter: blur(12px); border: 1px solid var(--border-active); border-radius: var(--radius-sm); padding: 0.65rem 1.1rem; display: flex; align-items: center; gap: 0.75rem; color: var(--text-main); font-size: 0.85rem;">
          <span style="width: 10px; height: 10px; border-radius: 50%; background: #10b981; box-shadow: 0 0 10px #10b981;"></span>
          <span style="font-weight: 600;">Motor de Inteligencia Artificial para Facturas y Documentos</span>
        </div>
      </div>
    </div>

    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 2rem;">
      <a href="#contacto-directo" class="btn-action btn-primary-glow" style="padding: 0.85rem 1.85rem; font-size: 0.95rem;">
        <span>Solicitar Proyecto de Automatización</span>
      </a>
      <a href="{{ url('/casos-de-exito/cassara-ecuador') }}" class="btn-action btn-secondary-dark" style="padding: 0.85rem 1.85rem; font-size: 0.95rem;">
        <span>Ver Escaneo IA en Caso Cassará</span>
      </a>
    </div>
  </div>
</section>

<section class="section-spacing section-alt-bg">
  <div class="container">
    <div style="text-align: center; max-width: 820px; margin: 0 auto 2.5rem;">
      <span class="trust-badge" style="margin-bottom: 0.75rem;">Tecnología Aplicada</span>
      <h2 class="title-section">
        ¿Qué podemos <span class="text-gradient">automatizar</span> en tu empresa?
      </h2>
    </div>

    <div class="cards-layout-grid" style="margin-top: 1.5rem;">
      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Lectura de Facturas con IA (OCR)</h3>
        <p class="body-sm">Extracción automática de datos de comprobantes físicos y digitales (RUC, montos, impuestos e ítems) sin tipeo manual.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Clasificación Masiva de Gastos</h3>
        <p class="body-sm">Procesamiento por lotes de comprobantes deducibles y no deducibles con validación automática y consolidación.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Reportes y Notificaciones Automáticas</h3>
        <p class="body-sm">Generación periódica de informes consolidados enviados directamente a los correos o celulares de los directivos.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Flujos de Aprobación Digitales</h3>
        <p class="body-sm">Rutas de autorización secuenciales para presupuestos, rinde de cuentas y solicitudes operativas sin papeleos.</p>
      </div>
    </div>
  </div>
</section>

<!-- FORMULARIO CONTACTO -->
<section class="section-spacing" id="contacto-directo">
  <div class="container">
    <div class="contact-simple-card">
      <div style="text-align: center; margin-bottom: 2rem;">
        <span class="trust-badge" style="margin-bottom: 0.75rem;">Consulta de Automatización</span>
        <h2 class="title-section" style="margin-bottom: 0.5rem;">Automatiza tus <span class="text-gradient">Procesos Manuales</span></h2>
        <p style="color: var(--text-muted); font-size: 1.05rem;">Sin intermediarios ni demoras. Conversa directamente con los desarrolladores de ConixDev.</p>
      </div>

      <div id="contactSuccessAlert" style="display: none; background: rgba(6, 182, 212, 0.15); border: 1px solid rgba(6, 182, 212, 0.3); color: var(--brand-cyan-glow); padding: 1.25rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem; text-align: center; font-weight: 600;">
        ✔ ¡Formulario enviado! Abriendo WhatsApp con los datos para atención inmediata...
      </div>

      <form id="conixdevContactForm">
        <div class="form-field-group">
          <label class="form-label-simple" for="nombre">Nombre completo *</label>
          <input type="text" id="nombre" name="nombre" class="form-input-simple" placeholder="Ej. Patricia Ortiz" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="empresa">Nombre de tu empresa *</label>
          <input type="text" id="empresa" name="empresa" class="form-input-simple" placeholder="Ej. Operaciones Agroindustriales" required />
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
          <label class="form-label-simple" for="proceso_mejorar">¿Qué proceso manual deseas automatizar? *</label>
          <textarea id="proceso_mejorar" name="proceso_mejorar" class="form-input-simple" placeholder="Ej. Queremos automatizar la lectura de facturas físicas de los gastos de nuestros colaboradores..." required></textarea>
        </div>

        <div style="margin-top: 1.75rem; text-align: center;">
          <button type="submit" class="btn-action btn-primary-glow" style="width: 100%; font-size: 1rem;">
            Enviar Consulta de Automatización
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
