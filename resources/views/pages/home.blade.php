@extends('layouts.main')

@section('title', 'ConixDev | Desarrollo de Software Empresarial a Medida')
@section('description', 'Transformo procesos manuales, Excel y WhatsApp en aplicaciones empresariales diseñadas para la operación real de cada empresa.')

@section('content')
<!-- Hero Principal Corporativo B2B -->
<section style="padding-top: 9rem; padding-bottom: 5.5rem;">
  <div class="container" style="text-align: center;">
    <div class="badge-corp">
      <span class="badge-dot"></span>
      Software diseñado alrededor de las necesidades reales de cada empresa
    </div>

    <h1 class="heading-xl text-gradient-white" style="max-width: 960px; margin: 0 auto 1.5rem;">
      Desarrollo de software empresarial <span class="text-indigo">a medida</span>
    </h1>

    <p class="body-lead" style="max-width: 760px; margin: 0 auto 2.5rem;">
      Diseño y desarrollo aplicaciones web y móviles para empresas que necesitan controlar mejor sus operaciones, automatizar procesos y tomar decisiones con información real.
    </p>

    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 3.5rem;">
      <a href="{{ url('/diagnostico') }}" class="btn btn-primary">
        <span>Solicitar diagnóstico empresarial</span>
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round"/></svg>
      </a>
      <a href="{{ url('/casos-de-exito/cassara-ecuador') }}" class="btn btn-secondary">
        <span>Ver caso de éxito: Cassará</span>
      </a>
    </div>

    <!-- Interface Preview Component -->
    <div style="max-width: 980px; margin: 0 auto; background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); overflow: hidden; text-align: left; box-shadow: var(--shadow-subtle);">
      <div style="background: rgba(8, 10, 17, 0.8); padding: 0.85rem 1.25rem; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border-subtle);">
        <div style="display: flex; gap: 0.4rem;">
          <span style="width: 10px; height: 10px; border-radius: 50%; background: #ef4444;"></span>
          <span style="width: 10px; height: 10px; border-radius: 50%; background: #f59e0b;"></span>
          <span style="width: 10px; height: 10px; border-radius: 50%; background: #10b981;"></span>
        </div>
        <div style="font-family: var(--font-mono); font-size: 0.78rem; color: var(--text-tertiary);">
          conixdev-core-engine // live-operation
        </div>
      </div>
      <div style="padding: 2rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.25rem;">
        <div style="background: rgba(8,10,17,0.6); padding: 1.25rem; border-radius: 10px; border: 1px solid var(--border-subtle);">
          <div style="font-size: 0.8rem; color: var(--text-tertiary); text-transform: uppercase;">Control de Operación</div>
          <div style="font-size: 1.8rem; font-weight: 800; color: var(--brand-indigo-light); margin: 0.2rem 0;">100% Real</div>
          <div style="font-size: 0.85rem; color: var(--text-secondary);">Trazabilidad en tiempo real sin Excel</div>
        </div>
        <div style="background: rgba(8,10,17,0.6); padding: 1.25rem; border-radius: 10px; border: 1px solid var(--border-subtle);">
          <div style="font-size: 0.8rem; color: var(--text-tertiary); text-transform: uppercase;">Procesamiento IA</div>
          <div style="font-size: 1.8rem; font-weight: 800; color: #34d399; margin: 0.2rem 0;">Facturación</div>
          <div style="font-size: 0.85rem; color: var(--text-secondary);">Extracción inteligente de comprobantes</div>
        </div>
        <div style="background: rgba(8,10,17,0.6); padding: 1.25rem; border-radius: 10px; border: 1px solid var(--border-subtle);">
          <div style="font-size: 0.8rem; color: var(--text-tertiary); text-transform: uppercase;">Personal de Campo</div>
          <div style="font-size: 1.8rem; font-weight: 800; color: #38bdf8; margin: 0.2rem 0;">Geolocalización</div>
          <div style="font-size: 0.85rem; color: var(--text-secondary);">Verificación GPS de visitas y rutas</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sección Diagnóstico de Problemas Operativos -->
<section class="section-padding" style="background: rgba(15, 23, 42, 0.3); border-top: 1px solid var(--border-subtle);">
  <div class="container">
    <div style="text-align: center; max-width: 800px; margin: 0 auto 3rem;">
      <span class="badge-corp">Problemas Operativos Comunes</span>
      <h2 class="heading-lg">
        ¿Tu empresa todavía depende de <span class="text-indigo">Excel, WhatsApp y procesos manuales</span>?
      </h2>
    </div>

    <div class="b2b-grid">
      <div class="b2b-card">
        <div class="icon-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <h3 class="heading-md" style="font-size: 1.15rem; margin-bottom: 0.5rem;">Sin trazabilidad de campo</h3>
        <p class="body-sm">No sabes exactamente dónde está trabajando tu equipo en terreno ni si las visitas fueron realizadas en el lugar correcto.</p>
      </div>

      <div class="b2b-card">
        <div class="icon-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
        </div>
        <h3 class="heading-md" style="font-size: 1.15rem; margin-bottom: 0.5rem;">Información dispersa</h3>
        <p class="body-sm">La data crítica de tu empresa vive en conversaciones de WhatsApp, correos sueltos y múltiples hojas de cálculo.</p>
      </div>

      <div class="b2b-card">
        <div class="icon-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
        </div>
        <h3 class="heading-md" style="font-size: 1.15rem; margin-bottom: 0.5rem;">Reportes manuales lentos</h3>
        <p class="body-sm">Tus líderes pierden horas valiosas consolidando manualmente reportes que deberían generarse automáticamente.</p>
      </div>

      <div class="b2b-card">
        <div class="icon-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
        </div>
        <h3 class="heading-md" style="font-size: 1.15rem; margin-bottom: 0.5rem;">Errores al registrar datos</h3>
        <p class="body-sm">El ingreso manual de información provoca duplicaciones, pérdidas de registros y fallas en la facturación.</p>
      </div>

      <div class="b2b-card">
        <div class="icon-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </div>
        <h3 class="heading-md" style="font-size: 1.15rem; margin-bottom: 0.5rem;">Pérdida de tiempo en documentos</h3>
        <p class="body-sm">Tu equipo gasta días organizando facturas físicas o clasificando comprobantes de gastos uno por uno.</p>
      </div>

      <div class="b2b-card">
        <div class="icon-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        </div>
        <h3 class="heading-md" style="font-size: 1.15rem; margin-bottom: 0.5rem;">Sin software a la medida</h3>
        <p class="body-sm">Tu empresa requiere un sistema propio, pero los programas genéricos del mercado no se adaptan a tu forma de trabajar.</p>
      </div>
    </div>

    <div style="margin-top: 3.5rem; text-align: center;">
      <p style="font-size: 1.15rem; font-weight: 600; color: var(--brand-indigo-light);">
        "Analizo tu proceso y te propongo una solución tecnológica adaptada a tu operación."
      </p>
    </div>
  </div>
</section>

<!-- Destacado Caso de Éxito Cassará -->
<section class="section-padding">
  <div class="container">
    <div class="showcase-block">
      <span class="badge-corp">Proyecto Real Entregado</span>
      <h2 class="heading-lg" style="margin-bottom: 1rem;">
        Caso de éxito: <span class="text-indigo">Cassará Ecuador</span>
      </h2>
      <p class="body-lead" style="max-width: 800px;">
        Cassará es una plataforma empresarial desarrollada a medida para digitalizar y controlar la operación de visitadores médicos.
      </p>

      <div style="margin-top: 2.5rem;">
        <a href="{{ url('/casos-de-exito/cassara-ecuador') }}" class="btn btn-primary">
          <span>Ver caso de estudio completo</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
