<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Contact;

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

        $contact = Contact::create([
            'nama'        => $request->nama,
            'email'       => $request->email,
            'perusahaan'  => $request->perusahaan,
            'telepon'     => $request->telepon,
            'pesan'       => $request->pesan,
        ]);

        Mail::to('frhnaldiin@gmail.com')->send(new ContactMail([
            'nama'        => $contact->nama,
            'email'       => $contact->email,
            'perusahaan'  => $contact->perusahaan,
            'telepon'     => $contact->telepon,
            'pesan'       => $contact->pesan,
        ]));

        return back()->with('success', 'Pesan kamu sudah terkirim dan tersimpan!');
    }
}
