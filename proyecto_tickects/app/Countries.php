<?php

namespace proyectoTickets;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Countries extends Model
{
    use HasApiTokens, Notifiable;

    protected $table = 'countries';

    protected $primaryKey = 'id_countries'; 

    protected $keyType = 'string'; 

    public $incrementing = false; // por si las moscas

    public $timestamps = false;
    
    protected $fillable = [
        'c_name'
    ];
}
