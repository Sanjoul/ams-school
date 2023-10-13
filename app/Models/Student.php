<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $hidden=[
        'id',

    ];
    protected $fillable =[
        'roll_no',
        'name',
        'email',
        'grade_id',
        'status'

    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
