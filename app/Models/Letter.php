<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;
    protected $table = 'letter';
    protected $guarded = [];
    // protected $fillable = [
    //     'day',
    //     'date',
    //     'no_letter',
    //     'document',
    //     'dispotition_status',
    // ];
}
