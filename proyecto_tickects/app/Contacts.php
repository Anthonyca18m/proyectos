<?php

namespace proyectoTickets;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Contacts extends Model
{
    use HasApiTokens, Notifiable;

    protected $table = 'contacts';

    protected $primaryKey = 'id_contacts'; 

    public $timestamps = false;

   
    protected $fillable = [
        'c_telephone', 
        'c_phone',
        'c_mail',
        'c_photo',
        'c_references',
        'c_address',
        'c_marital_status',
        'id_districts',
    ];

}
