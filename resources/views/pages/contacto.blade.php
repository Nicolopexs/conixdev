@extends('layouts.main')

@section('title', 'Contacto | ConixDev')
@section('description', 'Contactar a ConixDev es ridículamente fácil. Cuéntanos tu proyecto y nos pondremos en contacto contigo a la brevedad.')

@section('content')
<section style="padding-top: 8.5rem; padding-bottom: 3.5rem; background: linear-gradient(180deg, rgba(14, 22, 38, 0.8) 0%, rgba(7, 9, 18, 0) 100%);">
  <div class="container text-center">
    <span class="trust-badge">Contacto Directo</span>
    <h1 class="title-hero" style="margin-bottom: 1rem;">
      Hablar con <span class="text-gradient">ConixDev</span>
    </h1>
    <p style="font-size: 1.2rem; color: var(--text-muted); max-width: 700px; margin: 0 auto;">
      Sin intermediarios ni formularios de 15 preguntas. Cuéntanos qué necesitas y responderemos a la brevedad.
    </p>
  </div>
</section>

<section class="section-spacing">
  <div class="container">
    <div class="contact-simple-card">
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
        <a href="https://wa.me/593991234567?text=Hola%20ConixDev,%20quisiera%20consultar%20sobre%20un%20proyecto%20de%20software" target="_blank" style="color: var(--brand-cyan-glow); font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
          <span>💬 O si prefieres, escríbenos directamente por WhatsApp</span>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
