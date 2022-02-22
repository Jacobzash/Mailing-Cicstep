<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    use HasFactory;

    public $timestamps = true;

    protected $table = 'contactos';

    protected $guarded = [];

    protected $fillable = [
        'namecontacto',
        'lastnamecontacto',
        'email',
        'phonecontacto',
        'gruposid'];




     /**
    * Run the migrations.
    *
    * @return void
    */
    public function grupos()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('namecontacto', 'like', $term)
                ->orWhere('lastnamecontacto', 'like', $term)
                ->orWhere('email', 'like', $term)
                ->orWhere('phonecontacto', 'like', $term)
                ->orWhereHas('Grupo', function ($query) use ($term) {
                    $query->where('namegrupo', 'like', $term);
                });
        });
    }
}


