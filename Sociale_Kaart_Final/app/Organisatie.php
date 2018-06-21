<?php

namespace SocialeKaart;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Organisatie extends Model
{
    use Notifiable;

    public $timestamps = false;
    public $primaryKey = 'organisatie_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'organisatie_id','naam', 'adres', 'contactpersoon', 'gemeente', 'telefoonnummer', 'beschrijving'
    ];
}
