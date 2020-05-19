<?php

namespace proyectoTickets;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Districts extends Model
{
    //
    use HasApiTokens, Notifiable;

    protected $table = 'districts';

    protected $primaryKey = 'id_districts'; 

    protected $keyType = 'string'; 

    public $incrementing = false; // por si las moscas

    public $timestamps = false;

    protected $fillable = [
        'd_name',
        'id_provinces'
    ];
}
