<?php

namespace proyectoTickets;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Persons extends Model
{
    //
    use HasApiTokens, Notifiable;

    protected $table = 'persons';

    protected $primaryKey = 'id_persons'; 

    protected $fillable = [
        'p_name',
        'p_paterno',
        'p_materno',
        'p_document',
        'p_date_birth',
        'p_gender',
        'p_age',
        'id_document_types',
        'id_contacts',
        'id_account',
        'id_states',
        'user_register'
    ];
    const CREATED_AT = 'fec_register'; 

    const UPDATED_AT = null;// con esto no utilizamos esta columna innecesaria
    
    
    protected $casts = [
        // 'fec_register' => 'datetime',
    ];
}
