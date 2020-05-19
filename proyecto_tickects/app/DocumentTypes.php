<?php

namespace proyectoTickets;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class DocumentTypes extends Model
{
    //
    use HasApiTokens, Notifiable;

    protected $table = 'document_types';

    protected $primaryKey = 'id_document_types'; 

    public $timestamps = false;

    protected $fillable = [
        'dt_description',
        'id_states'
    ];
}
