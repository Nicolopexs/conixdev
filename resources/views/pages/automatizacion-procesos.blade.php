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

<section style="padding-top: 7.5rem; padding-bottom: 3.5rem; position: relative;">
  <div class="canvas-glow-1"></div>
  <div class="container" style="text-align: center;">
    <div class="trust-badge" style="margin-bottom: 1.25rem;">
      <span class="trust-badge-dot"></span>
      Flujos Automatizados & Inteligencia Artificial
    </div>

    <h1 class="title-hero" style="max-width: 950px; margin: 0 auto 1.25rem;">
      Automatización de <span class="text-gradient">Procesos e Inteligencia Artificial</span>
    </h1>

    <p style="font-size: clamp(1.05rem, 1.8vw, 1.25rem); color: var(--text-muted); max-width: 820px; margin: 0 auto 2.25rem; line-height: 1.6;">
      Convertimos tareas manuales repetitivas en flujos digitales automáticos. Ahorra cientos de horas hombre procesando documentos, facturas y reportes al instante.
    </p>

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
