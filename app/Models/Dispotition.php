<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispotition extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'dispotition';
    protected $fillable = [
        'code',
        'name',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'code' => [
                'source' => ['name','id']
            ]
        ];
    }
}
