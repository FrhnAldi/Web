<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nama;
    public $email;
    public $perusahaan;
    public $telepon;
    public $pesan;

    public function __construct($details)
    {
        $this->nama = $details['nama'];
        $this->email = $details['email'];
        $this->perusahaan = $details['perusahaan'] ?? null;
        $this->telepon = $details['telepon'] ?? null;
        $this->pesan = $details['pesan'];
    }

    public function build()
    {
        return $this->subject('Pesan Baru dari Form Kontak')
                    ->view('emails.contact');
    }
}
