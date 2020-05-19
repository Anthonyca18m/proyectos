<?php

namespace proyectoTickets;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Provinces extends Model
{
    //
    use HasApiTokens, Notifiable;

    protected $table = 'provinces';

    protected $primaryKey = 'id_provinces'; 

    protected $keyType = 'string'; 

    public $incrementing = false; // por si las moscas

    public $timestamps = false;

    protected $fillable = [
        'd_name',
        'id_departments'
    ];
    
}
