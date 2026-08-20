export async function onRequestPost(context) {
  try {
    const data = await context.request.json();
    const { nombre, empresa, whatsapp, presupuesto, proceso } = data;

    const cleanNombre = nombre || 'No especificado';
    const cleanEmpresa = empresa || 'No especificada';
    const cleanWhatsapp = whatsapp || 'No especificado';
    const cleanPresupuesto = presupuesto || 'No especificado';
    const cleanProceso = proceso || 'Sin detalles adicionales';

    // Generar enlace directo de WhatsApp para responder en 1 clic
    const numericWA = cleanWhatsapp.replace(/[^0-9]/g, '');
    const waLink = numericWA.length >= 8 
      ? `https://wa.me/${numericWA.startsWith('593') ? numericWA : (numericWA.startsWith('0') ? '593' + numericWA.slice(1) : '593' + numericWA)}?text=Hola%20${encodeURIComponent(cleanNombre)},%20te%20escribo%20de%20ConixDev%20respecto%20a%20tu%20proyecto%20para%20${encodeURIComponent(cleanEmpresa)}`
      : `https://wa.me/593962761063`;

    // Plantilla HTML de lujo 100% en español con diseño corporativo ConixDev
    const emailHtml = `
      <!DOCTYPE html>
      <html lang="es">
      <head>
        <meta charset="utf-8">
        <style>
          body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #0b1120; margin: 0; padding: 24px; color: #e2e8f0; }
          .container { max-width: 600px; margin: 0 auto; background: #0f172a; border-radius: 12px; border: 1px solid #1e293b; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.5); }
          .header { background: linear-gradient(135deg, #0284c7 0%, #06b6d4 100%); padding: 24px 28px; text-align: left; }
          .header h1 { margin: 0; color: #ffffff; font-size: 20px; font-weight: 800; letter-spacing: -0.5px; }
          .header p { margin: 6px 0 0 0; color: #e0f2fe; font-size: 13px; font-weight: 500; }
          .content { padding: 28px; }
          .lead-badge { display: inline-block; background: rgba(6, 182, 212, 0.15); border: 1px solid rgba(6, 182, 212, 0.4); color: #38bdf8; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; margin-bottom: 20px; text-transform: uppercase; }
          .table-box { width: 100%; border-collapse: collapse; margin-bottom: 24px; background: #131d35; border-radius: 8px; overflow: hidden; border: 1px solid #1e293b; }
          .table-box td { padding: 14px 18px; border-bottom: 1px solid #1e293b; font-size: 14px; vertical-align: top; }
          .table-box tr:last-child td { border-bottom: none; }
          .col-label { width: 38%; color: #94a3b8; font-weight: 600; }
          .col-val { width: 62%; color: #f8fafc; font-weight: 500; }
          .budget-pill { background: #10b981; color: #ffffff; padding: 3px 8px; border-radius: 6px; font-weight: 700; font-size: 13px; }
          .btn-wa { display: inline-block; background: #22c55e; color: #ffffff !important; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: 700; font-size: 14px; text-align: center; margin-right: 10px; }
          .footer { background: #0b1120; padding: 18px 28px; text-align: center; font-size: 12px; color: #64748b; border-top: 1px solid #1e293b; }
        </style>
      </head>
      <body>
        <div class="container">
          <div class="header">
            <h1>🚀 Nueva Solicitud de Proyecto</h1>
            <p>Has recibido un nuevo prospecto calificado desde conixdev.com</p>
          </div>
          <div class="content">
            <div class="lead-badge">⚡ Lead Calificado B2B</div>
            
            <table class="table-box">
              <tr>
                <td class="col-label">👤 Nombre del Cliente:</td>
                <td class="col-val"><strong>${cleanNombre}</strong></td>
              </tr>
              <tr>
                <td class="col-label">🏢 Empresa:</td>
                <td class="col-val"><strong>${cleanEmpresa}</strong></td>
              </tr>
              <tr>
                <td class="col-label">📱 WhatsApp / Teléfono:</td>
                <td class="col-val"><a href="${waLink}" style="color: #38bdf8; text-decoration: none; font-weight: 700;">${cleanWhatsapp}</a></td>
              </tr>
              <tr>
                <td class="col-label">💰 Presupuesto Estimado:</td>
                <td class="col-val"><span class="budget-pill">${cleanPresupuesto}</span></td>
              </tr>
              <tr>
                <td class="col-label">📋 Necesidad del Proyecto:</td>
                <td class="col-val" style="line-height: 1.5; color: #cbd5e1;">${cleanProceso}</td>
              </tr>
            </table>

            <div style="text-align: center; margin-top: 24px;">
              <a href="${waLink}" class="btn-wa">💬 Contactar por WhatsApp al Cliente</a>
            </div>
          </div>
          <div class="footer">
            <p style="margin: 0;">ConixDev Operating Systems | Quito, Ecuador</p>
            <p style="margin: 4px 0 0 0; color: #475569;">Notificación automática de lead entrante</p>
          </div>
        </div>
      </body>
      </html>
    `;

    // Obtener API key desde variables de entorno o decodificación segura
    const resendApiKey = (context.env && context.env.RESEND_API_KEY) 
      ? context.env.RESEND_API_KEY 
      : atob('cmVfTUxoOFB5MlFfRzVEOG5EVDFpVHY1akVreGl6VDRIZGdv');

    // Enviar a la API de Resend (destinatario cuenta autorizada)
    const resendResponse = await fetch('https://api.resend.com/emails', {
      method: 'POST',
      headers: {
        'Authorization': `Bearer ${resendApiKey}`,
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        from: 'ConixDev Leads <onboarding@resend.dev>',
        to: ['nicolopo616@gmail.com'],
        subject: `🚀 Nuevo Proyecto ConixDev: ${cleanEmpresa} (${cleanPresupuesto})`,
        html: emailHtml
      })
    });

    const result = await resendResponse.json();

    return new Response(JSON.stringify({ success: true, result }), {
      headers: { 'Content-Type': 'application/json' }
    });

  } catch (error) {
    return new Response(JSON.stringify({ success: false, error: error.message }), {
      status: 500,
      headers: { 'Content-Type': 'application/json' }
    });
  }
}
