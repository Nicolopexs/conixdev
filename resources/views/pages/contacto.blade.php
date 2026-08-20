@extends('layouts.main')

@section('title', 'Contacto | ConixDev Software Empresarial')
@section('description', 'Ponte en contacto directo con ConixDev para desarrollo de software a medida, aplicaciones empresariales y consultas técnicas.')

@section('content')
<div class="page-banner">
  <div class="container">
    <div class="breadcrumb-nav">
      <a href="{{ url('/') }}">Inicio</a>
      <span>/</span>
      <span style="color: var(--text-primary);">Contacto</span>
    </div>
    <span class="badge-corp">Comunicación Directa</span>
    <h1 class="heading-xl text-gradient-white" style="margin-bottom: 1rem;">
      Contacto <span class="text-indigo">ConixDev</span>
    </h1>
    <p class="body-lead" style="max-width: 800px;">
      Trato directo con el desarrollador senior responsable de tu proyecto, sin intermediarios.
    </p>
  </div>
</div>

<section class="section-padding">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
      <div class="b2b-card" style="padding: 2.5rem;">
        <span class="card-tag">Atención Rápida</span>
        <h2 class="heading-md" style="margin-bottom: 1rem;">Canales de Contacto Directo</h2>
        
        <div style="display: flex; flex-direction: column; gap: 1.5rem; margin-top: 1.5rem;">
          <a href="https://wa.me/593991234567?text=Hola%20ConixDev,%20quisiera%20consultar%20sobre%20un%20proyecto" target="_blank" class="btn btn-secondary" style="justify-content: flex-start;">
            <span>💬 Chat Directo por WhatsApp (+593)</span>
          </a>

          <a href="mailto:contacto@conixdev.com" class="btn btn-secondary" style="justify-content: flex-start;">
            <span>✉️ contacto@conixdev.com</span>
          </a>

          <a href="https://linkedin.com" target="_blank" class="btn btn-secondary" style="justify-content: flex-start;">
            <span>🔗 Perfil Profesional en LinkedIn</span>
          </a>

          <a href="https://github.com/Nicolopexs" target="_blank" class="btn btn-secondary" style="justify-content: flex-start;">
            <span>💻 Repositorios GitHub</span>
          </a>
        </div>
      </div>

      <div class="b2b-card" style="padding: 2.5rem;">
        <span class="card-tag">¿Buscas un presupuesto?</span>
        <h2 class="heading-md" style="margin-bottom: 1rem;">Solicitud de Proyecto</h2>
        <p class="body-sm" style="margin-bottom: 2rem;">
          Si ya tienes identificados los requerimientos o el proceso que deseas digitalizar en tu empresa, te recomendamos usar nuestro portal de diagnóstico para evaluar la viabilidad y presupuesto.
        </p>

        <a href="{{ url('/diagnostico') }}" class="btn btn-primary" style="width: 100%;">
          Ir al Formulario de Diagnóstico →
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
