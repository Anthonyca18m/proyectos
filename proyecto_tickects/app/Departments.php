<?php

namespace proyectoTickets;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Departments extends Model
{
    
    use HasApiTokens, Notifiable;

    protected $table = 'departments';

    protected $primaryKey = 'id_departments'; 

    protected $keyType = 'string'; 

    public $incrementing = false; // por si las moscas

    public $timestamps = false;

    protected $fillable = [
        'd_name', 
        'id_countries'
    ];
}
