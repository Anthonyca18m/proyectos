<?php

namespace proyectoTickets;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Sesions extends Model
{
    //
    use HasApiTokens, Notifiable;

    protected $table = 'sesions';

    protected $fillable = [
        'email',
        'equipo',
        'visitor' 
    ];
    
}
