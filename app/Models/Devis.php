<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;

    protected $table ="devis";
   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    public function animal(){

        return $this->belongsTo(Animal::class);
    }

    public function formule(){

        return $this->belongsTo(Formule::class);
    }
}
