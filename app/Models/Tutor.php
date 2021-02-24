<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    
    protected $fillable = ['empresa', 'tipus_document', 'document_identitat', 'nom', 'primer_llinatge', 'segon_llinatge', 'pais_document_identitat', 'provincia', 'municipi', 'estat', 'telefon', 'email'];
}
