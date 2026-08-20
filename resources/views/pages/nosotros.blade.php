@extends('layouts.main')

@section('title', 'Sobre ConixDev | Filosofía de Desarrollo & Creador')
@section('description', 'Conoce la filosofía de software de ConixDev: soluciones a medida diseñadas exclusivamente alrededor de la operación real de cada empresa.')

@section('content')
<div class="page-banner">
  <div class="container">
    <div class="breadcrumb-nav">
      <a href="{{ url('/') }}">Inicio</a>
      <span>/</span>
      <span style="color: var(--text-primary);">Sobre ConixDev</span>
    </div>
    <span class="badge-corp">Filosofía & Desarrollo Senior</span>
    <h1 class="heading-xl text-gradient-white" style="margin-bottom: 1rem;">
      Soy el creador de <span class="text-indigo">ConixDev</span>
    </h1>
    <p class="body-lead" style="max-width: 800px;">
      Desarrollador de soluciones tecnológicas enfocado en analizar problemas operativos complejos y transformarlos en plataformas eficientes.
    </p>
  </div>
</div>

<section class="section-padding">
  <div class="container">
    <div class="wizard-card" style="margin: 0 auto 3rem;">
      <h2 class="heading-md" style="margin-bottom: 1.25rem;">Mi Enfoque de Trabajo</h2>
      <p class="body-lead" style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
        Me especializo en convertir ideas y problemas empresariales en aplicaciones funcionales. Mi objetivo es ayudar a las empresas a dejar atrás los procesos manuales y trabajar con herramientas creadas específicamente para su realidad.
      </p>

      <p style="font-size: 0.95rem; color: var(--brand-indigo-light); font-weight: 600; margin-bottom: 2rem;">
        📍 Opero desde Ecuador atendiendo proyectos para empresas nacionales e internacionales.
      </p>

      <div style="border-top: 1px solid var(--border-subtle); padding-top: 2rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1.5rem;">
        <div>
          <strong style="font-size: 1.1rem; color: var(--text-primary); display: block;">Nico López // ConixDev</strong>
          <span style="color: var(--text-secondary); font-size: 0.9rem;">Desarrollador Senior de Software Empresarial</span>
        </div>
        <div style="display: flex; gap: 1rem;">
          <a href="https://linkedin.com" target="_blank" class="btn btn-secondary">LinkedIn Profile</a>
          <a href="https://github.com/Nicolopexs" target="_blank" class="btn btn-secondary">GitHub Repos</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
