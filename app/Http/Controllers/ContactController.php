<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Procesa la solicitud de diagnóstico empresarial de ConixDev.
     */
    public function submitDiagnostico(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'empresa' => 'required|string|max:120',
            'pais' => 'required|string|max:80',
            'email' => 'required|email|max:150',
            'whatsapp' => 'required|string|max:30',
            'tipo_empresa' => 'required|string|max:100',
            'proceso_mejorar' => 'required|string|max:500',
            'usuarios_estimados' => 'required|string|max:50',
            'tipo_solucion' => 'required|string|max:100',
            'presupuesto' => 'nullable|string|max:100',
            'mensaje' => 'nullable|string|max:1000',
        ]);

        // Aquí se puede procesar el envío por Mail, Telegram, WhatsApp o guardar en BD.

        return response()->json([
            'status' => 'success',
            'message' => '¡Diagnóstico recibido con éxito! Analizaré tu solicitud y me pondré en contacto contigo en menos de 24 horas.'
        ]);
    }
}
