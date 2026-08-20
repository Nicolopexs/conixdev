@extends('layouts.main')

@section('title', 'Solicitar Diagnóstico Empresarial | ConixDev')
@section('description', 'Solicita una evaluación de software empresarial a medida para tu empresa. Analizo tus procesos y te propongo una solución tecnológica adaptada a tu operación.')

@section('content')
<div class="page-banner">
  <div class="container">
    <div class="breadcrumb-nav">
      <a href="{{ url('/') }}">Inicio</a>
      <span>/</span>
      <span style="color: var(--text-primary);">Diagnóstico Empresarial</span>
    </div>
    <span class="badge-corp">Evaluación Sin Compromiso</span>
    <h1 class="heading-xl text-gradient-white" style="margin-bottom: 1rem;">
      Solicita un <span class="text-indigo">Diagnóstico Empresarial</span>
    </h1>
    <p class="body-lead" style="max-width: 800px;">
      No necesitas saber qué tecnología contratar. Explícame cómo funciona actualmente tu operación y analizaré cómo podría digitalizarse.
    </p>
  </div>
</div>

<section class="section-padding">
  <div class="container">
    <div class="wizard-card">
      <div class="wizard-steps">
        <div class="wizard-step-item active">
          <span class="wizard-step-num">1</span>
          <span>Datos de la Empresa</span>
        </div>
        <div class="wizard-step-item active">
          <span class="wizard-step-num">2</span>
          <span>Proceso & Escala</span>
        </div>
        <div class="wizard-step-item active">
          <span class="wizard-step-num">3</span>
          <span>Solución & Contacto</span>
        </div>
      </div>

      <div class="alert-success" id="wizardSuccessAlert" style="display: none; background: rgba(16, 185, 129, 0.15); border: 1px solid rgba(16, 185, 129, 0.3); color: #34d399; padding: 1.25rem; border-radius: 12px; margin-bottom: 2rem; text-align: center; font-weight: 600;">
        ✔ ¡Diagnóstico enviado con éxito! He recibido la información de tu empresa y analizaré tu caso para ponerme en contacto contigo a la brevedad.
      </div>

      <form id="diagnosticoWizardForm">
        <div class="form-grid-2">
          <div>
            <label class="form-label-b2b" for="nombre">Nombre completo *</label>
            <input type="text" id="nombre" name="nombre" class="input-b2b" placeholder="Ej. Carlos Mendoza" required />
          </div>

          <div>
            <label class="form-label-b2b" for="empresa">Nombre de tu empresa *</label>
            <input type="text" id="empresa" name="empresa" class="input-b2b" placeholder="Ej. Logística Andina S.A." required />
          </div>

          <div>
            <label class="form-label-b2b" for="pais">País *</label>
            <input type="text" id="pais" name="pais" class="input-b2b" placeholder="Ej. Ecuador, Colombia, México..." required />
          </div>

          <div>
            <label class="form-label-b2b" for="email">Correo electrónico profesional *</label>
            <input type="email" id="email" name="email" class="input-b2b" placeholder="carlos@tuempresa.com" required />
          </div>

          <div>
            <label class="form-label-b2b" for="whatsapp">WhatsApp de contacto *</label>
            <input type="tel" id="whatsapp" name="whatsapp" class="input-b2b" placeholder="+593 99 123 4567" required />
          </div>

          <div>
            <label class="form-label-b2b" for="tipo_empresa">Sector de la empresa *</label>
            <select id="tipo_empresa" name="tipo_empresa" class="input-b2b" required>
              <option value="">Selecciona el sector...</option>
              <option value="Farmacéutica / Salud">Farmacéutica / Salud</option>
              <option value="Comercial / Distribución">Comercial / Distribución</option>
              <option value="Servicios / Operaciones de Campo">Servicios / Operaciones de Campo</option>
              <option value="Industria / Manufactura">Industria / Manufactura</option>
              <option value="Otra">Otra empresa o sector</option>
            </select>
          </div>

          <div class="form-full">
            <label class="form-label-b2b" for="proceso_mejorar">¿Qué proceso deseas mejorar o automatizar? *</label>
            <textarea id="proceso_mejorar" name="proceso_mejorar" class="input-b2b" style="min-height: 120px;" placeholder="Ej. Actualmente registramos visitas en Excel y queremos controlar la geolocalización de nuestros vendedores en campo..." required></textarea>
          </div>

          <div>
            <label class="form-label-b2b" for="usuarios_estimados">¿Cuántos usuarios aproximados tendría el sistema? *</label>
            <select id="usuarios_estimados" name="usuarios_estimados" class="input-b2b" required>
              <option value="">Selecciona la escala...</option>
              <option value="1 a 10 usuarios">1 a 10 usuarios</option>
              <option value="11 a 50 usuarios">11 a 50 usuarios</option>
              <option value="51 a 200 usuarios">51 a 200 usuarios</option>
              <option value="Más de 200 usuarios">Más de 200 usuarios</option>
            </select>
          </div>

          <div>
            <label class="form-label-b2b" for="tipo_solucion">¿Qué tipo de solución buscas? *</label>
            <select id="tipo_solucion" name="tipo_solucion" class="input-b2b" required>
              <option value="">Selecciona el tipo de solución...</option>
              <option value="Aplicación Web Empresarial">Aplicación Web Empresarial</option>
              <option value="Aplicación Móvil (iOS / Android)">Aplicación Móvil (iOS / Android)</option>
              <option value="Sistema de Geolocalización de Campo">Sistema de Geolocalización de Campo</option>
              <option value="Automatización / Inteligencia Artificial">Automatización / Inteligencia Artificial</option>
              <option value="No estoy seguro, necesito asesoría">No estoy seguro, necesito asesoría</option>
            </select>
          </div>

          <div>
            <label class="form-label-b2b" for="presupuesto">Presupuesto estimado (Opcional)</label>
            <input type="text" id="presupuesto" name="presupuesto" class="input-b2b" placeholder="Ej. $1,500 - $5,000 USD" />
          </div>

          <div class="form-full">
            <label class="form-label-b2b" for="mensaje">Mensaje o detalle adicional</label>
            <textarea id="mensaje" name="mensaje" class="input-b2b" style="min-height: 90px;" placeholder="Cualquier detalle sobre los plazos o requerimientos especiales..."></textarea>
          </div>
        </div>

        <div style="margin-top: 2.5rem; text-align: center;">
          <button type="submit" class="btn btn-primary" style="width: 100%; max-width: 420px; padding: 1rem 2rem; font-size: 1rem;">
            Enviar Solicitud de Diagnóstico
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
