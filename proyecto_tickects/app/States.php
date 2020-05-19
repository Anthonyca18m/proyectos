<?php

namespace proyectoTickets;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class States extends Model
{
    
    use HasApiTokens, Notifiable;

    protected $table = 'states';

    protected $primaryKey = 'id_states'; 

    public $timestamps = false;

    protected $fillable = [
        's_descripcion', 
    ];
}
