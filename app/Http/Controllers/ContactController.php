<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'perusahaan' => 'nullable|string|max:150',
            'telepon' => 'nullable|string|max:30',
            'pesan' => 'required|string|max:2000',
        ]);

        $recaptchaResponse = $request->input('g-recaptcha-response');

        if (app()->environment('local')) {
            $response = Http::withoutVerifying()->asForm()->post(
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'secret'   => env('RECAPTCHA_SECRET_KEY'),
                    'response' => $recaptchaResponse,
                ]
            );
        } else {
            $response = Http::asForm()->post(
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'secret'   => env('RECAPTCHA_SECRET_KEY'),
                    'response' => $recaptchaResponse,
                ]
            );
        }

        $result = $response->json();

        if (!($result['success'] ?? false)) {
            return back()->withErrors(['captcha' => 'Verifikasi reCAPTCHA gagal.'])->withInput();
        }

        return back()->with('success', 'Pesan kamu sudah terkirim! (Tanpa simpan & tanpa email)');
    }
}
