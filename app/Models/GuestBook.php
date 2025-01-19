<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GuestBook extends Model
{
    use HasFactory; // menggunakan factory

    protected $table = 'guest_book'; // nama table

    protected $fillable = ['name', 'email', 'message']; // kolom yang boleh diisi
}
