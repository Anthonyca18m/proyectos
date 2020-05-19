<?php

namespace proyectoTickets;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class AccountTypes extends Model
{
    use HasApiTokens, Notifiable;

    protected $table = 'account_types';

    protected $primaryKey = 'id_account_types'; 

    public $timestamps = false;
   
    protected $fillable = [
        'at_description', 
        'id_states'
    ];
}
