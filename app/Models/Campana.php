<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campana extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $table = 'campanas';

    protected $guarded = [];

    protected $fillable = ['namecampana','gruposid','email','asunto','contenido'];


     /**
    * Run the migrations.
    *
    * @return void
    */
    public function grupos()
    {
        return $this->belongsTo(Grupo::class);
    }

}
