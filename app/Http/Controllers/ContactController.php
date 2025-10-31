<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi dasar
        $data = $request->validate([
            'name'    => 'required|string|max:120',
            'email'   => 'required|email',
            'company' => 'nullable|string|max:160',
            'phone'   => 'nullable|string|max:60',
            'message' => 'required|string|min:10',
            'g-recaptcha-response' => 'required',
        ], [
            'g-recaptcha-response.required' => 'Silakan centang reCAPTCHA.',
        ]);

        // Verifikasi reCAPTCHA ke Google
        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret'   => env('RECAPTCHA_SECRET'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]
        );

        $verified = (bool) data_get($response->json(), 'success');

        if (! $verified) {
            return back()
                ->withErrors(['recaptcha' => 'Verifikasi reCAPTCHA gagal. Coba lagi.'])
                ->withInput();
        }

        // Tidak simpan ke DB; cukup tampilkan pesan sukses
        return back()->with('ok', 'Terima kasih! Pesan kamu sudah kami terima.');
    }
}