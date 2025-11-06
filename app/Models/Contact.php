<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    use HasFactory; // ✅ tambahkan trait ini (standar Laravel 8+)

    // Nama tabel (opsional, jika pakai nama default "contacts" bisa dihapus)
    protected $table = 'contacts';

    // ✅ Field yang boleh diisi (harus sama dengan kolom di database)
    protected $fillable = [
        'nama',
        'email',
        'perusahaan',
        'telepon',
        'pesan',
    ];
}
