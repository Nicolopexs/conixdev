@extends('layouts.main')

@section('title', 'Solicitar Propuesta de Proyecto | ConixDev')
@section('description', 'Cuéntanos tu proyecto y evaluaremos la solución tecnológica más adecuada para tu empresa.')

@section('content')
<section style="padding-top: 8.5rem; padding-bottom: 3.5rem; background: linear-gradient(180deg, rgba(14, 22, 38, 0.8) 0%, rgba(7, 9, 18, 0) 100%);">
  <div class="container text-center">
    <span class="trust-badge">Solicitud de Propuesta</span>
    <h1 class="title-hero" style="margin-bottom: 1rem;">
      Cuéntanos tu <span class="text-gradient">Proyecto</span>
    </h1>
    <p style="font-size: 1.2rem; color: var(--text-muted); max-width: 750px; margin: 0 auto;">
      Analizamos los requerimientos de tu empresa y te proponemos la solución tecnológica más eficiente.
    </p>
  </div>
</section>

<section class="section-spacing">
  <div class="container">
    <div class="contact-simple-card">
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
          <input type="text" id="whatsapp" name="whatsapp" class="form-input-simple" placeholder="Ej. +593 99 123 4567 o correo@empresa.com" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="proceso_mejorar">Cuéntanos brevemente qué necesitas o deseas mejorar *</label>
          <textarea id="proceso_mejorar" name="proceso_mejorar" class="form-input-simple" placeholder="Ej. Queremos controlar las visitas de nuestro personal de campo con geolocalización..." required></textarea>
        </div>

        <div style="margin-top: 2rem; text-align: center;">
          <button type="submit" class="btn-action btn-primary-glow" style="width: 100%; font-size: 1rem;">
            Solicitar Propuesta a ConixDev
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
