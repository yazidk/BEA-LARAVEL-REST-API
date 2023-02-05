<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiche_tenue_compte extends Model
{
    use HasFactory;

    protected $table = 'fiche_tenue_comptes';
    protected $fillable = [
        'compte_bancaire_num',
        'uploadImageFicheTenue',
      
    ];
    

}
