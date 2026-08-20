@extends('layouts.main')

@section('title', 'Solicitar Propuesta de Proyecto | ConixDev')
@section('description', 'Ponte en contacto con ConixDev para solicitar una propuesta de proyecto.')

@section('content')
<section style="padding-top: 6.5rem; padding-bottom: 1rem;">
  <div class="container text-center">
    <span class="trust-badge" style="margin-bottom: 0.5rem;">Solicitud de Propuesta</span>
    <h1 class="title-hero" style="margin-bottom: 0; font-size: clamp(2.2rem, 4.5vw, 3.6rem);">
      Cuéntanos tu <span class="text-gradient">Proyecto</span>
    </h1>
  </div>
</section>

<section style="padding-bottom: 3.5rem; padding-top: 1rem;">
  <div class="container">
    <div class="contact-simple-card" style="margin-top: 0;">
      <div id="contactSuccessAlert" style="display: none; background: rgba(6, 182, 212, 0.15); border: 1px solid rgba(6, 182, 212, 0.3); color: var(--brand-cyan-glow); padding: 1.25rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem; text-align: center; font-weight: 600;">
        ✔ ¡Propuesta solicitada con éxito! Analizaremos tus datos y te contactaremos.
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
          <label class="form-label-simple" for="proceso_mejorar">Cuéntanos brevemente qué necesitas *</label>
          <textarea id="proceso_mejorar" name="proceso_mejorar" class="form-input-simple" placeholder="Ej. Queremos controlar las visitas de nuestro personal de campo con geolocalización..." required></textarea>
        </div>

        <div style="margin-top: 1.5rem; text-align: center;">
          <button type="submit" class="btn-action btn-primary-glow" style="width: 100%; font-size: 1rem;">
            Solicitar Propuesta
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
