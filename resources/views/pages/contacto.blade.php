@extends('layouts.main')

@section('title', 'Contacto | ConixDev')
@section('description', 'Ponte en contacto directo con ConixDev para tu proyecto de software empresarial.')

@section('content')
<section style="padding-top: 6.5rem; padding-bottom: 1rem;">
  <div class="container text-center">
    <span class="trust-badge" style="margin-bottom: 0.5rem;">Contacto Directo</span>
    <h1 class="title-hero" style="margin-bottom: 0; font-size: clamp(2.2rem, 4.5vw, 3.6rem);">
      Hablar con <span class="text-gradient">ConixDev</span>
    </h1>
  </div>
</section>

<section style="padding-bottom: 3.5rem; padding-top: 1rem;">
  <div class="container">
    <div class="contact-simple-card" style="margin-top: 0;">
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
          <input type="text" id="whatsapp" name="whatsapp" class="form-input-simple" placeholder="Ej. +593 96 276 1063 o correo@empresa.com" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="proceso_mejorar">Cuéntanos brevemente qué necesitas *</label>
          <textarea id="proceso_mejorar" name="proceso_mejorar" class="form-input-simple" placeholder="Ej. Queremos controlar las visitas de nuestro personal de campo con geolocalización..." required></textarea>
        </div>

        <div style="margin-top: 1.5rem; text-align: center;">
          <button type="submit" class="btn-action btn-primary-glow" style="width: 100%; font-size: 1rem;">
            Enviar Mensaje
          </button>
        </div>
      </form>

      <div style="margin-top: 1.5rem; text-align: center; border-top: 1px solid var(--border-subtle); padding-top: 1.25rem;">
        <a href="https://wa.me/593962761063?text=Hola%20ConixDev,%20quisiera%20consultar%20sobre%20un%20proyecto%20de%20software" target="_blank" class="btn-whatsapp-brand">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="#25D366" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.461c-1.854 0-3.674-.497-5.263-1.442l-.377-.225-3.916 1.027 1.045-3.819-.247-.393c-1.038-1.652-1.587-3.585-1.587-5.566 0-5.74 4.671-10.411 10.413-10.411 2.781 0 5.397 1.082 7.362 3.049 1.964 1.966 3.045 4.582 3.045 7.363 0 5.742-4.671 10.417-10.475 10.417M12.051 0C5.395 0 0 5.393 0 12.05c0 2.128.556 4.204 1.614 6.035L0 24l6.097-1.599c1.764.962 3.753 1.47 5.952 1.47 6.657 0 12.051-5.395 12.051-12.052C24.1 5.393 18.707 0 12.051 0z"/>
          </svg>
          <span>WhatsApp Directo: +593 96 276 1063</span>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
