<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Letter_dispotition extends Model
{
    use HasFactory;
    protected $table = 'letter_dispotition';
    protected $fillable = [
        'letter_id',
        'dispotition_id',
        'recipient_id',
        'description',
        'recipient_status',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    
}
